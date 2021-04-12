<?php

namespace Fhir\V_301\Builders;

use App\Entities\FHIREntityInterface;
use Fhir\V_301\FHIRElement\FHIRUri;
use Fhir\V_301\FHIRResource\FHIRBundle\FHIRBundleEntry;
use Fhir\V_301\FHIRResource\FHIRBundle\FHIRBundleLink;

class FakeFhirBundleBuilder extends AbstractFhirBundleBuilder
{
    function transformEntries($entries)
    {
        collect($entries)->each(function(FHIREntityInterface $e) {
            $entry = new FHIRBundleEntry();
            $entry->setId($e->getId());
            $this->getBundle()->addEntry($entry);
        });
    }

    function withEntries($entries)
    {

    }


}