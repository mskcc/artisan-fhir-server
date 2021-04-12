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
 * The resource ChargeItem describes the provision of healthcare provider products for a certain patient, therefore referring not only to the product, but containing in addition details of the provision, like date, time, amounts and participating organizations and persons. Main Usage of the ChargeItem is to enable the billing process and internal cost allocation.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRChargeItem extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifiers assigned to this event performer or other systems.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * References the (external) source of pricing information, rules of application for the code this ChargeItem uses.
     * @var \Fhir\V_400\FHIRElement\FHIRUri[]
     */
    public $definitionUri = array();

    /**
     * References the source of pricing information, rules of application for the code this ChargeItem uses.
     * @var \Fhir\V_400\FHIRElement\FHIRCanonical[]
     */
    public $definitionCanonical = array();

    /**
     * The current state of the ChargeItem.
     * @var \Fhir\V_400\FHIRElement\FHIRChargeItemStatus
     */
    public $status = null;

    /**
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $partOf = array();

    /**
     * A code that identifies the charge, like a billing code.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The individual or set of individuals the action is being or was performed on.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The encounter or episode of care that establishes the context for this event.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $context = null;

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
     * Indicates who or what performed or participated in the charged service.
     * @var \Fhir\V_400\FHIRResource\FHIRChargeItem\FHIRChargeItemPerformer[]
     */
    public $performer = array();

    /**
     * The organization requesting the service.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $performingOrganization = null;

    /**
     * The organization performing the service.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $requestingOrganization = null;

    /**
     * The financial cost center permits the tracking of charge attribution.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $costCenter = null;

    /**
     * Quantity of which the charge item has been serviced.
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * The anatomical location where the related service has been applied.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $bodysite = array();

    /**
     * Factor overriding the factor determined by the rules associated with the code.
     * @var \Fhir\V_400\FHIRElement\FHIRDecimal
     */
    public $factorOverride = null;

    /**
     * Total price of the charge overriding the list price associated with the code.
     * @var \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public $priceOverride = null;

    /**
     * If the list price or the rule-based factor associated with the code is overridden, this attribute can capture a text to indicate the  reason for this action.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $overrideReason = null;

    /**
     * The device, practitioner, etc. who entered the charge item.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $enterer = null;

    /**
     * Date the charge item was entered.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $enteredDate = null;

    /**
     * Describes why the event occurred in coded or textual form.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $reason = array();

    /**
     * Indicated the rendered service that caused this charge.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $service = array();

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $productReference = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $productCodeableConcept = null;

    /**
     * Account into which this ChargeItems belongs.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $account = array();

    /**
     * Comments made about the event by the performer, subject or other participants.
     * @var \Fhir\V_400\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Further information supporting this charge.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $supportingInformation = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ChargeItem';

    /**
     * Identifiers assigned to this event performer or other systems.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifiers assigned to this event performer or other systems.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * References the (external) source of pricing information, rules of application for the code this ChargeItem uses.
     * @return \Fhir\V_400\FHIRElement\FHIRUri[]
     */
    public function getDefinitionUri()
    {
        return $this->definitionUri;
    }

    /**
     * References the (external) source of pricing information, rules of application for the code this ChargeItem uses.
     * @param \Fhir\V_400\FHIRElement\FHIRUri $definitionUri
     * @return $this
     */
    public function addDefinitionUri($definitionUri)
    {
        $this->definitionUri[] = $definitionUri;
        return $this;
    }

    /**
     * References the source of pricing information, rules of application for the code this ChargeItem uses.
     * @return \Fhir\V_400\FHIRElement\FHIRCanonical[]
     */
    public function getDefinitionCanonical()
    {
        return $this->definitionCanonical;
    }

    /**
     * References the source of pricing information, rules of application for the code this ChargeItem uses.
     * @param \Fhir\V_400\FHIRElement\FHIRCanonical $definitionCanonical
     * @return $this
     */
    public function addDefinitionCanonical($definitionCanonical)
    {
        $this->definitionCanonical[] = $definitionCanonical;
        return $this;
    }

    /**
     * The current state of the ChargeItem.
     * @return \Fhir\V_400\FHIRElement\FHIRChargeItemStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The current state of the ChargeItem.
     * @param \Fhir\V_400\FHIRElement\FHIRChargeItemStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function addPartOf($partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * A code that identifies the charge, like a billing code.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A code that identifies the charge, like a billing code.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * The individual or set of individuals the action is being or was performed on.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The individual or set of individuals the action is being or was performed on.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The encounter or episode of care that establishes the context for this event.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * The encounter or episode of care that establishes the context for this event.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;
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
     * Indicates who or what performed or participated in the charged service.
     * @return \Fhir\V_400\FHIRResource\FHIRChargeItem\FHIRChargeItemPerformer[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Indicates who or what performed or participated in the charged service.
     * @param \Fhir\V_400\FHIRResource\FHIRChargeItem\FHIRChargeItemPerformer $performer
     * @return $this
     */
    public function addPerformer($performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * The organization requesting the service.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getPerformingOrganization()
    {
        return $this->performingOrganization;
    }

    /**
     * The organization requesting the service.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $performingOrganization
     * @return $this
     */
    public function setPerformingOrganization($performingOrganization)
    {
        $this->performingOrganization = $performingOrganization;
        return $this;
    }

    /**
     * The organization performing the service.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getRequestingOrganization()
    {
        return $this->requestingOrganization;
    }

    /**
     * The organization performing the service.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $requestingOrganization
     * @return $this
     */
    public function setRequestingOrganization($requestingOrganization)
    {
        $this->requestingOrganization = $requestingOrganization;
        return $this;
    }

    /**
     * The financial cost center permits the tracking of charge attribution.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getCostCenter()
    {
        return $this->costCenter;
    }

    /**
     * The financial cost center permits the tracking of charge attribution.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $costCenter
     * @return $this
     */
    public function setCostCenter($costCenter)
    {
        $this->costCenter = $costCenter;
        return $this;
    }

    /**
     * Quantity of which the charge item has been serviced.
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Quantity of which the charge item has been serviced.
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * The anatomical location where the related service has been applied.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodysite()
    {
        return $this->bodysite;
    }

    /**
     * The anatomical location where the related service has been applied.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $bodysite
     * @return $this
     */
    public function addBodysite($bodysite)
    {
        $this->bodysite[] = $bodysite;
        return $this;
    }

    /**
     * Factor overriding the factor determined by the rules associated with the code.
     * @return \Fhir\V_400\FHIRElement\FHIRDecimal
     */
    public function getFactorOverride()
    {
        return $this->factorOverride;
    }

    /**
     * Factor overriding the factor determined by the rules associated with the code.
     * @param \Fhir\V_400\FHIRElement\FHIRDecimal $factorOverride
     * @return $this
     */
    public function setFactorOverride($factorOverride)
    {
        $this->factorOverride = $factorOverride;
        return $this;
    }

    /**
     * Total price of the charge overriding the list price associated with the code.
     * @return \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public function getPriceOverride()
    {
        return $this->priceOverride;
    }

    /**
     * Total price of the charge overriding the list price associated with the code.
     * @param \Fhir\V_400\FHIRElement\FHIRMoney $priceOverride
     * @return $this
     */
    public function setPriceOverride($priceOverride)
    {
        $this->priceOverride = $priceOverride;
        return $this;
    }

    /**
     * If the list price or the rule-based factor associated with the code is overridden, this attribute can capture a text to indicate the  reason for this action.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getOverrideReason()
    {
        return $this->overrideReason;
    }

    /**
     * If the list price or the rule-based factor associated with the code is overridden, this attribute can capture a text to indicate the  reason for this action.
     * @param \Fhir\V_400\FHIRElement\FHIRString $overrideReason
     * @return $this
     */
    public function setOverrideReason($overrideReason)
    {
        $this->overrideReason = $overrideReason;
        return $this;
    }

    /**
     * The device, practitioner, etc. who entered the charge item.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getEnterer()
    {
        return $this->enterer;
    }

    /**
     * The device, practitioner, etc. who entered the charge item.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $enterer
     * @return $this
     */
    public function setEnterer($enterer)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * Date the charge item was entered.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getEnteredDate()
    {
        return $this->enteredDate;
    }

    /**
     * Date the charge item was entered.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $enteredDate
     * @return $this
     */
    public function setEnteredDate($enteredDate)
    {
        $this->enteredDate = $enteredDate;
        return $this;
    }

    /**
     * Describes why the event occurred in coded or textual form.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Describes why the event occurred in coded or textual form.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $reason
     * @return $this
     */
    public function addReason($reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * Indicated the rendered service that caused this charge.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Indicated the rendered service that caused this charge.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $service
     * @return $this
     */
    public function addService($service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRReference $productReference
     * @return $this
     */
    public function setProductReference($productReference)
    {
        $this->productReference = $productReference;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getProductCodeableConcept()
    {
        return $this->productCodeableConcept;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $productCodeableConcept
     * @return $this
     */
    public function setProductCodeableConcept($productCodeableConcept)
    {
        $this->productCodeableConcept = $productCodeableConcept;
        return $this;
    }

    /**
     * Account into which this ChargeItems belongs.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Account into which this ChargeItems belongs.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $account
     * @return $this
     */
    public function addAccount($account)
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * Comments made about the event by the performer, subject or other participants.
     * @return \Fhir\V_400\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Comments made about the event by the performer, subject or other participants.
     * @param \Fhir\V_400\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Further information supporting this charge.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * Further information supporting this charge.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $supportingInformation
     * @return $this
     */
    public function addSupportingInformation($supportingInformation)
    {
        $this->supportingInformation[] = $supportingInformation;
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
        if (0 < count($this->definitionUri)) {
            $json['definitionUri'] = [];
            foreach($this->definitionUri as $definitionUri) {
                $json['definitionUri'][] = $definitionUri;
            }
        }
        if (0 < count($this->definitionCanonical)) {
            $json['definitionCanonical'] = [];
            foreach($this->definitionCanonical as $definitionCanonical) {
                $json['definitionCanonical'][] = $definitionCanonical;
            }
        }
        if (null !== $this->status) $json['status'] = $this->status;
        if (0 < count($this->partOf)) {
            $json['partOf'] = [];
            foreach($this->partOf as $partOf) {
                $json['partOf'][] = $partOf;
            }
        }
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->context) $json['context'] = $this->context;
        if (null !== $this->occurrenceDateTime) $json['occurrenceDateTime'] = $this->occurrenceDateTime;
        if (null !== $this->occurrencePeriod) $json['occurrencePeriod'] = $this->occurrencePeriod;
        if (null !== $this->occurrenceTiming) $json['occurrenceTiming'] = $this->occurrenceTiming;
        if (0 < count($this->performer)) {
            $json['performer'] = [];
            foreach($this->performer as $performer) {
                $json['performer'][] = $performer;
            }
        }
        if (null !== $this->performingOrganization) $json['performingOrganization'] = $this->performingOrganization;
        if (null !== $this->requestingOrganization) $json['requestingOrganization'] = $this->requestingOrganization;
        if (null !== $this->costCenter) $json['costCenter'] = $this->costCenter;
        if (null !== $this->quantity) $json['quantity'] = $this->quantity;
        if (0 < count($this->bodysite)) {
            $json['bodysite'] = [];
            foreach($this->bodysite as $bodysite) {
                $json['bodysite'][] = $bodysite;
            }
        }
        if (null !== $this->factorOverride) $json['factorOverride'] = $this->factorOverride;
        if (null !== $this->priceOverride) $json['priceOverride'] = $this->priceOverride;
        if (null !== $this->overrideReason) $json['overrideReason'] = $this->overrideReason;
        if (null !== $this->enterer) $json['enterer'] = $this->enterer;
        if (null !== $this->enteredDate) $json['enteredDate'] = $this->enteredDate;
        if (0 < count($this->reason)) {
            $json['reason'] = [];
            foreach($this->reason as $reason) {
                $json['reason'][] = $reason;
            }
        }
        if (0 < count($this->service)) {
            $json['service'] = [];
            foreach($this->service as $service) {
                $json['service'][] = $service;
            }
        }
        if (null !== $this->productReference) $json['productReference'] = $this->productReference;
        if (null !== $this->productCodeableConcept) $json['productCodeableConcept'] = $this->productCodeableConcept;
        if (0 < count($this->account)) {
            $json['account'] = [];
            foreach($this->account as $account) {
                $json['account'][] = $account;
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = $note;
            }
        }
        if (0 < count($this->supportingInformation)) {
            $json['supportingInformation'] = [];
            foreach($this->supportingInformation as $supportingInformation) {
                $json['supportingInformation'][] = $supportingInformation;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ChargeItem xmlns="http://hl7.org/fhir"></ChargeItem>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->definitionUri)) {
            foreach($this->definitionUri as $definitionUri) {
                $definitionUri->xmlSerialize(true, $sxe->addChild('definitionUri'));
            }
        }
        if (0 < count($this->definitionCanonical)) {
            foreach($this->definitionCanonical as $definitionCanonical) {
                $definitionCanonical->xmlSerialize(true, $sxe->addChild('definitionCanonical'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (0 < count($this->partOf)) {
            foreach($this->partOf as $partOf) {
                $partOf->xmlSerialize(true, $sxe->addChild('partOf'));
            }
        }
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->context) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (null !== $this->occurrenceDateTime) $this->occurrenceDateTime->xmlSerialize(true, $sxe->addChild('occurrenceDateTime'));
        if (null !== $this->occurrencePeriod) $this->occurrencePeriod->xmlSerialize(true, $sxe->addChild('occurrencePeriod'));
        if (null !== $this->occurrenceTiming) $this->occurrenceTiming->xmlSerialize(true, $sxe->addChild('occurrenceTiming'));
        if (0 < count($this->performer)) {
            foreach($this->performer as $performer) {
                $performer->xmlSerialize(true, $sxe->addChild('performer'));
            }
        }
        if (null !== $this->performingOrganization) $this->performingOrganization->xmlSerialize(true, $sxe->addChild('performingOrganization'));
        if (null !== $this->requestingOrganization) $this->requestingOrganization->xmlSerialize(true, $sxe->addChild('requestingOrganization'));
        if (null !== $this->costCenter) $this->costCenter->xmlSerialize(true, $sxe->addChild('costCenter'));
        if (null !== $this->quantity) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (0 < count($this->bodysite)) {
            foreach($this->bodysite as $bodysite) {
                $bodysite->xmlSerialize(true, $sxe->addChild('bodysite'));
            }
        }
        if (null !== $this->factorOverride) $this->factorOverride->xmlSerialize(true, $sxe->addChild('factorOverride'));
        if (null !== $this->priceOverride) $this->priceOverride->xmlSerialize(true, $sxe->addChild('priceOverride'));
        if (null !== $this->overrideReason) $this->overrideReason->xmlSerialize(true, $sxe->addChild('overrideReason'));
        if (null !== $this->enterer) $this->enterer->xmlSerialize(true, $sxe->addChild('enterer'));
        if (null !== $this->enteredDate) $this->enteredDate->xmlSerialize(true, $sxe->addChild('enteredDate'));
        if (0 < count($this->reason)) {
            foreach($this->reason as $reason) {
                $reason->xmlSerialize(true, $sxe->addChild('reason'));
            }
        }
        if (0 < count($this->service)) {
            foreach($this->service as $service) {
                $service->xmlSerialize(true, $sxe->addChild('service'));
            }
        }
        if (null !== $this->productReference) $this->productReference->xmlSerialize(true, $sxe->addChild('productReference'));
        if (null !== $this->productCodeableConcept) $this->productCodeableConcept->xmlSerialize(true, $sxe->addChild('productCodeableConcept'));
        if (0 < count($this->account)) {
            foreach($this->account as $account) {
                $account->xmlSerialize(true, $sxe->addChild('account'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->supportingInformation)) {
            foreach($this->supportingInformation as $supportingInformation) {
                $supportingInformation->xmlSerialize(true, $sxe->addChild('supportingInformation'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}