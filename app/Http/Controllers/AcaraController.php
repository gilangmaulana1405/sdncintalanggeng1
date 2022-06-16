<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcaraController extends Controller
{
    public function index()
    {
        return view('acara.index', [
            'title' => 'Acara'
        ]);
    }
}
