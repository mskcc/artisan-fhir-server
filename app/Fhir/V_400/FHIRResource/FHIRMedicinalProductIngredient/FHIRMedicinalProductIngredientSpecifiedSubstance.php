<?php namespace Fhir\V_400\FHIRResource\FHIRMedicinalProductIngredient;

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
 * An ingredient of a manufactured item or pharmaceutical product.
 */
class FHIRMedicinalProductIngredientSpecifiedSubstance extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The specified substance.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The group of specified substance, e.g. group 1 to 4.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $group = null;

    /**
     * Confidentiality level of the specified substance as the ingredient.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $confidentiality = null;

    /**
     * Quantity of the substance or specified substance present in the manufactured item or pharmaceutical product.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength[]
     */
    public $strength = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicinalProductIngredient.SpecifiedSubstance';

    /**
     * The specified substance.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The specified substance.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * The group of specified substance, e.g. group 1 to 4.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * The group of specified substance, e.g. group 1 to 4.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $group
     * @return $this
     */
    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Confidentiality level of the specified substance as the ingredient.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getConfidentiality()
    {
        return $this->confidentiality;
    }

    /**
     * Confidentiality level of the specified substance as the ingredient.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $confidentiality
     * @return $this
     */
    public function setConfidentiality($confidentiality)
    {
        $this->confidentiality = $confidentiality;
        return $this;
    }

    /**
     * Quantity of the substance or specified substance present in the manufactured item or pharmaceutical product.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength[]
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Quantity of the substance or specified substance present in the manufactured item or pharmaceutical product.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength $strength
     * @return $this
     */
    public function addStrength($strength)
    {
        $this->strength[] = $strength;
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
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->group) $json['group'] = $this->group;
        if (null !== $this->confidentiality) $json['confidentiality'] = $this->confidentiality;
        if (0 < count($this->strength)) {
            $json['strength'] = [];
            foreach($this->strength as $strength) {
                $json['strength'][] = $strength;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicinalProductIngredientSpecifiedSubstance xmlns="http://hl7.org/fhir"></MedicinalProductIngredientSpecifiedSubstance>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->group) $this->group->xmlSerialize(true, $sxe->addChild('group'));
        if (null !== $this->confidentiality) $this->confidentiality->xmlSerialize(true, $sxe->addChild('confidentiality'));
        if (0 < count($this->strength)) {
            foreach($this->strength as $strength) {
                $strength->xmlSerialize(true, $sxe->addChild('strength'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}