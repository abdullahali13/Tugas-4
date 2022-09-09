<?php

namespace App\Http\Controllers;

class HomeController extends Controller{
    function showBase(){
        return view('template-admin.base');
    }

    function showKategori(){
        return view('template-admin.utils.kategori');
    }

    function showPelanggan(){
        return view('template-admin.utils.pelanggan');
    }

    function showProduk(){
        return view('template-admin.utils.produk');
    }

    function showSuplier(){
        return view('template-admin.utils.suplier');
    }

    function showUser(){
        return view('template-admin.utils.user');
    }
}
