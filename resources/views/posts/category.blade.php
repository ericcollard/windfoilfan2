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
                            <li class="breadcrumb-item"><a href="{{ route('post.categories') }}">{{ __('Posts') }}</a></li>
                            <li class="breadcrumb-item"><a href="">{{ $postCategory->name }}</a></li>
                            <li class="breadcrumb-item active">{{ __('List') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('Category posts for') }} "{{ $postCategory->name }}"</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            @foreach($postCategory->posts as $post)
                @can('list',$post)
                    <div class="col-lg-6 col-xxl-3">
                    <!-- project card -->
                    <div class="card d-block">

                        <div class="card-body">
                            <div class=" card-widgets">
                                <img height="50px" class="rounded" src="{{ $post->imagePath() }}" alt="{{ $post->title }}">
                            </div>
                            <!-- project title-->
                            <h4 class="mt-0">
                                <a href="{{ $post->path() }}" class="text-title">{{ $post->title }}</a>
                            </h4>
                            <div class="badge {{ $post->statusClass() }} mb-2">{{ __($post->status) }}</div>

                            <p class="text-muted font-13 mb-3">{{ $post->description }}...<a href="{{ $post->path() }}" class="fw-bold text-muted">view more</a>
                            </p>

                            <!-- project detail-->
                            <p class="mb-1">
                                <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                    <i class="uil uil-eye text-muted"></i>
                                    <b>{{ $post->views }}</b> {{ __('Views') }}
                                </span>
                                <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                    <i class='uil uil-schedule text-muted'></i>
                                    <b>{{ $post->created_at->formatLocalized(' %d %B %Y ') }}</b>
                                </span>
                            </p>
                            <div id="tooltip-container">

                                <img src="{{ $post->owner->avatarUrl() }}" alt="image" class="avatar-xs rounded-circle me-1"
                                     data-bs-container="#tooltip-container" data-bs-toggle="tooltip"
                                     data-bs-placement="bottom" title="Publié par {{ $post->owner->name }}" />
                            </div>
                        </div> <!-- end card-body-->

                    </div>

                </div>
                @endcan
            @endforeach
        </div>
        <div class="row">
            <div class="col-8 mb-2">
                @can ('create', App\Models\Post::class)
                    <a href="{{ route('post.create',['postCategory' => $postCategory]) }}" class="btn btn-sm btn-success rounded-pill" role="button"> <i class="mdi mdi-pencil me-1"></i> {{ __("Create") }}</a>
                @endcan
            </div>


        </div>

    </div>

@endsection


