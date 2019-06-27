<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_artxajuste
 * @property int $id_articulo
 * @property int $id_ajuste
 * @property float $cant_fisica
 * @property float $cant_sistema
 * @property Articulo $articulo
 * @property Ajuste $ajuste
 */
class ArticuloAjuste extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'articuloxajuste';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_artxajuste';

    /**
     * @var array
     */
    protected $fillable = ['id_articulo', 'id_ajuste', 'cant_fisica', 'cant_sistema'];

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
    public function ajuste()
    {
        return $this->belongsTo('App\Ajuste', 'id_ajuste', 'id_ajuste');
    }
}
