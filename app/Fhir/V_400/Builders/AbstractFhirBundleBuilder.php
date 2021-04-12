<?php

namespace Fhir\V_400\Builders;

use Fhir\V_400\FHIRElement\FHIRIdentifier;
use Fhir\V_400\FHIRElement\FHIRUri;
use Fhir\V_400\FHIRResource\FHIRBundle;
use Fhir\V_400\FHIRResource\FHIRBundle\FHIRBundleLink;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

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

        $basePaginationUrl =  Str::after($request->path(), 'api/') . '?' . $request->getQueryString();

        parse_str(parse_url($paginatorResults->previousPageUrl(), PHP_URL_QUERY), $prevPageParams);
        parse_str(parse_url($paginatorResults->nextPageUrl(), PHP_URL_QUERY), $nextPageParams);

        $nextPage = collect($nextPageParams)->get('page');
        $previousPage = collect($prevPageParams)->get('page');

        $self = new FHIRBundleLink();
        $self->relation = 'self';
        $self->url = new FHIRUri();
        $self->url->value = $basePaginationUrl . '&page=' . $paginatorResults->currentPage();
        $this->getBundle()->addLink($self);

        $first = new FHIRBundleLink();
        $first->relation = 'first';
        $first->url = new FHIRUri();
        $first->url->value = $basePaginationUrl . '&page=1';
        $this->getBundle()->addLink($first);

        $last = new FHIRBundleLink();
        $last->relation = 'last';
        $last->url = new FHIRUri();
        $last->url->value = $basePaginationUrl . '&page=' . $paginatorResults->lastPage();
        $this->getBundle()->addLink($last);

        $prev = new FHIRBundleLink();
        $prev->relation = 'previous';
        $prev->url = new FHIRUri();
        $prev->url->value = $paginatorResults->previousPageUrl() != null ? $basePaginationUrl . '&page=' . $previousPage: null;
        $this->getBundle()->addLink($prev);

        $next = new FHIRBundleLink();
        $next->relation = 'next';
        $next->url = new FHIRUri();
        $next->url->value = $paginatorResults->nextPageUrl() != null ? $basePaginationUrl . '&page=' . $nextPage : null;
        $this->getBundle()->addLink($next);

        return $this;
    }

}