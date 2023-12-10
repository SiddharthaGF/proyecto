<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $id
 * @property string $nombre
 * @property float $precio
 * @property Carbon $fecha_vencimiento
 * @property string $descripcion
 * @property string $categoria
 * @property string $imagen
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|DetalleFactura[] $detalle_facturas
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'productos';

	protected $casts = [
		'precio' => 'float',
		'fecha_vencimiento' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'precio',
		'fecha_vencimiento',
		'descripcion',
		'categoria',
		'imagen'
	];

	public function detalle_facturas()
	{
		return $this->hasMany(DetalleFactura::class);
	}
}
