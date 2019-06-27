<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property boolean $id_estado_ent
 * @property string $estado_ent
 * @property Entrada[] $entradas
 */
class EstadoEntrada extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'estado_entrada';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_estado_ent';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'boolean';

    /**
     * @var array
     */
    protected $fillable = ['estado_ent'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entradas()
    {
        return $this->hasMany('App\Entrada', 'id_estado_ent', 'id_estado_ent');
    }
}
