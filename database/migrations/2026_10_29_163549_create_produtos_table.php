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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('produto_id');
            $table->string('nome')->unique();
            $table->text('descricao')->nullable();
            $table->string('marca');
            $table->string('categoria_id')->constrained();
            $table->decimal('preco_custo');
            $table->decimal('preco_venda');
            $table->integer('quantidade')->default(0);
            $table->unsignedInteger('estoque_minimo');
            $table->timestamps('validade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
