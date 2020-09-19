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
        'name','last_name', 'email','mobile', 'password','role'
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

    public function users_info(){
        return $this->hasMany('App\users_info');
    }

    public function survey_data()
    {
        return $this->hasMany(survey_data::class, "user_id");
    }
    public function graph_setting()
    {
        return $this->hasMany(graph_setting::class, "user_id");
    }
    public function userDashboard()
    {
        return $this->hasOne(Dashboard_setting::class, "user_id");
    }
}
