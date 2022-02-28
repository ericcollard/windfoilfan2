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
    <style>
        .floue{
            height: 300px;
            background: linear-gradient(-180deg, rgba(255,255,255,0), rgba(255,255,255,1));
            position: relative;
            margin-top: -300px;
        }

        #module .collapse.show + .floue {
            display: none;
        }

        #module .collapse:not(.show) {
             display: block;
             height: 300px !important;
             overflow: hidden;
         }

        #module a.collapsed:after  {
            content: '+ {{ __('Show more') }}';
        }

        #module a:not(.collapsed):after {
            content: '- {{ __('Show less') }}';
        }

        .userEquipment {
            border-top: 1px solid #D8DEE9;
            padding-top: 1rem;
        }
        .userEquipment p {
            padding: 0;
            margin: 0;
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
                            <li class="breadcrumb-item"><a href="{{ route('device.categories') }}">{{ __('Posts') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('device.category',$device->category) }}">{{ $device->category->name }}</a></li>
                            <li class="breadcrumb-item active">{{ $device->name }}</li>
                        </ol>
                    </div>
                    <h1 class="page-title">
                        <span style="font-size: 1.8rem">{{ $device->brand->name }} {{ $device->name }} {{ $device->year }}</span>
                    </h1>


                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">


                <!-- post card -->
                <div class="card d-block">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-3">
                                <h5>{{ __('Creation date') }}</h5> {{ $device->created_at->formatLocalized('%A %d %B %Y ') }}
                            </div>
                            <div class="col-3">
                                <h5><i class="mdi mdi-eye-check-outline"></i> {{ __('Views') }}</h5> {{ $device->statistics_count }} {{ __('Unique IP') }}
                            </div>
                            <div class="col-3">
                                <h5><i class="mdi mdi-message-text-outline"></i> {{ __('Messages') }}</h5> {{ $device->reviews_count }} ( {{ __('Last') }} {{ $device->reviews->last()->created_at->formatLocalized('%d %B %Y') }} {{ __('by') }} {{ $device->reviews->last()->owner->name }})
                            </div>
                            <div class="col-3">
                                <div class="badge bg-dark" style="margin : 0 0.4rem; float: right">{{ $device->category->name }}</div>
                                <div class="badge {{ $device->statusClass() }}" style="float: right">{{ __($device->status) }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body ">
                        <div id="post-body">
                            {!! $device->body !!}
                        </div>
                    </div>
                </div>


                @if ($device->reviews_count > 0)
                    @foreach($device->reviews as $review)
                        <div class="card d-block ">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6 col-md-2">
                                        <b>{{ $review->owner->name }}</b>
                                    </div>
                                    <div class="col-6 col-md-10">
                                        <i class="mdi mdi-message-text"></i><b> Posté le</b> {{ $review->created_at->formatLocalized('%d %B %Y, %R') }}
                                    </div>
                                </div>
                            </div>



                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2 d-none d-sm-none d-md-block">
                                        <div id="tooltip-container">
                                            <a href="{{ route('user.show' , ['user' => $review->owner->id]) }}" class="d-inline-block">
                                                <img src="{{$review->owner->avatarUrl() }}" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                                            </a>
                                        </div>
                                        <h5>{{ __('Inscription') }}</h5> {{ $review->owner->created_at->formatLocalized('%d %B %Y') }}
                                        <h5>{{ __('Messages') }}</h5> {{ $review->owner->reviews->count() }}
                                        <h5>{{ __('Localisation') }}</h5> {{ $review->owner->postal_code }}
                                    </div>
                                    <div class="col-10">

                                        <div id="module">
                                            <div class="collapse" id="collapseExample" >
                                                {!! $review->body !!}
                                            </div>
                                            <div class="floue"></div>
                                            <a role="button" class="collapsed" data-bs-toggle="collapse" href="#collapseExample"  aria-controls="collapseExample">
                                            </a>
                                        </div>

                                        <div class="userEquipment mt-4">
                                            {!! $review->owner->personal_equipment !!}
                                        </div>


                                    </div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    @endforeach
                @else
                    <p class="ml-4" >{{ __("No reviews at that time") }}</p>
                @endif







            </div><!-- end col-12-->
        </div><!-- end row-->

    </div>

@endsection


@section('script-bottom')


@endsection

