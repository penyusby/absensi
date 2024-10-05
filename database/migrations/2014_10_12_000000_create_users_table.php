<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_masuk');
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->text('alamat');
            $table->string('kota');
            $table->string('no_telp');
            $table->string('jabatan')->nullable();
            $table->binary('image_pegawai')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
