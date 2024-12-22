<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\ProductsImport;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
//use Maatwebsite\Excel\Excel;
use Excel;

class ProductImportController extends Controller
{
    public function importProducts(Request $request): RedirectResponse
    {
        Excel::import(new ProductsImport(), $request->file('file'));

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Products Imported successfully.');
    }

    public function importView(): View
    {
        return view('admin.product.import');
    }
}
