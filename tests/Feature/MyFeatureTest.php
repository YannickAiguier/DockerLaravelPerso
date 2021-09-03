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
    public function MyExample()
    {
        $response = $this->get('/xdebug');

        $response->assertStatus(200);
    }
}
