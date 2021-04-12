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
 * A record of a request for diagnostic investigations, treatments, or operations to be performed.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRProcedureRequest extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifiers assigned to this order instance by the orderer and/or the receiver and/or order fulfiller.
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Protocol or definition followed by this request.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $definition = array();

    /**
     * Plan/proposal/order fulfilled by this request.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $basedOn = array();

    /**
     * The request takes the place of the referenced completed or terminated request(s).
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $replaces = array();

    /**
     * A shared identifier common to all procedure or diagnostic requests that were authorized more or less simultaneously by a single author, representing the composite or group identifier.
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier
     */
    public $requisition = null;

    /**
     * The status of the order.
     * @var \Fhir\V_301\FHIRElement\FHIRRequestStatus
     */
    public $status = null;

    /**
     * Whether the request is a proposal, plan, an original order or a reflex order.
     * @var \Fhir\V_301\FHIRElement\FHIRRequestIntent
     */
    public $intent = null;

    /**
     * Indicates how quickly the ProcedureRequest should be addressed with respect to other requests.
     * @var \Fhir\V_301\FHIRElement\FHIRRequestPriority
     */
    public $priority = null;

    /**
     * Set this to true if the record is saying that the procedure should NOT be performed.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $doNotPerform = null;

    /**
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = array();

    /**
     * A code that identifies a particular procedure, diagnostic investigation, or panel of investigations, that have been requested.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * On whom or what the procedure or diagnostic is to be performed. This is usually a human patient, but can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * An encounter or episode of care that provides additional information about the healthcare context in which this request is made.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * The date/time at which the diagnostic testing should occur. (choose any one of occurrence*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $occurrenceDateTime = null;

    /**
     * The date/time at which the diagnostic testing should occur. (choose any one of occurrence*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public $occurrencePeriod = null;

    /**
     * The date/time at which the diagnostic testing should occur. (choose any one of occurrence*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRTiming
     */
    public $occurrenceTiming = null;

    /**
     * If a CodeableConcept is present, it indicates the pre-condition for performing the procedure.  For example "pain", "on flare-up", etc. (choose any one of asNeeded*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $asNeededBoolean = null;

    /**
     * If a CodeableConcept is present, it indicates the pre-condition for performing the procedure.  For example "pain", "on flare-up", etc. (choose any one of asNeeded*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $asNeededCodeableConcept = null;

    /**
     * When the request transitioned to being actionable.
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $authoredOn = null;

    /**
     * The individual who initiated the request and has responsibility for its activation.
     * @var \Fhir\V_301\FHIRResource\FHIRProcedureRequest\FHIRProcedureRequestRequester
     */
    public $requester = null;

    /**
     * Desired type of performer for doing the diagnostic testing.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $performerType = null;

    /**
     * The desired perfomer for doing the diagnostic testing.  For example, the surgeon, dermatopathologist, endoscopist, etc.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * An explanation or justification for why this diagnostic investigation is being requested in coded or textual form.   This is often for billing purposes.  May relate to the resources referred to in supportingInformation.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = array();

    /**
     * Indicates another resource that provides a justification for why this diagnostic investigation is being requested.   May relate to the resources referred to in supportingInformation.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $reasonReference = array();

    /**
     * Additional clinical information about the patient or specimen that may influence the procedure or diagnostics or their interpretations.     This information includes diagnosis, clinical findings and other observations.  In laboratory ordering these are typically referred to as "ask at order entry questions (AOEs)".  This includes observations explicitly requested by the producer (filler) to provide context or supporting information needed to complete the order. For example,  reporting the amount of inspired oxygen for blood gas measurements.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $supportingInfo = array();

    /**
     * One or more specimens that the laboratory procedure will use.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $specimen = array();

    /**
     * Anatomic location where the procedure should be performed. This is the target site.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $bodySite = array();

    /**
     * Any other notes and comments made about the service request. For example, letting provider know that "patient hates needles" or other provider instructions.
     * @var \Fhir\V_301\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Key events in the history of the request.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $relevantHistory = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ProcedureRequest';

    /**
     * Identifiers assigned to this order instance by the orderer and/or the receiver and/or order fulfiller.
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifiers assigned to this order instance by the orderer and/or the receiver and/or order fulfiller.
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Protocol or definition followed by this request.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Protocol or definition followed by this request.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $definition
     * @return $this
     */
    public function addDefinition($definition)
    {
        $this->definition[] = $definition;
        return $this;
    }

    /**
     * Plan/proposal/order fulfilled by this request.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * Plan/proposal/order fulfilled by this request.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * The request takes the place of the referenced completed or terminated request(s).
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getReplaces()
    {
        return $this->replaces;
    }

    /**
     * The request takes the place of the referenced completed or terminated request(s).
     * @param \Fhir\V_301\FHIRElement\FHIRReference $replaces
     * @return $this
     */
    public function addReplaces($replaces)
    {
        $this->replaces[] = $replaces;
        return $this;
    }

    /**
     * A shared identifier common to all procedure or diagnostic requests that were authorized more or less simultaneously by a single author, representing the composite or group identifier.
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier
     */
    public function getRequisition()
    {
        return $this->requisition;
    }

    /**
     * A shared identifier common to all procedure or diagnostic requests that were authorized more or less simultaneously by a single author, representing the composite or group identifier.
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $requisition
     * @return $this
     */
    public function setRequisition($requisition)
    {
        $this->requisition = $requisition;
        return $this;
    }

    /**
     * The status of the order.
     * @return \Fhir\V_301\FHIRElement\FHIRRequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the order.
     * @param \Fhir\V_301\FHIRElement\FHIRRequestStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Whether the request is a proposal, plan, an original order or a reflex order.
     * @return \Fhir\V_301\FHIRElement\FHIRRequestIntent
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Whether the request is a proposal, plan, an original order or a reflex order.
     * @param \Fhir\V_301\FHIRElement\FHIRRequestIntent $intent
     * @return $this
     */
    public function setIntent($intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Indicates how quickly the ProcedureRequest should be addressed with respect to other requests.
     * @return \Fhir\V_301\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Indicates how quickly the ProcedureRequest should be addressed with respect to other requests.
     * @param \Fhir\V_301\FHIRElement\FHIRRequestPriority $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Set this to true if the record is saying that the procedure should NOT be performed.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }

    /**
     * Set this to true if the record is saying that the procedure should NOT be performed.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $doNotPerform
     * @return $this
     */
    public function setDoNotPerform($doNotPerform)
    {
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * A code that identifies a particular procedure, diagnostic investigation, or panel of investigations, that have been requested.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A code that identifies a particular procedure, diagnostic investigation, or panel of investigations, that have been requested.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * On whom or what the procedure or diagnostic is to be performed. This is usually a human patient, but can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * On whom or what the procedure or diagnostic is to be performed. This is usually a human patient, but can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
     * @param \Fhir\V_301\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * An encounter or episode of care that provides additional information about the healthcare context in which this request is made.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * An encounter or episode of care that provides additional information about the healthcare context in which this request is made.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * The date/time at which the diagnostic testing should occur. (choose any one of occurrence*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * The date/time at which the diagnostic testing should occur. (choose any one of occurrence*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return $this
     */
    public function setOccurrenceDateTime($occurrenceDateTime)
    {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * The date/time at which the diagnostic testing should occur. (choose any one of occurrence*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * The date/time at which the diagnostic testing should occur. (choose any one of occurrence*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRPeriod $occurrencePeriod
     * @return $this
     */
    public function setOccurrencePeriod($occurrencePeriod)
    {
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * The date/time at which the diagnostic testing should occur. (choose any one of occurrence*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRTiming
     */
    public function getOccurrenceTiming()
    {
        return $this->occurrenceTiming;
    }

    /**
     * The date/time at which the diagnostic testing should occur. (choose any one of occurrence*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRTiming $occurrenceTiming
     * @return $this
     */
    public function setOccurrenceTiming($occurrenceTiming)
    {
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * If a CodeableConcept is present, it indicates the pre-condition for performing the procedure.  For example "pain", "on flare-up", etc. (choose any one of asNeeded*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getAsNeededBoolean()
    {
        return $this->asNeededBoolean;
    }

    /**
     * If a CodeableConcept is present, it indicates the pre-condition for performing the procedure.  For example "pain", "on flare-up", etc. (choose any one of asNeeded*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $asNeededBoolean
     * @return $this
     */
    public function setAsNeededBoolean($asNeededBoolean)
    {
        $this->asNeededBoolean = $asNeededBoolean;
        return $this;
    }

    /**
     * If a CodeableConcept is present, it indicates the pre-condition for performing the procedure.  For example "pain", "on flare-up", etc. (choose any one of asNeeded*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getAsNeededCodeableConcept()
    {
        return $this->asNeededCodeableConcept;
    }

    /**
     * If a CodeableConcept is present, it indicates the pre-condition for performing the procedure.  For example "pain", "on flare-up", etc. (choose any one of asNeeded*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
     * @return $this
     */
    public function setAsNeededCodeableConcept($asNeededCodeableConcept)
    {
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
        return $this;
    }

    /**
     * When the request transitioned to being actionable.
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn()
    {
        return $this->authoredOn;
    }

    /**
     * When the request transitioned to being actionable.
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $authoredOn
     * @return $this
     */
    public function setAuthoredOn($authoredOn)
    {
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * The individual who initiated the request and has responsibility for its activation.
     * @return \Fhir\V_301\FHIRResource\FHIRProcedureRequest\FHIRProcedureRequestRequester
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * The individual who initiated the request and has responsibility for its activation.
     * @param \Fhir\V_301\FHIRResource\FHIRProcedureRequest\FHIRProcedureRequestRequester $requester
     * @return $this
     */
    public function setRequester($requester)
    {
        $this->requester = $requester;
        return $this;
    }

    /**
     * Desired type of performer for doing the diagnostic testing.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }

    /**
     * Desired type of performer for doing the diagnostic testing.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $performerType
     * @return $this
     */
    public function setPerformerType($performerType)
    {
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * The desired perfomer for doing the diagnostic testing.  For example, the surgeon, dermatopathologist, endoscopist, etc.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * The desired perfomer for doing the diagnostic testing.  For example, the surgeon, dermatopathologist, endoscopist, etc.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $performer
     * @return $this
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * An explanation or justification for why this diagnostic investigation is being requested in coded or textual form.   This is often for billing purposes.  May relate to the resources referred to in supportingInformation.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * An explanation or justification for why this diagnostic investigation is being requested in coded or textual form.   This is often for billing purposes.  May relate to the resources referred to in supportingInformation.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Indicates another resource that provides a justification for why this diagnostic investigation is being requested.   May relate to the resources referred to in supportingInformation.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Indicates another resource that provides a justification for why this diagnostic investigation is being requested.   May relate to the resources referred to in supportingInformation.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function addReasonReference($reasonReference)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * Additional clinical information about the patient or specimen that may influence the procedure or diagnostics or their interpretations.     This information includes diagnosis, clinical findings and other observations.  In laboratory ordering these are typically referred to as "ask at order entry questions (AOEs)".  This includes observations explicitly requested by the producer (filler) to provide context or supporting information needed to complete the order. For example,  reporting the amount of inspired oxygen for blood gas measurements.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * Additional clinical information about the patient or specimen that may influence the procedure or diagnostics or their interpretations.     This information includes diagnosis, clinical findings and other observations.  In laboratory ordering these are typically referred to as "ask at order entry questions (AOEs)".  This includes observations explicitly requested by the producer (filler) to provide context or supporting information needed to complete the order. For example,  reporting the amount of inspired oxygen for blood gas measurements.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $supportingInfo
     * @return $this
     */
    public function addSupportingInfo($supportingInfo)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * One or more specimens that the laboratory procedure will use.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * One or more specimens that the laboratory procedure will use.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $specimen
     * @return $this
     */
    public function addSpecimen($specimen)
    {
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * Anatomic location where the procedure should be performed. This is the target site.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Anatomic location where the procedure should be performed. This is the target site.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $bodySite
     * @return $this
     */
    public function addBodySite($bodySite)
    {
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * Any other notes and comments made about the service request. For example, letting provider know that "patient hates needles" or other provider instructions.
     * @return \Fhir\V_301\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Any other notes and comments made about the service request. For example, letting provider know that "patient hates needles" or other provider instructions.
     * @param \Fhir\V_301\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Key events in the history of the request.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getRelevantHistory()
    {
        return $this->relevantHistory;
    }

    /**
     * Key events in the history of the request.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $relevantHistory
     * @return $this
     */
    public function addRelevantHistory($relevantHistory)
    {
        $this->relevantHistory[] = $relevantHistory;
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
        if (0 < count($this->basedOn)) {
            $json['basedOn'] = [];
            foreach($this->basedOn as $basedOn) {
                $json['basedOn'][] = $basedOn;
            }
        }
        if (0 < count($this->replaces)) {
            $json['replaces'] = [];
            foreach($this->replaces as $replaces) {
                $json['replaces'][] = $replaces;
            }
        }
        if (null !== $this->requisition) $json['requisition'] = $this->requisition;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->intent) $json['intent'] = $this->intent;
        if (null !== $this->priority) $json['priority'] = $this->priority;
        if (null !== $this->doNotPerform) $json['doNotPerform'] = $this->doNotPerform;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                $json['category'][] = $category;
            }
        }
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->context) $json['context'] = $this->context;
        if (null !== $this->occurrenceDateTime) $json['occurrenceDateTime'] = $this->occurrenceDateTime;
        if (null !== $this->occurrencePeriod) $json['occurrencePeriod'] = $this->occurrencePeriod;
        if (null !== $this->occurrenceTiming) $json['occurrenceTiming'] = $this->occurrenceTiming;
        if (null !== $this->asNeededBoolean) $json['asNeededBoolean'] = $this->asNeededBoolean;
        if (null !== $this->asNeededCodeableConcept) $json['asNeededCodeableConcept'] = $this->asNeededCodeableConcept;
        if (null !== $this->authoredOn) $json['authoredOn'] = $this->authoredOn;
        if (null !== $this->requester) $json['requester'] = $this->requester;
        if (null !== $this->performerType) $json['performerType'] = $this->performerType;
        if (null !== $this->performer) $json['performer'] = $this->performer;
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
        if (0 < count($this->supportingInfo)) {
            $json['supportingInfo'] = [];
            foreach($this->supportingInfo as $supportingInfo) {
                $json['supportingInfo'][] = $supportingInfo;
            }
        }
        if (0 < count($this->specimen)) {
            $json['specimen'] = [];
            foreach($this->specimen as $specimen) {
                $json['specimen'][] = $specimen;
            }
        }
        if (0 < count($this->bodySite)) {
            $json['bodySite'] = [];
            foreach($this->bodySite as $bodySite) {
                $json['bodySite'][] = $bodySite;
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
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProcedureRequest xmlns="http://hl7.org/fhir"></ProcedureRequest>');
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
        if (0 < count($this->basedOn)) {
            foreach($this->basedOn as $basedOn) {
                $basedOn->xmlSerialize(true, $sxe->addChild('basedOn'));
            }
        }
        if (0 < count($this->replaces)) {
            foreach($this->replaces as $replaces) {
                $replaces->xmlSerialize(true, $sxe->addChild('replaces'));
            }
        }
        if (null !== $this->requisition) $this->requisition->xmlSerialize(true, $sxe->addChild('requisition'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->intent) $this->intent->xmlSerialize(true, $sxe->addChild('intent'));
        if (null !== $this->priority) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (null !== $this->doNotPerform) $this->doNotPerform->xmlSerialize(true, $sxe->addChild('doNotPerform'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->context) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (null !== $this->occurrenceDateTime) $this->occurrenceDateTime->xmlSerialize(true, $sxe->addChild('occurrenceDateTime'));
        if (null !== $this->occurrencePeriod) $this->occurrencePeriod->xmlSerialize(true, $sxe->addChild('occurrencePeriod'));
        if (null !== $this->occurrenceTiming) $this->occurrenceTiming->xmlSerialize(true, $sxe->addChild('occurrenceTiming'));
        if (null !== $this->asNeededBoolean) $this->asNeededBoolean->xmlSerialize(true, $sxe->addChild('asNeededBoolean'));
        if (null !== $this->asNeededCodeableConcept) $this->asNeededCodeableConcept->xmlSerialize(true, $sxe->addChild('asNeededCodeableConcept'));
        if (null !== $this->authoredOn) $this->authoredOn->xmlSerialize(true, $sxe->addChild('authoredOn'));
        if (null !== $this->requester) $this->requester->xmlSerialize(true, $sxe->addChild('requester'));
        if (null !== $this->performerType) $this->performerType->xmlSerialize(true, $sxe->addChild('performerType'));
        if (null !== $this->performer) $this->performer->xmlSerialize(true, $sxe->addChild('performer'));
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
        if (0 < count($this->supportingInfo)) {
            foreach($this->supportingInfo as $supportingInfo) {
                $supportingInfo->xmlSerialize(true, $sxe->addChild('supportingInfo'));
            }
        }
        if (0 < count($this->specimen)) {
            foreach($this->specimen as $specimen) {
                $specimen->xmlSerialize(true, $sxe->addChild('specimen'));
            }
        }
        if (0 < count($this->bodySite)) {
            foreach($this->bodySite as $bodySite) {
                $bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
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
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}