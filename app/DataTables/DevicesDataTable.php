<?php

namespace App\DataTables;

use App\Models\Device;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class DevicesDataTable extends DataTable
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
            ->addColumn('action', 'devices.action',1)
            ->editColumn('created_at', function ($request) {
                return $request->created_at->formatLocalized('%c'); //'%d %B %Y %H:%M'
            })
            ->editColumn('updated_at', function ($request) {
                return $request->created_at->formatLocalized('%c');
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Device $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Device $model)
    {
        return $model->newQuery()->where('category_id',$this->category_id);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('devices-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(4)
                    ->parameters([
                'language' => [
                    'url' => url('/vendor/datatables/lang/'.config('locale.languages')[session ('locale')][1].'.json'),//<--here
                ],
                'buttons' => [
                    [
                        'extend' => 'reload',
                        'text' => 'Rafraichir',
                        'className' => 'btn btn-success mb-2 me-2',
                    ],
                    [
                        'extend' => 'print',
                        'text' => 'Imprimer',
                        'className' => 'btn btn-warning mb-2 me-2',
                    ],
                    [
                        'extend' => 'export',
                        'text' => 'Exporter',
                        'className' => 'btn btn-warning mb-2 me-2',
                    ],
                ],

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
            Column::make('brand.name')->title(__('Brand')),
            Column::make('name')->title(__('Name')),
            Column::make('year')->title(__('Year')),
            Column::make('status')->title(__('Status')),
            Column::make('created_at')->title(__('Created at')),
            Column::make('updated_at')->title(__('Updated at')),
            Column::computed('action')->title(__('Action'))
                ->addClass('text-center')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
            Column::make('category', 'category')->hidden()
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Devices_' . date('YmdHis');
    }
}
