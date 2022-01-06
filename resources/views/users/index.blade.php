@extends('layouts.vertical', ["page_title"=> "Users List"])


@section('css')
    <!-- third party css -->
    <link href="{{asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Windfoilapp</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Users list (Ajax Pagination)</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">


                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>email</th>
                                <th>roles</th>
                                <th>discipline_start</th>
                                <th>postal_code</th>
                                <th>weight</th>
                                <th>email_verified_at</th>
                            </tr>
                            </thead>



                        </table>

            </div><!-- end col-12-->
        </div><!-- end row-->

    </div>

@endsection


@section('script-bottom')
    <!-- third party js -->
    <script src="{{asset('assets/libs/datatables/datatables.min.js')}}"></script>
    <!-- third party js ends -->


    <script>
        /******/ (() => { // webpackBootstrap
            var __webpack_exports__ = {};

            $(document).ready(function () {
                /*"use strict";*/

                /*
                $('#basic-datatable').DataTable({
                    keys: true,
                    "language": {
                        "paginate": {
                            "previous": "<i class='mdi mdi-chevron-left'>",
                            "next": "<i class='mdi mdi-chevron-right'>"
                        }
                    },
                    "drawCallback": function drawCallback() {
                        $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
                    }
                });
*/

                $('#basic-datatable').DataTable( {
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    iDisplayLength: 10,
                    order: [[ 0, 'desc' ]],
                    bFilter: false,
                    ajax: '{!! route('user.jsonIndex') !!}',
                    columns: [
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                        { data: 'roles', name: 'roles' },
                        { data: 'discipline_start', name: 'discipline_start' },
                        { data: 'postal_code', name: 'postal_code' },
                        { data: 'weight', name: 'weight' },
                        { data: 'email_verified_at', name: 'email_verified_at' },
                    ]
                } );

            });
            /******/ })()
        ;
    </script>

@endsection


