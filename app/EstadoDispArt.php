<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property boolean $id_estado_disp_art
 * @property string $estado_disp_art
 * @property Articulo[] $articulos
 */
class EstadoDispArt extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'estado_disp_art';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_estado_disp_art';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'boolean';

    /**
     * @var array
     */
    protected $fillable = ['estado_disp_art'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articulos()
    {
        return $this->hasMany('App\Articulo', 'id_estado_disp_art', 'id_estado_disp_art');
    }
}
