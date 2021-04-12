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
 * A task to be performed.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRTask extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The business identifier for this task.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     * @var \Fhir\V_400\FHIRElement\FHIRCanonical
     */
    public $instantiatesCanonical = null;

    /**
     * The URL pointing to an *externally* maintained  protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     * @var \Fhir\V_400\FHIRElement\FHIRUri
     */
    public $instantiatesUri = null;

    /**
     * BasedOn refers to a higher-level authorization that triggered the creation of the task.  It references a "request" resource such as a ServiceRequest, MedicationRequest, ServiceRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill.  This latter resource is referenced by FocusOn.  For example, based on a ServiceRequest (= BasedOn), a task is created to fulfill a procedureRequest ( = FocusOn ) to collect a specimen from a patient.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $basedOn = array();

    /**
     * An identifier that links together multiple tasks and other requests that were created in the same context.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public $groupIdentifier = null;

    /**
     * Task that this particular task is part of.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $partOf = array();

    /**
     * The current status of the task.
     * @var \Fhir\V_400\FHIRElement\FHIRTaskStatus
     */
    public $status = null;

    /**
     * An explanation as to why this task is held, failed, was refused, etc.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $statusReason = null;

    /**
     * Contains business-specific nuances of the business state.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $businessStatus = null;

    /**
     * Indicates the "level" of actionability associated with the Task, i.e. i+R[9]Cs this a proposed task, a planned task, an actionable task, etc.
     * @var \Fhir\V_400\FHIRElement\FHIRTaskIntent
     */
    public $intent = null;

    /**
     * Indicates how quickly the Task should be addressed with respect to other requests.
     * @var \Fhir\V_400\FHIRElement\FHIRRequestPriority
     */
    public $priority = null;

    /**
     * A name or code (or both) briefly describing what the task involves.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * A free-text description of what is to be performed.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The request being actioned or the resource being manipulated by this task.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $focus = null;

    /**
     * The entity who benefits from the performance of the service specified in the task (e.g., the patient).
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $for = null;

    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) during which this task was created.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * Identifies the time action was first taken against the task (start) and/or the time final action was taken against the task prior to marking it as completed (end).
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $executionPeriod = null;

    /**
     * The date and time this task was created.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $authoredOn = null;

    /**
     * The date and time of last modification to this task.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $lastModified = null;

    /**
     * The creator of the task.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $requester = null;

    /**
     * The kind of participant that should perform the task.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $performerType = array();

    /**
     * Individual organization or Device currently responsible for task execution.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $owner = null;

    /**
     * Principal physical location where the this task is performed.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * A description or code indicating why this task needs to be performed.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * A resource reference indicating why this task needs to be performed.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Task.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $insurance = array();

    /**
     * Free-text information captured about the task as it progresses.
     * @var \Fhir\V_400\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Links to Provenance records for past versions of this Task that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the task.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $relevantHistory = array();

    /**
     * If the Task.focus is a request resource and the task is seeking fulfillment (i.e. is asking for the request to be actioned), this element identifies any limitations on what parts of the referenced request should be actioned.
     * @var \Fhir\V_400\FHIRResource\FHIRTask\FHIRTaskRestriction
     */
    public $restriction = null;

    /**
     * Additional information that may be needed in the execution of the task.
     * @var \Fhir\V_400\FHIRResource\FHIRTask\FHIRTaskInput[]
     */
    public $input = array();

    /**
     * Outputs produced by the Task.
     * @var \Fhir\V_400\FHIRResource\FHIRTask\FHIRTaskOutput[]
     */
    public $output = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Task';

    /**
     * The business identifier for this task.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The business identifier for this task.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     * @return \Fhir\V_400\FHIRElement\FHIRCanonical
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     * @param \Fhir\V_400\FHIRElement\FHIRCanonical $instantiatesCanonical
     * @return $this
     */
    public function setInstantiatesCanonical($instantiatesCanonical)
    {
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * The URL pointing to an *externally* maintained  protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     * @return \Fhir\V_400\FHIRElement\FHIRUri
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * The URL pointing to an *externally* maintained  protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     * @param \Fhir\V_400\FHIRElement\FHIRUri $instantiatesUri
     * @return $this
     */
    public function setInstantiatesUri($instantiatesUri)
    {
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * BasedOn refers to a higher-level authorization that triggered the creation of the task.  It references a "request" resource such as a ServiceRequest, MedicationRequest, ServiceRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill.  This latter resource is referenced by FocusOn.  For example, based on a ServiceRequest (= BasedOn), a task is created to fulfill a procedureRequest ( = FocusOn ) to collect a specimen from a patient.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * BasedOn refers to a higher-level authorization that triggered the creation of the task.  It references a "request" resource such as a ServiceRequest, MedicationRequest, ServiceRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill.  This latter resource is referenced by FocusOn.  For example, based on a ServiceRequest (= BasedOn), a task is created to fulfill a procedureRequest ( = FocusOn ) to collect a specimen from a patient.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * An identifier that links together multiple tasks and other requests that were created in the same context.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public function getGroupIdentifier()
    {
        return $this->groupIdentifier;
    }

    /**
     * An identifier that links together multiple tasks and other requests that were created in the same context.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $groupIdentifier
     * @return $this
     */
    public function setGroupIdentifier($groupIdentifier)
    {
        $this->groupIdentifier = $groupIdentifier;
        return $this;
    }

    /**
     * Task that this particular task is part of.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Task that this particular task is part of.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function addPartOf($partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * The current status of the task.
     * @return \Fhir\V_400\FHIRElement\FHIRTaskStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The current status of the task.
     * @param \Fhir\V_400\FHIRElement\FHIRTaskStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * An explanation as to why this task is held, failed, was refused, etc.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * An explanation as to why this task is held, failed, was refused, etc.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $statusReason
     * @return $this
     */
    public function setStatusReason($statusReason)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Contains business-specific nuances of the business state.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getBusinessStatus()
    {
        return $this->businessStatus;
    }

    /**
     * Contains business-specific nuances of the business state.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $businessStatus
     * @return $this
     */
    public function setBusinessStatus($businessStatus)
    {
        $this->businessStatus = $businessStatus;
        return $this;
    }

    /**
     * Indicates the "level" of actionability associated with the Task, i.e. i+R[9]Cs this a proposed task, a planned task, an actionable task, etc.
     * @return \Fhir\V_400\FHIRElement\FHIRTaskIntent
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Indicates the "level" of actionability associated with the Task, i.e. i+R[9]Cs this a proposed task, a planned task, an actionable task, etc.
     * @param \Fhir\V_400\FHIRElement\FHIRTaskIntent $intent
     * @return $this
     */
    public function setIntent($intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Indicates how quickly the Task should be addressed with respect to other requests.
     * @return \Fhir\V_400\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Indicates how quickly the Task should be addressed with respect to other requests.
     * @param \Fhir\V_400\FHIRElement\FHIRRequestPriority $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * A name or code (or both) briefly describing what the task involves.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A name or code (or both) briefly describing what the task involves.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A free-text description of what is to be performed.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free-text description of what is to be performed.
     * @param \Fhir\V_400\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The request being actioned or the resource being manipulated by this task.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * The request being actioned or the resource being manipulated by this task.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $focus
     * @return $this
     */
    public function setFocus($focus)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * The entity who benefits from the performance of the service specified in the task (e.g., the patient).
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getFor()
    {
        return $this->for;
    }

    /**
     * The entity who benefits from the performance of the service specified in the task (e.g., the patient).
     * @param \Fhir\V_400\FHIRElement\FHIRReference $for
     * @return $this
     */
    public function setFor($for)
    {
        $this->for = $for;
        return $this;
    }

    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) during which this task was created.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) during which this task was created.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Identifies the time action was first taken against the task (start) and/or the time final action was taken against the task prior to marking it as completed (end).
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getExecutionPeriod()
    {
        return $this->executionPeriod;
    }

    /**
     * Identifies the time action was first taken against the task (start) and/or the time final action was taken against the task prior to marking it as completed (end).
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $executionPeriod
     * @return $this
     */
    public function setExecutionPeriod($executionPeriod)
    {
        $this->executionPeriod = $executionPeriod;
        return $this;
    }

    /**
     * The date and time this task was created.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn()
    {
        return $this->authoredOn;
    }

    /**
     * The date and time this task was created.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $authoredOn
     * @return $this
     */
    public function setAuthoredOn($authoredOn)
    {
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * The date and time of last modification to this task.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * The date and time of last modification to this task.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $lastModified
     * @return $this
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * The creator of the task.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * The creator of the task.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $requester
     * @return $this
     */
    public function setRequester($requester)
    {
        $this->requester = $requester;
        return $this;
    }

    /**
     * The kind of participant that should perform the task.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }

    /**
     * The kind of participant that should perform the task.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $performerType
     * @return $this
     */
    public function addPerformerType($performerType)
    {
        $this->performerType[] = $performerType;
        return $this;
    }

    /**
     * Individual organization or Device currently responsible for task execution.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Individual organization or Device currently responsible for task execution.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $owner
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Principal physical location where the this task is performed.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Principal physical location where the this task is performed.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * A description or code indicating why this task needs to be performed.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * A description or code indicating why this task needs to be performed.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function setReasonCode($reasonCode)
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * A resource reference indicating why this task needs to be performed.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * A resource reference indicating why this task needs to be performed.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function setReasonReference($reasonReference)
    {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Task.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Task.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $insurance
     * @return $this
     */
    public function addInsurance($insurance)
    {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * Free-text information captured about the task as it progresses.
     * @return \Fhir\V_400\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Free-text information captured about the task as it progresses.
     * @param \Fhir\V_400\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Links to Provenance records for past versions of this Task that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the task.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getRelevantHistory()
    {
        return $this->relevantHistory;
    }

    /**
     * Links to Provenance records for past versions of this Task that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the task.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $relevantHistory
     * @return $this
     */
    public function addRelevantHistory($relevantHistory)
    {
        $this->relevantHistory[] = $relevantHistory;
        return $this;
    }

    /**
     * If the Task.focus is a request resource and the task is seeking fulfillment (i.e. is asking for the request to be actioned), this element identifies any limitations on what parts of the referenced request should be actioned.
     * @return \Fhir\V_400\FHIRResource\FHIRTask\FHIRTaskRestriction
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * If the Task.focus is a request resource and the task is seeking fulfillment (i.e. is asking for the request to be actioned), this element identifies any limitations on what parts of the referenced request should be actioned.
     * @param \Fhir\V_400\FHIRResource\FHIRTask\FHIRTaskRestriction $restriction
     * @return $this
     */
    public function setRestriction($restriction)
    {
        $this->restriction = $restriction;
        return $this;
    }

    /**
     * Additional information that may be needed in the execution of the task.
     * @return \Fhir\V_400\FHIRResource\FHIRTask\FHIRTaskInput[]
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Additional information that may be needed in the execution of the task.
     * @param \Fhir\V_400\FHIRResource\FHIRTask\FHIRTaskInput $input
     * @return $this
     */
    public function addInput($input)
    {
        $this->input[] = $input;
        return $this;
    }

    /**
     * Outputs produced by the Task.
     * @return \Fhir\V_400\FHIRResource\FHIRTask\FHIRTaskOutput[]
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Outputs produced by the Task.
     * @param \Fhir\V_400\FHIRResource\FHIRTask\FHIRTaskOutput $output
     * @return $this
     */
    public function addOutput($output)
    {
        $this->output[] = $output;
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
        if (null !== $this->instantiatesCanonical) $json['instantiatesCanonical'] = $this->instantiatesCanonical;
        if (null !== $this->instantiatesUri) $json['instantiatesUri'] = $this->instantiatesUri;
        if (0 < count($this->basedOn)) {
            $json['basedOn'] = [];
            foreach($this->basedOn as $basedOn) {
                $json['basedOn'][] = $basedOn;
            }
        }
        if (null !== $this->groupIdentifier) $json['groupIdentifier'] = $this->groupIdentifier;
        if (0 < count($this->partOf)) {
            $json['partOf'] = [];
            foreach($this->partOf as $partOf) {
                $json['partOf'][] = $partOf;
            }
        }
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->statusReason) $json['statusReason'] = $this->statusReason;
        if (null !== $this->businessStatus) $json['businessStatus'] = $this->businessStatus;
        if (null !== $this->intent) $json['intent'] = $this->intent;
        if (null !== $this->priority) $json['priority'] = $this->priority;
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->focus) $json['focus'] = $this->focus;
        if (null !== $this->for) $json['for'] = $this->for;
        if (null !== $this->encounter) $json['encounter'] = $this->encounter;
        if (null !== $this->executionPeriod) $json['executionPeriod'] = $this->executionPeriod;
        if (null !== $this->authoredOn) $json['authoredOn'] = $this->authoredOn;
        if (null !== $this->lastModified) $json['lastModified'] = $this->lastModified;
        if (null !== $this->requester) $json['requester'] = $this->requester;
        if (0 < count($this->performerType)) {
            $json['performerType'] = [];
            foreach($this->performerType as $performerType) {
                $json['performerType'][] = $performerType;
            }
        }
        if (null !== $this->owner) $json['owner'] = $this->owner;
        if (null !== $this->location) $json['location'] = $this->location;
        if (null !== $this->reasonCode) $json['reasonCode'] = $this->reasonCode;
        if (null !== $this->reasonReference) $json['reasonReference'] = $this->reasonReference;
        if (0 < count($this->insurance)) {
            $json['insurance'] = [];
            foreach($this->insurance as $insurance) {
                $json['insurance'][] = $insurance;
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = $note;
            }
        }
        if (0 < count($this->relevantHistory)) {
            $json['relevantHistory'] = [];
            foreach($this->relevantHistory as $relevantHistory) {
                $json['relevantHistory'][] = $relevantHistory;
            }
        }
        if (null !== $this->restriction) $json['restriction'] = $this->restriction;
        if (0 < count($this->input)) {
            $json['input'] = [];
            foreach($this->input as $input) {
                $json['input'][] = $input;
            }
        }
        if (0 < count($this->output)) {
            $json['output'] = [];
            foreach($this->output as $output) {
                $json['output'][] = $output;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Task xmlns="http://hl7.org/fhir"></Task>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->instantiatesCanonical) $this->instantiatesCanonical->xmlSerialize(true, $sxe->addChild('instantiatesCanonical'));
        if (null !== $this->instantiatesUri) $this->instantiatesUri->xmlSerialize(true, $sxe->addChild('instantiatesUri'));
        if (0 < count($this->basedOn)) {
            foreach($this->basedOn as $basedOn) {
                $basedOn->xmlSerialize(true, $sxe->addChild('basedOn'));
            }
        }
        if (null !== $this->groupIdentifier) $this->groupIdentifier->xmlSerialize(true, $sxe->addChild('groupIdentifier'));
        if (0 < count($this->partOf)) {
            foreach($this->partOf as $partOf) {
                $partOf->xmlSerialize(true, $sxe->addChild('partOf'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->statusReason) $this->statusReason->xmlSerialize(true, $sxe->addChild('statusReason'));
        if (null !== $this->businessStatus) $this->businessStatus->xmlSerialize(true, $sxe->addChild('businessStatus'));
        if (null !== $this->intent) $this->intent->xmlSerialize(true, $sxe->addChild('intent'));
        if (null !== $this->priority) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->focus) $this->focus->xmlSerialize(true, $sxe->addChild('focus'));
        if (null !== $this->for) $this->for->xmlSerialize(true, $sxe->addChild('for'));
        if (null !== $this->encounter) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (null !== $this->executionPeriod) $this->executionPeriod->xmlSerialize(true, $sxe->addChild('executionPeriod'));
        if (null !== $this->authoredOn) $this->authoredOn->xmlSerialize(true, $sxe->addChild('authoredOn'));
        if (null !== $this->lastModified) $this->lastModified->xmlSerialize(true, $sxe->addChild('lastModified'));
        if (null !== $this->requester) $this->requester->xmlSerialize(true, $sxe->addChild('requester'));
        if (0 < count($this->performerType)) {
            foreach($this->performerType as $performerType) {
                $performerType->xmlSerialize(true, $sxe->addChild('performerType'));
            }
        }
        if (null !== $this->owner) $this->owner->xmlSerialize(true, $sxe->addChild('owner'));
        if (null !== $this->location) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (null !== $this->reasonCode) $this->reasonCode->xmlSerialize(true, $sxe->addChild('reasonCode'));
        if (null !== $this->reasonReference) $this->reasonReference->xmlSerialize(true, $sxe->addChild('reasonReference'));
        if (0 < count($this->insurance)) {
            foreach($this->insurance as $insurance) {
                $insurance->xmlSerialize(true, $sxe->addChild('insurance'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->relevantHistory)) {
            foreach($this->relevantHistory as $relevantHistory) {
                $relevantHistory->xmlSerialize(true, $sxe->addChild('relevantHistory'));
            }
        }
        if (null !== $this->restriction) $this->restriction->xmlSerialize(true, $sxe->addChild('restriction'));
        if (0 < count($this->input)) {
            foreach($this->input as $input) {
                $input->xmlSerialize(true, $sxe->addChild('input'));
            }
        }
        if (0 < count($this->output)) {
            foreach($this->output as $output) {
                $output->xmlSerialize(true, $sxe->addChild('output'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}