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
                            <input type="text" id="nama_produk" name="nama_produk", class="form-control", placeholder="Product Name">
                        </div>

                        <div class="form-group">
                            <input type="number" id="harga_produk" name="harga_produk", class="form-control", placeholder="Product Price">
                        </div>

                        <div class="form-group">
                            <input type="number" id="jumlah_produk" name="jumlah_produk", class="form-control", placeholder="Product Total">
                        </div>

                        <!-- <div class="form-group col-md-4">
                            <label for="inputState">Kategori</label>
                            <select id="kategory_produk" name="kategory_produk">
                                <option value="halal-food">halal-food</option>
                                <option value="ornamental-plants">ornamental-plants</option>
                                <option value="fresh-fruit">fresh-fruit</option>
                            </select>
                        </div> -->

                        <div class="form-group">
                            <input type="text" id="kategory_produk" name="kategory_produk", class="form-control", placeholder="Product Category">
                        </div>

                        <div class="form-group">
                            <input type="text" id="keterangan_produk" name="keterangan_produk", class="form-control", placeholder="Product Description">
                        </div>

                         <div class="form-group">
                            <input type="text" id="status_produk" name="status_produk", class="form-control", placeholder="Product Status">
                        </div>

                        <div class="form-group">
                            <input type="file" id="gambar_produk" name="gambar_produk" class="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Save Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection