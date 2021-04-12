<?php namespace Fhir\V_301\FHIRResource\FHIRClaimResponse;

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

use Fhir\V_301\FHIRElement\FHIRBackboneElement;

/**
 * This resource provides the adjudication details from the processing of a Claim resource.
 */
class FHIRClaimResponseAdjudication extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Code indicating: Co-Pay, deductible, eligible, benefit, tax, etc.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * Adjudication reason such as limit reached.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $reason = null;

    /**
     * Monetary amount associated with the code.
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $amount = null;

    /**
     * A non-monetary value for example a percentage. Mutually exclusive to the amount element above.
     * @var \Fhir\V_301\FHIRElement\FHIRDecimal
     */
    public $value = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ClaimResponse.Adjudication';

    /**
     * Code indicating: Co-Pay, deductible, eligible, benefit, tax, etc.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Code indicating: Co-Pay, deductible, eligible, benefit, tax, etc.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Adjudication reason such as limit reached.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Adjudication reason such as limit reached.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Monetary amount associated with the code.
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Monetary amount associated with the code.
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRMoney $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * A non-monetary value for example a percentage. Mutually exclusive to the amount element above.
     * @return \Fhir\V_301\FHIRElement\FHIRDecimal
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * A non-monetary value for example a percentage. Mutually exclusive to the amount element above.
     * @param \Fhir\V_301\FHIRElement\FHIRDecimal $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
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
        return (string)$this->getValue();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->category) $json['category'] = $this->category;
        if (null !== $this->reason) $json['reason'] = $this->reason;
        if (null !== $this->amount) $json['amount'] = $this->amount;
        if (null !== $this->value) $json['value'] = $this->value;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClaimResponseAdjudication xmlns="http://hl7.org/fhir"></ClaimResponseAdjudication>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->category) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (null !== $this->reason) $this->reason->xmlSerialize(true, $sxe->addChild('reason'));
        if (null !== $this->amount) $this->amount->xmlSerialize(true, $sxe->addChild('amount'));
        if (null !== $this->value) $this->value->xmlSerialize(true, $sxe->addChild('value'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}