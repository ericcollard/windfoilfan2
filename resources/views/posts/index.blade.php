@extends('layouts.vertical', ["page_title"=> __('Posts list')])


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
            <div class="col-12">

                @forelse($categories as $key => $category)
                    @if (count($category->posts) > 0)
                        <div class="mt-2">
                        <h5 class="m-0 pb-2">
                            <a class="text-dark" data-bs-toggle="collapse" href="#category{{ $key }}" role="button" aria-expanded="false" aria-controls="category{{ $key }}">
                                <i class='uil uil-angle-down font-18'></i>{{ __('Category') }} : {{ $category->name }} <span class="text-muted">({{ count($category->posts) }})</span>
                            </a>
                        </h5>

                        <div class="collapse {{ ($key == 0 ? 'show':'') }}" id="category{{ $key }}">
                            <div class="card mb-0">
                                <div class="card-body">


                                    @foreach($category->posts as $post)

                                        <!-- post list -->
                                        <div class="row justify-content-sm-between">
                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                    <div class="form-check">
                                                        <a href="{{ route('post.show',$post) }}">{{ $post->title }}</a>
                                                    </div>
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="d-flex justify-content-between">
                                                        <div id="tooltip-container">

                                                            <img src="{{ $post->owner->avatarUrl() }}" alt="image" class="avatar-xs rounded-circle me-1"
                                                                 data-bs-container="#tooltip-container" data-bs-toggle="tooltip"
                                                                 data-bs-placement="bottom" title="Publié par {{ $post->owner->name }}" />
                                                        </div>
                                                        <div>
                                                            <ul class="list-inline font-13 text-end">
                                                                <li class="list-inline-item">
                                                                    <i class='uil uil-schedule font-16 me-1'></i> {{ $post->updated_at->formatLocalized('%A %d %B %Y ') }}
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-eye font-16 me-1'></i> {{ $post->views }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div> <!-- end .d-flex-->
                                                </div> <!-- end col -->
                                            </div>
                                        <!-- end post list -->

                                    @endforeach

                                </div> <!-- end card-body-->
                            </div> <!-- end card -->
                        </div> <!-- end .collapse-->
                    </div> <!-- end .mt-2-->
                    @endif
                @empty
                        <p>{{ __('There are no relevant results at this time') }}</p>
                @endforelse

            </div><!-- end col-12-->
        </div><!-- end row-->

    </div>

@endsection


