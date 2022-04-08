@extends('layouts.vertical')

@section('css')


    <!-- third party css -->
    <link href="{{asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <style>
        div.dataTables_wrapper div.dataTables_filter
        {
            float: right;
        }
        .brand-logo  {
            height: 35px;
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
                            <li class="breadcrumb-item">{{ __('Brands') }}</li>
                            <li class="breadcrumb-item active">{{ __('List') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">
                        {{ __('Brands list') }}
                    </h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        {{$dataTable->table(['class' => 'table dt-responsive nowrap w-100'])}}

                    </div>
                </div>
            </div><!-- end col-12-->
        </div><!-- end row-->


    </div>

@endsection


@section('script-bottom')

    <!-- third party js -->

    <script src="{{asset('assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>

    <!-- third party js ends -->
    {{$dataTable->scripts()}}

@endsection

