@extends('layouts.vertical', ["page_title"=> "Posts List"])


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
                    <h4 class="page-title">Posts list</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                @forelse ($posts as $post)

                    <div class="card shadow mb-4">

                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <div>
                                <h2 style="display: inline">
                                    {{ __($post->title)  }}</a>
                                </h2>
                            </div>
                            <div>
                                <div>{{ __('Created') }} {{ $post->created_at->formatLocalized('%A %d %B %Y') }}</div>
                                <p style="text-align: right"><i class="fas fa-comments fa-2xs text-gray-300"></i> {{ $post->views }} vues</p>
                            </div>


                        </div>

                        <div class="card-body">
                            {!! $post->body !!}
                        </div>
                    </div>

                @empty
                    <p>{{ __('There are no relevant results at this time') }}</p>
                @endforelse

                {{ $posts->links() }}
            </div><!-- end col-12-->
        </div><!-- end row-->

    </div>

@endsection


