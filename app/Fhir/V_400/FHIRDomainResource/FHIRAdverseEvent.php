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
 * Actual or  potential/avoided event causing unintended physical injury resulting from or contributed to by medical care, a research study or other healthcare setting factors that requires additional monitoring, treatment, or hospitalization, or that results in death.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAdverseEvent extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Business identifiers assigned to this adverse event by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Whether the event actually happened, or just had the potential to. Note that this is independent of whether anyone was affected or harmed or how severely.
     * @var \Fhir\V_400\FHIRElement\FHIRAdverseEventActuality
     */
    public $actuality = null;

    /**
     * The overall type of event, intended for search and filtering purposes.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = array();

    /**
     * This element defines the specific type of event that occurred or that was prevented from occurring.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $event = null;

    /**
     * This subject or group impacted by the event.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The Encounter during which AdverseEvent was created or to which the creation of this record is tightly associated.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * The date (and perhaps time) when the adverse event occurred.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $detected = null;

    /**
     * The date on which the existence of the AdverseEvent was first recorded.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $recordedDate = null;

    /**
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $resultingCondition = array();

    /**
     * The information about where the adverse event occurred.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Assessment whether this event was of real importance.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $seriousness = null;

    /**
     * Describes the severity of the adverse event, in relation to the subject. Contrast to AdverseEvent.seriousness - a severe rash might not be serious, but a mild heart problem is.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $severity = null;

    /**
     * Describes the type of outcome from the adverse event.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $outcome = null;

    /**
     * Information on who recorded the adverse event.  May be the patient or a practitioner.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $recorder = null;

    /**
     * Parties that may or should contribute or have contributed information to the adverse event, which can consist of one or more activities.  Such information includes information leading to the decision to perform the activity and how to perform the activity (e.g. consultant), information that the activity itself seeks to reveal (e.g. informant of clinical history), or information about what activity was performed (e.g. informant witness).
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $contributor = array();

    /**
     * Describes the entity that is suspected to have caused the adverse event.
     * @var \Fhir\V_400\FHIRResource\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[]
     */
    public $suspectEntity = array();

    /**
     * AdverseEvent.subjectMedicalHistory.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $subjectMedicalHistory = array();

    /**
     * AdverseEvent.referenceDocument.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $referenceDocument = array();

    /**
     * AdverseEvent.study.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $study = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'AdverseEvent';

    /**
     * Business identifiers assigned to this adverse event by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Business identifiers assigned to this adverse event by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Whether the event actually happened, or just had the potential to. Note that this is independent of whether anyone was affected or harmed or how severely.
     * @return \Fhir\V_400\FHIRElement\FHIRAdverseEventActuality
     */
    public function getActuality()
    {
        return $this->actuality;
    }

    /**
     * Whether the event actually happened, or just had the potential to. Note that this is independent of whether anyone was affected or harmed or how severely.
     * @param \Fhir\V_400\FHIRElement\FHIRAdverseEventActuality $actuality
     * @return $this
     */
    public function setActuality($actuality)
    {
        $this->actuality = $actuality;
        return $this;
    }

    /**
     * The overall type of event, intended for search and filtering purposes.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * The overall type of event, intended for search and filtering purposes.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * This element defines the specific type of event that occurred or that was prevented from occurring.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * This element defines the specific type of event that occurred or that was prevented from occurring.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $event
     * @return $this
     */
    public function setEvent($event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * This subject or group impacted by the event.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * This subject or group impacted by the event.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The Encounter during which AdverseEvent was created or to which the creation of this record is tightly associated.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * The Encounter during which AdverseEvent was created or to which the creation of this record is tightly associated.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * The date (and perhaps time) when the adverse event occurred.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date (and perhaps time) when the adverse event occurred.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getDetected()
    {
        return $this->detected;
    }

    /**
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $detected
     * @return $this
     */
    public function setDetected($detected)
    {
        $this->detected = $detected;
        return $this;
    }

    /**
     * The date on which the existence of the AdverseEvent was first recorded.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getRecordedDate()
    {
        return $this->recordedDate;
    }

    /**
     * The date on which the existence of the AdverseEvent was first recorded.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $recordedDate
     * @return $this
     */
    public function setRecordedDate($recordedDate)
    {
        $this->recordedDate = $recordedDate;
        return $this;
    }

    /**
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getResultingCondition()
    {
        return $this->resultingCondition;
    }

    /**
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     * @param \Fhir\V_400\FHIRElement\FHIRReference $resultingCondition
     * @return $this
     */
    public function addResultingCondition($resultingCondition)
    {
        $this->resultingCondition[] = $resultingCondition;
        return $this;
    }

    /**
     * The information about where the adverse event occurred.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The information about where the adverse event occurred.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Assessment whether this event was of real importance.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getSeriousness()
    {
        return $this->seriousness;
    }

    /**
     * Assessment whether this event was of real importance.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $seriousness
     * @return $this
     */
    public function setSeriousness($seriousness)
    {
        $this->seriousness = $seriousness;
        return $this;
    }

    /**
     * Describes the severity of the adverse event, in relation to the subject. Contrast to AdverseEvent.seriousness - a severe rash might not be serious, but a mild heart problem is.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Describes the severity of the adverse event, in relation to the subject. Contrast to AdverseEvent.seriousness - a severe rash might not be serious, but a mild heart problem is.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $severity
     * @return $this
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Describes the type of outcome from the adverse event.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Describes the type of outcome from the adverse event.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $outcome
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Information on who recorded the adverse event.  May be the patient or a practitioner.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getRecorder()
    {
        return $this->recorder;
    }

    /**
     * Information on who recorded the adverse event.  May be the patient or a practitioner.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $recorder
     * @return $this
     */
    public function setRecorder($recorder)
    {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Parties that may or should contribute or have contributed information to the adverse event, which can consist of one or more activities.  Such information includes information leading to the decision to perform the activity and how to perform the activity (e.g. consultant), information that the activity itself seeks to reveal (e.g. informant of clinical history), or information about what activity was performed (e.g. informant witness).
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Parties that may or should contribute or have contributed information to the adverse event, which can consist of one or more activities.  Such information includes information leading to the decision to perform the activity and how to perform the activity (e.g. consultant), information that the activity itself seeks to reveal (e.g. informant of clinical history), or information about what activity was performed (e.g. informant witness).
     * @param \Fhir\V_400\FHIRElement\FHIRReference $contributor
     * @return $this
     */
    public function addContributor($contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * Describes the entity that is suspected to have caused the adverse event.
     * @return \Fhir\V_400\FHIRResource\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[]
     */
    public function getSuspectEntity()
    {
        return $this->suspectEntity;
    }

    /**
     * Describes the entity that is suspected to have caused the adverse event.
     * @param \Fhir\V_400\FHIRResource\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity $suspectEntity
     * @return $this
     */
    public function addSuspectEntity($suspectEntity)
    {
        $this->suspectEntity[] = $suspectEntity;
        return $this;
    }

    /**
     * AdverseEvent.subjectMedicalHistory.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getSubjectMedicalHistory()
    {
        return $this->subjectMedicalHistory;
    }

    /**
     * AdverseEvent.subjectMedicalHistory.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $subjectMedicalHistory
     * @return $this
     */
    public function addSubjectMedicalHistory($subjectMedicalHistory)
    {
        $this->subjectMedicalHistory[] = $subjectMedicalHistory;
        return $this;
    }

    /**
     * AdverseEvent.referenceDocument.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getReferenceDocument()
    {
        return $this->referenceDocument;
    }

    /**
     * AdverseEvent.referenceDocument.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $referenceDocument
     * @return $this
     */
    public function addReferenceDocument($referenceDocument)
    {
        $this->referenceDocument[] = $referenceDocument;
        return $this;
    }

    /**
     * AdverseEvent.study.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * AdverseEvent.study.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $study
     * @return $this
     */
    public function addStudy($study)
    {
        $this->study[] = $study;
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
        if (null !== $this->identifier) $json['identifier'] = $this->identifier;
        if (null !== $this->actuality) $json['actuality'] = $this->actuality;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                $json['category'][] = $category;
            }
        }
        if (null !== $this->event) $json['event'] = $this->event;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->encounter) $json['encounter'] = $this->encounter;
        if (null !== $this->date) $json['date'] = $this->date;
        if (null !== $this->detected) $json['detected'] = $this->detected;
        if (null !== $this->recordedDate) $json['recordedDate'] = $this->recordedDate;
        if (0 < count($this->resultingCondition)) {
            $json['resultingCondition'] = [];
            foreach($this->resultingCondition as $resultingCondition) {
                $json['resultingCondition'][] = $resultingCondition;
            }
        }
        if (null !== $this->location) $json['location'] = $this->location;
        if (null !== $this->seriousness) $json['seriousness'] = $this->seriousness;
        if (null !== $this->severity) $json['severity'] = $this->severity;
        if (null !== $this->outcome) $json['outcome'] = $this->outcome;
        if (null !== $this->recorder) $json['recorder'] = $this->recorder;
        if (0 < count($this->contributor)) {
            $json['contributor'] = [];
            foreach($this->contributor as $contributor) {
                $json['contributor'][] = $contributor;
            }
        }
        if (0 < count($this->suspectEntity)) {
            $json['suspectEntity'] = [];
            foreach($this->suspectEntity as $suspectEntity) {
                $json['suspectEntity'][] = $suspectEntity;
            }
        }
        if (0 < count($this->subjectMedicalHistory)) {
            $json['subjectMedicalHistory'] = [];
            foreach($this->subjectMedicalHistory as $subjectMedicalHistory) {
                $json['subjectMedicalHistory'][] = $subjectMedicalHistory;
            }
        }
        if (0 < count($this->referenceDocument)) {
            $json['referenceDocument'] = [];
            foreach($this->referenceDocument as $referenceDocument) {
                $json['referenceDocument'][] = $referenceDocument;
            }
        }
        if (0 < count($this->study)) {
            $json['study'] = [];
            foreach($this->study as $study) {
                $json['study'][] = $study;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AdverseEvent xmlns="http://hl7.org/fhir"></AdverseEvent>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->actuality) $this->actuality->xmlSerialize(true, $sxe->addChild('actuality'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (null !== $this->event) $this->event->xmlSerialize(true, $sxe->addChild('event'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->encounter) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->detected) $this->detected->xmlSerialize(true, $sxe->addChild('detected'));
        if (null !== $this->recordedDate) $this->recordedDate->xmlSerialize(true, $sxe->addChild('recordedDate'));
        if (0 < count($this->resultingCondition)) {
            foreach($this->resultingCondition as $resultingCondition) {
                $resultingCondition->xmlSerialize(true, $sxe->addChild('resultingCondition'));
            }
        }
        if (null !== $this->location) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (null !== $this->seriousness) $this->seriousness->xmlSerialize(true, $sxe->addChild('seriousness'));
        if (null !== $this->severity) $this->severity->xmlSerialize(true, $sxe->addChild('severity'));
        if (null !== $this->outcome) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (null !== $this->recorder) $this->recorder->xmlSerialize(true, $sxe->addChild('recorder'));
        if (0 < count($this->contributor)) {
            foreach($this->contributor as $contributor) {
                $contributor->xmlSerialize(true, $sxe->addChild('contributor'));
            }
        }
        if (0 < count($this->suspectEntity)) {
            foreach($this->suspectEntity as $suspectEntity) {
                $suspectEntity->xmlSerialize(true, $sxe->addChild('suspectEntity'));
            }
        }
        if (0 < count($this->subjectMedicalHistory)) {
            foreach($this->subjectMedicalHistory as $subjectMedicalHistory) {
                $subjectMedicalHistory->xmlSerialize(true, $sxe->addChild('subjectMedicalHistory'));
            }
        }
        if (0 < count($this->referenceDocument)) {
            foreach($this->referenceDocument as $referenceDocument) {
                $referenceDocument->xmlSerialize(true, $sxe->addChild('referenceDocument'));
            }
        }
        if (0 < count($this->study)) {
            foreach($this->study as $study) {
                $study->xmlSerialize(true, $sxe->addChild('study'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}