<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->decimal('precio');
            $table->unsignedInteger('stock');
            $table->date('fecha_vencimiento');
            $table->string('proveedor', 100);
            $table->string('unidad_medida', 3);
            $table->timestamps();
        });

        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->decimal('precio', 2);
            $table->date('fecha_vencimiento');
            $table->string('descripcion', 100);
            $table->string('categoria');
            $table->string('imagen');
            $table->timestamps();
        });

        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('fecha_nacimiento')->nullable();
            $table->string('direccion', 100)->nullable();
            $table->char('telefono', 10)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('responsable_id')->constrained('users');
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->date('fecha compra');
            $table->decimal('total');
            $table->unsignedTinyInteger('forma_retiro');
            $table->timestamps();
        });

        Schema::create('detalle_factura', function (Blueprint $table) {
            $table->id();
            $table->foreignId('factura_id')->constrained('facturas');
            $table->foreignId('producto_id')->constrained('productos');
            $table->unsignedInteger('cantidad');
            $table->decimal('precio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
