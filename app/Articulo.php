<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_articulo
 * @property boolean $id_tipo_art
 * @property boolean $id_uni_med
 * @property boolean $id_estado_disp_art
 * @property int $id_subt_react
 * @property string $nombre_articulo
 * @property string $formula_quimica
 * @property string $ruta_hoja_seguridad
 * @property string $observacion_art
 * @property float $exist_sist_art
 * @property float $disponibilidad_art
 * @property float $cant_max_art
 * @property float $cant_min_art
 * @property float $cant_con_ubic
 * @property float $cant_sin_ubic
 * @property string $ubicacion_estante
 * @property string $ubicacion_columna
 * @property float $ultimo_costo
 * @property float $precio_uni_med
 * @property string $ultima_fecha_act
 * @property string $motivo_actualizacion
 * @property TipoArticulo $tipoArticulo
 * @property UnidadMedida $unidadMedida
 * @property EstadoDispArt $estadoDispArt
 * @property Articuloxajuste[] $articuloxajustes
 * @property Articuloxentrada[] $articuloxentradas
 * @property Articuloxsalida[] $articuloxsalidas
 */
class Articulo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'articulo';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_articulo';

    /**
     * @var array
     */
    protected $fillable = ['id_tipo_art', 'id_uni_med', 'id_estado_disp_art', 'id_subt_react', 'nombre_articulo', 'formula_quimica', 'ruta_hoja_seguridad', 'observacion_art', 'exist_sist_art', 'disponibilidad_art', 'cant_max_art', 'cant_min_art', 'cant_con_ubic', 'cant_sin_ubic', 'ubicacion_estante', 'ubicacion_columna', 'ultimo_costo', 'precio_uni_med', 'ultima_fecha_act', 'motivo_actualizacion'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoArticulo()
    {
        return $this->belongsTo('App\TipoArticulo', 'id_tipo_art', 'id_tipo_art');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unidadMedida()
    {
        return $this->belongsTo('App\UnidadMedida', 'id_uni_med', 'id_uni_med');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estadoDispArt()
    {
        return $this->belongsTo('App\EstadoDispArt', 'id_estado_disp_art', 'id_estado_disp_art');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articuloxajustes()
    {
        return $this->hasMany('App\Articuloxajuste', 'id_articulo', 'id_articulo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articuloxentradas()
    {
        return $this->hasMany('App\Articuloxentrada', 'id_articulo', 'id_articulo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articuloxsalidas()
    {
        return $this->hasMany('App\Articuloxsalida', 'id_articulo', 'id_articulo');
    }
}
