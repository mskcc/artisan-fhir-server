<?php namespace Fhir\V_400\FHIRResource;

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
 * A populatioof people with some set of grouping criteria.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRPopulation extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * @var \Fhir\V_400\FHIRElement\FHIRRange
     */
    public $ageRange = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $ageCodeableConcept = null;

    /**
     * The gender of the specific population.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $gender = null;

    /**
     * Race of the specific population.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $race = null;

    /**
     * The existing physiological conditions of the specific population to which this applies.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $physiologicalCondition = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Population';

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRRange
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRRange $ageRange
     * @return $this
     */
    public function setAgeRange($ageRange)
    {
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getAgeCodeableConcept()
    {
        return $this->ageCodeableConcept;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $ageCodeableConcept
     * @return $this
     */
    public function setAgeCodeableConcept($ageCodeableConcept)
    {
        $this->ageCodeableConcept = $ageCodeableConcept;
        return $this;
    }

    /**
     * The gender of the specific population.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * The gender of the specific population.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Race of the specific population.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Race of the specific population.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $race
     * @return $this
     */
    public function setRace($race)
    {
        $this->race = $race;
        return $this;
    }

    /**
     * The existing physiological conditions of the specific population to which this applies.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getPhysiologicalCondition()
    {
        return $this->physiologicalCondition;
    }

    /**
     * The existing physiological conditions of the specific population to which this applies.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $physiologicalCondition
     * @return $this
     */
    public function setPhysiologicalCondition($physiologicalCondition)
    {
        $this->physiologicalCondition = $physiologicalCondition;
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
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->ageRange) $json['ageRange'] = $this->ageRange;
        if (null !== $this->ageCodeableConcept) $json['ageCodeableConcept'] = $this->ageCodeableConcept;
        if (null !== $this->gender) $json['gender'] = $this->gender;
        if (null !== $this->race) $json['race'] = $this->race;
        if (null !== $this->physiologicalCondition) $json['physiologicalCondition'] = $this->physiologicalCondition;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Population xmlns="http://hl7.org/fhir"></Population>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->ageRange) $this->ageRange->xmlSerialize(true, $sxe->addChild('ageRange'));
        if (null !== $this->ageCodeableConcept) $this->ageCodeableConcept->xmlSerialize(true, $sxe->addChild('ageCodeableConcept'));
        if (null !== $this->gender) $this->gender->xmlSerialize(true, $sxe->addChild('gender'));
        if (null !== $this->race) $this->race->xmlSerialize(true, $sxe->addChild('race'));
        if (null !== $this->physiologicalCondition) $this->physiologicalCondition->xmlSerialize(true, $sxe->addChild('physiologicalCondition'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}