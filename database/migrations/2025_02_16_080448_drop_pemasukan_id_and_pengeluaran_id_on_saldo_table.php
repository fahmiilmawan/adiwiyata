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
        Schema::table('saldos', function (Blueprint $table) {
            $table->dropForeign('saldos_pemasukan_id_foreign');
            $table->dropColumn('pemasukan_id');
            $table->dropForeign('saldos_pengeluaran_id_foreign');
            $table->dropColumn('pengeluaran_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('saldos', function (Blueprint $table) {
            $table->unsignedBigInteger('pemasukan_id')->nullable();
            $table->foreign('pemasukan_id')->references('id')->on('pemasukans')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->unsignedBigInteger('pengeluaran_id')->nullable();
            $table->foreign('pengeluaran_id')->references('id')->on('laporan_pengeluaran')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }
};
