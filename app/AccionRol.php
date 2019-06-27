<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property boolean $id_accion
 * @property boolean $id_rol
 * @property string $fecha_asignacion
 * @property Accion $accion
 * @property Rol $rol
 */
class AccionRol extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'accionxrol';

    /**
     * @var array
     */
    protected $fillable = ['id_accion', 'id_rol', 'fecha_asignacion'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accion()
    {
        return $this->belongsTo('App\Accion', 'id_accion', 'id_accion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rol()
    {
        return $this->belongsTo('App\Rol', 'id_rol', 'id_rol');
    }
}
