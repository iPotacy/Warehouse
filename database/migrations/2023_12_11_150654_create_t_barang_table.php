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
        Schema::create('t_barang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('m_barang_id')->constrained('m_barang');
            $table->foreignId('m_user_id')->constrained('users');
            $table->foreignId('m_transaction_id')->constrained('m_transaction');
            $table->integer('quantity');
            $table->text('description');
            $table->string('receiver');
            $table->foreignId('m_status_id')->constrained('m_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_barang');
    }
};
