<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            // relacionamento com clientes
            $table->foreignId('client_id')
                ->constrained('clients')
                ->cascadeOnDelete();

            // dados do pagamento
            $table->decimal('amount', 10, 2);
            $table->string('status')->default('pendente'); // pago, pendente, cancelado
            $table->string('method')->nullable(); // pix, dinheiro, cartão

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};