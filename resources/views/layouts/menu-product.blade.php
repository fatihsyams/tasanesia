<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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
    <title>Tasanesia | Product</title>
  </head>
  <body>
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- End Navbar -->
    <section class="id">
      <div class="container hero">
        <div class="col-lg-12">
          <div class="row">
           @foreach($products as $product)
          <div class="col-lg-4 mt-md-3">
            <div class="card" style="width: 18rem">
            <img
            src="{{$product['gambar_produk']}}"
            class="card-img-top"
            alt="..."
            style="width: 100%; height: 77%"
            />
            <div class="card-body">
              <h5 class="card-title"><a class="normal-anchor" href="{{ route('detail-product', $product->id) }}">{{$product['nama_produk']}}</a></h5>
              <div class="row">
              <div class="col-6">
              <p style="color: #fbc531">{{$product['harga_produk']}}</p>
              </div>
              <div class="col-6">
              <p class="text-end">{{$product['status_produk']}}</p>
            </div>

            </div>
        </div>
         @endforeach
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
