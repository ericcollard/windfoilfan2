<?php

namespace App\Http\Controllers;

use App\DataTables\DevicesDataTable;
use App\Http\Requests\StoreDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Device;
use Butschster\Head\Facades\Meta;
use Butschster\Head\Packages\Entities\OpenGraphPackage;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;

class DeviceController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Device::class, 'device');
    }

    /**
     * Display a listing categories of devices.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function categories()
    {
        $categories = Category::with('devices')->get();

        // tags meta
        $this->addMetaTags('Liste des catégories de produit',
            'Liste des catégories de produit',
            ['test', 'avis', 'review', 'evaluation', 'critere', 'compte rendu', 'description', 'photos' ],
            null
        );

        return view('devices.categories', compact('categories'));
    }


    /**
     * Display a listing of devices for specified category.
     *
     * @return \Illuminate\Http\Response
     */
    public function category(DevicesDataTable $dataTable,Category $category)
    {

        // tags meta
        $this->addMetaTags('Liste des '.$category->name,
            'Liste des produits dans la catégorie '.$category->name,
            ['test', 'avis', 'review', 'evaluation', 'critere', 'compte rendu', 'description', 'photos' ],
            null
        );

        $brand = "";
        if(array_key_exists('from', request()->all()))
        {
            $brand_slug = request()->from;
            $brand = Brand::where('slug', $brand_slug)
                ->firstOrFail();
            $dataTable->with('brand', $brand);
        }

        if(array_key_exists('program_target', request()->all()))
        {
            $program_target = request()->program_target;
            $dataTable->with('program_target', $program_target);
        }

        $dataTable->with('category', $category);

        $brands = Brand::whereHas('devices', function($query) use($category) {
            $query->where('category_id', $category->id);
        })->get();

        $dataTable->with('brands', $brands);

        return $dataTable
            ->render('devices.category');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Category $category, Device $device)
    {
        // enregistre les stats de visite
        $device->recordDisplay();

        // tags meta
        $this->addMetaTags('Fiche produit '.$device->getFullName(),
            'Fiche produit pour'.$device->getFullName().' avec compte-rendus et messages',
            [$device->name, $device->brand->name, $device->category->name, 'test', 'avis', 'review', 'evaluation', 'critere', 'compte rendu', 'description', 'photos' ],
            $device->imagePath()
        );


        // pagination avec dernière page part défaut
        //$reviews = $device->reviews()->latest()->paginate(5);
        $reviewsCollection = $device->reviews()->orderBy('created_at')->get();//->paginate(5);

        $perPage = 4;
        if (request()->page == '')
            $page = intdiv($reviewsCollection->count() ,  $perPage) + 1;
        else
            $page = request()->page;

        $reviews = new \Illuminate\Pagination\LengthAwarePaginator(
            $reviewsCollection->slice(($page - 1) * $perPage, $perPage),
            $reviewsCollection->count(),
            $perPage,
            $page,
            [
                'path' => \Illuminate\Pagination\Paginator::resolveCurrentPath()
            ]
        );



        // calcul des données techniques moyennes
        $attributes = Attribute::where('category_id',$device->category->id)->get()->groupBy([
            'group',
        ],$preserveKeys = true);

        $technicaldatas_minmax = DB::table('technicaldatas')
            ->join('devices', 'technicaldatas.device_id', '=', 'devices.id')
            ->join('categories', 'devices.category_id', '=', 'categories.id')
            ->select(
                DB::raw('min(attr3) as min_attr3'),
                DB::raw('min(attr4) as min_attr4'),
                DB::raw('min(attr5) as min_attr5'),
                DB::raw('min(attr6) as min_attr6'),
                DB::raw('min(attr7) as min_attr7'),
                DB::raw('min(attr8) as min_attr8'),
                DB::raw('min(attr9) as min_attr9'),
                DB::raw('min(attr10) as min_attr10'),
                DB::raw('min(attr11) as min_attr11'),
                DB::raw('min(attr12) as min_attr12'),
                DB::raw('min(attr13) as min_attr13'),
                DB::raw('min(attr14) as min_attr14'),
                DB::raw('min(attr15) as min_attr15'),
                DB::raw('min(attr16) as min_attr16'),
                DB::raw('min(attr17) as min_attr17'),
                DB::raw('min(attr18) as min_attr18'),
                DB::raw('min(attr19) as min_attr19'),
                DB::raw('min(attr20) as min_attr20'),
                DB::raw('min(attr21) as min_attr21'),
                DB::raw('min(attr22) as min_attr22'),
                DB::raw('min(attr23) as min_attr23'),
                DB::raw('min(attr24) as min_attr24'),
                DB::raw('min(attr25) as min_attr25'),
                DB::raw('max(attr3) as max_attr3'),
                DB::raw('max(attr4) as max_attr4'),
                DB::raw('max(attr5) as max_attr5'),
                DB::raw('max(attr6) as max_attr6'),
                DB::raw('max(attr7) as max_attr7'),
                DB::raw('max(attr8) as max_attr8'),
                DB::raw('max(attr9) as max_attr9'),
                DB::raw('max(attr10) as max_attr10'),
                DB::raw('max(attr11) as max_attr11'),
                DB::raw('max(attr12) as max_attr12'),
                DB::raw('max(attr13) as max_attr13'),
                DB::raw('max(attr14) as max_attr14'),
                DB::raw('max(attr15) as max_attr15'),
                DB::raw('max(attr16) as max_attr16'),
                DB::raw('max(attr17) as max_attr17'),
                DB::raw('max(attr18) as max_attr18'),
                DB::raw('max(attr19) as max_attr19'),
                DB::raw('max(attr20) as max_attr20'),
                DB::raw('max(attr21) as max_attr21'),
                DB::raw('max(attr22) as max_attr22'),
                DB::raw('max(attr23) as max_attr23'),
                DB::raw('max(attr24) as max_attr24'),
                DB::raw('max(attr25) as max_attr25'),
            )
            ->where('category_id',$device->category->id)
            ->first();



        foreach ($attributes as $groupName => $attributeSet)
        {
            $technicaldatas = DB::table('technicaldatas')
                ->where('device_id',$device->id);

            $technicaldatas->where(function ($query) use ($attributeSet)
            {
                foreach ($attributeSet as $attribute)
                {
                    $query->orWhereNotNull($attribute->field);
                }
            });
            $attributeSet->results = $technicaldatas->latest()->get()->take(1)->first();

        }

        //dd($attributes);
        return view('devices.show', compact('device','reviews','attributes','technicaldatas_minmax'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Category $category, Device $device)
    {

        // tags meta
        $this->addMetaTags('Mise à jour du '.$device->name,
            'Mise à jour du '.$device->name,
            ['test', 'avis', 'review', 'evaluation', 'critere', 'compte rendu', 'description', 'photos' ],
            null
        );

        $action = URL::route('device.update',['category' => $category, 'device' => $device]);
        $method = 'PATCH';
        $categories = Category::all();
        $brands = Brand::all();

        return view('devices.edit', compact('action', 'method','device','categories','brands'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        // tags meta
        $this->addMetaTags('Création produit',
            'Création d un nouveau produit',
            ['produit', 'foil', 'board', 'voile', 'nouveau', 'compte rendu', 'description', 'photos' ],
            null
        );

        $action = URL::route('device.store');
        $method = 'POST';

        $categories = Category::all();
        $brands = Brand::all();

        $device = new Device();
        $device->user_id = auth()->user()->id;
        return view('devices.edit', compact('action', 'method','device','categories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDeviceRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(StoreDeviceRequest $request)
    {
        try {

            $data = $request->all();
            $data['slug'] = Device::buildSlug($data['name'],$data['brand_id'],$data['year']);

            $device = Device::create($data);

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "I'm sorry, impossible to store you item at the moment");
        }

        return redirect($device->path())->with( ['message' => 'Produit créé', 'alert' => 'success']);
    }


    /**
     * Update the specified resource in storage.
     * @param  \App\Models\Category  $category
     * @param  \App\Http\Requests\UpdateDeviceRequest  $request
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(UpdateDeviceRequest $request, Category $category, Device $device)
    {
        try {
            $data = $request->all();

            $device->update($data);   // grace au fillable, on ne touche qu'aux champs correspondant à l'object

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "I'm sorry, impossible to store you item at the moment");
        }

        return redirect($device->path())->with( ['message' => 'Produit mis à jour', 'alert' => 'success']);
    }



    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\Category  $category
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Category $category, Device $device)
    {
        $device->delete();

        if (request()->wantsJson())
        {
            return response(['status' => 'Your post has been deleted'],200);
        }
        return redirect(route('device.category', $category))->with( ['message' => 'Produit supprimé', 'alert' => 'success']);
    }


}
