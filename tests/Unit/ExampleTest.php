<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        // $this->assertTrue(true);
        $this->assertEquals("Hello World !!", $this->concat("Hello ", "World !!"));
    }

    public function concat($var1, $var2) {
        return $var1.$var2;
    }
}
