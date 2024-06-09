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
        Schema::create('persona', function (Blueprint $table) {
            $table->bigInteger('nPerCodigo')->primary();
            $table->char('cPerApellido', 50)->nullable()->default(null);
            $table->char('cPerNombre', 50)->nullable()->default(null);
            $table->string('cPerDireccion', 100)->nullable()->default(null);
            $table->date('dPerFecNac')->nullable(false);
            $table->integer('nPerEdad')->nullable(false);
            $table->char('cPerSexo', 15)->nullable()->default('Masculino');
            $table->decimal('nPerSueldo',6,2)->nullable(false);
            $table->string('cPerRnd', 50)->nullable(false);
            $table->char('nPerEstado', 1)->nullable(false)->default('1');
            $table->string('remember_token', 100)->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
