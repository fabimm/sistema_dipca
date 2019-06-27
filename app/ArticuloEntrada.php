<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_artxentrada
 * @property int $id_articulo
 * @property int $id_entrada
 * @property float $costo_total_artxent
 * @property float $costoxunidad_med
 * @property float $cantidad_artxent
 * @property Articulo $articulo
 * @property Entrada $entrada
 */
class ArticuloEntrada extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'articuloxentrada';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_artxentrada';

    /**
     * @var array
     */
    protected $fillable = ['id_articulo', 'id_entrada', 'costo_total_artxent', 'costoxunidad_med', 'cantidad_artxent'];

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
    public function entrada()
    {
        return $this->belongsTo('App\Entrada', 'id_entrada', 'id_entrada');
    }
}
