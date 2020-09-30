@extends('layouts.medilab')
@section('content')
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Three_de</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="{{ 'medilab' }}assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="/direktori">Direktori</a></li>
          <li><a href="#departments">Seputar Covid_19</a></li>
          <li><a href="#doctors">Doctors</a></li>
          <li><a href="#Tindakan medis">Tindakan medis</a></li>
          <li><a href="#contact">Contact</a></li>
          <li id="removable">
            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                <li><a title="Login" href="/login">Login</span></a></li>
            </ul>
          </li>
    
      </nav>
      </div>

        </ul>
  </header>
  <!-- End Header -->
    <!-- ======= Services Section ======= -->
   <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Direktori Tempat  yang Menyediakan Test COVID-19</h2>
          <p> situs ini mempermudah anda mencari tempat yang menyediakan test covid 
            dan informasi seputar covid_19 di kota semarang</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <img src="{{ 'medilab' }}/assets/img/download.jpg">
              <h4><a href="">Siloam Hospital Semarang</a></h4>
              <p>Jl. Kompol Maksum No.296, Peterongan, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50242</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <img src="{{ 'medilab' }}/assets/img/bisa.jpg">
              <h4><a href="">rumah sakit tologorejo</a></h4>
              <p>Jl. Kh Ahmad Dahlan, Pekunden, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50134</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <img src="{{ 'medilab' }}/assets/img/kecil.jpg">
              <h4><a href="">RSJD Amino Gondohutomo SEmarang</a></h4>
              <p>Jl. Brigjen Sudiarto No.347, Gemah, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50611</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Tindakan Medis Section ======= -->
    <section id="Tindakan medis" class="Tindakan medis">
      <div class="container">

        <div class="section-title">
          <h2>Tindakan Medis</h2>
          <p>Prosedur pemeriksaan yang dilakukan untuk mendeteksi Virus Corona pada tubuh pasien menggunakan CT Scan</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <p><i class="icofont-caret-right">Paket Rapid Test Antibodi ultima </i></p>
                <p> Rp. 1.799.000</p>
                <p>Rapid test + lab darah lengkap + CT Scan thorax + konsultasi dokter umum</p>
              </div>
            </li>
            <div class="faq-list">
              <ul>
                <li data-aos="fade-up">
                  <p><i class="icofont-caret-right">Paket Swab Raguler </i></p>
                    <p> Rp 2.500.000 (exclude ongkir Rp 150.000)</p>
                    <p>PCR hasil jadi kurang lebih 7-10 hari</p>
                  </div>
                </li>
                <div class="faq-list">
                  <ul>
                    <li data-aos="fade-up">
                      <p><i class="icofont-caret-right">Paket Swab fast track </i></p>
                        <p>Rp 6.500.000 (exclude ongkir Rp 150.000)</p>
                        <p>PCR hasil jadi kurang lebih 3-5 hari</p>
                      </div>
                    </li>
           

          </ul>
        </div>

      </div>
    </section><!-- End Tindakan Medis Section -->
@endsection