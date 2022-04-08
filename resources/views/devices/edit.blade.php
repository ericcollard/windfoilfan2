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
                        @if ($method === 'POST')
                            <li class="breadcrumb-item active">{{ __('Create') }}</li>
                        @else
                            <li class="breadcrumb-item"><a href="{{ $device->path() }}">{{ $device->name }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Edit') }}</li>
                        @endif

                    </ol>
                </div>
                @if ($method === 'POST')
                    <h4 class="page-title">{{ __('Create device') }}</h4>
                @else
                    <h4 class="page-title">{{ __('Edit device') }} : <b>{{ $device->name }}</h4>
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
                        <input type="hidden" id="id" name="id" value={{ $device->id }}>
                        <input type="hidden" id="user_id" name="user_id" value={{ $device->user_id }}>

                        <div class="row">
                            <div class="col-lg-4  mb-3">
                                <label for="name" class="form-label">{{ __('Name') }}*</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="{{ $device->name ? $device->name : old('name') }}" required/>
                            </div>
                            <div class="col-lg-2  mb-3">
                                <label for="year" class="form-label">{{ __('Year') }}</label>
                                <input type="text" class="form-control" id="year" name="year"
                                       value="{{ $device->year ? $device->year : old('year') }}"/>
                            </div>

                            <div class="col-lg-3  mb-3">
                                <label for="category_id" class="form-label">{{ __('Device category') }}*</label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                        <option value="">{{ __('Choose a category') }} ...</option>
                                        @foreach($categories as $category)
                                            <option value='{{ $category->id }}' {{ $device->category_id ? ($device->category_id == $category->id ? 'selected' : '') : ( old('category_id') == $category->id ? 'selected' : '') }}>{{ $category->name }}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="col-lg-3  mb-3">
                                <label for="brand_id" class="form-label">{{ __('Brand') }}*</label>
                                <select name="brand_id" id="brand_id" class="form-control" required>
                                    <option value="">{{ __('Choose a brand') }} ...</option>
                                    @foreach($brands as $brand)
                                        <option value='{{ $brand->id }}' {{ $device->brand_id ? ($device->brand_id == $brand->id ? 'selected' : '') : ( old('brand_id') == $brand->id ? 'selected' : '') }}>{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4  mb-3">
                                <label for="link_test">{{ __('link_test') }}</label>
                                <input type="text" class="form-control" id="link_test" name="link_test" value="{{ $device->link_test ? $device->link_test : old('link_test') }}"></input>
                            </div>
                            <div class="col-lg-4  mb-3">
                                <label for="link_presentation">{{ __('link_presentation') }}</label>
                                <input type="text" class="form-control" id="link_presentation" name="link_presentation" value="{{ $device->link_presentation ? $device->link_presentation : old('link_presentation') }}" ></input>
                            </div>
                            <div class="col-lg-4  mb-3">
                                <label for="link_product">{{ __('link_product') }}</label>
                                <input type="text" class="form-control" id="link_product" name="link_product" value="{{ $device->link_product ? $device->link_product : old('link_product') }}" ></input>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-3  mb-3">
                                <label for="price">{{ __('Price') }}</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ $device->price ? $device->price : old('price') }}" ></input>
                            </div>
                            <div class="col-lg-2  mb-3">
                                <label for="programme_start">{{ __('programme_start') }}</label>
                                <input type="text" class="form-control" id="programme_start" name="programme_start" value="{{ $device->programme_start ? $device->programme_start : old('programme_start') }}" ></input>
                            </div>
                            <div class="col-lg-2  mb-3">
                                <label for="programme_end">{{ __('programme_end') }}</label>
                                <input type="text" class="form-control" id="programme_end" name="programme_end" value="{{ $device->programme_end ? $device->programme_end : old('programme_end') }}" ></input>
                            </div>
                            <div class="col-lg-2  mb-3">
                                <label for="device_status">{{ __('Status') }}*</label>
                                <select name="status" id="device_status" class="form-control" required>
                                    <option value="">{{ __('Choose a status') }} ...</option>
                                    <option value='Archived' {{ $device->status ? ($device->status == 'Archived' ? 'selected' : '') : ( old('status') == 'Archived' ? 'selected' : '') }}>{{ __('Archived') }}</option>
                                    <option value='Published' {{ $device->status ? ($device->status == 'Published' ? 'selected' : '') : ( old('status') == 'Published' ? 'selected' : '') }}>{{ __('Published') }}</option>
                                    <option value='Hidden' {{ $device->status ? ($device->status == 'Hidden' ? 'selected' : '') : ( old('status') == 'Hidden' ? 'selected' : '') }}>{{ __('Hidden') }}</option>
                                </select>
                            </div>
                            <div class="col-lg-3  mb-3">
                                @if ($method != 'POST')
                                    <label for="created_at">{{ __('Created at') }}</label>
                                    <input class="form-control" name="created_at" id="created_at" type="text" value="{{ $device->created_at ? $device->created_at->format('d-m-Y H:i:s') : old('created_at') }}"  @cannot('edit-admin-data',Auth::user()) readonly @endcannot></input>
                                    <small class="form-text text-muted"><em>{{ __('The value should match the date format : day-month-YEAR Hour:Min:sec (ex. 10-12-2018 15:25:00).') }}</em></small>
                                @endif
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12  mb-3">
                                <label for="body">{{ __('body') }}*</label>
                                <textarea id="body" name="body" >{!!  $device->body ?  $device->body : old('body') !!}</textarea>
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
