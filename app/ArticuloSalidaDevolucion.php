<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_art_salidaxdev
 * @property int $id_artxsalida
 * @property int $id_devolucion
 * @property int $cant_devuelta
 * @property int $cant_daniada
 * @property int $cant_pendiente
 * @property Articuloxsalida $articuloxsalida
 * @property Devolucion $devolucion
 */
class ArticuloSalidaDevolucion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'articulo_salidaxdevolucion';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_art_salidaxdev';

    /**
     * @var array
     */
    protected $fillable = ['id_artxsalida', 'id_devolucion', 'cant_devuelta', 'cant_daniada', 'cant_pendiente'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function articuloxsalida()
    {
        return $this->belongsTo('App\Articuloxsalida', 'id_artxsalida', 'id_artxsalida');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function devolucion()
    {
        return $this->belongsTo('App\Devolucion', 'id_devolucion', 'id_devolucion');
    }
}
