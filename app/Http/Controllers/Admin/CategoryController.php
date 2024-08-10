<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Traits\ModelFolder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;
use App\Services\UploadImageService;

class CategoryController extends Controller
{
    use ModelFolder;

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $categories = Category::with('image')->paginate(10);

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
        $tableName = (new Category())->getTable();

        $imageService = new UploadImageService();

        $validated = $request->all();

        $category = Category::create($validated);

        if (array_key_exists('image', $validated)) {

            $image = $imageService->uploadImage($request->image, $tableName);

            $category->image()->create([
                'category_id' => $category->id,
                'image_path' => $image
            ]);
        }

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category added');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): View
    {
        return view('admin.category.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        $tableName = (new Category())->getTable();

        $imageService = new UploadImageService();

        $validated = $request->all();

        $category->update($validated);

        if (array_key_exists('image', $validated)) {

            $image = $imageService->updateImage($request->image, $tableName);

            $category->image()->delete();

            $category->image()->create([
                'category_id' => $category->id,
                'image_path' => $image
            ]);
        }

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category deleted successfully.');
    }
}
