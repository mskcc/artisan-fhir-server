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
 * Describes a comparison of an immunization event against published recommendations to determine if the administration is "valid" in relation to those  recommendations.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRImmunizationEvaluation extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique identifier assigned to this immunization evaluation record.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Indicates the current status of the evaluation of the vaccination administration event.
     * @var \Fhir\V_400\FHIRElement\FHIRImmunizationEvaluationStatusCodes
     */
    public $status = null;

    /**
     * The individual for whom the evaluation is being done.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The date the evaluation of the vaccine administration event was performed.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Indicates the authority who published the protocol (e.g. ACIP).
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $authority = null;

    /**
     * The vaccine preventable disease the dose is being evaluated against.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $targetDisease = null;

    /**
     * The vaccine administration event being evaluated.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $immunizationEvent = null;

    /**
     * Indicates if the dose is valid or not valid with respect to the published recommendations.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $doseStatus = null;

    /**
     * Provides an explanation as to why the vaccine administration event is valid or not relative to the published recommendations.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $doseStatusReason = array();

    /**
     * Additional information about the evaluation.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $series = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public $doseNumberPositiveInt = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $doseNumberString = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public $seriesDosesPositiveInt = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $seriesDosesString = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ImmunizationEvaluation';

    /**
     * A unique identifier assigned to this immunization evaluation record.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique identifier assigned to this immunization evaluation record.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Indicates the current status of the evaluation of the vaccination administration event.
     * @return \Fhir\V_400\FHIRElement\FHIRImmunizationEvaluationStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates the current status of the evaluation of the vaccination administration event.
     * @param \Fhir\V_400\FHIRElement\FHIRImmunizationEvaluationStatusCodes $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The individual for whom the evaluation is being done.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The individual for whom the evaluation is being done.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The date the evaluation of the vaccine administration event was performed.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date the evaluation of the vaccine administration event was performed.
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
     * The vaccine preventable disease the dose is being evaluated against.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getTargetDisease()
    {
        return $this->targetDisease;
    }

    /**
     * The vaccine preventable disease the dose is being evaluated against.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $targetDisease
     * @return $this
     */
    public function setTargetDisease($targetDisease)
    {
        $this->targetDisease = $targetDisease;
        return $this;
    }

    /**
     * The vaccine administration event being evaluated.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getImmunizationEvent()
    {
        return $this->immunizationEvent;
    }

    /**
     * The vaccine administration event being evaluated.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $immunizationEvent
     * @return $this
     */
    public function setImmunizationEvent($immunizationEvent)
    {
        $this->immunizationEvent = $immunizationEvent;
        return $this;
    }

    /**
     * Indicates if the dose is valid or not valid with respect to the published recommendations.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseStatus()
    {
        return $this->doseStatus;
    }

    /**
     * Indicates if the dose is valid or not valid with respect to the published recommendations.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $doseStatus
     * @return $this
     */
    public function setDoseStatus($doseStatus)
    {
        $this->doseStatus = $doseStatus;
        return $this;
    }

    /**
     * Provides an explanation as to why the vaccine administration event is valid or not relative to the published recommendations.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getDoseStatusReason()
    {
        return $this->doseStatusReason;
    }

    /**
     * Provides an explanation as to why the vaccine administration event is valid or not relative to the published recommendations.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $doseStatusReason
     * @return $this
     */
    public function addDoseStatusReason($doseStatusReason)
    {
        $this->doseStatusReason[] = $doseStatusReason;
        return $this;
    }

    /**
     * Additional information about the evaluation.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Additional information about the evaluation.
     * @param \Fhir\V_400\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @param \Fhir\V_400\FHIRElement\FHIRString $series
     * @return $this
     */
    public function setSeries($series)
    {
        $this->series = $series;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public function getDoseNumberPositiveInt()
    {
        return $this->doseNumberPositiveInt;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $doseNumberPositiveInt
     * @return $this
     */
    public function setDoseNumberPositiveInt($doseNumberPositiveInt)
    {
        $this->doseNumberPositiveInt = $doseNumberPositiveInt;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getDoseNumberString()
    {
        return $this->doseNumberString;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRString $doseNumberString
     * @return $this
     */
    public function setDoseNumberString($doseNumberString)
    {
        $this->doseNumberString = $doseNumberString;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public function getSeriesDosesPositiveInt()
    {
        return $this->seriesDosesPositiveInt;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $seriesDosesPositiveInt
     * @return $this
     */
    public function setSeriesDosesPositiveInt($seriesDosesPositiveInt)
    {
        $this->seriesDosesPositiveInt = $seriesDosesPositiveInt;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getSeriesDosesString()
    {
        return $this->seriesDosesString;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRString $seriesDosesString
     * @return $this
     */
    public function setSeriesDosesString($seriesDosesString)
    {
        $this->seriesDosesString = $seriesDosesString;
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
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->patient) $json['patient'] = $this->patient;
        if (null !== $this->date) $json['date'] = $this->date;
        if (null !== $this->authority) $json['authority'] = $this->authority;
        if (null !== $this->targetDisease) $json['targetDisease'] = $this->targetDisease;
        if (null !== $this->immunizationEvent) $json['immunizationEvent'] = $this->immunizationEvent;
        if (null !== $this->doseStatus) $json['doseStatus'] = $this->doseStatus;
        if (0 < count($this->doseStatusReason)) {
            $json['doseStatusReason'] = [];
            foreach($this->doseStatusReason as $doseStatusReason) {
                $json['doseStatusReason'][] = $doseStatusReason;
            }
        }
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->series) $json['series'] = $this->series;
        if (null !== $this->doseNumberPositiveInt) $json['doseNumberPositiveInt'] = $this->doseNumberPositiveInt;
        if (null !== $this->doseNumberString) $json['doseNumberString'] = $this->doseNumberString;
        if (null !== $this->seriesDosesPositiveInt) $json['seriesDosesPositiveInt'] = $this->seriesDosesPositiveInt;
        if (null !== $this->seriesDosesString) $json['seriesDosesString'] = $this->seriesDosesString;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImmunizationEvaluation xmlns="http://hl7.org/fhir"></ImmunizationEvaluation>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->authority) $this->authority->xmlSerialize(true, $sxe->addChild('authority'));
        if (null !== $this->targetDisease) $this->targetDisease->xmlSerialize(true, $sxe->addChild('targetDisease'));
        if (null !== $this->immunizationEvent) $this->immunizationEvent->xmlSerialize(true, $sxe->addChild('immunizationEvent'));
        if (null !== $this->doseStatus) $this->doseStatus->xmlSerialize(true, $sxe->addChild('doseStatus'));
        if (0 < count($this->doseStatusReason)) {
            foreach($this->doseStatusReason as $doseStatusReason) {
                $doseStatusReason->xmlSerialize(true, $sxe->addChild('doseStatusReason'));
            }
        }
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->series) $this->series->xmlSerialize(true, $sxe->addChild('series'));
        if (null !== $this->doseNumberPositiveInt) $this->doseNumberPositiveInt->xmlSerialize(true, $sxe->addChild('doseNumberPositiveInt'));
        if (null !== $this->doseNumberString) $this->doseNumberString->xmlSerialize(true, $sxe->addChild('doseNumberString'));
        if (null !== $this->seriesDosesPositiveInt) $this->seriesDosesPositiveInt->xmlSerialize(true, $sxe->addChild('seriesDosesPositiveInt'));
        if (null !== $this->seriesDosesString) $this->seriesDosesString->xmlSerialize(true, $sxe->addChild('seriesDosesString'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}