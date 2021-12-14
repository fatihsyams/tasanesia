<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- my css -->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="auth-pembina.css">
    <!-- font awesome -->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

    <title>Form Pembina</title>
  </head>
  <body>
    <div class="main">
        <!-- Navbar -->
        @include('partials.navbar')
    <!-- <nav
    class="navbar navbar-expand-lg navbar-light fixed-top p-3"
    style="background-color: white"
  >
    <div class="container">
      <a class="navbar-brand" href="/home-page.html">Tasanesia | Form  Pembina</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-auto">
          <li class="nav-item">
            <a class="nav-link p-text" href="/home-page.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-text" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-text" href="#">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-text" href="/our-campaign-menu.html">Our Campaign</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-text menu-contact-us active" aria-current="page">Contact Us</a>
          </li>
        </ul>

        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="login.html" class="nav-link p-text account-auth-login">Login</a>
          </li>
          <li class="nav-item">
            <a href="register.html" class="nav-link p-text account-auth-register text-white">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->
  <!-- End Navbar -->
        
        <!-- form -->
        <div class="content">
            <div class="container ">
                <div class="card" style="width: 40rem;">
                  <div class="card-title">
                    <a class="btn" href="home-page.html"  type="close"><i class="far fa-times-circle"></i></a>
                  </div>
                    <div class="card-body">
                        <!--  -->
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text1">Form Pembina</h4>
                            </div>
                        </div>
                        <!--  -->
                        <div class="row">
                          <div class="col-6">
                            <div class="mb-3" >
                              <label for="exampleFormControlInput1" class="form-label"></label>
                              <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
                            </div>
                            <div class="mb-3" style="margin-top: -17px !important;">
                              <label for="exampleFormControlInput1" class="form-label"></label>
                              <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="Alamat">
                            </div>
                           <div class="mb-3" style="margin-top: -17px !important;">
                            <label for="exampleFormControlInput1" class="form-label"></label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="No. Telp">
                            </div>
                            <div class="mb-3" style="margin-top: -17px !important;">
                            <label for="exampleFormControlInput1" class="form-label"></label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                            </div>
                            <div class="mb-3" style="margin-top: -17px !important;">
                              <label for="exampleFormControlInput1" class="form-label"></label>
                              <input type="Institusi" class="form-control" id="exampleFormControlInput1" placeholder="Institusi Pembina">
                            </div>
                            <div class="mb-3" style="margin-top: -17px !important;">
                              <label for="exampleFormControlInput1" class="form-label"></label>
                              <input type="Institusi" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Pedamping">
                            </div>
                            <div class="mb-3" style="margin-top: -17px !important;">
                              <label for="exampleFormControlInput1" class="form-label"></label>
                              <input type="Institusi" class="form-control" id="exampleFormControlInput1" placeholder="Catatan Perkembangan">
                            </div>
                          </div>
                          <!--  -->
                          <div class="col-6">
                            <div class="mb-3" style="margin-top: -17px !important;">
                              <label for="exampleFormControlInput1" class="form-label">Daerah Binaan</label>
                              <input type="input" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Kecamatan">
                              <input type="input" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Kabupaten">
                              <input type="input" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Provinsi">
                            </div>
                            <div class="mb-3" style="margin-top: -17px !important;">
                              <label for="exampleFormControlInput1" class="form-label">Nama Nursery</label>
                              <input type="input" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Pull Data Nursery">
                            </div>
                          
                            <div class="mb-3" style="margin-top: -17px !important;">
                              <label for="exampleFormControlInput1" class="form-label">Jumlah ZISWAF</label>
                              <input type="input" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Infak">
                              <input type="input" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Sodaqoh">
                              <input type="input" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Zakat">
                            </div>
                          </div>
                        </div>
                        <!--  -->
                        <a class="btn" href="home-page.html" style=" color: white; background-color: #28a745; font-size: 15px; width: 100%;" type="submit">Send</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
    
    
  </body>
</html>