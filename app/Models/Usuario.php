<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $id
 * @property string $nombre
 * @property string $ap_pat
 * @property string $ap_mat
 * @property string $email
 * @property string $telefono
 * @property string $username
 * @property string $password
 * @property int $status
 * @property int $id_tipo_usuario
 * @property int $id_pais
 * @property int $id_municipio
 * @property int $id_entidad
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Entidade $entidade
 * @property Municipio $municipio
 * @property Paise $paise
 * @property TiposUsuario $tipos_usuario
 * @property Collection|Cita[] $citas
 * @property Collection|Consultorio[] $consultorios
 * @property Collection|Inventario[] $inventarios
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';

	protected $casts = [
		'status' => 'int',
		'id_tipo_usuario' => 'int',
		'id_pais' => 'int',
		'id_municipio' => 'int',
		'id_entidad' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nombre',
		'ap_pat',
		'ap_mat',
		'email',
		'telefono',
		'username',
		'password',
		'status',
		'id_tipo_usuario',
		'id_pais',
		'id_municipio',
		'id_entidad'
	];

	public function entidade()
	{
		return $this->belongsTo(Entidade::class, 'id_entidad');
	}

	public function municipio()
	{
		return $this->belongsTo(Municipio::class, 'id_municipio');
	}

	public function paise()
	{
		return $this->belongsTo(Paise::class, 'id_pais');
	}

	public function tipos_usuario()
	{
		return $this->belongsTo(TiposUsuario::class, 'id_tipo_usuario');
	}

	public function citas()
	{
		return $this->hasMany(Cita::class, 'id_usuario');
	}

	public function consultorios()
	{
		return $this->hasMany(Consultorio::class, 'id_usuario');
	}

	public function inventarios()
	{
		return $this->hasMany(Inventario::class, 'id_usuario');
	}
}
