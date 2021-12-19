<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Kategori;
use Facade\FlareClient\Stacktrace\File;
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
       $kategori = Kategori::where('parent_id',null)->get();

        return view('layouts.product.product-master',compact('kategori'));
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
            'kategori_id' => $request->kategori_id,
            'subkategori_id' => $request->subkategori,
            'keterangan_produk' => $request->keterangan_produk,
            'gambar_produk' => $image,
            'status_produk' => $request->status_produk,
        ]);

        return redirect('create-product')->with('success', 'data berhasil di tambahkan');

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
    public function show(Request $request)
    {
        $data = Product::all();

        if ($request->has('kategory_produk')) {
             $data = $data->where('kategory_produk', $request->kategory_produk);
        }
        // $data->get();

        
       
        // dd($data);
        return view('layouts.menu-product', ['products' => $data]);
    }

    public function show2(Request $request)
    {
        $data = Product::all();

        if ($request->has('kategory_produk')) {
             $data = $data->where('kategory_produk', $request->kategory_produk);
        }
        // $data->get();

        
       
        // dd($data);
        return view('layouts.home-page', ['products' => $data]);
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
        // $data = Product::find($id);

        // // $destination = 'img'.$data->gambar_produk;
        // // if(File::exists($destination))
        // // {
        // //     File::delete();
        // // }

        // // $file = $request->file('gambar_produk');
        // // $extention = $file->getClientOriginalName();
        // // $filename = 

        
        // $data->nama_produk = $request->input('nama_produk');
        // $data->harga_produk = $request->input('harga_produk');
        // $data->jumlah_produk = $request->input('jumlah_produk');
        // $data->keterangan_produk = $request->input('keterangan');
        // $data->status_produk = $request->input('status_produk');    

        // return back('Update berhasil', compact('data'));

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


        return back()->with('update-product', 'data sudah di delete');
    }
}
