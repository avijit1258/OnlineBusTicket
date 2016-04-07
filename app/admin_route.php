<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin_route extends Model
{
    public function bus()
    {
        return $this->hasOne('todoparrot\Bus');
    }

}
