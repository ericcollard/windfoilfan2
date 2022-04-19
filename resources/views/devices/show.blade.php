@extends('layouts.vertical')

@section('css')
    <style>

        .brand-logo {
            height: 30px;
            margin-right: 10px;
        }
        .review_body .container, .device_body .container  {
            padding-left: 0;
            padding-right: 0;
        }


        .chart-gauge {
            height: 200px;
        }

        .chart-radar {
            height: 600px;
        }

        .review_body .multi-col-2, .device_body .multi-col-2 {
            -webkit-column-count: 2;
            -moz-column-count: 2;
            column-count: 2;
            -webkit-column-gap: 2em;
            -moz-column-gap: 2em;
            column-gap: 2em;
            -webkit-column-width: 300px;
            -moz-column-width: 300px;
            column-width: 300px;
        }

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
            height: 100%;
            display: inline-block;
            margin: 0px;
            padding: 0px;
            height: 22px;
        }

        .left {
            background-color: dimgrey;
        }

        .center {
            background-color: greenyellow;
        }

        .right {
            background-color: dimgrey;
        }

        .bar {
            min-width: 100px;
            position: relative;

        }

        .bar:before {
            font-size: 0.7em;
            color: white;
            content: 'FREESTYLE';
            position: absolute;
            left: 5px;
            top: 1px;
        }

        .bar:after {
            font-size: 0.7em;
            color: white;
            content: 'RACE';
            position: absolute;
            right: 5px;
            top: 1px;
        }


        .review_body .citation {
            background-color: #f6f6f6;
            border: solid 1px #A9B8C2;
            margin: 5px
        }

        .review_body .citation .citation_author {
            background-color: #A9B8C2;
            padding: 5px;
            color: #0c1021;
        }

        .review_body .citation .citation_body {
            padding: 5px;
        }

    </style>



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
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Windfoilfan</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('device.categories') }}">{{ __('Posts') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('device.category',$device->category) }}">{{ $device->category->name }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('device.category',$device->category) }}?from={{ $device->brand->slug }}">{{ $device->brand->name }}</a></li>
                            <li class="breadcrumb-item active">{{ $device->name }}</li>
                        </ol>
                    </div>
                    <h1 class="page-title">
                        <img src="{{ $device->brand->logoUrl() }}" alt="{{ $device->brand->name }} brand logo " class="brand-logo"/>
                        <span><a href="{{ $device->brand->path() }}">{{ $device->brand->name }}</a> {{ $device->name }} {{ $device->year }}</span>
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
                            <div class="col-3  col-md-4">
                                <h5>{{ __('Creation date') }}</h5>
                            </div>
                            <div class="col-3 col-md-3">
                                <h5><i class="mdi mdi-eye-check-outline"></i> {{ __('Views') }}</h5>
                            </div>
                            <div class="col-4 col-md-3">
                                <h5><i class="mdi mdi-message-text-outline"></i> {{ __('Messages') }}</h5>
                            </div>
                            <div class="col-2 col-md-2 text-end">
                                    <div class="badge bg-dark" style="margin : 0 0.4rem">{{ $device->category->name }}</div>
                                    <div class="badge {{ $device->statusClass() }}">{{ __($device->status) }}</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3  col-md-4">
                                {{ $device->created_at->formatLocalized('%d %B %Y ') }} {{ __('by') }} {{ $device->creator->name }}
                            </div>
                            <div class="col-3 col-md-3">
                                {{ $device->views }} {{ __('Views') }}
                            </div>
                            <div class="col-4 col-md-3">
                                {{ $device->reviews->count() }}
                                @if ($device->reviews->count() > 0)
                                    ( {{ __('Last') }} {{ $device->reviews->first()->created_at->formatLocalized('%d %B %Y') }} {{ __('by') }} {{ $device->reviews->first()->owner->name }})
                                @endif
                            </div>
                            <div class="col-2 col-md-2 text-end">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 mt-2">
                                <p>Programme : La zone verte situe le programme d'utilisation dans la fourchette FREESTYLE / FREERIDE / FREERACE / RACE</p>
                                <?php
                                $fs = $device->programme_start;
                                $rs = $device->programme_end;
                                $lpc = $fs*10;
                                $cpc = ($rs-$fs)*10;
                                $rpc = 100-$rs*10;

                                echo "<div class='bar'><div class='barcontent left' style='width:".$lpc."%'></div><div class='barcontent center' style='width:".$cpc."%;'> </div><div class='barcontent right' style='width:".$rpc."%;'> </div></div>";
                                ?>
                            </div>
                            <div class="col-6 text-end mt-2">
                                <p>{{ __('Price') }} : {{ $device->price }} €</p>
                                <ul class="social-list list-inline mt-3">

                                    @can ('update', $device)
                                        <li class="list-inline-item text-center mb-1">
                                            <a href="{{ route('device.edit',['category'=>$device->category, 'device'=>$device]) }}" class="btn  btn-warning rounded-pill" role="button"> <i class="mdi mdi-square-edit-outline"></i> {{ __("Edit") }}</a>
                                        </li>
                                    @endcan
                                    @can ('delete', $device)
                                        <li class="list-inline-item text-center mb-1">
                                            <form id="deleteData" method="POST" action="{{ route('device.destroy',['category'=>$device->category, 'device'=>$device]) }}" >
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="button" class="btn btn-danger rounded-pill">
                                                    <a href="javascript:{}" onclick="document.getElementById('deleteData').submit(); return false;" style="color: inherit;"><i class="mdi mdi-delete me-1"></i>{{ __('Delete') }}</a>
                                                </button>
                                            </form>
                                        </li>
                                    @endcan
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="card-body device_body">
                        <div id="post-body">
                            {!! $device->body !!}
                        </div>
                    </div>

                    <div class="card-footer ">
                        <div class="row">
                            <div class="col-6">
                                <i class="mdi mdi-chart-bar"></i>
                                <a class="" data-bs-toggle="collapse" href="#collapseTechnicaldata" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    {{ $device->technicaldatas->count() }} {{ __('available data set(s)') }}
                                </a>

                            </div>
                            <div class="col-6 text-end">
                                @if ($device->link_product)<i class="mdi mdi-auto-fix"></i> <a href="{{ $device->link_product }}">{{ __('Product link') }} {{ $device->name }}</a>@endif

                            </div>
                        </div>

                        <div class="collapse "  id="collapseTechnicaldata">

                            <div class="row mt-2">
                                <div class="col-12">
                                    @can ('create', App\Models\Technicaldata::class)
                                            <a href="{{ route('technicaldata.create',[ 'device'=>$device]) }}" class="btn  btn-success rounded-pill mb-1" role="button"> <i class="mdi mdi-square-edit-outline"></i> {{ __("Add a technical data set") }}</a>
                                    @endcan
                                </div>
                            </div>


                            @can('viewAny', App\Models\Technicaldata::class)
                            <div class="table-responsive">
                                <table class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline" id="yajra-datatable">
                                    <thead>
                                    <tr>
                                        <th>{{ __('Action') }}</th>
                                        <th>{{ __('Serial number') }}</th>
                                        <th>{{ __('Created at') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            @endcan

                            <div class="row">
                                <div class="col-12">
                                    <h3>Dernières données techniques enregistrées</h3>
                                    <?php
                                        $chart1Data = [];
                                        $chart2Data = [];
                                        $technicaldata_id = null;
                                        foreach ($attributes as $group => $attributesSet)
                                            {
                                                foreach ($attributesSet as $attribute)
                                                    {
                                                        if ($group == 'usage_group')
                                                            {

                                                                if (! is_null($attributesSet->results))
                                                                {
                                                                    $chart1Data['values'][] = (float)$attributesSet->results->{$attribute->field};
                                                                    $link = route('technicaldatas.attributeChart',$attribute->slug).'?technicaldata='.$attributesSet->results->id;
                                                                    $chart1Data['labels'][] = '<a href="'.$link.'" style="color: #727cf5; cursor:pointer;">'.__($attribute->slug).'</a>' ;
                                                                }
                                                                else
                                                                {
                                                                    $chart1Data['labels'][] = __($attribute->slug) ;
                                                                    $chart1Data['values'][] = 0;
                                                                }

                                                            }
                                                        elseif ($group == 'structural_result_group')
                                                            {
                                                                if (! is_null($attributesSet->results) and !is_null($technicaldatas_minmax))
                                                                {
                                                                    $chart2Data['link'][] = route('technicaldatas.attributeChart',$attribute->slug).'?technicaldata='.$attributesSet->results->id;
                                                                    $chart2Data['labels'][] = __($attribute->slug) ;
                                                                    $chart2Data['values'][] = (float)$attributesSet->results->{$attribute->field};
                                                                    $chart2Data['min'][] = $technicaldatas_minmax->{'min_'.$attribute->field};
                                                                    $chart2Data['max'][] = $technicaldatas_minmax->{'max_'.$attribute->field};
                                                                }
                                                            }
                                                    }
                                            }
                                    ?>

                                </div>
                            </div>

                            <div class="row g-0">
                                <div class="col-8">
                                    <div id="container-radar" class="chart-radar"></div>
                                </div>
                                <div class="col-4">
                                    <div id="container-flex" class="chart-gauge"></div>
                                    <div id="container-torsion" class="chart-gauge"></div>
                                    <div id="container-module" class="chart-gauge"></div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-7 mb-2">
                        @can ('answer', $device)
                            <a class="btn btn-success rounded-pill" href="{{ route('review.create',[ 'device'=>$device]) }}" role="button"> <i class="mdi mdi-square-edit-outline"></i>  {{ __('Answer') }}</a>
                        @else
                            <a class="btn btn-success rounded-pill" href="{{ route('login') }}" role="button"> <i class="mdi mdi-square-edit-outline"></i>  {{ __('Answer') }} : {{ __('please connect') }}</a>
                        @endcan
                        <span class="m-3"><b>Page {{ $reviews->currentPage() }} {{ __('on') }} {{ $reviews->lastPage() }}</b> [ {{ $reviews->total() }} Messages - {{ __('Most recent first') }}]</span>
                    </div>
                    <div class="col-5">
                        <div style="float: right">
                            {!! $reviews->links() !!}
                        </div>
                    </div>
                </div>

                @if ($reviews->count() > 0)
                    @foreach($reviews as $index => $review)
                        <div class="card d-block ">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6 col-md-2">
                                        <b>{{ $review->owner->name }}</b>
                                    </div>
                                    <div class="col-6 col-md-5">
                                        <i class="mdi mdi-message-text"></i><b> {{ __('Posted on') }}</b> {{ $review->created_at->formatLocalized('%d %B %Y') }}, {{ $review->created_at->timezone('Europe/Paris')->format('H:i') }}


                                        @if ($index == 0)
                                            <span class="alert-warning px-2" >({{ __('Most recent message') }})</span>
                                        @endif
                                    </div>
                                    <div class="col-12 col-md-5 text-end">
                                        <b>{{ __('Title') }}</b> : {{ is_null($review->title) ? 'nc' :  $review->title }}
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
                                            <div class="collapse review_body" id="collapseReview{{ $review->id }}" >
                                                {!! $review->formatted_body() !!}
                                            </div>
                                            <div class="floue"></div>

                                            @auth
                                                <a role="button" class="switch collapsed" data-bs-toggle="collapse" href="#collapseReview{{ $review->id }}"  aria-controls="collapseReview{{ $review->id }}"></a>
                                            @else
                                                <div id="post-overlay"><span class="badge badge-outline-dark">{!!  __('Please connect', ['LINK' => route('login')]) !!}</div>



                                            @endif

                                        </div>


                                        <div class="row userEquipment mt-4">
                                            <div class="col-8">
                                                {!! $review->owner->personal_equipment !!}
                                            </div>
                                            <div class="col-4  text-end">

                                                @can ('answer',$device)
                                                    <li class="list-inline-item text-center">
                                                        <a class="btn btn-success rounded-pill mb-1" href="{{ route('review.cite',$review) }}" role="button"> <i class="mdi mdi-chat-processing-outline"></i>  {{ __('Cite') }}</a>
                                                    </li>
                                                @endcan
                                                @can ('update', $review)
                                                    <li class="list-inline-item text-center">
                                                        <a class="btn btn-warning rounded-pill mb-1" href="{{ route('review.edit',$review) }}" role="button"> <i class="mdi mdi-square-edit-outline"></i>  {{ __('Edit') }}</a>
                                                    </li>
                                                @endcan
                                                @can ('delete', $review)
                                                    <li class="list-inline-item text-center">
                                                        <form id="deleteReview{{ $review->id }}" method="POST" action="{{ route('review.destroy',['review'=>$review]) }}" >
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button type="button" class="btn btn-danger rounded-pill  mb-1">
                                                                <a href="javascript:{}" onclick="document.getElementById('deleteReview{{ $review->id }}').submit(); return false;" style="color: inherit;"><i class="mdi mdi-delete me-1"></i>{{ __('Delete') }}</a>
                                                            </button>
                                                        </form>
                                                    </li>
                                                @endcan




                                            </div>
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
                    <div class="col-7">
                        @can ('answer', $device)
                            <a class="btn btn-success rounded-pill" href="{{ route('review.create',[ 'device'=>$device]) }}" role="button"> <i class="mdi mdi-square-edit-outline"></i>  {{ __('Answer') }}</a>
                        @else
                            <a class="btn btn-success rounded-pill" href="{{ route('login') }}" role="button"> <i class="mdi mdi-square-edit-outline"></i> {{ __('Answer') }} : {{ __('please connect') }}</a>
                        @endcan
                        <span class="m-3"><b>Page {{ $reviews->currentPage() }} {{ __('on') }} {{ $reviews->lastPage() }}</b> [ {{ $reviews->total() }} Messages ]</span>
                    </div>
                    <div class="col-5">
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

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>


    <script type="text/javascript">
        $(function () {
            var table = $('#yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                iDisplayLength: 50,
                bFilter: false,
                order: [[ 2, 'asc' ]],
                dom: 'rtip',
                ajax: "{{ route('technicaldatas.devicedata',$device ) }}",
                columns: [
                    {data: 'action', name: 'action'},
                    {data: 'serial', name: 'serial'},
                    {
                        data: 'created_at',
                        name: 'created_at',
                    }
                ],
                columnDefs: [
                    { targets: 2,
                        render: function(data, type) {
                            if (type == 'sort') {
                                return data;
                            }
                            var date = new Date(data);
                            return date.toLocaleDateString();
                        }
                    }
                ]
            });

        });

        var labels = [];
        var values = [];
        @if(array_key_exists('labels',$chart1Data) and array_key_exists('values',$chart1Data))
            labels = {!! json_encode($chart1Data['labels']) !!} ;
            values = {!! json_encode($chart1Data['values']) !!} ;
        @endif


        Highcharts.chart('container-radar', {
            chart: {
                polar: true,
                type: 'line'
            },
            title:  false,
            pane: {
                size: '70%'
            },
            credits: {
                enabled: false
            },
            xAxis: {
                categories: labels,
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
                data: values,
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
                verticalAlign: "bottom",
                style: { "color": "#333333", "fontSize": "10px" }
            },
            pane: {
                center: ['50%', '80%'],
                size: '90%',
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

        @if(array_key_exists('min',$chart2Data) and array_key_exists('max',$chart2Data) and array_key_exists('values',$chart2Data) and array_key_exists('link',$chart2Data))
            minvalue = {{ round($chart2Data['min'][0]) }};
            maxvalue = {{ round($chart2Data['max'][0]) }};
            currentvalue = {{ $chart2Data['values'][0] }};
            title = '<a href= "{{ $chart2Data['link'][0] }}" style="color: #727cf5; cursor:pointer;">Coefficient de rigidité en flexion (EIx)</a>';

        @else
            minvalue =  0;
            maxvalue = 0;
            currentvalue = 0;
            title = 'Coefficient de rigidité en flexion (EIx)';
        @endif


        var chartSpeed = Highcharts.chart('container-flex', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: minvalue,
                max: maxvalue,
                tickPositions : [minvalue,maxvalue],
            },
            title: {
                text: title,
                useHtml: true
            },
            series: [{
                name: 'Flexion',
                data: [currentvalue], //22590
                dataLabels: {
                    format:
                        '<div style="text-align:center">' +
                        '<span style="font-size:12px">{y:.1f}</span><br/>' +
                        '<span style="font-size:10px;opacity:0.4">N.m2</span>' +
                        '</div>'
                },
            }],

        }));

        @if( array_key_exists('min',$chart2Data) and array_key_exists('max',$chart2Data) and array_key_exists('values',$chart2Data)  and array_key_exists('link',$chart2Data))
            minvalue = {{ round($chart2Data['min'][1]) }};
            maxvalue = {{ round($chart2Data['max'][1]) }};
            currentvalue = {{ $chart2Data['values'][1] }};
            title = '<a href= "{{ $chart2Data['link'][1] }}" style="color: #727cf5; cursor:pointer;">Coefficient de rigidité en torsion (GIg)</a>';
        @else
            minvalue =  0;
            maxvalue = 0;
            currentvalue = 0;
            title = 'Coefficient de rigidité en torsion (GIg)';
        @endif

        var chartSpeed = Highcharts.chart('container-torsion', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: minvalue,
                max: maxvalue,
                tickPositions: [minvalue, maxvalue],
            },
            title: {
                useHtml: true,
                text: title,
            },

            series: [{
                name: 'Flexion',
                data: [currentvalue], //22590
                dataLabels: {
                    format:
                        '<div style="text-align:center">' +
                        '<span style="font-size:12px">{y:.1f}</span><br/>' +
                        '<span style="font-size:10px;opacity:0.4">N.m2/Rad</span>' +
                        '</div>'
                },
            }]

        }));

        @if(array_key_exists('min',$chart2Data) and array_key_exists('max',$chart2Data) and array_key_exists('values',$chart2Data) and array_key_exists('link',$chart2Data))
            minvalue = {{ round($chart2Data['min'][2]) }};
            maxvalue = {{ round($chart2Data['max'][2]) }};
            currentvalue = {{ $chart2Data['values'][2] }};
            title = '<a href= "{{ $chart2Data['link'][2] }}" style="color: #727cf5; cursor:pointer;">Module d Young (E)</a>';
        @else
            minvalue =  0;
            maxvalue = 0;
            currentvalue = 0;
            title = 'Module d Young (E)';
        @endif

        var chartSpeed = Highcharts.chart('container-module', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: minvalue,
                max: maxvalue,
                tickPositions: [minvalue, maxvalue],
            },
            title: {
                useHtml: true,
                text: title,

            },
            series: [{
                name: 'Flexion',
                data: [currentvalue], //22590
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

@endsection

