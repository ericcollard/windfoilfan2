@extends('layouts.vertical')


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
                            <li class="breadcrumb-item"><a href="#">{{ __('Posts') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Categories list') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('Posts categories list') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            @foreach($categories as $key => $category)

                    <div class="col-lg-6 col-xxl-3">
                        <!-- project card -->
                        <div class="card d-block">

                            <div class="card-body">
                                <div class=" card-widgets">
                                    <span class="text-muted">{{ count($category->posts) }} {{ __('Posts') }}</span>
                                </div>
                                <!-- project title-->
                                <h4 class="mt-0">
                                    <a href="{{ route('post.postCategory',$category) }}">{{ $category->name }}</a>
                                </h4>

                            </div> <!-- end card-body-->

                        </div>

                    </div>

            @endforeach
        </div>

    </div>

@endsection


