<?php

namespace App\Http\Controllers;

use App\Models\GuruModel;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $dataGuru = GuruModel::all();
        return view('guru.index', [
            'title' => 'Guru',
            'dataGuru' => $dataGuru
        ]);
    }
}
