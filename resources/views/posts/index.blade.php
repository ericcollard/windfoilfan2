@extends('layouts.vertical')

@section('page_title')
   {{  __('Posts list') }}
@endsection
@section('page_description')
    {{  __('Posts list') }}
@endsection
@section('page_image')
@endsection
@section('page_author')
    Glissattitude
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
                            <li class="breadcrumb-item"><a href="#">{{ __('Posts') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('List') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('Posts list') }}</h4>
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
                                    <a href="{{ route('postcategory.show',$category) }}">{{ $category->name }}</a>
                                </h4>

                                @foreach($category->posts as $post)
                                    @can('list',$post)
                                    <a href="{{ route('post.show',$post) }}">{{ $post->title }}</a>
                                    <ul class="list-inline font-13 text-end">
                                        <li class="list-inline-item">
                                            <div class="badge {{ $post->statusClass() }} mb-2">{{ __($post->status) }}</div>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class='uil uil-schedule font-16 me-1'></i> {{ $post->updated_at->formatLocalized('%d %B %Y ') }}
                                        </li>
                                    </ul>
                                    @endcan
                                @endforeach

                            </div> <!-- end card-body-->

                        </div>

                    </div>

            @endforeach
        </div>

    </div>

@endsection


