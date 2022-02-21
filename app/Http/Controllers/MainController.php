<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

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
