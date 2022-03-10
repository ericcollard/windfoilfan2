@extends('layouts.vertical', ["page_title"=> __('Edit review')])

@section('page_title')
    {{  __('Edit review') }}
@endsection
@section('page_description')
    {{  __('Edit review') }}
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
            height: 800,
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
                        <li class="breadcrumb-item"><a href="{{ route('device.categories') }}">{{ __('Devices') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ $review->device->path() }}">{{ $review->device->name }}</a></li>
                        <li class="breadcrumb-item">{{ __('Review') }}</li>
                        @if ($method === 'POST')
                            <li class="breadcrumb-item active">{{ __('Create') }}</li>
                        @else
                            <li class="breadcrumb-item active">{{ __('Edit') }}</li>
                        @endif

                    </ol>
                </div>
                @if ($method === 'POST')
                    <h4 class="page-title">{{ __('Create review') }}</h4>
                @else
                    <h4 class="page-title">{{ __('Edit review') }} ref {{ $review->id }} for {{ $review->device->name }}</h4>
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
                        <input type="hidden" id="id" name="id" value={{ $review->id }}>

                        <div class="row">
                            <div class="col-lg-4  mb-3">
                                <label for="title" class="form-label">{{ __('Title') }}*</label>
                                <input type="text" class="form-control" id="title" name="title"
                                       value="{{ $review->title ? $review->title : old('title') }}" required/>
                            </div>
                            <div class="col-lg-4  mb-3">
                                <label for="device_id" class="form-label">{{ __('device_id') }}*</label>
                                <input type="text" class="form-control" id="device_id" name="device_id"
                                       value="{{ $review->device_id ? $review->device_id : old('device_id') }}" required/>
                            </div>
                            <div class="col-lg-4  mb-3">
                                <label for="user_id" class="form-label">{{ __('user_id') }}*</label>
                                <input type="text" class="form-control" id="user_id" name="user_id"
                                       value="{{ $review->user_id ? $review->user_id : old('user_id') }}" required/>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12  mb-3">
                                <label for="body">{{ __('Comments') }}</label>
                                <textarea id="body" name="body" >{!!  $review->body ?  $review->body : old('body') !!}</textarea>
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
