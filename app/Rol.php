<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property boolean $id_rol
 * @property string $nombre_rol
 * @property string $descripcion_rol
 * @property Accionxrol[] $accionxrols
 * @property Pantallaxrol[] $pantallaxrols
 * @property Usuarioxrol[] $usuarioxrols
 */
class Rol extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'rol';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_rol';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'boolean';

    /**
     * @var array
     */
    protected $fillable = ['nombre_rol', 'descripcion_rol'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accionxrols()
    {
        return $this->hasMany('App\Accionxrol', 'id_rol', 'id_rol');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pantallaxrols()
    {
        return $this->hasMany('App\Pantallaxrol', 'id_rol', 'id_rol');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarioxrols()
    {
        return $this->hasMany('App\Usuarioxrol', 'id_rol', 'id_rol');
    }
}
