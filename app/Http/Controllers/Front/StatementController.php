<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Statement;
use Illuminate\View\View;

class StatementController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Statement $statement): View
    {
//        dd($statement);
        return view('front.statement', compact('statement'));
    }

}
