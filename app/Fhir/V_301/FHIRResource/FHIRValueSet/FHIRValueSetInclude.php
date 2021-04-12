<?php namespace Fhir\V_301\FHIRResource\FHIRValueSet;

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
 * A value set specifies a set of codes drawn from one or more code systems.
 */
class FHIRValueSetInclude extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * An absolute URI which is the code system from which the selected codes come from.
     * @var \Fhir\V_301\FHIRElement\FHIRUri
     */
    public $system = null;

    /**
     * The version of the code system that the codes are selected from.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * Specifies a concept to be included or excluded.
     * @var \Fhir\V_301\FHIRResource\FHIRValueSet\FHIRValueSetConcept[]
     */
    public $concept = array();

    /**
     * Select concepts by specify a matching criteria based on the properties (including relationships) defined by the system. If multiple filters are specified, they SHALL all be true.
     * @var \Fhir\V_301\FHIRResource\FHIRValueSet\FHIRValueSetFilter[]
     */
    public $filter = array();

    /**
     * Selects concepts found in this value set. This is an absolute URI that is a reference to ValueSet.url.
     * @var \Fhir\V_301\FHIRElement\FHIRUri[]
     */
    public $valueSet = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ValueSet.Include';

    /**
     * An absolute URI which is the code system from which the selected codes come from.
     * @return \Fhir\V_301\FHIRElement\FHIRUri
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * An absolute URI which is the code system from which the selected codes come from.
     * @param \Fhir\V_301\FHIRElement\FHIRUri $system
     * @return $this
     */
    public function setSystem($system)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * The version of the code system that the codes are selected from.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version of the code system that the codes are selected from.
     * @param \Fhir\V_301\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Specifies a concept to be included or excluded.
     * @return \Fhir\V_301\FHIRResource\FHIRValueSet\FHIRValueSetConcept[]
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * Specifies a concept to be included or excluded.
     * @param \Fhir\V_301\FHIRResource\FHIRValueSet\FHIRValueSetConcept $concept
     * @return $this
     */
    public function addConcept($concept)
    {
        $this->concept[] = $concept;
        return $this;
    }

    /**
     * Select concepts by specify a matching criteria based on the properties (including relationships) defined by the system. If multiple filters are specified, they SHALL all be true.
     * @return \Fhir\V_301\FHIRResource\FHIRValueSet\FHIRValueSetFilter[]
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Select concepts by specify a matching criteria based on the properties (including relationships) defined by the system. If multiple filters are specified, they SHALL all be true.
     * @param \Fhir\V_301\FHIRResource\FHIRValueSet\FHIRValueSetFilter $filter
     * @return $this
     */
    public function addFilter($filter)
    {
        $this->filter[] = $filter;
        return $this;
    }

    /**
     * Selects concepts found in this value set. This is an absolute URI that is a reference to ValueSet.url.
     * @return \Fhir\V_301\FHIRElement\FHIRUri[]
     */
    public function getValueSet()
    {
        return $this->valueSet;
    }

    /**
     * Selects concepts found in this value set. This is an absolute URI that is a reference to ValueSet.url.
     * @param \Fhir\V_301\FHIRElement\FHIRUri $valueSet
     * @return $this
     */
    public function addValueSet($valueSet)
    {
        $this->valueSet[] = $valueSet;
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
        if (null !== $this->system) $json['system'] = $this->system;
        if (null !== $this->version) $json['version'] = $this->version;
        if (0 < count($this->concept)) {
            $json['concept'] = [];
            foreach($this->concept as $concept) {
                $json['concept'][] = $concept;
            }
        }
        if (0 < count($this->filter)) {
            $json['filter'] = [];
            foreach($this->filter as $filter) {
                $json['filter'][] = $filter;
            }
        }
        if (0 < count($this->valueSet)) {
            $json['valueSet'] = [];
            foreach($this->valueSet as $valueSet) {
                $json['valueSet'][] = $valueSet;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ValueSetInclude xmlns="http://hl7.org/fhir"></ValueSetInclude>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->system) $this->system->xmlSerialize(true, $sxe->addChild('system'));
        if (null !== $this->version) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (0 < count($this->concept)) {
            foreach($this->concept as $concept) {
                $concept->xmlSerialize(true, $sxe->addChild('concept'));
            }
        }
        if (0 < count($this->filter)) {
            foreach($this->filter as $filter) {
                $filter->xmlSerialize(true, $sxe->addChild('filter'));
            }
        }
        if (0 < count($this->valueSet)) {
            foreach($this->valueSet as $valueSet) {
                $valueSet->xmlSerialize(true, $sxe->addChild('valueSet'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}