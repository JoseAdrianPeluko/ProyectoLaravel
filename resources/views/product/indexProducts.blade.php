@extends('layouts.app')

@section('content')




<div class="container text-center">
    <div class="panel-group" id="accordion">


        @foreach($products as $product )

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion{{$product->id}}" href="#collapse{{$product->id}}">Producto {{$product->id}}</a>
                </h4>
            </div>

            <!--                cuerpo-->

            <div id="collapse{{$product->id}}" class="panel-collapse collapse ">
                <div class="modal-body text-center">




                    {{ Form::model($product, ['route' => ['product.update', $product->id],'method' => 'put']) }}

                    <div class="form-group form-horizontal">
                        {{ Form::label('name', 'Nombre') }}
                        {{Form::text('name')}}
                        {{ Form::label('categoria', 'Categoria') }}
                        {{Form::select('categoria', ["Lunes"=>"Lunes","Martes"=>"Martes","Miercoles"=>"Miercoles",
                                    "Jueves"=>"Jueves","Viernes"=>"Viernes","Finde"=>"Finde","Ofertas"=>"Ofertas"])}}
                        {{ Form::label('pvp', 'Precio') }}
                        {{Form::text('pvp')}}
                        {{ Form::label('foto', 'URL FOTO') }}
                        {{Form::text('foto')}}
                    </div>
                    
                    {{ Form::submit("Editar",['class' => 'btn btn-warning'])}}
                     {{ Form::close() }}
                     
                     {{ Form::open(['route' => ['product.destroy', $product->id],'method' => 'delete']) }}
                     {{ Form::submit("Eliminar",['class' => 'btn btn-danger'])}}
                     {{ Form::close() }}
                  
                </div>

                
                
                 
            </div> 

            @endforeach





        </div>
        {{$products->links()}} 
    </div>




    @endsection

    @section('scripts')
    <script>
//        function myFunction(id) {
//            
//            if (confirm("Desea confirmar el cambio del estado?")) {
////                 alert(document.getElementById("mySelect").value);
//                 window.location.replace("/admin/order/edit/"
//                         +document.getElementById("mySelect"+id).value
//                         +"/"+id);
//            }
//        }
    </script>
    @endsection



