<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MegashopController extends Controller
{
    protected $data;

    public function __construct()
    {
        $path = dirname(dirname(dirname(base_path()))) . '/TPs/1src-Route-Blade/data.php';
        if (file_exists($path)) {
            include $path;
            $this->data = compact('config', 'categories', 'products');
        } else {
            $this->data = [
                'config' => [],
                'categories' => [],
                'products' => [],
            ];
        }
    }

    public function index()
    {
        $allProducts = [];
        foreach ($this->data['products'] as $cat => $list) {
            $allProducts = array_merge($allProducts, $list);
        }
        $featured = array_slice($allProducts, 0, 3);

        return view('home', [
            'categories' => $this->data['categories'],
            'featured' => $featured,
        ]);
    }

    public function category($slug)
    {
        $categories = $this->data['categories'];
        $products = [];
        foreach ($categories as $key => $cat) {
            if ($cat['slug'] === $slug) {
                $products = $this->data['products'][$key] ?? [];
                $currentCat = $cat;
                break;
            }
        }
        if (empty($products)) {
            abort(404);
        }
        return view('category', [
            'category' => $currentCat,
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function productDetail($id)
    {
        $found = null;
        foreach ($this->data['products'] as $cat => $list) {
            foreach ($list as $prod) {
                if ($prod['id'] == $id) {
                    $found = $prod;
                    break 2;
                }
            }
        }
        if (!$found) {
            abort(404);
        }
        return view('product', [
            'product' => $found,
            'categories' => $this->data['categories'],
        ]);
    }

    public function cgv()
    {
        return view('cgv', [
            'categories' => $this->data['categories'],
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'categories' => $this->data['categories'],
        ]);
    }
}
