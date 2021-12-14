@extends('master.app-dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Product</div>

                <div class="card-body">
                    <form method="PATCH" action="{{ url('update-product/' .$data->id) }}" enctype="multipart/form-data">
                        {{ csrf_field()}}
                    
                        <div class="form-group">
                            <input type="text" id="nama_produk" name="nama_produk", class="form-control", value="{{ $data->nama_produk }}">
                        </div>

                        <div class="form-group">
                            <input type="number" id="harga_produk" name="harga_produk", class="form-control", value="{{ $data->harga_produk }}">
                        </div>

                        <div class="form-group">
                            <input type="number" id="jumlah_produk" name="jumlah_produk", class="form-control", value="{{ $data->jumlah_produk }}">
                        </div>

                        <div class="form-group">
                            <input type="text" id="keterangan_produk" name="keterangan_produk", class="form-control", value="{{ $data->keterangan_produk }}">
                        </div>

                         <div class="form-group">
                            <input type="text" id="status_produk" name="status_produk", class="form-control", value="{{ $data->status_produk }}">
                        </div>

                        <img src=" {{ asset($data['gambar_produk']) }}" class="card-img-top ms-auto" alt="..." style="width: 80px; height: 30%;"/>

                        <div class="form-group">
                            <input type="file" id="gambar_produk" name="gambar_produk" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection