<?php

namespace App\Http\Controllers;

use App\Models\ChartOfAccount;

class ChartOfAccountController extends Controller
{
    public function index()
    {
        return ChartOfAccount::all();
    }

    public function show()
    {
        // show a chart of account and where it was used...
    }

    public function store()
    {
        ChartOfAccount::create(request()->all());
    }

    public function update(ChartOfAccount $chartOfAccount)
    {
        $chartOfAccount->update(request()->all());
    }

    public function destroy(ChartOfAccount $chartOfAccount)
    {
        $chartOfAccount->delete();
    }
}
