<?php

namespace Tests\Feature;

use App\Models\ChartOfAccount;
use function subDomain;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewingChartOfAccountsTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function an_authenticated_user_can_view_all_chart_of_accounts()
    {
        $user = $this->signIn();
        create(ChartOfAccount::class, ['company_id' => $user->company_id]);
        create(ChartOfAccount::class, ['company_id' => $user->company_id]);
        create(ChartOfAccount::class, ['company_id' => $user->company_id]);

        $response = $this->get(subDomain('/api/chart-of-accounts'));

        $response->assertStatus(200);
    }
}
