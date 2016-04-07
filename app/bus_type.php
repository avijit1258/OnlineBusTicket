<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus_type extends Model
{
	protected $table = 'bus_type';
    public function bus()
    {
        return $this->hasOne('todoparrot\Bus');
    }


}
