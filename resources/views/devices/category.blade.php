@extends('layouts.vertical')

@section('page_title')
    Produits :  {{ $category->name }}
@endsection
@section('page_description')
    Produits :  {{ $category->name }}
@endsection
@section('page_image')

@endsection
@section('page_author')
    Glissattitude
@endsection

@section('css')

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
                            <li class="breadcrumb-item">Produits</li>
                            <li class="breadcrumb-item"><a href="">{{ $category->name }}</a></li>
                            <li class="breadcrumb-item active">{{ __('List') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('Devices') }} "{{ $category->name }}"</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            @foreach($category->devices as $device)
                @can('list',$device)
                    <div class="col-lg-6 col-xxl-3">
                        <!-- project card -->
                        <div class="card d-block">

                            <div class="card-body">

                                <!-- project title-->
                                <h4 class="mt-0">
                                    <a href="{{ $device->path() }}" class="text-title">{{ $device->name }}</a>
                                </h4>
                                <div class="badge {{ $device->statusClass() }} mb-2">{{ __($device->status) }}</div>

                            </div> <!-- end card-body-->

                        </div>

                    </div>
                @endcan
            @endforeach
        </div>

    </div>

@endsection


