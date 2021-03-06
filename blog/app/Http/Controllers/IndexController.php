<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;

class IndexController extends Controller {

    public function index() {
        $products = Product::orderBy('created_at', 'asc')
                ->get();
        return view('products.index', [
            'products' => $products,
        ]);
    }

    public function show(Product $product) {
        return view('products.show',[
            'product'=>$product,
            ]);
    }

}
