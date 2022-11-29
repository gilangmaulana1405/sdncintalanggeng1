<?php

namespace App\Http\Controllers;

use App\Models\GuruModel;
use App\Models\SiswaModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dataGuru = GuruModel::get()->count();
        $dataSiswa = SiswaModel::all()->count();
        return view('home.index', [
            'title' => 'Home',
            'dataGuru' => $dataGuru,
            'dataSiswa' => $dataSiswa
        ]);
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'txtNama_lengkap' => 'required|max:255',
            'txtTempatLahir' => 'required',
            'txtTang' => 'required',
            'txtTempatLahir' => 'required',
        ]);
    }
}
