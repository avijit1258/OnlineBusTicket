<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class BusController extends Controller
{

        public function storePlace(Request $request)
        {
            DB::insert('insert into places ( place_name) values (?)', [$request->place]);
            $allPlaces = DB::select('select * from places');
            return view('admin.places_input',compact('allPlaces'));
        }
        public function indexPlace(){
            $allPlaces = DB::select('select * from places');
            return view('admin.places_input', compact('allPlaces'));
        }
        public function storeRoutes(Request $request){
            DB::insert('insert into admin_routes (weekday, boarding_point, droping_point, schedule, bus_number, company_name, fare)
             values (?,?,?,?,?,?, ?) ',[$request->weekday, $request->boarding_point, $request->droping_point, $request->schedule
            ,$request->bus_number, $request->company_name, $request->fare]);
            return "Welcome! Route Added Succesfully";
        }
        public function storeCompany(Request $request){
            DB::insert('insert into companies (company_name, user_name, password)values(?,?,?)',[$request->company_name,
            $request->user_name, $request->password]);
            return "Succcessfully company added";
        }

        public function indexAllRoutes()
        {
            $allRoutes = DB::select('select * from admin_routes');

            return view('admin.all_routes',compact('allRoutes'));
        }
}
