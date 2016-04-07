<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{URL::asset('assets/css/home.css')}}">
    <script type="text/javascript" src="{{URL::asset('assets/js/home.js')}}"></script>
	{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
	
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        Welcome To Online Bus Ticket System
      </div>
      <div class="panel-body">
        <form action="/home/routes" method="post">

                <label for="input_boarding">From</label>
                <select name="boarding_point" class="form-control">
                    @foreach( $places as $place)
                    {

                        <option value={{$place->place_name}} > {{$place->place_name}}  </option> 
                    }
                        @endforeach
                </select>
                <label for="input_boarding">To</label>
                <select name="boarding_point" class="form-control">
                    @foreach( $places as $place)
                    {

                        <option value={{$place->place_name}} > {{$place->place_name}}  </option> 
                    }
                        @endforeach
                </select>
                <label for="input_date">Date</label>
                <input type="date" name="date"></input>

                 <button type="submit" class = "btn btn-search">
                    <i class="fa fa-btn fa-search"></i>Search
                </button>


        </form>
      </div>
    </div>
  </div>


</body>
</html>