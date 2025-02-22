<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreProdukRequest $request)
    {
        // Validasi input
        $request->validate([
            'img_produk' => 'image|mimes:jpeg,jpg,png,webp|max:40960',
            'nama_produk' => 'required|string|max:255',
            'hrg_produk' => 'required|integer',
            'desk_produk' => 'nullable|string|max:255',
        ]);

        // Simpan gambar ke storage
        if ($request->hasFile('img_produk')) {
            $image = $request->file('img_produk');
            $imageName = $image->hashName();
            $image->store('img', 'public');
        } else {
            $imageName = null;
        }

        // Simpan data siswa ke database
        Produk::create([
            'foto_produk' => $imageName,
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->hrg_produk,
            'deskripsi_produk' => $request->desk_produk,
        ]);

        return back()->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Produk::find($id);

        return view('page.ShowProduk', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdukRequest $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        //
    }
}