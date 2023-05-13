<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Municipio
 * 
 * @property int $id
 * @property string $nombre
 * @property int $status
 * @property int $id_entidad
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Entidade $entidade
 * @property Collection|Clinica[] $clinicas
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Municipio extends Model
{
	protected $table = 'municipios';

	protected $casts = [
		'status' => 'int',
		'id_entidad' => 'int'
	];

	protected $fillable = [
		'nombre',
		'status',
		'id_entidad'
	];

	public function entidade()
	{
		return $this->belongsTo(Entidade::class, 'id_entidad');
	}

	public function clinicas()
	{
		return $this->hasMany(Clinica::class, 'id_municipio');
	}

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'id_municipio');
	}
}
