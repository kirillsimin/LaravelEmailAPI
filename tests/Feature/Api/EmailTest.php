<?php

namespace Tests\Feature\Api;

use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Mail;

use App\Mail\UserEmail;

class EmailTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    protected $user;

    public function setUp()
    {
        parent::setUp();
        Mail::fake();
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
        $email = [
            'text' => 'Sample test',
            'subject' => 'Sample subject',
        ];

        $response = $this->actingAs($this->user)->
                    json('POST', 'api/emails', $email);

        $response->assertStatus(201)->assertJson([
            'text'      => $email['text'],
            'subject'   => $email['subject'],
        ]);

        Mail::assertSent(UserEmail::class, function ($mail) use ($email) {
            return ($mail->email->text === $email['text']) &&
                ($mail->email->subject === $email['subject']);
        });
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
