$(document).ready(function () {
    var table = $('#datatable_catatanbully').DataTable();


    // table.on('click', '.openModalEditCatatanBully', function () {
    //     // $('#modalEditCatatanBully').modal('show');

    //     var id = $(this).data('id')
    //     let nama_siswa = $(this).data('txtNama_siswa')
    //     var url = "/admin/catatanbully"

    //     $.get(url, function (data) {
    //         $('#id').val(data.id);
    //         $('[name="dateTimeHari_tanggal"]').val(data.dateTimeHari_tanggal);
    //         $('[name="txtNama_siswa"]').val(nama_siswa);
    //         $('[name="txtKelas"]').val(data.txtKelas);
    //         $('[name="txtPelanggaran"]').val(data.txtPelanggaran);
    //         $('[name="txtTindak_lanjut"]').val(data.txtTindak_lanjut);
    //         $('[name="txtCatatan"]').val(data.txtCatatan);
    //         $('#modalEditCatatanBully').modal('show');
    //     })
    // })

})

$(document).on('click', '.editModalCatatanBully', function (e) {
    let id = $(this).data('id');
    let dateTimeHari_tanggal = $(this).data('hari_tanggal');
    let txtNama_siswa = $(this).data('nama_siswa');
    let txtKelas = $(this).data('kelas');
    let txtPelanggaran = $(this).data('pelanggaran');
    let txtTindak_lanjut = $(this).data('tindak_lanjut');
    let txtCatatan = $(this).data('catatan');

    // alert(id)
    // alert(dateTimeHari_tanggal)
    // alert(txtNama_siswa)
    // alert(txtKelas)
    // alert(txtPelanggaran)
    // alert(txtTindak_lanjut)
    // alert(txtCatatan)

    $('#modalEditCatatanBully').modal('show');
    $('#id').val(id)
    $('#dateTimeHari_tanggal').val(dateTimeHari_tanggal)
    $('#txtNama_siswa').val(txtNama_siswa)
    $('#txtKelas').val(txtKelas)
    $('#txtPelanggaran').val(txtPelanggaran)
    $('#txtTindak_lanjut').val(txtTindak_lanjut)
    $('#txtCatatan').val(txtCatatan)
})
