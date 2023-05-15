<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Consultorio
 * 
 * @property int $id
 * @property int $status
 * @property int $id_usuario
 * @property int $id_clinica
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $numero
 * 
 * @property Clinica $clinica
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Consultorio extends Model
{
	protected $table = 'consultorios';

	protected $casts = [
		'status' => 'int',
		'id_usuario' => 'int',
		'id_clinica' => 'int',
		'numero' => 'int'
	];

	protected $fillable = [
		'status',
		'id_usuario',
		'id_clinica',
		'numero'
	];

	public function clinica()
	{
		return $this->belongsTo(Clinica::class, 'id_clinica');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}
}
