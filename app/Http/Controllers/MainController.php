<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
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
    public function home()
    {
        return view('index');
    }


}
