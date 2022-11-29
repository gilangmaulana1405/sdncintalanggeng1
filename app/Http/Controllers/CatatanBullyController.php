<?php

namespace App\Http\Controllers;

use App\Models\CatatanBully;
use Illuminate\Http\Request;

class CatatanBullyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CatatanBully::orderBy('created_at', 'desc')->get();
        return view('admin.catatanbully.index', [
            'catatanbullys' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dateTimeHari_tanggal' => 'required',
            'txtNama_siswa' => 'required|max:255',
            'txtPelanggaran' => 'required',
            'txtTindak_lanjut' => 'required',
            'txtCatatan' => 'required',
        ]);

        $catatanbully = new CatatanBully();
        $catatanbully->dateTimeHari_tanggal = $request->input('dateTimeHari_tanggal');
        $catatanbully->txtNama_siswa = $request->input('txtNama_siswa');
        $catatanbully->txtKelas = $request->input('txtKelas');
        $catatanbully->txtPelanggaran = $request->input('txtPelanggaran');
        $catatanbully->txtTindak_lanjut = $request->input('txtTindak_lanjut');
        $catatanbully->txtCatatan = $request->input('txtCatatan');

        $catatanbully->save();
        return redirect('/admin/catatanbully')->with('message', "Data {$request['txtNama_siswa']} berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $catatanbully = CatatanBully::find($id);
        // return response()->json($catatanbully);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $catatanbully = CatatanBully::find($id);
        $catatanbully->dateTimeHari_tanggal = $request->input('dateTimeHari_tanggal');
        $catatanbully->txtNama_siswa = $request->input('txtNama_siswa');
        $catatanbully->txtKelas = $request->input('txtKelas');
        $catatanbully->txtPelanggaran = $request->input('txtPelanggaran');
        $catatanbully->txtTindak_lanjut = $request->input('txtTindak_lanjut');
        $catatanbully->txtCatatan = $request->input('txtCatatan');

        $catatanbully->update();
        return redirect('/admin/catatanbully')->with('message', "Data berhasil diubah!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = CatatanBully::find($id);
        $data->delete();

        return redirect('/admin/catatanbully')->with('message', "Data {$data['txtNama_siswa']} berhasil dihapus!");
    }
}
