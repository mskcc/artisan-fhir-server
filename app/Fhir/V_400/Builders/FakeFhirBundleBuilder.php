<?php

namespace Fhir\V_400\Builders;

use App\Entities\FHIREntityInterface;
use Fhir\V_400\FHIRResource\FHIRBundle\FHIRBundleEntry;

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