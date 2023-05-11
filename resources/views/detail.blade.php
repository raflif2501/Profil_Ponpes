<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PONPES MATHALI'UL ANWAR</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/dist/img/logo.png">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('user') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('user') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('user') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('user') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('user') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('user') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('user') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('user') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('user') }}/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="/">Mathali'ul Anwar</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="{{ asset('user') }}/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="#visimisi">Visi Misi</a></li>
                    <li><a class="nav-link scrollto" href="#pendiri">Pendiri</a></li>
                    <li><a class="nav-link scrollto" href="#sejarah">Sejarah</a></li>
                    <li><a class="nav-link   scrollto" href="#pendidikan">Pendidikan</a></li>
                    <li><a class="nav-link scrollto" href="#struktur">Struktur</a></li>
                    <li><a class="nav-link scrollto" href="#berita">Berita</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li>Detail Berita</li>
                </ol>
                <h2>Detail Berita</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Detail Berita Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <center>
                            <h3>{{ $data1->judul }}</h3>
                        </center>
                        <hr>
                        <div class="table-responsive">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('image') }}/{{ $data1->gambar }}" class="d-block w-100"
                                            alt="{{ $data1->judul }}">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image1') }}/{{ $data1->gambar1 }}" class="d-block w-100"
                                            alt="{{ $data1->judul }}">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image2') }}/{{ $data1->gambar2 }}" class="d-block w-100"
                                            alt="{{ $data1->judul }}">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image3') }}/{{ $data1->gambar3 }}" class="d-block w-100"
                                            alt="{{ $data1->judul }}">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image4') }}/{{ $data1->gambar4 }}" class="d-block w-100"
                                            alt="{{ $data1->judul }}">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image5') }}/{{ $data1->gambar5 }}" class="d-block w-100"
                                            alt="{{ $data1->judul }}">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image6') }}/{{ $data1->gambar6 }}" class="d-block w-100"
                                            alt="{{ $data1->judul }}">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image7') }}/{{ $data1->gambar7 }}" class="d-block w-100"
                                            alt="{{ $data1->judul }}">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image8') }}/{{ $data1->gambar8 }}" class="d-block w-100"
                                            alt="{{ $data1->judul }}">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image9') }}/{{ $data1->gambar9 }}" class="d-block w-100"
                                            alt="{{ $data1->judul }}">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image10') }}/{{ $data1->gambar10 }}"
                                            class="d-block w-100" alt="{{ $data1->judul }}">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="portfolio-description">
                            &emsp;&emsp;&emsp;{{ $data1->isi }}
                        </div>
                        <div class="portfolio-description">
                            &emsp;&emsp;&emsp;{{ $data1->isi1 }}
                        </div>
                        <div class="portfolio-description">
                            &emsp;&emsp;&emsp;{{ $data1->isi2 }}
                        </div>
                        <div class="portfolio-description">
                            &emsp;&emsp;&emsp;{{ $data1->isi3 }}
                        </div>
                        <div class="portfolio-description">
                            &emsp;&emsp;&emsp;{{ $data1->isi4 }}
                        </div>
                        <div class="portfolio-description">
                            &emsp;&emsp;&emsp;{{ $data1->isi5 }}
                        </div>
                    </div>
                    <span>{{ $data1->tanggal }}</span>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                <strong><span>Pondok Pesantren</span></strong>
            </div>
            <div class="credits">
                <strong>Mathali'ul Anwar</strong>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('user') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('user') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('user') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('user') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('user') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('user') }}/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('user') }}/js/main.js"></script>

</body>

</html>
