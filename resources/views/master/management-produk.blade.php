@extends('master.app-dashboard')

@section('content')
<div class="container">
    <div class="col">
    <a href="create-product" class="btn btn-success mt-3 mb-5 ">Create Product</a>
    </div>
</div>

<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Gambar Produk</th>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th>Jumlah Produk</th>
            <th>Keterangan Produk</th>
            <th>Status Produk</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td><img
            src="{{$product['gambar_produk']}}"
            class="card-img-top ms-auto"
            alt="..."
            style="width: 80px; height: 30%;"
            /></td>
            <td>{{ $product->nama_produk }}</td>
            <td>{{ $product->harga_produk }}</td>
            <td>{{ $product->jumlah_produk }}</td>
            <td>{{ $product->keterangan_produk }}</td>
            <td>{{ $product->status_produk }}</td>
              <td>
                <form action="{{ route('delete-product', $product->id) }}" method="POST">
                    <a href="cc" class="btn btn-primary">Edit</a>
    
                   
                     {{ csrf_field() }}
                    {{ method_field('DELETE') }} 
                    <button type="submit" class="btn btn-danger">Delete</button>
   
                   
                </form>
            </td>
          
        </tr>
        @endforeach
    </table>
@endsection