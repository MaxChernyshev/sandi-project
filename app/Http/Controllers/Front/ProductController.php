<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function hotMenu(): View
    {
        $menu = Menu::where('name', "Hot")->first();

        $products = Product::where('menu_id', $menu->id)->get();


        return view('front.product.index', compact('products', 'menu'));
    }

    public function frozenMenu(): View
    {
        $menu = Menu::where('name', "Frozen")->first();

        $products = Product::where('menu_id', $menu->id)->get();
//        dd($products);

        return view('front.product.index', compact('products', 'menu'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product): View
    {
//        dd($product);
        return view('front.product.show', compact('product'));

//        dd('product view');
    }

}
