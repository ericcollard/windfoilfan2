@extends('layouts.vertical', ["page_title"=> __('Post detail')])

<!-- todo : META facebook et google-->


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
                            <li class="breadcrumb-item"><a href="{{ route('post.list') }}">{{ __('Posts') }}</a></li>
                            <li class="breadcrumb-item"><a href="">{{ $post->category->name }}</a></li>
                            <li class="breadcrumb-item active">{{ $post->title }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('Post detail') }} : {{ $post->title }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">


                <!-- post card -->
                <div class="card d-block">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="dripicons-dots-3"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="{{ route('post.edit',$post) }}" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>{{ __('Edit') }}</a>
                                <!-- item-->
                                <form id="deletePost" method="POST" action="{{ route('post.destroy',$post) }}" class="d-sm-inline-block action-icon dropdown-item">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="javascript:{}" onclick="document.getElementById('deletePost').submit(); return false;" style="color: inherit;"><i class="mdi mdi-delete me-1"></i>{{ __('Delete') }}</a>
                                </form>


                            </div>
                        </div>
                        <!-- project title-->
                        <h3 class="mt-0">{{ $post->title }}</h3>
                        <div class="badge bg-secondary text-light mb-3">{{ $post->category->name }}</div>

                        <h5>Contenu:</h5>

                        <div class="row">
                            <div class="col-12" id="post-body">
                                {!! $post->body !!}
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <h5>{{ __('Creation date') }}</h5>
                                    <p>{{ $post->created_at->formatLocalized('%A %d %B %Y ') }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <h5>{{ __('Update date') }}</h5>
                                    <p>{{ $post->updated_at->formatLocalized('%A %d %B %Y ') }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <h5>{{ __('Views') }}</h5>
                                    <p>{{ $post->views }}</p>
                                </div>
                            </div>
                        </div>

                        <div id="tooltip-container">
                            <h5>{{ __('Author') }}</h5>
                            <a href="{{ route('user.show' , ['user' => $post->owner->id]) }}" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $post->owner->name }}" class="d-inline-block">
                                <img src="{{$post->owner->avatarUrl() }}" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                            </a>


                        </div>

                    </div> <!-- end card-body-->

                </div> <!-- end card-->


            </div><!-- end col-12-->
        </div><!-- end row-->

    </div>

@endsection


