<?php namespace Fhir\V_400\Builders;

use App\Entities\ExampleObservation;
use Fhir\V_400\FHIRResource\FHIRBundle;
use Fhir\V_400\FHIRResourceContainer;

class FHIRObservationBundleBuilder extends AbstractFhirBundleBuilder
{
    function __construct() {
        parent::__construct();
        return $this;
    }

    function transformEntries($entries)
    {
        collect($entries)->each(function(ExampleObservation $labResult) {
            $entry = new FHIRBundle\FHIRBundleEntry();
            $entry->fullUrl = '/observations/' . $labResult->getId();
            $entry->setId($labResult->getId());
            $resource = new FHIRResourceContainer();
            $resource->setObservation($labResult->toFhirResource());
            $entry->setResource($resource);
            $this->getBundle()->addEntry($entry);
        });
    }
}