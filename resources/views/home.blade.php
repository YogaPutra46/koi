    @extends('layout.main')

    @section('container')
    <div class="banner">
        <video autoplay muted loop>
            <source src="{{ asset('background/Bg.mp4')}}" type="video/mp4">
        </video>
    </div>



    <div class="nama">
        <h1>KOI KINGDOM</h1>
    </div>


   <!-- Footer -->
<footer class="text-center text-lg-start text-light ">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Sosial Media:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://web.facebook.com/prayoga.prayoga.3133" class="me-4 link-secondary">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://twitter.com/YogaHendra09" class="me-4 link-secondary">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://www.instagram.com/prayoga4367/" class="me-4 link-secondary">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Koi Kingdom
          </h6>
          <p>
            Media informasi berbagai jenis ikan koi  
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Teknologi
          </h6>
          <p>
            <a href="#!" class="text-reset">Html</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Css</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Team
          </h6>
          <p>
            I Kadek Prayoga Putra Mahendra 
          </p>
          <p>
            I Made Githa Ary Senthana
          </p>
          <p>
            I Made Ananta Wijaya
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> Jl. Tukad Pakerisan No.97, Panjer, Denpasar Selatan, Kota Denpasar, Bali 80225</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            koikingdom.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> +6281 237 877 620</p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> +6287 816 992 590 </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> +6287 816 992 590 </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="">Koi Kingdom</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

    @endsection