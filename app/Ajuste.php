<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_ajuste
 * @property boolean $id_tipo_ajuste
 * @property boolean $id_motivo_ajuste
 * @property int $id_usuario
 * @property string $descrip_mot_ajus
 * @property string $fecha_ult_regist
 * @property string $fecha_aplic_ajus
 * @property TipoAjuste $tipoAjuste
 * @property MotivoAjuste $motivoAjuste
 * @property User $user
 * @property Articuloxajuste[] $articuloxajustes
 */
class Ajuste extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ajuste';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_ajuste';

    /**
     * @var array
     */
    protected $fillable = ['id_tipo_ajuste', 'id_motivo_ajuste', 'id_usuario', 'descrip_mot_ajus', 'fecha_ult_regist', 'fecha_aplic_ajus'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoAjuste()
    {
        return $this->belongsTo('App\TipoAjuste', 'id_tipo_ajuste', 'id_tipo_ajuste');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function motivoAjuste()
    {
        return $this->belongsTo('App\MotivoAjuste', 'id_motivo_ajuste', 'id_motivo_ajuste');
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
    public function articuloxajustes()
    {
        return $this->hasMany('App\Articuloxajuste', 'id_ajuste', 'id_ajuste');
    }
}
