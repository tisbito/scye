<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nombreEstado
 * @property Cliente[] $clientes
 * @property Usuario[] $usuarios
 */
class Estado extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nombreEstado'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Cliente', 'idEstadoIdFk', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Usuario', 'idEstadoFk');
    }
}
