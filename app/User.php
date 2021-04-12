<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'api_token', 'partner_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'access', 'api_token'
    ];


    protected $with = ['access'];


    /**
     * Get all of the posts for the country.
     */
    public function access()
    {
        return $this->hasManyThrough('App\Protocol', 'App\ProtocolAccess', 'user_id', 'id', 'id', 'protocol_id');
    }


    /**
     * Get all of the roles for the user
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasAnyRole($roles): bool
    {
        return (bool) $this->roles()->whereIn('name', $roles)->first();
    }

    public function hasRole($role): bool
    {
        return (bool) $this->roles()->where('name', $role)->first();
    }

}
