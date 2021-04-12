<?php namespace Fhir\V_400\FHIRResource\FHIRMedicinalProduct;

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
 * Detailed definition of a medicinal product, typically for uses other than direct patient care (e.g. regulatory use).
 */
class FHIRMedicinalProductManufacturingBusinessOperation extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The type of manufacturing operation.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $operationType = null;

    /**
     * Regulatory authorization reference number.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public $authorisationReferenceNumber = null;

    /**
     * Regulatory authorization date.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $effectiveDate = null;

    /**
     * To indicate if this proces is commercially confidential.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $confidentialityIndicator = null;

    /**
     * The manufacturer or establishment associated with the process.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $manufacturer = array();

    /**
     * A regulator which oversees the operation.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $regulator = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicinalProduct.ManufacturingBusinessOperation';

    /**
     * The type of manufacturing operation.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * The type of manufacturing operation.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $operationType
     * @return $this
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * Regulatory authorization reference number.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public function getAuthorisationReferenceNumber()
    {
        return $this->authorisationReferenceNumber;
    }

    /**
     * Regulatory authorization reference number.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $authorisationReferenceNumber
     * @return $this
     */
    public function setAuthorisationReferenceNumber($authorisationReferenceNumber)
    {
        $this->authorisationReferenceNumber = $authorisationReferenceNumber;
        return $this;
    }

    /**
     * Regulatory authorization date.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Regulatory authorization date.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $effectiveDate
     * @return $this
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * To indicate if this proces is commercially confidential.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getConfidentialityIndicator()
    {
        return $this->confidentialityIndicator;
    }

    /**
     * To indicate if this proces is commercially confidential.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $confidentialityIndicator
     * @return $this
     */
    public function setConfidentialityIndicator($confidentialityIndicator)
    {
        $this->confidentialityIndicator = $confidentialityIndicator;
        return $this;
    }

    /**
     * The manufacturer or establishment associated with the process.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * The manufacturer or establishment associated with the process.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $manufacturer
     * @return $this
     */
    public function addManufacturer($manufacturer)
    {
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * A regulator which oversees the operation.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getRegulator()
    {
        return $this->regulator;
    }

    /**
     * A regulator which oversees the operation.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $regulator
     * @return $this
     */
    public function setRegulator($regulator)
    {
        $this->regulator = $regulator;
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
        if (null !== $this->operationType) $json['operationType'] = $this->operationType;
        if (null !== $this->authorisationReferenceNumber) $json['authorisationReferenceNumber'] = $this->authorisationReferenceNumber;
        if (null !== $this->effectiveDate) $json['effectiveDate'] = $this->effectiveDate;
        if (null !== $this->confidentialityIndicator) $json['confidentialityIndicator'] = $this->confidentialityIndicator;
        if (0 < count($this->manufacturer)) {
            $json['manufacturer'] = [];
            foreach($this->manufacturer as $manufacturer) {
                $json['manufacturer'][] = $manufacturer;
            }
        }
        if (null !== $this->regulator) $json['regulator'] = $this->regulator;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicinalProductManufacturingBusinessOperation xmlns="http://hl7.org/fhir"></MedicinalProductManufacturingBusinessOperation>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->operationType) $this->operationType->xmlSerialize(true, $sxe->addChild('operationType'));
        if (null !== $this->authorisationReferenceNumber) $this->authorisationReferenceNumber->xmlSerialize(true, $sxe->addChild('authorisationReferenceNumber'));
        if (null !== $this->effectiveDate) $this->effectiveDate->xmlSerialize(true, $sxe->addChild('effectiveDate'));
        if (null !== $this->confidentialityIndicator) $this->confidentialityIndicator->xmlSerialize(true, $sxe->addChild('confidentialityIndicator'));
        if (0 < count($this->manufacturer)) {
            foreach($this->manufacturer as $manufacturer) {
                $manufacturer->xmlSerialize(true, $sxe->addChild('manufacturer'));
            }
        }
        if (null !== $this->regulator) $this->regulator->xmlSerialize(true, $sxe->addChild('regulator'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}