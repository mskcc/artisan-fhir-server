<?php

namespace App\Entities;

interface FHIREntityInterface
{
    function toFhirResource();
    function getId();
}