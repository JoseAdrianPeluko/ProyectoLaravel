@extends('layouts.app')

@section('content')

<article class="container text-center">
    <!--{{(Auth::user()::paginate(10))->links()}}-->
<!--    <a class="btn btn-primary left" href="{{ route('table.create') }}">Nueva Mesa</a>-->
     <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Nueva Mesa</button>
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
                
                <form action="{{ route('table.destroy', $table->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <a href="{{ route('table.edit', $table->id) }}" class="btn btn-warning">Editar</a>
                    <button type="submit"  class="btn btn-danger">Borrar</button>
                    
                </form>
                
            </td>
        </tr>
        @endforeach
    </table>
    {{$tables->links()}}
</article>
@endsection
