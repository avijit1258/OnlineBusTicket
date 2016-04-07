@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Please Input New Routes
        </div>
        <div class="panel-body">
            <form action="/adding_routes" method="post">

                <label for="input_weekday">WeekDay</label>
                <select name="weekday" class="form-control">
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuseday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thurseday">Thurseday</option>
                    <option value="Friday">Friday</option>
                </select>

                <label for="input_boarding">Boarding Point</label>
                <select name="boarding_point" class="form-control">
                    @foreach( $places as $place)
                    {

                        <option value={{$place->place_name}} > {{$place->place_name}}  </option> 
                    }
                        @endforeach
                </select>

                <label for="input_droping">Droping Point</label>
                <select name="droping_point" class="form-control">
                    @foreach($places as $place)
                        {

                            <option value= {{$place->place_name}} >  {{ $place->place_name}}</option>          
                        }
                    @endforeach
                </select>

                <label for="input_company">Company Name</label>
                <select name="company" class="form-control">
                    @foreach($companies as $company)
                        {

                            <option value= {{$company->company_name}} >  {{ $company->company_name}}
                            </option>          
                        }
                    @endforeach
                </select>

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