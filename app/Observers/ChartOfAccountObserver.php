<?php

namespace App\Observers;

use App\Models\ChartOfAccount;

class ChartOfAccountObserver
{
    public function saving(ChartOfAccount $chartOfAccount)
    {
        $chartOfAccount->id = companyId() . '-' . $chartOfAccount->id;
    }
}
