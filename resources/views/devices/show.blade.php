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
    <style>
        .floue{
            height: 200px;
            background: linear-gradient(-180deg, rgba(255,255,255,0), rgba(255,255,255,1));
            position: relative;
            margin-top: -200px;
        }

        .module .collapse.show + .floue {
            display: none;
        }

        .module .collapse:not(.show) {
             display: block;
             height: 200px !important;
             overflow: hidden;
         }

        .module  a.switch.collapsed:after  {
            content: '+ {{ __('Show more') }}';
        }

        .module a.switch:not(.collapsed):after {
            content: '- {{ __('Show less') }}';
        }

        .userEquipment {
            border-top: 1px solid #D8DEE9;
            padding-top: 1rem;
        }

        .userEquipment p {
            padding: 0;
            margin: 0;
        }

        #post-overlay {
            position: absolute;
            left: 0;
            top: 200px;
            z-index: 1000;
            text-align: center;
            width: 100%;
            font-size: 2.0em;
        }

        #post-overlay .badge {
            line-height: 1.5em;
            padding: 0.5em 0.8em;
        }

        .card.device {
            background-color: #dce3f9;
        }

        .card.device .card-header {
            background-color: #d5dbef;
        }

        .card.device .card-footer {
            background-color: #d5dbef;
        }


        .barcontent {
            height:100%;
            display: inline-block;
            margin:0px;
            padding:0px;
            height:22px;
        }
        .left {
            background-color:dimgrey;
        }
        .center {
            background-color:greenyellow;
        }
        .right {
            background-color:dimgrey;
        }
        .bar {
            min-width:100px;
            position:relative;

        }

        .bar:before {
            font-size: 0.7em;
            color: white;
            content : 'FREESTYLE';
            position: absolute;
            left:5px;
            top: 1px;
        }

        .bar:after {
            font-size: 0.7em;
            color: white;
            content : 'RACE';
            position: absolute;
            right:5px;
            top: 1px;
        }

    </style>



    <!-- third party css -->
    <link href="{{asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- third party css end -->

    <style>



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
                            <li class="breadcrumb-item"><a href="{{ route('device.categories') }}">{{ __('Posts') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('device.category',$device->category) }}">{{ $device->category->name }}</a></li>
                            <li class="breadcrumb-item active">{{ $device->name }}</li>
                        </ol>
                    </div>
                    <h1 class="page-title">
                        <span style="font-size: 1.8rem">{{ $device->brand->name }} {{ $device->name }} {{ $device->year }}</span>
                    </h1>


                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">


                <!-- post card -->
                <div class="card device">

                    <div class="card-header">
                        <div class="row">
                            <div class="col-3">
                                <h5>{{ __('Creation date') }}</h5>
                            </div>
                            <div class="col-3">
                                <h5><i class="mdi mdi-eye-check-outline"></i> {{ __('Views') }}</h5>
                            </div>
                            <div class="col-5 col-md-4">
                                <h5><i class="mdi mdi-message-text-outline"></i> {{ __('Messages') }}</h5>
                            </div>
                            <div class="col-1 col-md-2">
                                <div style="float: right">
                                    <div class="badge bg-dark" style="margin : 0 0.4rem">{{ $device->category->name }}</div>
                                    <div class="badge {{ $device->statusClass() }}">{{ __($device->status) }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                {{ $device->created_at->formatLocalized('%A %d %B %Y ') }}
                            </div>
                            <div class="col-3">
                                {{ $device->statistics_count }} {{ __('Unique IP') }}
                            </div>
                            <div class="col-5 col-md-4">
                                {{ $device->reviews_count }}
                                @if ($device->reviews_count > 0)
                                    ( {{ __('Last') }} {{ $reviews->last()->created_at->formatLocalized('%d %B %Y') }} {{ __('by') }} {{ $reviews->last()->owner->name }})
                                @endif
                            </div>
                            <div class="col-1 col-md-2">
                                <div style="float: right">
                                    <p>{{ __('Price') }} : {{ $device->price }} €</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <p>Progarmme : La zone verte situe le programme d'utilisation dans la fourchette FREESTYLE / FREERIDE / FREERACE / RACE</p>
                            </div>
                            <div class="col-6">
                                    <?php
                                    $fs = $device->programme_start;
                                    $rs = $device->programme_end;
                                    $lpc = $fs*10;
                                    $cpc = ($rs-$fs)*10;
                                    $rpc = 100-$rs*10;

                                    echo "<div class='bar'><div class='barcontent left' style='width:".$lpc."%'></div><div class='barcontent center' style='width:".$cpc."%;'> </div><div class='barcontent right' style='width:".$rpc."%;'> </div></div>";
                                    ?>
                                </div>
                        </div>

                    </div>

                    <div class="card-body ">
                        <div id="post-body">
                            {!! $device->body !!}
                        </div>
                    </div>

                    <div class="card-footer ">
                        <div class="row">
                            <div class="col-6">
                                <i class="mdi mdi-chart-bar"></i>
                                <a class="" data-bs-toggle="collapse" href="#collapseTechnicaldata" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    {{ $device->technicaldatas->count() }} jeu(x) de données techniques disponibles
                                </a>

                            </div>
                            <div class="col-6">
                                @if ($device->link_product)<i class="mdi mdi-auto-fix"></i> <a href="{{ $device->link_product }}">{{ __('Product link') }} {{ $device->name }}</a>@endif

                            </div>
                        </div>

                        <div class="row collapse "  id="collapseTechnicaldata">

                            <div class="table-responsive">
                            <table class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline" id="yajra-datatable">
                                <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Id</th>
                                    <th>Device</th>
                                    <th>Mast</th>
                                    <th>Created</th>
                                    <th>Created</th>
                                    <th>Created</th>
                                    <th>Created</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            </div>

                            <div>
                                <h3>Données techniques moyennes</h3>
                                {{ (float)$device->{'attr3'} }}
                            </div>

                        </div>



                    </div>
                </div>







                <div class="row">
                    <div class="col-8 mb-2">
                        <a class="btn btn-primary" href="#" role="button">Répondre</a>
                        <span class="m-3"><b>Page {{ $reviews->currentPage() }} sur {{ $reviews->lastPage() }}</b> [ {{ $reviews->total() }} Messages ]</span>
                    </div>
                    <div class="col-4">
                        <div style="float: right">
                            {!! $reviews->links() !!}
                        </div>
                    </div>
                </div>

                @if ($device->reviews_count > 0)
                    @foreach($reviews as $review)
                        <div class="card d-block ">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6 col-md-2">
                                        <b>{{ $review->owner->name }}</b>
                                    </div>
                                    <div class="col-6 col-md-10">
                                        <i class="mdi mdi-message-text"></i><b> Posté le</b> {{ $review->created_at->formatLocalized('%d %B %Y, %R') }}
                                    </div>
                                </div>
                            </div>



                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2 d-none d-sm-none d-md-block">
                                        <div id="tooltip-container">
                                            <a href="{{ route('user.show' , ['user' => $review->owner->id]) }}" class="d-inline-block">
                                                <img src="{{$review->owner->avatarUrl() }}" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                                            </a>
                                        </div>
                                        <h5>{{ __('Inscription') }}</h5> {{ $review->owner->created_at->formatLocalized('%d %B %Y') }}
                                        <h5>{{ __('Messages') }}</h5> {{ $review->owner->reviews->count() }}
                                        <h5>{{ __('Localisation') }}</h5> {{ $review->owner->postal_code }}
                                    </div>
                                    <div class="col-md-10 col-sm-12">

                                        <div class="module">
                                            <div class="collapse" id="collapseReview{{ $review->id }}" >
                                                {!! $review->body !!}
                                            </div>
                                            <div class="floue"></div>

                                            @auth
                                                <a role="button" class="switch collapsed" data-bs-toggle="collapse" href="#collapseReview{{ $review->id }}"  aria-controls="collapseReview{{ $review->id }}"></a>
                                            @else
                                                <div id="post-overlay"><span class="badge badge-outline-dark">Pour lire cet article, <br><a href="{{ route('login') }}">connectez vous</a> c'est gratuit !</span></div>
                                            @endif

                                        </div>

                                        <div class="userEquipment mt-4">
                                            {!! $review->owner->personal_equipment !!}
                                        </div>


                                    </div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    @endforeach
                @else
                    <p class="ml-4" >{{ __("No reviews at that time") }}</p>
                @endif

                <div class="row">
                    <div class="col-8">
                        <a class="btn btn-primary" href="#" role="button">Répondre</a>
                        <span class="m-3"><b>Page {{ $reviews->currentPage() }} sur {{ $reviews->lastPage() }}</b> [ {{ $reviews->total() }} Messages ]</span>
                    </div>
                    <div class="col-4">
                        <div style="float: right">
                            {!! $reviews->links() !!}
                        </div>
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

    <script type="text/javascript">
        $(function () {

            var table = $('#yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                iDisplayLength: 50,
                bFilter: false,
                dom: 'rtip',
                ajax: "{{ route('technicaldatas.devicedata',$device ) }}",
                columns: [
                    {data: 'action', name: 'action'},
                    {data: 'id', name: 'id'},
                    {data: 'device_id', name: 'device_id'},
                    {data: 'attr4', name: 'attr4'},
                    {data: 'attr5', name: 'attr5'},
                    {data: 'attr6', name: 'attr6'},
                    {data: 'attr7', name: 'attr7'},
                    {data: 'created_at', name: 'created_at'},
                ]
            });

        });
    </script>

@endsection

