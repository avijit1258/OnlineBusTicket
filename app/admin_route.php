<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin_route extends Model
{
    public function bus()
    {
        return $this->hasOne('todoparrot\bus');
    }

}
