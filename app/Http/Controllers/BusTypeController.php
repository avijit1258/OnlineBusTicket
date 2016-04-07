<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus_type;

use App\Http\Requests;

class BusTypeController extends Controller
{
    
    public function index()
    {
    	$bus_types = Bus_type::all();

    	return view('admin.bus_type_input', compact('bus_types'));
    }
    public function store(Request $request)
    {
    	$bus_type = new Bus_type;

    	$bus_type->type = $request->type;

    	$bus_type->save();
    	return view('admin.bus_type_input');
    }
}
