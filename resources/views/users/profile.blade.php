@extends('layouts.vertical', ["page_title"=> "Profile"])

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('users') }}">{{ __('Users') }}</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $user->name }}</a></li>
                            <li class="breadcrumb-item active">{{ __('User profile') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('User profile') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-sm-12">
                <!-- Profile -->
                <div class="card bg-primary">
                    <div class="card-body profile-user-box">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-lg">
                                            <img src="{{ $user->avatarUrl() }}" alt="" class="rounded-circle img-thumbnail" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <h4 class="mt-1 mb-1 text-white">{{ $user->name }}</h4>
                                            <p class="font-13 text-white-50">
                                                @foreach  ($user->roles as $role)
                                                    {{ $role }}
                                                @endforeach
                                            </p>

                                            <ul class="mb-0 list-inline text-light">
                                                <li class="list-inline-item me-3">
                                                    <h5 class="mb-1">{{ $user->postal_code ?: 'nc'  }}</h5>
                                                    <p class="mb-0 font-13 text-white-50">{{ __('Postal code') }}</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-1">{{ $user->prefered_spots ?: 'nc'  }}</h5>
                                                    <p class="mb-0 font-13 text-white-50">{{ __('Prefered spot') }}</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-sm-4">
                                <div class="text-center mt-sm-0 mt-3 text-sm-end">
                                    <button type="button" class="btn btn-light">
                                        <a href="{{ route('user.edit' , ['user' => $user]) }}">
                                            <i class="mdi mdi-account-edit me-1"></i> {{ __('Edit') }}
                                        </a>

                                    </button>
                                </div>
                            </div> <!-- end col-->
                        </div> <!-- end row -->

                    </div> <!-- end card-body/ profile-user-box-->
                </div>
                <!--end profile/ card -->
            </div> <!-- end col-->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-4">
                <!-- Personal-Information -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-3">{{ __('User information') }}</h4>
                        <p class="text-muted font-13">
                            {{ __('Personal equipment') }} : {!! $user->personal_equipment ?: 'nc' !!}.
                        </p>

                        <hr />

                        <div class="text-start">
                            <p class="text-muted"><strong>{{ __('Family name and first name') }} :</strong> <span class="ms-2">{{ $user->name }}</span></p>

                            <p class="text-muted"><strong>{{ __('Discipline start') }} :</strong> <span class="ms-2">{{ $user->discipline_start ? $user->discipline_start->formatLocalized('%A %d %B %Y ') : 'nc'  }}</span></p>

                            <p class="text-muted"><strong>{{ __('Weight (kg)') }} :</strong> <span class="ms-2">{{ $user->weight ? $user->weight.' Kg' : 'nc'  }}</span> </p>

                        </div>
                    </div>
                </div>
                <!-- Personal-Information -->

                <!-- Toll free number box-->
                <div class="card text-white bg-info overflow-hidden">
                    <div class="card-body">
                        <div class="toll-free-box text-center">
                            <h4> <i class="mdi mdi-deskphone"></i> Email : {{ $user->email  ?: 'nc' }}</h4>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
                <!-- End Toll free number box-->

                <!-- Messages-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Messages</h4>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->

            </div> <!-- end col-->

            <div class="col-xl-8">

                <!-- Chart-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Orders & Revenue</h4>
                    </div>
                </div>
                <!-- End Chart-->

                <div class="row">
                    <div class="col-sm-4">
                        <div class="card tilebox-one">
                            <div class="card-body">

                            </div> <!-- end card-body-->
                        </div>
                        <!--end card-->
                    </div><!-- end col -->

                    <div class="col-sm-4">
                        <div class="card tilebox-one">
                            <div class="card-body">

                            </div> <!-- end card-body-->
                        </div>
                        <!--end card-->
                    </div><!-- end col -->

                    <div class="col-sm-4">
                        <div class="card tilebox-one">
                            <div class="card-body">

                            </div> <!-- end card-body-->
                        </div>
                        <!--end card-->
                    </div><!-- end col -->

                </div>
                <!-- end row -->


                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">My Products</h4>


                        </div> <!-- end table responsive-->
                    </div> <!-- end col-->
                </div> <!-- end row-->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection

