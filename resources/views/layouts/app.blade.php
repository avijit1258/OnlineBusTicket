<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' 

type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    {{--<link rel="stylesheet" href="{{URL::asset('assets/css/home.css')}}">--}}
    <script type="text/javascript" src="{{URL::asset('assets/js/home.js')}}"></script>

<<<<<<< HEAD
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
=======
   
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="#">GET READY</a>
                    </div>
                    <ul class="nav navbar-nav">
                            <li><a class="active" href="/">Home</a></li>
                            <li><a href="/places">Places</a></li>
                            <li><a href="/admin/bus">Bus</a></li>
                            <li><a href="/admin/bus_type">Bus Type</a></li>
                            <li><a href="/admin/routes">Routes</a></li>
                            <li><a href="/admin/all_routes">All Routes</a></li>
                            <li><a href="/admin/company">Company</a></li>
                            <li><a href="/admin/all_companies">All Companies</a></li>
                    </ul>
                  </div>
        </nav>
        

        <div class="col-sm-offset-2">
                <div class="panel panel-default" >
                    <div class="panel-heading">
                        Edit and Delete Places
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped place-table">
                            <thead>
                            <th>Place</th>
                            </thead>


                            <tbody>
                            @foreach($allPlaces as $allPlace)
                                <tr>

                                    <td class="table-text">{{$allPlace->place_name}}</td>
                                    <td>
                                        <form action="/place/{{ $allPlace->place_id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" id="delete-place-{{ $allPlace->place_id }}" class="btn btn-danger">
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



        <div class="panel panel-default" >
            <div class="panel-heading">Add New Place </div>
            <div class="panel-body">
                @yield('content')
>>>>>>> origin/master
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
