  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-end">

      {{-- <h4 class="logo me-auto"><a href="{{ route('home') }}">Cintalanggeng1</a></h4>  --}}
      
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{ route('home') }}" class="me-auto"><img src="{{ asset('img/logo2.png') }}" width="140px" height="1200px" class="img-fluid"></a>

      <nav id="navbar" class="navbar navbar-end order-last order-lg-0">
        <ul>
          <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
          <li><a class="{{ Request::is('galeri') ? 'active' : '' }}" href="{{ route('galeri') }}">Galeri</a></li>
          <li><a class="{{ Request::is('kelas') ? 'active' : '' }}" href="{{ route('kelas') }}">Kelas</a></li>
          <li><a class="{{ Request::is('guru') ? 'active' : '' }}" href="{{ route('guru') }}">Guru</a></li>
          <li><a class="{{ Request::is('acara') ? 'active' : '' }}" href="{{ route('acara') }}">Acara</a></li>  
          <li><a class="{{ Request::is('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a data-bs-toggle="modal" data-bs-target="#modalRegistration" class="get-started-btn">Registration</a>

    </div>
  </header><!-- End Header -->

  <!-- Modal Registration -->
<form> 
<div class="modal fade" id="modalRegistration" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="nama lengkap" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="nama lengkap" class="form-label">Jenis Kelamin</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="nama lengkap" class="form-label">Tempat Lahir</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="nama lengkap" class="form-label">Tanggal Lahir</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="nama lengkap" class="form-label">Agama</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="nama lengkap" class="form-label">Kewarganegaraan</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="nama lengkap" class="form-label">Anak ke</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="nama lengkap" class="form-label">Jumlah Saudara</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="nama lengkap" class="form-label">Bahasa Sehari-hari</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="nama lengkap" class="form-label">No Telpon</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="nama lengkap" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="5" required></textarea>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
  