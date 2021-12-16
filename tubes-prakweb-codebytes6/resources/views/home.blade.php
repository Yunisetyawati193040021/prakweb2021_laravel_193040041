@extends('layouts.main')

@section('container')
<div class="carousel slide" data-bs-ride="carousel" style="margin-top: -25px;">
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img src="img/1.jpg" class="d-block w-100" alt="...">
         <div class="carousel-caption d-none d-md-block">
            <h5>Welcome to Catalog Sepatu</h5>
         </div>
      </div>
      <div class="carousel-item">
         <img src="img/2.jpg" class="d-block w-100" alt="...">
      </div>
   </div>
</div>

<div class="row mb-4">
   <div class="col-md ">
      <div class="card">
         <img src="img/vans5.png" class="card-img-top" alt="...">
         <div class="card-body">
            <h3>Vans</h3>
            <div class="progress">
               <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-md">
      <div class="card">
         <img src="img/converse10.jpg" class="card-img-top" alt="...">
         <div class="card-body">
            <h3>Converse</h3>
            <div class="progress">
               <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">95%</div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-md">
      <div class="card">
         <img src="img/ventela1.jpg" class="card-img-top" alt="...">
         <div class="card-body">
            <h3>Ventela</h3>
            <div class="progress">
               <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="container" style="background-color: #ed5624;">
   <h2 style="font-size: 100px; text-align:center; color:white;">SALE</h2>
   <h2 style="font-size: 100px; text-align:center; color:white;">YEAR END</h2>
   <h2 style="font-size: 100px; text-align:center; color:white;">SALE</h2>
</div>

<!-- contact -->

<section id="contact" class="contact mb-5">
   <div class="container">
      <div class="row pt-4 mb-4">
         <div class="col text-center">
            <h2 class="contact1">Contact</h2>
         </div>
      </div>


      <div class="row justify-content-center">

         <div class="col-lg-4 ">
            <div class="card text-white bg-success mb-3 text-center">
               <div class="card-body">
                  <h5 class="card-title ">Codebyte6</h5>
                  <p class="card-text">terima kasih atas kunjungan nya bila ada saran dan kritik silahkan krim pesan yang terserdia.</p>
               </div>
            </div>
            <ul class="list-group">
               <li class="list-group-item">
                  <h1>location</h1>
               </li>
               <li class="list-group-item">my home</li>
               <li class="list-group-item">Jl. Dr. Setiabudi No.193, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat 40153</li>
               <li class="list-group-item">west java, indonesia</li>
            </ul>
         </div>



         <div class="col-lg-6 isian">
            <form>
               <div class="form-group">
                  <label for="Nama">Nama </label>
                  <input type="text" class="form-control" id="Nama">
               </div>
               <div class="form-group">
                  <label for="Email">Email </label>
                  <input type="text" class="form-control" id="Email">
               </div>
               <div class="form-group">
                  <label for="No Telpon">No Telpon </label>
                  <input type="text" class="form-control" id="No Telpon">
               </div>
               <div class="form-group">
                  <label for="pesan">Pesan </label>
                  <textarea name="pesan" id="pesan" class="form-control"></textarea>
               </div>
               <div class="from-grup">
                  <button type="button" class="btn btn-primary">Kirim pesan</button>
               </div>
            </form>
         </div>


      </div>

   </div>

</section>

<!-- akhir contact -->

@endsection