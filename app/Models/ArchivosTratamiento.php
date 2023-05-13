<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArchivosTratamiento
 * 
 * @property int $id
 * @property int $status
 * @property string $ruta
 * @property int $id_tratamiento
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Tratamiento $tratamiento
 *
 * @package App\Models
 */
class ArchivosTratamiento extends Model
{
	protected $table = 'archivos_tratamientos';

	protected $casts = [
		'status' => 'int',
		'id_tratamiento' => 'int'
	];

	protected $fillable = [
		'status',
		'ruta',
		'id_tratamiento'
	];

	public function tratamiento()
	{
		return $this->belongsTo(Tratamiento::class, 'id_tratamiento');
	}
}
