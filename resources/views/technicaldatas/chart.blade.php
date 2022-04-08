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
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    <div>
                        Ce diagramme ne doit pas s'apprécier sans lire en détail la légende située en pied de page. Il est également important de considérer les autres paramètres car chaque produit est un tout.
                    </div>
                </div>
            </div>
            @if(Auth::guest())
                <div class="col-12">
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <div>
                            Vous affichez ce diagramme en mode Visiteur (non connecté). Les légendes ne sont par conséquent pas affichées.
                        </div>
                    </div>
                </div>
            @endif
        </div>



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
        var colors =  <?php echo json_encode($colors) ?>;
        var device_id = 0;
        var data_id = 0;

        <?php
            if ($device)
                echo "device_id = ".$device->id.";";
            if ($techdata)
                echo "data_id = ".$techdata->id.";";
        ?>

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
                    minPointLength: 2,
                    colorByPoint: true //need to become true for color bar.
                },
            },
            credits: {
                enabled: false
            },
            tooltip: {
                valueDecimals: 2
            },
            column: {
                colorByPoint: true //need to become true for color bar.
            },
            series: [{
                data: values,
                type: 'bar',
                showInLegend: false,
                colors : colors,
            } ]

        });
    </script>
@endsection


