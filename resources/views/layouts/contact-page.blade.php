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
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <title>Tasanesia | Contact</title>
  </head>
  <body>
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

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5 mt-5">
            <h2 class="heading-section">Contact Form #02</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="wrapper">
              <div class="row no-gutters">
                <div
                  class="
                    col-lg-8 col-md-7
                    order-md-last
                    d-flex
                    align-items-stretch
                  "
                >
                  <div class="contact-wrap w-100 p-md-5 p-4">
                    <h4 class="mb-4">Get in touch</h3>
                    <!-- <div id="form-message-warning" class="mb-4"></div>
                    <div id="form-message-success" class="mb-4">
                      Your message was sent, thank you!
                    </div> -->
                    <form
                      method="POST"
                      id="contactForm"
                      name="contactForm"
                      class="contactForm"
                    >
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="label" for="name" style="font-size: 14px;">Full Name</label>
                            <input
                              type="text"
                              class="form-control"
                              name="name"
                              id="name"
                              placeholder="Name"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="label" for="email" style="font-size: 14px;"
                              >Email Address</label
                            >
                            <input
                              type="email"
                              class="form-control"
                              name="email"
                              id="email"
                              placeholder="Email"
                            />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="label" for="subject" style="font-size: 14px;">Subject</label>
                            <input
                              type="text"
                              class="form-control"
                              name="subject"
                              id="subject"
                              placeholder="Subject"
                            />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="label" for="#" style="font-size: 14px;">Message</label>
                            <textarea
                              name="message"
                              class="form-control"
                              id="message"
                              cols="30"
                              rows="4"
                              placeholder="Message"
                            ></textarea>
                          </div>
                        </div>
                        <div class="col-md-12 mt-3">
                          <div class="form-group">
                            <input
                              type="submit"
                              value="Send Message"
                              class="btn btn-primary"
                            />
                            <div class="submitting"></div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-4 col-md-5 d-flex align-items-stretch" style="color: white;">
                  <div class="info-wrap bg-success w-100 p-md-5 p-4" style="border-radius: 20px;">
                    <h4>Let's get in touch</h3>
                    <p class="mb-4" style="font-size: 14px;">
                      We're open for any suggestion or just to have a chat
                    </p>
                    <div class="dbox w-100 d-flex align-items-start">
                      <div
                        class="
                          icon
                          d-flex
                          align-items-center
                          justify-content-center"
                      >
                        <span class="fa fa-map-marker me-2"></span>
                      </div>
                      <div class="text pl-3" style="font-size: 14px;">
                        <p>
                          <span>Address:</span> Jl. Rambutan No. 1D
                        </p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div
                        class="
                          icon
                          d-flex
                          align-items-center
                          justify-content-center
                        "
                      >
                        <span class="fa fa-phone me-2"></span>
                      </div>
                      <div class="text pl-3" style="font-size: 14px;">
                        <p>
                          <span>Phone: 081908078212</span>
                          <a href="tel://1234567920"></a>
                        </p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div
                        class="
                          icon
                          d-flex
                          align-items-center
                          justify-content-center
                        "
                      >
                        <span class="fa fa-paper-plane me-2"></span>
                      </div>
                      <div class="text pl-3" style="font-size: 14px;">
                        <p>
                          <span>Email: info@tasanesia.com</span>
                          <a href="mailto:info@yoursite.com"></a>
                        </p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div
                        class="
                          icon
                          d-flex
                          align-items-center
                          justify-content-center
                        "
                      >
                        <span class="fa fa-globe me-2"></span>
                      </div>
                      <div class="text pl-3" style="font-size: 14px;">
                        <p><span>Website</span> <a href="#">tasanesia.com</a></p>
                      </div>
                    </div>
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
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
