<?php

namespace App\Http\Controllers;

use App\DataTables\BrandsDataTable;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;
use App\Models\Device;
use App\Models\Review;
use App\Models\Technicaldata;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class BrandController extends Controller
{

    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Brand::class, 'brand');
    }


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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Brand $brand)
    {
        $dashboard = [];


        $dashboard['reviewCnt'] = Review::join('devices', 'reviews.device_id', '=', 'devices.id')->where('devices.brand_id',$brand->id)->count();
        $dashboard['dataCnt'] = Technicaldata::join('devices', 'technicaldatas.device_id', '=', 'devices.id')->where('devices.brand_id',$brand->id)->count();
        $dashboard['foilCnt'] = Device::where('category_id', 1)->where('brand_id',$brand->id)->count();
        $dashboard['boardCnt'] = Device::where('category_id', 2)->where('brand_id',$brand->id)->count();
        $dashboard['sailCnt'] = Device::where('category_id', 3)->where('brand_id',$brand->id)->count();

        //produits populaires (dernier 12 mois)
        $dashboard['deviceWithViewCount'] = Device::select( DB::raw('sum(hits) as cnt'),
            DB::raw('devices.*')
        )
            ->join('device_statistics', 'device_statistics.device_id', '=', 'devices.id')
            ->join('brands', 'devices.brand_id', '=', 'brands.id')
            ->join('categories', 'devices.category_id', '=', 'categories.id')
            ->where('device_statistics.day', '>=', DB::raw('DATE_SUB(CURDATE(), INTERVAL 365 DAY)'))
            ->where('brands.id', '=', $brand->id)
            ->groupBy('devices.id')
            ->orderBy('cnt', 'desc')
            ->take(5)->get();

        // last reviews
        $reviews = Review::latest();
        // only those with device visible
        $reviews->whereExists(function($query) use ($brand)
        {
            $query->select(DB::raw(1))
                ->from('devices')
                ->whereRaw('devices.id = reviews.device_id')
                ->where('status','Published')
                ->where('brand_id',$brand->id);
        });

        $dashboard['lastReviews'] =  $reviews->take(3)->get();

        // review posting chart
        $chartDatas = Review::select([
            DB::raw("DATE_FORMAT(reviews.created_at, '%Y-%m') new_date"),
            DB::raw('COUNT(reviews.id) AS count'),
        ])
            ->join('devices', 'reviews.device_id', '=', 'devices.id')->where('devices.brand_id',$brand->id)
            ->whereBetween('reviews.created_at', [Carbon::now()->subMonth(30), Carbon::now()])
            ->groupBy('new_date')
            ->orderBy('new_date', 'ASC')
            ->get();

        $chartDataByMonth = array();
        foreach($chartDatas as $data) {
            $chartDataByMonth[$data->new_date] = $data->count;
        }

        for($i = 0; $i < 30; $i++) {
            $date = Carbon::now()->subMonth($i);
            $dateString = $date->format('Y-m');
            if(!isset($chartDataByMonth[ $dateString ]))
            {
                $chartDataByMonth[ $dateString ] = 0;
            }
        }
        ksort($chartDataByMonth);
        foreach($chartDataByMonth as $dateStr => $value)
        {
            $dashboard['chartDataByMonth']['dates'][] = $dateStr;
            $dashboard['chartDataByMonth']['values'][] = (int)$value;
        }

        // Graphique des visites dernière année
        $viewsByMonth = DB::table('device_statistics')
            ->select(DB::raw('sum(hits) as hits, DATE(DATE_SUB(device_statistics.day,INTERVAL DAYOFMONTH(device_statistics.day)-1 DAY)) AS mois'))
            ->join('devices', 'device_statistics.device_id', '=', 'devices.id')
            ->where('devices.brand_id',$brand->id)
            ->whereBetween('device_statistics.day', [Carbon::now()->subMonth(36), Carbon::now()])
            ->groupBy('mois')
            ->get();
        $dashboard['chartViewsByMonth']['dates'] = array();
        $dashboard['chartViewsByMonth']['values'] = array();

        foreach($viewsByMonth as $data) {
            $dashboard['chartViewsByMonth']['dates'][] = Carbon::createFromFormat('Y-m-d', $data->mois)->format('M Y');
            $dashboard['chartViewsByMonth']['values'][] = (int)$data->hits;
        }
        //dd($dashboard['chartViewsByMonth']);


        return view('brands.show', compact('brand','dashboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Brand $brand)
    {
        $action = URL::route('brand.update',['brand' => $brand]);
        $method = 'PATCH';

        return view('brands.edit', compact('action', 'method','brand'));
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
        try {
            $data = $request->all();

            $dataUpdt = [];
            $dataUpdt['name'] = $data['name'];
            if (key_exists('logo_path',$data))
            {
                $dataUpdt['logo_path'] = request()->file('logo_path')->storePublicly('', 'logos');
            }
            if (key_exists('url',$data))
            {
                $dataUpdt['url'] = $data['url'];
            }
            if (key_exists('body',$data))
            {
                $dataUpdt['body'] = $data['body'];
            }

            $brand->update($dataUpdt);   // grace au fillable, on ne touche qu'aux champs correspondant à l'object


        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "I'm sorry, impossible to store you item at the moment");
        }

        return redirect($brand->path())->with( ['message' => 'Marque mis à jour', 'alert' => 'success']);
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
