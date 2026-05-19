<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class store extends Controller
{
    //
    public function index()
    {
        $categories = Category::with('products')->get();
        return view('store', compact('categories'));
    }
    public function show(Category $category)
    {
        $products = $category->products;
        return view('category', compact('category', 'products'));
    }
}
