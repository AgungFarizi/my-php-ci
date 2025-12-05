<?php

use PHPUnit\Framework\TestCase;
use App\Helper;

class ExampleTest extends TestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testHelper()
    {
        $this->assertEquals("Hello from Helper!", Helper::sayHello());
    }
}
