<?php

namespace Tousanco\PhpZaya\Tests;

use Tousanco\PhpZaya\Account;

class AccountTest extends BaseTestClass
{
    /** @test */
    public function get_account_details()
    {
        $account = Account::instance($this->getApiKey())->details();
        $this->assertEquals(200, $account['status']);
        $this->assertTrue(isset($account['data']));
    }
}