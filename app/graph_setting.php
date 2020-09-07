<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class graph_setting extends Model
{
    protected $fillable = [
        'user_id','value'
    ];
    protected $table = 'graph_settings';
}
