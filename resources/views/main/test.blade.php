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

Sessions




    </div>
    <!-- container -->
@endsection

@section('script-bottom')
@endsection
