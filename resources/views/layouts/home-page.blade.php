<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS 5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap"
      rel="stylesheet"/>

    <title>Home - Tasanesia</title>
  </head>
  <body>
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- End Navbar -->

    <!-- hero -->
    <section class="id">
      <div class="container hero">
        <div class="row no-gutters flex-column-reverse flex-lg-row">
          <div
            class="col-lg-2 mt-sm-4 mt-lg-0"
            style="
              border: 1px solid #bdc3c7;
              border-radius: 5px;
              padding: 10px;
              max-height: 473px;
              overflow: scroll;
              -ms-overflow-style: none;

              overflow-x: hidden;
            "
            id="our-campaign"
          >
            <h3 class="our-campaign">OUR CAMPAIGN</h3>
            <hr />

            <a href="/campaign2" 
              ><h4 class="title-text" >Oriental Plant by Comunity</h4></a
            >

            <p class="p-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry.
            </p>

            <!-- <hr class="ms-auto me-auto" style="max-width: 50%" /> -->

            <a href="/campaign">
              <h4 class="title-text">Halal food goes to america</h4></a
            >
            <p class="p-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry.
            </p>
          </div>
          <div class="col-lg-10">
            <div
              id="carouselExampleIndicators"
              class="carousel slide carousel-custom"
              data-bs-ride="carousel"
            >
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
              </div>
              <div id="home-carrousel-responsive" class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="/assets/img/sexy-pink.jpeg"
                    class="d-block w-100"
                    alt="..."
                  />
                  <div class="carousel-content">
                    <p>Ornamental Plants</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img
                    src="assets/img/halal-food.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                  <div class="carousel-content">
                    <p>Halal Foods</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img
                    src="assets/img/nanas-carrousel-2.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                  <div class="carousel-content">
                    <p>Fresh Fruits</p>
                  </div>
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end hero -->
    <!-- start section 2 -->
    <section>
      <div
        class="container-fluid p-2 my-4 pb-5"
        style="background-color: #f1f2f6; margin-bottom: 100px"
      >
        <div class="container mt-3">
          <div class="row no-gutters">
            <h2
              class="text-center mt-3 mb-4"
              style="font-weight: 700; color: #28a745"
            >
              Our Product Category
            </h2>
            <div
              class="col-lg-2 mt-sm-4 mt-lg-0 text-center"
              style="
                border: 1px solid #bdc3c7;
                border-radius: 10px;
                padding: 10px;
                max-height: 473px;
                overflow: scroll;
                -ms-overflow-style: none;
                overflow-x: hidden;
                background-color: white;
              "
              id="our-campaign"
            >
              <h3 class="our-campaign">OUR PARTNERS</h3>
              <hr />
              <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/skillage.png"
                alt=""
              />
              <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/bale-jentera.png"
                alt=""
              />
              <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/bprs-botani.png"
                alt=""
              />
              <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/lazis-mu.png"
                alt=""
              />
              <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/bio-hutanea.png"
                alt=""
              />
              <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/permata-desa-indonesia.jpeg"
                alt=""
              />
              <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/umsida.png"
                alt=""
              />
              <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/um-kotabumi.png"
                alt=""
              />
              <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/um-lampung.jpeg"
                alt=""
              />
              <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/um-sidoarjo.jpeg"
                alt=""
              />
            </div>
            <div
              class="col-lg-10 horizontal-scrollable"
              style="max-height: 1000px"
            >
              <div class="row mx-2 d-flex" >
                <div class="col-lg-4 col-md-6 p-3">
                  <div class="card" style="width: 18rem;">
                  <a href="{{ url('show-product?kategory_produk=ornamental-plants') }}">
                  <img
                    class="img-fluid img-border"
                    src="/assets/img/sexy-pink.jpeg"
                    alt=""
                    style="max-width: 100%"
                    />
                  </a>
                   <div class="card-body">
                     <h5 class="card-title text-center">Ornamental Plants</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 p-3">
                  <div class="card" style="width: 18rem;">
                  <a href="{{ url('show-product?kategory_produk=halal-food') }}">
                  <img
                    class="img-fluid img-border"
                    src="/assets/img/halal-food.jpg"
                    alt=""
                    style="max-width: 100%"
                    />
                  </a>
                   <div class="card-body">
                     <h5 class="card-title text-center">Halal Foods</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 p-3">
                  <div class="card" style="width: 18rem;">
                  <a href="{{ url('show-product?kategory_produk=fresh-fruit') }}">
                  <img
                    class="img-fluid img-border"
                    src="/assets/img/nanas-carrousel.jpg"
                    alt=""
                    style="max-width: 100%"
                    />
                  </a>
                   <div class="card-body">
                     <h5 class="card-title text-center">Fresh Fruits</h5>
                    </div>
                  </div>
                </div>
            <!-- <div class="col-lg-2 col-md-6 p-3">
                  <img
                    class="img-fluid img-border"
                    src="/assets/img/halal-food-2.jpg"
                    alt=""
                    style="max-width: 100%"
                  />
                  <h6 class="text-wrap mt-2 mb-3" style="text-align: center">
                    Halal Food
                  </h6>
                  <p class="text-wrap p-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec nec nunc ultrices est suscipit ullamcorper id vitae
                    nulla. Proin efficitur nisi vel pulvinar pretium. Quisque eu
                    pretium ipsum. <a href="">Read more</a>
                  </p>
                </div> -->
                <!-- @foreach($products as $product)
            <div class="col-lg-4 mt-md-3">
              <div class="card" style="width: 18rem">
                <img
                src="{{$product['gambar_produk']}}"
                class=" img-fluid card-img-top"
                alt="..."
                style="width: 100%; max-height: 188px"
                />
                <div class="card-body">
                    <h5 class="card-title"><a class="normal-anchor" href="{{ route('detail-product', $product->id) }}">{{$product['nama_produk']}}</a></h5>
                    <div class="row">
                       <div class="col-6">
                         <p style="color: #fbc531">Rp. {{$product['harga_produk']}}</p>
                       </div>
                       <div class="col-6">
                         <p class="text-end">{{$product['status_produk']}}</p>
                       </div>
                    </div>
                </div>
            </div>
        </div>
         @endforeach -->
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section 2 -->
    <!-- section 3 -->
    <section>
      <div class="container-fluid p-2 my-2 pb-5"  style="margin-bottom: 100px">
        <div class="container mt-3">
          <div class="row no-gutters">
          <h2
              class="text-center mt-3 mb-4"
              style="font-weight: 700; color: #28a745"
            >
              Our Product
            </h2>
            @foreach($products as $product)
            @if($loop->index < 9)
            <div class="col-lg-4 mt-md-3">
              <div class="card" style="width: 18rem">
                <img
                src="{{$product['gambar_produk']}}"
                class=" img-fluid card-img-top"
                alt="..."
                style="width: 100%; max-height: 188px"
                />
                <div class="card-body">
                    <h5 class="card-title"><a class="normal-anchor" href="{{ route('detail-product', $product->id) }}">{{$product['nama_produk']}}</a></h5>
                    <div class="row">
                       <div class="col-6">
                         <p style="color: #fbc531">Rp. {{$product['harga_produk']}}</p>
                       </div>
                       <div class="col-6">
                         <p class="text-end">{{$product['status_produk']}}</p>
                       </div>
                    </div>
                </div>
            </div>
        </div>    
            @endif
         @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- end section 3 -->
    <section>
      <div class="container-fluid p-2 my-4 pb-5" style="background-color: #f1f2f6;">
      <div class="container mt-3">
        <div class="row no-gutters">
          <div class="col-lg-2 mt-sm-4 mt-lg-0" id="our-campaign">
            <img
              class="img-fluid adv-border"
              src="/assets/img/nanas-adv.jpg"
              alt=""
            />
            <img
              class="img-fluid adv-border"
              src="/assets/img/plants.jpg"
              alt=""
            />
          </div>
          <div class="col-lg-10">
            <h2
              class="text-center mt-3 mb-4"
              style="font-weight: 700; color: #28a745"
            >
              Community Development Program
            </h2>

            <div class="row">
                <div class="col-lg-6 col-md-6 p-3 col-sm-6 text-center m-0">
                  <img
                    class="img-fluid img-border"
                    src="/assets/img/sexy-pink.jpeg"
                    alt=""
                    style="width: 100%; max-height: 200px"
                  />
                  <h4 class="text-wrap mt-2 mb-3" style="text-align: center">
                    Ornamental Plants by Community
                  </h4>
                  <p class="p-text" style="text-align: start">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec nec nunc ultrices est suscipit ullamcorper id vitae
                    nulla. Proin efficitur nisi vel pulvinar pretium. Quisque eu
                    pretium ipsum. Sed venenatis id turpis et placerat. Morbi
                    vulputate rhoncus magna, eu mattis risus dapibus a. Fusce
                    placerat dictum nulla ac venenatis. Sed dapibus et erat et
                    pharetra. Duis et ultrices lorem. <a href="/campaign2">Read more</a>
                  </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 p-3 text-center">
                  <img
                    class="img-fluid img-border"
                    src="/assets/img/halal-food.jpeg"
                    alt=""
                    style="width: 100%; max-height: 200px"
                  />
                  <h4 class="text-wrap mt-2 mb-3" style="text-align: center">
                    Halal Food goes to America
                  </h4>
                  <p class="p-text" style="text-align: start">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec nec nunc ultrices est suscipit ullamcorper id vitae
                    nulla. Proin efficitur nisi vel pulvinar pretium. Quisque eu
                    pretium ipsum. Sed venenatis id turpis et placerat. Morbi
                    vulputate rhoncus magna, eu mattis risus dapibus a. Fusce
                    placerat dictum nulla ac venenatis. Sed dapibus et erat et
                    pharetra. Duis et ultrices lorem. <a href="/campaign">Read more</a>
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 p-3 col-sm-6 text-center m-0">
                  <img
                    class="img-fluid img-border"
                    src="/assets/img/sexy-pink.jpeg"
                    alt=""
                    style="width: 100%; max-height: 200px"
                  />
                  <h4 class="text-wrap mt-2 mb-3" style="text-align: center">
                    Ornamental Plants by Community
                  </h4>
                  <p class="p-text" style="text-align: start">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec nec nunc ultrices est suscipit ullamcorper id vitae
                    nulla. Proin efficitur nisi vel pulvinar pretium. Quisque eu
                    pretium ipsum. Sed venenatis id turpis et placerat. Morbi
                    vulputate rhoncus magna, eu mattis risus dapibus a. Fusce
                    placerat dictum nulla ac venenatis. Sed dapibus et erat et
                    pharetra. Duis et ultrices lorem. <a href="/campaign2">Read more</a>
                  </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 p-3 text-center">
                  <img
                    class="img-fluid img-border"
                    src="/assets/img/halal-food.jpeg"
                    alt=""
                    style="width: 100%; max-height: 200px"
                  />
                  <h4 class="text-wrap mt-2 mb-3" style="text-align: center">
                    Halal Food goes to America
                  </h4>
                  <p class="p-text" style="text-align: start">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec nec nunc ultrices est suscipit ullamcorper id vitae
                    nulla. Proin efficitur nisi vel pulvinar pretium. Quisque eu
                    pretium ipsum. Sed venenatis id turpis et placerat. Morbi
                    vulputate rhoncus magna, eu mattis risus dapibus a. Fusce
                    placerat dictum nulla ac venenatis. Sed dapibus et erat et
                    pharetra. Duis et ultrices lorem. <a href="/campaign">Read more</a>
                  </p>
                </div>
              </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- Navbar -->
    @include('partials.footer')
    <!-- End Navbar -->
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
</html>
