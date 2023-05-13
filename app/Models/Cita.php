<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cita
 * 
 * @property int $id
 * @property int $status
 * @property Carbon $fecha
 * @property int $id_tratamiento
 * @property int $id_usuario
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Tratamiento $tratamiento
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Cita extends Model
{
	protected $table = 'citas';

	protected $casts = [
		'status' => 'int',
		'fecha' => 'datetime',
		'id_tratamiento' => 'int',
		'id_usuario' => 'int'
	];

	protected $fillable = [
		'status',
		'fecha',
		'id_tratamiento',
		'id_usuario'
	];

	public function tratamiento()
	{
		return $this->belongsTo(Tratamiento::class, 'id_tratamiento');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}
}
