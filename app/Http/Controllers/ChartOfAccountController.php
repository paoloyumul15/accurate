<?php

namespace App\Http\Controllers;

use App\Models\ChartOfAccount;

class ChartOfAccountController extends Controller
{
    public function store()
    {
        $chart = ChartOfAccount::create(request()->all());
    }
}
