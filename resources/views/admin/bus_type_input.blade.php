@extends('layouts.master')

@section('content')

<div class="col-sm-offset-2">
	<div class="panel panel-default">
		<div class="panel-heading">
			Adding Bus Type
		</div>
		<div class="panel-body">
			<form action="/admin/bus_type" method="post">

                
                <label for="input_bus_type">Bus Type</label>
                <input type="text" name="type" id="input_bus_type" class="form-control">

               
                <button type="submit" class = "btn btn-default">
                    <i class="fa fa-btn fa-plus"></i>Add
                </button>

            </form>

		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			Bus Type
		</div>
		<div class="panel-body">
			<table class="table table-striped place-table">
                        <thead>
                        
                        <th>Bus Type</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                        </thead>


                        <tbody>
                        @foreach($bus_types as $bus_type)
                            <tr>

                                <td class="table-text">{{$bus_type->type}}</td>
                                
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
</div>
@endsection