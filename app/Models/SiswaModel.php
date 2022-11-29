<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    use HasFactory;
    protected $table = 'tb_siswa';

    protected $fillable = ['txtNama_siswa', 'txtKelas', 'txtJenis_kelamin', 'txtTempatLahir', 'txtTanggalLahir', 'txtAgama', 'txtKewarganegaraan', 'intAnakKe', 'intJumlahSaudara', 'txtBahasa', 'intNo_telp', 'txtAlamat'];
}
