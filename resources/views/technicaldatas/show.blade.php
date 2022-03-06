@extends('layouts.vertical')

@section('page_title')

@endsection
@section('page_description')

@endsection
@section('page_image')

@endsection
@section('page_author')

@endsection

@section('css')

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
                            <li class="breadcrumb-item"><a href="{{ route('device.category',$technicaldata->device->category) }}">{{ $technicaldata->device->category->name }}</a></li>
                            <li class="breadcrumb-item active"><a href="{{ $technicaldata->device->path() }}">{{ $technicaldata->device->name }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Technical data') }}</li>
                            <li class="breadcrumb-item active">{{ $technicaldata->id }}</li>
                        </ol>
                    </div>
                    <h1 class="page-title">{{ __('Technical data') }} ref {{$technicaldata->id }}</h1>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">


                <!-- post card -->
                <div class="card d-block">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-4">
                                Identification : {{  $technicaldata->serial }}
                            </div>
                            <div class="col-4">
                                {{ $technicaldata->device->category->name }} {{ $technicaldata->device->brand->name }} {{ $technicaldata->device->name }} {{ $technicaldata->device->year }}
                            </div>
                            <div class="col-4">
                                {{ __('Technical data') }} enregistrées le  {{$technicaldata->created_at->formatLocalized('%d %B %Y %H:%M' ) }}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2>Commentaire :</h2>
                                {!! $technicaldata->body !!}
                            </div>
                        </div>

                        @foreach ($attributes as $group => $attributeGroup)

                            <h2 class="mb-2">{{ __($group) }}</h2>

                            @if ($group == 'usage_group')
                                <?php
                                    foreach ($attributeGroup as $attribute)
                                    {
                                        $chartData['labels'][] = __($attribute->name);
                                        $chartData['values'][] = (float)$technicaldata->{$attribute->field};
                                    }
                                ?>
                                    <figure class="highcharts-figure">
                                        <div id="container-radar"></div>
                                    </figure>
                            @else

                                <div class="d-flex flex-row justify-content-between mb-5 flex-wrap text-dark">
                                    @foreach ($attributeGroup as $attribute)
                                        <div class="p-0 mr-lg-4">{{ __($attribute->slug) }} :
                                            @if ($attribute->slug == 'cover')
                                                @if ($technicaldata->{$attribute->field} == -1 )
                                                    {{ __('Without') }}
                                                @elseif ($technicaldata->{$attribute->field} == 0 )
                                                    {{ __('Included') }}
                                                @else
                                                    {{ is_null($technicaldata->{$attribute->field}) ? 'nc' : number_format($technicaldata->{$attribute->field},2) }} {{ $attribute->unit }}
                                                @endif
                                            @else
                                                {{ is_null($technicaldata->{$attribute->field}) ? 'nc.' : number_format($technicaldata->{$attribute->field},2) }} {{ $attribute->unit }}
                                            @endif
                                        </div>
                                    @endforeach
                                </div>

                            @endif

                        @endforeach

                        <h2>Test</h2>
                        <div id="chart1">
                        </div>



                        <div dir="ltr">
                            <div id="basic-radialbar" class="apex-charts" data-colors="#39afd1"></div>
                        </div>




                    </div>
                </div>
            </div><!-- end col-12-->
        </div><!-- end row-->

    </div>

@endsection


@section('script-bottom')
    <!-- third party js -->
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
    {{--<script src="https://code.highcharts.com/modules/exporting.js"></script>--}}
    {{--<script src="https://code.highcharts.com/modules/export-data.js"></script>--}}
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>


    <!-- third party js ends -->

    <!-- demo app -->
    <script>


        var options1 = {
            chart: {
                height: 280,
                type: "radialBar",
            },

            series: [60],
            colors: ["#87D4F9"],
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: "65%",
                        background: "#293450"
                    },
                    track: {
                        dropShadow: {
                            enabled: true,
                            top: 2,
                            left: 0,
                            blur: 4,
                            opacity: 0.15
                        }
                    },
                    dataLabels: {
                        name: {
                            offsetY: -10,
                            color: "#fff",
                            fontSize: "13px"
                        },
                        value: {
                            color: "#fff",
                            fontSize: "30px",
                            show: true
                        }
                    }
                }
            },
            fill: {
                type: "gradient",
                gradient: {
                    shade: "dark",
                    type: "vertical",
                    gradientToColors: ["#20E647"],
                    stops: [0, 100]
                }
            },
            stroke: {
                lineCap: "round"
            },
            labels: ["Progress"],

            animations: {
                enabled: true,
                easing: 'easeinout',
                speed: 800,
                animateGradually: {
                    enabled: true,
                    delay: 150
                },
                dynamicAnimation: {
                    enabled: true,
                    speed: 350
                }
            }
        };

        new ApexCharts(document.querySelector("#chart1"), options1).render();





        Highcharts.chart('container-radar', {
            chart: {
                polar: true,
                type: 'line'
            },
            title:  false,
            pane: {
                size: '90%'
            },
            xAxis: {
                categories: <?php echo json_encode($chartData['labels']) ?>,
                tickmarkPlacement: 'on',
                lineWidth: 0
            },
            yAxis: {
                gridLineInterpolation: 'polygon',
                lineWidth: 0,
                min: 0,
                max: 10
            },
            tooltip: {
                shared: true,
                pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.2f}</b><br/>'
            },
            legend: false,
            series: [{
                name: 'En navigation',
                data: {{ json_encode($chartData['values']) }},
                pointPlacement: 'on'
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 600
                    }
                }]
            }

        });



    </script>
    <!-- end demo js-->
@endsection
