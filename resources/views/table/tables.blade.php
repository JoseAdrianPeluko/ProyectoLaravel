@extends('layouts.app')

@section('content')




@foreach( $tables as $table )


<!-- Modal -->
<div id="myModal{{$table->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="title">Confirmar Reserva?</h4>
            </div>



            <div class="modal-footer text-center">
                <a class="btn btn-info" href="{{route("table.show",$table->id)}}" >Confirmar</a>   
            </div>

        </div>

    </div>
</div>

@if($table->reservado==1)
<div class="col-sm-3 text-center text-uppercase">
    <div class="panel panel-warning">
        @else
        <div class="col-sm-3 text-center text-uppercase"data-toggle="modal" data-target="#myModal{{$table->id}}">
            <div class="panel panel-success">         
                @endif

                <div class="panel-heading">Numero {{$table->id}}</div>
                <div class="panel-body">
                    <img src="https://www.coperama.es/blog/wp-content/uploads/2014/12/mesa.jpg" 
                         class="img-responsive" style=" height: 150px;width:100% " alt="Image"></div>
                <div class="panel-footer ">Para {{$table->plazas}} personas</div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
