@extends('layouts.vertical')

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
                        <li class="breadcrumb-item"><a href="{{ route('brand.index') }}">{{ __('Brands') }}</a></li>
                        <li class="breadcrumb-item">{{ $brand->name }}</li>
                    </ol>
                </div>
                <h1 class="page-title">{{ __("Brand title", ['name' => $brand->name]) }}</h1>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- start présentation -->
    <div class="row mb-2">
        <div class="col-9">
            {!! $brand->body !!}
        </div>
        <div class="col-xl-3 col-lg-3 text-end">
            @can ('update', $brand)
                <li class="list-inline-item text-center">
                    <a href="{{ route('brand.edit',$brand) }}" class="btn  btn-warning rounded-pill mb-1" role="button"> <i class="mdi mdi-square-edit-outline"></i> {{ __("Edit") }}</a>
                </li>
            @endcan

            @if ($brand->url )
                <a href = "{{ $brand->url }}">
                    <img src="{{ $brand->logoUrl() }}" alt="{{ $brand->name }} brand logo " class="img-fluid"/>
                </a>

            @else
                <img src="{{ $brand->logoUrl() }}" alt="{{ $brand->name }} brand logo " class="img-fluid"/>
            @endif

        </div> <!-- end col -->
    </div>
    <!-- end présentation -->

    <!-- start liens -->
    <div class="row">


        <div class="col-xl-5 col-lg-6">

            <div class="row">
                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <img src="{{asset('assets/images/icon-foil.png')}}" alt="" class="img-fluid" />
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Customers">{{ __('Foils') }}</h5>
                            <h3 class="mt-3 mb-3">{{ $dashboard['foilCnt'] }}</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-nowrap text-success "><a href="{{ route('device.category','foil') }}?from={{ $brand->slug  }}">{{ __('See all foils') }}</a></span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <img src="{{asset('assets/images/icon-board.png')}}" alt="" class="img-fluid" />
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Orders">{{ __('Boards') }}</h5>
                            <h3 class="mt-3 mb-3">{{ $dashboard['boardCnt'] }}</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-nowrap text-success"><a href="{{ route('device.category','board') }}?from={{ $brand->slug  }}">{{ __('See all boards') }}</a></span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <img src="{{asset('assets/images/icon-sail.png')}}" alt="" class="img-fluid" />
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Average Revenue">{{ __('Sails') }}</h5>
                            <h3 class="mt-3 mb-3">{{ $dashboard['sailCnt'] }}</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-nowrap text-success"><a href="{{ route('device.category','sail') }}?from={{ $brand->slug  }}">{{ __('See all sails') }}</a></span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-pulse widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Growth">{{ __('Technical data') }}</h5>
                            <h3 class="mt-3 mb-3">{{ $dashboard['dataCnt'] }}</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-nowrap text-success">Donnés
                                    <a href="{{ route('technicaldata.category','foil') }}?from={{ $brand->slug  }}">{{ __('Foils') }}</a> -
                                    <a href="{{ route('technicaldata.category','board') }}?from={{ $brand->slug  }}">{{ __('Boards') }}</a> -
                                    <a href="{{ route('technicaldata.category','sail') }}?from={{ $brand->slug  }}">{{ __('Sails') }}</a>
                                </span>

                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

        </div> <!-- end col -->



        <div class="col-xl-7 col-lg-6">
            <div class="card card-h-100">
                <div class="card-body">
                    <h4 class="header-title mb-0">{{ __('Popular devices') }}</h4><p class="mb-2 text-muted">{{ __('last 365 days') }}</p>


                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-hover mb-0">
                            <tbody>
                            @foreach($dashboard['deviceWithViewCount'] as $device)
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-0 fw-normal"><a href="{{ $device->path() }}">{{ $device->name }} {{ $device->year }}</a></h5>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-0 fw-normal">{{ __($device->category->slug) }}</h5>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-0 fw-normal">{{ $device->cnt }} {{ __('Views') }}</h5>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->



    </div>
    <!-- end liens -->

    <div class="row">
        <div class="col-xl-7 col-lg-6">

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Messages</h4>

                    <div dir="ltr">
                        <div id="messages-chart" class="apex-charts" data-colors="#727cf5,#e3eaef"></div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">{{__('Views')}}</h4>

                    <div dir="ltr">
                        <div id="views-chart-1" class="apex-charts" data-colors="#727cf5,#e3eaef"></div>
                    </div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->

        </div>
        <div class="col-xl-5 col-lg-6">
            <div class="card card-h-100">
                <div class="card-body">
                    <h4 class="header-title mb-2">{{ __('Last messages') }}s</h4>

                    <div data-simplebar style="max-height: 650px;">
                        <div class="timeline-alt pb-0">
                            @foreach($dashboard['lastReviews'] as $review)
                                <div class="timeline-item">
                                    <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <a href="#" class="text-info fw-bold mb-1 d-block">{{ $review->owner->name }}</a>
                                        <small>{{ __('About') }} <a href='{{ $review->device->path() }}'>{{ $review->device->name }} {{ $review->device->brand->name }} {{ $review->device->year }}</a></small>
                                        <p class="mb-0 pb-2">
                                            <small class="text-muted">{{ __('The') }} {{ $review->created_at->format('d-m-Y') }}</small>
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- end timeline -->
                    </div> <!-- end slimscroll -->
                </div>
                <!-- end card-body -->
            </div>
        </div>
    </div>



</div>
<!-- container -->
@endsection

@section('script-bottom')
<!-- third party js -->
<script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/libs/admin-resources/admin-resources.min.js')}}"></script>
<!-- third party js ends -->

<!-- demo app -->
<script>
    var colors = ["#727cf5", "#e3eaef"];
    var dataColors = $("#messages-chart").data('colors');

    if (dataColors) {
        colors = dataColors.split(",");
    }

    var options = {
        chart: {
            height: 257,
            type: 'bar',
            stacked: true
        },
        plotOptions: {
            bar: {
                horizontal: false,
                //columnWidth: '20%'
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        zoom: {
            enabled: false
        },
        legend: {
            show: false
        },
        colors: colors,
        yaxis: {
            labels: {
                offsetX: -15
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function formatter(val) {
                    return val + " messages";
                }
            }
        }
    };


    var dataArrayMessages = {
        series: [ {
            data: {!!  json_encode($dashboard['chartDataByMonth']['values']) !!} ,
            name: 'messages',
            showInLegend: false,
        } ],
        xaxis: {
            categories: {!! json_encode($dashboard['chartDataByMonth']['dates'])   !!}  ,
            axisBorder: {
                show: false
            }
        },
    };

    var dataArrayViews1 = {
        series: [ {
            data: {!!  json_encode($dashboard['chartViewsByMonth']['values']) !!} ,
            name: 'Vues',
            showInLegend: false,
        } ],
        xaxis: {
            categories: {!! json_encode($dashboard['chartViewsByMonth']['dates'])   !!}  ,
            axisBorder: {
                show: false
            }
        },
    };


    var chart = new ApexCharts(document.querySelector("#messages-chart"), { ...options, ...dataArrayMessages });
    var chart1 = new ApexCharts(document.querySelector("#views-chart-1"), { ...options, ...dataArrayViews1 });

    chart.render();
    chart1.render();

</script>
<!-- end demo js-->
@endsection
