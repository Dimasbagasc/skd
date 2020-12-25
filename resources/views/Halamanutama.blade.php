@include ('layout.main')

@section ('content')

<body>

  @include('layout.nav')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>DBC Crypt</span></h2>
          <p class="animate__animated fanimate__adeInUp">M3118027 TIB</p>
          <a href="#services" class="btn-get-started animate__animated animate__fadeInUp scrolltop">Get Started</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Caesar Cipher</h2>
          <p class="animate__animated animate__fadeInUp">Caesar Cipher adalah algoritma kriptografi klasik yang dahulu digunakan oleh Julius Caesar untuk mengirimkan pesan rahasia atau taktik militer. Caesar Chiper disebut juga Sandi Geser sebab huruf-huruf dalam plainteks digantikan oleh huruf lainnya dalam posisi tertentu dalam susunan alfabet.</p>
          <a href="/caesar" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Vigenere Cipher</h2>
          <p class="animate__animated animate__fadeInUp">Sandi Vigenère adalah metode menyandikan teks alfabet dengan menggunakan deretan sandi Caesar berdasarkan huruf-huruf pada kata kunci. Sandi Vigenère merupakan bentuk sederhana dari sandi substitusi polialfabetik. Kelebihan sandi ini dibanding sandi Caesar dan sandi monoalfabetik lainnya adalah sandi ini tidak begitu rentan terhadap metode pemecahan sandi yang disebut analisis frekuensi.</p>
          <a href="/vigenere" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Rc4 Cipher</h2>
          <p class="animate__animated animate__fadeInUp">Algoritma RC4 (Rivest Code 4) merupakan salah satu algoritma kriptografi modern yang tergolong ke dalam Algoritma Simetris. Algoritma simetris adalah algoritma kriptografi yang memakai kunci sama saat proses enkripsi (proses penyandian pesan) dan proses dekripsi (proses pengembalian pesan asli).</p>
          <a href="/rc4" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
        </div>
      </div>



      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Services</h2>
          <p>Choose or pick one of cryptography method</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="las la-basketball-ball" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="/caesar">Caesar Cipher</a></h4>
              <p class="description">Teknik kriptografi yang dilakukan dengan cara mensubtitusi setiap abjad dari pesan yang akan dienkripsi melalui pergeseran susunan</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="las la-book" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="/vigenere">Vigenere Cipher</a></h4>
              <p class="description">Teknik kriptografi dengan menggunakan deretan sandi Caesar berdasarkan huruf-huruf pada kata kunci</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="las la-file-alt" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="/rc4">RC4 Cipher</a></h4>
              <p class="description">Teknik kriptografi yang dapat digunakan untuk melakukan enkripsi data sehingga data asli hanya dapat dibaca oleh seseorang yang memiliki kunci enkripsi tersebut</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->


  
  @include('layout.footer')

</body>


</html>