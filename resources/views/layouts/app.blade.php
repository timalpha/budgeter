<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ config('app.name') }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="stylesheet" href="{{ elixir('css/app.css') }}" type="text/css">
        @yield('header')
    </head>
    <body>
        <nav class="navbar navbar-dark navbar-fixed-top bg-inverse">
          <button type="button" class="navbar-toggler hidden-sm-up" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" aria-label="Toggle navigation"></button>
          <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
          <div id="navbar">
            <nav class="nav navbar-nav float-xs-left">
              <a class="nav-item nav-link" href="#">Dashboard</a>
              <a class="nav-item nav-link" href="#">Settings</a>
              <a class="nav-item nav-link" href="#">Profile</a>
              <a class="nav-item nav-link" href="#">Help</a>
            </nav>
            <nav class="nav nav-inline pull-right">
                @if (Auth::guest())
                        <a class="nav-link" href="login"><i class="fa fa-btn fa-sign-in"></i> Login</a>
                        <a class="nav-link" href="register"><i class="fa fa-btn fa-user"></i> Register</a> 
                @else
                        {{ Form::open(['url' => ['logout'], 'method' => 'logout']) }}
                        <button class="nav-link" type="submit"><i class="fa fa-btn fa-sign-out"></i> Logout</button>
                        {!! Form::close() !!}
                @endif
                </ul>
          </div>
        </nav>

        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
              <ul class="nav nav-sidebar">
                <li class="active"><a class="nav-link" href="/invoices">Invoices <span class="sr-only">(current)</span></a></li>
                <li><a class="nav-link" href="#">Debt</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a class="nav-link" href="#">Reports</a></li>
                <li><a class="nav-link" href="#">Analytics</a></li>
                <li><a class="nav-link" href="#">Export</a></li>
              </ul>
            </div>
            <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 main">
                @yield('content')
            </div>
          </div>
        </div>
        <script src="{{ elixir('js/app.js') }}"></script>
        @yield('footer')
    </body>
</html>