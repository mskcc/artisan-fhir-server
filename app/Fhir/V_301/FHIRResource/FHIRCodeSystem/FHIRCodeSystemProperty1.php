<?php namespace Fhir\V_301\FHIRResource\FHIRCodeSystem;

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
 * A code system resource specifies a set of codes drawn from one or more code systems.
 */
class FHIRCodeSystemProperty1 extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A code that is a reference to CodeSystem.property.code.
     * @var \Fhir\V_301\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRCode
     */
    public $valueCode = null;

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRCoding
     */
    public $valueCoding = null;

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRInteger
     */
    public $valueInteger = null;

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'CodeSystem.Property1';

    /**
     * A code that is a reference to CodeSystem.property.code.
     * @return \Fhir\V_301\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A code that is a reference to CodeSystem.property.code.
     * @param \Fhir\V_301\FHIRElement\FHIRCode $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRCode
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRCode $valueCode
     * @return $this
     */
    public function setValueCode($valueCode)
    {
        $this->valueCode = $valueCode;
        return $this;
    }

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRCoding $valueCoding
     * @return $this
     */
    public function setValueCoding($valueCoding)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRString $valueString
     * @return $this
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRInteger $valueInteger
     * @return $this
     */
    public function setValueInteger($valueInteger)
    {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $valueBoolean
     * @return $this
     */
    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * The value of this property. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $valueDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
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
        if (null !== $this->valueCode) $json['valueCode'] = $this->valueCode;
        if (null !== $this->valueCoding) $json['valueCoding'] = $this->valueCoding;
        if (null !== $this->valueString) $json['valueString'] = $this->valueString;
        if (null !== $this->valueInteger) $json['valueInteger'] = $this->valueInteger;
        if (null !== $this->valueBoolean) $json['valueBoolean'] = $this->valueBoolean;
        if (null !== $this->valueDateTime) $json['valueDateTime'] = $this->valueDateTime;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CodeSystemProperty1 xmlns="http://hl7.org/fhir"></CodeSystemProperty1>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->valueCode) $this->valueCode->xmlSerialize(true, $sxe->addChild('valueCode'));
        if (null !== $this->valueCoding) $this->valueCoding->xmlSerialize(true, $sxe->addChild('valueCoding'));
        if (null !== $this->valueString) $this->valueString->xmlSerialize(true, $sxe->addChild('valueString'));
        if (null !== $this->valueInteger) $this->valueInteger->xmlSerialize(true, $sxe->addChild('valueInteger'));
        if (null !== $this->valueBoolean) $this->valueBoolean->xmlSerialize(true, $sxe->addChild('valueBoolean'));
        if (null !== $this->valueDateTime) $this->valueDateTime->xmlSerialize(true, $sxe->addChild('valueDateTime'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}