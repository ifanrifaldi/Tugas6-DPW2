<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ClientProdukController extends Controller {
    function index(){
        $data['list_produk'] = Produk::all();
        return view('home', $data);
    }
    function show(Produk $produk){
        $data['produk'] = $produk;
        return view('detail', $data);
    }
    function prod(){
        $data['list_produk'] = Produk::all();
        return view('product', $data);
    }
}


