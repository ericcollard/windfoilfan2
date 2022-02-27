<?php

namespace App\Http\Controllers;

use App\DataTables\DevicesDataTable;
use App\Http\Requests\StoreDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Device;

class DeviceController extends Controller
{
    /**
     * Display a listing categories of devices.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function categories()
    {
        $categories = Category::with('devices')->get();
        return view('devices.categories', compact('categories'));
    }

    /**
     * Display a listing of devices for specified category.
     *
     * @return \Illuminate\Http\Response
     */
    public function category(DevicesDataTable $dataTable,Category $category)
    {

        $brand = "";
        if(array_key_exists('from', request()->all()))
        {
            $brand_slug = request()->from;
            $brand = Brand::where('slug', $brand_slug)->firstOrFail();
            $dataTable->with('brand', $brand);
        }

        $dataTable->with('category', $category);

        $brands = Brand::has('devices')->get();
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
        return view('devices.show', compact('device'));
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
     * @param  \App\Http\Requests\StoreDeviceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeviceRequest $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeviceRequest  $request
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeviceRequest $request, Device $device)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        //
    }
}
