<?php

namespace App\Policies;

use App\Models\DetalleFactura;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class DetalleFacturaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_detalle::factura');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, DetalleFactura $detalleFactura): bool
    {
        return $user->can('view_detalle::factura');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_detalle::factura');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, DetalleFactura $detalleFactura): bool
    {
        return $user->can('update_detalle::factura');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, DetalleFactura $detalleFactura): bool
    {
        return $user->can('delete_detalle::factura');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, DetalleFactura $detalleFactura): bool
    {
        return $user->can('restore_detalle::factura');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, DetalleFactura $detalleFactura): bool
    {
        return $user->can('force_delete_detalle::factura');
    }
}
