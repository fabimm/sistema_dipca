<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property boolean $id_accion
 * @property string $nombre_accion
 * @property string $descripcion_accion
 * @property Accionxrol[] $accionxrols
 */
class Accion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'accion';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_accion';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'boolean';

    /**
     * @var array
     */
    protected $fillable = ['nombre_accion', 'descripcion_accion'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accionxrols()
    {
        return $this->hasMany('App\Accionxrol', 'id_accion', 'id_accion');
    }
}
