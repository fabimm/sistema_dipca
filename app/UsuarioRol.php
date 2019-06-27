<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_usuario
 * @property boolean $id_rol
 * @property string $fecha_asignacion
 * @property User $user
 * @property Rol $rol
 */
class UsuarioRol extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'usuarioxrol';

    /**
     * @var array
     */
    protected $fillable = ['id_usuario', 'id_rol', 'fecha_asignacion'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id_usuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rol()
    {
        return $this->belongsTo('App\Rol', 'id_rol', 'id_rol');
    }
}
