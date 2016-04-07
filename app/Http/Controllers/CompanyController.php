<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\company;
use App\Http\Requests;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){
        DB::insert('insert into companies (company_name, user_name, password)values(?,?,?)',[$request->company_name,
            $request->user_name, $request->password]);
        return view('admin.adding_company');
    }


    public function index()
    {
        $allCompanies = company::all();
        //DB::select('select * from admin_routes');

        return view('admin.all_companies',compact('allCompanies'));
    }
}
