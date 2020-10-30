<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $idTipoIdFk
 * @property int $idEstadoIdFk
 * @property string $identificacion
 * @property string $nombreCliente
 * @property string $direccion
 * @property string $correo
 * @property string $ciudad
 * @property string $telefono
 * @property int $numEmpleados
 * @property string $userName
 * @property string $pass
 * @property string $created_at
 * @property string $updated_at
 * @property Estado $estado
 * @property TipoIdentificacion $tipoIdentificacion
 * @property Curso[] $cursos
 * @property Usuario[] $usuarios
 */
class Cliente extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idTipoIdFk', 'idEstadoIdFk', 'identificacion', 'nombreCliente', 'direccion', 'correo', 'ciudad', 'telefono', 'numEmpleados', 'userName', 'pass', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estado()
    {
        return $this->belongsTo('App\Estado', 'idEstadoIdFk');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoIdentificacion()
    {
        return $this->belongsTo('App\TipoIdentificacion', 'idTipoIdFk');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursos()
    {
        return $this->hasMany('App\Curso', 'idClienteFK');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Usuario', 'idRegClienteFk');
    }
}
