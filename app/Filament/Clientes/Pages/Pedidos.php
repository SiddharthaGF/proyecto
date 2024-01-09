<?php

namespace App\Filament\Clientes\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Request;

class Pedidos extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.clientes.pages.pedidos';
}
