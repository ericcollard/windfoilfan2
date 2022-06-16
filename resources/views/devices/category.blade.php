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

        .barcontent {
            height:100%;
            display: inline-block;
            margin:0px;
            padding:0px;
            height:22px;
        }

        .left {
            background-color:lightgrey;
        }

        .center {
            background-color:#4e73df;
        }
        .right {
            background-color:lightgrey;
        }

        .bar {
            min-width:100px;
            position:relative;
        }

        .bar:before {
            font-size: 0.7em;
            color: white;
            content : 'FS';
            position: absolute;
            left:5px;
            top: 1px;
        }

        .bar:after {
            font-size: 0.7em;
            color: white;
            content : 'RS';
            position: absolute;
            right:5px;
            top: 1px;
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
                            <li class="breadcrumb-item">{{ __('Devices') }}</li>
                            <li class="breadcrumb-item"><a href="{{ $dataTable->getOptions()['custom_paramaters']['basis_route'] }}">{{ $dataTable->getOptions()['custom_paramaters']['category_name'] }}</a></li>
                            @if( $dataTable->getOptions()['custom_paramaters']['brand_name'] <> "" )
                                <li class="breadcrumb-item">Marque : {{ $dataTable->getOptions()['custom_paramaters']['brand_name'] }}</li>
                            @endif
                            <li class="breadcrumb-item active">{{ __('List') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">
                        {{ __('Devices list') }} - {{ $dataTable->getOptions()['custom_paramaters']['category_name'] }}
                        @if( $dataTable->getOptions()['custom_paramaters']['brand_name'] <> "" )
                            - Marque : {{ $dataTable->getOptions()['custom_paramaters']['brand_name'] }}
                        @endif
                        @if( $dataTable->getOptions()['custom_paramaters']['program_target'] <> "" )
                            - Filtré pour le programme {{ $dataTable->getOptions()['custom_paramaters']['program_target'] }}
                        @endif
                    </h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <h5><i class="mdi mdi-lightbulb-on-outline"></i> Légende de la colonne "Programme"</h5>
                <p>La zone bleue indique le domaine d'utilisation du produit, sur une échelle balayant les programmes
                FREESTYLE - FREERIDE - FREERACE - COURSE SLALOM - COURSE RACE</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                {{$dataTable->table(['class' => 'table dt-responsive nowrap w-100'])}}
            </div>
        </div>


    </div>

@endsection


@section('script-bottom')

    <!-- third party js -->

    <script src="{{asset('assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>

    <!-- third party js ends -->
    {{$dataTable->scripts()}}

@endsection

