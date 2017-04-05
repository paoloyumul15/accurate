<?php

namespace Test\Unit;

use App\Models\Company;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CompanyTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function a_company_has_a_current_size()
    {
        $company = factory(Company::class)->create();
        factory(User::class)->create(['company_id' => $company->id]);
        factory(User::class)->create(['company_id' => $company->id]);

        $size = $company->currentSize();

        $this->assertEquals(3, $size);
    }

    /** @test */
    public function a_company_can_have_many_users()
    {
        $company = factory(Company::class)->create();
        factory(User::class)->create(['company_id' => $company->id]);
        factory(User::class)->create(['company_id' => $company->id]);

        $users = $company->users;

        $this->assertInstanceOf(User::class, $users[0]);
    }

    /** @test */
    public function a_company_can_add_a_user()
    {
        $company = factory(Company::class)->create();
        $user = factory(User::class)->create(['company_id' => null]);

        $company->add($user);

        $this->assertEquals(2, $company->currentSize());
    }

    /** @test */
    public function a_company_cannot_exceed_max_size_when_adding_a_user()
    {
        $this->expectException('App\Exceptions\TooManyUsersException');

        $company = factory(Company::class)->create(['max_size' => 1]);
        $user = factory(User::class)->create(['company_id' => null]);

        $company->add($user);
    }

    /** @test */
    public function a_company_can_remove_a_user()
    {
        $company = factory(Company::class)->create();
        $user = factory(User::class)->create(['company_id' => $company->id]);

        $company->remove($user);

        $this->assertEquals(1, $company->currentSize());
    }

    /** @test */
    public function a_company_cannot_remove_the_owner()
    {
        $this->expectException('App\Exceptions\RemoveOwnerException');

        $user = factory(User::class)->create(['company_id' => null]);
        $company = factory(Company::class)->create(['owner_id' => $user->id]);

        $company->remove($user);
    }
}
