<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function food() {
        return view('products.food-beverage');
    }

    public function beauty() {
        return view('products.beauty-health');
    }

    public function home() {
        return view('products.home-care');
    }

    public function baby() {
        return view('products.baby-kid');
    }
}
