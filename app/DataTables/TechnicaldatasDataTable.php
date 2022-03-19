<?php

namespace App\DataTables;

use App\Models\Attribute;
use App\Models\Technicaldata;
use Illuminate\Database\Eloquent\Builder;
use Yajra\DataTables\DataTableAbstract;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class TechnicaldatasDataTable extends DataTable
{

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return DataTableAbstract
     */

    public function dataTable($query): DataTableAbstract
    {
        $dt = datatables()
            ->eloquent($query)

            ->editColumn('created_at', function ($request) {
                return $request->created_at->formatLocalized('%d %b %Y'); //'%d %B %Y'
            })
            ->editColumn('name', function ($request) {
                return '<a href="'.route('technicaldata.show',$request->id).'">'.$request->name.'</a>';
            })
            ->rawColumns(['name']);
        ;

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
     * @param Technicaldata $model
     * @return Builder
     */
    public function query(Technicaldata $model): Builder
    {


        $builder =  $model->newQuery();
        $builder->join('devices', 'devices.id', '=', 'technicaldatas.device_id');
        $builder->join('users', 'users.id', '=', 'technicaldatas.user_id');
        $builder->select('technicaldatas.*','devices.name','users.name AS author');

        if ($this->device)
            $builder->where('device_id',$this->device->id);
        if ($this->category)
            $builder->where('devices.category_id',$this->category->id);

        /*
        if ($this->brand and $this->category and $this->author)
        {
            $builder->where(function($query) {
            $query->where('devices.brand_id',$this->brand->id)
                ->orWhere('technicaldatas.user_id',$this->author->id);
            });
        }
        else
        {*/
            if ($this->brand and $this->category)
                $builder->where('devices.brand_id',$this->brand->id);
            if ($this->author)
                $builder->where('technicaldatas.user_id',$this->author->id);
        //}

        return $builder;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): \Yajra\DataTables\Html\Builder
    {

        // Paramètres optionnels à transmettre à la view
        $localRoute = route('technicaldata.category',$this->category); //route sans marque
        $brandsButtons = [];
        $authorsButtons = [];

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

        foreach ($this->authors as $author)
        {
            $authorsButtons[] =  [
                [
                    'text' =>'<i class="fa fa-eye"></i> ' . $author->name,
                    'action' => "function (e, dt, button, config) {
                                        window.location = '".$localRoute."' + '?by=".$author->id."';
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

        if ($this->author)
        {
            $buttons[] = [
                'text' => "Supprimer le filtre d'auteur",
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
                "text"=> 'Filtrer par Auteur',
                'className' => 'btn btn-info mb-2 me-2',
                "buttons" =>
                    [
                        $authorsButtons
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
        if ($this->author)
            $custom_paramaters['author_name'] = $this->author->name;
        else
            $custom_paramaters['author_name'] = "";

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
    protected function getColumns(): array
    {
        $attributes = Attribute::where('category_id',$this->category->id)->orderby('group')->get();
        $columns = [];
        $columns[] = Column::make('id','technicaldatas.id');
        $columns[] = Column::make('name','devices.name')->title(__($this->category->name));
        $columns[] = Column::make('serial')->title(__('Serial number'));
        $columns[] = Column::make('created_at','technicaldatas.created_at' )->title(__('Created at'));
        $columns[] = Column::make('author','author' )->title(__('Author'));

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
    protected function filename(): string
    {
        return 'Technicaldatas_' . date('YmdHis');
    }
}
