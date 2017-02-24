@extends('layouts.app')

@section('content')


<div class="container">
    <div class="box-header text-capitalize">
        Buscador




        <table class="table table-striped table-hover text-capitalize ">
            <tbody><tr>
                    <th>ID</th>
                    <th>ID_Product</th>
                    <th>Count</th>
                    <th>Status</th>
                    <th class="text-center">
                        Modificar estado
                    </th>

                </tr>

                @foreach($orders as $order )
                <tr>
                    <td>{{$order->id}}</td>
                    <td><a>{{$order->product_id}}</a></td>
                    <td>{{$order->cantidad}}</td>

                    @if ($order->estado=="pagado")
                    <td><span class="label label-info">{{$order->estado}}</span></td>
                    @elseif ($order->estado=="preparando")
                    <td><span class="label label-warning">{{$order->estado}}</span></td>
                    @elseif ($order->estado=="listo")
                    <td><span class="label label-primary">{{$order->estado}}</span></td>
                    @else
                    <td><span class="label label-default">{{$order->estado}}</span></td>
                    @endif



                    <td class="text-center"><select id="mySelect" class="badge" onchange="myFunction()">

                            @foreach( $estados as $estado )

                            <option>{{$estado[0]["estado"]}}</option>
                            @endforeach


                        </select></td>

                </tr>
                @endforeach



            </tbody></table>


    </div>



    @endsection

    @section('scripts')
    <script>
        function myFunction() {
            
            if (confirm("Desea confirmar el cambio del estado?")) {
//                 alert(document.getElementById("mySelect").value);
                 window.open("/admin/order/"+document.getElementById("mySelect").value+"/edit");
                 

            }
            
           

        }
    </script>
    @endsection


    <!--
    
    
    <div class="container">
        <div class="panel-group" id="accordion">
    
    
            @foreach($orders as $order )
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion{{$order->id}}" href="#collapse{{$order->id}}">Order {{$order->id}}</a>
    </h4>
    </div>
    <div id="collapse{{$order->id}}" class="panel-collapse collapse ">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </div>
            </div> 
            @endforeach
    
    
    
    
    
        </div> 
    </div>-->
