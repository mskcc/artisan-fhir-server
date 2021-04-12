<?php

namespace Tests\Unit;

use Fhir\V_400\FhirDateSearchParser;
use InvalidArgumentException;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FhirDateSearchParserTest extends TestCase
{

    /** @test */
    public function it_accepts_an_odata_equal_to_search_string_as_an_argument()
    {
        $fdsBuilder = new FhirDateSearchParser('eq2018-01-01');
        $this->assertEquals( '2018-01-01', $fdsBuilder->getDateValue());
        $this->assertEquals( '=', $fdsBuilder->getOperator());
    }

    /** @test */
    public function it_accepts_an_odata_not_equal_to_search_string_as_an_argument()
    {
        $fdsBuilder = new FhirDateSearchParser('ne2018-01-01');
        $this->assertEquals( '2018-01-01', $fdsBuilder->getDateValue());
        $this->assertEquals( '!=', $fdsBuilder->getOperator());
    }

    /** @test */
    public function it_accepts_an_odata_less_than_search_string_as_an_argument()
    {
        $fdsBuilder = new FhirDateSearchParser('lt2018-01-01');
        $this->assertEquals( '2018-01-01', $fdsBuilder->getDateValue());
        $this->assertEquals( '<', $fdsBuilder->getOperator());
    }

    /** @test */
    public function it_accepts_an_odata_less_than_or_equal_to_search_string_as_an_argument()
    {
        $fdsBuilder = new FhirDateSearchParser('le2018-01-01');
        $this->assertEquals( '2018-01-01', $fdsBuilder->getDateValue());
        $this->assertEquals( '<=', $fdsBuilder->getOperator());
    }


    /** @test */
    public function it_accepts_an_odata_greater_than_search_string_as_an_argument()
    {
        $fdsBuilder = new FhirDateSearchParser('gt2018-01-01');
        $this->assertEquals( '2018-01-01', $fdsBuilder->getDateValue());
        $this->assertEquals( '>', $fdsBuilder->getOperator());
    }

    /** @test */
    public function it_accepts_an_odata_greater_than_or_equal_to_search_string_as_an_argument()
    {
        $fdsBuilder = new FhirDateSearchParser('ge2018-01-01');
        $this->assertEquals( '2018-01-01', $fdsBuilder->getDateValue());
        $this->assertEquals( '>=', $fdsBuilder->getOperator());
    }

    /**
     * @test
     * expectedException() InvalidArgumentException
     */
    public function it_throws_an_exception_if_it_cannot_determine_the_appropriate_operation()
    {
        $this->expectException('\InvalidArgumentException');
        new FhirDateSearchParser('qq2018-01-01');
    }


    /**
     * @test
     */
    public function it_throws_an_exception_if_date_is_not_a_valid_fhir_data_type_the_appropriate_operation()
    {
        $this->expectException('App\Exceptions\InvalidFhirDatatypeException');
        new FhirDateSearchParser('ltTOTALLYWRONG');
    }

    /**
     * @test
     */
    public function it_can_determine_if_a_value_is_a_date_string()
    {
        $parser = new FhirDateSearchParser('eq2018-01-01');
        $this->assertTrue($parser->isDate());
    }

}
