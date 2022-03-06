<?php

namespace App\Http\Controllers;

use App\DataTables\TechnicaldatasDataTable;
use App\Http\Requests\StoreTechnicaldataRequest;
use App\Http\Requests\UpdateTechnicaldataRequest;
use App\Models\Attribute;
use App\Models\Device;
use App\Models\Technicaldata;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Utilities\Request;

class TechnicaldataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TechnicaldatasDataTable $dataTable)
    {

        $device = Device::where('id', 163)
            ->firstOrFail();
        $dataTable->with('device', $device);

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
     * @return \Illuminate\Http\Response
     */
    public function show(Technicaldata $technicaldata)
    {
        $attributes = Attribute::where('category_id',$technicaldata->device->category->id)->get()->groupBy([
            'group',
        ],$preserveKeys = true);

        //$technicaldata_min = ;

        return view('technicaldatas.show', compact('technicaldata','attributes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return \Illuminate\Http\Response
     */
    public function edit(Technicaldata $technicaldata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTechnicaldataRequest  $request
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTechnicaldataRequest $request, Technicaldata $technicaldata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technicaldata $technicaldata)
    {
        //
    }


    public function devicedata(Request $request, Device $device)
    {
       $data = Technicaldata::where('device_id', $device->id)->latest()->get();

        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('device_id', function ($request) {
                    return $request->device_id.'TT';
                })
                ->addColumn('action', function(Technicaldata $technicaldata) {
                    return '<a href="'.route('technicaldata.show',$technicaldata).'">Go</a>';
                })
                ->make(true);
        }
    }

}
