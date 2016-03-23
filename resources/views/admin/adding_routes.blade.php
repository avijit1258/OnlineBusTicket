@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Please Input New Routes
        </div>
        <div class="panel-body">
            <form action="/adding_routes" method="post">

                <label for="input_weekday">WeekDay</label>
                <input type="text" name="weekday" id="input_weekday" class="form-control">

                <label for="input_boarding">Boarding Point</label>
                <input type="text" name="boarding_point" id="input_boarding" class="form-control">

                <label for="input_droping">Droping Point</label>
                <input type="text" name="droping_point" id="input_droping" class="form-control">

                <label for="input_company">Company Name</label>
                <input type="text" name="company_name" id="input_company" class="form-control">

                <label for="input_schedule">Schedule</label>
                <input type="time" name="schedule" id="input_schedule" class="form-control">

                <label for="input_bus_no">Bus Number</label>
                <input type="text" name="bus_number" id="input_bus_no" class="form-control">

                <label for="input_fare">Fare</label>
                <input type="text" name="fare" id="input_fare" class="form-control">


                <button type="submit" class = "btn btn-default">
                    <i class="fa fa-btn fa-plus"></i>Create
                </button>

            </form>
        </div>
    </div>


    @endsection