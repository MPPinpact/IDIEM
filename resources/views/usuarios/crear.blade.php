@extends('layout')
@section('masthead-content')
    <div id="masthead">
        <div class="container-fluid">
            <div class="masthead-pad">
                <div class="masthead-text">
                    <h3>Administración de Usuarios
                        <small>Crear Usuario</small>
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')

    @include('messages')
    <form class="form-horizontal" method="POST" action="{{ action('Usuarios@store') }}" accept-charset="UTF-8">
        @csrf
        <div class="panel panel-default">
            <div class="panel-heading">Nuevo Usuario</div>
            <div class="panel-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <div class="control-group ">
                            <label for="username" class="control-label">Nombre: </label>
                            <div class="controls">
                                <input required="required" class="input-xlarge" type="text" name="nombre" id="nombre">
                            </div>
                            <label for="apellido_paterno" class="control-label">Apellido Paterno: </label>
                            <div class="controls">
                                <input required="required" class="input-xlarge" type="text" name="apellido_paterno"
                                       id="apellido_paterno">
                            </div>
                            <label for="apellido_materno" class="control-label">Apellido Materno: </label>
                            <div class="controls">
                                <input required="required" class="input-xlarge" type="text" name="apellido_materno"
                                       id="apellido_materno">
                            </div>
                            <label for="correo" class="control-label">Correo: </label>
                            <div class="controls">
                                <input required="required" class="input-xlarge" type="text" name="correo"
                                       id="correo">
                            </div>
                            <label for="id_tipo_usuario" class="control-label">Tipo Usuario: </label>
                            <div class="controls">
                                <select required="required" class="input-xlarge" id="id_tipo_usuario"
                                        name="id_tipo_usuario"
                                        style="width: 12%;">
                                    @foreach($tipo_usuario as $key => $tu)
                                        <option value="{{ $key }}">{{ $tu }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="id_tipo_cliente" class="control-label">Tipo Cliente: </label>
                            <div class="controls">
                                <select required="required" class="input-xlarge" id="id_tipo_cliente"
                                        name="id_tipo_cliente"
                                        style="width: 12%;">
                                    @foreach($tipo_cliente as $key => $tc)
                                        <option value="{{ $key }}">{{ $tc }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <input class="btn btn-primary btn-large" type="submit" value="Registrar">
                <a href="{{ action('Usuarios@index') }}" class="btn btn-default btn-large pull-right">Cancelar</a>
            </div>
        </div>
    </form>
@endsection

@section('script')
@endsection