<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class UserModelTest extends TestCase
{
    /** @test */
    public function it_has_fillable_fields()
    {
        $user = new User();

        $this->assertEquals([
            'username',
            'email',
            'password',
        ], $user->getFillable());
    }

    /** @test */
    public function it_has_hidden_fields()
    {
        $user = new User();

        $this->assertEquals([
            'password',
            'remember_token',
        ], $user->getHidden());
    }

    /** @test */
    public function it_has_expected_casts()
    {
        $user = new User();

        $this->assertEquals([
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'id' => 'int',
        ], $user->getCasts());
    }
}
