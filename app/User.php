<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $guarded = [
        'crsid',
    ];

    public function hasRole($role)
    {
        switch ($role) {
            case 'editor': return (bool)$this->role_editor; break;
            case 'viewer': return (bool)$this->role_viewer; break;
        }
        return false;
    }

    public function member()
    {
        return $this->hasOne('App\Member', 'crsid', 'crsid');
    }
}
