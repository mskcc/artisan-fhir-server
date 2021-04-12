<?php namespace Fhir\V_400\FHIRElement;

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

use Fhir\V_400\FHIRElement;

/**
 * A  text note which also  contains information about who made the statement and when.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRAnnotation extends FHIRElement implements \JsonSerializable
{
    /**
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $authorReference = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $authorString = null;

    /**
     * Indicates when this particular annotation was made.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $time = null;

    /**
     * The text of the annotation in markdown format.
     * @var \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public $text = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Annotation';

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getAuthorReference()
    {
        return $this->authorReference;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRReference $authorReference
     * @return $this
     */
    public function setAuthorReference($authorReference)
    {
        $this->authorReference = $authorReference;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getAuthorString()
    {
        return $this->authorString;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRString $authorString
     * @return $this
     */
    public function setAuthorString($authorString)
    {
        $this->authorString = $authorString;
        return $this;
    }

    /**
     * Indicates when this particular annotation was made.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Indicates when this particular annotation was made.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * The text of the annotation in markdown format.
     * @return \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * The text of the annotation in markdown format.
     * @param \Fhir\V_400\FHIRElement\FHIRMarkdown $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
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
        if (null !== $this->authorReference) $json['authorReference'] = $this->authorReference;
        if (null !== $this->authorString) $json['authorString'] = $this->authorString;
        if (null !== $this->time) $json['time'] = $this->time;
        if (null !== $this->text) $json['text'] = $this->text;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Annotation xmlns="http://hl7.org/fhir"></Annotation>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->authorReference) $this->authorReference->xmlSerialize(true, $sxe->addChild('authorReference'));
        if (null !== $this->authorString) $this->authorString->xmlSerialize(true, $sxe->addChild('authorString'));
        if (null !== $this->time) $this->time->xmlSerialize(true, $sxe->addChild('time'));
        if (null !== $this->text) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}