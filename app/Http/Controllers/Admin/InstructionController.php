<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InstructionRequest;
use App\Models\Instruction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $instructions = Instruction::paginate(10);

        return view('admin.instruction.index', compact('instructions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.instruction.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InstructionRequest $request): RedirectResponse
    {
        $validated = $request->all();

        Instruction::create($validated);

        return redirect()
            ->route('admin.instructions.index')
            ->with('success', 'Instruction added');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instruction $instruction): View
    {
        return view('admin.instruction.update', compact('instruction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InstructionRequest $request, Instruction $instruction): RedirectResponse
    {
        $validated = $request->all();

        $instruction->update($validated);

        return redirect()->route('admin.instructions.index')
            ->with('message', 'Instruction updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instruction $instruction): RedirectResponse
    {
        $instruction->delete();

        return redirect()
            ->route('admin.instructions.index')
            ->with('success', 'Instruction deleted successfully.');
    }
}
