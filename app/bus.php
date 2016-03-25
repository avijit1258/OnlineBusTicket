<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus extends Model
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
