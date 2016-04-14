<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function admin_route()
    {
        return $this->hasOne('App\Admin_route');
    }
    public function user_routes()
    {
        return $this->hasMany('App\User_route');
    }
    public function forBusView(){


    	$buses = Bus::all();
		$bus_types = Bus_type::all();
		$companies = Company::all();

		return view('admin.adding_bus', compact('buses','$bus_types', 'companies'));
	}
}
