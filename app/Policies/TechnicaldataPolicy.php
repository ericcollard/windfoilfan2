<?php

namespace App\Policies;

use App\Models\Technicaldata;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class TechnicaldataPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(?User $user)
    {
        if (Auth::guest()) return false;
        if ($user->hasRole('ROLE_CONTRIBUTOR')) return true;
        if ($user->hasRole('ROLE_ADMIN')) return true;
        return false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Technicaldata $technicaldata)
    {
        if (Auth::guest()) return false;
        if ($user->hasRole('ROLE_ADMIN')) return true;
        if ($user->hasRole('ROLE_CONTRIBUTOR'))
        {
            if ($user->brand)
            {
                // user de la marque
                //dd($technicaldata->device->brand_id,$user->brand->id);
                return ($technicaldata->device->brand_id == $user->brand->id);
            }
            else
            {
                // contributeur externe
                return ($technicaldata->user_id == $user->id);
            }
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        if (Auth::guest()) return false;
        if ($user->hasRole('ROLE_CONTRIBUTOR'))
        {
            if ($user->brand)
                return false;
            else
                return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Technicaldata $technicaldata)
    {
        return ($technicaldata->user_id == $user->id);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Technicaldata $technicaldata)
    {
        return ($technicaldata->user_id == $user->id);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Technicaldata $technicaldata)
    {
        return ($technicaldata->user_id == $user->id);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Technicaldata  $technicaldata
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Technicaldata $technicaldata)
    {
        return ($technicaldata->user_id == $user->id);
    }
}
