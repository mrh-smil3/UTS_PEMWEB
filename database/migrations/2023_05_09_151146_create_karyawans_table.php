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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id()->autoIncrement()->from(2200);
            $table->string('nama');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->unsignedInteger('jabatan_id');
            $table->timestamps();
        });
        Schema::table('karyawan', function (Blueprint $table) {
            $table->foreign('jabatan_id')->references('id')->on('jabatan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
