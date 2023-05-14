<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposTratamiento
 * 
 * @property int $id
 * @property string $nombre
 * @property int $semestre
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Tratamiento[] $tratamientos
 *
 * @package App\Models
 */
class TiposTratamiento extends Model
{
	protected $table = 'tipos_tratamientos';

	protected $casts = [
		'semestre' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'nombre',
		'semestre',
		'status'
	];

	public function tratamientos()
	{
		return $this->hasMany(Tratamiento::class, 'id_tipo_tratamiento');
	}
}
