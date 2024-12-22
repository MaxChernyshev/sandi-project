<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('front.category.index', compact('categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category, Product $products)
    {
        $category = Category::where('id', $category->id)->first();

        $products = Product::where('category_id', $category->id)->get();

        dd($products);

        return view('front.category.show', compact('category'));
    }
}
