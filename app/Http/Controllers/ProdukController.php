<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {

        return view('admin.dashboard', ['type_menu' => 'dashboard']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = produk::all();

        return view('admin.produk', ['type_menu' => 'daftar_produk', 'produks' => $produks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'gambar_produk' => 'required|file|mimes:png,jpg',
            'harga_jual' => 'required|numeric',
            'biaya_pembuatan' => 'required|numeric',
        ]);

        $gambar_produk = $request->file('gambar_produk')->store('gambar_produk');

        try {
            produk::create([
                'nama_produk' => $validate['nama_produk'],
                'deskripsi_produk' => $validate['deskripsi_produk'],
                'gambar_produk' => $gambar_produk,
                'harga_jual' => $validate['harga_jual'],
                'biaya_pembuatan' => $validate['biaya_pembuatan'],
            ]);

            return redirect()->route('produk.index');
        } catch (\Throwable $th) {

            return redirect()->route('produk.index');
        }

        // dd($validate['nama_produk']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produk = produk::findOrFail($id);

        $detailProduk = [
            'nama_produk' => $produk->nama_produk,
            'deskripsi_produk' => $produk->deskripsi_produk,
            'gambar_produk' => $produk->gambar_produk,
            'harga_jual' => number_format($produk->harga_jual, 0, ',', '.'),
            'biaya_pembuatan' => number_format($produk->biaya_pembuatan, 0, ',', '.'),
        ];

        return response()->json($detailProduk);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = produk::find($id);

        $produk->delete();
        
        Storage::delete($produk->gambar_produk);

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil dihapus!'
        ]);
    }
}
