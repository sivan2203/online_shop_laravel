<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('index', compact('products'));
    }

    public function categories(){
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code){
        $category = Category::where('code', $code)->first();
        $products = Product::where('category_id', $category->id)->get();
        return view('category', compact('category', 'products'));
    }
    public function product($category, $product = null){
        return view('product', ['product' => $product]);
    }

    public function basket(){
        return view('basket');
    }

    public function basketPlace(){
        return view('order');
    }

}
