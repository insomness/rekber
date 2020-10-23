  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-end fixed-top topbar-transparent">
    <div class="container d-flex justify-content-end">
      <div class="social-links">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">Rekber</a></h1>

      <nav class="main-nav d-none d-lg-block">
        <ul>
          <li class="{{Request::is('/') ? 'active' : ''}}"><a href="#hero">Home</a></li>
          <li class="{{Request::is('#services') ? 'active' : ''}}"><a href="#services">Layanan</a></li>
          <li class="{{Request::is('#alur-rekber') ? 'active' : ''}}"><a href="#alur-rekber">Alur Rekber</a></li>
          <li class="{{Request::is('#transaction') ? 'active' : ''}}"><a href="#transaction">Transaksi</a></li>
          <li class="{{Request::is('#faq') ? 'active' : ''}}"><a href="#faq">FAQ</a></li>
          <li class="{{Request::is('login') ? 'active' : ''}}"><a href="login">Masuk/Daftar</a></li>
        </ul>
      </nav><!-- .main-nav-->

    </div>
  </header><!-- End Header -->
