<?php

namespace App\Filament\Clientes\Pages;

use App\Models\Producto;
use Filament\Actions\Contracts\HasLivewire;
use Filament\Pages\Page;
use Gloudemans\Shoppingcart\Facades\Cart;

class Menu extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-bars-4';

    protected static string $view = 'filament.clientes.pages.menu';

    public $productos;

    public function mount(): void
    {
        $this->productos = Producto::all();
    }

    public function anadirCarrito(Producto $producto): void
    {
        Cart::add($producto->id, $producto->nombre, 1, $producto->precio);
    }
}
