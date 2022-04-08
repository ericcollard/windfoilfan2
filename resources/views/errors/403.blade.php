@extends('layouts.vertical')

@section('css')

    <style>
        p.thin {
            font-weight: normal;
        }
    </style>
@endsection


@section('content')
    <!-- Start Content-->
    <div class="d-flex justify-content-center  align-items-center" style="height: 80vh;">


            <h1  class="text-center">
                <img class="img-fluid" src="{{asset('assets/images/oups.png')}}" style="width: 50%;"><br>
                <p class="text-center mt-3">  {{ __($exception->getMessage() ?: 'Forbidden') }}</p>
                <p class="text-center text-muted h4">#{{ $exception->getStatusCode()  }} :
                    {!! __("Your profile credentials are not enough <br>for you to access the resource.")  !!} </p>
                <p class="text-center text-muted thin h4 mt-4">
                    @if (Auth::guest())
                        {{ __('Not connected user') }}
                    @else
                        {{ __('Connected user') }} : <a href="{{  Auth::user()->path() }}">{{ Auth::user()->name }}</a><br>
                        {{ __('Identifier') }} : {{ Auth::user()->id }}<br>
                        {{ __('Credentials') }} :
                            @foreach( Auth::user()->getRoles() as $role)
                                {{ $role }}
                            @endforeach
                    @endif

            </h1>





    </div>

@endsection


@section('script-bottom')
@endsection


