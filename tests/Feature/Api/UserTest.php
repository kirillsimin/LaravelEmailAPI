<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function new_user_can_register()
    {
        $response = $this->json('POST', '/api/register', [
            'name' => 'Test User',
            'email' => 'test@example.org',
            'password' => '123456'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'test@example.org'
        ]);
        $response->assertStatus(200)->assertJsonStructure(['token']);
    }

    /** @test */
    public function user_can_login()
    {
        $user = factory(\App\Models\User::class)->create();

        $response = $this->json('POST', '/api/login', [
            'email' => $user->email,
            'password' => 'secret'
        ]);

        $response->assertStatus(200)->assertJsonStructure(['token']);
    }
}
