<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus_type extends Model
{
    public function bus()
    {
        return $this->hasOne('todoparrot\Bus');
    }

}
