<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $cedula
 * @property Carbon $fecha_nacimiento
 * @property string $direccion
 * @property string $telefono
 * @property string $descripcion
 * @property string $categoria
 * @property string $imagen
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Factura[] $facturas
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'clientes';

	protected $casts = [
		'fecha_nacimiento' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'apellido',
		'cedula',
		'fecha_nacimiento',
		'direccion',
		'telefono',
	];

	public function facturas()
	{
		return $this->hasMany(Factura::class);
	}
}
