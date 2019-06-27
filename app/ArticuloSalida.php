<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_artxsalida
 * @property int $id_articulo
 * @property int $id_sol_salid
 * @property string $observacion_sol_salid
 * @property float $cant_solicitada
 * @property Articulo $articulo
 * @property SolicitudSalida $solicitudSalida
 * @property ArticuloSalidaxdevolucion[] $articuloSalidaxdevolucions
 */
class ArticuloSalida extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'articuloxsalida';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_artxsalida';

    /**
     * @var array
     */
    protected $fillable = ['id_articulo', 'id_sol_salid', 'observacion_sol_salid', 'cant_solicitada'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function articulo()
    {
        return $this->belongsTo('App\Articulo', 'id_articulo', 'id_articulo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solicitudSalida()
    {
        return $this->belongsTo('App\SolicitudSalida', 'id_sol_salid', 'id_sol_salid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articuloSalidaxdevolucions()
    {
        return $this->hasMany('App\ArticuloSalidaxdevolucion', 'id_artxsalida', 'id_artxsalida');
    }
}
