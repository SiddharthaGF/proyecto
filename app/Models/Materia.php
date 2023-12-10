<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 * 
 * @property int $id
 * @property string $nombre
 * @property float $precio
 * @property int $stock
 * @property Carbon $fecha_vencimiento
 * @property string $proveedor
 * @property string $unidad_medida
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Materia extends Model
{
	protected $table = 'materias';

	protected $casts = [
		'precio' => 'float',
		'stock' => 'int',
		'fecha_vencimiento' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'precio',
		'stock',
		'fecha_vencimiento',
		'proveedor',
		'unidad_medida'
	];
}
