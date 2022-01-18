@extends('layouts.frontend.header')

@section('content')
<main id="main">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" style="z-index: 20;">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Selamat Datang,</h1>
          <h1>Dara Daeng !</h1>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="/daftar" class="btn-get-started scrollto">Daftar Sekarang</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="frontend/assets/img/element 1.webp" class="img-fluid animated" alt="" width="85%">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->


  <!-- ======= Tentang DDB ======= -->
  <section id="tentang-kami" class="tentang-kami section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Tentang Dara Daeng Brawijaya</h2>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
          <!-- Carousel -->
          <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="frontend/assets/img/ddb1.webp" class="d-block " style="border-radius: 16px">
              </div>
              <div class="carousel-item">
                <img src="frontend/assets/img/ddb2.webp" class="d-block" style="border-radius: 16px">
              </div>
              <div class="carousel-item">
                <img src="frontend/assets/img/ddb3.webp" class="d-block" style="border-radius: 16px">
              </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
          <div class="glasscard">
            <p>
              Suatu komunitas mahasiswa Universitas Brawijaya yang
              berasal dari Sulawesi Selatan untuk berinteraksi sesama
              mahasiswa se-daerah agar dapat melepas rindu akan bahasa
              dan dialek Sulawesi Selatan.
            </p>
          </div>

        </div>
      </div>

    </div>

  </section>
  <!-- End Tentang DDB Section -->

  <!--Tentang ddbgts-->

  <section id="tentang-ddbgts" class="tentang-ddbgts section-bg-cust">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Tentang Dara Daeng Brawijaya Goes To School</h2>
        <p style="text-align: justify;">
          DDBGTS merupakan event yang dilaksanakan rutin tiap tahun oleh Dara Daeng Brawijaya untuk mensosialisasikan Universitas Brawijaya ke sekolah-sekolah menengah atas yang ada di Sulawesi selatan. Tapi bukan hanya itu, DDBGTS juga akan hadir menemani
          kalian dengan tryout sebagai kegiatan utama dan berbagai kegiatan lain yang pastinya sayang banget kalau dilewatin. Nah apa aja sih kegiatannya
        </p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box phone" data-aos="flip-left" data-aos-delay="100">
            <h4 class="title mt-3">TRYOUT UTBK</h4>
            <p class="description"">Persiapan untuk kamu menghadapi UTBK, dengan akurasi soal mengacu pada pelaksanaan tahun-tahun sebelumnya, UTBK? Siapa Takut!</p>
            </div>
          </div>

          <div class=" col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="flip-right" data-aos-delay="200">
              <h4 class="title mt-3">RASIONALISASI NILAI</h4>
              <p class="description">Masih galau menentukan pilihan 1 atau pilihan 2 di SNMPTN? Dengan semudah memasukkan nilai raport, kami bantu untuk membereskan itu semua</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box phone" data-aos="flip-left" data-aos-delay="300">
              <h4 class="title mt-3">TALENTS MAPPING</h4>
              <p class="description"> 2022 waktunya mencari tau potensi diri melalui Talents Mapping kamu akan menemukan potensi dirimu yang sebenarnya</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="flip-right" data-aos-delay="400">
              <h4 class="title mt-3">TALK SHOW</h4>
              <p class="description">Berbagai talkshow inspiratif dan motivatif siap diberikan sebagai bekal kamu menjadi mahasiswa</p>
            </div>
          </div>

        </div>
      </div>
  </section>

  <section id="rangkaian-acara" class="rangkaian-acara section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Rangkaian Acara</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
          <div class="flip-card" style="border-radius: 2px;">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="frontend/assets/img/ddbgtstalk.webp" alt="ddbgtstalk" class="mb-1 acara-card">
                <h4 class="mt-4">DDBGTS TALK</h4>
              </div>
              <div class="flip-card-back">
                <h4 class="title mt-3">DDBGTS TALK</h4>
                <p class="justify-content-center align-items-center mt-4">DDBGTS Talk adalah salah satu kegiatan dari DDBGTS 2022 bersama beberapa sekolah yang berada di Sulawesi Selatan. Kegiatan ini bertujuan untuk mengetahui seluk beluk siswa-siswi SMA sebelum memasuki jenjang perkuliahan.
                  Selain itu, kegiatan ini juga bertujuan untuk menyampakan informasi mengenai dunia perkuliahan secara umum.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
          <div class="flip-card" style="border-radius: 2px;">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="frontend/assets/img/sosialisasi.webp" alt="sosialisasi" class="mb-1 acara-card">
                <h4 class="mt-4">SOSIALISASI</h4>
              </div>
              <div class="flip-card-back">
                <h4 class="mt-3">SOSIALISASI</h4>
                <p class="justify-content-center align-items-center mt-4">Sosialisasi berupa kunjungan ke sekolah-sekolah yang ada di Sulawesi Selatan. Sosialisasi bertujuan untuk memperkenalkan kehidupan kampus Universitas Brawijaya kepada siswa kelas 12 dan juga memperkenalkan ddbgts
                  kepada siswa-siswi kelas 12 sebagai ajang mempersiapkan dalam UTBK nantinya dan tentunya masa banyak hal menarik lainnya.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
          <div class="flip-card" style="border-radius: 2px;">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="frontend/assets/img/acara_puncak.webp" alt="acarapuncak" class="mb-1 acara-card">
                <h4 class="mt-4">ACARA PUNCAK</h4>
              </div>
              <div class="flip-card-back">
                <h4 class="mt-3">ACARA PUNCAK</h4>
                <p class="justify-content-center align-items-center mt-4">Acara ini berlangsung pada tanggal 22-23 Januari 2022 dengan menghadirkan pemateri-pemateri yang berkualitas, baik secara akademik maupun pengalaman. Selain itu, terdapat tips and trick sebagai persiapan adik-adik untuk mengikuti SNMPTN atau SBMPTN, Tryout UTBK, Talents Mapping dan masih banyak lainnya.</p>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>

  <section id="filosofi-logo" class="filosofi-logo section-bg-filosofi">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Filosofi Logo</h2>
      </div>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="frontend/assets/img/4.webp" class="d-block w-45 mx-auto mb-3 mt-3" style="width: 300px;">
            <div class="mobile-capt" style="margin-top: 150px;">
            </div>
            <div class="carousel-caption d-md-block pt-5">
              <h5>Monumen Mandala</h5>
              <p>Melambangkan semangat yang tidak pernah padam.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="frontend/assets/img/3 (1).webp" class="d-block w-45 mx-auto mb-3 mt-3" style="width: 300px;">
            <div style="margin-top: 150px;">
            </div>
            <div class="carousel-caption d-block">
              <h5>Sepuluh Ombak</h5>
              <p>Melambangkan sepuluh tahun Dara Daeng Brawijaya.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="frontend/assets/img/2 (1).webp" class="d-block w-45 mx-auto mb-3 mt-3" style="width: 300px;">
            <div style="margin-top: 150px;">
            </div>
            <div class="carousel-caption d-md-block">
              <h5>Identitas Kegiatan</h5>
              <p>Menampilkan nama kegiatan sebagai identitas</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="frontend/assets/img/1 (1).webp" class="d-block w-45 mx-auto mb-3 mt-3" style="width: 300px;">
            <div style="margin-top: 150px;">
            </div>
            <div class="carousel-caption d-md-block">
              <h5>Aksen Lontara</h5>
              <p>Sebagai representasi budaya SulSel membentuk susunan huruf DDB</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <section id="tata-cara-pendaftaran" class="tata-cara-pendaftaran section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Tata Cara Pendaftaran</h2>
      </div>

      <div class="row">

        <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-stretch">

          <div class="accordion-list">
            <ul>
              <li data-aos="fade-down" data-aos-delay="100">
                <a><span>01.</span> Lakukan pembayaran melalui mobile banking atau atm terdekat</a>
                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                  <p>
                    Pembayaran dapat dilakukan dengan transfer sebesar Rp 25.000,- ke salah satu rekening di bawah ini: <br>
                    • BNI 1193024137 a/n <strong>Nurhafidah</strong> <br>
                    • DANA 082335319820 a/n <strong>Serlinda</strong> <br>
                    • OVO 082335319820 a/n <strong>Serlinda</strong> <br>
                    • Shopeepay 087806481670 a/n <strong>Annisakhazizah</strong>
                  </p>
                </div>
              </li>

              <li data-aos="fade-down" data-aos-delay="200">
                <a><span>02.</span> Simpan bukti pembayaran Anda</a>
              </li>

              <li data-aos="fade-down" data-aos-delay="300">
                <a><span>03.</span> Lakukan pengisian data-data Anda dengan mengklik <strong>Daftar Sekarang</strong>
              </li>

              <li data-aos="fade-down" data-aos-delay="400" class="mt-3">
                <a><span>04.</span> Periksa kembali data-data yang telah Anda inputkan. Setelah itu tekan tombol <strong>Daftar</strong>
              </li>

              <li data-aos="fade-down" data-aos-delay="500" class="mt-3">
                <a><span>05.</span> Setelah melakukan pendaftaran, kami akan melakukan validasi data dan kemudian mengirimkan konfirmasi ke email Anda. Diharapkan untuk memeriksa Inbox/Spam
              </li>

              <li data-aos="fade-down" data-aos-delay="600" class="mt-3">
                <a><span>06.</span> Jika dalam 1 x 24 jam tidak ada email dari kami yang masuk ke Inbox/Spam Anda, harap untuk menghubungi kami melalui kontak yang tersedia di bawah
              </li>

            </ul>
          </div>

        </div>

      </div>

    </div>
  </section>
  <!-- END Tata Cara Pendaftaran Section -->


  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="row">
        <div class="col-lg-12 text-center">
          <h3 class="text-center">Tunggu apa lagi?</h3>
          <p> Ayo buruan daftar sebelum terlambat. <br> Kami tunggu kehadiranmu di DDBGTS 2022</p>
        </div>
        <div class="col-lg-12 text-center">
          <a class="cta-btn align-middle" href="/daftar">Daftar Sekarang</a>
        </div>
      </div>

    </div>
  </section><!-- End Cta Section -->

  <!-- ======= Cliens Section ======= -->
  <section id="cliens" class="cliens section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Sponsor dan Media Partner</h2>
      </div>

      <div class="row">

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/clients/logo_astra.webp" class="img-fluid" alt="logo astra">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/clients/khalifa-instiitute (1).webp" class="img-fluid" alt="logo khalifa institute">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/nutrifood.webp" class="img-fluid" alt="logo nutrifood">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/clients/alokka.webp" class="img-fluid" alt="logo pajokka" style="width: 80px;">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/clients/eduevent.webp" class="img-fluid" alt="logo edu event">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/clients/infomahasiswa.webp" class="img-fluid" alt="logo info mahasiswa">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/clients/makassarevent.webp" class="img-fluid" alt="logo makassar event">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/clients/sahabatevent.webp" class="img-fluid" alt="logo sahabat event">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/berita_kota.webp" class="img-fluid" alt="logo berita kota">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/info_event.webp" class="img-fluid" alt="logo info event">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/clients/jogja%20magazine.webp" class="img-fluid" alt="logo jogka magazine">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/clients/infokupedia.webp" class="img-fluid" alt="logo infokupedia">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/bone_media.webp" class="img-fluid" alt="logo berita kota" width="60px">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/eventcampus.webp" class="img-fluid" alt="logo event campus" width="60px">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/event_kampus.webp" class="img-fluid" alt="logo event kampus" width="60px">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/clients/info-lutra.webp" class="img-fluid" alt="logo info lutra" width="60px">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/clients/duta%20pelajar%20makassar.webp" class="img-fluid" alt="logo duta makassar" width="60px">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/clients/SULSEL_EVENT.webp" class="img-fluid" alt="logo sulsel event" width="60px">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/clients/medpart%20yk.webp" class="img-fluid" alt="logo medpart yk" width="60px">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/clients/medpartid.webp" class="img-fluid" alt="logo medpart yk" width="60px">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="frontend/assets/img/clients/Radio%20PLS.webp" class="img-fluid" alt="logo medpart yk" width="60px">
        </div>
      </div>

    </div>
  </section>
  <!-- End Cliens Section -->

  <script src="//code.tidio.co/6q3xbzy0oztl4m0kpcw2gbdnoiaope6k.js" async></script>

</main><!-- End #main -->
@endsection