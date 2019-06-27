<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property boolean $id_motivo_ajuste
 * @property string $motivo_ajuste
 * @property Ajuste[] $ajustes
 */
class MotivoAjuste extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'motivo_ajuste';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_motivo_ajuste';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'boolean';

    /**
     * @var array
     */
    protected $fillable = ['motivo_ajuste'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ajustes()
    {
        return $this->hasMany('App\Ajuste', 'id_motivo_ajuste', 'id_motivo_ajuste');
    }
}
