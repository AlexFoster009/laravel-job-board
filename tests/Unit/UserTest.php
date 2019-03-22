<?php

namespace Tests\Unit;

use Illuminate\Support\Collection;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */

    /** @test */

    public function has_projects()
    {
        $user = factory('App\User')->create();

       $this->assertInstanceOf(Collection::class, $user->projects);

    }
}