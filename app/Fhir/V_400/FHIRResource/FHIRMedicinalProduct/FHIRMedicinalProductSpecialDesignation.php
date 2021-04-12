<?php namespace Fhir\V_400\FHIRResource\FHIRMedicinalProduct;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: March 26th, 2019
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use Fhir\V_400\FHIRElement\FHIRBackboneElement;

/**
 * Detailed definition of a medicinal product, typically for uses other than direct patient care (e.g. regulatory use).
 */
class FHIRMedicinalProductSpecialDesignation extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Identifier for the designation, or procedure number.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The type of special designation, e.g. orphan drug, minor use.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The intended use of the product, e.g. prevention, treatment.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $intendedUse = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $indicationCodeableConcept = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $indicationReference = null;

    /**
     * For example granted, pending, expired or withdrawn.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $status = null;

    /**
     * Date when the designation was granted.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Animal species for which this applies.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $species = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicinalProduct.SpecialDesignation';

    /**
     * Identifier for the designation, or procedure number.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier for the designation, or procedure number.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The type of special designation, e.g. orphan drug, minor use.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of special designation, e.g. orphan drug, minor use.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The intended use of the product, e.g. prevention, treatment.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getIntendedUse()
    {
        return $this->intendedUse;
    }

    /**
     * The intended use of the product, e.g. prevention, treatment.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $intendedUse
     * @return $this
     */
    public function setIntendedUse($intendedUse)
    {
        $this->intendedUse = $intendedUse;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getIndicationCodeableConcept()
    {
        return $this->indicationCodeableConcept;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $indicationCodeableConcept
     * @return $this
     */
    public function setIndicationCodeableConcept($indicationCodeableConcept)
    {
        $this->indicationCodeableConcept = $indicationCodeableConcept;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getIndicationReference()
    {
        return $this->indicationReference;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRReference $indicationReference
     * @return $this
     */
    public function setIndicationReference($indicationReference)
    {
        $this->indicationReference = $indicationReference;
        return $this;
    }

    /**
     * For example granted, pending, expired or withdrawn.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * For example granted, pending, expired or withdrawn.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Date when the designation was granted.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Date when the designation was granted.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Animal species for which this applies.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Animal species for which this applies.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $species
     * @return $this
     */
    public function setSpecies($species)
    {
        $this->species = $species;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->intendedUse) $json['intendedUse'] = $this->intendedUse;
        if (null !== $this->indicationCodeableConcept) $json['indicationCodeableConcept'] = $this->indicationCodeableConcept;
        if (null !== $this->indicationReference) $json['indicationReference'] = $this->indicationReference;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->date) $json['date'] = $this->date;
        if (null !== $this->species) $json['species'] = $this->species;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicinalProductSpecialDesignation xmlns="http://hl7.org/fhir"></MedicinalProductSpecialDesignation>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->intendedUse) $this->intendedUse->xmlSerialize(true, $sxe->addChild('intendedUse'));
        if (null !== $this->indicationCodeableConcept) $this->indicationCodeableConcept->xmlSerialize(true, $sxe->addChild('indicationCodeableConcept'));
        if (null !== $this->indicationReference) $this->indicationReference->xmlSerialize(true, $sxe->addChild('indicationReference'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->species) $this->species->xmlSerialize(true, $sxe->addChild('species'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}