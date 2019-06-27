<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_proveedor
 * @property string $nombre_proveedor
 * @property string $nombre_contacto
 * @property string $telefono_contacto
 * @property string $email_proveedor
 * @property string $direccion_proveedor
 * @property Entrada[] $entradas
 */
class Proveedor extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'proveedor';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_proveedor';

    /**
     * @var array
     */
    protected $fillable = ['nombre_proveedor', 'nombre_contacto', 'telefono_contacto', 'email_proveedor', 'direccion_proveedor'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entradas()
    {
        return $this->hasMany('App\Entrada', 'id_proveedor', 'id_proveedor');
    }
}
