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
                            <label for="inputState">Nama Produk</label>

                            <input type="text" id="nama_produk" name="nama_produk", class="form-control", placeholder="Nama Product">
                        </div>

                        <div class="form-group">
                            <label for="inputState">Harga</label>

                            <input type="number" id="harga_produk" name="harga_produk", class="form-control", placeholder="harga_produk">
                        </div>

                        <div class="form-group">
                            <label for="inputState">Jumlah</label>

                            <input type="number" id="jumlah_produk" name="jumlah_produk", class="form-control", placeholder="jumlah_produk">
                        </div>

                        <div class="form-group ">
                            <label for="inputState">Kategori</label>
                            <select id="kategori_id" name="kategori_id" required class="form-control">
                            <option value="">Pilih Kategori</option>

                                 @foreach($kategori as $item)
                            <option value="{{ $item->id }}">{{ $item->name}}</option>

                            @endforeach
                            </select>
                        </div>
                          <div class="form-group ">
                            <label for="inputState">Sub Kategori</label>
                            <select id="subkategori" name="subkategori" class="form-control">
                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputState">Keterangan</label>

                            <input type="text" id="keterangan_produk" name="keterangan_produk", class="form-control", placeholder="keterangan_produk">
                        </div>

                         <div class="form-group">
                            <label for="inputState">Status Produk</label>

                            <input type="text" id="status_produk" name="status_produk", class="form-control", placeholder="status_produk">
                        </div>

                        <div class="form-group">
                            <label for="inputState">Gambar</label>

                            <input type="file" id="gambar_produk" name="gambar_produk" class="form-control">
                        </div>

                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('addon-script')
 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

         <script>
           $(document).ready(function(){

            $("#kategori_id").on("change",function(){
             const fk = $('#kategori_id').val();

             if (fk) {
                     jQuery.ajax({
                         url: '/api/subcategory/'+fk,
                         type: "GET",
                         dataType: "json",
                         success: function (response) {
                             $('select[name="subkategori"]').empty();
                             $('select[name="subkategori"]').append('<option value="">-- Sub Kategori --</option>');
                             $.each(response, function (key, value) {
                                 console.log(response)
                                 $('select[name="subkategori"]').append('<option value="' + value.id + '">' + value.name + '</option>');
                             });
                         },
                     });
                 } else {
                     $('select[name="subkategori"]').append('<option value="">-- Sub Kategori --</option>');
                 }
             })
            })
         
         </script>
@endpush