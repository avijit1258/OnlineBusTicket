<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class PlaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        DB::insert('insert into places ( place_name) values (?)', [$request->place]);
        $allPlaces = DB::select('select * from places');
        return view('admin.places_input',compact('allPlaces'));
    }
    public function index(){
        $allPlaces = DB::select('select * from places');
        return view('admin.places_input', compact('allPlaces'));
    }
}
