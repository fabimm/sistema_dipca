<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property boolean $id_pantalla
 * @property string $titulo_pantalla
 * @property string $descripcion_pantalla
 * @property Pantallaxrol[] $pantallaxrols
 */
class Pantalla extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pantalla';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_pantalla';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'boolean';

    /**
     * @var array
     */
    protected $fillable = ['titulo_pantalla', 'descripcion_pantalla'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pantallaxrols()
    {
        return $this->hasMany('App\Pantallaxrol', 'id_pantalla', 'id_pantalla');
    }
}
