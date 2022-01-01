<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DDBGTS 2022</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="DDBGTS merupakan event yang dilaksanakan rutin tiap tahun oleh Dara Daeng Brawijaya untuk mensosialisasikan Universitas Brawijaya ke sekolah-sekolah menengah atas yang ada di Sulawesi selatan" name="description">
  <meta content="DDBGTS" name="keywords">
  <meta content="DDB" name="keywords">
  <meta content="Tryout UTBK" name="keywords">
  <meta content="SNMPTN" name="keywords">
  <meta content="SBMPTN" name="keywords">

  <!-- Favicons -->
  <link href="/frontend/assets/img/logo2.webp" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <link href="/frontend/assets/css/style.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-F0RGLSYSZ0"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-F0RGLSYSZ0');
  </script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo me-auto"><img src="/frontend/assets/img/logo.webp" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/berita">Berita</a></li>
          <li><a class="nav-link scrollto" href="/cara-pendaftaran">Cara Pendaftaran</a></li>
          <li><a class="nav-link scrollto" href="/faq">FAQ</a></li>
          <li><a class="getstarted scrollto" href="/daftar">Daftar Sekarang</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <h3 class="text-center">Visit Our Social Media</h3>
      <div class=" mt-3 text-center sosial-media">
        <a href="https://www.instagram.com/ddbgts/" target="_blank"><span class="iconify" data-icon="uil:line" style="color: #fff;" data-width="30" data-height="30"></span></a>
        <a href="https://www.instagram.com/ddbgts/" target="_blank"><span class="iconify" data-icon="uil:instagram" style="color: #fff;" data-width="30" data-height="30"></span></a>
        <a href="https://www.tiktok.com/@ddbgts" target="_blank"><span class="iconify" data-icon="simple-icons:tiktok" style="color: #fff;" data-width="25" data-height="25"></span></a>
      </div>
      <div class="copyright mt-3">
        Developed by PIT DDBGTS 2022
      </div>
      <div class="copyright mt-2">
        © 2021 All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
  <!-- Template Main JS File -->
  <script src="/frontend/assets/js/main.js"></script>