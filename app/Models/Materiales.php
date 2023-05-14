<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Materiale
 * 
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Inventario[] $inventarios
 *
 * @package App\Models
 */
class Materiales extends Model
{
	protected $table = 'materiales';

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'status'
	];

	public function inventarios()
	{
		return $this->hasMany(Inventario::class, 'id_material');
	}
}
