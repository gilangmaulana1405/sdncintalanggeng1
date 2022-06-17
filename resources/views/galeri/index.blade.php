@extends('layouts.main2')
@section('content')

 <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2 class="mt-4">Galeri</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->
    
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6">
              <img src="{{ asset('img/course-1.jpg') }}" class="img-fluid" alt="...">
          </div>
          <div class="col-lg-4 col-md-6">
              <img src="{{ asset('img/course-2.jpg') }}" class="img-fluid" alt="...">
          </div>
          <div class="col-lg-4 col-md-6">
              <img src="{{ asset('img/course-3.jpg') }}" class="img-fluid" alt="...">
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
              <img src="{{ asset('img/course-2.jpg') }}" class="img-fluid" alt="...">
          </div>
           <div class="col-lg-4 col-md-6 mt-3">
              <img src="{{ asset('img/course-3.jpg') }}" class="img-fluid" alt="...">
          </div>
           <div class="col-lg-4 col-md-6 mt-3">
              <img src="{{ asset('img/course-1.jpg') }}" class="img-fluid" alt="...">
          </div>
        </div>

      </div>
    </section>
@endsection