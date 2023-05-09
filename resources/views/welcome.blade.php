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

    <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Pondok Pesantren</h1>
                    <h1>Mathali'ul Anwar</h1>
                    {{-- <h2>Jl. Kartini VI/09 Pangarangan Sumenep </h2> --}}
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('pendaftaran.index') }}" class="btn-get-started scrollto">Pendaftaran Santri
                            PP Mathali'ul Anwar</a>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('admin') }}/dist/img/logo.png" class="img-fluid animated" alt=""
                        width="360px" height="auto" float="right">
                </div>
            </div>
            <br>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Cliens Section ======= -->
        <section id="cliens" class="cliens section-bg">
            <div class="container">
                {{-- <marquee scrollamount="10">PONDOK PESANTREN MATHALI'UL ANWAR Jl. Kartini VI/09 Pangarangan Sumenep
                </marquee> --}}
                <br><br><br>
            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="visimisi" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Visi</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-12">
                        <ul>
                            <li><i class="ri-check-double-line"></i> Mensyiarkan dan menyebarkan Agama Islam yang kaffah
                            </li>
                            <li><i class="ri-check-double-line"></i> Mencetak santri yang beriman dan bertaqwa kepada
                                Allah SWT dan berakhlaqul karimah</li>
                            <li><i class="ri-check-double-line"></i> Mencetak santri yang berwawasan IPTEK dan
                                berkepribadian IMTAQ</li>
                            <li><i class="ri-check-double-line"></i> Mencetak santri yang berwawasan kebangsaan,
                                ke-Indonesiaan dan ke-NUan</li>
                        </ul>
                    </div>
                </div>
                <br><br><br>
                <div class="section-title">
                    <h2>Misi</h2>
                </div>
                <div class="row content">
                    <div class="col-lg-12">
                        <ul>
                            <li><i class="ri-check-double-line"></i> Melaksanakan ubudiyah secara totalitas dan
                                konprehensif
                            </li>
                            <li><i class="ri-check-double-line"></i> Melaksanakan pembelajaran berbasis kitab kuning
                            </li>
                            <li><i class="ri-check-double-line"></i> Melaksanakan pendidikan formal dan informal di
                                pondok pesantren</li>
                            <li><i class="ri-check-double-line"></i> Menerapkan aturan-aturan yang berbasis syari'ah
                                islam</li>
                            <li><i class="ri-check-double-line"></i> Mengadakan diskusi, musyawarah, bahtsul masa'il
                                kitab kuning</li>
                            <li><i class="ri-check-double-line"></i> Melaksanakan pelatihan - pelatihan dasar mengajar
                                bagi santri senior (Ma'had Aly)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container" data-aos="fade-up">
            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Skills Section ======= -->
        <section id="pendiri" class="skills">
            <div class="container" data-aos="fade-up">
                <center>
                    <h2>Biografi Singkat Kiai Abdullah</h2>
                </center>
                <hr>
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('admin') }}/dist/img/Pendiri.jpg")" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <p class="fst-italic" style="text-align: justify; text-indent: 0.5in;">
                            Kiai Abdullah berasal dari keluarga sederhana dan taat dalam menjalankan syari'at agama.
                            Berada di lingkungan keluarga yang sangat religius, secara tidak langsung ikut membentuk
                            karakter dan kepribadiannya. Pada bagian bab ini, akan membahas riwayat hidup Kiai Abdullah,
                            mulai dari masa kecil, pendidikan, kepribadian hingga keagamaannya.
                        </p>
                        <p class="fst-italic" style="text-align: justify; text-indent: 0.5in;">
                            Kiai Abdullah lahir pada tanggal 12 November 1917 M./26 Muharram 1336 H. di Desa
                            Pangarangan, yang jaraknya sekitar 2 KM dari pusat Kota Sumenep. Beliau lahir dari pasangan
                            Husein bin Sholeh dan Aisyah binti Mustafa Baharun. Kiai Abdullah berasal dari keluarga yang
                            sederhana dan sangat taat menjalankan perintah agama. Beliau adalah anak ketiga dari lima
                            bersaudara. Mereka adalah Mohammad Sholeh Wiryodiharjo, Halimah, Abdullah, Abdul Aziz dan
                            Khatijah. Sejak lahir, Kiai Abdullah tinggal bersama saudara-saudaranya di Desa Pangarangan.
                        </p>
                        <p class="fst-italic" style="text-align: justify; text-indent: 0.5in;">
                            Kiai Abdullah lahir pada tanggal 12 November 1917 M./26 Muharram 1336 H. di Desa
                            Pangarangan, yang jaraknya sekitar 2 KM dari pusat Kota Sumenep. Beliau lahir dari pasangan
                            Husein bin Sholeh dan Aisyah binti Mustafa Baharun. Kiai Abdullah berasal dari keluarga yang
                            sederhana dan sangat taat menjalankan perintah agama. Beliau adalah anak ketiga dari lima
                            bersaudara. Mereka adalah Mohammad Sholeh Wiryodiharjo, Halimah, Abdullah, Abdul Aziz dan
                            Khatijah. Sejak lahir, Kiai Abdullah tinggal bersama saudara-saudaranya di Desa Pangarangan.
                        </p>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-center" data-aos-delay="100">
                        <p class="fst-italic" style="text-align: justify; text-indent: 0.5in;">
                            Sepeninggal kedua orang tuanya, Kiai Abdullah muda sangat dekat dengan kakak perempuannya
                            yang bernama Halimah. Kedekatan keduanya tidak hanya terjalin sebatas antara kakak dan adik
                            atau ikatan keluarga semata, namun keduanya juga banyak menghabiskan waktu bersama untuk
                            memperdalam ilmu-ilmu agama yang diperoleh kiai Abdullah selama belajar kepada guru-gurunya.
                            Bahkan teks- teks pidato Ny. Halimah yang membuatkan adalah Kiai Abdullah.
                        </p>
                        <p class="fst-italic" style="text-align: justify; text-indent: 0.5in;">
                            Kehidupan sehari-hari Kiai Abdullah sangat dekat dengan ilmu agama Islam, dan hal ini juga
                            tidak lepas dari peran Ayah dan Ibunya yang telah membentuk kepribadian masa kecil kiai
                            Abdullah. Peran dari kedua orang tua yang sholeh telah ikut menentukan sisi kepribadian dan
                            kehidupan Kiai Abdullah. Kasih sayang dan bakti kiai Abdullah kepada kedua orang tuanya ikut
                            diteladani oleh putra-putrinya. Keta'dziman Kiai Abdullah yang luar biasa kepada guru serta
                            ketekunannya dalam menuntut ilmu, ikut membentuk kepribadian anak cucu beserta keturunannya
                            yang 'alim, hingga menjadi tolok ukur karakter seorang santri, dan hal tersebut juga telah
                            memberi nilai tersendiri terhadap corak keilmuan di pondok pesantren Mathali'ul Anwar,
                            Pangarangan, Sumenep.
                        </p>
                        <p class="fst-italic" style="text-align: justify; text-indent: 0.5in;">
                            Ghirah dari sang pendiri tetap dijaga hingga saat ini, dilanjutkan oleh putranya yang
                            bernama, Kiai Mohammad Sa'id Abdullah. Jauh hari sebelum Kiai Abdullah wafat di usianya yang
                            ke- 67 tahun, tepatnya pada hari Sabtu, tanggal 29 Juni 1984 M/ 29 Ramadhan 1404 H. Kiai
                            Abdullah sudah mempersiapkan Kiai Mohammad Sa'id sebagai penerus dan pengasuh Pondok
                            pesantren Mathaliul Anwar.
                        </p>
                        <p class="fst-italic" style="text-align: justify; text-indent: 0.5in;">
                            Kiai Abdullah diangkat oleh gurunya, Kiai Miftahul Arifin, sebagai mudin (pembantu
                            penghulu), sekitar tahun 1930. Kiai Abdullah menjalani pekerjaanya itu sambil morok
                            (mengajar) para santrinya. Meskipun pada suatu masa, beliau harus pindah tugas dan menetap
                            hingga masa jabatannya sebagai kepala KUA di kecamatan Kalianget selesai. Kiai Abdullah
                            tercatat dalam jumlah masa kerja dari tanggal 12-04-1945 s/d tanggal 1-1-1969.
                        </p>

                    </div>
                </div>
            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Services Section ======= -->
        <section id="sejarah" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Sejarah</h2>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"></div>
                            <h4 style="text-align:center">Sejarah Berdirinya Pondok Pesantren Mathali'ul Anwar</h4>
                            <hr>
                            <p style="text-align: justify; text-indent: 0.5in;">Lahirnya pondok pesantren Mathali'ul
                                Anwar bukanlah gejala responsif-sporadis, melainkan
                                ciri umum, endegeniouse- edukatif. Pandangan umum dalam kehidupan masyarakat Indonesia,
                                keberadaan pesantren dianggap dan diakui sebagai subkultur yang lahir dan berkembang
                                seiring dengan perubahan-perubahan dalam masyarakat global. Asketisme (paham kesufian)
                                yang digunakan pesantren menjadi pilihan ideal bagi masyarakat yang tengah dilanda
                                krisis kehidupan, sehingga pesantren dijadikan sebagai unit budaya dan menjadi bagian
                                tak terpisahkan dari kehidupan mereka. Peranan seperti ini, menurut KH. Abdurrahman
                                Wahid (Gus Dur) disebut sebagai ciri utama pesantren sebuah subkultur.</p>
                            <p style="text-align: justify; text-indent: 0.5in;">Berawal, suatu ketika Kiai Abdullah bin
                                Husein mendapat restu dan ijazah keilmuan dari
                                guru-guru beliau yakni, Kiai Ajung dari Bangselok, Kiai Abu Sujak dari Kebun Agung, dan
                                Kiai Miftahul Arifin dari Bangselok. Pada saat itu, usia Kiai Abdullah baru genap 18
                                tahun. Meski di usianya yang masih terbilang muda namun, Kiai Abdullah sudah siap secara
                                keilmuan untuk menerima kedatangan beberapa santri yang ingin belajar dan nyantri
                                kepadanya.</p>
                            <p style="text-align: justify; text-indent: 0.5in;">Sebelum bernama Mathali'ul Anwar,
                                pesantren ini bernama Babus As-Salam (1935 M), yang
                                berlokasi di Desa Pangarangan, Jl. Kartini, Gg. 06/ No. 04. Kecamatan Kota, Kabupaten
                                Sumenep. Ketika masih bernama Babus As- Salam, kegiatan pendidikan setiap harinya
                                dimulai setelah selesai salat Maghrib berjama'ah. Kemudian, anak-anak desa setempat
                                membentuk lingkaran yang cukup renggang membagi dua kelompok antara santri laki-laki
                                dengan santri perempuan. Proses belajar mengaji al-Qur'an kepada Kiai Abdullah dilakukan
                                secara bergantian. Dilihat dari ciri dan bentuk bangunannya, Babus As-Salam lebih umum
                                dikenal dalam sebutan surau, langgar atau langgher. Sebelum kemudian, ada tambahan
                                pengajian berbasis kitabiyah, yang kemudian menjadi cikal-bakal lahirnya pondok
                                pesantren Mathali'ul Anwar seperti sekarang ini.</p>
                            <p style="text-align: justify; text-indent: 0.5in;">Pergantian nama dari Babu As-Salam, ke
                                Mathali'ul Anwar terjadi pada awal tahun 1974 M.
                                Tidak ada alasan yang jelas mengenai pergantian nama tersebut. Namun, pengambilan
                                Mathali'ul Anwar sebagai nama baru pesantren, seiring dengan kesiapan dan kemantapan
                                pendiri untuk mengembangkan sistem pendidikan di dalamnya, yang kian hari, juga semakin
                                banyak orang-orang menyantrikan anak-anak mereka kepada Kiai Abdullah. Diantara beberapa
                                santri yang belajar kepada beliau, usianya ada yang lebih tua dari Kiai Abdullah.</p>
                            <p style="text-align: justify; text-indent: 0.5in;">Sejarah berdirinya pondok pesantren
                                Mathali'ul Anwar, secara langsung diprakarsai oleh
                                Kiai Abdullah bin Husein bin Sholeh. Sejak berdiri tahun 1935, hingga pada masa
                                perkembangannya antara 1962 sampai 1974, pesantren semakin dikenal luas oleh masyarakat
                                Sumenep, tidak terkecuali nama Kiai Abdullah juga semakin masyhur. Lambat laun
                                masyarakat banyak yang mendatangi Kiai Abdullah, meminta izin agar menerima anak-anak
                                mereka sebagai santri beliau. Menurut Kiai Mohammad Husni Abdullah (putra kedua Kiai
                                Abdullah), santri pertama Pondok Pesantren Mathali'ul Anwar berasal dari Desa Pagar
                                Batu, Saronggi, Sumenep, yang kemudian disusul santri-santri lain yang berasal dari
                                daerah Pulau Raas, Pulau Sapekken, dan Pulau Talango.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Pendidikan Section ======= -->
        <section id="pendidikan" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pendidikan</h2>
                </div>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="box featured">
                            <center>
                                <h3>Pendidikan Formal</h3>
                                <h4><span>SMP</span></h4>
                            </center>
                            <ul>
                                <li><i class="bx bx-check"></i> Kelas I</li>
                                <li><i class="bx bx-check"></i> Kelas II</li>
                                <li><i class="bx bx-check"></i> Kelas III</li>
                                <li><i class="bx bx-check"></i> Mengikuti pendidikan Informal</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box featured">
                            <center>
                                <h3>Pendidikan Formal</h3>
                                <h4><span>SMA</span></h4>
                            </center>
                            <ul>
                                <li><i class="bx bx-check"></i> Kelas I</li>
                                <li><i class="bx bx-check"></i> Kelas II</li>
                                <li><i class="bx bx-check"></i> Kelas III</li>
                                <li><i class="bx bx-check"></i> Mengikuti pendidikan Informal</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box featured">
                            <center>
                                <h3>Pendidikan Informal</h3>
                                <h4><span>Diniyah</span></h4>
                            </center>
                            <ul>
                                <li><i class="bx bx-check"></i> Isti'dadiyah</li>
                                <li><i class="bx bx-check"></i> I Awwaliyah</li>
                                <li><i class="bx bx-check"></i> II Awwaliyah</li>
                                <li><i class="bx bx-check"></i> III Awwaliyah</li>
                                <li><i class="bx bx-check"></i> I Wustha</li>
                                <li><i class="bx bx-check"></i> II Wustha</li>
                                <li><i class="bx bx-check"></i> III Wustha</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Pricing Section -->
        <!-- ======= Struktur Section ======= -->
        <section id="struktur" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Struktur Kepengurusan</h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $p)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $p->gelar }} {{ $p->nama }}</td>
                                    <td>{{ $p->jabatan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section><!-- End Team Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">
            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Berita Section ======= -->
        <section id="berita" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Berita</h2>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($data1 as $p)
                        <div class="col-lg-4 col-md-3 portfolio-item filter-app">
                            <div class="portfolio-img"><img src="{{ asset('image') }}/{{ $p->gambar }}"
                                    class="img-fluid" alt=""></div>
                            <div class="portfolio-info">
                                <h4>{{ $p->judul }}</h4>
                                <p>{{ $p->tanggal }}</p>
                                <a href="{{ asset('image') }}/{{ $p->gambar }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="{{ $p->judul }}"><i
                                        class="bx bx-plus"></i></a>
                                <a href="/detail/{{ $p->id }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <br>
                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl. Kartini VI/09 Desa Pangarangan Kec. Kota <br>Sumenep Kab Sumenep, Jawa Timur
                                    69412
                                </p>
                            </div>

                            <div class="whatsapp">
                                <i class="bi bi-whatsapp"></i>
                                <h4>Whatsapp</h4>
                                <p><a href="https://wa.me/6281336857778" target="_blank">Klik Disini</a></p>
                            </div>

                            <div class="instagram">
                                <i class="bi bi-instagram"></i>
                                <h4>Instagram</h4>
                                <p><a href="https://www.instagram.com/mathaliul.anwar/?hl=id" target="_blank">Klik
                                        Disini</a></p>
                            </div>

                            <div class="facebook">
                                <i class="bi bi-facebook"></i>
                                <h4>Facebook</h4>
                                <p><a href="https://www.facebook.com/p.p.mathaliulanwar" target="_blank">Klik
                                        Disini</a></p>
                            </div>

                            <div class="youtube">
                                <i class="bi bi-youtube"></i>
                                <h4>Youtube</h4>
                                <p><a href="https://www.youtube.com/channel/UCq2G-ijAAA7ANcpaxayqp7A"
                                        target="_blank">Klik Disini</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.50314152708862!2d113.867472!3d-7.003364!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7bf4ed3092aa5f19!2sPondok%20Pesantren%20Mathali%E2%80%99ul%20Anwar!5e0!3m2!1sen!2sus!4v1670884062011!5m2!1sen!2sus"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div style="text-align: center">
                &copy; Copyright <strong><span>Pondok Pesantren </span></strong>Mathali'ul Anwar
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
