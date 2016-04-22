<<!DOCTYPE html>
<html>
<head>
	<title>Coaches</title>
</head>
<body>

		 <div class="panel panel-default">
                <div class="panel-heading">
                    All Coaches
                </div>
                <div class="panel-body">
                    <table class="table table-striped place-table">
                        <thead>
                        <th>Company Name</th>
                        <th>Bus Type</th>
                        <th>Bus Number</th>
                        <th>Fare</th>
                        <th>Departure Time</th>
                        <th>Action</th>
                        
                        </thead>


                        <tbody>
                        @foreach($Routes as $Route)
                            <tr>

                                <td class="table-text">{{$Route->company_name}}</td>
                                <td class="table-text">{{$Route->bus_type}}</td>
                                <td class="table-text">{{$Route->bus_number}}</td>
                                <td class="table-text">{{$Route->fare}}</td>
                                <td class="table-text">{{$Route->schedule}}</td>
                                
                                <td>
                                    <form action="/route/{{ $Route->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('UPDATE') }}

                                        <button type="submit" id="edit-route-{{ $Route->id }}" class="btn btn-success">
                                            <i class="fa fa-btn fa-select"></i>Edit
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>


                    </table>

                </div>
           

</body>
</html>