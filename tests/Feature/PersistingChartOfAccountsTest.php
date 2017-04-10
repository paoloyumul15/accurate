<?php

namespace Tests\Feature;

use App\Models\ChartOfAccount;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use function subDomain;
use Tests\TestCase;

class PersistingChartOfAccountsTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function an_authenticated_user_can_add_a_chart_of_account()
    {
        $user = $this->signIn();
        $chart_of_account = make(ChartOfAccount::class, [
            'id' => '12345',
            'company_id' => $user->company_id,
        ])->toArray();

        $this->post(subDomain('/api/chart-of-accounts'), $chart_of_account);

        $this->assertDatabaseHas('chart_of_accounts', ['id' => $user->company_id . '-12345']);
    }
}
