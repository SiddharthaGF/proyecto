<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleFactura
 * 
 * @property int $id
 * @property int $factura_id
 * @property int $producto_id
 * @property int $cantidad
 * @property float $precio
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Factura $factura
 * @property Producto $producto
 *
 * @package App\Models
 */
class DetalleFactura extends Model
{
	protected $table = 'detalle_factura';

	protected $casts = [
		'factura_id' => 'int',
		'producto_id' => 'int',
		'cantidad' => 'int',
		'precio' => 'float'
	];

	protected $fillable = [
		'factura_id',
		'producto_id',
		'cantidad',
		'precio'
	];

	public function factura()
	{
		return $this->belongsTo(Factura::class);
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class);
	}
}
