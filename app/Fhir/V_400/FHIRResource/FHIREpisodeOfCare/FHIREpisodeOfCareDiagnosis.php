<?php namespace Fhir\V_400\FHIRResource\FHIREpisodeOfCare;

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
 * An association between a patient and an organization / healthcare provider(s) during which time encounters may occur. The managing organization assumes a level of responsibility for the patient during this time.
 */
class FHIREpisodeOfCareDiagnosis extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A list of conditions/problems/diagnoses that this episode of care is intended to be providing care for.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $condition = null;

    /**
     * Role that this diagnosis has within the episode of care (e.g. admission, billing, discharge …).
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $role = null;

    /**
     * Ranking of the diagnosis (for each role type).
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public $rank = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'EpisodeOfCare.Diagnosis';

    /**
     * A list of conditions/problems/diagnoses that this episode of care is intended to be providing care for.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * A list of conditions/problems/diagnoses that this episode of care is intended to be providing care for.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $condition
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Role that this diagnosis has within the episode of care (e.g. admission, billing, discharge …).
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Role that this diagnosis has within the episode of care (e.g. admission, billing, discharge …).
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Ranking of the diagnosis (for each role type).
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Ranking of the diagnosis (for each role type).
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $rank
     * @return $this
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
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
        if (null !== $this->condition) $json['condition'] = $this->condition;
        if (null !== $this->role) $json['role'] = $this->role;
        if (null !== $this->rank) $json['rank'] = $this->rank;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<EpisodeOfCareDiagnosis xmlns="http://hl7.org/fhir"></EpisodeOfCareDiagnosis>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->condition) $this->condition->xmlSerialize(true, $sxe->addChild('condition'));
        if (null !== $this->role) $this->role->xmlSerialize(true, $sxe->addChild('role'));
        if (null !== $this->rank) $this->rank->xmlSerialize(true, $sxe->addChild('rank'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}