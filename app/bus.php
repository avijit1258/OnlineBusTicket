<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{

    public function company()
    {
        return $this->belongsTo('App\company');
    }
    public function user_routes()
    {
        return $this->hasMany('App\user_route');
    }
}
