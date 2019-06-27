<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property boolean $id_clas_tipo_art
 * @property string $clas_tipo_art
 * @property TipoArticulo[] $tipoArticulos
 */
class ClasificacionTipoArt extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'clasificacion_tipo_art';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_clas_tipo_art';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'boolean';

    /**
     * @var array
     */
    protected $fillable = ['clas_tipo_art'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipoArticulos()
    {
        return $this->hasMany('App\TipoArticulo', 'id_clas_tipo_art', 'id_clas_tipo_art');
    }
}
