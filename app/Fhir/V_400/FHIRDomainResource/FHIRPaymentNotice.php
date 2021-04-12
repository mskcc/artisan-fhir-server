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
 * This resource provides the status of the payment for goods and services rendered, and the request and response resource references.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRPaymentNotice extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique identifier assigned to this payment notice.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The status of the resource instance.
     * @var \Fhir\V_400\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public $status = null;

    /**
     * Reference of resource for which payment is being made.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * Reference of response to resource for which payment is being made.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $response = null;

    /**
     * The date when this resource was created.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * A reference to the payment which is the subject of this notice.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $payment = null;

    /**
     * The date when the above payment action occurred.
     * @var \Fhir\V_400\FHIRElement\FHIRDate
     */
    public $paymentDate = null;

    /**
     * The party who will receive or has received payment that is the subject of this notification.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $payee = null;

    /**
     * The party who is notified of the payment status.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $recipient = null;

    /**
     * The amount sent to the payee.
     * @var \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public $amount = null;

    /**
     * A code indicating whether payment has been sent or cleared.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $paymentStatus = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'PaymentNotice';

    /**
     * A unique identifier assigned to this payment notice.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique identifier assigned to this payment notice.
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
     * Reference of resource for which payment is being made.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Reference of resource for which payment is being made.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $request
     * @return $this
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Reference of response to resource for which payment is being made.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Reference of response to resource for which payment is being made.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $response
     * @return $this
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * The date when this resource was created.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * The date when this resource was created.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * A reference to the payment which is the subject of this notice.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * A reference to the payment which is the subject of this notice.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $payment
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * The date when the above payment action occurred.
     * @return \Fhir\V_400\FHIRElement\FHIRDate
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * The date when the above payment action occurred.
     * @param \Fhir\V_400\FHIRElement\FHIRDate $paymentDate
     * @return $this
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * The party who will receive or has received payment that is the subject of this notification.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * The party who will receive or has received payment that is the subject of this notification.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $payee
     * @return $this
     */
    public function setPayee($payee)
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * The party who is notified of the payment status.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * The party who is notified of the payment status.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $recipient
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * The amount sent to the payee.
     * @return \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * The amount sent to the payee.
     * @param \Fhir\V_400\FHIRElement\FHIRMoney $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * A code indicating whether payment has been sent or cleared.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * A code indicating whether payment has been sent or cleared.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $paymentStatus
     * @return $this
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;
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
        if (null !== $this->request) $json['request'] = $this->request;
        if (null !== $this->response) $json['response'] = $this->response;
        if (null !== $this->created) $json['created'] = $this->created;
        if (null !== $this->provider) $json['provider'] = $this->provider;
        if (null !== $this->payment) $json['payment'] = $this->payment;
        if (null !== $this->paymentDate) $json['paymentDate'] = $this->paymentDate;
        if (null !== $this->payee) $json['payee'] = $this->payee;
        if (null !== $this->recipient) $json['recipient'] = $this->recipient;
        if (null !== $this->amount) $json['amount'] = $this->amount;
        if (null !== $this->paymentStatus) $json['paymentStatus'] = $this->paymentStatus;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<PaymentNotice xmlns="http://hl7.org/fhir"></PaymentNotice>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->request) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (null !== $this->response) $this->response->xmlSerialize(true, $sxe->addChild('response'));
        if (null !== $this->created) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (null !== $this->provider) $this->provider->xmlSerialize(true, $sxe->addChild('provider'));
        if (null !== $this->payment) $this->payment->xmlSerialize(true, $sxe->addChild('payment'));
        if (null !== $this->paymentDate) $this->paymentDate->xmlSerialize(true, $sxe->addChild('paymentDate'));
        if (null !== $this->payee) $this->payee->xmlSerialize(true, $sxe->addChild('payee'));
        if (null !== $this->recipient) $this->recipient->xmlSerialize(true, $sxe->addChild('recipient'));
        if (null !== $this->amount) $this->amount->xmlSerialize(true, $sxe->addChild('amount'));
        if (null !== $this->paymentStatus) $this->paymentStatus->xmlSerialize(true, $sxe->addChild('paymentStatus'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}