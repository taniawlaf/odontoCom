<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Paise
 * 
 * @property int $id
 * @property string $nombre
 * @property string $clave
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Clinica[] $clinicas
 * @property Collection|Entidade[] $entidades
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Paise extends Model
{
	protected $table = 'paises';

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'nombre',
		'clave',
		'status'
	];

	public function clinicas()
	{
		return $this->hasMany(Clinica::class, 'id_pais');
	}

	public function entidades()
	{
		return $this->hasMany(Entidade::class, 'id_pais');
	}

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'id_pais');
	}
}
