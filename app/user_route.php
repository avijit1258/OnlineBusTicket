<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_route extends Model
{
    public function bus()
    {
        return $this->belongsTo('App\Bus');
    }
}
