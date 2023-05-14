<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Clinica
 * 
 * @property int $id
 * @property string $institucion
 * @property string $nombre
 * @property int $numero
 * @property int $id_pais
 * @property int $id_municipio
 * @property int $id_entidad
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Entidade $entidade
 * @property Municipio $municipio
 * @property Paise $paise
 * @property Collection|Consultorio[] $consultorios
 *
 * @package App\Models
 */
class Clinica extends Model
{
	protected $table = 'clinicas';

	protected $casts = [
		'numero' => 'int',
		'id_pais' => 'int',
		'id_municipio' => 'int',
		'id_entidad' => 'int'
	];

	protected $fillable = [
		'institucion',
		'nombre',
		'numero',
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

	public function consultorios()
	{
		return $this->hasMany(Consultorio::class, 'id_clinica');
	}
}
