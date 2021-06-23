<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{

   
    use HasRoles;
   

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
    public function complaints()
    {
        return $this->hasMany('App\Complaint');
    }
    public function firs()
    {
        return $this->hasMany('App\Fir');
    }
    public function cybercrimes()
    {
        return $this->hasMany('App\Cybercrime');
    }
    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }
    public function bullyings()
    {
        return $this->hasMany('App\Antibullying');
    }
    
}
