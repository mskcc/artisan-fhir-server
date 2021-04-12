<?php namespace Fhir\V_400\FHIRDomainResource;

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

use Fhir\V_400\FHIRResource\FHIRDomainResource;

/**
 * A patient's point-in-time set of recommendations (i.e. forecasting) according to a published schedule with optional supporting justification.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRImmunizationRecommendation extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique identifier assigned to this particular recommendation record.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The patient the recommendation(s) are for.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The date the immunization recommendation(s) were created.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Indicates the authority who published the protocol (e.g. ACIP).
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $authority = null;

    /**
     * Vaccine administration recommendations.
     * @var \Fhir\V_400\FHIRResource\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation[]
     */
    public $recommendation = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ImmunizationRecommendation';

    /**
     * A unique identifier assigned to this particular recommendation record.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique identifier assigned to this particular recommendation record.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The patient the recommendation(s) are for.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The patient the recommendation(s) are for.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The date the immunization recommendation(s) were created.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date the immunization recommendation(s) were created.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Indicates the authority who published the protocol (e.g. ACIP).
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * Indicates the authority who published the protocol (e.g. ACIP).
     * @param \Fhir\V_400\FHIRElement\FHIRReference $authority
     * @return $this
     */
    public function setAuthority($authority)
    {
        $this->authority = $authority;
        return $this;
    }

    /**
     * Vaccine administration recommendations.
     * @return \Fhir\V_400\FHIRResource\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation[]
     */
    public function getRecommendation()
    {
        return $this->recommendation;
    }

    /**
     * Vaccine administration recommendations.
     * @param \Fhir\V_400\FHIRResource\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation $recommendation
     * @return $this
     */
    public function addRecommendation($recommendation)
    {
        $this->recommendation[] = $recommendation;
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
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (null !== $this->patient) $json['patient'] = $this->patient;
        if (null !== $this->date) $json['date'] = $this->date;
        if (null !== $this->authority) $json['authority'] = $this->authority;
        if (0 < count($this->recommendation)) {
            $json['recommendation'] = [];
            foreach($this->recommendation as $recommendation) {
                $json['recommendation'][] = $recommendation;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImmunizationRecommendation xmlns="http://hl7.org/fhir"></ImmunizationRecommendation>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->authority) $this->authority->xmlSerialize(true, $sxe->addChild('authority'));
        if (0 < count($this->recommendation)) {
            foreach($this->recommendation as $recommendation) {
                $recommendation->xmlSerialize(true, $sxe->addChild('recommendation'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}