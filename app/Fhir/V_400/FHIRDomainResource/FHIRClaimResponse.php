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
 * This resource provides the adjudication details from the processing of a Claim resource.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRClaimResponse extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique identifier assigned to this claim response.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The status of the resource instance.
     * @var \Fhir\V_400\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public $status = null;

    /**
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $subType = null;

    /**
     * A code to indicate whether the nature of the request is: to request adjudication of products and services previously rendered; or requesting authorization and adjudication for provision in the future; or requesting the non-binding adjudication of the listed products and services which could be provided in the future.
     * @var \Fhir\V_400\FHIRElement\FHIRUse
     */
    public $use = null;

    /**
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual for facast reimbursement is sought.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The date this resource was created.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * The party responsible for authorization, adjudication and reimbursement.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $insurer = null;

    /**
     * The provider which is responsible for the claim, predetermination or preauthorization.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $requestor = null;

    /**
     * Original request resource reference.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * The outcome of the claim, predetermination, or preauthorization processing.
     * @var \Fhir\V_400\FHIRElement\FHIRClaimProcessingCodes
     */
    public $outcome = null;

    /**
     * A human readable description of the status of the adjudication.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $disposition = null;

    /**
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $preAuthRef = null;

    /**
     * The time frame during which this authorization is effective.
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $preAuthPeriod = null;

    /**
     * Type of Party to be reimbursed: subscriber, provider, other.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $payeeType = null;

    /**
     * A claim line. Either a simple (a product or service) or a 'group' of details which can also be a simple items or groups of sub-details.
     * @var \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseItem[]
     */
    public $item = array();

    /**
     * The first-tier service adjudications for payor added product or service lines.
     * @var \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAddItem[]
     */
    public $addItem = array();

    /**
     * The adjudication results which are presented at the header level rather than at the line-item or add-item levels.
     * @var \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication[]
     */
    public $adjudication = array();

    /**
     * Categorized monetary totals for the adjudication.
     * @var \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseTotal[]
     */
    public $total = array();

    /**
     * Payment details for the adjudication of the claim.
     * @var \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponsePayment
     */
    public $payment = null;

    /**
     * A code, used only on a response to a preauthorization, to indicate whether the benefits payable have been reserved and for whom.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $fundsReserve = null;

    /**
     * A code for the form to be used for printing the content.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $formCode = null;

    /**
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     * @var \Fhir\V_400\FHIRElement\FHIRAttachment
     */
    public $form = null;

    /**
     * A note that describes or explains adjudication results in a human readable form.
     * @var \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseProcessNote[]
     */
    public $processNote = array();

    /**
     * Request for additional supporting or authorizing information.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $communicationRequest = array();

    /**
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     * @var \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseInsurance[]
     */
    public $insurance = array();

    /**
     * Errors encountered during the processing of the adjudication.
     * @var \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseError[]
     */
    public $error = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ClaimResponse';

    /**
     * A unique identifier assigned to this claim response.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique identifier assigned to this claim response.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The status of the resource instance.
     * @return \Fhir\V_400\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the resource instance.
     * @param \Fhir\V_400\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $subType
     * @return $this
     */
    public function setSubType($subType)
    {
        $this->subType = $subType;
        return $this;
    }

    /**
     * A code to indicate whether the nature of the request is: to request adjudication of products and services previously rendered; or requesting authorization and adjudication for provision in the future; or requesting the non-binding adjudication of the listed products and services which could be provided in the future.
     * @return \Fhir\V_400\FHIRElement\FHIRUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * A code to indicate whether the nature of the request is: to request adjudication of products and services previously rendered; or requesting authorization and adjudication for provision in the future; or requesting the non-binding adjudication of the listed products and services which could be provided in the future.
     * @param \Fhir\V_400\FHIRElement\FHIRUse $use
     * @return $this
     */
    public function setUse($use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual for facast reimbursement is sought.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual for facast reimbursement is sought.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The date this resource was created.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * The date this resource was created.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * The party responsible for authorization, adjudication and reimbursement.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getInsurer()
    {
        return $this->insurer;
    }

    /**
     * The party responsible for authorization, adjudication and reimbursement.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $insurer
     * @return $this
     */
    public function setInsurer($insurer)
    {
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * The provider which is responsible for the claim, predetermination or preauthorization.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getRequestor()
    {
        return $this->requestor;
    }

    /**
     * The provider which is responsible for the claim, predetermination or preauthorization.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $requestor
     * @return $this
     */
    public function setRequestor($requestor)
    {
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * Original request resource reference.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Original request resource reference.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $request
     * @return $this
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * The outcome of the claim, predetermination, or preauthorization processing.
     * @return \Fhir\V_400\FHIRElement\FHIRClaimProcessingCodes
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * The outcome of the claim, predetermination, or preauthorization processing.
     * @param \Fhir\V_400\FHIRElement\FHIRClaimProcessingCodes $outcome
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A human readable description of the status of the adjudication.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * A human readable description of the status of the adjudication.
     * @param \Fhir\V_400\FHIRElement\FHIRString $disposition
     * @return $this
     */
    public function setDisposition($disposition)
    {
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getPreAuthRef()
    {
        return $this->preAuthRef;
    }

    /**
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     * @param \Fhir\V_400\FHIRElement\FHIRString $preAuthRef
     * @return $this
     */
    public function setPreAuthRef($preAuthRef)
    {
        $this->preAuthRef = $preAuthRef;
        return $this;
    }

    /**
     * The time frame during which this authorization is effective.
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getPreAuthPeriod()
    {
        return $this->preAuthPeriod;
    }

    /**
     * The time frame during which this authorization is effective.
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $preAuthPeriod
     * @return $this
     */
    public function setPreAuthPeriod($preAuthPeriod)
    {
        $this->preAuthPeriod = $preAuthPeriod;
        return $this;
    }

    /**
     * Type of Party to be reimbursed: subscriber, provider, other.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getPayeeType()
    {
        return $this->payeeType;
    }

    /**
     * Type of Party to be reimbursed: subscriber, provider, other.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $payeeType
     * @return $this
     */
    public function setPayeeType($payeeType)
    {
        $this->payeeType = $payeeType;
        return $this;
    }

    /**
     * A claim line. Either a simple (a product or service) or a 'group' of details which can also be a simple items or groups of sub-details.
     * @return \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * A claim line. Either a simple (a product or service) or a 'group' of details which can also be a simple items or groups of sub-details.
     * @param \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseItem $item
     * @return $this
     */
    public function addItem($item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * The first-tier service adjudications for payor added product or service lines.
     * @return \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAddItem[]
     */
    public function getAddItem()
    {
        return $this->addItem;
    }

    /**
     * The first-tier service adjudications for payor added product or service lines.
     * @param \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAddItem $addItem
     * @return $this
     */
    public function addAddItem($addItem)
    {
        $this->addItem[] = $addItem;
        return $this;
    }

    /**
     * The adjudication results which are presented at the header level rather than at the line-item or add-item levels.
     * @return \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication[]
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }

    /**
     * The adjudication results which are presented at the header level rather than at the line-item or add-item levels.
     * @param \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication $adjudication
     * @return $this
     */
    public function addAdjudication($adjudication)
    {
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * Categorized monetary totals for the adjudication.
     * @return \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseTotal[]
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Categorized monetary totals for the adjudication.
     * @param \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseTotal $total
     * @return $this
     */
    public function addTotal($total)
    {
        $this->total[] = $total;
        return $this;
    }

    /**
     * Payment details for the adjudication of the claim.
     * @return \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponsePayment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Payment details for the adjudication of the claim.
     * @param \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponsePayment $payment
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * A code, used only on a response to a preauthorization, to indicate whether the benefits payable have been reserved and for whom.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getFundsReserve()
    {
        return $this->fundsReserve;
    }

    /**
     * A code, used only on a response to a preauthorization, to indicate whether the benefits payable have been reserved and for whom.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $fundsReserve
     * @return $this
     */
    public function setFundsReserve($fundsReserve)
    {
        $this->fundsReserve = $fundsReserve;
        return $this;
    }

    /**
     * A code for the form to be used for printing the content.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getFormCode()
    {
        return $this->formCode;
    }

    /**
     * A code for the form to be used for printing the content.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $formCode
     * @return $this
     */
    public function setFormCode($formCode)
    {
        $this->formCode = $formCode;
        return $this;
    }

    /**
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     * @return \Fhir\V_400\FHIRElement\FHIRAttachment
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     * @param \Fhir\V_400\FHIRElement\FHIRAttachment $form
     * @return $this
     */
    public function setForm($form)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * A note that describes or explains adjudication results in a human readable form.
     * @return \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseProcessNote[]
     */
    public function getProcessNote()
    {
        return $this->processNote;
    }

    /**
     * A note that describes or explains adjudication results in a human readable form.
     * @param \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseProcessNote $processNote
     * @return $this
     */
    public function addProcessNote($processNote)
    {
        $this->processNote[] = $processNote;
        return $this;
    }

    /**
     * Request for additional supporting or authorizing information.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getCommunicationRequest()
    {
        return $this->communicationRequest;
    }

    /**
     * Request for additional supporting or authorizing information.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $communicationRequest
     * @return $this
     */
    public function addCommunicationRequest($communicationRequest)
    {
        $this->communicationRequest[] = $communicationRequest;
        return $this;
    }

    /**
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     * @return \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseInsurance[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     * @param \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseInsurance $insurance
     * @return $this
     */
    public function addInsurance($insurance)
    {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * Errors encountered during the processing of the adjudication.
     * @return \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseError[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Errors encountered during the processing of the adjudication.
     * @param \Fhir\V_400\FHIRResource\FHIRClaimResponse\FHIRClaimResponseError $error
     * @return $this
     */
    public function addError($error)
    {
        $this->error[] = $error;
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
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->subType) $json['subType'] = $this->subType;
        if (null !== $this->use) $json['use'] = $this->use;
        if (null !== $this->patient) $json['patient'] = $this->patient;
        if (null !== $this->created) $json['created'] = $this->created;
        if (null !== $this->insurer) $json['insurer'] = $this->insurer;
        if (null !== $this->requestor) $json['requestor'] = $this->requestor;
        if (null !== $this->request) $json['request'] = $this->request;
        if (null !== $this->outcome) $json['outcome'] = $this->outcome;
        if (null !== $this->disposition) $json['disposition'] = $this->disposition;
        if (null !== $this->preAuthRef) $json['preAuthRef'] = $this->preAuthRef;
        if (null !== $this->preAuthPeriod) $json['preAuthPeriod'] = $this->preAuthPeriod;
        if (null !== $this->payeeType) $json['payeeType'] = $this->payeeType;
        if (0 < count($this->item)) {
            $json['item'] = [];
            foreach($this->item as $item) {
                $json['item'][] = $item;
            }
        }
        if (0 < count($this->addItem)) {
            $json['addItem'] = [];
            foreach($this->addItem as $addItem) {
                $json['addItem'][] = $addItem;
            }
        }
        if (0 < count($this->adjudication)) {
            $json['adjudication'] = [];
            foreach($this->adjudication as $adjudication) {
                $json['adjudication'][] = $adjudication;
            }
        }
        if (0 < count($this->total)) {
            $json['total'] = [];
            foreach($this->total as $total) {
                $json['total'][] = $total;
            }
        }
        if (null !== $this->payment) $json['payment'] = $this->payment;
        if (null !== $this->fundsReserve) $json['fundsReserve'] = $this->fundsReserve;
        if (null !== $this->formCode) $json['formCode'] = $this->formCode;
        if (null !== $this->form) $json['form'] = $this->form;
        if (0 < count($this->processNote)) {
            $json['processNote'] = [];
            foreach($this->processNote as $processNote) {
                $json['processNote'][] = $processNote;
            }
        }
        if (0 < count($this->communicationRequest)) {
            $json['communicationRequest'] = [];
            foreach($this->communicationRequest as $communicationRequest) {
                $json['communicationRequest'][] = $communicationRequest;
            }
        }
        if (0 < count($this->insurance)) {
            $json['insurance'] = [];
            foreach($this->insurance as $insurance) {
                $json['insurance'][] = $insurance;
            }
        }
        if (0 < count($this->error)) {
            $json['error'] = [];
            foreach($this->error as $error) {
                $json['error'][] = $error;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClaimResponse xmlns="http://hl7.org/fhir"></ClaimResponse>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->subType) $this->subType->xmlSerialize(true, $sxe->addChild('subType'));
        if (null !== $this->use) $this->use->xmlSerialize(true, $sxe->addChild('use'));
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->created) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (null !== $this->insurer) $this->insurer->xmlSerialize(true, $sxe->addChild('insurer'));
        if (null !== $this->requestor) $this->requestor->xmlSerialize(true, $sxe->addChild('requestor'));
        if (null !== $this->request) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (null !== $this->outcome) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (null !== $this->disposition) $this->disposition->xmlSerialize(true, $sxe->addChild('disposition'));
        if (null !== $this->preAuthRef) $this->preAuthRef->xmlSerialize(true, $sxe->addChild('preAuthRef'));
        if (null !== $this->preAuthPeriod) $this->preAuthPeriod->xmlSerialize(true, $sxe->addChild('preAuthPeriod'));
        if (null !== $this->payeeType) $this->payeeType->xmlSerialize(true, $sxe->addChild('payeeType'));
        if (0 < count($this->item)) {
            foreach($this->item as $item) {
                $item->xmlSerialize(true, $sxe->addChild('item'));
            }
        }
        if (0 < count($this->addItem)) {
            foreach($this->addItem as $addItem) {
                $addItem->xmlSerialize(true, $sxe->addChild('addItem'));
            }
        }
        if (0 < count($this->adjudication)) {
            foreach($this->adjudication as $adjudication) {
                $adjudication->xmlSerialize(true, $sxe->addChild('adjudication'));
            }
        }
        if (0 < count($this->total)) {
            foreach($this->total as $total) {
                $total->xmlSerialize(true, $sxe->addChild('total'));
            }
        }
        if (null !== $this->payment) $this->payment->xmlSerialize(true, $sxe->addChild('payment'));
        if (null !== $this->fundsReserve) $this->fundsReserve->xmlSerialize(true, $sxe->addChild('fundsReserve'));
        if (null !== $this->formCode) $this->formCode->xmlSerialize(true, $sxe->addChild('formCode'));
        if (null !== $this->form) $this->form->xmlSerialize(true, $sxe->addChild('form'));
        if (0 < count($this->processNote)) {
            foreach($this->processNote as $processNote) {
                $processNote->xmlSerialize(true, $sxe->addChild('processNote'));
            }
        }
        if (0 < count($this->communicationRequest)) {
            foreach($this->communicationRequest as $communicationRequest) {
                $communicationRequest->xmlSerialize(true, $sxe->addChild('communicationRequest'));
            }
        }
        if (0 < count($this->insurance)) {
            foreach($this->insurance as $insurance) {
                $insurance->xmlSerialize(true, $sxe->addChild('insurance'));
            }
        }
        if (0 < count($this->error)) {
            foreach($this->error as $error) {
                $error->xmlSerialize(true, $sxe->addChild('error'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}