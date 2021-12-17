@extends('master.app-dashboard')

@section('content')
<table class="table table-bordered">
        <tr>
            <th>No. Order</th>
            <th>Buyer ID</th>
            <th>Buyer Name</th>
            <th>Buyer Email</th>
            <th>Handphone No.</th>
            <th>Product Name</th>
            <th>Product Total</th>
            <th>Buyer Address</th>
            <th>Buyer Description</th>
           
        </tr>
   
    @foreach ($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $user->id }}</td>
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