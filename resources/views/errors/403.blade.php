@extends('layouts.vertical')


@section('page_title')
    {{ __('Forbidden')  }}
@endsection
@section('page_description')
    {{ __('Forbidden')  }}
@endsection
@section('page_image')
@endsection
@section('page_author')
    Glissattitude
@endsection

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
                    Les droits attribués à votre profil <br>ne vous permettent pas d'accéder à cette ressource</p>
                <p class="text-center text-muted thin h4 mt-4">
                    @if (Auth::guest())
                        Utilisateur non connecté
                    @else
                        Utilisateur connecté : <a href="{{  Auth::user()->path() }}">{{ Auth::user()->name }}</a><br>
                        Identifiant : {{ Auth::user()->id }}<br>
                        Rôles attribués :
                            @foreach( Auth::user()->getRoles() as $role)
                                {{ $role }}
                            @endforeach
                    @endif

            </h1>





    </div>

@endsection


@section('script-bottom')
@endsection


