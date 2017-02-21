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

<table class="table table-responsive table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Age</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>41</td>
                            <td>john@example.com</td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>27</td>
                            <td>mary@example.com</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>34</td>
                            <td>july@example.com</td>
                        </tr>
                    </tbody>
                </table>


@endsection