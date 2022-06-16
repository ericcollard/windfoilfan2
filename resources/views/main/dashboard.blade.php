@extends('layouts.vertical')


@section('css')
<!-- third party css -->
<link href="{{asset('assets/libs/admin-resources/admin-resources.min.css')}}" rel="stylesheet" type="text/css">
</link>
<!-- third party css end -->


<style>

    .brand-logo  {
        height: 18px;
        margin-right: 5px;
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
                </div>
                <h4 class="page-title">{{ __('Dashboard') }}</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <img src="{{asset('assets/images/icon-foil.png')}}" alt="" class="img-fluid" />
                    </div>
                    <h5 class="text-muted fw-normal mt-0" title="Number of Customers">{{ __('Foils') }} : <b>{{ $dashboard['foilCnt'] }}</b></h5>
                    <p class="mb-0 text-muted">
                        <span class="text-nowrap text-success "><a href="{{ route('device.category','foil') }}">{{ __('See all foils') }}</a></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <img src="{{asset('assets/images/icon-board.png')}}" alt="" class="img-fluid" />
                    </div>
                    <h5 class="text-muted fw-normal mt-0" title="Number of Customers">{{ __('Boards') }} : <b>{{ $dashboard['boardCnt'] }}</b></h5>
                    <p class="mb-0 text-muted">
                        <span class="text-nowrap text-success "><a href="{{ route('device.category','foil') }}">{{ __('See all boards') }}</b></a></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <img src="{{asset('assets/images/icon-sail.png')}}" alt="" class="img-fluid" />
                    </div>
                    <h5 class="text-muted fw-normal mt-0" title="Number of Customers">{{ __('Sails') }} : <b>{{ $dashboard['sailCnt'] }}</b></h5>
                    <p class="mb-0 text-muted">
                        <span class="text-nowrap text-success "><a href="{{ route('device.category','foil') }}">{{ __('See all sails') }}</a></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <img src="{{asset('assets/images/icon-brand.png')}}" alt="" class="img-fluid" />
                    </div>
                    <h5 class="text-muted fw-normal mt-0" title="Number of Customers">{{ __('Brands') }} : <b>{{ $dashboard['brandCnt'] }}</b></h5>
                    <p class="mb-0 text-muted">
                        <span class="text-nowrap text-success "><a href="{{ route('device.category','foil') }}">{{ __('See all brands') }}</a></span>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-lg-5">
            <div class="card card-h-100">
                <div class="card-body">
                    <h4 class="header-title mb-2">{{ __('Last discussion messages') }}</h4>

                    <div data-simplebar style="max-height: 1070px;">
                        <div class="timeline-alt pb-0">

                            @foreach($dashboard['lastReviews'] as $review)
                                <div class="timeline-item">
                                    <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                    <div class="timeline-item-info mb-1">
                                        <a href="#" class="text-info fw-bold d-block">{{ $review->owner->name }} <small class="text-muted float-end">{{ __('The') }} {{ $review->created_at->format('d-m-Y') }}, {{ $review->created_at->timezone('Europe/Paris')->format('H:i') }}</small></a>
                                        <small>{{ __('About') }} <a href='{{ $review->device->path() }}'>{{ $review->device->name }} {{ $review->device->brand->name }} {{ $review->device->year }}</a></small>
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

        <div class="col-lg-7">

            <div class="row">
                <div class="col-lg-7">
                    <div class="card card-h-100">
                        <div class="card-body">
                            <h4 class="header-title mb-0">{{ __('Popular devices') }}</h4><p class="mb-2 text-muted">{{ __('last 365 days') }}</p>


                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap table-hover mb-0">
                                    <tbody>
                                    @foreach($dashboard['deviceWithViewCount'] as $device)
                                        <tr>
                                            <td>
                                                <h5 class="font-14 my-0 fw-normal">
                                                    @if ($device->brand->logo_path)
                                                        <img src="{{  Storage::disk('logos')->url($device->brand->logo_path) }}" class="brand-logo"/>
                                                    @else
                                                        <img src="{{  asset('assets/images/brands/default.png') }}" class="brand-logo"/>
                                                    @endif
                                                    <a href="{{ $device->path() }}">{{ $device->name }} {{ $device->year }}</a>
                                                </h5>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-0 fw-normal">{{ $device->brand->name }}</h5>
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
                </div>
                <div class="col-lg-5">
                    <div class="card card-h-100">
                        <div class="card-body">
                            <h4 class="header-title mb-0">{{ __('Popular brands') }}</h4><p class="mb-2 text-muted">{{ __('last 365 days') }}</p>
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap table-hover mb-0">
                                    <tbody>
                                    @foreach($dashboard['brandsWithViewCount'] as $brand)
                                        <tr>
                                            <td>
                                                <h5 class="font-14 my-0 fw-normal">
                                                    @if ($brand->logo_path)
                                                        <img src="{{  Storage::disk('logos')->url($brand->logo_path) }}" class="brand-logo"/>
                                                    @else
                                                        <img src="{{  asset('assets/images/brands/default.png') }}" class="brand-logo"/>
                                                    @endif
                                                    <a href="{{ $brand->path() }}">{{ $brand->name }}</a>
                                                </h5>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-0 fw-normal">{{ $brand->cnt }} {{ __('Views') }}</h5>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title mb-3">Discussions</h4>
                            <div dir="ltr">
                                <div id="messages-chart" class="apex-charts" data-colors="#727cf5,#e3eaef"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title mb-0">{{ __('Views') }}</h4><p class="mb-2 text-muted">{{ __('last 36 months') }}</p>
                            <div dir="ltr">
                                <div id="views-chart-1" class="apex-charts" data-colors="#727cf5,#e3eaef"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>


    <!-- start Posts -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-h-100">
                <div class="card-body">
                    <h4 class="header-title mb-2">{{ __('Last posts') }}</h4>
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-hover mb-0">
                            <tbody>
                            @foreach($dashboard['posts'] as $post)
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-0 fw-normal">
                                            <img class="rounded brand-logo " src="{{ $post->imagePath() }}" alt="{{ $post->title }}">
                                            <a href="{{ $post->path() }}">{{ $post->title }}</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-0 fw-normal">{{ $post->views }} {{ __('Views') }}</h5>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end card-body-->
                <!-- end card-body -->
            </div>
        </div>


        <div class="col-lg-8">

            <div class="card card-h-100">
                <div class="card-body">
                    <h4 class="header-title mb-0">{{ __('Users creation') }}</h4><p class="mb-2 text-muted">{{ __('last 36 months') }}</p>

                    <div dir="ltr">
                        <div id="views-chart-2" class="apex-charts" data-colors="#727cf5,#e3eaef"></div>
                    </div>
                </div> <!-- end card-body-->
                <!-- end card-body -->
            </div>

        </div>
    </div>
    <!-- end Posts -->


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
        tooltip: {
            y: {
                formatter: function formatter(val) {
                    return val + " messages";
                }
            }
        }
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
        tooltip: {
            y: {
                formatter: function formatter(val) {
                    return val + " vues";
                }
            }
        }
    };

    var dataArrayViews2 = {
        series: [ {
            data: {!!  json_encode($dashboard['chartUsersByMonth']['values']) !!} ,
            name: 'Vues',
            showInLegend: false,
        } ],
        xaxis: {
            categories: {!! json_encode($dashboard['chartUsersByMonth']['dates'])   !!}  ,
            axisBorder: {
                show: false
            }
        },
        tooltip: {
            y: {
                formatter: function formatter(val) {
                    return val + " utilisateurs";
                }
            }
        }
    };






    var chart = new ApexCharts(document.querySelector("#messages-chart"), { ...options, ...dataArrayMessages });
    var chart1 = new ApexCharts(document.querySelector("#views-chart-1"), { ...options, ...dataArrayViews1 });
    var chart2 = new ApexCharts(document.querySelector("#views-chart-2"), { ...options, ...dataArrayViews2 });

    chart.render();
    chart1.render();
    chart2.render();



</script>
<!-- end demo js-->
@endsection
