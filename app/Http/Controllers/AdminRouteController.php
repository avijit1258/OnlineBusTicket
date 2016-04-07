<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Company;

use App\Http\Requests;

class AdminRouteController extends Controller
{
    public function store(Request $request){
        DB::insert('insert into admin_routes (weekday, boarding_point, droping_point, schedule, bus_number, company_name, fare)
             values (?,?,?,?,?,?, ?) ',[$request->weekday, $request->boarding_point, $request->droping_point, $request->schedule
            ,$request->bus_number, $request->company_name, $request->fare]);
         $places = DB::select('select * from places');
        $companies = Company::all();       
        return view('admin.adding_routes', compact('places', 'companies'));
    }
    
    public function index()
    {
        $allRoutes = DB::select('select * from admin_routes');

        return view('admin.all_routes',compact('allRoutes'));
    }
    public function input()
    {
        $places = DB::select('select * from places');
        $companies = Company::all();

        
        return view('admin.adding_routes', compact('places', 'companies'));
    }
    public function searchRoutes()
    {
        $places = DB::select('select * from places');
        $companies = Company::all();


        return view('home.welcome', compact('places', 'companies'));
    }

}
