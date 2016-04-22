<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Company;
use App\Admin_route;
use App\Bus_type;
use App\Place;
use App\Bus;

use App\Http\Requests;

class AdminRouteController extends Controller
{
    public function store(Request $request){
        
         $places = Place::all();
        $companies = Company::all(); 
        $bus_types = Bus_type::all();
        
        $route = new Admin_route;

        $route->weekday = $request->weekday;
        $route->boarding_point = $request->boarding_point;
        $route->droping_point = $request->droping_point;
        $route->schedule = $request->schedule;
        $route->bus_number = $request->bus_number;
        $route->company_name = $request->company_name;
        $route->bus_type = $request->bus_type;
        $route->fare = $request->fare;

        $buses = ['bus_number' => $request->bus_number, 'bus_type' => $request->bus_type ];

        $bus = Bus::where($buses)->first();

        $bus->admin_route()->save($route);

        return view('admin.adding_routes', compact('places', 'companies', 'bus_types'));
    }
    
    public function index()
    {
        $allRoutes = DB::select('select * from admin_routes');

        return view('admin.all_routes',compact('allRoutes'));
    }
    public function input()
    {
        $places = DB::select('select * from places');
        $bus_types = Bus_type::all();
        $companies = Company::all();

        
        return view('admin.adding_routes', compact('places','bus_types', 'companies'));
    }
    public function searchRoutes()
    {
        $places = DB::select('select * from places');
        $companies = Company::all();


        return view('home.welcome', compact('places', 'companies'));
    }
    public function showRoutes(Request $request)
    {
        $route = ['boarding_point' => $request->boarding_point,'droping_point' => $request->droping_point];

        $routes = Admin_route::where($route)->get();
        //$routes = Admin_route::find(1);
        var_dump($routes);

        return view('home.search', compact('routes'));
    }

}
