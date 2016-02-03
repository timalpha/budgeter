<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Budgeter</title>
        <meta charset="utf-8">
        <meta name="author" content="tim alpha">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}" type="text/css">
@yield('header')
    </head>
    <body>
        <nav class="navbar navbar-full navbar-light bg-faded">
            <div class="container">
            <h1 class="navbar-brand">Budgeter</h1>
            <ul class="nav navbar-nav">
@if (Auth::user())
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Dashboard</a>
                </li>
@endif
                <ul class="nav nav-inline pull-xs-right">
@if (Auth::guest())
                        <li class="nav-item">
                            <a class="nav-link" href="/login"><i class="fa fa-btn fa-sign-in"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register"><i class="fa fa-btn fa-user"></i> Register</a>
                        </li>        
@else
                        <li class="nav-item">
                            <a class="nav-link" href="/logout"><i class="fa fa-btn fa-sign-out"></i> Logout</a>
                        </li>
@endif
                </ul>
            </ul>
            </div>
        </nav>
        
@yield('content')
        <script src="{{ elixir('js/all.js') }}"></script>
@yield('footer')
    </body>
</html>
