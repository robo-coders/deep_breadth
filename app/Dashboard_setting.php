<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard_setting extends Model
{
    protected $fillable = [
        'user_id','dashboard'
    ];
    protected $table = 'dashboard_settings';
}
