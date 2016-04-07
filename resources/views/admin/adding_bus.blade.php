@extends('layouts.master')

@section('content')

<div class="col-sm-offset-2">
	<div class="panel panel-default">
		<div class="panel-heading">
			Adding Buses
		</div>
		<div class="panel-body">
			<form action="/adding_buses" method="post">

                <label for="input_weekday">Company Name</label>
                <select name="company" class="form-control">
                    @foreach($companies as $company)
                        {

                            <option value= {{$company->company_name}} >  {{ $company->company_name}}
                            </option>          
                        }
                    @endforeach
                </select>

                <label for="input_boarding">Bus Type</label>
                <select name="bus_type" class="form-control">
                    @foreach($bus_types as $bus_type)
                        {

                            <option value= {{$bus_type->type}} >  {{ $bus_type->type}}</option>          
                        }
                    @endforeach
                </select>

                <label for="input_bus_number">Bus Number</label>
                <input type="number" name="bus_number" id="input_bus_number" class="form-control"></input>

                <label for="input_number_of_rows">Number of rows</label>
                 <input type="number" name="no_of_rows" id="input_number_of_rows" class="form-control">

                <label for="input_number_of_columns">Number of columns</label>
                <input type="number" name="no_of_columns" id="input_schedule" class="form-control">

               
                <button type="submit" class = "btn btn-default">
                    <i class="fa fa-btn fa-plus"></i>Create
                </button>

            </form>

		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			Editing And Deleting Buses
		</div>
		<div class="panel-body">
			<table class="table table-striped place-table">
                        <thead>
                        <th>Company Name</th>
                        <th>Bus Type</th>
                        <th>Bus Number</th>
                        <th>Number of rows</th>
                        <th>Number of columns</th>
                        </thead>


                        <tbody>
                        @foreach($buses as $bus)
                            <tr>

                                <td class="table-text">{{$bus->company_name}}</td>
                                <td class="table-text">{{$allCompany->bus_type}}</td>
                                <td class="table-text">{{$allCompany->bus_number}}</td>
                                <td class="table-text">{{$allCompany->no_of_rows}}</td>
                                <td class="table-text">{{$allCompany->no_of_columns}}</td>


                                <td>
                                    <form action="/route/{{ $allCompany->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('UPDATE') }}

                                        <button type="submit" id="edit-route-{{ $allCompany->id }}" class="btn btn-success">
                                            <i class="fa fa-btn fa-edit"></i>Edit
                                        </button>
                                    </form>
                                </td>


                                <td>
                                    <form action="/route/{{ $allCompany->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-route-{{ $allCompany->id }}" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>Delete
                                        </button>
                                    </form>
                                </td>



                            </tr>
                        @endforeach
                        </tbody>


                    </table>

		</div>
	</div>


</div
@endsection