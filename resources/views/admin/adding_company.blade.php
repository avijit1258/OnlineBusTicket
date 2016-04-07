@extends('layouts.master')


@section('content')

<<<<<<< HEAD
    <div class="panel panel-default">
    
        <div class="panel-heading">
            Please Input New Routes
        </div>
        <div class="panel-body">
            <form action="/admin/company" method="post">
                {!! csrf_field() !!}
                <label for="input_company">Company Name</label>
                <input type="text" name="company_name" id="input_company" class="form-control">

                                <label for="input_user">User Name</label>
                                <input type="text" name="user_name" id="input_user" class="form-control">

                                <label for="input_password">Password</label>
                                <input type="text" name="password" id="input_password" class="form-control">



                                <button type="submit" class = "btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add
                                </button>

                            </form> 
                             </div>   
                            
                        </div>
                             
    @endsection