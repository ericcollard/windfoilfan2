@extends('layouts.vertical', ["page_title"=> __('Edit technical data')])

@section('page_title')
    {{  __('Edit technical data') }}
@endsection
@section('page_description')
    {{  __('Edit technical data') }}
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
                        <li class="breadcrumb-item"><a href="{{ route('device.categories') }}">{{ __('Devices') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ $technicaldata->device->path() }}">{{ $technicaldata->device->name }}</a></li>
                        <li class="breadcrumb-item">{{ __('Technical data') }}</li>
                        @if ($method === 'POST')
                            <li class="breadcrumb-item active">{{ __('Create') }}</li>
                        @else
                            <li class="breadcrumb-item"><a href="{{ route('technicaldata.show',$technicaldata) }}">{{ $technicaldata->id }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Edit') }}</li>
                        @endif

                    </ol>
                </div>
                @if ($method === 'POST')
                    <h4 class="page-title">{{ __('Create technical data') }}</h4>
                @else
                    <h4 class="page-title">{{ __('Edit technical data') }} ref {{ $technicaldata->id }} for {{ $technicaldata->device->name }}</h4>
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
                        <input type="hidden" id="id" name="id" value={{ $technicaldata->id }}>

                        <div class="row">
                            <div class="col-lg-4  mb-3">
                                <label for="device_id" class="form-label">{{ __('device_id') }}*</label>
                                <input type="text" class="form-control" id="device_id" name="device_id"
                                       value="{{ $technicaldata->device_id ? $technicaldata->device_id : old('device_id') }}" required/>
                            </div>
                            <div class="col-lg-4  mb-3">
                                <label for="serial" class="form-label">{{ __('Serial number') }}</label>
                                <input type="text" class="form-control" id="serial" name="serial"
                                       value="{{ $technicaldata->serial ? $technicaldata->serial : old('serial') }}" />
                            </div>
                        </div>

                        @foreach ($attributes as $group => $attributeGroup)
                            <div class="row">
                                @if ($group !='structural_result_group')
                                    <div class="h5">{{ __($group) }}</div>

                                    @foreach ($attributeGroup as $attribute)
                                        @if ( ! in_array($attribute->slug, ['flex_module','tors_module','flex_thickness_coef']))
                                            <div class="col-lg-3  mb-4">
                                                <label for="{{ $attribute->field }}">{{ __($attribute->slug) }} ({{ __($attribute->unit) }}):</label>
                                                <input type="text" class="form-control" id="{{ $attribute->field }}" name="{{ $attribute->field }}"
                                                       value="{{ $technicaldata->{$attribute->field} ? $technicaldata->{$attribute->field} : old($attribute->field) }}" > </input>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        @endforeach


                        <div class="row">
                            <div class="col-lg-12  mb-3">
                                <label for="body">{{ __('Comments') }}</label>
                                <textarea id="body" name="body" >{!!  $technicaldata->body ?  $technicaldata->body : old('body') !!}</textarea>
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
