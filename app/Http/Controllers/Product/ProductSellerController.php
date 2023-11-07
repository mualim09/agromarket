<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Alert;
    
class ProductSellerController extends Controller
{
    public function create(){
        return view('product.create-product');
    }

    public function store(Request $request) {
        
        $request->validate([
            'nama_produk' => 'required|max:255',
            'kategori' => 'required',
            'kondisi' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'deskripsi' => 'required',
            'gambar' => 'image|file|mimes:jpeg,png,jpg,gif,svg'
            
        ]);

        $gambar_product = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('img/gambar_product'), $gambar_product);
        
        $data = [
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'merk' => $request->merk,
            'kondisi' => $request->kondisi,
            'berat' => $request->berat,
            'ukuran' => $request->ukuran,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar_product,
            'created_by' => Auth::user()->id,
        ];
        
        Product::insert($data);
        
        Alert::success('Success!!', 'Berhasil membuat Product');
        return redirect()->back();
    }
    
    public function pupuk()
    {
        $pupuk = Product::where('kategori', 'Pupuk Organik')->get();
        
        $data = [
            'pupuk-all' => $pupuk,
        ];
        
        return view('product.pupuk', $data)->with('data', $data);
    }

    public function bibit()
    {
        return view('product.pembibitan-seller');
    }
    
    public function pestisida()
    {
        return view('product.pembibitan-seller');
    }

    public function perlengkapan()
    {
        return view('product.pembibitan-seller');
    }
}