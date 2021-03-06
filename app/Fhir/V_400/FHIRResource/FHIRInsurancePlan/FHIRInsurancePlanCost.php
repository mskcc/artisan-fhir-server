<?php namespace Fhir\V_400\FHIRResource\FHIRInsurancePlan;

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
 * Details of a Health Insurance product/plan provided by an organization.
 */
class FHIRInsurancePlanCost extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Type of cost (copay; individual cap; family cap; coinsurance; deductible).
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Whether the cost applies to in-network or out-of-network providers (in-network; out-of-network; other).
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $applicability = null;

    /**
     * Additional information about the cost, such as information about funding sources (e.g. HSA, HRA, FSA, RRA).
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $qualifiers = array();

    /**
     * The actual cost value. (some of the costs may be represented as percentages rather than currency, e.g. 10% coinsurance).
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $value = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'InsurancePlan.Cost';

    /**
     * Type of cost (copay; individual cap; family cap; coinsurance; deductible).
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of cost (copay; individual cap; family cap; coinsurance; deductible).
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Whether the cost applies to in-network or out-of-network providers (in-network; out-of-network; other).
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getApplicability()
    {
        return $this->applicability;
    }

    /**
     * Whether the cost applies to in-network or out-of-network providers (in-network; out-of-network; other).
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $applicability
     * @return $this
     */
    public function setApplicability($applicability)
    {
        $this->applicability = $applicability;
        return $this;
    }

    /**
     * Additional information about the cost, such as information about funding sources (e.g. HSA, HRA, FSA, RRA).
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getQualifiers()
    {
        return $this->qualifiers;
    }

    /**
     * Additional information about the cost, such as information about funding sources (e.g. HSA, HRA, FSA, RRA).
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $qualifiers
     * @return $this
     */
    public function addQualifiers($qualifiers)
    {
        $this->qualifiers[] = $qualifiers;
        return $this;
    }

    /**
     * The actual cost value. (some of the costs may be represented as percentages rather than currency, e.g. 10% coinsurance).
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The actual cost value. (some of the costs may be represented as percentages rather than currency, e.g. 10% coinsurance).
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
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
        return (string)$this->getValue();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->applicability) $json['applicability'] = $this->applicability;
        if (0 < count($this->qualifiers)) {
            $json['qualifiers'] = [];
            foreach($this->qualifiers as $qualifiers) {
                $json['qualifiers'][] = $qualifiers;
            }
        }
        if (null !== $this->value) $json['value'] = $this->value;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<InsurancePlanCost xmlns="http://hl7.org/fhir"></InsurancePlanCost>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->applicability) $this->applicability->xmlSerialize(true, $sxe->addChild('applicability'));
        if (0 < count($this->qualifiers)) {
            foreach($this->qualifiers as $qualifiers) {
                $qualifiers->xmlSerialize(true, $sxe->addChild('qualifiers'));
            }
        }
        if (null !== $this->value) $this->value->xmlSerialize(true, $sxe->addChild('value'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}