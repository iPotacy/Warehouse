<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Homepage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('section/assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('section/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('section/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('section/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('section/assets/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{ asset('section/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('section/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{ asset('section/assets/css/variables.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('section/assets/css/main.css')}}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="{{ url('/')}}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>WAREHOUSE<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>

            <li><a class="nav-link scrollto" href="#hero-animated">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav><!-- .navbar -->

        <a class="btn-getstarted scrollto" href="{{ url('/login') }}">Login</a>

        </div>
    </header><!-- End Header -->

    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
          <img src="{{ asset('section/assets/img/section.png')}}" class="img-fluid animated">
          <h2>Welcome to <span>Warehouse Management System</span></h2>
          <div class="d-flex">
            <a href="{{ url('/login') }}" class="btn-get-started scrollto">Login</a>
          </div>
        </div>
    </section>

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
              <div class="section-header">
                <h2>About Us</h2>
                <p >Website Warehouse Management System kami didesain untuk secara signifikan menyederhanakan tugas-tugas pengelolaan stok barang, dengan tujuan utama meningkatkan efisiensi operasional dan akurasi data di setiap tahap rantai pasokan perusahaan Anda. Dengan fitur-fitur yang terintegrasi, kami memastikan bahwa proses pengelolaan pergudangan tidak lagi menjadi beban yang rumit, melainkan menjadi suatu langkah yang mudah diakses dan dikelola.

                    Antarmuka yang kami sediakan dirancang dengan intuitif, memungkinkan pengguna untuk dengan cepat dan mudah memahami navigasi serta fungsionalitas aplikasi. Fitur pembaruan otomatis menjadikan informasi stok barang selalu terkini, meminimalkan risiko kesalahan dan memberikan kepercayaan bahwa setiap transaksi dan pergerakan barang tercatat dengan akurat.
                    
                    Melalui analisis data yang mendalam, Warehouse Management System kami bukan hanya menyediakan informasi tentang status inventaris, tetapi juga memberikan wawasan yang berharga untuk pengambilan keputusan. Dengan pemahaman yang lebih baik tentang tren dan pola dalam rantai pasokan, perusahaan Anda dapat membuat keputusan yang lebih cerdas, lebih cepat, dan lebih tepat sasaran.
                    
                    Lebih dari sekadar alat pengelolaan gudang, aplikasi kami berfungsi sebagai mitra strategis dalam pertumbuhan bisnis Anda. Dengan memberdayakan tim Anda untuk mengakses informasi yang relevan dan terperinci, kami membantu menciptakan lingkungan di mana inovasi dan pengembangan dapat berbunga, memungkinkan fokus yang lebih besar pada aspek-aspek penting dari pertumbuhan bisnis Anda.
                                
                </p>
              </div>
            </div>

                <!-- ======= Featured Services Section ======= -->
                <section id="featured-services" class="featured-services">
                    <div class="container">
            
                    <div class="row gy-4">
            
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-activity icon"></i></div>
                            <h4><a href="" class="stretched-link">Barang Selalu Up-to-Date</a></h4>
                            <p>Website kami memberikan informasi stok barang selalu update</p>
                        </div>
                        </div><!-- End Service Item -->
            
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                            <h4><a href="" class="stretched-link">Check Barang</a></h4>
                            <p>Cepat dan mudah memeriksa status dan ketersediaan suatu barang.</p>
                        </div>
                        </div><!-- End Service Item -->
            
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                            <h4><a href="" class="stretched-link">Filter Berdasarkan Tanggal</a></h4>
                            <p>Website kami dilengkapi dengan kemampuan filter yang dapat disesuaikan berdasarkan tanggal</p>
                        </div>
                        </div><!-- End Service Item -->
            
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                            <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                        </div><!-- End Service Item -->
            
                    </div>
            
                    </div>
                </section><!-- End Featured Services Section -->

        </section><!-- End About Section -->

        

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('section/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('section/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('section/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('section/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('section/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('section/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('section/assets/js/main.js')}}"></script>

</body>

</html>