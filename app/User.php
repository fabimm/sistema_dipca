<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $primer_nombre_us
 * @property string $primer_apellido_us
 * @property string $email
 * @property string $password
 * @property Ajuste[] $ajustes
 * @property Devolucion[] $devolucions
 * @property Entrada[] $entradas
 * @property SolicitudSalida[] $solicitudSalidas
 * @property Usuarioxrol[] $usuarioxrols
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['primer_nombre_us', 'primer_apellido_us', 'email', 'password'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ajustes()
    {
        return $this->hasMany('App\Ajuste', 'id_usuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function devolucions()
    {
        return $this->hasMany('App\Devolucion', 'id_usuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entradas()
    {
        return $this->hasMany('App\Entrada', 'id_usuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solicitudSalidas()
    {
        return $this->hasMany('App\SolicitudSalida', 'id_usuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarioxrols()
    {
        return $this->hasMany('App\Usuarioxrol', 'id_usuario');
    }
}
