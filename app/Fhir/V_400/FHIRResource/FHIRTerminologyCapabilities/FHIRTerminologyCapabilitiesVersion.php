<?php namespace Fhir\V_400\FHIRResource\FHIRTerminologyCapabilities;

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
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors) of a FHIR Terminology Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 */
class FHIRTerminologyCapabilitiesVersion extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * For version-less code systems, there should be a single version with no identifier.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $code = null;

    /**
     * If this is the default version for this code system.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $isDefault = null;

    /**
     * If the compositional grammar defined by the code system is supported.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $compositional = null;

    /**
     * Language Displays supported.
     * @var \Fhir\V_400\FHIRElement\FHIRCode[]
     */
    public $language = array();

    /**
     * Filter Properties supported.
     * @var \Fhir\V_400\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesFilter[]
     */
    public $filter = array();

    /**
     * Properties supported for $lookup.
     * @var \Fhir\V_400\FHIRElement\FHIRCode[]
     */
    public $property = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'TerminologyCapabilities.Version';

    /**
     * For version-less code systems, there should be a single version with no identifier.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * For version-less code systems, there should be a single version with no identifier.
     * @param \Fhir\V_400\FHIRElement\FHIRString $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * If this is the default version for this code system.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * If this is the default version for this code system.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $isDefault
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * If the compositional grammar defined by the code system is supported.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getCompositional()
    {
        return $this->compositional;
    }

    /**
     * If the compositional grammar defined by the code system is supported.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $compositional
     * @return $this
     */
    public function setCompositional($compositional)
    {
        $this->compositional = $compositional;
        return $this;
    }

    /**
     * Language Displays supported.
     * @return \Fhir\V_400\FHIRElement\FHIRCode[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Language Displays supported.
     * @param \Fhir\V_400\FHIRElement\FHIRCode $language
     * @return $this
     */
    public function addLanguage($language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * Filter Properties supported.
     * @return \Fhir\V_400\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesFilter[]
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Filter Properties supported.
     * @param \Fhir\V_400\FHIRResource\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesFilter $filter
     * @return $this
     */
    public function addFilter($filter)
    {
        $this->filter[] = $filter;
        return $this;
    }

    /**
     * Properties supported for $lookup.
     * @return \Fhir\V_400\FHIRElement\FHIRCode[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Properties supported for $lookup.
     * @param \Fhir\V_400\FHIRElement\FHIRCode $property
     * @return $this
     */
    public function addProperty($property)
    {
        $this->property[] = $property;
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
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->isDefault) $json['isDefault'] = $this->isDefault;
        if (null !== $this->compositional) $json['compositional'] = $this->compositional;
        if (0 < count($this->language)) {
            $json['language'] = [];
            foreach($this->language as $language) {
                $json['language'][] = $language;
            }
        }
        if (0 < count($this->filter)) {
            $json['filter'] = [];
            foreach($this->filter as $filter) {
                $json['filter'][] = $filter;
            }
        }
        if (0 < count($this->property)) {
            $json['property'] = [];
            foreach($this->property as $property) {
                $json['property'][] = $property;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<TerminologyCapabilitiesVersion xmlns="http://hl7.org/fhir"></TerminologyCapabilitiesVersion>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->isDefault) $this->isDefault->xmlSerialize(true, $sxe->addChild('isDefault'));
        if (null !== $this->compositional) $this->compositional->xmlSerialize(true, $sxe->addChild('compositional'));
        if (0 < count($this->language)) {
            foreach($this->language as $language) {
                $language->xmlSerialize(true, $sxe->addChild('language'));
            }
        }
        if (0 < count($this->filter)) {
            foreach($this->filter as $filter) {
                $filter->xmlSerialize(true, $sxe->addChild('filter'));
            }
        }
        if (0 < count($this->property)) {
            foreach($this->property as $property) {
                $property->xmlSerialize(true, $sxe->addChild('property'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}