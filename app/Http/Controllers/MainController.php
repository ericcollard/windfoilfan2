<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Device;
use App\Models\Review;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\View\View
     */
    public function landing()
    {
        return view('main.landing');
    }


    /**
     * Display a view based on first route param
     *
     * @return Application|Factory|\Illuminate\View\View|View
     */
    public function dashboard()
    {

        // number of review
        $dashboard['reviewCnt'] = Review::count();
        $dashboard['foilCnt'] = Device::where('category_id', 1)->count();
        $dashboard['boardCnt'] = Device::where('category_id', 2)->count();
        $dashboard['sailCnt'] = Device::where('category_id', 3)->count();

        //marques avec produits
        $dashboard['brandCnt'] =  Brand::whereHas('devices')->count();

        //produits populaires (dernier 12 mois)
        //$dashboard['deviceWithViewCount'] = Device::orderBy('views', 'desc')->take(5)->get();
        $dashboard['deviceWithViewCount'] = DB::table('statistics')
            ->select( DB::raw('sum(hits) as cnt'),
                DB::raw('devices.name as device'),
                DB::raw('devices.id as id'),
                DB::raw('brands.name as brand'),
                DB::raw('devices.year as year'),
                DB::raw('categories.slug as category'),
                DB::raw('brands.logo_path as logo_path'),
            )
            ->join('devices', 'statistics.statisticable_id', '=', 'devices.id')
            ->join('brands', 'devices.brand_id', '=', 'brands.id')
            ->join('categories', 'devices.category_id', '=', 'categories.id')
            ->where('statistics.statisticable_type', "App\\Models\\Device")
            ->where('statistics.created_at', '>=', DB::raw('DATE_SUB(CURDATE(), INTERVAL 365 DAY)'))
            ->groupBy('devices.name','devices.id', 'brands.name','devices.year','categories.slug')
            ->orderBy('cnt', 'desc')
            ->take(5)->get();

        //marques populaires (dernier 12 mois)
        /*
        $dashboard['brandsWithViewCount']  = Brand::join('devices', 'devices.brand_id', '=', 'brands.id')
            ->select( DB::raw('sum(views) as view_count'),
                DB::raw('brands.*')
            )
            ->groupBy('brands.id')
            ->orderBy('view_count', 'DESC')
            ->take(5)->get();
        */


        $dashboard['brandsWithViewCount'] = DB::table('statistics')
            ->select( DB::raw('sum(hits) as cnt'),
                DB::raw('brands.name as brand'),
                DB::raw('brands.id as id'),
                DB::raw('brands.slug as slug'),
                DB::raw('brands.logo_path as logo_path'),
            )
            ->join('devices', 'statistics.statisticable_id', '=', 'devices.id')
            ->join('brands', 'devices.brand_id', '=', 'brands.id')
            ->where('statistics.statisticable_type', "App\\Models\\Device")
            ->where('statistics.created_at', '>=', DB::raw('DATE_SUB(CURDATE(),INTERVAL 365 DAY)'))
            ->groupBy('brands.name', 'brands.id')
            ->orderBy('cnt', 'desc')
            ->take(5)->get();

        // last reviews
        $reviews = Review::latest();
        // only those with device visible
        $reviews->whereExists(function($query)
        {
            $query->select(DB::raw(1))
                ->from('devices')
                ->whereRaw('devices.id = reviews.device_id')
                ->where('status','Published');
        });

        $dashboard['lastReviews'] =  $reviews->take(3)->get();

        // review posting chart
        $chartDatas = Review::select([
            DB::raw("DATE_FORMAT(created_at, '%Y-%m') new_date"),
            DB::raw('COUNT(id) AS count'),
        ])
            ->whereBetween('created_at', [Carbon::now()->subMonth(30), Carbon::now()])
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

        return view('main.dashboard',compact('dashboard'));
    }


    /**
     * Change language
     *
     * @return Application|Factory|\Illuminate\View\View|View
     */
    public function language(String $locale): RedirectResponse
    {
        $locale = in_array($locale, config('app.locales')) ? $locale : config('app.fallback_locale');
        session(['locale' => $locale]);
        return back();
    }

}
