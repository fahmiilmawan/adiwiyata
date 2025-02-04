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
        Schema::table('tanaman', function (Blueprint $table) {
            $table->unsignedBigInteger('taman_id')->after('id');
            $table->foreign('taman_id')->on('taman')->references('id')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('nama_latin')->after('nama_tanaman');
            $table->string('gambar')->after('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tanaman', function (Blueprint $table) {
            $table->dropForeign('tanaman_taman_id_foreign');
            $table->dropColumn('taman_id');
            $table->dropColumn('nama_latin');
            $table->dropColumn('gambar');
        });
    }
};
