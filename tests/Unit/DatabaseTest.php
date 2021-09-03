<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

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