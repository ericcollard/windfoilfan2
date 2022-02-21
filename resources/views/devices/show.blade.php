@extends('layouts.vertical')

@section('page_title')
    {{ $device->name }}
@endsection
@section('page_description')
    Article : {{ $device->name }}
@endsection
@section('page_image')

@endsection
@section('page_author')
    {{ $device->creator->name }}
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
                            <li class="breadcrumb-item"><a href="{{ route('device.categories') }}">{{ __('Posts') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('device.category',$device->category) }}">{{ $device->category->name }}</a></li>
                            <li class="breadcrumb-item active">{{ $device->name }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('Post detail') }} : {{ $device->name }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">


                <!-- post card -->
                <div class="card d-block">
                    <div class="card-header">

                        <!-- project title-->
                        <h1 class="mt-0">{{ $device->name }}</h1>
                        <div class="badge badge-outline-dark">{{ $device->category->name }}</div>
                        <div class="badge {{ $device->statusClass() }}">{{ __($device->status) }}</div>


                    </div>




                    <div class="card-body ">

                            <div id="post-body">
                                {!! $device->body !!}
                            </div>

                    </div>
                </div>

                <div class="card d-block">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <h5>{{ __('Creation date') }}</h5>
                                    <p>{{ $device->created_at->formatLocalized('%A %d %B %Y ') }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <h5>{{ __('Update date') }}</h5>
                                    <p>{{ $device->updated_at->formatLocalized('%A %d %B %Y ') }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <h5>{{ __('Views') }}</h5>
                                    <p>nc.</p>
                                </div>
                            </div>
                        </div>

                        <div id="tooltip-container">
                            <h5>{{ __('Author') }}</h5>
                            <a href="{{ route('user.show' , ['user' => $device->creator->id]) }}" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $device->creator->name }}" class="d-inline-block">
                                <img src="{{$device->creator->avatarUrl() }}" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                            </a>


                        </div>

                    </div> <!-- end card-body-->

                </div> <!-- end card-->


            </div><!-- end col-12-->
        </div><!-- end row-->

    </div>

@endsection


