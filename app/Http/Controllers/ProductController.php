<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getIndex() {
        $products = Products::all();
        return view('index', ['products' => $products]);
    }
}
