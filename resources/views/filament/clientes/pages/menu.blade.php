@auth
    @if (request()->is('pedidos'))
        @php
            header('Location: /clientes/pedidos');
            exit();
        @endphp
    @endif
    <x-filament-panels::page md=2>
        <x-filament::grid default=1 sm=2 md=3 class="gap-4">
            @foreach ($productos as $producto)
                <x-filament::card>
                    <div class="text-center">
                        {{ $producto->nombre }}
                    </div>
                    <img src="{{ Storage::url($producto->imagen) }}" alt="{{ $producto->nombre }}"
                        class="w-full h-48 object-cover">
                    <div class="text-center">
                        {{ $producto->categoria }}
                    </div>
                    <x-filament::button class="w-full" wire:click='anadirCarrito({{ $producto }})'>
                        {{ \Illuminate\Support\Number::currency($producto->precio) }}
                    </x-filament::button>
                </x-filament::card>
            @endforeach
        </x-filament::grid>
    </x-filament-panels::page>
@endauth
@guest
    <x-app-layout>
        <x-filament::grid default=1 sm=2 md=3 class="gap-4">
            @foreach ($productos as $producto)
                <x-filament::card>
                    <div class="text-center">
                        {{ $producto->nombre }}
                    </div>
                    <img src="{{ Storage::url($producto->imagen) }}" alt="{{ $producto->nombre }}"
                        class="w-full h-48 object-cover">
                    <div class="text-center">
                        {{ $producto->categoria }}
                    </div>
                    <x-filament::button class="w-full" wire:click='anadirCarrito({{ $producto }})'>
                        {{ \Illuminate\Support\Number::currency($producto->precio) }}
                    </x-filament::button>
                </x-filament::card>
            @endforeach
        </x-filament::grid>
    </x-app-layout>
@endguest
