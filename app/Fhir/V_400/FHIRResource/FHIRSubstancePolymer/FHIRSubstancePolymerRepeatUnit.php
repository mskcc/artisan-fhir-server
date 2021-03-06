<?php namespace Fhir\V_400\FHIRResource\FHIRSubstancePolymer;

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
 * Todo.
 */
class FHIRSubstancePolymerRepeatUnit extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Todo.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $orientationOfPolymerisation = null;

    /**
     * Todo.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $repeatUnit = null;

    /**
     * Todo.
     * @var \Fhir\V_400\FHIRResource\FHIRSubstanceAmount
     */
    public $amount = null;

    /**
     * Todo.
     * @var \Fhir\V_400\FHIRResource\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation[]
     */
    public $degreeOfPolymerisation = array();

    /**
     * Todo.
     * @var \Fhir\V_400\FHIRResource\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation[]
     */
    public $structuralRepresentation = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'SubstancePolymer.RepeatUnit';

    /**
     * Todo.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getOrientationOfPolymerisation()
    {
        return $this->orientationOfPolymerisation;
    }

    /**
     * Todo.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $orientationOfPolymerisation
     * @return $this
     */
    public function setOrientationOfPolymerisation($orientationOfPolymerisation)
    {
        $this->orientationOfPolymerisation = $orientationOfPolymerisation;
        return $this;
    }

    /**
     * Todo.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getRepeatUnit()
    {
        return $this->repeatUnit;
    }

    /**
     * Todo.
     * @param \Fhir\V_400\FHIRElement\FHIRString $repeatUnit
     * @return $this
     */
    public function setRepeatUnit($repeatUnit)
    {
        $this->repeatUnit = $repeatUnit;
        return $this;
    }

    /**
     * Todo.
     * @return \Fhir\V_400\FHIRResource\FHIRSubstanceAmount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Todo.
     * @param \Fhir\V_400\FHIRResource\FHIRSubstanceAmount $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Todo.
     * @return \Fhir\V_400\FHIRResource\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation[]
     */
    public function getDegreeOfPolymerisation()
    {
        return $this->degreeOfPolymerisation;
    }

    /**
     * Todo.
     * @param \Fhir\V_400\FHIRResource\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation $degreeOfPolymerisation
     * @return $this
     */
    public function addDegreeOfPolymerisation($degreeOfPolymerisation)
    {
        $this->degreeOfPolymerisation[] = $degreeOfPolymerisation;
        return $this;
    }

    /**
     * Todo.
     * @return \Fhir\V_400\FHIRResource\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation[]
     */
    public function getStructuralRepresentation()
    {
        return $this->structuralRepresentation;
    }

    /**
     * Todo.
     * @param \Fhir\V_400\FHIRResource\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation $structuralRepresentation
     * @return $this
     */
    public function addStructuralRepresentation($structuralRepresentation)
    {
        $this->structuralRepresentation[] = $structuralRepresentation;
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
        if (null !== $this->orientationOfPolymerisation) $json['orientationOfPolymerisation'] = $this->orientationOfPolymerisation;
        if (null !== $this->repeatUnit) $json['repeatUnit'] = $this->repeatUnit;
        if (null !== $this->amount) $json['amount'] = $this->amount;
        if (0 < count($this->degreeOfPolymerisation)) {
            $json['degreeOfPolymerisation'] = [];
            foreach($this->degreeOfPolymerisation as $degreeOfPolymerisation) {
                $json['degreeOfPolymerisation'][] = $degreeOfPolymerisation;
            }
        }
        if (0 < count($this->structuralRepresentation)) {
            $json['structuralRepresentation'] = [];
            foreach($this->structuralRepresentation as $structuralRepresentation) {
                $json['structuralRepresentation'][] = $structuralRepresentation;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SubstancePolymerRepeatUnit xmlns="http://hl7.org/fhir"></SubstancePolymerRepeatUnit>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->orientationOfPolymerisation) $this->orientationOfPolymerisation->xmlSerialize(true, $sxe->addChild('orientationOfPolymerisation'));
        if (null !== $this->repeatUnit) $this->repeatUnit->xmlSerialize(true, $sxe->addChild('repeatUnit'));
        if (null !== $this->amount) $this->amount->xmlSerialize(true, $sxe->addChild('amount'));
        if (0 < count($this->degreeOfPolymerisation)) {
            foreach($this->degreeOfPolymerisation as $degreeOfPolymerisation) {
                $degreeOfPolymerisation->xmlSerialize(true, $sxe->addChild('degreeOfPolymerisation'));
            }
        }
        if (0 < count($this->structuralRepresentation)) {
            foreach($this->structuralRepresentation as $structuralRepresentation) {
                $structuralRepresentation->xmlSerialize(true, $sxe->addChild('structuralRepresentation'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}