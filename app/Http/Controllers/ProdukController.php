<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;


class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::join('kategori', 'produk.kategori_id', '=', 'kategori.id')
                        ->select('produk.id', 'produk.kode_produk', 'produk.nama_produk', 'kategori.nama_kategori')
                        ->get();

        return view('produk.index', compact('produks'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'name' => 'required',
            'kategori' => 'required'
        ]);

        Produk::create([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'nama_kategori' => $request->kategori_id
        ]);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'kategori' => 'required'
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update([
            'name' => $request->name,
            'kategori' => $request->kategori
        ]);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus!');
    }

}
