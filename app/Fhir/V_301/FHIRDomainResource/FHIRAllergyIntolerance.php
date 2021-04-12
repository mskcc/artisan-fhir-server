<?php namespace Fhir\V_301\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: March 20th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use Fhir\V_301\FHIRResource\FHIRDomainResource;

/**
 * Risk of harmful or undesirable, physiological response which is unique to an individual and associated with exposure to a substance.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAllergyIntolerance extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The clinical status of the allergy or intolerance.
     * @var \Fhir\V_301\FHIRElement\FHIRAllergyIntoleranceClinicalStatus
     */
    public $clinicalStatus = null;

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified substance (including pharmaceutical product).
     * @var \Fhir\V_301\FHIRElement\FHIRAllergyIntoleranceVerificationStatus
     */
    public $verificationStatus = null;

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @var \Fhir\V_301\FHIRElement\FHIRAllergyIntoleranceType
     */
    public $type = null;

    /**
     * Category of the identified substance.
     * @var \Fhir\V_301\FHIRElement\FHIRAllergyIntoleranceCategory[]
     */
    public $category = array();

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified substance.
     * @var \Fhir\V_301\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    public $criticality = null;

    /**
     * Code for an allergy or intolerance statement (either a positive or a negated/excluded statement).  This may be a code for a substance or pharmaceutical product that is considered to be responsible for the adverse reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex allergy"), or a negated/excluded code for a specific substance or class (e.g., "No latex allergy") or a general or categorical negated statement (e.g.,  "No known allergy", "No known drug allergies").
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The patient who has the allergy or intolerance.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $onsetDateTime = null;

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $onsetAge = null;

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public $onsetPeriod = null;

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRRange
     */
    public $onsetRange = null;

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $onsetString = null;

    /**
     * The date on which the existance of the AllergyIntolerance was first asserted or acknowledged.
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $assertedDate = null;

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $recorder = null;

    /**
     * The source of the information about the allergy that is recorded.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $asserter = null;

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $lastOccurrence = null;

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     * @var \Fhir\V_301\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Details about each adverse reaction event linked to exposure to the identified substance.
     * @var \Fhir\V_301\FHIRResource\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    public $reaction = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'AllergyIntolerance';

    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The clinical status of the allergy or intolerance.
     * @return \Fhir\V_301\FHIRElement\FHIRAllergyIntoleranceClinicalStatus
     */
    public function getClinicalStatus()
    {
        return $this->clinicalStatus;
    }

    /**
     * The clinical status of the allergy or intolerance.
     * @param \Fhir\V_301\FHIRElement\FHIRAllergyIntoleranceClinicalStatus $clinicalStatus
     * @return $this
     */
    public function setClinicalStatus($clinicalStatus)
    {
        $this->clinicalStatus = $clinicalStatus;
        return $this;
    }

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified substance (including pharmaceutical product).
     * @return \Fhir\V_301\FHIRElement\FHIRAllergyIntoleranceVerificationStatus
     */
    public function getVerificationStatus()
    {
        return $this->verificationStatus;
    }

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified substance (including pharmaceutical product).
     * @param \Fhir\V_301\FHIRElement\FHIRAllergyIntoleranceVerificationStatus $verificationStatus
     * @return $this
     */
    public function setVerificationStatus($verificationStatus)
    {
        $this->verificationStatus = $verificationStatus;
        return $this;
    }

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @return \Fhir\V_301\FHIRElement\FHIRAllergyIntoleranceType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @param \Fhir\V_301\FHIRElement\FHIRAllergyIntoleranceType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Category of the identified substance.
     * @return \Fhir\V_301\FHIRElement\FHIRAllergyIntoleranceCategory[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Category of the identified substance.
     * @param \Fhir\V_301\FHIRElement\FHIRAllergyIntoleranceCategory $category
     * @return $this
     */
    public function addCategory($category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified substance.
     * @return \Fhir\V_301\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    public function getCriticality()
    {
        return $this->criticality;
    }

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified substance.
     * @param \Fhir\V_301\FHIRElement\FHIRAllergyIntoleranceCriticality $criticality
     * @return $this
     */
    public function setCriticality($criticality)
    {
        $this->criticality = $criticality;
        return $this;
    }

    /**
     * Code for an allergy or intolerance statement (either a positive or a negated/excluded statement).  This may be a code for a substance or pharmaceutical product that is considered to be responsible for the adverse reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex allergy"), or a negated/excluded code for a specific substance or class (e.g., "No latex allergy") or a general or categorical negated statement (e.g.,  "No known allergy", "No known drug allergies").
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Code for an allergy or intolerance statement (either a positive or a negated/excluded statement).  This may be a code for a substance or pharmaceutical product that is considered to be responsible for the adverse reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex allergy"), or a negated/excluded code for a specific substance or class (e.g., "No latex allergy") or a general or categorical negated statement (e.g.,  "No known allergy", "No known drug allergies").
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * The patient who has the allergy or intolerance.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The patient who has the allergy or intolerance.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getOnsetDateTime()
    {
        return $this->onsetDateTime;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $onsetDateTime
     * @return $this
     */
    public function setOnsetDateTime($onsetDateTime)
    {
        $this->onsetDateTime = $onsetDateTime;
        return $this;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetAge()
    {
        return $this->onsetAge;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRAge $onsetAge
     * @return $this
     */
    public function setOnsetAge($onsetAge)
    {
        $this->onsetAge = $onsetAge;
        return $this;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public function getOnsetPeriod()
    {
        return $this->onsetPeriod;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRPeriod $onsetPeriod
     * @return $this
     */
    public function setOnsetPeriod($onsetPeriod)
    {
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRRange
     */
    public function getOnsetRange()
    {
        return $this->onsetRange;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRRange $onsetRange
     * @return $this
     */
    public function setOnsetRange($onsetRange)
    {
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getOnsetString()
    {
        return $this->onsetString;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRString $onsetString
     * @return $this
     */
    public function setOnsetString($onsetString)
    {
        $this->onsetString = $onsetString;
        return $this;
    }

    /**
     * The date on which the existance of the AllergyIntolerance was first asserted or acknowledged.
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getAssertedDate()
    {
        return $this->assertedDate;
    }

    /**
     * The date on which the existance of the AllergyIntolerance was first asserted or acknowledged.
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $assertedDate
     * @return $this
     */
    public function setAssertedDate($assertedDate)
    {
        $this->assertedDate = $assertedDate;
        return $this;
    }

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getRecorder()
    {
        return $this->recorder;
    }

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $recorder
     * @return $this
     */
    public function setRecorder($recorder)
    {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * The source of the information about the allergy that is recorded.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getAsserter()
    {
        return $this->asserter;
    }

    /**
     * The source of the information about the allergy that is recorded.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $asserter
     * @return $this
     */
    public function setAsserter($asserter)
    {
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getLastOccurrence()
    {
        return $this->lastOccurrence;
    }

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $lastOccurrence
     * @return $this
     */
    public function setLastOccurrence($lastOccurrence)
    {
        $this->lastOccurrence = $lastOccurrence;
        return $this;
    }

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     * @return \Fhir\V_301\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     * @param \Fhir\V_301\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Details about each adverse reaction event linked to exposure to the identified substance.
     * @return \Fhir\V_301\FHIRResource\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * Details about each adverse reaction event linked to exposure to the identified substance.
     * @param \Fhir\V_301\FHIRResource\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction $reaction
     * @return $this
     */
    public function addReaction($reaction)
    {
        $this->reaction[] = $reaction;
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
        if (null !== $this->clinicalStatus) $json['clinicalStatus'] = $this->clinicalStatus;
        if (null !== $this->verificationStatus) $json['verificationStatus'] = $this->verificationStatus;
        if (null !== $this->type) $json['type'] = $this->type;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                $json['category'][] = $category;
            }
        }
        if (null !== $this->criticality) $json['criticality'] = $this->criticality;
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->patient) $json['patient'] = $this->patient;
        if (null !== $this->onsetDateTime) $json['onsetDateTime'] = $this->onsetDateTime;
        if (null !== $this->onsetAge) $json['onsetAge'] = $this->onsetAge;
        if (null !== $this->onsetPeriod) $json['onsetPeriod'] = $this->onsetPeriod;
        if (null !== $this->onsetRange) $json['onsetRange'] = $this->onsetRange;
        if (null !== $this->onsetString) $json['onsetString'] = $this->onsetString;
        if (null !== $this->assertedDate) $json['assertedDate'] = $this->assertedDate;
        if (null !== $this->recorder) $json['recorder'] = $this->recorder;
        if (null !== $this->asserter) $json['asserter'] = $this->asserter;
        if (null !== $this->lastOccurrence) $json['lastOccurrence'] = $this->lastOccurrence;
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = $note;
            }
        }
        if (0 < count($this->reaction)) {
            $json['reaction'] = [];
            foreach($this->reaction as $reaction) {
                $json['reaction'][] = $reaction;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AllergyIntolerance xmlns="http://hl7.org/fhir"></AllergyIntolerance>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->clinicalStatus) $this->clinicalStatus->xmlSerialize(true, $sxe->addChild('clinicalStatus'));
        if (null !== $this->verificationStatus) $this->verificationStatus->xmlSerialize(true, $sxe->addChild('verificationStatus'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (null !== $this->criticality) $this->criticality->xmlSerialize(true, $sxe->addChild('criticality'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->onsetDateTime) $this->onsetDateTime->xmlSerialize(true, $sxe->addChild('onsetDateTime'));
        if (null !== $this->onsetAge) $this->onsetAge->xmlSerialize(true, $sxe->addChild('onsetAge'));
        if (null !== $this->onsetPeriod) $this->onsetPeriod->xmlSerialize(true, $sxe->addChild('onsetPeriod'));
        if (null !== $this->onsetRange) $this->onsetRange->xmlSerialize(true, $sxe->addChild('onsetRange'));
        if (null !== $this->onsetString) $this->onsetString->xmlSerialize(true, $sxe->addChild('onsetString'));
        if (null !== $this->assertedDate) $this->assertedDate->xmlSerialize(true, $sxe->addChild('assertedDate'));
        if (null !== $this->recorder) $this->recorder->xmlSerialize(true, $sxe->addChild('recorder'));
        if (null !== $this->asserter) $this->asserter->xmlSerialize(true, $sxe->addChild('asserter'));
        if (null !== $this->lastOccurrence) $this->lastOccurrence->xmlSerialize(true, $sxe->addChild('lastOccurrence'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->reaction)) {
            foreach($this->reaction as $reaction) {
                $reaction->xmlSerialize(true, $sxe->addChild('reaction'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}