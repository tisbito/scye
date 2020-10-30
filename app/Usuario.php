<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $idRegClienteFk
 * @property int $idTipoIdFk
 * @property int $idTipoUserFk
 * @property int $idEstadoFk
 * @property string $nombreUsuario
 * @property string $apellidoUsuario
 * @property string $documentoUsuario
 * @property string $correo
 * @property string $pass
 * @property string $userName
 * @property string $created_at
 * @property string $updated_at
 * @property Estado $estado
 * @property Cliente $cliente
 * @property TipoIdentificacion $tipoIdentificacion
 * @property TipoUsuario $tipoUsuario
 * @property CursoUsuario[] $cursoUsuarios
 * @property Curso[] $cursos
 */
class Usuario extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idRegClienteFk', 'idTipoIdFk', 'idTipoUserFk', 'idEstadoFk', 'nombreUsuario', 'apellidoUsuario', 'documentoUsuario', 'correo', 'pass', 'userName', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estado()
    {
        return $this->belongsTo('App\Estado', 'idEstadoFk');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'idRegClienteFk');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoIdentificacion()
    {
        return $this->belongsTo('App\TipoIdentificacion', 'idTipoIdFk');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoUsuario()
    {
        return $this->belongsTo('App\TipoUsuario', 'idTipoUserFk');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursoUsuarios()
    {
        return $this->hasMany('App\CursoUsuario', 'idUserFk');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursos()
    {
        return $this->hasMany('App\Curso', 'idUsuarioFK');
    }
}
