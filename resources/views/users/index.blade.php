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
                    <h4 class="page-title">Users list (basic Laravel Bootstrap Pagination)</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="tab-content">
                    <div class="tab-pane show active" id="basic-datatable-preview">

                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>email</th>
                                <th>roles</th>
                                <th>avatar_path</th>
                                <th>discipline_start</th>
                                <th>postal_code</th>
                                <th>weight</th>
                                <th>email_verified_at</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <th>cc</th>
                                    <th>{{ $user->avatar_path }}</th>
                                    <th>{{ $user->discipline_start }}</th>
                                    <th>{{ $user->postal_code }}</th>
                                    <th>{{ $user->weight }}</th>
                                    <th>{{ $user->email_verified_at }}</th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div> <!-- end preview-->
                </div><!-- end tab-content-->
            </div><!-- end col-12-->
        </div><!-- end row-->

    </div>

    {{ $users->links() }}
@endsection


@section('script-bottom')
    <!-- third party js -->
    <script src="{{asset('assets/libs/datatables/datatables.min.js')}}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{asset('assets/js/pages/demo.datatable-init.js')}}"></script>
    <!-- end demo js-->
@endsection
