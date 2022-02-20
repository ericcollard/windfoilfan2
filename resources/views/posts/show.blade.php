@extends('layouts.vertical')

@section('page_title')
    {{ $post->title }}
@endsection
@section('page_description')
    Article : {{ $post->description }}
@endsection
@section('page_image')
    @if (strlen($post->imagePath()) > 0 )
        {{ $post->imagePath() }}
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

        #post-body table td.colored {
            background-color: #D8DEE9;
        }

        #post-body h2 {
            margin-top: 2em;
            font-size: 1.5em;
            color: #e9aa0b;

            color: #00AAAA;
            color: #6f42c1;
            color: #6b5eae;
            border-bottom: 2px solid #6b5eae;
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
            top: 200px;
            z-index: 1000;
            text-align: center;
            width: 100%;
            font-size: 2.0em;
        }

        #post-overlay .badge {
            line-height: 1.5em;
            padding : 0.5em 0.8em
        }

        .list-inline li:not(:last-child){
            margin-right: 6px;
        }

        .list-inline li {
            display: inline-block;
            text-align: center !important;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
                            <li class="breadcrumb-item"><a href="{{ route('postcategory.show',$post->category) }}">{{ $post->category->name }}</a></li>
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
                    <div class="card-header">
                        <div class=" float-end">
                                <img height="105px" src="{{ $post->imagePath() }}" alt="{{ $post->title }}">
                        </div>
                        <!-- project title-->
                        <h1 class="mt-0">{{ $post->title }}</h1>
                        <div class="badge badge-outline-dark">{{ $post->category->name }}</div>
                        <div class="badge {{ $post->statusClass() }}">{{ __($post->status) }}</div>

                        <p><small class="text-muted">{{ $post->description }}</small></p>


                        <ul class="social-list list-inline mt-3">
                            {!! $shareComponent !!}
                            @can ('update', $post)
                                <li class="list-inline-item text-center">
                                    <button type="button" class="btn btn-sm btn-outline-primary text-primary rounded-pill"><a href="{{ route('post.edit',$post) }}"><i class="mdi mdi-pencil me-1"></i>{{ __('Edit') }}</a></button>
                                </li>
                            @endcan
                            @can ('delete', $post)
                                <li class="list-inline-item text-center">
                                    <form id="deletePost" method="POST" action="{{ route('post.destroy',$post) }}" class="d-sm-inline-block">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="button" class="btn btn-sm btn-outline-danger text-danger rounded-pill">
                                            <a href="javascript:{}" onclick="document.getElementById('deletePost').submit(); return false;" style="color: inherit;"><i class="mdi mdi-delete me-1"></i>{{ __('Delete') }}</a>
                                        </button>
                                    </form>
                                </li>
                            @endcan
                        </ul>

                    </div>




                    <div class="card-body ">

                        @if ( auth()->guest() )
                            <div id="post-overlay"><span class="badge badge-outline-dark">Pour lire cet article, <br><a href="{{ route('login') }}">connectez vous</a> c'est gratuit !</span></div>
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


