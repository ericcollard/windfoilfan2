<?php

namespace App\Http\Controllers;

use App\DataTables\AttributesDataTable;
use App\Http\Requests\StoreAttributeRequest;
use App\Http\Requests\UpdateAttributeRequest;
use App\Models\Attribute;
use App\Models\Category;
use Butschster\Head\Facades\Meta;
use Butschster\Head\Packages\Entities\OpenGraphPackage;
use Illuminate\Support\Facades\URL;

class AttributeController extends Controller
{

    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Attribute::class, 'attribute');
    }


    /**
     * Display a listing of the resource.
     *
     * @param AttributesDataTable $dataTable
     * @return \Illuminate\Http\Response
     */
    public function index(AttributesDataTable $dataTable)
    {
        // tags meta
        $this->addMetaTags('Liste des attributs',
            'Liste des attributs disponibles',
            ['critère', 'glisse', 'controle', 'décollage', 'stabilité', 'attribut', 'attributs' ],
            null
        );

        return $dataTable->render('attributes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAttributeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttributeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Attribute $attribute)
    {
        // tags meta
        $this->addMetaTags('Détail de l attribut '.$attribute->name,
            'Détail de l attribut '.$attribute->name,
            ['critère', 'glisse', 'controle', 'décollage', 'stabilité', 'attribut', 'attributs' ],
            null
        );

        return view('attributes.show', compact('attribute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Attribute $attribute)
    {
        // tags meta
        $this->addMetaTags('Mise à jour de l attribut '.$attribute->name,
            'Mise à jour de l attribut '.$attribute->name,
            ['critère', 'glisse', 'controle', 'décollage', 'stabilité', 'attribut', 'attributs' ],
            null
        );

        $action = URL::route('attribute.update',$attribute);
        $method = 'PATCH';
        $categories = Category::all();

        return view('attributes.edit', compact('attribute','action','method', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttributeRequest  $request
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(UpdateAttributeRequest $request, Attribute $attribute)
    {
        try {

            $data = $request->all();

            $attribute->update($data);   // grace au fillable, on ne touche qu'aux champs correspondant à l'object

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "I'm sorry, impossible to store you item at the moment");
        }

        return redirect($attribute->path())->with( ['message' => 'Attribut mis à jour', 'alert' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attribute $attribute)
    {
        //
    }


}
