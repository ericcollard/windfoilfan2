@extends('layouts.vertical', ["page_title"=> __('Edit post')])

@section('page_title')
    {{  __('Edit list') }}
@endsection
@section('page_description')
    {{  __('Edit list') }}
@endsection
@section('page_image')
@endsection
@section('page_author')
    Glissattitude
@endsection

@section('script-head')
    <script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: 'textarea#body',
            relative_urls: false,
            height: 400,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            image_class_list: [
                {title: 'Fluid', value: 'cms-img-fluid'},
                {title: 'Fixed', value: ''},
            ],
            file_picker_callback : function(callback, value, meta) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                if (meta.filetype == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.openUrl({
                    url : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no",
                    onMessage: (api, message) => {
                        callback(message.content);
                    }
                });
            }
        };




        tinymce.init(editor_config);

    </script>
@endsection

@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Windfoilfan</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('post.categories') }}">{{ __('Posts') }}</a></li>
                        @if ($method === 'POST')
                            <li class="breadcrumb-item active">{{ __('Create') }}</li>
                        @else
                            <li class="breadcrumb-item"><a href="#">{{ $post->title }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Edit') }}</li>
                        @endif

                    </ol>
                </div>
                @if ($method === 'POST')
                    <h4 class="page-title">{{ __('Create post') }}</h4>
                @else
                    <h4 class="page-title">{{ __('Edit post') }} : <b>{{ $post->title }}</h4>
                @endif

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <form method="POST" action="{{ $action }}">
                        {{ csrf_field() }}
                        {{ method_field($method) }}
                        <input type="hidden" id="id" name="id" value={{ $post->id }}>
                        <input type="hidden" id="user_id" name="user_id" value={{ $post->owner->id }}>

                        <div class="row">
                            <div class="col-lg-4  mb-3">
                                <label for="title" class="form-label">{{ __('Title') }}*</label>
                                <input type="text" class="form-control" id="title" name="title"
                                       value="{{ $post->title ? $post->title : old('title') }}" required/>
                            </div>

                            <div class="col-lg-4  mb-3">
                                <label for="post_categories_id" class="form-label">{{ __('Post category') }}*</label>
                                <select name="post_categories_id" id="post_categories_id" class="form-control" required>
                                        <option value="">{{ __('Choose a category') }} ...</option>
                                        @foreach($categories as $category)
                                            <option value='{{ $category->id }}' {{ $post->post_categories_id ? ($post->post_categories_id == $category->id ? 'selected' : '') : ( old('post_categories_id') == $category->id ? 'selected' : '') }}>{{ $category->name }}</option>
                                        @endforeach
                                </select>
                            </div>
                            @if ($method !== 'POST')
                                <div class="col-lg-4  mb-3">
                                    <label for="created_at" class="form-label">{{ __('Created at') }}</label>
                                    <input type="text" class="form-control" id="created_at" name="created_at"
                                           value="{{ $post->created_at ? $post->created_at : old('created_at') }}" @cannot('edit-admin-data',Auth::user()) readonly @endcannot/>
                                </div>
                            @endif


                        </div>

                        <div class="row">
                            <div class="col-lg-12  mb-3">
                                <label for="description">{{ __('Description') }}*</label>
                                <input type="text" class="form-control" id="description" name="description"
                                       value="{{ $post->description ? $post->description : old('description') }}" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12  mb-3">
                                <label for="body">{{ __('body') }}*</label>
                                <textarea id="body" name="body" >{!!  $post->body ?  $post->body : old('body') !!}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <button id="btn_submit" type="submit" class="btn btn-primary rounded-pill">{{ __('Save') }}</button>
                        </div>

                        @if (count($errors))
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </form>


                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->


</div> <!-- container -->
@endsection


@section('script-bottom')


@endsection
