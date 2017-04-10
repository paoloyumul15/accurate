<?php

namespace Tests\Unit;

use App\Models\ChartOfAccount;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ChartOfAccountTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_can_return_the_raw_id()
    {
        $user = $this->signIn();
        $chartOfAccount = create(ChartOfAccount::class, [
            'id' => 'COS-443',
            'company_id' => $user->company_id,
        ]);

        $rawId = $chartOfAccount->rawId();

        $this->assertEquals('COS-443', $rawId);
    }
}
