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
class FHIRExplanationOfBenefitItem extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A number to uniquely identify item entries.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public $sequence = null;

    /**
     * Care team members related to this service or product.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public $careTeamSequence = array();

    /**
     * Diagnoses applicable for this service or product.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public $diagnosisSequence = array();

    /**
     * Procedures applicable for this service or product.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public $procedureSequence = array();

    /**
     * Exceptions, special conditions and supporting information applicable for this service or product.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public $informationSequence = array();

    /**
     * The type of revenue or cost center providing the product and/or service.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $revenue = null;

    /**
     * Code to identify the general type of benefits under which products and services are provided.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

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
     * Unique Device Identifiers associated with this line item.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $udi = array();

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
     * A billed item may include goods or services provided in multiple encounters.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $encounter = array();

    /**
     * The numbers associated with notes below which apply to the adjudication of this item.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public $noteNumber = array();

    /**
     * If this item is a group then the values here are a summary of the adjudication of the detail items. If this item is a simple product or service then this is the result of the adjudication of this item.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication[]
     */
    public $adjudication = array();

    /**
     * Second-tier of goods and services.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail[]
     */
    public $detail = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ExplanationOfBenefit.Item';

    /**
     * A number to uniquely identify item entries.
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * A number to uniquely identify item entries.
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $sequence
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Care team members related to this service or product.
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public function getCareTeamSequence()
    {
        return $this->careTeamSequence;
    }

    /**
     * Care team members related to this service or product.
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $careTeamSequence
     * @return $this
     */
    public function addCareTeamSequence($careTeamSequence)
    {
        $this->careTeamSequence[] = $careTeamSequence;
        return $this;
    }

    /**
     * Diagnoses applicable for this service or product.
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public function getDiagnosisSequence()
    {
        return $this->diagnosisSequence;
    }

    /**
     * Diagnoses applicable for this service or product.
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $diagnosisSequence
     * @return $this
     */
    public function addDiagnosisSequence($diagnosisSequence)
    {
        $this->diagnosisSequence[] = $diagnosisSequence;
        return $this;
    }

    /**
     * Procedures applicable for this service or product.
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public function getProcedureSequence()
    {
        return $this->procedureSequence;
    }

    /**
     * Procedures applicable for this service or product.
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $procedureSequence
     * @return $this
     */
    public function addProcedureSequence($procedureSequence)
    {
        $this->procedureSequence[] = $procedureSequence;
        return $this;
    }

    /**
     * Exceptions, special conditions and supporting information applicable for this service or product.
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt[]
     */
    public function getInformationSequence()
    {
        return $this->informationSequence;
    }

    /**
     * Exceptions, special conditions and supporting information applicable for this service or product.
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $informationSequence
     * @return $this
     */
    public function addInformationSequence($informationSequence)
    {
        $this->informationSequence[] = $informationSequence;
        return $this;
    }

    /**
     * The type of revenue or cost center providing the product and/or service.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * The type of revenue or cost center providing the product and/or service.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $revenue
     * @return $this
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;
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
     * Unique Device Identifiers associated with this line item.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getUdi()
    {
        return $this->udi;
    }

    /**
     * Unique Device Identifiers associated with this line item.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $udi
     * @return $this
     */
    public function addUdi($udi)
    {
        $this->udi[] = $udi;
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
     * A billed item may include goods or services provided in multiple encounters.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * A billed item may include goods or services provided in multiple encounters.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function addEncounter($encounter)
    {
        $this->encounter[] = $encounter;
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
     * If this item is a group then the values here are a summary of the adjudication of the detail items. If this item is a simple product or service then this is the result of the adjudication of this item.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication[]
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }

    /**
     * If this item is a group then the values here are a summary of the adjudication of the detail items. If this item is a simple product or service then this is the result of the adjudication of this item.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication $adjudication
     * @return $this
     */
    public function addAdjudication($adjudication)
    {
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * Second-tier of goods and services.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Second-tier of goods and services.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail $detail
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
        if (null !== $this->sequence) $json['sequence'] = $this->sequence;
        if (0 < count($this->careTeamSequence)) {
            $json['careTeamSequence'] = [];
            foreach($this->careTeamSequence as $careTeamSequence) {
                $json['careTeamSequence'][] = $careTeamSequence;
            }
        }
        if (0 < count($this->diagnosisSequence)) {
            $json['diagnosisSequence'] = [];
            foreach($this->diagnosisSequence as $diagnosisSequence) {
                $json['diagnosisSequence'][] = $diagnosisSequence;
            }
        }
        if (0 < count($this->procedureSequence)) {
            $json['procedureSequence'] = [];
            foreach($this->procedureSequence as $procedureSequence) {
                $json['procedureSequence'][] = $procedureSequence;
            }
        }
        if (0 < count($this->informationSequence)) {
            $json['informationSequence'] = [];
            foreach($this->informationSequence as $informationSequence) {
                $json['informationSequence'][] = $informationSequence;
            }
        }
        if (null !== $this->revenue) $json['revenue'] = $this->revenue;
        if (null !== $this->category) $json['category'] = $this->category;
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
        if (0 < count($this->udi)) {
            $json['udi'] = [];
            foreach($this->udi as $udi) {
                $json['udi'][] = $udi;
            }
        }
        if (null !== $this->bodySite) $json['bodySite'] = $this->bodySite;
        if (0 < count($this->subSite)) {
            $json['subSite'] = [];
            foreach($this->subSite as $subSite) {
                $json['subSite'][] = $subSite;
            }
        }
        if (0 < count($this->encounter)) {
            $json['encounter'] = [];
            foreach($this->encounter as $encounter) {
                $json['encounter'][] = $encounter;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ExplanationOfBenefitItem xmlns="http://hl7.org/fhir"></ExplanationOfBenefitItem>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->sequence) $this->sequence->xmlSerialize(true, $sxe->addChild('sequence'));
        if (0 < count($this->careTeamSequence)) {
            foreach($this->careTeamSequence as $careTeamSequence) {
                $careTeamSequence->xmlSerialize(true, $sxe->addChild('careTeamSequence'));
            }
        }
        if (0 < count($this->diagnosisSequence)) {
            foreach($this->diagnosisSequence as $diagnosisSequence) {
                $diagnosisSequence->xmlSerialize(true, $sxe->addChild('diagnosisSequence'));
            }
        }
        if (0 < count($this->procedureSequence)) {
            foreach($this->procedureSequence as $procedureSequence) {
                $procedureSequence->xmlSerialize(true, $sxe->addChild('procedureSequence'));
            }
        }
        if (0 < count($this->informationSequence)) {
            foreach($this->informationSequence as $informationSequence) {
                $informationSequence->xmlSerialize(true, $sxe->addChild('informationSequence'));
            }
        }
        if (null !== $this->revenue) $this->revenue->xmlSerialize(true, $sxe->addChild('revenue'));
        if (null !== $this->category) $this->category->xmlSerialize(true, $sxe->addChild('category'));
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
        if (0 < count($this->udi)) {
            foreach($this->udi as $udi) {
                $udi->xmlSerialize(true, $sxe->addChild('udi'));
            }
        }
        if (null !== $this->bodySite) $this->bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
        if (0 < count($this->subSite)) {
            foreach($this->subSite as $subSite) {
                $subSite->xmlSerialize(true, $sxe->addChild('subSite'));
            }
        }
        if (0 < count($this->encounter)) {
            foreach($this->encounter as $encounter) {
                $encounter->xmlSerialize(true, $sxe->addChild('encounter'));
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