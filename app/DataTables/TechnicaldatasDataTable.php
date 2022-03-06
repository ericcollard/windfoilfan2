<?php

namespace App\DataTables;

use App\Models\Technicaldata;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class TechnicaldatasDataTable extends DataTable
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
            ->editColumn('created_at', function ($request) {
                return $request->created_at->formatLocalized('%d %B %Y'); //'%d %B %Y'
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Technicaldata $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Technicaldata $model)
    {
        $builder =  $model->newQuery();
        if ($this->device)
            $builder->where('device_id',$this->device->id);
        return $builder;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('technicaldatas-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('device_id'),
            Column::make('serial'),
            Column::make('attr3'),
            Column::make('attr4'),
            Column::make('attr5'),
            Column::make('attr6'),
            Column::make('attr7'),
            Column::make('attr8'),
            Column::make('attr9'),
            Column::make('attr10'),
            Column::make('created_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Technicaldatas_' . date('YmdHis');
    }
}
