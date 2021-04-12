<?php

namespace Tests\Feature;

use App\IO\FakeFileReader;
use App\IO\FileReader;
use App\Protocol;
use App\ProtocolAccess;
use App\User;
use Doctrine\ORM\EntityManagerInterface;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ShowCapabilityStatementTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_users_can_request_the_server_capability_statement()
    {
        $user = factory(User::class)->create();

        $partner = factory(User::class)->create([
            'partner_id' => '8fc58700-569c-4840-8fff-94897831ad51'
        ]);

        $response = $this->actingAs($user, 'api')
            ->withHeaders(['x-partnerid' => $partner->partner_id])
            ->getJson("/api/capabilitystatement");

        $response->assertStatus(200);
        $response->assertJsonFragment([
            "resourceType" => "CapabilityStatement"
        ]);
    }

    /** @test */
    public function authorized_users_see_an_error_message_if_capability_statement_file_cant_be_read()
    {
        
        config(['app.fhir_json_path' => 'path/does/not/exist/']);
        
        $user = factory(User::class)->create();

        $partner = factory(User::class)->create([
            'partner_id' => '8fc58700-569c-4840-8fff-94897831ad51'
        ]);

        $response = $this->actingAs($user, 'api')
            ->withHeaders(['x-partnerid' => $partner->partner_id])
            ->getJson("/api/capabilitystatement");

        $response->assertStatus(404);
    }
}
