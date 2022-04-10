@extends('layouts.vertical')

@section('script-head')
    {!! htmlScriptTagJsApi() !!}
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
                        <li class="breadcrumb-item">{{ __('Professional access demand') }}</li>
                    </ol>
                </div>
                <h4 class="page-title">{{ __('Professional access demand') }}</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <form method="POST" action="{{ route('prosend') }}">
                        @csrf

                        <div class="row">
                            <div class="col-lg-4  mb-3">
                                <label for="name" class="form-label">{{ __('Name') }}*</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required/>
                            </div>
                            <div class="col-lg-4  mb-3">
                                <label for="brand" class="form-label">{{ __('Brand') }}*</label>
                                <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand') }}" required/>
                            </div>

                            <div class="col-lg-4  mb-3">
                                <label for="emailaddress" class="form-label">{{ __('Email adress') }}*</label>
                                <input type="text" class="form-control" id="emailaddress" name="emailaddress" value="{{ old('emailaddress') }}" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4  mb-3">
                                <label for="password" class="form-label">{{ __('auth.Password') }}*</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="{{ __('auth.Enter your password') }} "  required>
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4  mb-3">
                                <label for="password_confirmation" class="form-label">{{ __('auth.Password confirmation') }}*</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="{{ __('auth.Password confirmation') }}"  required>
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="row">
                            <div class="col-lg-12  mb-3">
                                {!!  htmlFormSnippet() !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12  mb-3">
                                <button id="btn_submit" type="submit" class="btn btn-primary">{{ __('Send your demand') }} <i class="mdi mdi-telegram ms-1"></i> </button>
                            </div>
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


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($post)
                        {!! $post->body !!}
                    @endif

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->



</div> <!-- container -->
@endsection


@section('script-bottom')


@endsection
