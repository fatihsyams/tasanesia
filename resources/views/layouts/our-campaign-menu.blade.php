<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Campaign</title>

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
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- End Navbar -->
    <section>
      <div class="container-fluid">
        <div class="container hero">
          <div class="row no-gutters">
            <div
              class="col-lg-2 mt-sm-4 mt-lg-0 fixed-top"
              id="our-campaign"
              style="top: 80px; left: 50px; z-index: -1"
            >
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
            <div class="col-lg-10 offset-2">
              <h2
                class="text-center mt-3 mb-4"
                style="font-weight: 700; color: #28a745"
              >
                Our Campaign
              </h2>

              <div class="row">
                <div class="col-lg-6 col-md-6 p-3 col-sm-6 text-center m-0">
                  <img
                    class="img-fluid img-border"
                    src="/assets/agro.jfif"
                    alt=""
                    style="width: 100%"
                  />
                  <h4 class="text-wrap mt-2 mb-3" style="text-align: center">
                    Ornamental Plants
                  </h4>
                  <p class="p-text" style="text-align: start">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec nec nunc ultrices est suscipit ullamcorper id vitae
                    nulla. Proin efficitur nisi vel pulvinar pretium. Quisque eu
                    pretium ipsum. Sed venenatis id turpis et placerat. Morbi
                    vulputate rhoncus magna, eu mattis risus dapibus a. Fusce
                    placerat dictum nulla ac venenatis. Sed dapibus et erat et
                    pharetra. Duis et ultrices lorem. <a href="">Read more</a>
                  </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 p-3 text-center">
                  <img
                    class="img-fluid img-border"
                    src="/assets/agro.jfif"
                    alt=""
                    style="width: 100%"
                  />
                  <h4 class="text-wrap mt-2 mb-3" style="text-align: center">
                    Ornamental Plants
                  </h4>
                  <p class="p-text" style="text-align: start">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec nec nunc ultrices est suscipit ullamcorper id vitae
                    nulla. Proin efficitur nisi vel pulvinar pretium. Quisque eu
                    pretium ipsum. Sed venenatis id turpis et placerat. Morbi
                    vulputate rhoncus magna, eu mattis risus dapibus a. Fusce
                    placerat dictum nulla ac venenatis. Sed dapibus et erat et
                    pharetra. Duis et ultrices lorem. <a href="">Read more</a>
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 p-3 col-sm-6 text-center">
                  <img
                    class="img-fluid img-border"
                    src="/assets/agro.jfif"
                    alt=""
                    style="width: 100%"
                  />
                  <h4 class="text-wrap mt-2 mb-3" style="text-align: center">
                    Ornamental Plants
                  </h4>
                  <p class="p-text" style="text-align: start">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec nec nunc ultrices est suscipit ullamcorper id vitae
                    nulla. Proin efficitur nisi vel pulvinar pretium. Quisque eu
                    pretium ipsum. Sed venenatis id turpis et placerat. Morbi
                    vulputate rhoncus magna, eu mattis risus dapibus a. Fusce
                    placerat dictum nulla ac venenatis. Sed dapibus et erat et
                    pharetra. Duis et ultrices lorem. <a href="">Read more</a>
                  </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 p-3 text-center">
                  <img
                    class="img-fluid img-border"
                    src="/assets/agro.jfif"
                    alt=""
                    style="width: 100%"
                  />
                  <h4 class="text-wrap mt-2 mb-3" style="text-align: center">
                    Ornamental Plants
                  </h4>
                  <p class="p-text" style="text-align: start">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec nec nunc ultrices est suscipit ullamcorper id vitae
                    nulla. Proin efficitur nisi vel pulvinar pretium. Quisque eu
                    pretium ipsum. Sed venenatis id turpis et placerat. Morbi
                    vulputate rhoncus magna, eu mattis risus dapibus a. Fusce
                    placerat dictum nulla ac venenatis. Sed dapibus et erat et
                    pharetra. Duis et ultrices lorem. <a href="">Read more</a>
                  </p>
                </div>
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
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html>
