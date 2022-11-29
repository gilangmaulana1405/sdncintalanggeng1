<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_guru', function (Blueprint $table) {
            $table->id();
            $table->string('txtNama_guru');
            $table->string('txtJabatan');
            $table->enum('txtKategori_jabatan', ['pns', 'honorer']);
            $table->enum('txtJenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('txtAgama');
            $table->text('txtAlamat');
            $table->text('intNo_telp');
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
        Schema::dropIfExists('guru_models');
    }
}
