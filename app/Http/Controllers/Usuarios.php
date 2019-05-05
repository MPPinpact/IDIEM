<?php

namespace App\Http\Controllers;

use App\Models\TipoCliente;
use App\Models\TipoUsuario;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Validator;

class Usuarios extends Controller
{
    //
    /**
     *    Constructor
     **/
    public function __construct()
    {
        $this->messages = array(
            'required' => 'Debe completar todos los Campos.',
        );
    }

    public function index()
    {
        $usuarios = Usuario::get();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        $tipo_usuario = TipoUsuario::orderBy('descripcion')->pluck('descripcion', 'id')->toArray();
        $tipo_cliente = TipoCliente::orderBy('descripcion')->pluck('descripcion', 'id')->toArray();
        return view('usuarios.crear', compact('tipo_usuario', 'tipo_cliente'));
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $rules = array(
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'correo' => 'required',
            'id_tipo_usuario' => 'required',
            'id_tipo_cliente' => 'required',
        );

        $validation = Validator::make($inputs, $rules, $this->messages);
        if ($validation->fails()){
            return redirect()->back()
                ->withErrors($validation)
                ->withInput();
        }

        $usuario = new Usuario();
        $usuario->nombre = $inputs['nombre'];
        $usuario->apellido_paterno = $inputs['apellido_paterno'];
        $usuario->apellido_materno = $inputs['apellido_materno'];
        $usuario->correo = $inputs['correo'];
        $usuario->id_tipo_usuario = $inputs['id_tipo_usuario'];
        $usuario->id_tipo_cliente = $inputs['id_tipo_cliente'];
        $usuario->save();

        return redirect('/usuarios')->with('success', "Usuario <strong> $usuario->name </strong> creado!");
    }

    public function edit($id)
    {
        $usuario = Usuario::find($id);
        $tipo_usuario = TipoUsuario::orderBy('descripcion')->pluck('descripcion', 'id')->toArray();
        $tipo_cliente = TipoCliente::orderBy('descripcion')->pluck('descripcion', 'id')->toArray();
        return view('usuarios.editar', compact('usuario', 'tipo_usuario', 'tipo_cliente'));
    }

    public function update(Request $request)
    {
        $inputs = $request->all();
        $rules = array(
            'id' => 'required',
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'correo' => 'required',
            'id_tipo_usuario' => 'required',
            'id_tipo_cliente' => 'required',
        );

        $validation = Validator::make($inputs, $rules, $this->messages);
        if ($validation->fails()){
            return redirect()->back()
                ->withErrors($validation)
                ->withInput();
        }

        $usuario = Usuario::find($inputs['id']);
        $usuario->nombre = $inputs['nombre'];
        $usuario->apellido_paterno = $inputs['apellido_paterno'];
        $usuario->apellido_materno = $inputs['apellido_materno'];
        $usuario->correo = $inputs['correo'];
        $usuario->id_tipo_usuario = $inputs['id_tipo_usuario'];
        $usuario->id_tipo_cliente = $inputs['id_tipo_cliente'];
        $usuario->estado = $inputs['estado'];
        $usuario->save();

        return redirect('/usuarios')->with('success', "Usuario <strong> $usuario->name </strong> actualizado!");
    }
}
