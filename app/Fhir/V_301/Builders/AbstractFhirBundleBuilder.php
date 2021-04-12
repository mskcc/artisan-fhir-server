<?php

namespace Fhir\V_301\Builders;

use Fhir\V_301\FHIRElement\FHIRIdentifier;
use Fhir\V_301\FHIRElement\FHIRUri;
use Fhir\V_301\FHIRResource\FHIRBundle;
use Fhir\V_301\FHIRResource\FHIRBundle\FHIRBundleLink;
use Illuminate\Http\Request;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Pagination\LengthAwarePaginator;

abstract class AbstractFhirBundleBuilder
{
    private $bundle;

    function __construct() {
        $this->bundle = new FHIRBundle();
        $this->bundle->setIdentifier(new FHIRIdentifier());
        return $this;
    }

    public function setUri($_uri)
    {
        $uri = new FHIRUri();
        $uri->value = $_uri;
        $this->bundle->identifier->system = $uri;
        return $this;
    }

    public function setValue($value)
    {
        $this->bundle->identifier->value = $value;
        return $this;
    }

    public function setType($type)
    {
        $this->bundle->type = $type;
        return $this;
    }

    public function getBundle()
    {
        return $this->bundle;
    }

    abstract function transformEntries($entries);

    function paginate(LengthAwarePaginator $paginatorResults, Request $request)
    {
        $paginatorResults->appends(collect($request->query())->forget('page')->toArray());

        $this->bundle->total = $paginatorResults->total();
        $this->transformEntries($paginatorResults->items());

        $self = new FHIRBundleLink();
        $self->relation = 'self';
        $self->url = new FHIRUri();
        $self->url->value = $paginatorResults->url($paginatorResults->currentPage());
        $this->getBundle()->addLink($self);


        $first = new FHIRBundleLink();
        $first->relation = 'first';
        $first->url = new FHIRUri();
        $first->url->value = $paginatorResults->url(1);
        $this->getBundle()->addLink($first);

        $last = new FHIRBundleLink();
        $last->relation = 'last';
        $last->url = new FHIRUri();
        $last->url->value = $paginatorResults->url($paginatorResults->lastPage());
        $this->getBundle()->addLink($last);

        $prev = new FHIRBundleLink();
        $prev->relation = 'previous';
        $prev->url = new FHIRUri();
        $prev->url->value = $paginatorResults->previousPageUrl();
        $this->getBundle()->addLink($prev);

        $next = new FHIRBundleLink();
        $next->relation = 'next';
        $next->url = new FHIRUri();
        $next->url->value = $paginatorResults->nextPageUrl();
        $this->getBundle()->addLink($next);

        return $this;
    }

}