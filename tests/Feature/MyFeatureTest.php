<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MyTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function my_example()
    {
        $response = $this->get('/xdebug');

        $response->assertStatus(200);
    }
}
