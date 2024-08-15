<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StatementRequest;
use App\Models\Statement;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StatementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $statements = Statement::paginate(10);
        return view('admin.statement.index', compact('statements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.statement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StatementRequest $request, Statement $statement): RedirectResponse
    {
        $validated = $request->all();

        Statement::create($validated);

        return redirect()
            ->route('admin.statements.index')
            ->with('success', 'Statement added');
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
    public function edit(Statement $statement): View
    {
        return view('admin.statement.update', compact('statement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StatementRequest $request, Statement $statement): RedirectResponse
    {
        $validated = $request->all();

        $statement->update($validated);

        return redirect()->route('admin.statements.index')
            ->with('message', 'Statement updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statement $statement): RedirectResponse
    {
        $statement->delete();

        return redirect()
            ->route('admin.statements.index')
            ->with('success', 'Statement deleted successfully.');
    }
}
