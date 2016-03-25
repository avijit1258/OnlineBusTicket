<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus_type extends Model
{
    public function bus()
    {
        return $this->hasOne('todoparrot\bus');
    }

}
