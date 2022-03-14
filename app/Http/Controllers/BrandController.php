<?php

namespace App\Http\Controllers;

use App\DataTables\BrandsDataTable;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;
use App\Models\Device;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param BrandsDataTable $dataTable
     * @return Response
     */
    public function index(BrandsDataTable $dataTable)
    {
        return $dataTable->render('brands.index');
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
     * @param  \App\Http\Requests\StoreBrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        $dashboard = [];


        $dashboard['reviewCnt'] = Review::join('devices', 'reviews.device_id', '=', 'devices.id')->where('devices.brand_id',$brand->id)->count();
        $dashboard['foilCnt'] = Device::where('category_id', 1)->where('brand_id',$brand->id)->count();
        $dashboard['boardCnt'] = Device::where('category_id', 2)->where('brand_id',$brand->id)->count();
        $dashboard['sailCnt'] = Device::where('category_id', 3)->where('brand_id',$brand->id)->count();

        //marques populaires (dernier 12 mois)
        $dashboard['deviceWithViewCount'] = DB::table('statistics')
            ->select( DB::raw('count(*) as cnt'),
                DB::raw('devices.name as device'),
                DB::raw('devices.id as id'),
                DB::raw('brands.name as brand'),
                DB::raw('devices.year as year'),
                DB::raw('categories.slug as category')
            )
            ->join('devices', 'statistics.statisticable_id', '=', 'devices.id')
            ->join('brands', 'devices.brand_id', '=', 'brands.id')
            ->join('categories', 'devices.category_id', '=', 'categories.id')
            ->where('statistics.statisticable_type', "App\\Models\\Device")
            ->where('brands.id', '=', $brand->id)
            ->where('statistics.created_at', '>=', DB::raw('DATE_SUB(CURDATE(), INTERVAL 365 DAY)'))
            ->groupBy('devices.name','devices.id', 'brands.name','devices.year','categories.slug')
            ->orderBy('cnt', 'desc')
            ->take(5)->get();


        return view('brands.show', compact('brand','dashboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrandRequest  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
