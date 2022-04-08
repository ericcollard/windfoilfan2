@extends('layouts.vertical')

@section('script-head')
    <x-head.tinymce-config/>
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
                    <h4 class="page-title">{{ __('Create review') }} {{ __('for') }} {{ $review->device->name }}</h4>
                @else
                    <h4 class="page-title">{{ __('Edit review') }} ref {{ $review->id }} {{ __('for') }} {{ $review->device->name }}</h4>
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
                            <div class="col-lg-3  mb-2">
                                <label for="title" class="form-label">{{ __('Title') }}</label>
                                <input type="text" class="form-control" id="title" name="title"
                                       value="{{ $review->title ? $review->title : old('title') }}"/>
                            </div>
                            @can('edit-admin-data',Auth::user())
                                <div class="col-lg-3  mb-2">
                                    <label for="device_id" class="form-label">{{ __('device_id') }}*</label>
                                    <input type="text" class="form-control" id="device_id" name="device_id"
                                           value="{{ $review->device_id ? $review->device_id : old('device_id') }}" required />
                                </div>
                                <div class="col-lg-3  mb-2">
                                    <label for="user_id" class="form-label">{{ __('user_id') }}*</label>
                                    <input type="text" class="form-control" id="user_id" name="user_id"
                                           value="{{ $review->user_id ? $review->user_id : old('user_id') }}" required />
                                </div>
                            @else
                                <input type="hidden" id="device_id" name="device_id" value={{ $review->device_id }}>
                                <input type="hidden" id="user_id" name="user_id" value={{ $review->user_id }}>
                            @endcan

                            @if ($method !== 'POST')
                                <div class="col-lg-3  mb-2">
                                    <label for="created_at" class="form-label">{{ __('Created at') }}*</label>
                                    <input type="text" class="form-control" id="created_at" name="created_at"
                                           value="{{ $review->created_at ? $review->created_at : old('created_at') }}" required @cannot('edit-admin-data',Auth::user()) readonly @endcannot/>
                                </div>
                            @endif
                        </div>


                        <div class="row">
                            <div class="col-lg-12  mb-3">
                                <label for="body">{{ __('Comments') }}*</label>
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
