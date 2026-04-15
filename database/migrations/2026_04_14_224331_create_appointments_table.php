<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();

            // Relacionamento com clientes
            $table->foreignId('client_id')
                ->constrained('clients')
                ->cascadeOnDelete();

            // Dados do agendamento
            $table->dateTime('appointment_date');
            $table->string('service')->nullable(); // tipo de serviço
            $table->string('status')->default('pendente'); 
            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};