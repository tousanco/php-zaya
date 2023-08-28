<?php

namespace Tousanco\PhpZaya\Tests;

use Tousanco\PhpZaya\Link;

class LinkTest extends BaseTestClass
{
    /** @test */
    public function get_links_list()
    {
        $list = Link::instance($this->getApiKey())->all();
        $this->assertTrue(isset($list['data']));
        $this->assertTrue(isset($list['links']));
        $this->assertTrue(isset($list['meta']));
        $this->assertEquals($list['meta']['current_page'], 1);

        $list = Link::instance($this->getApiKey())->all(['page' => 2]);
        $this->assertTrue(isset($list['data']));
        $this->assertTrue(isset($list['links']));
        $this->assertTrue(isset($list['meta']));
        $this->assertEquals($list['meta']['current_page'], 2);
    }

    /** @test */
    public function crud_actions_link()
    {
        // create test
        $url = 'https://google.com';
        $link = Link::instance($this->getApiKey())->create($url);
        $this->assertEquals(200, $link['status']);
        $this->assertEquals($url, $link['data']['url']);

        // details test
        $details = Link::instance($this->getApiKey())->details($link['data']['id']);
        $this->assertEquals(200, $details['status']);
        $this->assertEquals($link['data'], $details['data']);

        // update test
        $newUrl = 'https://yahoo.com';
        $updated = Link::instance($this->getApiKey())->update($link['data']['id'], ['url' => $newUrl]);
        $this->assertEquals(200, $updated['status']);
        $this->assertEquals($newUrl, $updated['data']['url']);

        // delete test
        $deleted = Link::instance($this->getApiKey())->delete($link['data']['id']);
        $this->assertTrue($deleted['deleted']);
        $this->assertEquals(200, $deleted['status']);
        $this->assertEquals('link', $deleted['object']);
        $this->assertEquals($link['data']['id'], $deleted['id']);
    }
}