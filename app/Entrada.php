<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_entrada
 * @property boolean $id_tipo_ent
 * @property boolean $id_estado_ent
 * @property int $id_usuario
 * @property int $id_proveedor
 * @property string $observacion_ent
 * @property string $fecha_gest_ent
 * @property string $fecha_reg_ent
 * @property string $fecha_aplic_ent
 * @property boolean $modo_protegido
 * @property TipoEntrada $tipoEntrada
 * @property EstadoEntrada $estadoEntrada
 * @property User $user
 * @property Proveedor $proveedor
 * @property Articuloxentrada[] $articuloxentradas
 */
class Entrada extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'entrada';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_entrada';

    /**
     * @var array
     */
    protected $fillable = ['id_tipo_ent', 'id_estado_ent', 'id_usuario', 'id_proveedor', 'observacion_ent', 'fecha_gest_ent', 'fecha_reg_ent', 'fecha_aplic_ent', 'modo_protegido'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoEntrada()
    {
        return $this->belongsTo('App\TipoEntrada', 'id_tipo_ent', 'id_tipo_ent');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estadoEntrada()
    {
        return $this->belongsTo('App\EstadoEntrada', 'id_estado_ent', 'id_estado_ent');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id_usuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'id_proveedor', 'id_proveedor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articuloxentradas()
    {
        return $this->hasMany('App\Articuloxentrada', 'id_entrada', 'id_entrada');
    }
}
