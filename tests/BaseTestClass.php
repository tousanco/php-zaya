<?php

namespace Tousanco\PhpZaya\Tests;

use PHPUnit\Framework\TestCase;

class BaseTestClass extends TestCase
{
    // You need to create .apiKey file in current folder and put your key in this file.
    protected function getApiKey(): string
    {
        return file_get_contents(__DIR__.'/.apiKey');
    }
}
