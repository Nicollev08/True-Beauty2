<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function index()
    {
    $products = Product::all();
    return view('admin.crudproducts.index', compact('products'));
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'precio' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $product = new Product($request->except('image'));
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images');
            $product->image = 'product_images/' . basename($imagePath);
        }
    
        $product->save();
    
        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }
    
    public function show(Product $product)
    {
        //
    }

    
    public function edit(Product $product)
    {
        return view('admin.crudproducts.index', compact('product'));
    }

    
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'precio' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        
        $product->name = $request->input('name');
        $product->precio = $request->input('precio');
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images');
            $product->image = 'product_images/' . basename($imagePath);
        }
    
        $product->save();
    
        return redirect()->route('products.index')->with('success', 'Producto actualizado exitosamente.');
    }

   
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
