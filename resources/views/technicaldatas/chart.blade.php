@extends('layouts.vertical')

@section('page_title')

@endsection
@section('page_description')

@endsection
@section('page_image')

@endsection
@section('page_author')

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
                            <li class="breadcrumb-item"><a href="{{ route('device.category',$attribute->category) }}">{{ $attribute->category->name }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Technical data chart') }}</li>
                            <li class="breadcrumb-item active">{{ $attribute->name }}</li>
                        </ol>
                    </div>
                    <h1 class="page-title">{{ __('Technical data chart') }} :  {{ $attribute->name  }}</h1>
                </div>
            </div>
        </div>
        <!-- end page title -->




        <div class="row">
            <div class="col-12">

                <div id="chartcomponent" style="height: 1500px"></div>
                <div id="drag"></div>
                <div id="drop"></div>
                <div id="json"></div>
            </div><!-- end col-12-->
        </div><!-- end row-->



        <div class="row mt-4">
            <div class="col-12">
                {!! $attribute->body !!}
            </div><!-- end col-12-->
        </div><!-- end row-->
    </div>

@endsection


@section('script-bottom')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/draggable-points.js"></script>

    <script type="text/javascript">

        function conv(name) {
            var parts = name.split('(id-');
            return parts[1].slice(0, -1);
        }

        var gearnames =  <?php echo json_encode($names) ?>;
        var values =  <?php echo json_encode($values) ?>;

        var chart = new Highcharts.Chart({
            chart: {
                renderTo: 'chartcomponent',
                animation: false
            },

            title: false,

            xAxis: {
                categories: gearnames,
                labels: {
                    formatter: function() {
                        if (this.value.includes('(id-')) {
                            return '<a href="/technicaldatas/'+conv(this.value) +'">'+this.value+'</a>';
                        }
                        else {
                            return this.value;
                        }

                    },
                    useHTML: true
                }
            },

            yAxis: [{ //--- Primary yAxis
                title: {
                    text: '{{ $legende }}'
                },
                min: {{ $chartMin }},
                max: {{ ($chartMax == 10.0 ? 10.1 : $chartMax) }},
            }, ],

            plotOptions: {
                series: {
                    point: {
                        events: {
                            drop: function () {
                                $('#drop').html(
                                    'In <b>' + this.series.name + '</b>, <b>' + this.category + '</b> was set to <b>' + Highcharts.numberFormat(this.y, 2) + '</b>'
                                );

                                //$.MessageBox("A plain MessageBox can replace Javascript's window.alert(), and it looks definitely better...");
                                $.ajax({
                                    type: "POST",
                                    data: {"_token": "{{ csrf_token() }}","deviceName": this.category, "value" : Highcharts.numberFormat(this.y, 2), "attributeField" : "{{ $attribute->field }}" },
                                    url: "{{ route('technicaldata.attributestore') }}",
                                    success: function(msg){
                                    }
                                });

                            }
                        }
                    },
                    stickyTracking: false,
                    dragDrop: {
                        draggableY: {{ $draggable }},
                        dragMinY: {{ $chartMin }},
                        dragMaxY: {{ $chartMax }},
                    },
                    states: {
                        inactive: {
                            opacity: 1
                        }
                    }
                },
                bar: {
                    stacking: 'normal',
                    minPointLength: 2
                },
            },
            credits: {
                enabled: false
            },
            tooltip: {
                valueDecimals: 2
            },

            series: [{
                data: values,
                type: 'bar',
                showInLegend: false,
            } ]

        });
    </script>
@endsection


