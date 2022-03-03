<?php

namespace App\Http\Controllers;

use App\DataTables\DevicesDataTable;
use App\Http\Requests\StoreDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Device;
use Illuminate\Support\Facades\URL;

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
            $brand = Brand::where('slug', $brand_slug)
                ->firstOrFail();
            $dataTable->with('brand', $brand);
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
        $reviews = $device->reviews()->paginate(2);
        return view('devices.show', compact('device','reviews'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Category $category, Device $device)
    {
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

        return redirect($device->path());
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

        return redirect($device->path());
    }



    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\Category  $category
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, Device $device)
    {
        $device->delete();

        if (request()->wantsJson())
        {
            return response(['status' => 'Your post has been deleted'],200);
        }
        return redirect(route('device.category', $category));
    }
}
