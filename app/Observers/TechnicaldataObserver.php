<?php

namespace App\Observers;

use App\Models\Technicaldata;

class TechnicaldataObserver
{

    public function saving(Technicaldata $technicaldata)
    {
        if (!is_null($technicaldata->attr16) and !is_null($technicaldata->attr6) and !is_null($technicaldata->attr7))
            $technicaldata->attr21 = 1.44*7.17858E6/$technicaldata->attr16/pow(($technicaldata->attr6+$technicaldata->attr7),3);

        if (!is_null($technicaldata->attr4) and !is_null($technicaldata->attr18))
            $technicaldata->attr20 = $technicaldata->attr4*0.21452047/ATAN($technicaldata->attr18/250);

        if (!is_null($technicaldata->attr16))
            $technicaldata->attr19=11212.26983/$technicaldata->attr16;
    }

    /**
     * Handle the Technicaldata "created" event.
     *
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return void
     */
    public function created(Technicaldata $technicaldata)
    {
        //
    }

    /**
     * Handle the Technicaldata "updated" event.
     *
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return void
     */
    public function updated(Technicaldata $technicaldata)
    {
//
    }

    /**
     * Handle the Technicaldata "deleted" event.
     *
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return void
     */
    public function deleted(Technicaldata $technicaldata)
    {
        //
    }

    /**
     * Handle the Technicaldata "restored" event.
     *
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return void
     */
    public function restored(Technicaldata $technicaldata)
    {
        //
    }

    /**
     * Handle the Technicaldata "force deleted" event.
     *
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return void
     */
    public function forceDeleted(Technicaldata $technicaldata)
    {
        //
    }
}
