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
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ciudad');
            $table->timestamps();
        });

        Schema::table('persona', function (Blueprint $table) {
            $table->unsignedBigInteger('departamento_id')->nullable()->after('nPerCodigo');
            $table->foreign('departamento_id')
                ->references('id')
                ->on('departamentos')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('persona', function (Blueprint $table) {
            $table->dropForeign('persona_departamento_id_foreign');
            $table->dropColumn('departamento_id'); 
        });

        Schema::dropIfExists('departamentos');
    }
};
