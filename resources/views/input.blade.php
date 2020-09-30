@extends('layouts.master')
@section('content')
 <!-- container fluid -->
 <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 font-weight-bold-text-gray-800">Input Data</h1>
          </div>
</div>
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
                                            <br><input type='submit' name='tombol' value='Kirim' /></br>
                                            <div>
                                             <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126715.84250585646!2d110.34702396464287!3d-7.024554222546577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4d3f0d024d%3A0x1e0432b9da5cb9f2!2sSemarang%2C%20Kota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1601278704152!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                             </form>
@endsection