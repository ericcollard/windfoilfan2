<?php

namespace App\Http\Controllers;

use App\DataTables\TechnicaldatasDataTable;
use App\Http\Requests\StoreTechnicaldataRequest;
use App\Http\Requests\UpdateTechnicaldataRequest;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Device;
use App\Models\Technicaldata;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use phpGPX\Models\Extensions\AbstractExtension;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Utilities\Request;

class TechnicaldataController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Technicaldata::class, 'technicaldata');
    }


    /**
     * Display a listing of the resource.
     *
     * @param TechnicaldatasDataTable $dataTable
     * @param Category $category
     * @return Response
     */
    public function category(TechnicaldatasDataTable $dataTable,Category $category)
    {
        $this->authorize('viewAny', Technicaldata::class);

        $dataTable->with('category', $category);

        $brandRequest = null;
        $authorRequest = null;
        $brandUser = null;
        $authorUser = null;
        $brand = null;
        $author = null;

        if (Auth::User()->brand_id)  $brandUser = Auth::User()->brand;
        $authorUser = Auth::User();

        if(array_key_exists('from', request()->all()))
        {
            $brand_slug = request()->from;
            $brandRequest = Brand::where('slug', $brand_slug)
                ->firstOrFail();
        }
        if(array_key_exists('by', request()->all()))
        {
            $author_id = request()->by;
            $authorRequest = User::where('id', $author_id)
                ->firstOrFail();
        }

        if (Auth::User()->hasRole('ROLE_ADMIN'))
        {
            $brand = $brandRequest;
            $author = $authorRequest;
        }
        elseif (Auth::User()->hasRole('ROLE_CONTRIBUTOR'))
        {
            if ($brandUser)
            {
                // user de la marque
                $brand = $brandUser;
            }
            else
            {
                // contributeur externe
                $author = $authorUser;
                $brand = $brandRequest;
            }
        }


        if ($brand) $dataTable->with('brand', $brand);
        if ($author) $dataTable->with('author', $author);


        // lectures des marques pour le menu déroulant
        $brands = Brand::whereHas('devices', function($query) use($category) {
            $query->where('category_id', $category->id);
        })->get();
        $dataTable->with('brands', $brands);

        // lectures des users pour le menu déroulant
        $authors = User::whereHas('technicaldatas')->get();
        $dataTable->with('authors', $authors);


        return $dataTable->render('technicaldatas.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response|\Illuminate\View\View
     */
    public function show(Technicaldata $technicaldata)
    {
        $attributes = Attribute::where('category_id',$technicaldata->device->category->id)->get()->groupBy([
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
            ->where('category_id',$technicaldata->device->category->id)
            ->first();

        return view('technicaldatas.show', compact('technicaldata','attributes','technicaldatas_minmax'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response|\Illuminate\View\View
     */
    public function edit(Technicaldata $technicaldata)
    {
        $action = URL::route('technicaldata.update',['technicaldata' => $technicaldata]);
        $method = 'PATCH';
        $attributes = Attribute::where('category_id',$technicaldata->device->category->id)->get()->groupBy('group');

        return view('technicaldatas.edit', compact('action', 'method','technicaldata','attributes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTechnicaldataRequest  $request
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|Response|\Illuminate\Routing\Redirector
     */
    public function update(UpdateTechnicaldataRequest $request, Technicaldata $technicaldata)
    {
        try {
            $data = $request->all();
            //dd($data);
            $technicaldata->update($data);   // grace au fillable, on ne touche qu'aux champs correspondant à l'object

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "I'm sorry, impossible to store you item at the moment");
        }

        return redirect($technicaldata->path());
    }

    /**
     * Create the form for creation the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create(Device $device)
    {
        $action = URL::route('technicaldata.store');
        $method = 'POST';
        $technicaldata = new Technicaldata();
        $technicaldata->user_id = auth()->user()->id;
        $technicaldata->device_id = $device->id;

        $attributes = Attribute::where('category_id',$device->category->id)->get()->groupBy('group');

        return view('technicaldatas.edit', compact('action', 'method','technicaldata','attributes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTechnicaldataRequest $request
     * @return Response
     */
    public function store(StoreTechnicaldataRequest $request)
    {
        try {

            $data = $request->all();
            $technicaldata = Technicaldata::create($data);

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "I'm sorry, impossible to store you item at the moment");
        }

        return redirect($technicaldata->path());
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Technicaldata $technicaldata)
    {
        $target = $technicaldata->device->path();
        $technicaldata->delete();

        if (request()->wantsJson())
        {
            return response(['status' => 'Your data has been deleted'],200);
        }
        return redirect($target);
    }


    public function devicedata(Request $request, Device $device)
    {
       $data = Technicaldata::where('device_id', $device->id)->latest()->get();

        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                /*
                ->editColumn('created_at', function ($request) {
                    return $request->created_at->formatLocalized('%d %B %Y');
                })*/
                ->addColumn('action', function(Technicaldata $technicaldata) {
                    return '<a href="'.route('technicaldata.show',$technicaldata).'" class="btn btn-sm btn-primary rounded-pill" role="button"><i class="mdi mdi-eye"></i> '. __('See').'</a>';
                })
                ->make(true);
        }
    }


    /**
     * Display a chart sorting all devices for one attribute
     *
     * @return \Illuminate\Http\Response
     */
    public function attributeChart( Attribute $attribute)
    {
        if (!$attribute) abort(403, 'No attribute defined');
        $category = $attribute->category;

        $device = null;
        if(array_key_exists('device', request()->all()))
        {
            $device_id = request()->device;
            $device = Device::where('id', $device_id)
                ->firstOrFail();
        }

        $techdata = null;
        if(array_key_exists('technicaldata', request()->all()))
        {
            $techdata_id = request()->technicaldata;
            $techdata = Technicaldata::where('id', $techdata_id)
                ->firstOrFail();
        }

        $brand = null;
        if(array_key_exists('brand', request()->all()))
        {
            $brand_id = request()->brand;
            $brand = Brand::where('id', $brand_id)
                ->firstOrFail();
        }


        $names = [];
        $values = [];
        $colors = [];

        $devicesQuery = DB::table('technicaldatas')
            ->join('devices', 'technicaldatas.device_id', '=', 'devices.id')
            ->join('brands', 'devices.brand_id', '=', 'brands.id')
            ->where('devices.category_id','=',$category->id)
            ->whereNotNull($attribute->field)
            ->orderBy($attribute->field, 'desc');

        /*
        if (! Gate::allows('see-hidden')) {
            // The current user can't see hidden gears
            $devicesQuery->where('devices.status','=','Published');
        }
        */

        $technicalDatas = $devicesQuery
            ->select('technicaldatas.id','technicaldatas.serial', 'devices.name as device', 'devices.year as year', 'brands.name as brand', 'brands.id as brand_id', 'technicaldatas.user_id', $attribute->field.' as value', 'devices.id as device_id')
            ->get();

        // recherche min et max
        $cnt = count($technicalDatas);

        $dataMin = $technicalDatas[$cnt-1]->value;
        $dataMax = $technicalDatas[0]->value;

        // Autorisations à voir pour les données structure
        $see_all = false;
        $see_patrial = false;
        if (auth()->user())
        {
            $user_is_allowed = auth()->user()->id;
            if  ( $attribute->group == "structural_group" or $attribute->group == "structural_result_group")
                $see_all = auth()->user()->hasRole('ROLE_ADMIN');
            else
                $see_all = true;
            $see_patrial = auth()->user()->hasRole('ROLE_CONTRIBUTOR');

            if (is_null(auth()->user()->brand_id))
                $brand_id_allowed = 0;
            else
                $brand_id_allowed = auth()->user()->brand_id;
        }
        else
        {
            $user_is_allowed = 0;
        }


        foreach ($technicalDatas as $technicaldata)
        {
            if ($techdata and $technicaldata->id == $techdata->id)
                $colors[] = '#00FF15FF';
            elseif ($device and $technicaldata->device_id == $device->id)
                $colors[] = '#ff0000';
            elseif ($brand and $technicaldata->brand_id == $brand->id)
                $colors[] = '#FFCC00FF';
            else
                $colors[] = '#00b2ff';

            if ($see_all or ($see_patrial and ($brand_id_allowed == $technicaldata->brand_id)) or ($see_patrial and ($user_is_allowed == $technicaldata->user_id)) or ($techdata and $technicaldata->id == $techdata->id))
            {
                $complete_name = $technicaldata->brand.' '.$technicaldata->device.' '.$technicaldata->year.' '.$technicaldata->serial.' (id-'.$technicaldata->id.')';
                $names[] = $complete_name;
            }
            else
            {
                    $names[] = 'nc.'; //'id-'.$technicaldata->id;
            }

            if ($attribute->chart =='pourcentage')
                $values[] = (double)($technicaldata->value-$dataMin)/($dataMax-$dataMin)*100.0;
            else
                $values[] = (double)($technicaldata->value);
        }

        if ($attribute->chart =='pourcentage')
        {
            $chartMin = 0.0;
            $chartMax = 100.0;
            $legende = 'Valeur (%)';
            $draggable = 'false';
        }
        if ($attribute->chart =='note')
        {
            $chartMin = 0.0;
            $chartMax = 10.0;
            $legende = 'Note / 10';
            $draggable = 'true';
        }
        if ($attribute->chart =='valeur')
        {
            $chartMin = $dataMin;
            $chartMax = $dataMax;
            $legende = 'Valeur ('.$attribute->unit.')';
            $draggable = 'false';
        }

        return view('technicaldatas.chart', compact('attribute','names','values','colors','chartMin','chartMax','legende','draggable','device','techdata'));
    }

    /**
     * Store a new value for attribute for the given device.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function attributeStore(Request $request)
    {
        //dd($request);
        //if ( Gate::allows('can-update-device'))
        //{
            $deviceName = request('deviceName');
            $technicaldataId = $this->getIdFomName($deviceName);

            $newvalue = request('value');
            $attributeField = request('attributeField');

            if ($technicaldataId && $newvalue && $attributeField)
            {
                $data = Technicaldata::find($technicaldataId);
                $data->{$attributeField} = $newvalue;
                $data->save();
            }
        //}
        return;
    }


    private function getIdFomName(string $deviceName)
    {
        $pos1 = strrpos($deviceName, ")" , -1);
        if ($pos1 === false) return null;
        $pos2 = strrpos($deviceName, "-" , -1) + 1;
        if ($pos2 === false) return null;
        $StrId = substr($deviceName, $pos2, $pos1-$pos2);
        if ($StrId === false) return null;

        return (integer)$StrId;
    }


}
