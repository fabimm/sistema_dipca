<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_devolucion
 * @property boolean $id_tipo_dev
 * @property int $id_sol_salid
 * @property int $id_usuario
 * @property string $fecha_devolucion
 * @property TipoDevolucion $tipoDevolucion
 * @property SolicitudSalida $solicitudSalida
 * @property User $user
 * @property ArticuloSalidaxdevolucion[] $articuloSalidaxdevolucions
 */
class Devolucion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'devolucion';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_devolucion';

    /**
     * @var array
     */
    protected $fillable = ['id_tipo_dev', 'id_sol_salid', 'id_usuario', 'fecha_devolucion'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoDevolucion()
    {
        return $this->belongsTo('App\TipoDevolucion', 'id_tipo_dev', 'id_tipo_dev');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solicitudSalida()
    {
        return $this->belongsTo('App\SolicitudSalida', 'id_sol_salid', 'id_sol_salid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id_usuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articuloSalidaxdevolucions()
    {
        return $this->hasMany('App\ArticuloSalidaxdevolucion', 'id_devolucion', 'id_devolucion');
    }
}
