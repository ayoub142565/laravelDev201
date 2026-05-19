<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class store extends Controller
{
    //
    public function all()
    {
        $allproducts = Product::with('categories')->get();
        return view('allproducts', compact('allproducts'));
    }
    
    public function show(Category $category)
    {
        $products = $category->products;
        return view('category', compact('category', 'products'));
    }
}
