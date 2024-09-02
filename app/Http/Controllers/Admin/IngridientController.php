<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\IngridientRequest;
use App\Models\Ingridient;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IngridientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        if ($request->has('name')) {
            $ingridients = Ingridient::where('name', 'like', '%' . $request->get('name') . '%')
                ->paginate(20);
        } else {
            $ingridients = Ingridient::paginate(20);
        }

        return view('admin.ingridient.index', compact('ingridients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.ingridient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IngridientRequest $request): RedirectResponse
    {
        $validated = $request->all();

        Ingridient::create($validated);

        return redirect()
            ->route('admin.ingridients.index')
            ->with('success', 'ingridient added');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingridient $ingridient): View
    {
        return view('admin.ingridient.update', compact('ingridient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IngridientRequest $request, Ingridient $ingridient): RedirectResponse
    {
        $validated = $request->all();

        $ingridient->update($validated);

        return redirect()->route('admin.ingridients.index')
            ->with('message', 'ingridient updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingridient $ingridient): RedirectResponse
    {
        $ingridient->delete();

        return redirect()
            ->route('admin.ingridients.index')
            ->with('success', 'Ingridient deleted successfully.');
    }
}
