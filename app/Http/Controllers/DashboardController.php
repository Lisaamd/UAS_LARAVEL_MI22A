<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Tambahkan ini
use App\Models\Produk;
use App\Models\Kategori;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Ambil data user yang sedang login
        $produk = Produk::count(); // Hitung jumlah produk
        $kategori = Kategori::count(); // Hitung jumlah kategori

        return view('dashboard', compact('user', 'produk', 'kategori'));
    }


}
