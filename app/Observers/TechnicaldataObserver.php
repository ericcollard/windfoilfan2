<?php

namespace App\Observers;

use App\Models\Technicaldata;

class TechnicaldataObserver
{

    public function saving(Technicaldata $technicaldata)
    {
        $technicaldata->attr21 = 1.44*7.17858E6/$technicaldata->attr16/pow(($technicaldata->attr6+$technicaldata->attr7),3);
        $technicaldata->attr20 = $technicaldata->attr4*0.21452047/ATAN($technicaldata->attr18/250);
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
