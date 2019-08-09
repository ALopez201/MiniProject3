<?php

namespace Tests\Unit;

use Tests\TestCase;

/**
 * Class UserTest
 * @package Tests\Unit
 */
class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSave()
    {
        $user = factory(\App\User::class)->make();

        $this->assertTrue($user->save());
    }

    /**
     *
     */
    public function testQuestions()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->questions()->get()));
    }


}
