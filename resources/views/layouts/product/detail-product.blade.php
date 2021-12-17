<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>{{ $data->nama_produk }}</title>
  </head>
  <body>
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- End Navbar -->
    <section class="id">
      <div class="container hero">
        <div class="row">
          <div class="col-lg-6">
            <img
              src=" {{ asset($data['gambar_produk']) }}"
              alt=""
              style="width: 100%; border-radius: 10px"
            />
          </div>
          <div class="col-lg-6 mt-5">
            <h2 style="color: #28a745">{{ $data->nama_produk }}</h2>
            <p class="mt-4">Stock : {{ $data->jumlah_produk }}</p>
            <p>Price : Rp. {{ $data->harga_produk }}</p>
            <p>Category : {{ $data->status_produk }}</p>

            <a href="{{url('order?produk_id='.$data->id)}}" class="btn" style="background-color: #28a745; color:white" >Order Now</a>
          </div>
          <h2 style="color: #28a745" class="mt-4">Description</h2>
          <hr style="width: 13%;" class="ms-3">
          <p class="mt-2">{{ $data->keterangan_produk }}</p>
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
