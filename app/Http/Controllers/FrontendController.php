<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\kategori;
class FrontendController extends Controller
{
    public function index()
    {
        return view ('Template.guest');
    }
    public function barang()
    {
        $barangs = barang::all();
        return view ('Barang.index',compact('barangs')); 
    }
    public function produk()
    {
        $barangs = barang::all();
        return view ('Barang.index',compact('barangs'));
    }
}
