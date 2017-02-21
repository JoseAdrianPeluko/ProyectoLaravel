<!--<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto Final Jose Adrian</title>

         Fonts 
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         Styles 
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/">Logo</a>
    </div>
      
    <div class="collapse navbar-collapse" id="myNavbar">
      
        @if (Route::has('login'))
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                <li><a href="{{ url('/home') }}">Home</a></li>
                @else
                <li><a href="{{ url('/login') }}" class="glyphicon glyphicon-user">Login</a></li>
                <li><a href="{{ url('/register') }}" class="glyphicon glyphicon-user">Register</a></li>
                @endif
            </ul>
            @endif
        
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
        
    </div>
      
  </div>
</nav>
        
        <div class="flex-center position-ref ">
            @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
            @endif
        </div>
        <div class="container-fluid">
            <div class="row content">
                <div class="col-sm-3 sidenav hidden-xs">
                    <h2>Logo</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#section1">Dashboard</a></li>
                        <li><a href="#section2">Age</a></li>
                        <li><a href="#section3">Gender</a></li>
                        <li><a href="#section3">Geo</a></li>
                    </ul><br>
                </div>
            </div>
        </div>


                    <div class="content">
                        <div class="title m-b-md">
                            Laravel
                        </div>
        
                        <div class="links">
                            <a href="https://laravel.com/docs">Documentation</a>
                            <a href="https://laracasts.com">Laracasts</a>
                            <a href="https://laravel-news.com">News</a>
                            <a href="https://forge.laravel.com">Forge</a>
                            <a href="https://github.com/laravel/laravel">GitHub</a>
                        </div>
                    </div>


    </body>
</html>-->

@extends('layouts.app')

@section('content')
<!--
<aside class="col-sm-3 sidenav hidden-xs">
  
    
      <h2>Categorias</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Ofertas</a></li>
        <li><a href="#section2">Lunes</a></li>
        <li><a href="#section3">Martes</a></li>
        <li><a href="#section3">Miercoles</a></li>
        <li><a href="#section3">Jueves</a></li>
        <li><a href="#section3">Viernes</a></li>
        <li><a href="#section3">Fines</a></li>
      </ul><br>
   
    <br>
    </aside>-->

<article class="container-fluid">
  
    <aside class="col-sm-3 sidenav hidden-xs">
      <h2>Categorias</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Ofertas</a></li>
        <li><a href="#section2">Lunes</a></li>
        <li><a href="#section3">Martes</a></li>
        <li><a href="#section3">Miercoles</a></li>
        <li><a href="#section3">Jueves</a></li>
        <li><a href="#section3">Viernes</a></li>
        <li><a href="#section3">Fines</a></li>
      </ul><br>
    </aside>
    
    
   <!--for para cargar los col-->
    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
  
</article>


@endsection
