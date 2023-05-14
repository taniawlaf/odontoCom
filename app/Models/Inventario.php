<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 * 
 * @property int $id
 * @property int $existencia
 * @property int $entrada
 * @property int $salida
 * @property int $stock
 * @property int $id_material
 * @property int $id_usuario
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Materiale $materiale
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Inventario extends Model
{
	protected $table = 'inventarios';

	protected $casts = [
		'existencia' => 'int',
		'entrada' => 'int',
		'salida' => 'int',
		'stock' => 'int',
		'id_material' => 'int',
		'id_usuario' => 'int'
	];

	protected $fillable = [
		'existencia',
		'entrada',
		'salida',
		'stock',
		'id_material',
		'id_usuario'
	];

	public function materiale()
	{
		return $this->belongsTo(Materiale::class, 'id_material');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}
}
