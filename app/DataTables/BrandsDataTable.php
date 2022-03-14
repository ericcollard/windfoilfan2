<?php

namespace App\DataTables;

use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class BrandsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('name', function ($request) {
                return '<a href="'.route('brand.show',$request->slug).'">'.$request->name.'</a>';
            })
            ->addColumn('logo', function ($request) {

                $url = ($request->logo_path ? Storage::disk('logos')->url($request->logo_path) : asset('assets/images/brands/default.png')) ;
                return '<img src="'.$url.'" class="brand-logo"/>';

            })
            ->rawColumns(['name','logo']);



    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Brand $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Brand $model)
    {

        /*
select `brands`.*, count( DISTINCT devices.id) , count(DISTINCT technicaldatas.id) , count(DISTINCT reviews.id) , count(DISTINCT statistics.id) , sum(statistics.hits)
from `brands`
inner join `devices` on `devices`.`brand_id` = `brands`.`id`
inner join `technicaldatas` on `technicaldatas`.device_id = `devices`.`id`
inner join `reviews` on `reviews`.device_id = `devices`.`id`
inner join `statistics` on `statistics`.statisticable_id = `devices`.`id`
where statistics.statisticable_type = 'App\\Models\\Device'
group by `brands`.`id`

 */
        $builder =  $model->newQuery();
        $builder->join('devices', 'devices.brand_id', '=', 'brands.id');
        $builder->join('technicaldatas', 'technicaldatas.device_id', '=', 'devices.id');
        $builder->join('reviews', 'reviews.device_id', '=', 'devices.id');
        $builder->join('statistics', 'statistics.statisticable_id', '=', 'devices.id');
        $builder->where('statistics.statisticable_type', '=', 'App\\Models\\Device');
        $builder->selectRaw('brands.*, count( DISTINCT devices.id) AS device_cnt , count(DISTINCT technicaldatas.id) AS data_cnt , count(DISTINCT reviews.id) AS review_cnt, count(DISTINCT statistics.id) AS ip_cnt, sum(statistics.hits) AS hit_cnt');
        $builder->groupBy('brands.id');
        return $builder;

    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {

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


        return $this->builder()
                    ->setTableId('brands-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(5,'desc')
                    ->parameters([
                        'language' => [
                            'url' => url('/vendor/datatables/lang/'.config('locale.languages')[session ('locale')][1].'.json'),//<--here
                        ],
                        'buttons' => $buttons,

                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('logo')->title(__('Logo'))
                ->addClass('text-center')
                ->exportable(false)
                ->printable(false)
                ->searchable(false)
                ->width(60),
            Column::make('name')->title(__('Name')),
            Column::make('device_cnt')->title(__('Devices'))->searchable(false),
            Column::make('data_cnt')->title(__('Technical data sets'))->searchable(false),
            Column::make('review_cnt')->title(__('Messages'))->searchable(false),
            Column::make('ip_cnt')->title(__('Distinct IP views'))->searchable(false),
            Column::make('hit_cnt')->title(__('Views'))->searchable(false),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Brands_' . date('YmdHis');
    }
}
