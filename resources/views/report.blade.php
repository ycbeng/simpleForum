<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    

</head>
<body>
    <div id="app">
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
                        Room Infrmation between 01/03/2019 to 31/03/2019
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
       

<div class="container">

    <div class="row" style="margin-bottom:5px">
        <div class="col-xs-2">
            From
        </div>
        <div class="col-xs-2">
             <input type="date" name="dateFrom" class="form-control" /> 
        </div>
        <div class="col-xs-2">
              to 
        </div>
        <div class="col-xs-2">
             <input type="date" name="dateTo" class="form-control" />
        </div>
    </div>
	<div class="row">
        <div class="table-responsive col-md-12">
        <table id="sort2" class="grid table table-bordered table-sortable">
            <thead>
                <tr><th>Room</th><th>01/03/2019</th><th>02/03/2019</th><th>30/03/2019</th><th>31/03/2019</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td data-id="11">A1</td>
                    <td><input type="text" value="booked" class="form-control"></td>
                    <td><input type="text" value="blocked" class="form-control"></td>
                    <td><input type="text" value="avalable" class="form-control"></td>
                    <td><input type="text" value="avalable" class="form-control"></td>
                    <td><button class="btn btn-primary">Update</button></td>
                </tr>
                <tr>
                    <td data-id="22">A2</td>
                    <td><input type="text" value="booked" class="form-control"></td>
                    <td><input type="text" value="booked" class="form-control"></td>
                    <td><input type="text" value="blocked" class="form-control"></td>
                    <td><input type="text" value="avalable" class="form-control"></td>
                    <td><button class="btn btn-primary">Update</button></td>
                </tr>
                
                
                <tr>
                    <td data-id="33">A3</td>
                    <td><input type="text" value="booked" class="form-control"></td>
                    <td><input type="text" value="avalable" class="form-control"></td>
                    <td><input type="text" value="avalable" class="form-control"></td>
                    <td><input type="text" value="booked" class="form-control"></td>
                    <td><button class="btn btn-primary">Update</button></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
        </div>

        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
