@extends('layouts.vertical', ["page_title"=> __('Edit attribute')])

@section('page_title')
    {{  __('Edit attribute') }}
@endsection
@section('page_description')
    {{  __('Edit attribute') }}
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
                        <li class="breadcrumb-item"><a href="{{ route('attribute.index') }}">{{ __('Attributes') }}</a></li>
                        <li class="breadcrumb-item">{{ $attribute->name }}</li>
                        @if ($method === 'POST')
                            <li class="breadcrumb-item active">{{ __('Create') }}</li>
                        @else
                            <li class="breadcrumb-item active">{{ __('Edit') }}</li>
                        @endif

                    </ol>
                </div>
                @if ($method === 'POST')
                    <h4 class="page-title">{{ __('Create attribute') }}</h4>
                @else
                    <h4 class="page-title">{{ __('Edit attribute') }} : {{ $attribute->name }}</h4>
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
                        <input type="hidden" id="id" name="id" value={{ $attribute->id }}>

                        <div class="row">

                            <div class="col-lg-3  mb-2">
                                <label for="name" class="form-label">{{ __('Name') }}*</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="{{ $attribute->name ? $attribute->name : old('name') }}" required/>
                            </div>

                            <div class="col-lg-3  mb-2">
                                <label for="unit" class="form-label">{{ __('Unit') }}</label>
                                <input type="text" class="form-control" id="unit" name="unit"
                                       value="{{ $attribute->unit ? $attribute->unit : old('unit') }}"/>
                            </div>

                            <div class="col-lg-3  mb-2">
                                <label for="decimals" class="form-label">{{ __('Decimals') }}</label>
                                <input type="text" class="form-control" id="decimals" name="decimals"
                                       value="{{ $attribute->decimals ? $attribute->decimals : old('decimals') }}"/>
                            </div>

                            <div class="col-lg-3  mb-2">
                                <label for="group" class="form-label">{{ __('Group') }}*</label>
                                <input type="text" class="form-control" id="group" name="group"
                                       value="{{ $attribute->group ? $attribute->group : old('group') }}" required/>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-3  mb-2">
                                <label for="chart" class="form-label">{{ __('Chart') }}*</label>
                                <select name="chart" id="chart" class="form-control" required>
                                    <option value="">{{ __('Choose a type') }} ...</option>
                                    <option value='note' {{ $attribute->chart ? ($attribute->chart == 'note' ? 'selected' : '') : ( old('chart') == 'note' ? 'selected' : '') }}>{{ __('note') }}</option>
                                    <option value='pourcentage' {{ $attribute->chart ? ($attribute->chart == 'pourcentage' ? 'selected' : '') : ( old('chart') == 'pourcentage' ? 'selected' : '') }}>{{ __('pourcentage') }}</option>
                                    <option value='valeur' {{ $attribute->chart ? ($attribute->chart == 'valeur' ? 'selected' : '') : ( old('chart') == 'valeur' ? 'selected' : '') }}>{{ __('valeur') }}</option>
                                </select>
                            </div>

                            <div class="col-lg-3  mb-2">
                                <label for="field" class="form-label">{{ __('Field') }}*</label>
                                <input type="text" class="form-control" id="field" name="field"
                                       value="{{ $attribute->field ? $attribute->field : old('field') }}" required/>
                            </div>

                            <div class="col-lg-3  mb-2">
                                <label for="category_id" class="form-label">{{ __('Device category') }}*</label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="">{{ __('Choose a category') }} ...</option>
                                    @foreach($categories as $category)
                                        <option value='{{ $category->id }}' {{ $attribute->category_id ? ($attribute->category_id == $category->id ? 'selected' : '') : ( old('category_id') == $category->id ? 'selected' : '') }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-lg-3  mb-2">
                                <label for="slug" class="form-label">{{ __('Slug') }}*</label>
                                <input type="text" class="form-control" id="slug" name="slug"
                                       value="{{ $attribute->slug ? $attribute->slug : old('slug') }}" required/>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-lg-12  mb-3">
                                <label for="body">{{ __('Comments') }}*</label>
                                <textarea id="body" name="body" >{!!  $attribute->body ?  $attribute->body : old('body') !!}</textarea>
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
