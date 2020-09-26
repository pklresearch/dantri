<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>covid_19 | Three__de </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset ('frontend') }}/img/step3.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('frontend') }}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.theme.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset ('frontent') }}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
@include('layouts.sidebar')
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="{{ asset ('frontend') }}/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
     @include('layouts.header')
        <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100"> 
         <div class="form-row"> 
             <div class="sidebar-heading">Nama Fasilitas Kesehatan</div>
              <div class=" form-group"> 
                   <input type="text" name="name" class="form-control" id="name" placeholder="soliam hospital semarang" data-rule="minlen:4" data-msg="Please enter at least 4 chars">  
                   <div class="validate">
                   </div> 
                 </div>  
                 </div>  
                 <div class="sidebar-heading">Deskripsi</div>
                                                      <div class="form-group">  <textarea class="form-control" name="message" rows="5" placeholder="Siloam Hospitals Semarang menghadirkan rumah sakit yang nyaman dan didukung oleh para dokter spesialis, sub-spesialis, serta tenaga medis yang kompeten dan berpengalaman untuk memberikan pelayanan medis prima secara tepat, efektif, dan menyeluruh demi upaya penyelamatan dan pemulihan pasien. Instalasi Gawat Darurat 24 Jam kami didukung oleh tim medis profesional yang terlatih dan berpengalaman dalam penanganan kasus kegawatdaruratan, untuk memberikan bantuan terbaik bagi pasien yang membutuhkan perawatan medis segera"></textarea> 
                                                       <div class="validate"></div>  </div>  <div class="mb-3"> 
                                                         <div class="product-sales-area mg-tb-30">
                                                         <div class="col-md-6">
                                      <select name="department" id="department" class="form-control"> 
                                           <option value="">jenis fasilitas kesehatan</option> 
                                            <option value="Department 1">rumah sakit</option> 
                                             <option value="Department 2">klinik</option> 
                                              <option value="Department 3">puskesmas</option> 
                                              <option value="Department 3">Lab</option> 
                                              <option value="Department 3">lainnya</option> 
                                             </select> 
                                              <div class="validate"></div> 
                                             </div> 
                                             
                                             <div class="col-md-6 mx-3" >  
                                                <select name="doctor" id="doctor" class="form-control">  
                                                     <option value="">Jenis test yang tersedia</option> 
                                                      <option value="Doctor 1">Paket Rapid Tes Antibodi Ultima</option> 
                                                       <option value="Doctor 2">PCR/SWAB</option> 
                                                </select>  <div class="validate"></div> 
                                             </div>
                                             <div class="sidebar-heading">Total</div> 
                                             <div class="from-group"> 
                                              <input type="text" name="name" class="form-control" id="name" placeholder="2.500.000 (exclude ongkir Rp 150.000)" data-rule="minlen:4" data-msg="Please enter at least 4 chars">  
                                               <div class="validate">
                                               </div> 
                                            </div> 
                                            </div>
                                             <div class="sidebar-heading">No Telp</div> 
                                             <div class="from-group"> 
                                              <input type="text" name="name" class="form-control" id="name" placeholder="024-86001911 (Panggilan Darurat)" data-rule="minlen:4" data-msg="Please enter at least 4 chars">  
                                               <div class="validate">
                                               </div> 
                                            </div> 
                                            </div>
                                             <div class="sidebar-heading">Alamat</div> 
                                             <div class="from-group"> 
                                              <input type="text" name="name" class="form-control" id="name" placeholder="Jl. Kompol Maksum No.296, Peterongan, Semarang Selatan, Kota Semarang, Jawa Tengah 50242
                                                " data-rule="minlen:4" data-msg="Please enter at least 4 chars">  
                                               <div class="validate">
                                               </div> 
                                            </div> 
                                            <div>
                                             <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                                            </div>
     @include('layouts.footer')


    <!-- jquery
		============================================ -->
    <script src="fjs/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('frontend') }}/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('frontend') }}/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('frontend') }}/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('frontend') }}/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('frontend') }}/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('frontend') }}/js/counterup/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/counterup/waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('frontend') }}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('frontend') }}/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('frontend') }}/js/metisMenu/metisMenu.min.js"></script>
    <script src="{{ asset('frontend') }}/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('frontend') }}/js/morrisjs/raphael-min.js"></script>
    <script src="{{ asset('frontend') }}/js/morrisjs/morris.js"></script>
    <script src="{{ asset('frontend') }}/js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('frontend') }}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{ asset('frontend') }}/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="{{ asset('frontend') }}/js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{ asset('frontend') }}/js/calendar/moment.min.js"></script>
    <script src="{{ asset('frontend') }}/js/calendar/fullcalendar.min.js"></script>
    <script src="{{ asset('frontend') }}/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('frontend') }}/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('frontend') }}/js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="{{ asset('frontend') }}/js/tawk-chat.js"></script>
</body>

</html>