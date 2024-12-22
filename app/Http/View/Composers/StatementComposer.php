<?php

namespace App\Http\View\Composers;

use App\Models\Statement;
use Illuminate\View\View;

class StatementComposer
{
    public function compose(View $view)
    {
        // Pass data to view
        $statements = Statement::all();
        $view->with('statements', $statements);
    }
}

