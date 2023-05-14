<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Entidade
 * 
 * @property int $id
 * @property string $nombre
 * @property int $status
 * @property int $id_pais
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Paise $paise
 * @property Collection|Clinica[] $clinicas
 * @property Collection|Municipio[] $municipios
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Entidades extends Model
{
	protected $table = 'entidades';

	protected $casts = [
		'status' => 'int',
		'id_pais' => 'int'
	];

	protected $fillable = [
		'nombre',
		'status',
		'id_pais'
	];

	public function paise()
	{
		return $this->belongsTo(Paise::class, 'id_pais');
	}

	public function clinicas()
	{
		return $this->hasMany(Clinica::class, 'id_entidad');
	}

	public function municipios()
	{
		return $this->hasMany(Municipio::class, 'id_entidad');
	}

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'id_entidad');
	}
}
