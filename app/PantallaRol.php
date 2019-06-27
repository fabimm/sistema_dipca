<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property boolean $id_pantalla
 * @property boolean $id_rol
 * @property string $fecha_asignacion
 * @property Pantalla $pantalla
 * @property Rol $rol
 */
class PantallaRol extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pantallaxrol';

    /**
     * @var array
     */
    protected $fillable = ['id_pantalla', 'id_rol', 'fecha_asignacion'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pantalla()
    {
        return $this->belongsTo('App\Pantalla', 'id_pantalla', 'id_pantalla');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rol()
    {
        return $this->belongsTo('App\Rol', 'id_rol', 'id_rol');
    }
}
