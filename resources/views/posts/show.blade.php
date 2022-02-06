@extends('layouts.vertical')

@section('page_title')
    {{ $post->title }}
@endsection
@section('page_description')
    Article : {{ $post->description }}
@endsection
@section('page_image')
    @if (strlen($imagePath) > 0 )
        {{ $imagePath }}
    @endif
@endsection
@section('page_author')
    {{ $post->owner->name }}
@endsection

@section('css')
    <style>

        #post-body table  {
            border-spacing: 10px;
            border-collapse: separate;
        }
        #post-body table td {
            padding: 5px;
        }

        #post-body h2 {
            margin-top: 2em;
            font-size: 1.5em;
            color: #e9aa0b;
            border-bottom: 2px solid #e9aa0b;
        }

        #post-body .container {
            margin: 0;
            padding: 0;
        }

        #post-body.flou {
            filter: blur(5px);
            transition-property: -webkit-filter;
            transition-duration: 10s;
        }

        #post-overlay {
            position: absolute;
            left: 0;
            top: 100px;
            z-index: 1000;
            text-align: center;
            width: 100%;
            font-size: 2.0em;
        }

        #post-overlay .badge {
            line-height: 1.5em;
            padding : 0.5em 0.8em
        }


    </style>
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
                        <h1 class="mt-0">{{ $post->title }}</h1>
                        <p><small class="text-muted">{{ $post->description }}</small></p>
                        <div class="badge bg-secondary text-light">{{ $post->category->name }}</div>

                    </div>
                </div>

                <div class="card d-block">
                    <div class="card-body ">

                        @if ( auth()->guest() )
                            <div id="post-overlay"><span class="badge badge-outline-dark">Pour lire cet article, <br><a href="{{ route('login') }}">connectez vous</a> !</span></div>
                            <div id="post-body" class="flou">
                                {!! $post->body !!}
                            </div>
                        @else
                            <div id="post-body">
                                {!! $post->body !!}
                            </div>
                        @endif

                    </div>
                </div>

                <div class="card d-block">
                    <div class="card-body">
                        <div class="row">
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


