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
 * Represents a request for a patient to employ a medical device. The device may be an implantable device, or an external assistive device, such as a walker.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDeviceRequest extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifiers assigned to this order by the orderer or by the receiver.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     * @var \Fhir\V_400\FHIRElement\FHIRCanonical[]
     */
    public $instantiatesCanonical = array();

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     * @var \Fhir\V_400\FHIRElement\FHIRUri[]
     */
    public $instantiatesUri = array();

    /**
     * Plan/proposal/order fulfilled by this request.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $basedOn = array();

    /**
     * The request takes the place of the referenced completed or terminated request(s).
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $priorRequest = array();

    /**
     * Composite request this is part of.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public $groupIdentifier = null;

    /**
     * The status of the request.
     * @var \Fhir\V_400\FHIRElement\FHIRRequestStatus
     */
    public $status = null;

    /**
     * Whether the request is a proposal, plan, an original order or a reflex order.
     * @var \Fhir\V_400\FHIRElement\FHIRRequestIntent
     */
    public $intent = null;

    /**
     * Indicates how quickly the {{title}} should be addressed with respect to other requests.
     * @var \Fhir\V_400\FHIRElement\FHIRRequestPriority
     */
    public $priority = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $codeReference = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $codeCodeableConcept = null;

    /**
     * Specific parameters for the ordered item.  For example, the prism value for lenses.
     * @var \Fhir\V_400\FHIRResource\FHIRDeviceRequest\FHIRDeviceRequestParameter[]
     */
    public $parameter = array();

    /**
     * The patient who will use the device.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * An encounter that provides additional context in which this request is made.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $occurrenceDateTime = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $occurrencePeriod = null;

    /**
     * @var \Fhir\V_400\FHIRResource\FHIRTiming
     */
    public $occurrenceTiming = null;

    /**
     * When the request transitioned to being actionable.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $authoredOn = null;

    /**
     * The individual who initiated the request and has responsibility for its activation.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $requester = null;

    /**
     * Desired type of performer for doing the diagnostic testing.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $performerType = null;

    /**
     * The desired performer for doing the diagnostic testing.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * Reason or justification for the use of this device.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = array();

    /**
     * Reason or justification for the use of this device.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $reasonReference = array();

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $insurance = array();

    /**
     * Additional clinical information about the patient that may influence the request fulfilment.  For example, this may include where on the subject's body the device will be used (i.e. the target site).
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $supportingInfo = array();

    /**
     * Details about this request that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @var \Fhir\V_400\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Key events in the history of the request.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $relevantHistory = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'DeviceRequest';

    /**
     * Identifiers assigned to this order by the orderer or by the receiver.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifiers assigned to this order by the orderer or by the receiver.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     * @return \Fhir\V_400\FHIRElement\FHIRCanonical[]
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     * @param \Fhir\V_400\FHIRElement\FHIRCanonical $instantiatesCanonical
     * @return $this
     */
    public function addInstantiatesCanonical($instantiatesCanonical)
    {
        $this->instantiatesCanonical[] = $instantiatesCanonical;
        return $this;
    }

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     * @return \Fhir\V_400\FHIRElement\FHIRUri[]
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     * @param \Fhir\V_400\FHIRElement\FHIRUri $instantiatesUri
     * @return $this
     */
    public function addInstantiatesUri($instantiatesUri)
    {
        $this->instantiatesUri[] = $instantiatesUri;
        return $this;
    }

    /**
     * Plan/proposal/order fulfilled by this request.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * Plan/proposal/order fulfilled by this request.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * The request takes the place of the referenced completed or terminated request(s).
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getPriorRequest()
    {
        return $this->priorRequest;
    }

    /**
     * The request takes the place of the referenced completed or terminated request(s).
     * @param \Fhir\V_400\FHIRElement\FHIRReference $priorRequest
     * @return $this
     */
    public function addPriorRequest($priorRequest)
    {
        $this->priorRequest[] = $priorRequest;
        return $this;
    }

    /**
     * Composite request this is part of.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public function getGroupIdentifier()
    {
        return $this->groupIdentifier;
    }

    /**
     * Composite request this is part of.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $groupIdentifier
     * @return $this
     */
    public function setGroupIdentifier($groupIdentifier)
    {
        $this->groupIdentifier = $groupIdentifier;
        return $this;
    }

    /**
     * The status of the request.
     * @return \Fhir\V_400\FHIRElement\FHIRRequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the request.
     * @param \Fhir\V_400\FHIRElement\FHIRRequestStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Whether the request is a proposal, plan, an original order or a reflex order.
     * @return \Fhir\V_400\FHIRElement\FHIRRequestIntent
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Whether the request is a proposal, plan, an original order or a reflex order.
     * @param \Fhir\V_400\FHIRElement\FHIRRequestIntent $intent
     * @return $this
     */
    public function setIntent($intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Indicates how quickly the {{title}} should be addressed with respect to other requests.
     * @return \Fhir\V_400\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Indicates how quickly the {{title}} should be addressed with respect to other requests.
     * @param \Fhir\V_400\FHIRElement\FHIRRequestPriority $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getCodeReference()
    {
        return $this->codeReference;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRReference $codeReference
     * @return $this
     */
    public function setCodeReference($codeReference)
    {
        $this->codeReference = $codeReference;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getCodeCodeableConcept()
    {
        return $this->codeCodeableConcept;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $codeCodeableConcept
     * @return $this
     */
    public function setCodeCodeableConcept($codeCodeableConcept)
    {
        $this->codeCodeableConcept = $codeCodeableConcept;
        return $this;
    }

    /**
     * Specific parameters for the ordered item.  For example, the prism value for lenses.
     * @return \Fhir\V_400\FHIRResource\FHIRDeviceRequest\FHIRDeviceRequestParameter[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Specific parameters for the ordered item.  For example, the prism value for lenses.
     * @param \Fhir\V_400\FHIRResource\FHIRDeviceRequest\FHIRDeviceRequestParameter $parameter
     * @return $this
     */
    public function addParameter($parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * The patient who will use the device.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The patient who will use the device.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * An encounter that provides additional context in which this request is made.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * An encounter that provides additional context in which this request is made.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return $this
     */
    public function setOccurrenceDateTime($occurrenceDateTime)
    {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $occurrencePeriod
     * @return $this
     */
    public function setOccurrencePeriod($occurrencePeriod)
    {
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRResource\FHIRTiming
     */
    public function getOccurrenceTiming()
    {
        return $this->occurrenceTiming;
    }

    /**
     * @param \Fhir\V_400\FHIRResource\FHIRTiming $occurrenceTiming
     * @return $this
     */
    public function setOccurrenceTiming($occurrenceTiming)
    {
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * When the request transitioned to being actionable.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn()
    {
        return $this->authoredOn;
    }

    /**
     * When the request transitioned to being actionable.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $authoredOn
     * @return $this
     */
    public function setAuthoredOn($authoredOn)
    {
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * The individual who initiated the request and has responsibility for its activation.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * The individual who initiated the request and has responsibility for its activation.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $requester
     * @return $this
     */
    public function setRequester($requester)
    {
        $this->requester = $requester;
        return $this;
    }

    /**
     * Desired type of performer for doing the diagnostic testing.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }

    /**
     * Desired type of performer for doing the diagnostic testing.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $performerType
     * @return $this
     */
    public function setPerformerType($performerType)
    {
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * The desired performer for doing the diagnostic testing.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * The desired performer for doing the diagnostic testing.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $performer
     * @return $this
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Reason or justification for the use of this device.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Reason or justification for the use of this device.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Reason or justification for the use of this device.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Reason or justification for the use of this device.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function addReasonReference($reasonReference)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $insurance
     * @return $this
     */
    public function addInsurance($insurance)
    {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * Additional clinical information about the patient that may influence the request fulfilment.  For example, this may include where on the subject's body the device will be used (i.e. the target site).
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * Additional clinical information about the patient that may influence the request fulfilment.  For example, this may include where on the subject's body the device will be used (i.e. the target site).
     * @param \Fhir\V_400\FHIRElement\FHIRReference $supportingInfo
     * @return $this
     */
    public function addSupportingInfo($supportingInfo)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * Details about this request that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @return \Fhir\V_400\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Details about this request that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @param \Fhir\V_400\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Key events in the history of the request.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getRelevantHistory()
    {
        return $this->relevantHistory;
    }

    /**
     * Key events in the history of the request.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $relevantHistory
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
        if (0 < count($this->instantiatesCanonical)) {
            $json['instantiatesCanonical'] = [];
            foreach($this->instantiatesCanonical as $instantiatesCanonical) {
                $json['instantiatesCanonical'][] = $instantiatesCanonical;
            }
        }
        if (0 < count($this->instantiatesUri)) {
            $json['instantiatesUri'] = [];
            foreach($this->instantiatesUri as $instantiatesUri) {
                $json['instantiatesUri'][] = $instantiatesUri;
            }
        }
        if (0 < count($this->basedOn)) {
            $json['basedOn'] = [];
            foreach($this->basedOn as $basedOn) {
                $json['basedOn'][] = $basedOn;
            }
        }
        if (0 < count($this->priorRequest)) {
            $json['priorRequest'] = [];
            foreach($this->priorRequest as $priorRequest) {
                $json['priorRequest'][] = $priorRequest;
            }
        }
        if (null !== $this->groupIdentifier) $json['groupIdentifier'] = $this->groupIdentifier;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->intent) $json['intent'] = $this->intent;
        if (null !== $this->priority) $json['priority'] = $this->priority;
        if (null !== $this->codeReference) $json['codeReference'] = $this->codeReference;
        if (null !== $this->codeCodeableConcept) $json['codeCodeableConcept'] = $this->codeCodeableConcept;
        if (0 < count($this->parameter)) {
            $json['parameter'] = [];
            foreach($this->parameter as $parameter) {
                $json['parameter'][] = $parameter;
            }
        }
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->encounter) $json['encounter'] = $this->encounter;
        if (null !== $this->occurrenceDateTime) $json['occurrenceDateTime'] = $this->occurrenceDateTime;
        if (null !== $this->occurrencePeriod) $json['occurrencePeriod'] = $this->occurrencePeriod;
        if (null !== $this->occurrenceTiming) $json['occurrenceTiming'] = $this->occurrenceTiming;
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
        if (0 < count($this->insurance)) {
            $json['insurance'] = [];
            foreach($this->insurance as $insurance) {
                $json['insurance'][] = $insurance;
            }
        }
        if (0 < count($this->supportingInfo)) {
            $json['supportingInfo'] = [];
            foreach($this->supportingInfo as $supportingInfo) {
                $json['supportingInfo'][] = $supportingInfo;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DeviceRequest xmlns="http://hl7.org/fhir"></DeviceRequest>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->instantiatesCanonical)) {
            foreach($this->instantiatesCanonical as $instantiatesCanonical) {
                $instantiatesCanonical->xmlSerialize(true, $sxe->addChild('instantiatesCanonical'));
            }
        }
        if (0 < count($this->instantiatesUri)) {
            foreach($this->instantiatesUri as $instantiatesUri) {
                $instantiatesUri->xmlSerialize(true, $sxe->addChild('instantiatesUri'));
            }
        }
        if (0 < count($this->basedOn)) {
            foreach($this->basedOn as $basedOn) {
                $basedOn->xmlSerialize(true, $sxe->addChild('basedOn'));
            }
        }
        if (0 < count($this->priorRequest)) {
            foreach($this->priorRequest as $priorRequest) {
                $priorRequest->xmlSerialize(true, $sxe->addChild('priorRequest'));
            }
        }
        if (null !== $this->groupIdentifier) $this->groupIdentifier->xmlSerialize(true, $sxe->addChild('groupIdentifier'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->intent) $this->intent->xmlSerialize(true, $sxe->addChild('intent'));
        if (null !== $this->priority) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (null !== $this->codeReference) $this->codeReference->xmlSerialize(true, $sxe->addChild('codeReference'));
        if (null !== $this->codeCodeableConcept) $this->codeCodeableConcept->xmlSerialize(true, $sxe->addChild('codeCodeableConcept'));
        if (0 < count($this->parameter)) {
            foreach($this->parameter as $parameter) {
                $parameter->xmlSerialize(true, $sxe->addChild('parameter'));
            }
        }
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->encounter) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (null !== $this->occurrenceDateTime) $this->occurrenceDateTime->xmlSerialize(true, $sxe->addChild('occurrenceDateTime'));
        if (null !== $this->occurrencePeriod) $this->occurrencePeriod->xmlSerialize(true, $sxe->addChild('occurrencePeriod'));
        if (null !== $this->occurrenceTiming) $this->occurrenceTiming->xmlSerialize(true, $sxe->addChild('occurrenceTiming'));
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
        if (0 < count($this->insurance)) {
            foreach($this->insurance as $insurance) {
                $insurance->xmlSerialize(true, $sxe->addChild('insurance'));
            }
        }
        if (0 < count($this->supportingInfo)) {
            foreach($this->supportingInfo as $supportingInfo) {
                $supportingInfo->xmlSerialize(true, $sxe->addChild('supportingInfo'));
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