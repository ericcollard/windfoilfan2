@extends('layouts.vertical', ["page_title"=> "Form Elements"])

@section('css')
    <!-- third party css -->
    <link rel="stylesheet" href="{{asset('assets/libs/quill/quill.min.css')}}">
    <!-- third party css end -->

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
                        <li class="breadcrumb-item"><a href="{{ route('users') }}">{{ __('Users') }}</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $user->name }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Edit profile') }}</li>
                    </ol>
                </div>
                <h4 class="page-title">{{ __('Update your profile') }} <b>{{ $user->name }}</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <form method="POST" action="{{ route('user.update',['user' => $user]) }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <input type="hidden" id="user_id" name="user_id" value={{ $user->id }}>

                        <div class="row">
                            <div class="col-lg-6  mb-3">
                                <label for="name" class="form-label">{{ __('Full name') }}* :</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name ? $user->name : old('name') }}" required></input>
                            </div>

                            <div class="col-lg-6  mb-3">
                                <label for="email" class="form-label">{{ __('Email') }} :</label>
                                <input type="email" class="form-control" id="email" disabled="" name="email" value="{{ $user->email ? $user->email : old('email') }}" ></input>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6  mb-3">
                                <label for="prefered_spots">{{ __('Prefered spot') }} :</label>
                                <input type="text" class="form-control" id="prefered_spots" name="prefered_spots" value="{{ $user->prefered_spots ? $user->prefered_spots : old('prefered_spots') }}"></input>
                            </div>

                            <div class="col-lg-6 mb-3 position-relative" id="datepicker2">
                                <label for="discipline_start">{{ __('Discipline start') }}* :</label>
                                <input type="text" class="form-control" name="discipline_start" id="discipline_start" data-provide="datepicker" data-date-format="dd/mm/yyyy" data-date-langage="fr"  data-date-autoclose="true" data-date-container="#datepicker2" value="{{ $user->discipline_start ? $user->discipline_start->format('d/m/Y') : old('discipline_start') }}" >
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6  mb-3">
                                <label for="weight">{{ __('Weight (kg)') }}* :</label>

                                <div class="input-group mb-3">
                                    <input type="text" id="weight" name="weight" class="form-control" aria-describedby="basic-addon2" value="{{ $user->weight ? $user->weight : old('weight') }}" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">kg</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6  mb-3">
                                <label for="postal_code">{{ __('Postal code') }} :</label>
                                <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ $user->postal_code ? $user->postal_code : old('postal_code') }}"></input>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12  mb-3">
                                <label for="personal_equipment">{{ __('Personal equipment') }} :</label>
                                <input name="personal_equipment" type="hidden">
                                <div id="snow-editor" style="height: 300px;">
                                    {!!  $user->personal_equipment ? $user->personal_equipment : old('personal_equipment') !!}
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-lg-6  mb-3">
                                <label for="password">{{ __('password') }} :</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" value="{{ old('password') }}">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                             </div>

                            <div class="col-lg-6 mb-3 position-relative" id="datepicker3">
                                <label for="email_verified_at">{{ __('email_verified_at') }} :</label>
                                <input type="text" class="form-control" name="email_verified_at" id="email_verified_at" data-provide="datepicker" data-date-format="dd/mm/yyyy" data-date-langage="fr"  data-date-autoclose="true" data-date-container="#datepicker3" value="{{ $user->email_verified_at ? $user->email_verified_at->format('d/m/Y') : old('email_verified_at') }}" >
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="ROLE_ADMIN" id="roleCheck1" name="roles[]" {{ in_array("ROLE_ADMIN", $user->roles) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="roleCheck1">
                                        ROLE_ADMIN
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="ROLE_EDITOR" id="roleCheck2" name="roles[]" {{ in_array("ROLE_EDITOR", $user->roles) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="roleCheck2">
                                        ROLE_EDITOR
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="ROLE_CONTRIBUTOR" id="roleCheck3" name="roles[]" {{ in_array("ROLE_CONTRIBUTOR", $user->roles) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="roleCheck3">
                                        ROLE_CONTRIBUTOR
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="ROLE_VISITOR" id="roleCheck4" name="roles[]" {{ in_array("ROLE_VISITOR", $user->roles) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="roleCheck4">
                                        ROLE_VISITOR
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <button id="btn_submit" type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        </div>

                        @if (count($errors))
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </form>


                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->


</div> <!-- container -->
@endsection


@section('script-bottom')

    <!-- third party js -->
    <script src="{{asset('assets/libs/quill/quill.min.js')}}"></script>
    <!-- third party js ends -->

    <script>

        /******/ (() => { // webpackBootstrap
            var __webpack_exports__ = {};
            /*!********************************************!*\
              !*** ./resources/js/pages/demo.quilljs.js ***!
              \********************************************/
            /*
            Template Name: Ubold - Responsive Bootstrap 5 Admin Dashboard
            Author: CoderThemes
            Website: https://coderthemes.com/
            Contact: support@coderthemes.com
            File: Quilljs init js
            */
// Snow theme
            var quill = new Quill('#snow-editor', {
                theme: 'snow',
                modules: {
                    'toolbar': [[{
                        'font': []
                    }, {
                        'size': []
                    }], ['bold', 'italic', 'underline', 'strike'], [{
                        'color': []
                    }, {
                        'background': []
                    }], [{
                        'script': 'super'
                    }, {
                        'script': 'sub'
                    }], [{
                        'header': [false, 1, 2, 3, 4, 5, 6]
                    }, 'blockquote', 'code-block'], [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }, {
                        'indent': '-1'
                    }, {
                        'indent': '+1'
                    }], ['direction', {
                        'align': []
                    }], ['link', 'image', 'video'], ['clean']]
                }
            }); // Bubble theme

            $("#btn_submit").click(function(){
                // Populate hidden form on submit
                var about = document.querySelector('input[name=personal_equipment]');
                about.value = quill.root.innerHTML;
                return true;
            });


            /******/ })()
        ;

    </script>

@endsection