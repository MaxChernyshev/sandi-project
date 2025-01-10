<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Instruction;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $instructions = Instruction::all();
        return view('front.instructions.index', compact('instructions'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Instruction $instruction): View
    {
        return view('front.instructions.show', compact('instruction'));
    }

}
