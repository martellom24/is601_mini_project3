<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testSave()
    {
        $user = factory(User::class)->make();

        $this->assertTrue($user->save());
    }

    /**
     * A test for testing Question are returned
     *
     * @return void
     */
    public function testQuestion()
    {
        $user = factory(User::class)->make();

        $this->assertTrue(is_object($user->questions()->get()));
    }

    public function testAnswer()
    {
        $user = factory(User::class)->make();
        $this->assertTrue(is_object($user->answer()->get()));
    }

    public function testProfile()
    {
        $user = factory(User::class)->make();
        $this->assertTrue(is_object($user->profile()->get()));
    }
}
