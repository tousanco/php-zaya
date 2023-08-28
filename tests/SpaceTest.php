<?php

namespace Tousanco\PhpZaya\Tests;

use Tousanco\PhpZaya\Space;

class SpaceTest extends BaseTestClass
{
    /** @test */
    public function get_spaces_list()
    {
        $list = Space::instance($this->getApiKey())->all();
        $this->assertTrue(isset($list['data']));
        $this->assertTrue(isset($list['links']));
        $this->assertTrue(isset($list['meta']));
        $this->assertEquals($list['meta']['current_page'], 1);

        $list = Space::instance($this->getApiKey())->all(['page' => 2]);
        $this->assertTrue(isset($list['data']));
        $this->assertTrue(isset($list['links']));
        $this->assertTrue(isset($list['meta']));
        $this->assertEquals($list['meta']['current_page'], 2);
    }

    /** @test */
    public function crud_actions_space()
    {
        // create test
        $data = [
            'name' => 'test space',
            'color' => '#000'
        ];
        $space = Space::instance($this->getApiKey())->create($data);
        $this->assertEquals(200, $space['status']);
        $this->assertEquals($data['name'], $space['data']['name']);
        $this->assertEquals($data['color'], $space['data']['color']);

        // details test
        $details = Space::instance($this->getApiKey())->details($space['data']['id']);
        $this->assertEquals(200, $details['status']);
        $this->assertEquals($space['data']['name'], $details['data']['name']);
        $this->assertEquals($space['data']['color'], $details['data']['color']);

        // update test
        $newSpace = [
            'name' => 'new space',
            'color' => '#fff'
        ];
        $updated = Space::instance($this->getApiKey())->update($space['data']['id'], $newSpace);
        $this->assertEquals(200, $updated['status']);
        $this->assertEquals($newSpace['name'], $updated['data']['name']);
        $this->assertEquals($newSpace['color'], $updated['data']['color']);

        // delete test
        $deleted = Space::instance($this->getApiKey())->delete($space['data']['id']);
        $this->assertTrue($deleted['deleted']);
        $this->assertEquals(200, $deleted['status']);
        $this->assertEquals('space', $deleted['object']);
        $this->assertEquals($space['data']['id'], $deleted['id']);
    }
}