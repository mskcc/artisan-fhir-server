<?php namespace Fhir\V_301\FHIRResource\FHIRModuleDefinition;

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
 * The ModuleDefinition resource defines the data requirements for a quality artifact.
 */
class FHIRModuleDefinitionCodeFilter extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The code-valued attribute of the filter. The specified path must be resolvable from the type of the required data. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements. Note that the index must be an integer constant. The path must resolve to an element of type code, Coding, or CodeableConcept.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $path = null;

    /**
     * The valueset for the code filter. The valueSet or codeableConcept elements are exclusive. If valueSet is specified, the filter will return only those data items for which the value of the code-valued element specified in the path is a member of the specified valueset. (choose any one of valueSet*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $valueSetString = null;

    /**
     * The valueset for the code filter. The valueSet or codeableConcept elements are exclusive. If valueSet is specified, the filter will return only those data items for which the value of the code-valued element specified in the path is a member of the specified valueset. (choose any one of valueSet*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $valueSetReference = null;

    /**
     * The codeable concept for the code filter. Only one of valueSet or codeableConcept may be specified. If codeableConcepts are given, the filter will return only those data items for which the code-valued attribute specified by the path has a value that is one of the specified codeable concepts.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $codeableConcept = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ModuleDefinition.CodeFilter';

    /**
     * The code-valued attribute of the filter. The specified path must be resolvable from the type of the required data. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements. Note that the index must be an integer constant. The path must resolve to an element of type code, Coding, or CodeableConcept.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The code-valued attribute of the filter. The specified path must be resolvable from the type of the required data. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements. Note that the index must be an integer constant. The path must resolve to an element of type code, Coding, or CodeableConcept.
     * @param \Fhir\V_301\FHIRElement\FHIRString $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * The valueset for the code filter. The valueSet or codeableConcept elements are exclusive. If valueSet is specified, the filter will return only those data items for which the value of the code-valued element specified in the path is a member of the specified valueset. (choose any one of valueSet*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getValueSetString()
    {
        return $this->valueSetString;
    }

    /**
     * The valueset for the code filter. The valueSet or codeableConcept elements are exclusive. If valueSet is specified, the filter will return only those data items for which the value of the code-valued element specified in the path is a member of the specified valueset. (choose any one of valueSet*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRString $valueSetString
     * @return $this
     */
    public function setValueSetString($valueSetString)
    {
        $this->valueSetString = $valueSetString;
        return $this;
    }

    /**
     * The valueset for the code filter. The valueSet or codeableConcept elements are exclusive. If valueSet is specified, the filter will return only those data items for which the value of the code-valued element specified in the path is a member of the specified valueset. (choose any one of valueSet*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getValueSetReference()
    {
        return $this->valueSetReference;
    }

    /**
     * The valueset for the code filter. The valueSet or codeableConcept elements are exclusive. If valueSet is specified, the filter will return only those data items for which the value of the code-valued element specified in the path is a member of the specified valueset. (choose any one of valueSet*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRReference $valueSetReference
     * @return $this
     */
    public function setValueSetReference($valueSetReference)
    {
        $this->valueSetReference = $valueSetReference;
        return $this;
    }

    /**
     * The codeable concept for the code filter. Only one of valueSet or codeableConcept may be specified. If codeableConcepts are given, the filter will return only those data items for which the code-valued attribute specified by the path has a value that is one of the specified codeable concepts.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCodeableConcept()
    {
        return $this->codeableConcept;
    }

    /**
     * The codeable concept for the code filter. Only one of valueSet or codeableConcept may be specified. If codeableConcepts are given, the filter will return only those data items for which the code-valued attribute specified by the path has a value that is one of the specified codeable concepts.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $codeableConcept
     * @return $this
     */
    public function addCodeableConcept($codeableConcept)
    {
        $this->codeableConcept[] = $codeableConcept;
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
        if (null !== $this->path) $json['path'] = $this->path;
        if (null !== $this->valueSetString) $json['valueSetString'] = $this->valueSetString;
        if (null !== $this->valueSetReference) $json['valueSetReference'] = $this->valueSetReference;
        if (0 < count($this->codeableConcept)) {
            $json['codeableConcept'] = [];
            foreach($this->codeableConcept as $codeableConcept) {
                $json['codeableConcept'][] = $codeableConcept;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ModuleDefinitionCodeFilter xmlns="http://hl7.org/fhir"></ModuleDefinitionCodeFilter>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->path) $this->path->xmlSerialize(true, $sxe->addChild('path'));
        if (null !== $this->valueSetString) $this->valueSetString->xmlSerialize(true, $sxe->addChild('valueSetString'));
        if (null !== $this->valueSetReference) $this->valueSetReference->xmlSerialize(true, $sxe->addChild('valueSetReference'));
        if (0 < count($this->codeableConcept)) {
            foreach($this->codeableConcept as $codeableConcept) {
                $codeableConcept->xmlSerialize(true, $sxe->addChild('codeableConcept'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}