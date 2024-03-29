<?php

namespace Tests\Unit;

use Tests\TestCase;

class ProfileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSave()
    {

        $user = factory(\App\User::class)->make();
        $user->save();
        $profile = factory(\App\Profile::class)->make();
        $profile->user()->associate($user);
        $this->assertTrue($profile->save());
    }
}
