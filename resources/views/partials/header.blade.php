  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h4 class="logo me-auto"><a href="{{ route('home') }}">Cintalanggeng1</a></h4> 
      
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
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
<div class="modal fade" id="modalRegistration" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>

  