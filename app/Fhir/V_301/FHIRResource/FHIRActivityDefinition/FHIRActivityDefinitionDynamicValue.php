<?php namespace Fhir\V_301\FHIRResource\FHIRActivityDefinition;

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
 * This resource allows for the definition of some activity to be performed, independent of a particular patient, practitioner, or other performance context.
 */
class FHIRActivityDefinitionDynamicValue extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A brief, natural language description of the intended semantics of the dynamic value.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The path to the element to be customized. This is the path on the resource that will hold the result of the calculation defined by the expression.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $path = null;

    /**
     * The media type of the language for the expression.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $language = null;

    /**
     * An expression specifying the value of the customized element.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $expression = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ActivityDefinition.DynamicValue';

    /**
     * A brief, natural language description of the intended semantics of the dynamic value.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A brief, natural language description of the intended semantics of the dynamic value.
     * @param \Fhir\V_301\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The path to the element to be customized. This is the path on the resource that will hold the result of the calculation defined by the expression.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The path to the element to be customized. This is the path on the resource that will hold the result of the calculation defined by the expression.
     * @param \Fhir\V_301\FHIRElement\FHIRString $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * The media type of the language for the expression.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * The media type of the language for the expression.
     * @param \Fhir\V_301\FHIRElement\FHIRString $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * An expression specifying the value of the customized element.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * An expression specifying the value of the customized element.
     * @param \Fhir\V_301\FHIRElement\FHIRString $expression
     * @return $this
     */
    public function setExpression($expression)
    {
        $this->expression = $expression;
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
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->path) $json['path'] = $this->path;
        if (null !== $this->language) $json['language'] = $this->language;
        if (null !== $this->expression) $json['expression'] = $this->expression;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ActivityDefinitionDynamicValue xmlns="http://hl7.org/fhir"></ActivityDefinitionDynamicValue>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->path) $this->path->xmlSerialize(true, $sxe->addChild('path'));
        if (null !== $this->language) $this->language->xmlSerialize(true, $sxe->addChild('language'));
        if (null !== $this->expression) $this->expression->xmlSerialize(true, $sxe->addChild('expression'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}