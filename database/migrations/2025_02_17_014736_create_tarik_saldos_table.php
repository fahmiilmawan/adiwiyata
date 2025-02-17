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
        Schema::create('tarik_saldos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kas_kelas_id');
            $table->foreign('kas_kelas_id')->references('id')->on('kas_kelas')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->double('debit');
            $table->string('transaction_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarik_saldos');
    }
};
