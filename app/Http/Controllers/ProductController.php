<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('master.management-produk', ['products' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.product.product-master');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'gambar_produk' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $file_name = $request->gambar_produk->getClientOriginalName();
        $image = $request->gambar_produk->move('img', $file_name);

        Product::create([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'jumlah_produk' => $request->jumlah_produk,
            'keterangan_produk' => $request->keterangan_produk,
            'gambar_produk' => $image,
            'status_produk' => $request->status_produk,
        ]);

        return redirect('create-product')->with('berhasil', 'data berhasil di tambahkan');

    //   $data = Product::create($request->all());
    //   if($request->hasFile('gambar_produk')) {
    //       $request->file('gambar_produk')->move('img/', $request->file('gambar_produk')->getClientOriginalName());
    //       $data->image_produk = $request->file('produk_images')->getClientOriginalName();
    //       $data->save();
    //   }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {   
        $data = Product::all();
        return view('layouts.menu-product', ['products' => $data]);
    }

    public function detail($id)
    {
       $data = Product::find($id);
    //    dd($data);
       return view('layouts.product.detail-product', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        // dd($data);
        return view('layouts.product.edit-product', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data = Product::find($id);
       $data->delete();


        return back()->with('product_delete', 'data sudah di delete');
    }
}
