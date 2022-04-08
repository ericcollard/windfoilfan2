<?php

namespace App\DataTables;

use App\Models\Device;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTableAbstract;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class DevicesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return DataTableAbstract
     */
    public function dataTable($query): DataTableAbstract
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'devices.action',1)
            ->editColumn('created_at', function ($request) {
                return $request->created_at->formatLocalized('%d %B %Y'); //'%d %B %Y'
            })
            ->editColumn('status', function ($request) {
                return '<div class="badge '.$request->statusClass().'">'.__($request->status).'</div>';
            })
            ->editColumn('name', function ($request) {
                return '<a href="'.$request->path().'">'.$request->name.'</a>';
            })

            ->rawColumns(['status','action','name']);


    }

    /**
     * Get query source of dataTable.
     *
     * @param Device $model
     * @return Builder
     */
    public function query(Device $model): Builder
    {
        $builder = $model->newQuery()->where('category_id',$this->category->id);
        $builder->withCount('reviews');
        if ($this->brand)
            $builder->where('brand_id',$this->brand->id);
        if (auth()->guest()) $builder->where('status','Published');
        if (auth()->check())
        {
            if (!auth()->user()->hasRole('ROLE_ADMIN'))
            {
                if (auth()->user()->brand)
                {
                    // professionel > accès aux données publiées + toutes celle de sa marque
                    // statut publié ou marque = la seinne
                    $builder->where(function($q) {
                        $q->where('status','Published')
                            ->orwhere('brand_id',auth()->user()->brand->id);
                    });
                }
                else
                {
                    // non professionel > accès aux données publiées
                    $builder->where('status','Published')
                        ->orwhere('user_id',auth()->user()->id);
                }
            }

        }
        return $builder;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): \Yajra\DataTables\Html\Builder
    {

        // préparation des paramètres à transmettre au Builder

        // Menu déroulant des marques
        $localRoute = route('device.category',$this->category); //route sans marque
        $brandsButtons = [];
        if ($this->brand)
        {
            $brandsButtons[] = [
                [
                    'text' =>'TOUTES',
                    'action' => "function (e, dt, button, config) {
                                        window.location = '".$localRoute."';
                                    }"

                ],
            ];
        }

        foreach ($this->brands as $brand)
        {
            $brandsButtons[] =  [
                [
                    'text' =>'<i class="fa fa-eye"></i> ' . $brand->name,
                    'action' => "function (e, dt, button, config) {
                                        window.location = '".$localRoute."' + '?from=".$brand->slug."';
                                    }"

                ],
            ];
        }

        // Boutons
        $buttons = [];

        if ($this->brand)
        {
            $buttons[] = [
                'text' =>'Supprimer le filtre de marque',
                'action' => "function (e, dt, button, config) {
                                        window.location = '".$localRoute."';
                                    }",
                'className' => 'btn btn-info mb-2 me-2',
            ];
        }
        else
        {
            $buttons[] = [
                "extend"=> 'collection',
                "text"=> 'Filtrer par Marque',
                'className' => 'btn btn-info mb-2 me-2',
                "buttons" =>
                    [
                        $brandsButtons
                    ]
            ];
        }

        if (! Auth::guest())
        {
            if (Auth::user()->can('create',Device::class)) {
                $buttons[] = [
                    'text' =>'Nouveau',
                    'action' => "function (e, dt, button, config) {
                                        window.location = '".route('device.create')."';
                                    }",
                    'className' => 'btn btn-success mb-2 me-2',
                ];
            }
        }




        $buttons[] = [
            'extend' => 'reload',
            'text' => 'Rafraichir',
            'className' => 'btn btn-warning mb-2 me-2',
        ];
        $buttons[] = [
            'extend' => 'print',
            'text' => 'Imprimer',
            'className' => 'btn btn-warning mb-2 me-2',
        ];
        $buttons[] = [
            'extend' => 'export',
            'text' => 'Exporter',
            'className' => 'btn btn-warning mb-2 me-2',
        ];






        // Paramètres optionnels à transmettre à la view
        $custom_paramaters = [];
        $custom_paramaters['basis_route'] = $localRoute;
        $custom_paramaters['category_name'] = $this->category->name;
        if ($this->brand)
            $custom_paramaters['brand_name'] = $this->brand->name;
        else
            $custom_paramaters['brand_name'] = "";

        return $this->builder()
                    ->setTableId('devices-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(6)
                    ->parameters([
                'language' => [
                    'url' => url('/vendor/datatables/lang/'.config('locale.languages')[session ('locale')][1].'.json'),//<--here
                ],
                'buttons' => $buttons,
                'custom_paramaters' => $custom_paramaters

            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns(): array
    {
        return [
            Column::make('brand.name')->title(__('Brand')),
            Column::make('name')->title(__('Name')),
            Column::make('year')->title(__('Year')),
            Column::make('views')->title(__('Views')),
            Column::make('reviews_count')->title(__('Messages')),
            Column::make('status')->title(__('Status')),
            Column::make('created_at')->title(__('Created at')),
            Column::computed('action')->title(__('Action'))
                ->addClass('text-center')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Devices_' . date('YmdHis');
    }
}
