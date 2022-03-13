<?php

namespace App\DataTables;

use App\Models\Attribute;
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
        $dt = datatables()
            ->eloquent($query)
            ->editColumn('created_at', function ($request) {
                return $request->created_at->formatLocalized('%d %b %Y'); //'%d %B %Y'
            });

        if ($this->category->id == 1) {
            $dt->editColumn('attr19', '{{ sprintf("%01.0f", $attr19) }}');
            $dt->editColumn('attr20', '{{ sprintf("%01.0f", $attr20) }}');
            $dt->editColumn('attr21', '{{ sprintf("%01.0f", $attr21) }}');
        }
        //$dt->editColumn('attr19', sprintf("%01.0f", $attr19));
        return $dt;
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
        $builder->join('devices', 'devices.id', '=', 'technicaldatas.device_id');
        $builder->select('devices.*', 'technicaldatas.*');

        if ($this->device)
            $builder->where('device_id',$this->device->id);
        if ($this->category)
            $builder->where('devices.category_id',$this->category->id);
        if ($this->brand and $this->category)
            $builder->where('devices.brand_id',$this->brand->id);
        return $builder;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {

        // Paramètres optionnels à transmettre à la view
        $localRoute = route('technicaldata.category',$this->category); //route sans marque
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






        $custom_paramaters = [];
        $custom_paramaters['basis_route'] = $localRoute;
        $custom_paramaters['category_name'] = $this->category->name;
        if ($this->brand)
            $custom_paramaters['brand_name'] = $this->brand->name;
        else
            $custom_paramaters['brand_name'] = "";

        return $this->builder()
                    ->setTableId('technicaldatas-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(3)
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
    protected function getColumns()
    {
        $attributes = Attribute::where('category_id',$this->category->id)->orderby('group')->get();
        $columns = [];
        $columns[] = Column::make('id','technicaldatas.id');
        $columns[] = Column::make('name','devices.name')->title(__($this->category->name));
        $columns[] = Column::make('serial')->title(__('Serial number'));
        $columns[] = Column::make('created_at','technicaldatas.created_at' )->title(__('Created at'));

        foreach ($attributes as $attribute)
        {
            $columns[] = Column::make($attribute->field)->title($attribute->slug);
        }

        return $columns;

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
