<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'roles',
        'avatar_path',
        'prefered_spots',
        'discipline_start',
        'personal_equipment',
        'postal_code',
        'weight',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'discipline_start' => 'datetime',
        'roles' => 'array',
    ];

    /* -- Roles function -- */

    /***
     * @param string $role
     * @return User
     */
    public function addRole(string $role)
    {
        $roles = $this->getRoles();
        $roles[] = $role;

        $roles = array_unique($roles);
        $this->setRoles($roles);

        return $this;
    }

    /**
     * @param array $roles
     * @return $this
     */
    public function setRoles(array $roles)
    {
        $this->setAttribute('roles', $roles);
        return $this;
    }

    /***
     * @param $role
     * @return mixed
     */
    public function hasRole($role)
    {
        return in_array($role, $this->getRoles());
    }

    /***
     * @param $roles
     * @return mixed
     */
    public function hasRoles($roles)
    {

        $currentRoles = $this->getRoles();
        foreach($roles as $role) {
            if ( ! in_array($role, $currentRoles )) {
                return false;
            }
        }
        return true;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        $roles = $this->getAttribute('roles');
        if (is_null($roles)) {
            $roles = [];
        }

        return $roles;
    }

    public function avatarImgCode()
    {
/*
        $imageUrl = $this->avatar_path ? asset('storage/avatars/'.$this->avatar_path) : asset('images/default.png',true);
        return '<img class="img-profile rounded-circle" alt="'.$this->getFullName().'" src="'.$imageUrl.'" height="30px" width="30px">';
*/
    }

    // Only accept a valid password and
    // hash a password before saving
    public function setPasswordAttribute($password)
    {
        if ( $password !== null & $password !== "" )
        {
            $this->attributes['password'] = bcrypt($password);
        }
    }


}
