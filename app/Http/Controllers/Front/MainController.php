<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('front.index', compact('categories'));
    }

    /**
     * Display a view.
     */
    public function contact(): View
    {
        return view('front.contacts');
    }


}
