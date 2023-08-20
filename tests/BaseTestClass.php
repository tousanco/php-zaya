<?php

namespace Tousanco\PhpZaya\Tests;

use Exception;
use PHPUnit\Framework\TestCase;

class BaseTestClass extends TestCase
{
    protected function getApiKey(): string
    {
        $keyFile = __DIR__.'/.apiKey';
        if (!file_exists($keyFile)) {
            throw new Exception('You need to create .apiKey file in tests folder and put your key in this file.');
        }

        return file_get_contents($keyFile);
    }
}
