@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Order</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('order-product') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nama_pembeli" class="col-md-4 col-form-label text-md-right">Nama</label>

                            <div class="col-md-6">
                                <input id="nama_pembeli" type="text" class="form-control @error('nama_pembeli') is-invalid @enderror" name="nama_pembeli" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="email_pembeli" type="email" class="form-control @error('email_pembeli') is-invalid @enderror" name="email_pembeli" value="{{ old('email_pembeli') }}" required autocomplete="email" autofocus>

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
                                <input id="no_hp_pembeli" type="number" class="form-control @error('no_hp_pembeli') is-invalid @enderror" name="no_hp_pembeli" value="{{ old('no_hp_pembeli') }}" required autocomplete="email" autofocus>

                                @error('no_hp_pembeli')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="row mb-3">
                            <label for="nama_produk" class="col-md-4 col-form-label text-md-right">Nama Produk</label>

                            <div class="col-md-6">
                                <input id="nama_produk" type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{ old('nama_produk') }}" required autocomplete="nama_produk" autofocus>

                                @error('nama_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="row mb-3">
                            <label for="jumlah_produk" class="col-md-4 col-form-label text-md-right">Jumlah</label>

                            <div class="col-md-6">
                                <input id="jumlah_produk" type="text" class="form-control @error('jumlah_produk') is-invalid @enderror" name="jumlah_produk" value="{{ old('jumlah_produk') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="row mb-3">
                            <label for="alamat_pembeli" class="col-md-4 col-form-label text-md-right">Alamat</label>

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
                            <label for="keterangan_pembeli" class="col-md-4 col-form-label text-md-right">Keterangan</label>

                            <div class="col-md-6">
                                <input id="keterangan_pembeli" type="text" class="form-control @error('keterangan_pembeli') is-invalid @enderror" name="keterangan_pembeli" value="{{ old('keterangan_pembeli') }}" required autocomplete="keterangan_pembeli" autofocus>

                                @error('keterangan_pembeli')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group justify-content-end">
                            <button type="submit" class="btn btn-success">Order</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
