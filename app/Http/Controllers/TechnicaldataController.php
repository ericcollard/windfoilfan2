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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Utilities\Request;

class TechnicaldataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category(TechnicaldatasDataTable $dataTable,Category $category)
    {
        $dataTable->with('category', $category);

        $brand = "";
        if(array_key_exists('from', request()->all()))
        {
            $brand_slug = request()->from;
            $brand = Brand::where('slug', $brand_slug)
                ->firstOrFail();
            $dataTable->with('brand', $brand);
        }

        $brands = Brand::whereHas('devices', function($query) use($category) {
            $query->where('category_id', $category->id);
        })->get();

        $dataTable->with('brands', $brands);

        return $dataTable
            ->render('technicaldatas.index');
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
     * @param  \App\Http\Requests\StoreTechnicaldataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTechnicaldataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return \Illuminate\Http\Response
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

}
