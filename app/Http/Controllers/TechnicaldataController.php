<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTechnicaldataRequest;
use App\Http\Requests\UpdateTechnicaldataRequest;
use App\Models\Technicaldata;

class TechnicaldataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
}
