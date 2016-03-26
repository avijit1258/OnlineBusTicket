@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit and Delete Places
        </div>
        <div class="panel-body">
            <table class="table table-striped place-table">
                <thead>
                <th>ID</th>
                <th>Company Name</th>
                <th>UserName</th>
                <th>Password</th>

                </thead>


                <tbody>
                @foreach($allCompanies as $allCompany)
                    <tr>

                        <td class="table-text">{{$allCompany->id}}</td>
                        <td class="table-text">{{$allCompany->company_name}}</td>
                        <td class="table-text">{{$allCompany->user_name}}</td>
                        <td class="table-text">{{$allCompany->password}}</td>


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

@endsection
