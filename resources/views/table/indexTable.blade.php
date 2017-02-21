@extends('layouts.app')

@section('content')

<article class="container ">
    <!--{{(Auth::user()::paginate(10))->links()}}-->
    <a class="btn btn-primary" href="{{ url('/admin/table/create') }}">Nueva Mesa</a>
    <p></p>
    <table class="table table-striped">
    <tr>
        <th></th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Rol</th>
        <th>Acciones</th>
    </tr>
    @foreach(Auth::user()::paginate(10) as $user)
        <tr data-id="{{ $user->id }}">
            <!--<td>{{ $user->id }}</td>-->
            <!--<td>{{ $user->fullName }}</td>-->
            <td>{{ $user->email }}</td>
            <!--<td>{{ $user->rol }}</td>-->
            <td>
                <a href="{{ route('table.edit', $user) }}">Editar</a>
                <a href="" class="btn-delete">Borrar</a>
            </td>
        </tr>
    @endforeach
</table>
</article>
@endsection
