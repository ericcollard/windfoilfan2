<?php

namespace App\Policies;

use App\Models\Device;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class DevicePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(?User $user, Device $device)
    {
        if ($device->status == "Archived") {
            // visible uniquement par admin ou propriétaire ou marque
            if (Auth::guest()) return false;;
            if ($user->id == $device->creator->id or $user->brand_id == $device->brand->id) return true;
            return false;
        }

        // visible par tous si on connait le lien pour les status Hidden et Published
        return true;
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
        if ($user->hasRole('ROLE_CONTRIBUTOR')) return true;
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Device $device)
    {
        if (Auth::guest()) return false;
        if ($user->id == $device->creator->id) return true;
        return false;

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Device $device)
    {
        if (Auth::guest()) return false;
        if ($user->id == $device->creator->id) return true;
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Device $device)
    {
        if (Auth::guest()) return false;
        if ($user->id == $device->creator->id) return true;
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Device $device)
    {
        if (Auth::guest()) return false;
        if ($user->id == $device->creator->id) return true;
        return false;
    }

    /**
     * Determine whether the user can create a new comment for the device
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function answer(User $user, Device $device)
    {
        if (Auth::guest()) return false;
        return true;
    }
}
