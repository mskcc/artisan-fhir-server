<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewUsersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function users_can_be_filtered_by_partner_id()
    {
        $authUser = factory(User::class)->create();

        $singleUser = factory(User::class)->create();

        $response = $this->actingAs($authUser, 'api')->getJson("/api/users?partner_id={$singleUser->partner_id}");

        $response
            ->assertStatus(200);
    }


    /** @test */
    public function user_not_found_message_returned_for_invalid_identifier()
    {
        $this->withoutExceptionHandling();

        $authUser = factory(User::class)->create();

        $singleUser = factory(User::class)->create();

        $response = $this->actingAs($authUser, 'api')->getJson('/api/users?partner_id=999999');

        $response
            ->assertStatus(404);
    }

    /** @test */
    public function partner_id_is_required_when_querying_users()
    {
        $authUser = factory(User::class)->create();

        $response = $this->actingAs($authUser, 'api')->getJson('/api/users');

        $response
            ->assertStatus(422);
    }


}
