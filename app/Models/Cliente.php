<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use Carbon\Carbon;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

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
class Cliente extends Authenticatable implements FilamentUser
{

    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasPanelShield;

    protected $table = 'clientes';

    protected $casts = [
        'fecha_nacimiento' => 'datetime'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $fillable = [
        'name',
        'email',
        'fecha_nacimiento',
        'direccion',
        'password',
        'telefono',
    ];

    public function facturas()
    {
        return $this->hasMany(Factura::class);
    }
}
