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
    @include('layouts.shared.tinymcescript')
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
                    <h4 class="page-title">{{ __('Add a technical data set') }} for {{ $technicaldata->device->name }}</h4>
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
                            <div class="col-lg-3  mb-3">
                                <label for="device_id" class="form-label">{{ __('device_id') }}*</label>
                                <input type="text" class="form-control" id="device_id" name="device_id"
                                       value="{{ $technicaldata->device_id ? $technicaldata->device_id : old('device_id') }}" required @cannot('edit-admin-data',Auth::user()) readonly @endcannot/>
                            </div>
                            <div class="col-lg-3  mb-3">
                                <label for="user_id" class="form-label">{{ __('user_id') }}*</label>
                                <input type="text" class="form-control" id="user_id" name="user_id"
                                       value="{{ $technicaldata->user_id ? $technicaldata->user_id : old('user_id') }}" required @cannot('edit-admin-data',Auth::user()) readonly @endcannot/>
                            </div>
                            <div class="col-lg-3  mb-3">
                                <label for="serial" class="form-label">{{ __('Serial number') }}</label>
                                <input type="text" class="form-control" id="serial" name="serial"
                                       value="{{ $technicaldata->serial ? $technicaldata->serial : old('serial') }}" />
                            </div>
                            @if ($method !== 'POST')
                                <div class="col-lg-3  mb-3">
                                    <label for="created_at" class="form-label">{{ __('created_at') }}</label>
                                    <input type="text" class="form-control" id="created_at" name="created_at"
                                           value="{{ $technicaldata->created_at ? $technicaldata->created_at : old('created_at') }}" @cannot('edit-admin-data',Auth::user()) readonly @endcannot/>
                                </div>
                            @endif
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
