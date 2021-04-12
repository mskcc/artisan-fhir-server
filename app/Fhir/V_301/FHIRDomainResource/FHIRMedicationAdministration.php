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
 * Describes the event of a patient consuming or otherwise being administered a medication.  This may be as simple as swallowing a tablet or it may be a long running infusion.  Related resources tie this event to the authorizing prescription, and the specific encounter between patient and health care practitioner.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicationAdministration extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * External identifier - FHIR will generate its own internal identifiers (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event.  Particularly important if these records have to be updated.
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * A protocol, guideline, orderset or other definition that was adhered to in whole or in part by this event.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $definition = array();

    /**
     * A larger event of which this particular event is a component or step.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $partOf = array();

    /**
     * Will generally be set to show that the administration has been completed.  For some long running administrations such as infusions it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     * @var \Fhir\V_301\FHIRElement\FHIRMedicationAdministrationStatus
     */
    public $status = null;

    /**
     * Indicates the type of medication administration and where the medication is expected to be consumed or administered.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $medicationCodeableConcept = null;

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $medicationReference = null;

    /**
     * The person or animal or group receiving the medication.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The visit, admission or other contact between patient and health care provider the medication administration was performed as part of.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $supportingInformation = array();

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effective*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $effectiveDateTime = null;

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effective*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * The individual who was responsible for giving the medication to the patient.
     * @var \Fhir\V_301\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer[]
     */
    public $performer = array();

    /**
     * Set this to true if the record is saying that the medication was NOT administered.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $notGiven = null;

    /**
     * A code indicating why the administration was not performed.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonNotGiven = array();

    /**
     * A code indicating why the medication was given.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = array();

    /**
     * Condition or observation that supports why the medication was administered.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $reasonReference = array();

    /**
     * The original request, instruction or authority to perform the administration.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $prescription = null;

    /**
     * The device used in administering the medication to the patient.  For example, a particular infusion pump.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $device = array();

    /**
     * Extra information about the medication administration that is not conveyed by the other attributes.
     * @var \Fhir\V_301\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     * @var \Fhir\V_301\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     */
    public $dosage = null;

    /**
     * A summary of the events of interest that have occurred, such as when the administration was verified.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $eventHistory = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationAdministration';

    /**
     * External identifier - FHIR will generate its own internal identifiers (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event.  Particularly important if these records have to be updated.
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * External identifier - FHIR will generate its own internal identifiers (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event.  Particularly important if these records have to be updated.
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A protocol, guideline, orderset or other definition that was adhered to in whole or in part by this event.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * A protocol, guideline, orderset or other definition that was adhered to in whole or in part by this event.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $definition
     * @return $this
     */
    public function addDefinition($definition)
    {
        $this->definition[] = $definition;
        return $this;
    }

    /**
     * A larger event of which this particular event is a component or step.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * A larger event of which this particular event is a component or step.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function addPartOf($partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * Will generally be set to show that the administration has been completed.  For some long running administrations such as infusions it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     * @return \Fhir\V_301\FHIRElement\FHIRMedicationAdministrationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Will generally be set to show that the administration has been completed.  For some long running administrations such as infusions it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     * @param \Fhir\V_301\FHIRElement\FHIRMedicationAdministrationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates the type of medication administration and where the medication is expected to be consumed or administered.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Indicates the type of medication administration and where the medication is expected to be consumed or administered.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getMedicationCodeableConcept()
    {
        return $this->medicationCodeableConcept;
    }

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @return $this
     */
    public function setMedicationCodeableConcept($medicationCodeableConcept)
    {
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getMedicationReference()
    {
        return $this->medicationReference;
    }

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRReference $medicationReference
     * @return $this
     */
    public function setMedicationReference($medicationReference)
    {
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * The person or animal or group receiving the medication.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The person or animal or group receiving the medication.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The visit, admission or other contact between patient and health care provider the medication administration was performed as part of.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * The visit, admission or other contact between patient and health care provider the medication administration was performed as part of.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $supportingInformation
     * @return $this
     */
    public function addSupportingInformation($supportingInformation)
    {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effective*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime()
    {
        return $this->effectiveDateTime;
    }

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effective*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $effectiveDateTime
     * @return $this
     */
    public function setEffectiveDateTime($effectiveDateTime)
    {
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effective*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effective*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRPeriod $effectivePeriod
     * @return $this
     */
    public function setEffectivePeriod($effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * The individual who was responsible for giving the medication to the patient.
     * @return \Fhir\V_301\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * The individual who was responsible for giving the medication to the patient.
     * @param \Fhir\V_301\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer $performer
     * @return $this
     */
    public function addPerformer($performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * Set this to true if the record is saying that the medication was NOT administered.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getNotGiven()
    {
        return $this->notGiven;
    }

    /**
     * Set this to true if the record is saying that the medication was NOT administered.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $notGiven
     * @return $this
     */
    public function setNotGiven($notGiven)
    {
        $this->notGiven = $notGiven;
        return $this;
    }

    /**
     * A code indicating why the administration was not performed.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonNotGiven()
    {
        return $this->reasonNotGiven;
    }

    /**
     * A code indicating why the administration was not performed.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $reasonNotGiven
     * @return $this
     */
    public function addReasonNotGiven($reasonNotGiven)
    {
        $this->reasonNotGiven[] = $reasonNotGiven;
        return $this;
    }

    /**
     * A code indicating why the medication was given.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * A code indicating why the medication was given.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Condition or observation that supports why the medication was administered.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Condition or observation that supports why the medication was administered.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function addReasonReference($reasonReference)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * The original request, instruction or authority to perform the administration.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getPrescription()
    {
        return $this->prescription;
    }

    /**
     * The original request, instruction or authority to perform the administration.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $prescription
     * @return $this
     */
    public function setPrescription($prescription)
    {
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * The device used in administering the medication to the patient.  For example, a particular infusion pump.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The device used in administering the medication to the patient.  For example, a particular infusion pump.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $device
     * @return $this
     */
    public function addDevice($device)
    {
        $this->device[] = $device;
        return $this;
    }

    /**
     * Extra information about the medication administration that is not conveyed by the other attributes.
     * @return \Fhir\V_301\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Extra information about the medication administration that is not conveyed by the other attributes.
     * @param \Fhir\V_301\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     * @return \Fhir\V_301\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     * @param \Fhir\V_301\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage $dosage
     * @return $this
     */
    public function setDosage($dosage)
    {
        $this->dosage = $dosage;
        return $this;
    }

    /**
     * A summary of the events of interest that have occurred, such as when the administration was verified.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getEventHistory()
    {
        return $this->eventHistory;
    }

    /**
     * A summary of the events of interest that have occurred, such as when the administration was verified.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $eventHistory
     * @return $this
     */
    public function addEventHistory($eventHistory)
    {
        $this->eventHistory[] = $eventHistory;
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
        if (0 < count($this->definition)) {
            $json['definition'] = [];
            foreach($this->definition as $definition) {
                $json['definition'][] = $definition;
            }
        }
        if (0 < count($this->partOf)) {
            $json['partOf'] = [];
            foreach($this->partOf as $partOf) {
                $json['partOf'][] = $partOf;
            }
        }
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->category) $json['category'] = $this->category;
        if (null !== $this->medicationCodeableConcept) $json['medicationCodeableConcept'] = $this->medicationCodeableConcept;
        if (null !== $this->medicationReference) $json['medicationReference'] = $this->medicationReference;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->context) $json['context'] = $this->context;
        if (0 < count($this->supportingInformation)) {
            $json['supportingInformation'] = [];
            foreach($this->supportingInformation as $supportingInformation) {
                $json['supportingInformation'][] = $supportingInformation;
            }
        }
        if (null !== $this->effectiveDateTime) $json['effectiveDateTime'] = $this->effectiveDateTime;
        if (null !== $this->effectivePeriod) $json['effectivePeriod'] = $this->effectivePeriod;
        if (0 < count($this->performer)) {
            $json['performer'] = [];
            foreach($this->performer as $performer) {
                $json['performer'][] = $performer;
            }
        }
        if (null !== $this->notGiven) $json['notGiven'] = $this->notGiven;
        if (0 < count($this->reasonNotGiven)) {
            $json['reasonNotGiven'] = [];
            foreach($this->reasonNotGiven as $reasonNotGiven) {
                $json['reasonNotGiven'][] = $reasonNotGiven;
            }
        }
        if (0 < count($this->reasonCode)) {
            $json['reasonCode'] = [];
            foreach($this->reasonCode as $reasonCode) {
                $json['reasonCode'][] = $reasonCode;
            }
        }
        if (0 < count($this->reasonReference)) {
            $json['reasonReference'] = [];
            foreach($this->reasonReference as $reasonReference) {
                $json['reasonReference'][] = $reasonReference;
            }
        }
        if (null !== $this->prescription) $json['prescription'] = $this->prescription;
        if (0 < count($this->device)) {
            $json['device'] = [];
            foreach($this->device as $device) {
                $json['device'][] = $device;
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = $note;
            }
        }
        if (null !== $this->dosage) $json['dosage'] = $this->dosage;
        if (0 < count($this->eventHistory)) {
            $json['eventHistory'] = [];
            foreach($this->eventHistory as $eventHistory) {
                $json['eventHistory'][] = $eventHistory;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationAdministration xmlns="http://hl7.org/fhir"></MedicationAdministration>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->definition)) {
            foreach($this->definition as $definition) {
                $definition->xmlSerialize(true, $sxe->addChild('definition'));
            }
        }
        if (0 < count($this->partOf)) {
            foreach($this->partOf as $partOf) {
                $partOf->xmlSerialize(true, $sxe->addChild('partOf'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->category) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (null !== $this->medicationCodeableConcept) $this->medicationCodeableConcept->xmlSerialize(true, $sxe->addChild('medicationCodeableConcept'));
        if (null !== $this->medicationReference) $this->medicationReference->xmlSerialize(true, $sxe->addChild('medicationReference'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->context) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (0 < count($this->supportingInformation)) {
            foreach($this->supportingInformation as $supportingInformation) {
                $supportingInformation->xmlSerialize(true, $sxe->addChild('supportingInformation'));
            }
        }
        if (null !== $this->effectiveDateTime) $this->effectiveDateTime->xmlSerialize(true, $sxe->addChild('effectiveDateTime'));
        if (null !== $this->effectivePeriod) $this->effectivePeriod->xmlSerialize(true, $sxe->addChild('effectivePeriod'));
        if (0 < count($this->performer)) {
            foreach($this->performer as $performer) {
                $performer->xmlSerialize(true, $sxe->addChild('performer'));
            }
        }
        if (null !== $this->notGiven) $this->notGiven->xmlSerialize(true, $sxe->addChild('notGiven'));
        if (0 < count($this->reasonNotGiven)) {
            foreach($this->reasonNotGiven as $reasonNotGiven) {
                $reasonNotGiven->xmlSerialize(true, $sxe->addChild('reasonNotGiven'));
            }
        }
        if (0 < count($this->reasonCode)) {
            foreach($this->reasonCode as $reasonCode) {
                $reasonCode->xmlSerialize(true, $sxe->addChild('reasonCode'));
            }
        }
        if (0 < count($this->reasonReference)) {
            foreach($this->reasonReference as $reasonReference) {
                $reasonReference->xmlSerialize(true, $sxe->addChild('reasonReference'));
            }
        }
        if (null !== $this->prescription) $this->prescription->xmlSerialize(true, $sxe->addChild('prescription'));
        if (0 < count($this->device)) {
            foreach($this->device as $device) {
                $device->xmlSerialize(true, $sxe->addChild('device'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (null !== $this->dosage) $this->dosage->xmlSerialize(true, $sxe->addChild('dosage'));
        if (0 < count($this->eventHistory)) {
            foreach($this->eventHistory as $eventHistory) {
                $eventHistory->xmlSerialize(true, $sxe->addChild('eventHistory'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}