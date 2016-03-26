<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    public function buses()
    {
        return $this->hasMany('App\bus');
    }

}
