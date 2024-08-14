<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Traits\ModelFolder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Services\UploadImageService;
use function Pest\Laravel\delete;

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
        $validated = $request->all();

        $tableName = (new Category())->getTable();

        $oldImage = $category->image->image_path ?? null;

        $imageService = new UploadImageService();

        $returnBack = redirect()->route('admin.categories.index')
            ->with('message', 'Category updated successfully.');

        // 1) update without image changing and image deleting
        if (!array_key_exists('image_delete', $validated) && !array_key_exists('image', $validated)) {

            $category->update($validated);

            return $returnBack;
        }

        // 2) update with image deleting
        if (array_key_exists('image_delete', $validated) && $validated['image_delete'] == true) {
            if ($oldImage != null) {

                $imageService->deleteImage($oldImage);

            }

            $category->image()->delete();

            $category->update($validated);

            return $returnBack;
        }


        // 3) update with image changing
        if (array_key_exists('image', $validated) && !array_key_exists('image_delete', $validated)) {

            if ($category->image != null) {

                $imageService->deleteImage($oldImage);

            }

            $category->image()->delete();

            $category->update($validated);

            $image = $imageService->uploadImage($validated['image'], $tableName);

            $category->image()->create([
                'category_id' => $category->id,
                'image_path' => $image
            ]);

            return $returnBack;
        }
        return redirect()->route('admin.categories.index')
            ->with('success', 'Nothing was changed.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): RedirectResponse
    {
        if ($category->image) {

            $imageService = new UploadImageService();

            $imageService->deleteImage($category->image->image_path);
        }

        $category->delete();

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category deleted successfully.');
    }
}
