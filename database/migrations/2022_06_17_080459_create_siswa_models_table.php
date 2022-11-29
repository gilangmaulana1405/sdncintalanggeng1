<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('txtNama_siswa');
            $table->enum('txtKelas', ['Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas 4', 'Kelas 5', 'Kelas 6']);
            $table->enum('txtJenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('txtTempatLahir');
            $table->string('txtTanggalLahir');
            $table->string('txtAgama');
            $table->string('txtKewarganegaraan');
            $table->integer('intAnakKe');
            $table->integer('intJumlahSaudara');
            $table->string('txtBahasa');
            $table->string('intNo_telp');
            $table->text('txtAlamat');  
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
        Schema::dropIfExists('siswa_models');
    }
}
