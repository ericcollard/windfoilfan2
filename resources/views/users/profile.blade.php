@extends('layouts.vertical', ["page_title"=> "Users List"])


@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Windfoilapp</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                            <li class="breadcrumb-item active">{{ $user->id }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">User Profile</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">

                                    <p>{{ $user->name }}</p>
                                    <p>{{ $user->email }}</p>
                                    <p>cc</p>
                                    <p>{{ $user->avatar_path }}</p>
                                    <p>{{ $user->discipline_start }}</p>
                                    <p>{{ $user->postal_code }}</p>
                                    <p>{{ $user->weight }}</p>
                                    <p>{{ $user->email_verified_at }}</p>

            </div><!-- end col-12-->
        </div><!-- end row-->

    </div>

@endsection
