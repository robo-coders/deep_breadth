<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users_info extends Model
{
    public function users(){
    	$this->belongsTo(user::class);
    }
}
