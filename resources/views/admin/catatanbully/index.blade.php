@extends('layouts.admin')
@section('title', 'Admin')
@section('content')

<main class="col-12">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Catatan Bully</h1>
        <a data-bs-toggle="modal" data-bs-target="#modalAddCatatanBully" class="btn btn-primary" style="color:white;">Tambah</a>
    </div>

    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> {{ session()->get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="table-responsive">
        <table id="datatable_catatanbully" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hari Tanggal</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Pelanggaran</th>
                    <th scope="col">Tindak Lanjut</th>
                    <th scope="col">Catatan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @forelse($catatanbullys as $catatanbully)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $catatanbully->dateTimeHari_tanggal }}</td>
                    <td>{{ $catatanbully->txtNama_siswa }}</td>
                    <td>{{ $catatanbully->txtKelas }}</td>
                    <td>{{ $catatanbully->txtPelanggaran }}</td>
                    <td>{{ $catatanbully->txtTindak_lanjut }}</td>
                    <td>{{ $catatanbully->txtCatatan }}</td>
                    <td>
                        <a href="#" data-id="{{ $catatanbully->id }}" data-hari_tanggal="{{ $catatanbully->dateTimeHari_tanggal}}" data-nama_siswa="{{ $catatanbully->txtNama_siswa}}" data-kelas="{{ $catatanbully->txtKelas}}" data-pelanggaran="{{ $catatanbully->txtPelanggaran}}" data-tindak_lanjut="{{ $catatanbully->txtTindak_lanjut}}" data-catatan="{{ $catatanbully->txtCatatan}}" class="btn btn-warning editModalCatatanBully" style="color:white;">Edit</a>
                        <form action="/admin/catatanbully/{{ $catatanbully->id }}" method="post" class="py-2">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <td colspan="10">Tidak ada data ..</td>
                @endforelse
            </tbody>
        </table>
    </div>
</main>


{{-- add --}}
<form action="/admin/catatanbully" method="post">
    @csrf
    <div class="modal fade" id="modalAddCatatanBully" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Catatan Bully</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" name="dateTimeHari_tanggal" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Hari Tanggal</label>
                        @error('dateTimeHari_tanggal')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="txtNama_siswa" placeholder="Nama Siswa" required>
                        <label for="floatingPassword">Nama Siswa</label>
                        @error('txtNama_siswa')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="txtKelas" id="floatingSelectGrid">
                            <option value="1">Kelas 1</option>
                            <option value="2">Kelas 2</option>
                            <option value="3">Kelas 3</option>
                            <option value="4">Kelas 4</option>
                            <option value="5">Kelas 5</option>
                            <option value="6">Kelas 6</option>
                        </select>
                        <label for="floatingSelectGrid">Kelas</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="txtPelanggaran" placeholder="Nama Siswa" required>
                        <label for="floatingPassword">Pelanggaran</label>
                        @error('txtPelanggaran')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="txtTindak_lanjut" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                        <label for="floatingTextarea2">Tindak Lanjut</label>
                        @error('txtTindak_lanjut')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="txtCatatan" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                        <label for="floatingTextarea2">Catatan</label>
                        @error('txtCatatan')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" style="color:white;" data-bs-dismiss="modal">Close</button>
                    <button type="reset" class="btn btn-info" style="color:white;">Reset</button>
                    <button type="submit" class="btn btn-primary" style="color:white;">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</form>

{{-- edit --}}
@foreach($catatanbullys as $catatanbully)
<form action="/admin/catatanbully/{{ $catatanbully->id }}" method="post">
    @method('put')
    @csrf

    <div class="modal fade" id="modalEditCatatanBully" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Catatan Bully</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <input type="hidden" id="id" name="id">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" name="dateTimeHari_tanggal" id="dateTimeHari_tanggal" placeholder="name@example.com">
                        <label for="floatingInput">Hari Tanggal</label>
                        @error('dateTimeHari_tanggal')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="txtNama_siswa" name="txtNama_siswa" placeholder="Nama Siswa">
                        <label for="floatingPassword">Nama Siswa</label>
                        @error('txtNama_siswa')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="txtKelas" id="txtKelas">
                            <option value="Kelas 1">Kelas 1</option>
                            <option value="Kelas 2">Kelas 2</option>
                            <option value="Kelas 3">Kelas 3</option>
                            <option value="Kelas 4">Kelas 4</option>
                            <option value="Kelas 5">Kelas 5</option>
                            <option value="Kelas 6">Kelas 6</option>
                        </select>
                        <label for="floatingSelectGrid">Kelas</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="txtPelanggaran" name="txtPelanggaran" placeholder="Nama Siswa">
                        <label for="floatingPassword">Pelanggaran</label>
                        @error('txtPelanggaran')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="txtTindak_lanjut" id="txtTindak_lanjut" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Tindak Lanjut</label>
                        @error('txtTindak_lanjut')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="txtCatatan" id="txtCatatan" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Catatan</label>
                        @error('txtCatatan')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" style="color:white;" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" style="color:white;">Edit</button>
                </div>
            </div>

        </div>
    </div>
</form>
@endforeach

@endsection
