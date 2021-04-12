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
 * Detailed definition of a medicinal product, typically for uses other than direct patient care (e.g. regulatory use).
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicinalProduct extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Business identifier for this product. Could be an MPID.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Regulatory type, e.g. Investigational or Authorized.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * If this medicine applies to human or veterinary uses.
     * @var \Fhir\V_400\FHIRElement\FHIRCoding
     */
    public $domain = null;

    /**
     * The dose form for a single part product, or combined form of a multiple part product.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $combinedPharmaceuticalDoseForm = null;

    /**
     * The legal status of supply of the medicinal product as classified by the regulator.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $legalStatusOfSupply = null;

    /**
     * Whether the Medicinal Product is subject to additional monitoring for regulatory reasons.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $additionalMonitoringIndicator = null;

    /**
     * Whether the Medicinal Product is subject to special measures for regulatory reasons.
     * @var \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public $specialMeasures = array();

    /**
     * If authorised for use in children.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $paediatricUseIndicator = null;

    /**
     * Allows the product to be classified by various systems.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $productClassification = array();

    /**
     * Marketing status of the medicinal product, in contrast to marketing authorizaton.
     * @var \Fhir\V_400\FHIRResource\FHIRMarketingStatus[]
     */
    public $marketingStatus = array();

    /**
     * Pharmaceutical aspects of product.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $pharmaceuticalProduct = array();

    /**
     * Package representation for the product.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $packagedMedicinalProduct = array();

    /**
     * Supporting documentation, typically for regulatory submission.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $attachedDocument = array();

    /**
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master File).
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $masterFile = array();

    /**
     * A product specific contact, person (in a role), or an organization.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $contact = array();

    /**
     * Clinical trials or studies that this product is involved in.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $clinicalTrial = array();

    /**
     * The product's name, including full name and possibly coded parts.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicinalProduct\FHIRMedicinalProductName[]
     */
    public $name = array();

    /**
     * Reference to another product, e.g. for linking authorised to investigational product.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $crossReference = array();

    /**
     * An operation applied to the product, for manufacturing or adminsitrative purpose.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation[]
     */
    public $manufacturingBusinessOperation = array();

    /**
     * Indicates if the medicinal product has an orphan designation for the treatment of a rare disease.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation[]
     */
    public $specialDesignation = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicinalProduct';

    /**
     * Business identifier for this product. Could be an MPID.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Business identifier for this product. Could be an MPID.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Regulatory type, e.g. Investigational or Authorized.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Regulatory type, e.g. Investigational or Authorized.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * If this medicine applies to human or veterinary uses.
     * @return \Fhir\V_400\FHIRElement\FHIRCoding
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * If this medicine applies to human or veterinary uses.
     * @param \Fhir\V_400\FHIRElement\FHIRCoding $domain
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * The dose form for a single part product, or combined form of a multiple part product.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getCombinedPharmaceuticalDoseForm()
    {
        return $this->combinedPharmaceuticalDoseForm;
    }

    /**
     * The dose form for a single part product, or combined form of a multiple part product.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $combinedPharmaceuticalDoseForm
     * @return $this
     */
    public function setCombinedPharmaceuticalDoseForm($combinedPharmaceuticalDoseForm)
    {
        $this->combinedPharmaceuticalDoseForm = $combinedPharmaceuticalDoseForm;
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
     * Whether the Medicinal Product is subject to additional monitoring for regulatory reasons.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditionalMonitoringIndicator()
    {
        return $this->additionalMonitoringIndicator;
    }

    /**
     * Whether the Medicinal Product is subject to additional monitoring for regulatory reasons.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $additionalMonitoringIndicator
     * @return $this
     */
    public function setAdditionalMonitoringIndicator($additionalMonitoringIndicator)
    {
        $this->additionalMonitoringIndicator = $additionalMonitoringIndicator;
        return $this;
    }

    /**
     * Whether the Medicinal Product is subject to special measures for regulatory reasons.
     * @return \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public function getSpecialMeasures()
    {
        return $this->specialMeasures;
    }

    /**
     * Whether the Medicinal Product is subject to special measures for regulatory reasons.
     * @param \Fhir\V_400\FHIRElement\FHIRString $specialMeasures
     * @return $this
     */
    public function addSpecialMeasures($specialMeasures)
    {
        $this->specialMeasures[] = $specialMeasures;
        return $this;
    }

    /**
     * If authorised for use in children.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getPaediatricUseIndicator()
    {
        return $this->paediatricUseIndicator;
    }

    /**
     * If authorised for use in children.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $paediatricUseIndicator
     * @return $this
     */
    public function setPaediatricUseIndicator($paediatricUseIndicator)
    {
        $this->paediatricUseIndicator = $paediatricUseIndicator;
        return $this;
    }

    /**
     * Allows the product to be classified by various systems.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProductClassification()
    {
        return $this->productClassification;
    }

    /**
     * Allows the product to be classified by various systems.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $productClassification
     * @return $this
     */
    public function addProductClassification($productClassification)
    {
        $this->productClassification[] = $productClassification;
        return $this;
    }

    /**
     * Marketing status of the medicinal product, in contrast to marketing authorizaton.
     * @return \Fhir\V_400\FHIRResource\FHIRMarketingStatus[]
     */
    public function getMarketingStatus()
    {
        return $this->marketingStatus;
    }

    /**
     * Marketing status of the medicinal product, in contrast to marketing authorizaton.
     * @param \Fhir\V_400\FHIRResource\FHIRMarketingStatus $marketingStatus
     * @return $this
     */
    public function addMarketingStatus($marketingStatus)
    {
        $this->marketingStatus[] = $marketingStatus;
        return $this;
    }

    /**
     * Pharmaceutical aspects of product.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getPharmaceuticalProduct()
    {
        return $this->pharmaceuticalProduct;
    }

    /**
     * Pharmaceutical aspects of product.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $pharmaceuticalProduct
     * @return $this
     */
    public function addPharmaceuticalProduct($pharmaceuticalProduct)
    {
        $this->pharmaceuticalProduct[] = $pharmaceuticalProduct;
        return $this;
    }

    /**
     * Package representation for the product.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getPackagedMedicinalProduct()
    {
        return $this->packagedMedicinalProduct;
    }

    /**
     * Package representation for the product.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $packagedMedicinalProduct
     * @return $this
     */
    public function addPackagedMedicinalProduct($packagedMedicinalProduct)
    {
        $this->packagedMedicinalProduct[] = $packagedMedicinalProduct;
        return $this;
    }

    /**
     * Supporting documentation, typically for regulatory submission.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getAttachedDocument()
    {
        return $this->attachedDocument;
    }

    /**
     * Supporting documentation, typically for regulatory submission.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $attachedDocument
     * @return $this
     */
    public function addAttachedDocument($attachedDocument)
    {
        $this->attachedDocument[] = $attachedDocument;
        return $this;
    }

    /**
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master File).
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getMasterFile()
    {
        return $this->masterFile;
    }

    /**
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master File).
     * @param \Fhir\V_400\FHIRElement\FHIRReference $masterFile
     * @return $this
     */
    public function addMasterFile($masterFile)
    {
        $this->masterFile[] = $masterFile;
        return $this;
    }

    /**
     * A product specific contact, person (in a role), or an organization.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * A product specific contact, person (in a role), or an organization.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Clinical trials or studies that this product is involved in.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getClinicalTrial()
    {
        return $this->clinicalTrial;
    }

    /**
     * Clinical trials or studies that this product is involved in.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $clinicalTrial
     * @return $this
     */
    public function addClinicalTrial($clinicalTrial)
    {
        $this->clinicalTrial[] = $clinicalTrial;
        return $this;
    }

    /**
     * The product's name, including full name and possibly coded parts.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicinalProduct\FHIRMedicinalProductName[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The product's name, including full name and possibly coded parts.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicinalProduct\FHIRMedicinalProductName $name
     * @return $this
     */
    public function addName($name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * Reference to another product, e.g. for linking authorised to investigational product.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getCrossReference()
    {
        return $this->crossReference;
    }

    /**
     * Reference to another product, e.g. for linking authorised to investigational product.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $crossReference
     * @return $this
     */
    public function addCrossReference($crossReference)
    {
        $this->crossReference[] = $crossReference;
        return $this;
    }

    /**
     * An operation applied to the product, for manufacturing or adminsitrative purpose.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation[]
     */
    public function getManufacturingBusinessOperation()
    {
        return $this->manufacturingBusinessOperation;
    }

    /**
     * An operation applied to the product, for manufacturing or adminsitrative purpose.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation $manufacturingBusinessOperation
     * @return $this
     */
    public function addManufacturingBusinessOperation($manufacturingBusinessOperation)
    {
        $this->manufacturingBusinessOperation[] = $manufacturingBusinessOperation;
        return $this;
    }

    /**
     * Indicates if the medicinal product has an orphan designation for the treatment of a rare disease.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation[]
     */
    public function getSpecialDesignation()
    {
        return $this->specialDesignation;
    }

    /**
     * Indicates if the medicinal product has an orphan designation for the treatment of a rare disease.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation $specialDesignation
     * @return $this
     */
    public function addSpecialDesignation($specialDesignation)
    {
        $this->specialDesignation[] = $specialDesignation;
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
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->domain) $json['domain'] = $this->domain;
        if (null !== $this->combinedPharmaceuticalDoseForm) $json['combinedPharmaceuticalDoseForm'] = $this->combinedPharmaceuticalDoseForm;
        if (null !== $this->legalStatusOfSupply) $json['legalStatusOfSupply'] = $this->legalStatusOfSupply;
        if (null !== $this->additionalMonitoringIndicator) $json['additionalMonitoringIndicator'] = $this->additionalMonitoringIndicator;
        if (0 < count($this->specialMeasures)) {
            $json['specialMeasures'] = [];
            foreach($this->specialMeasures as $specialMeasures) {
                $json['specialMeasures'][] = $specialMeasures;
            }
        }
        if (null !== $this->paediatricUseIndicator) $json['paediatricUseIndicator'] = $this->paediatricUseIndicator;
        if (0 < count($this->productClassification)) {
            $json['productClassification'] = [];
            foreach($this->productClassification as $productClassification) {
                $json['productClassification'][] = $productClassification;
            }
        }
        if (0 < count($this->marketingStatus)) {
            $json['marketingStatus'] = [];
            foreach($this->marketingStatus as $marketingStatus) {
                $json['marketingStatus'][] = $marketingStatus;
            }
        }
        if (0 < count($this->pharmaceuticalProduct)) {
            $json['pharmaceuticalProduct'] = [];
            foreach($this->pharmaceuticalProduct as $pharmaceuticalProduct) {
                $json['pharmaceuticalProduct'][] = $pharmaceuticalProduct;
            }
        }
        if (0 < count($this->packagedMedicinalProduct)) {
            $json['packagedMedicinalProduct'] = [];
            foreach($this->packagedMedicinalProduct as $packagedMedicinalProduct) {
                $json['packagedMedicinalProduct'][] = $packagedMedicinalProduct;
            }
        }
        if (0 < count($this->attachedDocument)) {
            $json['attachedDocument'] = [];
            foreach($this->attachedDocument as $attachedDocument) {
                $json['attachedDocument'][] = $attachedDocument;
            }
        }
        if (0 < count($this->masterFile)) {
            $json['masterFile'] = [];
            foreach($this->masterFile as $masterFile) {
                $json['masterFile'][] = $masterFile;
            }
        }
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                $json['contact'][] = $contact;
            }
        }
        if (0 < count($this->clinicalTrial)) {
            $json['clinicalTrial'] = [];
            foreach($this->clinicalTrial as $clinicalTrial) {
                $json['clinicalTrial'][] = $clinicalTrial;
            }
        }
        if (0 < count($this->name)) {
            $json['name'] = [];
            foreach($this->name as $name) {
                $json['name'][] = $name;
            }
        }
        if (0 < count($this->crossReference)) {
            $json['crossReference'] = [];
            foreach($this->crossReference as $crossReference) {
                $json['crossReference'][] = $crossReference;
            }
        }
        if (0 < count($this->manufacturingBusinessOperation)) {
            $json['manufacturingBusinessOperation'] = [];
            foreach($this->manufacturingBusinessOperation as $manufacturingBusinessOperation) {
                $json['manufacturingBusinessOperation'][] = $manufacturingBusinessOperation;
            }
        }
        if (0 < count($this->specialDesignation)) {
            $json['specialDesignation'] = [];
            foreach($this->specialDesignation as $specialDesignation) {
                $json['specialDesignation'][] = $specialDesignation;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicinalProduct xmlns="http://hl7.org/fhir"></MedicinalProduct>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->domain) $this->domain->xmlSerialize(true, $sxe->addChild('domain'));
        if (null !== $this->combinedPharmaceuticalDoseForm) $this->combinedPharmaceuticalDoseForm->xmlSerialize(true, $sxe->addChild('combinedPharmaceuticalDoseForm'));
        if (null !== $this->legalStatusOfSupply) $this->legalStatusOfSupply->xmlSerialize(true, $sxe->addChild('legalStatusOfSupply'));
        if (null !== $this->additionalMonitoringIndicator) $this->additionalMonitoringIndicator->xmlSerialize(true, $sxe->addChild('additionalMonitoringIndicator'));
        if (0 < count($this->specialMeasures)) {
            foreach($this->specialMeasures as $specialMeasures) {
                $specialMeasures->xmlSerialize(true, $sxe->addChild('specialMeasures'));
            }
        }
        if (null !== $this->paediatricUseIndicator) $this->paediatricUseIndicator->xmlSerialize(true, $sxe->addChild('paediatricUseIndicator'));
        if (0 < count($this->productClassification)) {
            foreach($this->productClassification as $productClassification) {
                $productClassification->xmlSerialize(true, $sxe->addChild('productClassification'));
            }
        }
        if (0 < count($this->marketingStatus)) {
            foreach($this->marketingStatus as $marketingStatus) {
                $marketingStatus->xmlSerialize(true, $sxe->addChild('marketingStatus'));
            }
        }
        if (0 < count($this->pharmaceuticalProduct)) {
            foreach($this->pharmaceuticalProduct as $pharmaceuticalProduct) {
                $pharmaceuticalProduct->xmlSerialize(true, $sxe->addChild('pharmaceuticalProduct'));
            }
        }
        if (0 < count($this->packagedMedicinalProduct)) {
            foreach($this->packagedMedicinalProduct as $packagedMedicinalProduct) {
                $packagedMedicinalProduct->xmlSerialize(true, $sxe->addChild('packagedMedicinalProduct'));
            }
        }
        if (0 < count($this->attachedDocument)) {
            foreach($this->attachedDocument as $attachedDocument) {
                $attachedDocument->xmlSerialize(true, $sxe->addChild('attachedDocument'));
            }
        }
        if (0 < count($this->masterFile)) {
            foreach($this->masterFile as $masterFile) {
                $masterFile->xmlSerialize(true, $sxe->addChild('masterFile'));
            }
        }
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (0 < count($this->clinicalTrial)) {
            foreach($this->clinicalTrial as $clinicalTrial) {
                $clinicalTrial->xmlSerialize(true, $sxe->addChild('clinicalTrial'));
            }
        }
        if (0 < count($this->name)) {
            foreach($this->name as $name) {
                $name->xmlSerialize(true, $sxe->addChild('name'));
            }
        }
        if (0 < count($this->crossReference)) {
            foreach($this->crossReference as $crossReference) {
                $crossReference->xmlSerialize(true, $sxe->addChild('crossReference'));
            }
        }
        if (0 < count($this->manufacturingBusinessOperation)) {
            foreach($this->manufacturingBusinessOperation as $manufacturingBusinessOperation) {
                $manufacturingBusinessOperation->xmlSerialize(true, $sxe->addChild('manufacturingBusinessOperation'));
            }
        }
        if (0 < count($this->specialDesignation)) {
            foreach($this->specialDesignation as $specialDesignation) {
                $specialDesignation->xmlSerialize(true, $sxe->addChild('specialDesignation'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}