<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('show', 'Y')
            ->orderBy('price', 'DESC')
            ->get();

        return view('web.index', compact('products'));
    }
}
