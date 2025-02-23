<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $produk = Produk::latest()->paginate(12);

        return view('dashboard.userDashboard', compact('produk'));
    }

    public function adminHome()
    {
        $produk = Produk::latest()->paginate(12);

        return view('dashboard.adminDashboard', [
            'produk' => $produk
        ]);
    }
}