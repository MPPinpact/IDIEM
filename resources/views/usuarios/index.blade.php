@extends('layout')
@section('masthead-content')
    <div id="masthead">
        <div class="container-fluid">
            <div class="masthead-pad">
                <div class="masthead-text">
                    <h3>Administración de Usuarios <small>Listado de Usuarios</small></h3>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <a href="{{ action('Usuarios@create') }}" class="btn btn-primary btn-medium pull-right" style="margin-right:20px; margin-bottom:20px">Agregar Usuario</a>

    <table class="table data-table" id="usuarios">
        <thead>
        <tr>
            <th style="text-align: center">Nombre</th>
            <th style="text-align: center">Apellido Paterno</th>
            <th style="text-align: center">Apellido Materno</th>
            <th style="text-align: center">Correo</th>
            <th style="text-align: center">Tipo Usuario</th>
            <th style="text-align: center">Tipo Cliente</th>
            <th style="text-align: center">Estado</th>
            <th style="text-align: center">Acciones</th>

        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td style="text-align: left">{{ $usuario->nombre }}</td>
                <td style="text-align: left">{{ $usuario->apellido_paterno }}</td>
                <td style="text-align: left">{{ $usuario->apellido_materno }}</td>
                <td style="text-align: left">{{ $usuario->correo }}</td>
                <td style="text-align: left">{{ $usuario->tipo_usuario->descripcion }}</td>
                <td style="text-align: left">{{ $usuario->tipo_cliente->descripcion }}</td>
                <td style="text-align: left">{{ $usuario->estado ? 'Activo' : 'Inactivo' }}</td>
                <td style="text-align: center">
                    <a href="{{ action('Usuarios@edit', $usuario->id) }}" class="btn-large" style="padding: 0px 5px 0px 5px" title="Editar Usuario">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@section('script')
@endsection