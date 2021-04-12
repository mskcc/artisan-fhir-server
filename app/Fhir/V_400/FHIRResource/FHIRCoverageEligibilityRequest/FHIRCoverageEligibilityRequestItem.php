<?php namespace Fhir\V_400\FHIRResource\FHIRCoverageEligibilityRequest;

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
 * The CoverageEligibilityRequest provides patient and insurance coverage information to an insurer for them to respond, in the form of an CoverageEligibilityResponse, with information regarding whether the stated coverage is valid and in-force and optionally to provide the insurance details of the policy.
 */
class FHIRCoverageEligibilityRequestItem extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Exceptions, special conditions and supporting information applicable for this service or product line.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public $supportingInfoSequence = array();

    /**
     * Code to identify the general type of benefits under which products and services are provided.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * This contains the product, service, drug or other billing code for the item.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $productOrService = null;

    /**
     * Item typification or modifiers codes to convey additional context for the product or service.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $modifier = array();

    /**
     * The practitioner who is responsible for the product or service to be rendered to the patient.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * The number of repetitions of a service or product.
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * The amount charged to the patient by the provider for a single unit.
     * @var \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public $unitPrice = null;

    /**
     * Facility where the services will be provided.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $facility = null;

    /**
     * Patient diagnosis for which care is sought.
     * @var \Fhir\V_400\FHIRResource\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestDiagnosis[]
     */
    public $diagnosis = array();

    /**
     * The plan/proposal/order describing the proposed service in detail.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $detail = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'CoverageEligibilityRequest.Item';

    /**
     * Exceptions, special conditions and supporting information applicable for this service or product line.
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public function getSupportingInfoSequence()
    {
        return $this->supportingInfoSequence;
    }

    /**
     * Exceptions, special conditions and supporting information applicable for this service or product line.
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $supportingInfoSequence
     * @return $this
     */
    public function addSupportingInfoSequence($supportingInfoSequence)
    {
        $this->supportingInfoSequence[] = $supportingInfoSequence;
        return $this;
    }

    /**
     * Code to identify the general type of benefits under which products and services are provided.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Code to identify the general type of benefits under which products and services are provided.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * This contains the product, service, drug or other billing code for the item.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getProductOrService()
    {
        return $this->productOrService;
    }

    /**
     * This contains the product, service, drug or other billing code for the item.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $productOrService
     * @return $this
     */
    public function setProductOrService($productOrService)
    {
        $this->productOrService = $productOrService;
        return $this;
    }

    /**
     * Item typification or modifiers codes to convey additional context for the product or service.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * Item typification or modifiers codes to convey additional context for the product or service.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $modifier
     * @return $this
     */
    public function addModifier($modifier)
    {
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * The practitioner who is responsible for the product or service to be rendered to the patient.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * The practitioner who is responsible for the product or service to be rendered to the patient.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * The number of repetitions of a service or product.
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * The number of repetitions of a service or product.
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * The amount charged to the patient by the provider for a single unit.
     * @return \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * The amount charged to the patient by the provider for a single unit.
     * @param \Fhir\V_400\FHIRElement\FHIRMoney $unitPrice
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * Facility where the services will be provided.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * Facility where the services will be provided.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $facility
     * @return $this
     */
    public function setFacility($facility)
    {
        $this->facility = $facility;
        return $this;
    }

    /**
     * Patient diagnosis for which care is sought.
     * @return \Fhir\V_400\FHIRResource\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestDiagnosis[]
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Patient diagnosis for which care is sought.
     * @param \Fhir\V_400\FHIRResource\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestDiagnosis $diagnosis
     * @return $this
     */
    public function addDiagnosis($diagnosis)
    {
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * The plan/proposal/order describing the proposed service in detail.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * The plan/proposal/order describing the proposed service in detail.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $detail
     * @return $this
     */
    public function addDetail($detail)
    {
        $this->detail[] = $detail;
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
        if (0 < count($this->supportingInfoSequence)) {
            $json['supportingInfoSequence'] = [];
            foreach($this->supportingInfoSequence as $supportingInfoSequence) {
                $json['supportingInfoSequence'][] = $supportingInfoSequence;
            }
        }
        if (null !== $this->category) $json['category'] = $this->category;
        if (null !== $this->productOrService) $json['productOrService'] = $this->productOrService;
        if (0 < count($this->modifier)) {
            $json['modifier'] = [];
            foreach($this->modifier as $modifier) {
                $json['modifier'][] = $modifier;
            }
        }
        if (null !== $this->provider) $json['provider'] = $this->provider;
        if (null !== $this->quantity) $json['quantity'] = $this->quantity;
        if (null !== $this->unitPrice) $json['unitPrice'] = $this->unitPrice;
        if (null !== $this->facility) $json['facility'] = $this->facility;
        if (0 < count($this->diagnosis)) {
            $json['diagnosis'] = [];
            foreach($this->diagnosis as $diagnosis) {
                $json['diagnosis'][] = $diagnosis;
            }
        }
        if (0 < count($this->detail)) {
            $json['detail'] = [];
            foreach($this->detail as $detail) {
                $json['detail'][] = $detail;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CoverageEligibilityRequestItem xmlns="http://hl7.org/fhir"></CoverageEligibilityRequestItem>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->supportingInfoSequence)) {
            foreach($this->supportingInfoSequence as $supportingInfoSequence) {
                $supportingInfoSequence->xmlSerialize(true, $sxe->addChild('supportingInfoSequence'));
            }
        }
        if (null !== $this->category) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (null !== $this->productOrService) $this->productOrService->xmlSerialize(true, $sxe->addChild('productOrService'));
        if (0 < count($this->modifier)) {
            foreach($this->modifier as $modifier) {
                $modifier->xmlSerialize(true, $sxe->addChild('modifier'));
            }
        }
        if (null !== $this->provider) $this->provider->xmlSerialize(true, $sxe->addChild('provider'));
        if (null !== $this->quantity) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (null !== $this->unitPrice) $this->unitPrice->xmlSerialize(true, $sxe->addChild('unitPrice'));
        if (null !== $this->facility) $this->facility->xmlSerialize(true, $sxe->addChild('facility'));
        if (0 < count($this->diagnosis)) {
            foreach($this->diagnosis as $diagnosis) {
                $diagnosis->xmlSerialize(true, $sxe->addChild('diagnosis'));
            }
        }
        if (0 < count($this->detail)) {
            foreach($this->detail as $detail) {
                $detail->xmlSerialize(true, $sxe->addChild('detail'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}