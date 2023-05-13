<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tratamiento
 * 
 * @property int $id
 * @property string $nombre
 * @property float $costo
 * @property string $descripcion
 * @property int $id_tipo_tratamiento
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property TiposTratamiento $tipos_tratamiento
 * @property Collection|ArchivosTratamiento[] $archivos_tratamientos
 * @property Collection|Cita[] $citas
 *
 * @package App\Models
 */
class Tratamiento extends Model
{
	protected $table = 'tratamientos';

	protected $casts = [
		'costo' => 'float',
		'id_tipo_tratamiento' => 'int'
	];

	protected $fillable = [
		'nombre',
		'costo',
		'descripcion',
		'id_tipo_tratamiento'
	];

	public function tipos_tratamiento()
	{
		return $this->belongsTo(TiposTratamiento::class, 'id_tipo_tratamiento');
	}

	public function archivos_tratamientos()
	{
		return $this->hasMany(ArchivosTratamiento::class, 'id_tratamiento');
	}

	public function citas()
	{
		return $this->hasMany(Cita::class, 'id_tratamiento');
	}
}
