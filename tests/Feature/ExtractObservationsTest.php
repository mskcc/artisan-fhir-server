<?php

namespace Tests\Feature;

use App\Entities\ExampleObservation;
use ProtocolFactory;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Carbon\Carbon;

class ExtractObservationsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function users_cannot_request_observations_for_studies_they_do_not_have_access_to()
    {
        $proxyUser = factory(User::class)->create();

        $partner = factory(User::class)->create([
            'partner_id' => '8fc58700-569c-4840-8fff-94897831ad51'
        ]);

        $response = $this->actingAs($proxyUser, 'api')
            ->withHeaders(['x-partnerid' => $partner->partner_id])
            ->getJson('/api/observations?researchstudy=17-238');

        $response->assertStatus(404);
    }

    /** @test */
    public function authorized_users_can_request_observations_per_researchstudy()
    {
        $proxyUser = factory(User::class)->create();
        $partner = factory(User::class)->create([
            'partner_id' => '8fc58700-569c-4840-8fff-94897831ad51'
        ]);

        $protocolNo = '12-345';
        ProtocolFactory::createForPartner($partner, ['protocol_id' => $protocolNo]);

        entity(ExampleObservation::class, 25)->create([
            'patient_id' => '12345',
            'protocol_id' => $protocolNo
        ]);

        $response = $this->actingAs($proxyUser, 'api')
            ->withHeaders(['x-partnerid' => $partner->partner_id])
            ->getJson("/api/observations?researchstudy={$protocolNo}");

        $response->assertStatus(200);
        $response->assertJsonFragment(['total' => 25]);
        $response->assertJsonCount(25, 'entry');
    }

    /** @test */
    public function data_can_be_requested_per_researchsubject()
    {
        $proxyUser = factory(User::class)->create();

        $partner = factory(User::class)->create([
            'partner_id' => '8fc58700-569c-4840-8fff-94897831ad51'
        ]);

        $protocol = ProtocolFactory::createForPartner($partner);

        $response = $this->actingAs($proxyUser, 'api')
            ->withHeaders(['x-partnerid' => $partner->partner_id])
            ->getJson("/api/observations?researchstudy={$protocol->protocol_id}&patient:_has:ResearchSubject:identifier=12345");
        $response->assertStatus(200);
    }

    /** @test */
    public function data_can_be_requested_by_date_equality()
    {
        $this->withoutExceptionHandling();

        $proxyUser = factory(User::class)->create();
        $protocolNo = '12-345';
        $partner = factory(User::class)->create([
            'partner_id' => '8fc58700-569c-4840-8fff-94897831ad51'
        ]);

        ProtocolFactory::createForPartner($partner, ['protocol_id' => $protocolNo]);

        $this->createFakeLabResult($protocolNo, '2018-01-01T00:00');
        $this->createFakeLabResult($protocolNo, '2018-01-01T10:00');
        $this->createFakeLabResult($protocolNo, '2018-01-02T00:00');
        $this->createFakeLabResult($protocolNo, '2018-01-03');
        $this->createFakeLabResult($protocolNo, '2018-01-04');

        $response = $this->actingAs($proxyUser, 'api')
            ->withHeaders(['x-partnerid' => $partner->partner_id])
            ->getJson("/api/observations?researchstudy={$protocolNo}&date[]=eq2018-01-01");


        $response->assertStatus(200);
        $response->assertJsonFragment(['total' => 2]);
        $response->assertJsonFragment(['effectiveDateTime' => '2018-01-01T00:00:00+00:00']);
        $response->assertJsonFragment(['effectiveDateTime' => '2018-01-01T10:00:00+00:00']);
        $response->assertJsonCount(2, 'entry');
    }


    /** @test */
    public function data_can_be_requested_by_date_inequality()
    {

        $proxyUser = factory(User::class)->create();
        $protocolNo = '12-345';
        $partner = factory(User::class)->create([
            'partner_id' => '8fc58700-569c-4840-8fff-94897831ad51'
        ]);

        ProtocolFactory::createForPartner($partner, ['protocol_id' => $protocolNo]);

        $this->createFakeLabResult($protocolNo, '2018-01-01T00:00');
        $this->createFakeLabResult($protocolNo, '2018-01-01T10:00');
        $this->createFakeLabResult($protocolNo, '2018-01-02T00:00');

        $response = $this->actingAs($proxyUser, 'api')
            ->withHeaders(['x-partnerid' => $partner->partner_id])
            ->getJson("/api/observations?researchstudy={$protocolNo}&date[]=ne2018-01-01");


        $response->assertStatus(200);
        $response->assertJsonFragment(['total' => 1]);
        $response->assertJsonFragment(['effectiveDateTime' => '2018-01-02T00:00:00+00:00']);
        $response->assertJsonCount(1, 'entry');
    }



    /** @test */
    public function data_can_be_requested_by_dates_less_than_a_given_date()
    {

        $proxyUser = factory(User::class)->create();
        $protocolNo = '12-345';
        $partner = factory(User::class)->create([
            'partner_id' => '8fc58700-569c-4840-8fff-94897831ad51'
        ]);

        ProtocolFactory::createForPartner($partner, ['protocol_id' => $protocolNo]);

        $this->createFakeLabResult($protocolNo, '2018-01-14');
        $this->createFakeLabResult($protocolNo, '2018-01-14T09:00');
        $this->createFakeLabResult($protocolNo, '2018-01-14T12:00');
        $this->createFakeLabResult($protocolNo, '2018-01-15');

        $response = $this->actingAs($proxyUser, 'api')
            ->withHeaders(['x-partnerid' => $partner->partner_id])
            ->getJson("/api/observations?researchstudy={$protocolNo}&date[]=lt2018-01-14T10:00");


        $response->assertStatus(200);
        $response->assertJsonFragment(['total' => 2]);
        $response->assertJsonFragment(['effectiveDateTime' => '2018-01-14T00:00:00+00:00']);
        $response->assertJsonFragment(['effectiveDateTime' => '2018-01-14T09:00:00+00:00']);
        $response->assertJsonCount(2, 'entry');
    }


    /** @test */
    public function data_can_be_requested_by_dates_greater_than_a_given_date()
    {

        $proxyUser = factory(User::class)->create();
        $protocolNo = '12-345';
        $partner = factory(User::class)->create([
            'partner_id' => '8fc58700-569c-4840-8fff-94897831ad51'
        ]);

        ProtocolFactory::createForPartner($partner, ['protocol_id' => $protocolNo]);

        $this->createFakeLabResult($protocolNo, '2018-01-14');
        $this->createFakeLabResult($protocolNo, '2018-01-14T09:00');
        $this->createFakeLabResult($protocolNo, '2018-01-14T12:00');
        $this->createFakeLabResult($protocolNo, '2018-01-15');

        $response = $this->actingAs($proxyUser, 'api')
            ->withHeaders(['x-partnerid' => $partner->partner_id])
            ->getJson("/api/observations?researchstudy={$protocolNo}&date[]=gt2018-01-14T10:00");


        $response->assertStatus(200);
        $response->assertJsonFragment(['total' => 2]);
        $response->assertJsonFragment(['effectiveDateTime' => '2018-01-14T12:00:00+00:00']);
        $response->assertJsonFragment(['effectiveDateTime' => '2018-01-15T00:00:00+00:00']);
        $response->assertJsonCount(2, 'entry');
    }


    /** @test */
    public function data_can_be_requested_by_dates_greater_than_or_equal_to_a_given_date()
    {

        $proxyUser = factory(User::class)->create();
        $protocolNo = '12-345';
        $partner = factory(User::class)->create([
            'partner_id' => '8fc58700-569c-4840-8fff-94897831ad51'
        ]);

        ProtocolFactory::createForPartner($partner, ['protocol_id' => $protocolNo]);

        $this->createFakeLabResult($protocolNo, '2018-01-13');
        $this->createFakeLabResult($protocolNo, '2018-01-14');
        $this->createFakeLabResult($protocolNo, '2018-01-14T09:00');
        $this->createFakeLabResult($protocolNo, '2018-01-14T12:00');
        $this->createFakeLabResult($protocolNo, '2018-01-15');

        $response = $this->actingAs($proxyUser, 'api')
            ->withHeaders(['x-partnerid' => $partner->partner_id])
            ->getJson("/api/observations?researchstudy={$protocolNo}&date[]=ge2018-01-14");


        $response->assertStatus(200);
        $response->assertJsonFragment(['total' => 4]);
        $response->assertJsonFragment(['effectiveDateTime' => '2018-01-14T00:00:00+00:00']);
        $response->assertJsonFragment(['effectiveDateTime' => '2018-01-14T09:00:00+00:00']);
        $response->assertJsonFragment(['effectiveDateTime' => '2018-01-14T12:00:00+00:00']);
        $response->assertJsonFragment(['effectiveDateTime' => '2018-01-15T00:00:00+00:00']);
        $response->assertJsonCount(4, 'entry');
    }


    /** @test */
    public function data_can_be_requested_by_dates_less_than_or_equal_to_a_given_date()
    {
        $proxyUser = factory(User::class)->create();
        $protocolNo = '12-345';
        $partner = factory(User::class)->create([
            'partner_id' => '8fc58700-569c-4840-8fff-94897831ad51'
        ]);

        ProtocolFactory::createForPartner($partner, ['protocol_id' => $protocolNo]);

        $this->createFakeLabResult($protocolNo, '2018-01-13');
        $this->createFakeLabResult($protocolNo, '2018-01-14');
        $this->createFakeLabResult($protocolNo, '2018-01-14T09:00');
        $this->createFakeLabResult($protocolNo, '2018-01-14T12:00');
        $this->createFakeLabResult($protocolNo, '2018-01-15');

        $response = $this->actingAs($proxyUser, 'api')
            ->withHeaders(['x-partnerid' => $partner->partner_id])
            ->getJson("/api/observations?researchstudy={$protocolNo}&date[]=le2018-01-14");

        $response->assertStatus(200);
        $response->assertJsonFragment(['total' => 4]);
        $response->assertJsonFragment(['effectiveDateTime' => '2018-01-13T00:00:00+00:00']);
        $response->assertJsonFragment(['effectiveDateTime' => '2018-01-14T00:00:00+00:00']);
        $response->assertJsonFragment(['effectiveDateTime' => '2018-01-14T09:00:00+00:00']);
        $response->assertJsonFragment(['effectiveDateTime' => '2018-01-14T12:00:00+00:00']);
        $response->assertJsonCount(4, 'entry');
    }

    /** @test */
    public function observation_data_contains_loinc_codes()
    {
        $proxyUser = factory(User::class)->create();
        $protocolNo = '12-345';
        $partner = factory(User::class)->create([
            'partner_id' => '8fc58700-569c-4840-8fff-94897831ad51'
        ]);

        ProtocolFactory::createForPartner($partner, ['protocol_id' => $protocolNo]);

        entity(ExampleObservation::class)->create([
            'protocol_id' => $protocolNo,
            'result_timestamp' => Carbon::parse('2018-01-13'),
            'loinc_code' => '85354-9',
            'lab_test_code' => 'Blood pressure panel with all children optional'
        ]);

        $response = $this->actingAs($proxyUser, 'api')
            ->withHeaders(['x-partnerid' => $partner->partner_id])
            ->getJson("/api/observations?researchstudy={$protocolNo}&date[]=le2018-01-14");

        $response->assertStatus(200);
        $response->assertJsonFragment(['total' => 1]);
        $response->assertJsonFragment(['code' => '85354-9']);
    }

    /** @test */
    public function observations_contain_valueQuantity_when_lab_result_is_a_decimal()
    {
        $proxyUser = factory(User::class)->create();
        $partner = factory(User::class)->create([
            'partner_id' => '8fc58700-569c-4840-8fff-94897831ad51'
        ]);

        $protocolNo = '12-345';

        ProtocolFactory::createForPartner($partner, ['protocol_id' => $protocolNo]);

        entity(ExampleObservation::class)->create([
            'patient_id' => '12345',
            'protocol_id' => $protocolNo,
            'lab_result_value' => 0.6
        ]);

        $response = $this->actingAs($proxyUser, 'api')
            ->withHeaders(['x-partnerid' => $partner->partner_id])
            ->getJson("/api/observations?researchstudy={$protocolNo}");

        $response->assertStatus(200);

        $this->assertTrue(
            collect($response->json('entry.0.resource.valueQuantity'))
                ->get('value') === 0.6
        );
    }

    private function createFakeLabResult($protocolNo = '', $performed_date = '')
    {

        entity(ExampleObservation::class)->create([
            'protocol_id' => isset($protocolNo) ? $protocolNo : null,
            'result_timestamp' => isset($performed_date) ? Carbon::parse($performed_date) : null,
        ]);
    }



}
