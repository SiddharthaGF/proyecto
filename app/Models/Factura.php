<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 * 
 * @property int $id
 * @property int $responsable_id
 * @property int $cliente_id
 * @property Carbon $fecha compra
 * @property float $total
 * @property int $forma_retiro
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Cliente $cliente
 * @property Collection|DetalleFactura[] $detalle_facturas
 *
 * @package App\Models
 */
class Factura extends Model
{
	protected $table = 'facturas';

	protected $casts = [
		'responsable_id' => 'int',
		'cliente_id' => 'int',
		'fecha compra' => 'datetime',
		'total' => 'float',
		'forma_retiro' => 'int'
	];

	protected $fillable = [
		'responsable_id',
		'cliente_id',
		'fecha compra',
		'total',
		'forma_retiro'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'responsable_id');
	}

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}

	public function detalle_facturas()
	{
		return $this->hasMany(DetalleFactura::class);
	}
}
