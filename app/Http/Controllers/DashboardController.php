<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // Pang display ng product
        $products = Product::orderBy('id', 'DESC')->get();
        return view('dashboard')->with('products', $products);
    }
}
