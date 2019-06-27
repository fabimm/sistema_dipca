<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property boolean $id_estado_sol_sal
 * @property string $estado_sol_sal
 * @property SolicitudSalida[] $solicitudSalidas
 */
class EstadoSolicitudSalida extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'estado_solicitud_salida';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_estado_sol_sal';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'boolean';

    /**
     * @var array
     */
    protected $fillable = ['estado_sol_sal'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solicitudSalidas()
    {
        return $this->hasMany('App\SolicitudSalida', 'id_estado_sol_sal', 'id_estado_sol_sal');
    }
}
