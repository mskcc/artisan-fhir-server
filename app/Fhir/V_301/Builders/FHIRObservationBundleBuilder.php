<?php namespace Fhir\V_301\Builders;

use App\Entities\LabResult;
use Fhir\V_301\FHIRElement\FHIRIdentifier;
use Fhir\V_301\FHIRElement\FHIRUri;
use Fhir\V_301\FHIRResource\FHIRBundle;
use Fhir\V_301\FHIRResourceContainer;

class FHIRObservationBundleBuilder extends AbstractFhirBundleBuilder
{
    function __construct() {
        parent::__construct();
        return $this;
    }

    function transformEntries($entries)
    {
        collect($entries)->each(function(LabResult $labResult) {
            $entry = new FHIRBundle\FHIRBundleEntry();
            $entry->fullUrl = route('api.observations.show', $labResult->getId());
            $entry->setId($labResult->getId());
            $resource = new FHIRResourceContainer();
            $resource->setObservation($labResult->toFhirResource());
            $entry->setResource($resource);
            $this->getBundle()->addEntry($entry);
        });
    }
}