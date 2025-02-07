<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Custom Css  -->
  <link rel="stylesheet" href="{{ asset('page/assets/style.css') }}">

  <link rel="shortcut icon" href="{{ asset('admin/assets/images/logo.png') }}" />

  <title>Sobat Sehat | Home</title>
</head>

<body>

  <!-- Navbar Start -->
  <div class="d-block px-2 py-2 text-center" style="background-color: #530986;">
  </div>
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: #D2DBF8;">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="{{ asset('page/assets/logoSS.png') }}" alt="Logo" style="height: 3.6rem;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto" style="font-weight: 700">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/berita')}}">Berita</a>
        </li>
          @guest
          <li class="nav-item">
            <i></i>
            <a href="{{url('/login')}}" class="btn text-light" style="background-color: #530986;">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-person-fill pe-1" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
              </svg>
              <span>Login / Daftar</span>
            </a>
            </li>
            @if (Route::has('register'))
                <li><a href="{{ url('/register') }}">Register</a></li>
            @endif
            @else
            @if (Auth::user()->role == 'admin' || Auth::user()->role == 'kontributor')
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/dashboard')}}">Dashboard</a>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="{{url('/lokasi')}}">Lokasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{url('/events')}}">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/home') }}" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-person-fill pe-1" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
              </svg> {{ Auth::user()->name }}
                </a>
            </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Hero Section Start -->
  <section class="jumbotron d-flex flex-column" style="padding-left: 5rem;">
    <p class="display-4 fw-bold text-light text-uppercase" style="padding-top: 10rem; font-size: 70px">Olahraga <br> Lebih Mudah</p>
    <p class="lead fw-lighter fs-6 text-light fw-bold">"Cari, Temukan, Dan Rasakan Serunya Kegiatan Olahraga <br> Bersama
      SobatSehat"</p>
      <div class="col-lg-3">
      <a href="{{url('/lokasi')}}" class="btn text-light fw-bold shadow-sm rounded" style="background-color: #530986; height:50px; padding-top:13px; width:350px">PILIH LOKASI SEKARANG</a>
    </div>
  </section>
  <div class="d-block px-4 py-2 text-center" style="background-color: #530986; height: 3rem;">
  </div>
  <!-- Hero Section End -->

  <!-- About Section Start -->
  <section class="container pt-5 pb-5">
    <div class="row">

            <div class="col-5">
                <img src="{{ asset('page/assets/foto2.png') }}" alt="foto2" class="card-img">
            </div>
            <div class="col-7 d-flex align-items-start flex-column">
                <h1 class="fw-bold" style="color: #530986;">Apa Itu Sobat Sehat ?</h1>
                <p class="fs-5">Aplikasi ini dibuat untuk mempermudah dalam mengetahui informasi-informasi terkait seputar acara
                olahraga rekreasi dan membantu, SobatSehat menjadi aplikasi yang lebih komprehensif dan relevan bagi
                pengguna/user yang sedang mencari informasi terkait seputar acara olahraga rekreasi, serta mampu meningkatkan
                aktivitas dalam pencarian informasi yang lebih mudah untuk dijangkau dan dicari.</p>
                <a href="#" class="fst-italic ms-auto" style="color: #530986;">Baca Selengkapnya</a>
            </div>

    </div>
  </section>
  <!-- About Section End -->

  <!-- Category Section Start -->
  <section class="container-fluid pb-5" style="background-color: #D2DBF8;">
    <div class="container">
      <div class="d-flex justify-content-between pt-4">
        <h1 style="color: #530986;" class="fw-bold">Lokasi</h1>
        <p style="color: #530986;" class="fs-5 pt-2 fw-bold"> Tampilkan Semua ></p>
      </div>
      <hr style="border: black 1px solid;">
      <div class="row">
        @foreach ($locations as $location)
        <div class="col-4 p-3">
            <div class="item">
                <div class="row justify-content-center p-3 pt-4 pb-4 shadow bg-body rounded">
                    <div class="image-wrapper">
                        <img src="{{ $location->gambar }}" alt="foto">
                    </div>
                    <div class="tittle">
                      <p class="text-uppercase fs-3">{{ $location->nama_lokasi }}</p>
                    </div>
                </div>
            </div>
        </div>  
        @endforeach
      </div>
    </div>
  </section>
  <!-- Category Section End -->

  <!-- Event Section Start -->
  <section class="container-fluid pb-5">
    <div class="container">
      <div class="d-flex justify-content-between pt-4">
        <h1 style="color: #530986;" class="fw-bold">Event</h1>
        <p class="fs-5 pt-2 fw-bold"> Tampilkan Semua ></p>
      </div>
      <hr style="border: black 1px solid;">
      <div class="row">
        @foreach ($events as $event)
          <div class="col-4 p-3">
              <div class="row justify-content-center p-3 pt-4 pb-4 shadow bg-body rounded">
                <div class="image-wrapper">
                  <img src={{ $event->gambar }} alt="foto">
                </div>
                <div class="tittle">
                  <p class="fs-6 fw-bold p-3 pb-1">{{ $event->nama_event }}</p>
                </div>
                  <a href="{{ url('/detailevent', $event->id) }}" class="btn text-light shadow-sm rounded" style="background-color: #530986;">Lihat Detail</a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- Event Section End -->

  <!-- Footer Section Start -->
  <div class="container-fluid" style="background-color: #D2DBF8; border-bottom: #530986 4rem solid;">
    <div class="container" id="footer">
      <footer class="row row-cols-5 py-5 border-top" >
        <div class="col">
          <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
            <img src="{{ asset('page/assets/logoSS.png') }}" alt="Logo" style="height: 2.8rem;">
          </a>
          <p class="fs-6 text-muted"> Berlokasi di Depok, Indonesia, kami fokus pada desain UI/UX dan pengembangan situs
            web. Bergabunglah dengan kami untuk pengalaman sehat dan aktif! 💪🌐 #SobatSehatStudio</p>
          <p class="text-muted fw-bold">© Sobat Sehat</p>
        </div>

        <div class="col">
          <h5 style="color: #3A86FF;" class="fs-6 fw-bold pt-2 pb-4">Get In Touch</h5>
          <ul class="nav flex-column">

            <li class="nav-item mb-2">
              <div class="col d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-geo-alt" viewBox="0 0 16 16" style="color: #3A86FF;">
                    <path
                      d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                  </svg>
                </a>
                <span class="text-muted fs-6"> JRPV+QH5, Jl. Setu Indah No.116, Tugu, Kec. Cimanggis, Kota Depok, Jawa
                  Barat 16451</span>
              </div>
            </li>

            <li class="nav-item mb-2">
              <div class="col d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-envelope" viewBox="0 0 16 16" style="color: #3A86FF;">
                    <path
                      d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                  </svg>
                </a>
                <span class="text-muted fs-6">sobatsehat@gmail.com</span>
              </div>
            </li>

            <li class="nav-item mb-2">
              <div class="col d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-telephone" viewBox="0 0 16 16" style="color: #3A86FF;">
                    <path
                      d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                  </svg>
                </a>
                <span class="text-muted fs-6">+62 857 888 888 </span>
              </div>
            </li>

          </ul>
        </div>

        <!-- Service Footer Start -->
        <div class="col">
          <h5 class="fs-6 fw-bold pt-2 pb-4" style="color: #3A86FF;">Service</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Illustration</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Mobile Design</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Motion Graphic</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Web Design</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Development</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">SEO</a></li>
          </ul>
        </div>
        <!-- Service Footer End -->

        <!-- Company Footer Start -->
        <div class="col">
          <h5 class="fs-6 fw-bold pt-2 pb-4" style="color: #3A86FF;">Company</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Service</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Our Team</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Portofolio</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Blog</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact Us</a></li>
          </ul>
        </div>
        <!-- Company Footer End -->

        <!-- Social Media Footer -->
        <div class="col">
          <div class="d-flex justify-content-center">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none p-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-twitter-x"
                viewBox="0 0 16 16" style="color: #3A86FF;">
                <path
                  d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
              </svg>
            </a>
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none p-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-facebook"
                viewBox="0 0 16 16" style="color: #3A86FF;">
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
              </svg>
            </a>
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none p-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-instagram"
                viewBox="0 0 16 16" style="color: #3A86FF;">
                <path
                  d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
              </svg>
            </a>
          </div>

          <p class="fs-6 text-muted">Ikuti kami di media sosial untuk informasi menarik, tips kesehatan, dan keseruan
            bersama Sobat Sehat. Jangan lewatkan setiap momen menyegarkan kehidupan Anda. 💚 #SobatSehat #GerakBersama
          </p>
        </div>
        <!-- Social Media Footer -->
      </footer>
    </div>
  </div>
  <!-- Footer Section End -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  

</body>

</html>
