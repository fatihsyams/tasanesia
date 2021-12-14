@extends('master.app-dashboard')

@section('content')
<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Pembeli</th>
            <th>Email Pembeli</th>
            <th>No Handphone</th>
            <th>Nama Product</th>
            <th>Jumlah Product</th>
            <th>Alamat Pembeli</th>
            <th>Keterangan Pembeli</th>
           
        </tr>
   
    @foreach ($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->nama_pembeli }}</td>
            <td>{{ $order->email_pembeli }}</td>
            <td>{{ $order->no_hp_pembeli }}</td>
            <td>{{ $order->nama_produk }}</td>
            <td>{{ $order->jumlah_produk }}</td>
            <td>{{ $order->alamat_pembeli }}</td>
            <td>{{ $order->keterangan_pembeli }}</td>
            
        </tr>
        @endforeach
         </table>

@endsection