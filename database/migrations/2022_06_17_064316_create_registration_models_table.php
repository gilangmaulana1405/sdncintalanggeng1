<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_registration', function (Blueprint $table) {
            $table->id();
            $table->string('txtNama_lengkap');
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
        Schema::dropIfExists('registration_models');
    }
}
