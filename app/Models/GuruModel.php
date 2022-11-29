<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    use HasFactory;
    protected $table = 'tb_guru';

    protected $fillable = ['txtNama_guru', 'txtJabatan', 'txtKategori_jabatan', 'txtJenis_kelamin', 'txtAgama', 'txtAlamat', 'intNo_telp'];
    
}
