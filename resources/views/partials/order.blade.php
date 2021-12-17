<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="https://kit.fontawesome.com/96f1c47c61.js" crossorigin="anonymous"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <title>Tasanesia | Contact</title>
    <style>
        /* .ftco-section {
            
        } */
      @media (max-width: 767.98px) { 
       
        .row1{
          margin-top:2rem !important;
        }
       }

    </style>
  </head>
  <body>
    

    <section class="ftco-section" >
    @section('content')
    <!-- Navbar -->
     @include('partials.navbar') 
    <!-- End Navbar -->
    <!-- <section class="id">
      <div class="container">
        <img
          src="assets/img/nanas-carrousel.jpg"
          alt=""
          class="img-header-contact"
        />
        <h2
          class="text-center mt-3 mb-4"
          style="font-weight: 700; color: #28a745"
        >
          Contact Us
        </h2>
      </div>
    </section> -->
    <section class="main" >
    <div class="container hero" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Order</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('order-product') }}">
                       {{ csrf_field()}}

                        <div class="row mb-3">
                            <label for="nama_pembeli" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="nama_pembeli" type="text" class="form-control @error('nama_pembeli') is-invalid @enderror" name="nama_pembeli" value="{{ $user->name }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="row mb-3">
                            <label for="email_pembeli" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email_pembeli" type="email" class="form-control @error('email_pembeli') is-invalid @enderror" name="email_pembeli" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                @error('email_pembeli')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="row mb-3">
                            <label for="no_hp_pembeli" class="col-md-4 col-form-label text-md-right">No. Handphone</label>

                            <div class="col-md-6">
                                <input id="no_hp_pembeli" type="number" class="form-control @error('no_hp_pembeli') is-invalid @enderror" name="no_hp_pembeli" value="{{ $user->no_hp }}" required autocomplete="email" autofocus>

                                @error('no_hp_pembeli')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="row mb-3">
                            <label for="nama_produk" class="col-md-4 col-form-label text-md-right">Product Name</label>

                            <div class="col-md-6">
                                <input id="nama_produk" type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{ $produk->nama_produk }}" required autocomplete="nama_produk" autofocus readonly>

                                @error('nama_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="row mb-3">
                            <label for="jumlah_produk" class="col-md-4 col-form-label text-md-right">Total order</label>

                            <div class="col-md-6">
                                <input id="jumlah_produk" type="number" class="form-control @error('jumlah_produk') is-invalid @enderror" name="jumlah_produk" value="{{ old('jumlah_produk') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="row mb-3">
                            <label for="alamat_pembeli" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="alamat_pembeli" type="text" class="form-control @error('alamat_pembeli') is-invalid @enderror" name="alamat_pembeli" value="{{ old('alamat_pembeli') }}" required autocomplete="alamat_pembeli" autofocus>

                                @error('alamat_pembeli')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="row mb-3">
                            <label for="keterangan_pembeli" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <input id="keterangan_pembeli" type="text" class="form-control @error('keterangan_pembeli') is-invalid @enderror" name="keterangan_pembeli" value="{{ old('keterangan_pembeli') }}" required autocomplete="keterangan_pembeli" autofocus>

                                @error('keterangan_pembeli')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </section>
      <!-- medium modal -->
    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                    <div>
                        <!-- the result to be displayed apply here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- Navbar -->
     @include('partials.footer')
    <!-- End Navbar -->
    </section>
   
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

<!-- @extends('layouts.app') -->


