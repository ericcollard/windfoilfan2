<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\Brand;
use App\Models\Device;
use App\Models\Post;
use App\Models\Review;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Throwable;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\View\View
     */
    public function landing()
    {
        // tags meta
        $this->addMetaTags('Accueil',
            "Page d'accueil",
            ['base de donnée', 'database', 'foil', 'windfoil', 'board', 'glisse', 'light wind', 'windsurf foil' ],
            URL::asset('assets/images/startup.jpg')
        );
        return view('main.landing');
    }

    public function sitemap()
    {
        $pages = [];

        $devices = Device::where('status','=','Published')->get();
        foreach($devices as $device)
        {
            $pages[] = [
                'lastmod' => $device->updated_at,
                'url' => $device->path(),
                'priority' => 0.5
            ];

        }

        $posts = Post::All();
        foreach($posts as $post)
        {
            $pages[] = [
                'lastmod' => $post->updated_at,
                'url' => $post->path(),
                'priority' => 0.8
            ];
        }


        return response()->view('main.sitemap', compact('pages'))->header('Content-Type', 'application/xml');
    }
    function sessions()
    {

        return view('main.sessions');
    }

    function test()
    {

        return view('main.test');
    }

    /**
     * Display a view based on first route param
     *
     * @return Application|Factory|\Illuminate\View\View|View
     */
    public function dashboard()
    {
        // tags meta
        $this->addMetaTags('Tableau de bord',
            "Tableau de bord",
            ['base de donnée', 'database', 'foil', 'windfoil', 'board', 'glisse', 'light wind', 'windsurf foil' ],
            URL::asset('assets/images/startup.jpg')
        );
        // number of review
        $dashboard['reviewCnt'] = Review::count();
        $dashboard['foilCnt'] = Device::where('category_id', 1)->count();
        $dashboard['boardCnt'] = Device::where('category_id', 2)->count();
        $dashboard['sailCnt'] = Device::where('category_id', 3)->count();

        //marques avec produits
        $dashboard['brandCnt'] =  Brand::whereHas('devices')->count();

        //produits populaires (dernier 12 mois)
        $dashboard['deviceWithViewCount'] = Device::select( DB::raw('sum(hits) as cnt'),
            DB::raw('devices.*')
        )
            ->join('device_statistics', 'device_statistics.device_id', '=', 'devices.id')
            ->join('brands', 'devices.brand_id', '=', 'brands.id')
            ->join('categories', 'devices.category_id', '=', 'categories.id')
            ->where('device_statistics.day', '>=', DB::raw('DATE_SUB(CURDATE(), INTERVAL 365 DAY)'))
            ->groupBy('devices.id')
            ->orderBy('cnt', 'desc')
            ->take(5)->get();

        //marques populaires (dernier 12 mois)
        $dashboard['brandsWithViewCount'] = Brand::select( DB::raw('sum(hits) as cnt'),
            DB::raw('brands.*')
        )
            ->join('devices', 'devices.brand_id', '=', 'brands.id')
            ->join('device_statistics', 'device_statistics.device_id', '=', 'devices.id')
            ->where('device_statistics.day', '>=', DB::raw('DATE_SUB(CURDATE(), INTERVAL 365 DAY)'))
            ->groupBy('brands.id')
            ->orderBy('cnt', 'desc')
            ->take(5)->get();

        // Derniers messages
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

        // derniers posts
        $posts = Post::latest()
            ->where('status','Published');
        $dashboard['posts'] =  $posts->take(6)->get();

        // Graphique de publication des messages
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

        // Graphique des visites dernière année
        $viewsByMonth = DB::table('device_statistics')
            ->select(DB::raw('sum(hits) as hits, DATE(DATE_SUB(device_statistics.day,INTERVAL DAYOFMONTH(device_statistics.day)-1 DAY)) AS mois'))
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

        // Graphique des créations d'utilisateurs
        $viewsByMonth = DB::table('users')
            ->select(DB::raw('count(*) as cnt, DATE(DATE_SUB(created_at,INTERVAL DAYOFMONTH(created_at)-1 DAY)) AS mois'))
            ->whereBetween('created_at', [Carbon::now()->subMonth(36), Carbon::now()])
            ->groupBy('mois')
            ->get();

        $dashboard['chartUsersByMonth']['dates'] = array();
        $dashboard['chartUsersByMonth']['values'] = array();

        foreach($viewsByMonth as $data) {
            $dashboard['chartUsersByMonth']['dates'][] = Carbon::createFromFormat('Y-m-d', $data->mois)->format('M Y');
            $dashboard['chartUsersByMonth']['values'][] = (int)$data->cnt;
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


    public function message(Request $request)
    {

        $request->validate([
            'emailaddress' => 'required|string|email|max:255',
            'g-recaptcha-response' => 'recaptcha',
        ]);

        try {
            Mail::to('info@glissattitude.com')->send(new Contact($request->except('_token')));
        }
        catch (Throwable $e)
        {
            redirect(route('landing'))->with( ['message' => "Anomalie lors de l'envoi du message : ".$e->getMessage() , 'alert' => 'danger']);
        }

        return redirect(route('landing'))->with( ['message' => 'Votre message a bien été envoyé, nous vous répondrons au plus vite.', 'alert' => 'success']);

    }

    public function pro(Request $request)
    {
        $post = Post::where('id', '94')->first();
        return view('main.proaccess', compact('post'));
    }

    public function prosend(Request $request)
    {

        $request->validate([
            'emailaddress' => 'required|string|email|max:255',
            'g-recaptcha-response' => 'recaptcha',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $datas = $request->except('_token');
        $datas['subject'] = "Demande d'accès professionel";

        try {
            Mail::to('info@glissattitude.com')->send(new Contact($datas));
        }
        catch (Throwable $e)
        {
            redirect(route('pro'))->with( ['message' => "Anomalie lors de l'envoi du message : ".$e->getMessage() , 'alert' => 'danger']);
        }

        return redirect(route('pro'))->with( ['message' => 'Votre message a bien été envoyé, nous vous répondrons au plus vite.', 'alert' => 'success']);

    }

}
