<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    protected $softDelete = true;
    protected $table = 'usuario';
    protected $connection = 'mysql';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = ['id', 'nombre', 'apellido_paterno', 'apellido_materno', 'correo', 'estado', 'id_tipo_usuario', 'id_tipo_cliente'];


    //relaciones
    public function tipo_cliente()
    {
        return $this->belongsTo('App\Models\TipoCliente', 'id_tipo_cliente');
    }

    public function tipo_usuario()
    {
        return $this->belongsTo('App\Models\TipoUsuario', 'id_tipo_usuario');
    }
}
