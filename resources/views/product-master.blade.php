@extends('master.app-dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Product</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('simpan-product') }}" enctype="multipart/form-data">
                        {{ csrf_field()}}
                    
                        <div class="form-group">
                            <input type="text" id="nama_produk" name="nama_produk", class="form-control", placeholder="Nama Product">
                        </div>

                        <div class="form-group">
                            <input type="number" id="harga_produk" name="harga_produk", class="form-control", placeholder="harga_produk">
                        </div>

                        <div class="form-group">
                            <input type="number" id="jumlah_produk" name="jumlah_produk", class="form-control", placeholder="jumlah_produk">
                        </div>

                        <div class="form-group">
                            <input type="text" id="keterangan_produk" name="keterangan_produk", class="form-control", placeholder="keterangan_produk">
                        </div>

                         <div class="form-group">
                            <input type="text" id="status_produk" name="status_produk", class="form-control", placeholder="status_produk">
                        </div>

                        <div class="form-group">
                            <input type="file" id="gambar_produk" name="gambar_produk" class="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </div>






                        <!-- <div class="row mb-3">
                            <label for="gambar_produk" class="col-md-4 col-form-label text-md-right">Images</label>

                            <div class="col-md-6">
                                <input id="gambar_produk" type="text" class="form-control @error('gambar_produk') is-invalid @enderror" name="gambar_produk" value="{{ old('gambar_produk') }}" required autocomplete="gambar_produk" autofocus>

                                @error('gambar_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama_produk" class="col-md-4 col-form-label text-md-right">Product Name</label>

                            <div class="col-md-6">
                                <input id="nama_produk" type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{ old('nama_produk') }}" required autocomplete="nama_produk" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="harga_produk" class="col-md-4 col-form-label text-md-right">Price</label>

                            <div class="col-md-6">
                                <input id="harga_produk" type="number" class="form-control @error('harga_produk') is-invalid @enderror" name="harga_produk" value="{{ old('harga_produk') }}" required autocomplete="harga_produk">

                                @error('harga_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jumlah_produk" class="col-md-4 col-form-label text-md-right">Stock</label>

                            <div class="col-md-6">
                                <input id="jumlah_produk" type="number" class="form-control @error('jumlah_produk') is-invalid @enderror" name="jumlah_produk" value="{{ old('jumlah_produk') }}" required autocomplete="jumlah_produk  ">

                                @error('jumlah_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="keterangan_produk" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <input id="keterangan_produk" type="text" class="form-control @error('keterangan_produk') is-invalid @enderror" name="keterangan_produk" required autocomplete="keterangan_produk">

                                @error('keterangan_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="status_produk" class="col-md-4 col-form-label text-md-right">Status</label>

                            <div class="col-md-6">
                                <input id="status_produk" type="text" class="form-control" name="status_produk" required autocomplete="status_produk">
                                  @error('status_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                           
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a class="btn btn-success" type="submit" href=""> Create New Product</a>
                            </div>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection