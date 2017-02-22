@extends('layouts.app')

@section('content')

<article class="container text-center">
    <!--{{(Auth::user()::paginate(10))->links()}}-->
<!--    <a class="btn btn-primary left" href="{{ route('table.create') }}">Nueva Mesa</a>-->
     <!--<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" data-title="titulo" >Nueva Mesa</button>-->
     <button 
       type="button" 
       class="btn btn-primary btn-lg" 
       data-toggle="modal"
       data-id="0"
       data-title="Creando Mesa"
       data-target="#myModal">
      Nueva Mesa
    </button>
      @include('table.dialog')
     
     
     
     
    <p></p>
    <table class="table table-responsive table-bordered table-striped">
        <tr>

            <th class="text-center">Numero</th>
            <th class="text-center">Plazas</th>
            <th class="text-center">Reservado</th>
            <th></th>
        </tr>

        @foreach($tables as $table )
        <tr data-id="{{ $table->id }}">
            <td>{{ $table->id }}</td>
            <td>{{ $table->plazas }}</td>
            <td>{{ $table->reservado }}</td>
            <td>
                @include('table.dialog',['table'=>$table]) 
                <form action="{{ route('table.destroy', $table->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    
                    <button type="button" class="btn btn-info" data-toggle="modal" 
                            data-title="Editando la Mesa" data-target="#myModal{{$table->id}}" 
                            data-id="{{$table->id}}">Editar</button>
                    <!--<a href="{{ route('table.edit', $table->id) }}" class="btn btn-warning">Editar</a>-->
                    <button type="submit"  class="btn btn-danger">Borrar</button>
                    
                </form>
                
            </td>
              
        </tr>
         @include('table.dialog')
        @endforeach
    </table>
    {{$tables->links()}}
</article>
@endsection

@section('scripts')
    <script>
        $(function() {
    $('#myModal').on("show.bs.modal", function (e) {
         $("#title").html($(e.relatedTarget).data('title'));
//         $("#fav-title").html($(e.relatedTarget).data('title'));
    });
});
    </script>
@endsection
