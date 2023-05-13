<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposUsuario
 * 
 * @property int $id
 * @property string $nombre
 * @property int $nivel
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class TiposUsuario extends Model
{
	protected $table = 'tipos_usuarios';

	protected $casts = [
		'nivel' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'nombre',
		'nivel',
		'status'
	];

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'id_tipo_usuario');
	}
}
