<?php namespace Fhir\V_400\FHIRResource\FHIRDeviceDefinition;

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
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 */
class FHIRDeviceDefinitionMaterial extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The substance.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $substance = null;

    /**
     * Indicates an alternative material of the device.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $alternate = null;

    /**
     * Whether the substance is a known or suspected allergen.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $allergenicIndicator = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'DeviceDefinition.Material';

    /**
     * The substance.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * The substance.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $substance
     * @return $this
     */
    public function setSubstance($substance)
    {
        $this->substance = $substance;
        return $this;
    }

    /**
     * Indicates an alternative material of the device.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getAlternate()
    {
        return $this->alternate;
    }

    /**
     * Indicates an alternative material of the device.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $alternate
     * @return $this
     */
    public function setAlternate($alternate)
    {
        $this->alternate = $alternate;
        return $this;
    }

    /**
     * Whether the substance is a known or suspected allergen.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getAllergenicIndicator()
    {
        return $this->allergenicIndicator;
    }

    /**
     * Whether the substance is a known or suspected allergen.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $allergenicIndicator
     * @return $this
     */
    public function setAllergenicIndicator($allergenicIndicator)
    {
        $this->allergenicIndicator = $allergenicIndicator;
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
        if (null !== $this->substance) $json['substance'] = $this->substance;
        if (null !== $this->alternate) $json['alternate'] = $this->alternate;
        if (null !== $this->allergenicIndicator) $json['allergenicIndicator'] = $this->allergenicIndicator;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DeviceDefinitionMaterial xmlns="http://hl7.org/fhir"></DeviceDefinitionMaterial>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->substance) $this->substance->xmlSerialize(true, $sxe->addChild('substance'));
        if (null !== $this->alternate) $this->alternate->xmlSerialize(true, $sxe->addChild('alternate'));
        if (null !== $this->allergenicIndicator) $this->allergenicIndicator->xmlSerialize(true, $sxe->addChild('allergenicIndicator'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}