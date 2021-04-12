<?php namespace Fhir\V_301\FHIRDomainResource;

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

use Fhir\V_301\FHIRResource\FHIRDomainResource;

/**
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDeviceComponent extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The locally assigned unique identification by the software. For example: handle ID.
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The component type as defined in the object-oriented or metric nomenclature partition.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The timestamp for the most recent system change which includes device configuration or setting change.
     * @var \Fhir\V_301\FHIRElement\FHIRInstant
     */
    public $lastSystemChange = null;

    /**
     * The link to the source Device that contains administrative device information such as manufacture, serial number, etc.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * The link to the parent resource. For example: Channel is linked to its VMD parent.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $parent = null;

    /**
     * The current operational status of the device. For example: On, Off, Standby, etc.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $operationalStatus = array();

    /**
     * The parameter group supported by the current device component that is based on some nomenclature, e.g. cardiovascular.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $parameterGroup = null;

    /**
     * The physical principle of the measurement. For example: thermal, chemical, acoustical, etc.
     * @var \Fhir\V_301\FHIRElement\FHIRMeasmntPrinciple
     */
    public $measurementPrinciple = null;

    /**
     * The production specification such as component revision, serial number, etc.
     * @var \Fhir\V_301\FHIRResource\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification[]
     */
    public $productionSpecification = array();

    /**
     * The language code for the human-readable text string produced by the device. This language code will follow the IETF language tag. Example: en-US.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $languageCode = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'DeviceComponent';

    /**
     * The locally assigned unique identification by the software. For example: handle ID.
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The locally assigned unique identification by the software. For example: handle ID.
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The component type as defined in the object-oriented or metric nomenclature partition.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The component type as defined in the object-oriented or metric nomenclature partition.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The timestamp for the most recent system change which includes device configuration or setting change.
     * @return \Fhir\V_301\FHIRElement\FHIRInstant
     */
    public function getLastSystemChange()
    {
        return $this->lastSystemChange;
    }

    /**
     * The timestamp for the most recent system change which includes device configuration or setting change.
     * @param \Fhir\V_301\FHIRElement\FHIRInstant $lastSystemChange
     * @return $this
     */
    public function setLastSystemChange($lastSystemChange)
    {
        $this->lastSystemChange = $lastSystemChange;
        return $this;
    }

    /**
     * The link to the source Device that contains administrative device information such as manufacture, serial number, etc.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The link to the source Device that contains administrative device information such as manufacture, serial number, etc.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * The link to the parent resource. For example: Channel is linked to its VMD parent.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The link to the parent resource. For example: Channel is linked to its VMD parent.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * The current operational status of the device. For example: On, Off, Standby, etc.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOperationalStatus()
    {
        return $this->operationalStatus;
    }

    /**
     * The current operational status of the device. For example: On, Off, Standby, etc.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $operationalStatus
     * @return $this
     */
    public function addOperationalStatus($operationalStatus)
    {
        $this->operationalStatus[] = $operationalStatus;
        return $this;
    }

    /**
     * The parameter group supported by the current device component that is based on some nomenclature, e.g. cardiovascular.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getParameterGroup()
    {
        return $this->parameterGroup;
    }

    /**
     * The parameter group supported by the current device component that is based on some nomenclature, e.g. cardiovascular.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $parameterGroup
     * @return $this
     */
    public function setParameterGroup($parameterGroup)
    {
        $this->parameterGroup = $parameterGroup;
        return $this;
    }

    /**
     * The physical principle of the measurement. For example: thermal, chemical, acoustical, etc.
     * @return \Fhir\V_301\FHIRElement\FHIRMeasmntPrinciple
     */
    public function getMeasurementPrinciple()
    {
        return $this->measurementPrinciple;
    }

    /**
     * The physical principle of the measurement. For example: thermal, chemical, acoustical, etc.
     * @param \Fhir\V_301\FHIRElement\FHIRMeasmntPrinciple $measurementPrinciple
     * @return $this
     */
    public function setMeasurementPrinciple($measurementPrinciple)
    {
        $this->measurementPrinciple = $measurementPrinciple;
        return $this;
    }

    /**
     * The production specification such as component revision, serial number, etc.
     * @return \Fhir\V_301\FHIRResource\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification[]
     */
    public function getProductionSpecification()
    {
        return $this->productionSpecification;
    }

    /**
     * The production specification such as component revision, serial number, etc.
     * @param \Fhir\V_301\FHIRResource\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification $productionSpecification
     * @return $this
     */
    public function addProductionSpecification($productionSpecification)
    {
        $this->productionSpecification[] = $productionSpecification;
        return $this;
    }

    /**
     * The language code for the human-readable text string produced by the device. This language code will follow the IETF language tag. Example: en-US.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * The language code for the human-readable text string produced by the device. This language code will follow the IETF language tag. Example: en-US.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $languageCode
     * @return $this
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
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
        if (null !== $this->identifier) $json['identifier'] = $this->identifier;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->lastSystemChange) $json['lastSystemChange'] = $this->lastSystemChange;
        if (null !== $this->source) $json['source'] = $this->source;
        if (null !== $this->parent) $json['parent'] = $this->parent;
        if (0 < count($this->operationalStatus)) {
            $json['operationalStatus'] = [];
            foreach($this->operationalStatus as $operationalStatus) {
                $json['operationalStatus'][] = $operationalStatus;
            }
        }
        if (null !== $this->parameterGroup) $json['parameterGroup'] = $this->parameterGroup;
        if (null !== $this->measurementPrinciple) $json['measurementPrinciple'] = $this->measurementPrinciple;
        if (0 < count($this->productionSpecification)) {
            $json['productionSpecification'] = [];
            foreach($this->productionSpecification as $productionSpecification) {
                $json['productionSpecification'][] = $productionSpecification;
            }
        }
        if (null !== $this->languageCode) $json['languageCode'] = $this->languageCode;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DeviceComponent xmlns="http://hl7.org/fhir"></DeviceComponent>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->lastSystemChange) $this->lastSystemChange->xmlSerialize(true, $sxe->addChild('lastSystemChange'));
        if (null !== $this->source) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (null !== $this->parent) $this->parent->xmlSerialize(true, $sxe->addChild('parent'));
        if (0 < count($this->operationalStatus)) {
            foreach($this->operationalStatus as $operationalStatus) {
                $operationalStatus->xmlSerialize(true, $sxe->addChild('operationalStatus'));
            }
        }
        if (null !== $this->parameterGroup) $this->parameterGroup->xmlSerialize(true, $sxe->addChild('parameterGroup'));
        if (null !== $this->measurementPrinciple) $this->measurementPrinciple->xmlSerialize(true, $sxe->addChild('measurementPrinciple'));
        if (0 < count($this->productionSpecification)) {
            foreach($this->productionSpecification as $productionSpecification) {
                $productionSpecification->xmlSerialize(true, $sxe->addChild('productionSpecification'));
            }
        }
        if (null !== $this->languageCode) $this->languageCode->xmlSerialize(true, $sxe->addChild('languageCode'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}