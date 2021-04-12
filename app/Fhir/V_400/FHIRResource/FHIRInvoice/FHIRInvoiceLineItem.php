<?php namespace Fhir\V_400\FHIRResource\FHIRInvoice;

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

use Fhir\V_400\FHIRElement\FHIRBackboneElement;

/**
 * Invoice containing collected ChargeItems from an Account with calculated individual and total price for Billing purpose.
 */
class FHIRInvoiceLineItem extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Sequence in which the items appear on the invoice.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public $sequence = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $chargeItemReference = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $chargeItemCodeableConcept = null;

    /**
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under development. The priceComponent element can be used to offer transparency to the recipient of the Invoice as to how the prices have been calculated.
     * @var \Fhir\V_400\FHIRResource\FHIRInvoice\FHIRInvoicePriceComponent[]
     */
    public $priceComponent = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Invoice.LineItem';

    /**
     * Sequence in which the items appear on the invoice.
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sequence in which the items appear on the invoice.
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $sequence
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getChargeItemReference()
    {
        return $this->chargeItemReference;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRReference $chargeItemReference
     * @return $this
     */
    public function setChargeItemReference($chargeItemReference)
    {
        $this->chargeItemReference = $chargeItemReference;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getChargeItemCodeableConcept()
    {
        return $this->chargeItemCodeableConcept;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $chargeItemCodeableConcept
     * @return $this
     */
    public function setChargeItemCodeableConcept($chargeItemCodeableConcept)
    {
        $this->chargeItemCodeableConcept = $chargeItemCodeableConcept;
        return $this;
    }

    /**
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under development. The priceComponent element can be used to offer transparency to the recipient of the Invoice as to how the prices have been calculated.
     * @return \Fhir\V_400\FHIRResource\FHIRInvoice\FHIRInvoicePriceComponent[]
     */
    public function getPriceComponent()
    {
        return $this->priceComponent;
    }

    /**
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under development. The priceComponent element can be used to offer transparency to the recipient of the Invoice as to how the prices have been calculated.
     * @param \Fhir\V_400\FHIRResource\FHIRInvoice\FHIRInvoicePriceComponent $priceComponent
     * @return $this
     */
    public function addPriceComponent($priceComponent)
    {
        $this->priceComponent[] = $priceComponent;
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
        if (null !== $this->sequence) $json['sequence'] = $this->sequence;
        if (null !== $this->chargeItemReference) $json['chargeItemReference'] = $this->chargeItemReference;
        if (null !== $this->chargeItemCodeableConcept) $json['chargeItemCodeableConcept'] = $this->chargeItemCodeableConcept;
        if (0 < count($this->priceComponent)) {
            $json['priceComponent'] = [];
            foreach($this->priceComponent as $priceComponent) {
                $json['priceComponent'][] = $priceComponent;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<InvoiceLineItem xmlns="http://hl7.org/fhir"></InvoiceLineItem>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->sequence) $this->sequence->xmlSerialize(true, $sxe->addChild('sequence'));
        if (null !== $this->chargeItemReference) $this->chargeItemReference->xmlSerialize(true, $sxe->addChild('chargeItemReference'));
        if (null !== $this->chargeItemCodeableConcept) $this->chargeItemCodeableConcept->xmlSerialize(true, $sxe->addChild('chargeItemCodeableConcept'));
        if (0 < count($this->priceComponent)) {
            foreach($this->priceComponent as $priceComponent) {
                $priceComponent->xmlSerialize(true, $sxe->addChild('priceComponent'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}