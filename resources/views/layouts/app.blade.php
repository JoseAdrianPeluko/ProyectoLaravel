<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
        crossorigin="anonymous"></script>
        <script
            src="https://code.jquery.com/jquery-3.1.1.js"
            integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
        crossorigin="anonymous"></script>
        <!-- Scripts -->
        <script>
window.Laravel = <?php
echo json_encode([
    'csrfToken' => csrf_token(),
]);
?>
        </script>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-inverse navbar-static-top">
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
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;

                            @if (Auth::check() && Auth::user()->role=="admin")
                            <li><a href="#">Users</a></li>
                            <li><a href="{{ route("table.index")}}">Tables</a></li>
                            <li><a href="{{ route("product.index")}}">Products</a></li>
                            <li><a href="{{ route("order.index")}}">Orders</a></li>
                            @endif
                            @if(Auth::check() && Auth::user()->role=="empleado")
                            <li><a href="/admin/order">Orders</a></li>
                            @endif

<!--                            <li><a href="#" class="glyphicon glyphicon-shopping-cart"> <span class="badge">4</span></a></li>-->

                        </ul>



                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">

                            @if(Auth::check() && Auth::user()->order!=null )
                            <!--  carrito-->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle glyphicon glyphicon-shopping-cart" 
                                   data-toggle="dropdown"><span class="badge">{{Auth::user()->order->estado}}</span></a>
                                <ul class="dropdown-menu">


                                    <li><img src="{{Auth::user()->order->product->foto}}" class="img-responsive" style=" 
                                             height: 50px;width:100%" alt="Image">               
                                    </li>

                                    <li role="separator" class="divider"></li>
                                    <li class="text-center bg-danger">{{Auth::user()->order->product->pvp}}€</li>
                                    <li role="separator" class="divider"></li>

                                    @if(Auth::user()->order->estado=="listo")

                                    @if(Auth::user()->table!=null )
                                    <li>Tiene reservada la mesa {{Auth::user()->table->id}}</li>
                                    @elseif(Auth::user()->order->enviar==1)
                                    <li class="text-center text-success text-uppercase">
                                        El pedido se ha enviado a su domicilio
                                    </li>
                                    @endif

                                    @endif

                                </ul>
                            </li>
                            @endif


                            <!-- Authentication Links -->
                            @if (Auth::guest())
                            <li><a href="{{ url('/login') }}" class="glyphicon glyphicon-user">Login</a></li>
                            <li><a href="{{ url('/register') }}" class="glyphicon glyphicon-edit">Register</a></li>
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        @if ( Auth::user()->order!=null  )

                                        @if ( Auth::user()->table==null && Auth::user()->order->enviar==0   )
                                        <a href="{{ route("table.create")}}" class="glyphicon glyphicon-king"> Reservar Mesa</a>

                                        <a href="{{ route("order.home") }}" class="glyphicon glyphicon-home"> A Domicilio</a>
                                        @else


                                        @endif

                                        @endif
                                        <a href="{{ url('/logout') }}" class="glyphicon glyphicon-off"
                                           onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
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

            @yield('content')
        </div>
        <footer class="container-fluid text-center col-sm-12">

            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="/doc">DOC</a></li>
                <li role="presentation"><a>Realizado por Jose Adrian Alumno22</a></li>
            </ul>
        </footer>
        @yield('scripts')
        <!-- Scripts -->
        <script src="/js/app.js"></script>
    </body>
</html>
