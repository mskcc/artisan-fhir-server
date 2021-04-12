<?php namespace Fhir\V_400\FHIRResource\FHIRSubstanceSpecification;

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
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 */
class FHIRSubstanceSpecificationProperty extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A category for this property, e.g. Physical, Chemical, Enzymatic.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * Property type e.g. viscosity, pH, isoelectric point.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Parameters that were used in the measurement of a property (e.g. for viscosity: measured at 20C with a pH of 7.1).
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $parameters = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $definingSubstanceReference = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $definingSubstanceCodeableConcept = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $amountQuantity = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $amountString = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'SubstanceSpecification.Property';

    /**
     * A category for this property, e.g. Physical, Chemical, Enzymatic.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A category for this property, e.g. Physical, Chemical, Enzymatic.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Property type e.g. viscosity, pH, isoelectric point.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Property type e.g. viscosity, pH, isoelectric point.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Parameters that were used in the measurement of a property (e.g. for viscosity: measured at 20C with a pH of 7.1).
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Parameters that were used in the measurement of a property (e.g. for viscosity: measured at 20C with a pH of 7.1).
     * @param \Fhir\V_400\FHIRElement\FHIRString $parameters
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getDefiningSubstanceReference()
    {
        return $this->definingSubstanceReference;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRReference $definingSubstanceReference
     * @return $this
     */
    public function setDefiningSubstanceReference($definingSubstanceReference)
    {
        $this->definingSubstanceReference = $definingSubstanceReference;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getDefiningSubstanceCodeableConcept()
    {
        return $this->definingSubstanceCodeableConcept;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $definingSubstanceCodeableConcept
     * @return $this
     */
    public function setDefiningSubstanceCodeableConcept($definingSubstanceCodeableConcept)
    {
        $this->definingSubstanceCodeableConcept = $definingSubstanceCodeableConcept;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public function getAmountQuantity()
    {
        return $this->amountQuantity;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity $amountQuantity
     * @return $this
     */
    public function setAmountQuantity($amountQuantity)
    {
        $this->amountQuantity = $amountQuantity;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getAmountString()
    {
        return $this->amountString;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRString $amountString
     * @return $this
     */
    public function setAmountString($amountString)
    {
        $this->amountString = $amountString;
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
        if (null !== $this->category) $json['category'] = $this->category;
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->parameters) $json['parameters'] = $this->parameters;
        if (null !== $this->definingSubstanceReference) $json['definingSubstanceReference'] = $this->definingSubstanceReference;
        if (null !== $this->definingSubstanceCodeableConcept) $json['definingSubstanceCodeableConcept'] = $this->definingSubstanceCodeableConcept;
        if (null !== $this->amountQuantity) $json['amountQuantity'] = $this->amountQuantity;
        if (null !== $this->amountString) $json['amountString'] = $this->amountString;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SubstanceSpecificationProperty xmlns="http://hl7.org/fhir"></SubstanceSpecificationProperty>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->category) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->parameters) $this->parameters->xmlSerialize(true, $sxe->addChild('parameters'));
        if (null !== $this->definingSubstanceReference) $this->definingSubstanceReference->xmlSerialize(true, $sxe->addChild('definingSubstanceReference'));
        if (null !== $this->definingSubstanceCodeableConcept) $this->definingSubstanceCodeableConcept->xmlSerialize(true, $sxe->addChild('definingSubstanceCodeableConcept'));
        if (null !== $this->amountQuantity) $this->amountQuantity->xmlSerialize(true, $sxe->addChild('amountQuantity'));
        if (null !== $this->amountString) $this->amountString->xmlSerialize(true, $sxe->addChild('amountString'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}