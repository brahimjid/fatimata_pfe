<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles(){
        return $this->belongsToMany('App\Role');
    }
    public function isAdmin(){
        return $this->roles()->where('nom','admin')->first();
    }
    public function isMedecin(){
        return $this->roles()->where('nom','medecin')->first();
    }
    public function isAgentM(){
        return $this->roles()->where('nom','agent_du_minister')->first();
    } public function isDras(){
        return $this->roles()->where('nom','DRAS')->first();
    }
}
