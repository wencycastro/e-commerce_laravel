<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {

        $query = $request->input('search');
        // dd($query);
        
        // Fetch products based on the search query
        $products = Product::when($query, function($queryBuilder) use ($query) {
            return $queryBuilder->where('name', 'like', "%{$query}%")
                                ->orWhere('description', 'like', "%{$query}%");
        })->get();
        
        return view('dashboard', compact('products'));  
    }

public function create()
{
    return view('products.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|url',
    ]);

    Product::create([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'image' => $request->input('image'),
    ]);

    // Redirect back to the dashboard with a success message
    return redirect()->route('dashboard')->with('success', 'Product created successfully!');
}

public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('products.edit', compact('product'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|url',
    ]);

    $product = Product::findOrFail($id);
    $product->update([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'image' => $request->input('image'),
    ]);

    // Redirect back to the dashboard with a success message
    return redirect()->route('dashboard')->with('success', 'Product updated successfully!');
}

public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    // Redirect back to the dashboard with a success message
    return redirect()->route('dashboard')->with('success', 'Product deleted successfully!');
}

}
