<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanBulliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan_bullies', function (Blueprint $table) {
            $table->id();
            $table->date('dateTimeHari_tanggal');
            $table->string('txtNama_siswa');
            $table->enum('txtKelas', ['Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas 4', 'Kelas 5', 'Kelas 6']);
            $table->string('txtPelanggaran');
            $table->text('txtTindak_lanjut');
            $table->text('txtCatatan');
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
        Schema::dropIfExists('catatan_bullies');
    }
}
