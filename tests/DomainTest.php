<?php

namespace Tousanco\PhpZaya\Tests;

use Tousanco\PhpZaya\Domain;

class DomainTest extends BaseTestClass
{
    /** @test */
    public function get_domains_list()
    {
        $list = Domain::instance($this->getApiKey())->all();
        $this->assertTrue(isset($list['data']));
        $this->assertTrue(isset($list['links']));
        $this->assertTrue(isset($list['meta']));
        $this->assertEquals($list['meta']['current_page'], 1);

        $list = Domain::instance($this->getApiKey())->all(['page' => 2]);
        $this->assertTrue(isset($list['data']));
        $this->assertTrue(isset($list['links']));
        $this->assertTrue(isset($list['meta']));
        $this->assertEquals($list['meta']['current_page'], 2);
    }

    /** @test */
    public function failed_create_domain_when_name_is_invalid()
    {
        // create test
        $data = ['name' => 'Invalid name'];
        $domain = Domain::instance($this->getApiKey())->create($data);
        $this->assertEquals(422, $domain['status']);
        $this->assertTrue(isset($domain['message']['name']));
    }
}