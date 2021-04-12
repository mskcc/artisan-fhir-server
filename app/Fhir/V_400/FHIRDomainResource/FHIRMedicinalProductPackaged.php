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
 * A medicinal product in a container or package.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicinalProductPackaged extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Unique identifier.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The product with this is a pack for.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $subject = array();

    /**
     * Textual description.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The legal status of supply of the medicinal product as classified by the regulator.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $legalStatusOfSupply = null;

    /**
     * Marketing information.
     * @var \Fhir\V_400\FHIRResource\FHIRMarketingStatus[]
     */
    public $marketingStatus = array();

    /**
     * Manufacturer of this Package Item.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $marketingAuthorization = null;

    /**
     * Manufacturer of this Package Item.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $manufacturer = array();

    /**
     * Batch numbering.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedBatchIdentifier[]
     */
    public $batchIdentifier = array();

    /**
     * A packaging item, as a contained for medicine, possibly with other packaging items within.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem[]
     */
    public $packageItem = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicinalProductPackaged';

    /**
     * Unique identifier.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Unique identifier.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The product with this is a pack for.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The product with this is a pack for.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function addSubject($subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * Textual description.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Textual description.
     * @param \Fhir\V_400\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The legal status of supply of the medicinal product as classified by the regulator.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getLegalStatusOfSupply()
    {
        return $this->legalStatusOfSupply;
    }

    /**
     * The legal status of supply of the medicinal product as classified by the regulator.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $legalStatusOfSupply
     * @return $this
     */
    public function setLegalStatusOfSupply($legalStatusOfSupply)
    {
        $this->legalStatusOfSupply = $legalStatusOfSupply;
        return $this;
    }

    /**
     * Marketing information.
     * @return \Fhir\V_400\FHIRResource\FHIRMarketingStatus[]
     */
    public function getMarketingStatus()
    {
        return $this->marketingStatus;
    }

    /**
     * Marketing information.
     * @param \Fhir\V_400\FHIRResource\FHIRMarketingStatus $marketingStatus
     * @return $this
     */
    public function addMarketingStatus($marketingStatus)
    {
        $this->marketingStatus[] = $marketingStatus;
        return $this;
    }

    /**
     * Manufacturer of this Package Item.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getMarketingAuthorization()
    {
        return $this->marketingAuthorization;
    }

    /**
     * Manufacturer of this Package Item.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $marketingAuthorization
     * @return $this
     */
    public function setMarketingAuthorization($marketingAuthorization)
    {
        $this->marketingAuthorization = $marketingAuthorization;
        return $this;
    }

    /**
     * Manufacturer of this Package Item.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Manufacturer of this Package Item.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $manufacturer
     * @return $this
     */
    public function addManufacturer($manufacturer)
    {
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * Batch numbering.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedBatchIdentifier[]
     */
    public function getBatchIdentifier()
    {
        return $this->batchIdentifier;
    }

    /**
     * Batch numbering.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedBatchIdentifier $batchIdentifier
     * @return $this
     */
    public function addBatchIdentifier($batchIdentifier)
    {
        $this->batchIdentifier[] = $batchIdentifier;
        return $this;
    }

    /**
     * A packaging item, as a contained for medicine, possibly with other packaging items within.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem[]
     */
    public function getPackageItem()
    {
        return $this->packageItem;
    }

    /**
     * A packaging item, as a contained for medicine, possibly with other packaging items within.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem $packageItem
     * @return $this
     */
    public function addPackageItem($packageItem)
    {
        $this->packageItem[] = $packageItem;
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
        if (0 < count($this->subject)) {
            $json['subject'] = [];
            foreach($this->subject as $subject) {
                $json['subject'][] = $subject;
            }
        }
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->legalStatusOfSupply) $json['legalStatusOfSupply'] = $this->legalStatusOfSupply;
        if (0 < count($this->marketingStatus)) {
            $json['marketingStatus'] = [];
            foreach($this->marketingStatus as $marketingStatus) {
                $json['marketingStatus'][] = $marketingStatus;
            }
        }
        if (null !== $this->marketingAuthorization) $json['marketingAuthorization'] = $this->marketingAuthorization;
        if (0 < count($this->manufacturer)) {
            $json['manufacturer'] = [];
            foreach($this->manufacturer as $manufacturer) {
                $json['manufacturer'][] = $manufacturer;
            }
        }
        if (0 < count($this->batchIdentifier)) {
            $json['batchIdentifier'] = [];
            foreach($this->batchIdentifier as $batchIdentifier) {
                $json['batchIdentifier'][] = $batchIdentifier;
            }
        }
        if (0 < count($this->packageItem)) {
            $json['packageItem'] = [];
            foreach($this->packageItem as $packageItem) {
                $json['packageItem'][] = $packageItem;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicinalProductPackaged xmlns="http://hl7.org/fhir"></MedicinalProductPackaged>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->subject)) {
            foreach($this->subject as $subject) {
                $subject->xmlSerialize(true, $sxe->addChild('subject'));
            }
        }
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->legalStatusOfSupply) $this->legalStatusOfSupply->xmlSerialize(true, $sxe->addChild('legalStatusOfSupply'));
        if (0 < count($this->marketingStatus)) {
            foreach($this->marketingStatus as $marketingStatus) {
                $marketingStatus->xmlSerialize(true, $sxe->addChild('marketingStatus'));
            }
        }
        if (null !== $this->marketingAuthorization) $this->marketingAuthorization->xmlSerialize(true, $sxe->addChild('marketingAuthorization'));
        if (0 < count($this->manufacturer)) {
            foreach($this->manufacturer as $manufacturer) {
                $manufacturer->xmlSerialize(true, $sxe->addChild('manufacturer'));
            }
        }
        if (0 < count($this->batchIdentifier)) {
            foreach($this->batchIdentifier as $batchIdentifier) {
                $batchIdentifier->xmlSerialize(true, $sxe->addChild('batchIdentifier'));
            }
        }
        if (0 < count($this->packageItem)) {
            foreach($this->packageItem as $packageItem) {
                $packageItem->xmlSerialize(true, $sxe->addChild('packageItem'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}