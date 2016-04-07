<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Bus;
use App\Bus_type;
use App\Company;

use App\Http\Requests;

class BusController extends Controller
{
	

	public function index()
	{

		$buses = Bus::all();
		$bus_types = Bus_type::all();
		$companies = Company::all();

		return view('admin.adding_bus', compact('buses','bus_types', 'companies'));
	}
	public function store(Request $request)
	{
		$bus = new Bus;

		$bus->company_name = $request->company_name;
		$bus->bus_type = $request->bus_type;
		$bus->bus_number = $request->bus_number;
		$bus->no_of_rows = $request->no_of_rows;
		$bus->no_of_columns = $request->no_of_columns;

		$bus->save();
		$buses = Bus::all();
		$bus_types = Bus_type::all();
		$companies = Company::all();

		return view('admin.adding_bus', compact('buses','$bus_types', 'companies'));

	}
}
