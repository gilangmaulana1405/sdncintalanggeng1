<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanBully extends Model
{
    protected $table = 'catatan_bullies';
    protected $fillable = ['dateTimeHari_tanggal', 'txtNama_siswa', 'txtKelas', 'txtPelanggaran', 'txtTindak_lanjut', 'txtCatatan'];
    use HasFactory;
}
