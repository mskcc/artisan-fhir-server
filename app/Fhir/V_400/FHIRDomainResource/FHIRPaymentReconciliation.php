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
 * This resource provides the details including amount of a payment and allocates the payment items being paid.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRPaymentReconciliation extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique identifier assigned to this payment reconciliation.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The status of the resource instance.
     * @var \Fhir\V_400\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public $status = null;

    /**
     * The period of time for which payments have been gathered into this bulk payment for settlement.
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The date when the resource was created.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * The party who generated the payment.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $paymentIssuer = null;

    /**
     * Original request resource reference.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $requestor = null;

    /**
     * The outcome of a request for a reconciliation.
     * @var \Fhir\V_400\FHIRElement\FHIRRemittanceOutcome
     */
    public $outcome = null;

    /**
     * A human readable description of the status of the request for the reconciliation.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $disposition = null;

    /**
     * The date of payment as indicated on the financial instrument.
     * @var \Fhir\V_400\FHIRElement\FHIRDate
     */
    public $paymentDate = null;

    /**
     * Total payment amount as indicated on the financial instrument.
     * @var \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public $paymentAmount = null;

    /**
     * Issuer's unique identifier for the payment instrument.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public $paymentIdentifier = null;

    /**
     * Distribution of the payment amount for a previously acknowledged payable.
     * @var \Fhir\V_400\FHIRResource\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail[]
     */
    public $detail = array();

    /**
     * A code for the form to be used for printing the content.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $formCode = null;

    /**
     * A note that describes or explains the processing in a human readable form.
     * @var \Fhir\V_400\FHIRResource\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote[]
     */
    public $processNote = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'PaymentReconciliation';

    /**
     * A unique identifier assigned to this payment reconciliation.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique identifier assigned to this payment reconciliation.
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
     * The period of time for which payments have been gathered into this bulk payment for settlement.
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The period of time for which payments have been gathered into this bulk payment for settlement.
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * The date when the resource was created.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * The date when the resource was created.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * The party who generated the payment.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getPaymentIssuer()
    {
        return $this->paymentIssuer;
    }

    /**
     * The party who generated the payment.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $paymentIssuer
     * @return $this
     */
    public function setPaymentIssuer($paymentIssuer)
    {
        $this->paymentIssuer = $paymentIssuer;
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
     * The practitioner who is responsible for the services rendered to the patient.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getRequestor()
    {
        return $this->requestor;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $requestor
     * @return $this
     */
    public function setRequestor($requestor)
    {
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * The outcome of a request for a reconciliation.
     * @return \Fhir\V_400\FHIRElement\FHIRRemittanceOutcome
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * The outcome of a request for a reconciliation.
     * @param \Fhir\V_400\FHIRElement\FHIRRemittanceOutcome $outcome
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A human readable description of the status of the request for the reconciliation.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * A human readable description of the status of the request for the reconciliation.
     * @param \Fhir\V_400\FHIRElement\FHIRString $disposition
     * @return $this
     */
    public function setDisposition($disposition)
    {
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * The date of payment as indicated on the financial instrument.
     * @return \Fhir\V_400\FHIRElement\FHIRDate
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * The date of payment as indicated on the financial instrument.
     * @param \Fhir\V_400\FHIRElement\FHIRDate $paymentDate
     * @return $this
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * Total payment amount as indicated on the financial instrument.
     * @return \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * Total payment amount as indicated on the financial instrument.
     * @param \Fhir\V_400\FHIRElement\FHIRMoney $paymentAmount
     * @return $this
     */
    public function setPaymentAmount($paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;
        return $this;
    }

    /**
     * Issuer's unique identifier for the payment instrument.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public function getPaymentIdentifier()
    {
        return $this->paymentIdentifier;
    }

    /**
     * Issuer's unique identifier for the payment instrument.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $paymentIdentifier
     * @return $this
     */
    public function setPaymentIdentifier($paymentIdentifier)
    {
        $this->paymentIdentifier = $paymentIdentifier;
        return $this;
    }

    /**
     * Distribution of the payment amount for a previously acknowledged payable.
     * @return \Fhir\V_400\FHIRResource\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Distribution of the payment amount for a previously acknowledged payable.
     * @param \Fhir\V_400\FHIRResource\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail $detail
     * @return $this
     */
    public function addDetail($detail)
    {
        $this->detail[] = $detail;
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
     * A note that describes or explains the processing in a human readable form.
     * @return \Fhir\V_400\FHIRResource\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote[]
     */
    public function getProcessNote()
    {
        return $this->processNote;
    }

    /**
     * A note that describes or explains the processing in a human readable form.
     * @param \Fhir\V_400\FHIRResource\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote $processNote
     * @return $this
     */
    public function addProcessNote($processNote)
    {
        $this->processNote[] = $processNote;
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
        if (null !== $this->period) $json['period'] = $this->period;
        if (null !== $this->created) $json['created'] = $this->created;
        if (null !== $this->paymentIssuer) $json['paymentIssuer'] = $this->paymentIssuer;
        if (null !== $this->request) $json['request'] = $this->request;
        if (null !== $this->requestor) $json['requestor'] = $this->requestor;
        if (null !== $this->outcome) $json['outcome'] = $this->outcome;
        if (null !== $this->disposition) $json['disposition'] = $this->disposition;
        if (null !== $this->paymentDate) $json['paymentDate'] = $this->paymentDate;
        if (null !== $this->paymentAmount) $json['paymentAmount'] = $this->paymentAmount;
        if (null !== $this->paymentIdentifier) $json['paymentIdentifier'] = $this->paymentIdentifier;
        if (0 < count($this->detail)) {
            $json['detail'] = [];
            foreach($this->detail as $detail) {
                $json['detail'][] = $detail;
            }
        }
        if (null !== $this->formCode) $json['formCode'] = $this->formCode;
        if (0 < count($this->processNote)) {
            $json['processNote'] = [];
            foreach($this->processNote as $processNote) {
                $json['processNote'][] = $processNote;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<PaymentReconciliation xmlns="http://hl7.org/fhir"></PaymentReconciliation>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (null !== $this->created) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (null !== $this->paymentIssuer) $this->paymentIssuer->xmlSerialize(true, $sxe->addChild('paymentIssuer'));
        if (null !== $this->request) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (null !== $this->requestor) $this->requestor->xmlSerialize(true, $sxe->addChild('requestor'));
        if (null !== $this->outcome) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (null !== $this->disposition) $this->disposition->xmlSerialize(true, $sxe->addChild('disposition'));
        if (null !== $this->paymentDate) $this->paymentDate->xmlSerialize(true, $sxe->addChild('paymentDate'));
        if (null !== $this->paymentAmount) $this->paymentAmount->xmlSerialize(true, $sxe->addChild('paymentAmount'));
        if (null !== $this->paymentIdentifier) $this->paymentIdentifier->xmlSerialize(true, $sxe->addChild('paymentIdentifier'));
        if (0 < count($this->detail)) {
            foreach($this->detail as $detail) {
                $detail->xmlSerialize(true, $sxe->addChild('detail'));
            }
        }
        if (null !== $this->formCode) $this->formCode->xmlSerialize(true, $sxe->addChild('formCode'));
        if (0 < count($this->processNote)) {
            foreach($this->processNote as $processNote) {
                $processNote->xmlSerialize(true, $sxe->addChild('processNote'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}