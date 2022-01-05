<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
        return view('landing');
    }

    /**
     * Display a view based on first route param
     *
     * @return \Illuminate\Http\Response
     */
    public function root($first)
    {
        return view($first);
    }

    /**
     * second level route
     */
    public function secondLevel($first, $second)
    {
        // dd($first.'.'.$second);
        return view($first . '.' . $second);
    }

    /**
     * third level route
     */
    public function thirdLevel($first, $second, $third)
    {
        return view($first . '.' . $second . '.' . $third);
    }


    public function language(String $locale)
    {
        $locale = in_array($locale, config('app.locales')) ? $locale : config('app.fallback_locale');
        session(['locale' => $locale]);
        return back();
    }
}
