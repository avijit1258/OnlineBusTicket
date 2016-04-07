@extends('layouts.master')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit and Delete Places
                </div>
                <div class="panel-body">
                    <table class="table table-striped place-table">
                        <thead>
                        <th>Week day</th>
                        <th>Boarding Point</th>
                        <th>Droping Point</th>
                        <th>Schedule</th>
                        <th>Bus Type</th>
                        <th>Bus Number</th>
                        <th>Company Name</th>
                        <th>Fare</th>
                        </thead>


                        <tbody>
                        @foreach($allRoutes as $allRoute)
                            <tr>

                                <td class="table-text">{{$allRoute->weekday}}</td>
                                <td class="table-text">{{$allRoute->boarding_point}}</td>
                                <td class="table-text">{{$allRoute->droping_point}}</td>
                                <td class="table-text">{{$allRoute->schedule}}</td>
                                <td class="table-text">{{$allRoute->bus_type}}</td>
                                <td class="table-text">{{$allRoute->bus_number}}</td>
                                <td class="table-text">{{$allRoute->company_name}}</td>
                                <td class="table-text">{{$allRoute->fare}}</td>

                                <td>
                                    <form action="/route/{{ $allRoute->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('UPDATE') }}

                                        <button type="submit" id="edit-route-{{ $allRoute->id }}" class="btn btn-success">
                                            <i class="fa fa-btn fa-edit"></i>Edit
                                        </button>
                                    </form>
                                </td>


                                <td>
                                    <form action="/route/{{ $allRoute->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-route-{{ $allRoute->id }}" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>Delete
                                        </button>
                                    </form>
                                </td>



                            </tr>
                        @endforeach
                        </tbody>


                    </table>

                </div>
           


    @endsection
