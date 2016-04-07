<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin </title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    {{--<link rel="stylesheet" href="{{URL::asset('assets/css/home.css')}}">--}}
    <script type="text/javascript" src="{{URL::asset('assets/js/home.js')}}"></script>
   
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
                            <li><a href="#contact">Bus</a></li>
                            <li><a href="#about">Bus Type</a></li>
                            <li><a href="/admin/routes">Routes</a></li>
                            <li><a href="/admin/all_routes">All Routes</a></li>
                            <li><a href="/admin/company">Company</a></li>
                            <li><a href="/admin/all_companies">All Companies</a></li>
                    </ul>
                  </div>
        </nav>
    <div class="col-sm-offset-1">
        @yield('content')
    </div>
</div>
</body>