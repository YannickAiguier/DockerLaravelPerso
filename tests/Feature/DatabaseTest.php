<?php

namespace Tests\Unit;

use Tests\TestCase;

class DatabaseTest extends TestCase
{

    /**
     * Testing database.
     *
     * @return void
     */
    public function test_database()
    {
        $this->assertDatabaseCount('users', 0);
    }
}