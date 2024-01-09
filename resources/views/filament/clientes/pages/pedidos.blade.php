@auth
    @if (request()->is('pedidos'))
        @php
            header('Location: /clientes/pedidos');
            exit();
        @endphp
    @endif
    <x-filament-panels::page>
        <div>
            <x-filament::button class="w-full" wire:click='verCarrito'>
                {{ 'Ver Carrito' }}
            </x-filament::button>
        </div>
    </x-filament-panels::page>
@endauth
@guest
    <x-app-layout>
        <div>
            <x-filament::button class="w-full" wire:click='verCarrito'>
                {{ 'Ver Carrito' }}
            </x-filament::button>
        </div>
    </x-app-layout>
@endguest
