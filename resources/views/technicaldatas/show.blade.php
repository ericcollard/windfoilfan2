@extends('layouts.vertical')


@section('css')
    <style>
        .brand-logo {
            height: 30px;
            margin-right: 10px;
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
                            <li class="breadcrumb-item"><a href="{{ route('device.categories') }}">{{ __('Devices') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('device.category',$technicaldata->device->category) }}">{{ $technicaldata->device->category->name }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('device.category',$technicaldata->device->category) }}?from={{ $technicaldata->device->brand->slug }}">{{ $technicaldata->device->brand->name }}</a></li>
                            <li class="breadcrumb-item active"><a href="{{ $technicaldata->device->path() }}">{{ $technicaldata->device->name }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Technical data') }}</li>
                            <li class="breadcrumb-item active">{{ $technicaldata->id }}</li>
                        </ol>
                    </div>
                    <h1 class="page-title">
                        <img src="{{ $technicaldata->device->brand->logoUrl() }}" alt="{{ $technicaldata->device->brand->name }} brand logo " class="brand-logo"/>
                        <span>{{ __('Technical data') }} ref {{$technicaldata->id }}</span>
                    </h1>
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
                            <div class="col-sm-4">
                                {{ __('Serial number') }} : {{  $technicaldata->serial }}
                            </div>
                            <div class="col-sm-4">
                                {{ $technicaldata->device->category->name }} <a href="{{ $technicaldata->device->path() }}">{{ $technicaldata->device->brand->name }} {{ $technicaldata->device->name }} {{ $technicaldata->device->year }}</a>
                            </div>
                            <div class="col-sm-4  text-end">
                                {{ __('Technical data') }} enregistrées le  {{$technicaldata->created_at->formatLocalized('%d %B %Y %H:%M' ) }} par {{$technicaldata->author->name }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                Commentaire :
                                {!! $technicaldata->body !!}
                            </div>
                            <div class="col-sm-4 text-end">

                                <ul class="social-list list-inline mt-3">
                                    @can ('update', $technicaldata)
                                        <li class="list-inline-item text-center">
                                            <a href="{{ route('technicaldata.edit',[ 'technicaldata'=>$technicaldata]) }}" class="btn btn-sm btn-warning rounded-pill" role="button"> <i class="mdi mdi-square-edit-outline"></i> {{ __("Edit") }}</a>
                                        </li>
                                    @endcan
                                    @can ('delete', $technicaldata)
                                        <li class="list-inline-item text-center">
                                            <form id="deleteData" method="POST" action="{{ route('technicaldata.destroy',['technicaldata' => $technicaldata]) }}" >
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="button" class="btn btn-sm btn-danger rounded-pill">
                                                    <a href="javascript:{}" onclick="document.getElementById('deleteData').submit(); return false;" style="color: inherit;"><i class="mdi mdi-delete me-1"></i>{{ __('Delete') }}</a>
                                                </button>
                                            </form>
                                        </li>
                                    @endcan
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        @foreach ($attributes as $group => $attributeGroup)

                            <h2 class="mb-2">{{ __($group) }}</h2>


                            @if ($group == 'usage_group')

                                <div class="row">
                                    <div class="col-xl-6">
                                        @foreach($attributeGroup as $attribute)
                                            <?php
                                            if (!empty($attribute)) {
                                                $chartData['labels'][] = __($attribute->name);
                                            }
                                            if (!empty($technicaldata)) {
                                                $chartData['values'][] = (float)$technicaldata->{$attribute->field};
                                            }
                                            ?>
                                            <p>
                                                {{ __($attribute->slug) }} :
                                                @if (is_null($technicaldata->{$attribute->field}))
                                                    {{ 'nc.' }}
                                                @else
                                                    <a href="{{ route('technicaldatas.attributeChart',$attribute->slug) }}?technicaldata={{ $technicaldata->id }}&device={{ $technicaldata->device->id }}">{{ number_format($technicaldata->{$attribute->field},2) }} {{ $attribute->unit }}</a>
                                                @endif
                                            (
                                            <span class="text-warning">min = {{ number_format($technicaldatas_minmax->{'min_'.$attribute->field},2) }}</span>
                                            -
                                            <span class="text-success">max = {{ number_format($technicaldatas_minmax->{'max_'.$attribute->field},2) }}</span>
                                            )

                                            </p>
                                        @endforeach
                                    </div>
                                    <div class="col-xl-6">
                                        <figure class="highcharts-figure">
                                            <div id="container-radar"></div>
                                        </figure>
                                    </div>
                                </div>

                                @elseif ($group == 'structural_result_group')

                                    <div class="row">
                                        <div class="col-xl-12">
                                            @foreach($attributeGroup as $key => $attribute)
                                                <p>
                                                    {{ __($attribute->slug) }} :
                                                    @if (is_null($technicaldata->{$attribute->field}))
                                                        {{ 'nc.' }}
                                                    @else
                                                        <a href="{{ route('technicaldatas.attributeChart',$attribute->slug) }}?technicaldata={{ $technicaldata->id }}&device={{ $technicaldata->device->id }}">{{ number_format($technicaldata->{$attribute->field},2) }} {{ $attribute->unit }}</a>
                                                    @endif
                                                    (
                                                    <span class="text-warning">min = {{ number_format($technicaldatas_minmax->{'min_'.$attribute->field},2) }}</span>
                                                    -
                                                    <span class="text-success">max = {{ number_format($technicaldatas_minmax->{'max_'.$attribute->field},2) }}</span>
                                                    )
                                                </p>
                                            @endforeach
                                        </div>
                                    </div>

                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <figure class="highcharts-figure">
                                            <div id="container-flex" class="chart-container"></div>
                                        </figure>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <figure class="highcharts-figure">
                                            <div id="container-torsion" class="chart-container"></div>
                                        </figure>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <figure class="highcharts-figure">
                                            <div id="container-module" class="chart-container"></div>
                                        </figure>
                                    </div>
                                </div>


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
                                                @if (is_null($technicaldata->{$attribute->field}))
                                                    {{ 'nc.' }}
                                                @else
                                                    <a href="{{ route('technicaldatas.attributeChart',$attribute->slug) }}?technicaldata={{ $technicaldata->id }}&device={{ $technicaldata->device->id }}">{{ number_format($technicaldata->{$attribute->field},2) }} {{ $attribute->unit }}</a>
                                                @endif
                                                (
                                                <span class="text-warning">min = {{ number_format($technicaldatas_minmax->{'min_'.$attribute->field},2) }}</span>
                                                -
                                                <span class="text-success">max = {{ number_format($technicaldatas_minmax->{'max_'.$attribute->field},2) }}</span>
                                                )
                                            @endif
                                        </div>
                                    @endforeach
                                </div>

                            @endif

                        @endforeach




                    </div>
                </div>
            </div><!-- end col-12-->
        </div><!-- end row-->

    </div>

@endsection


@section('script-bottom')
    <!-- third party js -->
    {{--<script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>--}}
    {{--<script src="https://code.highcharts.com/modules/exporting.js"></script>--}}
    {{--<script src="https://code.highcharts.com/modules/export-data.js"></script>--}}


    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>


    <!-- third party js ends -->

    <!-- demo app -->
    <script>



        Highcharts.chart('container-radar', {
            chart: {
                polar: true,
                type: 'line'
            },
            title:  false,
            pane: {
                size: '90%'
            },
            credits: {
                enabled: false
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
                        maxWidth: 500
                    }
                }]
            }

        });


        var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },
            title: {
                verticalAlign: "bottom"
            },
            pane: {
                center: ['50%', '80%'],
                size: '100%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor:
                        Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },
            exporting: {
                enabled: false
            },
            tooltip: {
                enabled: false
            },
            credits: {
                enabled: false
            },
            // the value axis
            yAxis: {
                stops: [
                    [0.2, '#DF5353'], // red
                    [0.5, '#DDDF0D'], // yellow
                    [0.8, '#55BF3B'] // green
                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                labels: {
                    y: 20
                }
            },
            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: -30,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-flex', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: {{ round($technicaldatas_minmax->{'min_attr19'}) }},
                max: {{ round($technicaldatas_minmax->{'max_attr19'}) }},
                tickPositions : [{{ round($technicaldatas_minmax->{'min_attr19'}) }},{{ round($technicaldatas_minmax->{'max_attr19'}) }}]
            },
            title: {
                text: 'Coefficient de rigidité en flexion (EIx)',
            },
            series: [{
                name: 'Flexion',
                data: [{{ $technicaldata->attr19 }}], //22590
                dataLabels: {
                    format:
                        '<div style="text-align:center">' +
                        '<span style="font-size:12px">{y:.1f}</span><br/>' +
                        '<span style="font-size:10px;opacity:0.4">N.m2</span>' +
                        '</div>'
                },
            }]

        }));

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-torsion', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: {{ round($technicaldatas_minmax->{'min_attr20'}) }},
                max: {{ round($technicaldatas_minmax->{'max_attr20'}) }},
                tickPositions : [{{ round($technicaldatas_minmax->{'min_attr20'}) }},{{ round($technicaldatas_minmax->{'max_attr20'}) }}]
            },
            title: {
                text: 'Coefficient de rigidité en torsion (GIg)',
            },

            series: [{
                name: 'Flexion',
                data: [{{ $technicaldata->attr20 }}], //22590
                dataLabels: {
                    format:
                        '<div style="text-align:center">' +
                        '<span style="font-size:12px">{y:.1f}</span><br/>' +
                        '<span style="font-size:10px;opacity:0.4">N.m2/Rad</span>' +
                        '</div>'
                },
            }]

        }));

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-module', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: {{ round($technicaldatas_minmax->{'min_attr21'}) }},
                max: {{ round($technicaldatas_minmax->{'max_attr21'}) }},
                tickPositions : [{{ round($technicaldatas_minmax->{'min_attr21'}) }},{{ round($technicaldatas_minmax->{'max_attr21'}) }}]
            },
            title: {
                text: "Module d'Young (E)",
            },
            series: [{
                name: 'Flexion',
                data: [{{ $technicaldata->attr21 }}], //22590
                dataLabels: {
                    format:
                        '<div style="text-align:center">' +
                        '<span style="font-size:12px">{y:.1f}</span><br/>' +
                        '<span style="font-size:10px;opacity:0.4">GPa</span>' +
                        '</div>'
                },
            }]

        }));



    </script>
    <!-- end demo js-->
@endsection

