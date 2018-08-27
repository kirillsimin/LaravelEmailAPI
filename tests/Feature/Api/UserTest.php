<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class UserTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    /** @test */
    public function new_user_can_register()
    {
        $response = $this->json('POST', '/api/register', [
            'name' => 'Test User',
            'email' => 'test@example.org',
            'password' => '123456'
        ]);

        $response->assertStatus(200)->assertJsonStructure(['token']);
    }
}
