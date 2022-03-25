@extends('layouts.vertical', ["page_title"=> __('Edit brand')])

@section('page_title')
    {{  __('Edit brand') }}
@endsection
@section('page_description')
    {{  __('Edit brand') }}
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
                        <li class="breadcrumb-item"><a href="{{ route('post.categories') }}">{{ __('Brands') }}</a></li>
                        @if ($method === 'POST')
                            <li class="breadcrumb-item active">{{ __('Create') }}</li>
                        @else
                            <li class="breadcrumb-item"><a href="#">{{ $brand->name }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Edit') }}</li>
                        @endif

                    </ol>
                </div>
                @if ($method === 'POST')
                    <h4 class="page-title">{{ __('Create brand') }}</h4>
                @else
                    <h4 class="page-title">{{ __('Edit brand') }} : <b>{{ $brand->name }}</h4>
                @endif

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <form method="POST" action="{{ $action }}"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field($method) }}
                        <input type="hidden" id="id" name="id" value={{ $brand->id }}>

                        <div class="row">
                            <div class="col-lg-4  mb-3">
                                <label for="name" class="form-label">{{ __('Name') }}*</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="{{ $brand->name ? $brand->name : old('name') }}" required/>
                            </div>
                            <div class="col-lg-4  mb-3">
                                <label for="url" class="form-label">{{ __('Website Url') }}</label>
                                <input type="text" class="form-control" id="url" name="url"
                                       value="{{ $brand->url ? $brand->url : old('url') }}"/>
                            </div>

                            <div class="col-lg-4  mb-3 text-end">
                                    <label for="logo_path" class="form-label">{{ __('Logo path') }}</label>
                                    <input type="file" id="logo_path" name="logo_path" class="form-control" />
                                    <small class="form-text text-muted"><em>{{ __('The picture should be square, about 400x400px, preferably png transparent background') }}</em></small>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12  mb-3">
                                <label for="body">{{ __('body') }}</label>
                                <textarea id="body" name="body" >{!!  $brand->body ?  $brand->body : old('body') !!}</textarea>
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
