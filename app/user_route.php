<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_route extends Model
{
    public function bus()
    {
        return $this->belongsTo('App\bus');
    }
}
