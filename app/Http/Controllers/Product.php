<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function getAllProducts(){
        //Ambil semua produk (bisa difilter berdasarkan ID game).
    }

    

    public function searchProducts() {
        //Cari produk berdasarkan kata kunci di nama item.
    }

    public function getProductById(){
        //Ambil detail produk spesifik berdasarkan ID produk.
    }

    //untuk forward products dari database ke front end, dimana product yang udah ada di database bisa dishow di frontend
}
