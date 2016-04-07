<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class BusTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

}
