<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nombreTipoId
 * @property Cliente[] $clientes
 * @property Usuario[] $usuarios
 */
class TipoIdentificacion extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nombreTipoId'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Cliente', 'idTipoIdFk');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Usuario', 'idTipoIdFk');
    }
}
