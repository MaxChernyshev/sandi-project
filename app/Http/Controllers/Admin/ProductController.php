<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Instruction;
use App\Models\Product;
use App\Services\UploadImageService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Traits\ModelFolder;

class ProductController extends Controller
{
    use ModelFolder;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        if ($request->has('name')) {
            $products = Product::where('name', 'like', '%' . $request->get('name') . '%')
                ->paginate(20);
        } else {
            $products = Product::paginate(10);
        }
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $ingredients = Ingredient::pluck('name', 'id')->toArray();
        $instructions = Instruction::pluck('title', 'id')->toArray();
        $categories = Category::pluck('name', 'id')->toArray();
        return view('admin.product.create', compact('ingredients', 'instructions', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request): RedirectResponse
    {
        $tableName = (new Product())->getTable();

        $imageService = new UploadImageService();

        $validated = $request->all();

        $product = Product::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'category_id' => $validated['category_id'],
            'instruction_id' => $validated['instruction_id'],
            'weight' => $validated['weight'],
            'quantity' => $validated['quantity'],
        ]);

        // Attach the selected ingredients to the product
        $product->ingredients()->attach($validated['ingredients']);

        if (array_key_exists('image', $validated)) {

            $image = $imageService->uploadImage($validated['image'], $tableName);

            $product->image()->create([
                'product_id' => $product->id,
                'image_path' => $image
            ]);
        }

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Product added');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): View
    {
        return view('admin.product.update', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        $validated = $request->all();

        $product->update($validated);

        return redirect()->route('admin.products.index')
            ->with('message', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        if ($product->image) {

            $imageService = new UploadImageService();

            $imageService->deleteImage($product->image->image_path);
        }

        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Product deleted successfully.');
    }
}
