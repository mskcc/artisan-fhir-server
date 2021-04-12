<?php namespace Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit;

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
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 */
class FHIRExplanationOfBenefitAddItem extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Claim items which this service line is intended to replace.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public $itemSequence = array();

    /**
     * The sequence number of the details within the claim item which this line is intended to replace.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public $detailSequence = array();

    /**
     * The sequence number of the sub-details woithin the details within the claim item which this line is intended to replace.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public $subDetailSequence = array();

    /**
     * The providers who are authorized for the services rendered to the patient.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $provider = array();

    /**
     * When the value is a group code then this item collects a set of related claim details, otherwise this contains the product, service, drug or other billing code for the item.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $productOrService = null;

    /**
     * Item typification or modifiers codes to convey additional context for the product or service.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $modifier = array();

    /**
     * Identifies the program under which this may be recovered.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $programCode = array();

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRDate
     */
    public $servicedDate = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $servicedPeriod = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $locationCodeableConcept = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRAddress
     */
    public $locationAddress = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $locationReference = null;

    /**
     * The number of repetitions of a service or product.
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * If the item is not a group then this is the fee for the product or service, otherwise this is the total of the fees for the details of the group.
     * @var \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public $unitPrice = null;

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @var \Fhir\V_400\FHIRElement\FHIRDecimal
     */
    public $factor = null;

    /**
     * The quantity times the unit price for an additional service or product or charge.
     * @var \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public $net = null;

    /**
     * Physical service site on the patient (limb, tooth, etc.).
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $subSite = array();

    /**
     * The numbers associated with notes below which apply to the adjudication of this item.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public $noteNumber = array();

    /**
     * The adjudication results.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication[]
     */
    public $adjudication = array();

    /**
     * The second-tier service adjudications for payor added services.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail1[]
     */
    public $detail = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ExplanationOfBenefit.AddItem';

    /**
     * Claim items which this service line is intended to replace.
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public function getItemSequence()
    {
        return $this->itemSequence;
    }

    /**
     * Claim items which this service line is intended to replace.
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $itemSequence
     * @return $this
     */
    public function addItemSequence($itemSequence)
    {
        $this->itemSequence[] = $itemSequence;
        return $this;
    }

    /**
     * The sequence number of the details within the claim item which this line is intended to replace.
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public function getDetailSequence()
    {
        return $this->detailSequence;
    }

    /**
     * The sequence number of the details within the claim item which this line is intended to replace.
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $detailSequence
     * @return $this
     */
    public function addDetailSequence($detailSequence)
    {
        $this->detailSequence[] = $detailSequence;
        return $this;
    }

    /**
     * The sequence number of the sub-details woithin the details within the claim item which this line is intended to replace.
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public function getSubDetailSequence()
    {
        return $this->subDetailSequence;
    }

    /**
     * The sequence number of the sub-details woithin the details within the claim item which this line is intended to replace.
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $subDetailSequence
     * @return $this
     */
    public function addSubDetailSequence($subDetailSequence)
    {
        $this->subDetailSequence[] = $subDetailSequence;
        return $this;
    }

    /**
     * The providers who are authorized for the services rendered to the patient.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * The providers who are authorized for the services rendered to the patient.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $provider
     * @return $this
     */
    public function addProvider($provider)
    {
        $this->provider[] = $provider;
        return $this;
    }

    /**
     * When the value is a group code then this item collects a set of related claim details, otherwise this contains the product, service, drug or other billing code for the item.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getProductOrService()
    {
        return $this->productOrService;
    }

    /**
     * When the value is a group code then this item collects a set of related claim details, otherwise this contains the product, service, drug or other billing code for the item.
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
     * Identifies the program under which this may be recovered.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProgramCode()
    {
        return $this->programCode;
    }

    /**
     * Identifies the program under which this may be recovered.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $programCode
     * @return $this
     */
    public function addProgramCode($programCode)
    {
        $this->programCode[] = $programCode;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRDate
     */
    public function getServicedDate()
    {
        return $this->servicedDate;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRDate $servicedDate
     * @return $this
     */
    public function setServicedDate($servicedDate)
    {
        $this->servicedDate = $servicedDate;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getServicedPeriod()
    {
        return $this->servicedPeriod;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $servicedPeriod
     * @return $this
     */
    public function setServicedPeriod($servicedPeriod)
    {
        $this->servicedPeriod = $servicedPeriod;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getLocationCodeableConcept()
    {
        return $this->locationCodeableConcept;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $locationCodeableConcept
     * @return $this
     */
    public function setLocationCodeableConcept($locationCodeableConcept)
    {
        $this->locationCodeableConcept = $locationCodeableConcept;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRAddress
     */
    public function getLocationAddress()
    {
        return $this->locationAddress;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRAddress $locationAddress
     * @return $this
     */
    public function setLocationAddress($locationAddress)
    {
        $this->locationAddress = $locationAddress;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getLocationReference()
    {
        return $this->locationReference;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRReference $locationReference
     * @return $this
     */
    public function setLocationReference($locationReference)
    {
        $this->locationReference = $locationReference;
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
     * If the item is not a group then this is the fee for the product or service, otherwise this is the total of the fees for the details of the group.
     * @return \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * If the item is not a group then this is the fee for the product or service, otherwise this is the total of the fees for the details of the group.
     * @param \Fhir\V_400\FHIRElement\FHIRMoney $unitPrice
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @return \Fhir\V_400\FHIRElement\FHIRDecimal
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @param \Fhir\V_400\FHIRElement\FHIRDecimal $factor
     * @return $this
     */
    public function setFactor($factor)
    {
        $this->factor = $factor;
        return $this;
    }

    /**
     * The quantity times the unit price for an additional service or product or charge.
     * @return \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     * The quantity times the unit price for an additional service or product or charge.
     * @param \Fhir\V_400\FHIRElement\FHIRMoney $net
     * @return $this
     */
    public function setNet($net)
    {
        $this->net = $net;
        return $this;
    }

    /**
     * Physical service site on the patient (limb, tooth, etc.).
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Physical service site on the patient (limb, tooth, etc.).
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $bodySite
     * @return $this
     */
    public function setBodySite($bodySite)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSubSite()
    {
        return $this->subSite;
    }

    /**
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $subSite
     * @return $this
     */
    public function addSubSite($subSite)
    {
        $this->subSite[] = $subSite;
        return $this;
    }

    /**
     * The numbers associated with notes below which apply to the adjudication of this item.
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public function getNoteNumber()
    {
        return $this->noteNumber;
    }

    /**
     * The numbers associated with notes below which apply to the adjudication of this item.
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $noteNumber
     * @return $this
     */
    public function addNoteNumber($noteNumber)
    {
        $this->noteNumber[] = $noteNumber;
        return $this;
    }

    /**
     * The adjudication results.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication[]
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }

    /**
     * The adjudication results.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication $adjudication
     * @return $this
     */
    public function addAdjudication($adjudication)
    {
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * The second-tier service adjudications for payor added services.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail1[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * The second-tier service adjudications for payor added services.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail1 $detail
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
        if (0 < count($this->itemSequence)) {
            $json['itemSequence'] = [];
            foreach($this->itemSequence as $itemSequence) {
                $json['itemSequence'][] = $itemSequence;
            }
        }
        if (0 < count($this->detailSequence)) {
            $json['detailSequence'] = [];
            foreach($this->detailSequence as $detailSequence) {
                $json['detailSequence'][] = $detailSequence;
            }
        }
        if (0 < count($this->subDetailSequence)) {
            $json['subDetailSequence'] = [];
            foreach($this->subDetailSequence as $subDetailSequence) {
                $json['subDetailSequence'][] = $subDetailSequence;
            }
        }
        if (0 < count($this->provider)) {
            $json['provider'] = [];
            foreach($this->provider as $provider) {
                $json['provider'][] = $provider;
            }
        }
        if (null !== $this->productOrService) $json['productOrService'] = $this->productOrService;
        if (0 < count($this->modifier)) {
            $json['modifier'] = [];
            foreach($this->modifier as $modifier) {
                $json['modifier'][] = $modifier;
            }
        }
        if (0 < count($this->programCode)) {
            $json['programCode'] = [];
            foreach($this->programCode as $programCode) {
                $json['programCode'][] = $programCode;
            }
        }
        if (null !== $this->servicedDate) $json['servicedDate'] = $this->servicedDate;
        if (null !== $this->servicedPeriod) $json['servicedPeriod'] = $this->servicedPeriod;
        if (null !== $this->locationCodeableConcept) $json['locationCodeableConcept'] = $this->locationCodeableConcept;
        if (null !== $this->locationAddress) $json['locationAddress'] = $this->locationAddress;
        if (null !== $this->locationReference) $json['locationReference'] = $this->locationReference;
        if (null !== $this->quantity) $json['quantity'] = $this->quantity;
        if (null !== $this->unitPrice) $json['unitPrice'] = $this->unitPrice;
        if (null !== $this->factor) $json['factor'] = $this->factor;
        if (null !== $this->net) $json['net'] = $this->net;
        if (null !== $this->bodySite) $json['bodySite'] = $this->bodySite;
        if (0 < count($this->subSite)) {
            $json['subSite'] = [];
            foreach($this->subSite as $subSite) {
                $json['subSite'][] = $subSite;
            }
        }
        if (0 < count($this->noteNumber)) {
            $json['noteNumber'] = [];
            foreach($this->noteNumber as $noteNumber) {
                $json['noteNumber'][] = $noteNumber;
            }
        }
        if (0 < count($this->adjudication)) {
            $json['adjudication'] = [];
            foreach($this->adjudication as $adjudication) {
                $json['adjudication'][] = $adjudication;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ExplanationOfBenefitAddItem xmlns="http://hl7.org/fhir"></ExplanationOfBenefitAddItem>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->itemSequence)) {
            foreach($this->itemSequence as $itemSequence) {
                $itemSequence->xmlSerialize(true, $sxe->addChild('itemSequence'));
            }
        }
        if (0 < count($this->detailSequence)) {
            foreach($this->detailSequence as $detailSequence) {
                $detailSequence->xmlSerialize(true, $sxe->addChild('detailSequence'));
            }
        }
        if (0 < count($this->subDetailSequence)) {
            foreach($this->subDetailSequence as $subDetailSequence) {
                $subDetailSequence->xmlSerialize(true, $sxe->addChild('subDetailSequence'));
            }
        }
        if (0 < count($this->provider)) {
            foreach($this->provider as $provider) {
                $provider->xmlSerialize(true, $sxe->addChild('provider'));
            }
        }
        if (null !== $this->productOrService) $this->productOrService->xmlSerialize(true, $sxe->addChild('productOrService'));
        if (0 < count($this->modifier)) {
            foreach($this->modifier as $modifier) {
                $modifier->xmlSerialize(true, $sxe->addChild('modifier'));
            }
        }
        if (0 < count($this->programCode)) {
            foreach($this->programCode as $programCode) {
                $programCode->xmlSerialize(true, $sxe->addChild('programCode'));
            }
        }
        if (null !== $this->servicedDate) $this->servicedDate->xmlSerialize(true, $sxe->addChild('servicedDate'));
        if (null !== $this->servicedPeriod) $this->servicedPeriod->xmlSerialize(true, $sxe->addChild('servicedPeriod'));
        if (null !== $this->locationCodeableConcept) $this->locationCodeableConcept->xmlSerialize(true, $sxe->addChild('locationCodeableConcept'));
        if (null !== $this->locationAddress) $this->locationAddress->xmlSerialize(true, $sxe->addChild('locationAddress'));
        if (null !== $this->locationReference) $this->locationReference->xmlSerialize(true, $sxe->addChild('locationReference'));
        if (null !== $this->quantity) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (null !== $this->unitPrice) $this->unitPrice->xmlSerialize(true, $sxe->addChild('unitPrice'));
        if (null !== $this->factor) $this->factor->xmlSerialize(true, $sxe->addChild('factor'));
        if (null !== $this->net) $this->net->xmlSerialize(true, $sxe->addChild('net'));
        if (null !== $this->bodySite) $this->bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
        if (0 < count($this->subSite)) {
            foreach($this->subSite as $subSite) {
                $subSite->xmlSerialize(true, $sxe->addChild('subSite'));
            }
        }
        if (0 < count($this->noteNumber)) {
            foreach($this->noteNumber as $noteNumber) {
                $noteNumber->xmlSerialize(true, $sxe->addChild('noteNumber'));
            }
        }
        if (0 < count($this->adjudication)) {
            foreach($this->adjudication as $adjudication) {
                $adjudication->xmlSerialize(true, $sxe->addChild('adjudication'));
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