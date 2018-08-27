<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class EmailTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    protected $user;

    public function setUp()
    {
        parent::setUp();
        $this->user = factory(\App\Models\User::class)->create();
    }

    /** @test */
    public function user_can_list_their_emails()
    {
        factory(\App\Models\Email::class, 15)->create([
            'user_id' => $this->user->id
        ]);

        $response = $this->actingAs($this->user)->
            json('GET', 'api/emails');

        $response->assertStatus(200)->assertJsonCount(15);
    }

    /** @test */
    public function user_can_create_a_new_email()
    {
        $text = 'Sample test';
        $subject = 'Sample subject';

        $response = $this->actingAs($this->user)->
                    json('POST', 'api/emails', [
                        'text'      => $text,
                        'subject'   => $subject,
                    ]);

        $response->assertStatus(201)->assertJson([
            'text'      => $text,
            'subject'   => $subject,
        ]);
    }

    /** @test */
    public function user_can_see_their_email_by_id()
    {
        $email = factory(\App\Models\Email::class)->create([
            'user_id' => $this->user->id
        ]);

        $response = $this->actingAs($this->user)->
                    json('GET', 'api/emails/'.$email->id);

        $response->assertStatus(200)->assertJson([
            'subject'   => $email->subject,
            'text'      => $email->text,
        ]);
    }

    /** @test */
    public function user_can_not_see_another_users_email()
    {
        $anotherUser = factory(\App\Models\User::class)->create();
        $email = factory(\App\Models\Email::class)->create([
            'user_id' => $anotherUser->id
        ]);

        $response = $this->actingAs($this->user)->
                    json('GET', 'api/emails/'.$email->id);

        $response->assertStatus(403);
    }
}
