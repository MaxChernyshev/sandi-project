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
    public function index()
    {
        $categories = Category::with('image')->paginate(2);
//        dd($categories);
        return view('admin.category.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $tableName = (new Category())->getTable(); //get table name in DB

        $imageService = new UploadImageService();
//        dd($imageService);

        $validated = $request->all();

        $category = Category::create($validated);

        $image = $imageService->uploadImage($request->image, $tableName);

//        dd($category->id);

        $category->images()->create([
            'category_id' => $category->id,
            'image_path' => $image
        ]);


//        dd($image);
//        Category::create($validated);

        return redirect()->route('admin.categories.index')->with('success', 'Category added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(CategoryRequest $request): RedirectResponse
    {

        $validated = $request->all();
        if ($validated) {
            Session::put('assa', 'jhhjhj');
        }


//        dd($validated);
//        dump($request->all());
//        dump($request->name);
//        dump($request->description);
//        \Pest\Laravel\session()
//        Session::regenerate($validated);
        return redirect()->route('admin.categories.index')->withSuccess('Changes saved');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
