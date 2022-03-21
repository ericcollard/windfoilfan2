<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStatisticRequest;
use App\Http\Requests\UpdateStatisticRequest;
use App\Models\Device;
use App\Models\Statistic;
use Illuminate\Support\Facades\DB;

class StatisticController extends Controller
{

    public function calculate()
    {

        DB::statement("INSERT into device_statistics (hits,device_id,day)
                        select sum(Stat.hits) as hits, Stat.device_id, DATE(DATE_SUB(Stat.jour,INTERVAL DAYOFMONTH(Stat.jour)-1 DAY)) AS 'mois1'  from (
                        SELECT statistics.id as id, hits,statisticable_type, statistics.created_at as jour, statisticable_id as device_id
                        FROM  statistics
                        where statistics.created_at < ( select DATE(DATE_SUB(now(),INTERVAL DAYOFMONTH(now())-1 DAY)))
                        ) as Stat
                        group by  Stat.device_id, mois1");

        DB::statement("delete from statistics
                        where statistics.created_at < ( select DATE(DATE_SUB(now(),INTERVAL DAYOFMONTH(now())-1 DAY)))");


        DB::statement(
       "UPDATE
    devices AS t
    LEFT JOIN (
        SELECT
            device_id,
            sum(hits) AS nb
        FROM
            device_statistics
        GROUP BY
            device_id
    ) AS m ON
        m.device_id = t.id
SET
    t.views = IFNULL(m.nb, 0)" );


        $devices = null;
        /*
        $devices = Device::all();
        foreach ($devices as $device)
        {
            $device->updateViewsfromStatistics();
        }*/
        return view('statistics.calculate', compact('devices'));
    }



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
     * @param  \App\Http\Requests\StoreStatisticRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatisticRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    public function show(Statistic $statistic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    public function edit(Statistic $statistic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStatisticRequest  $request
     * @param  \App\Models\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatisticRequest $request, Statistic $statistic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statistic $statistic)
    {
        //
    }
}
