<?php namespace Fhir\V_301\FHIRResource\FHIRElementDefinition;

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

use Fhir\V_301\FHIRElement;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRElementDefinitionExample extends FHIRElement implements \JsonSerializable
{
    /**
     * Describes the purpose of this example amoung the set of examples.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $label = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRBase64Binary
     */
    public $valueBase64Binary = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRCode
     */
    public $valueCode = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRDate
     */
    public $valueDate = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRDecimal
     */
    public $valueDecimal = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRId
     */
    public $valueId = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRInstant
     */
    public $valueInstant = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRInteger
     */
    public $valueInteger = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public $valueMarkdown = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIROid
     */
    public $valueOid = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRPositiveInt
     */
    public $valuePositiveInt = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRTime
     */
    public $valueTime = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRUnsignedInt
     */
    public $valueUnsignedInt = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRUri
     */
    public $valueUri = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRAddress
     */
    public $valueAddress = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $valueAge = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRAnnotation
     */
    public $valueAnnotation = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $valueCodeableConcept = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRCoding
     */
    public $valueCoding = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRContactPoint
     */
    public $valueContactPoint = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRCount
     */
    public $valueCount = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public $valueDistance = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $valueDuration = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRHumanName
     */
    public $valueHumanName = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier
     */
    public $valueIdentifier = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $valueMoney = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRRange
     */
    public $valueRange = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRRatio
     */
    public $valueRatio = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $valueReference = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRSampledData
     */
    public $valueSampledData = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRSignature
     */
    public $valueSignature = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRTiming
     */
    public $valueTiming = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRMeta
     */
    public $valueMeta = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ElementDefinition.Example';

    /**
     * Describes the purpose of this example amoung the set of examples.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Describes the purpose of this example amoung the set of examples.
     * @param \Fhir\V_301\FHIRElement\FHIRString $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @return $this
     */
    public function setValueBase64Binary($valueBase64Binary)
    {
        $this->valueBase64Binary = $valueBase64Binary;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $valueBoolean
     * @return $this
     */
    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRCode
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRCode $valueCode
     * @return $this
     */
    public function setValueCode($valueCode)
    {
        $this->valueCode = $valueCode;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRDate
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRDate $valueDate
     * @return $this
     */
    public function setValueDate($valueDate)
    {
        $this->valueDate = $valueDate;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $valueDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRDecimal $valueDecimal
     * @return $this
     */
    public function setValueDecimal($valueDecimal)
    {
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRId
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRId $valueId
     * @return $this
     */
    public function setValueId($valueId)
    {
        $this->valueId = $valueId;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRInstant
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRInstant $valueInstant
     * @return $this
     */
    public function setValueInstant($valueInstant)
    {
        $this->valueInstant = $valueInstant;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRInteger $valueInteger
     * @return $this
     */
    public function setValueInteger($valueInteger)
    {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public function getValueMarkdown()
    {
        return $this->valueMarkdown;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRMarkdown $valueMarkdown
     * @return $this
     */
    public function setValueMarkdown($valueMarkdown)
    {
        $this->valueMarkdown = $valueMarkdown;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIROid
     */
    public function getValueOid()
    {
        return $this->valueOid;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIROid $valueOid
     * @return $this
     */
    public function setValueOid($valueOid)
    {
        $this->valueOid = $valueOid;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRPositiveInt
     */
    public function getValuePositiveInt()
    {
        return $this->valuePositiveInt;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRPositiveInt $valuePositiveInt
     * @return $this
     */
    public function setValuePositiveInt($valuePositiveInt)
    {
        $this->valuePositiveInt = $valuePositiveInt;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRString $valueString
     * @return $this
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRTime $valueTime
     * @return $this
     */
    public function setValueTime($valueTime)
    {
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRUnsignedInt
     */
    public function getValueUnsignedInt()
    {
        return $this->valueUnsignedInt;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRUnsignedInt $valueUnsignedInt
     * @return $this
     */
    public function setValueUnsignedInt($valueUnsignedInt)
    {
        $this->valueUnsignedInt = $valueUnsignedInt;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRUri
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRUri $valueUri
     * @return $this
     */
    public function setValueUri($valueUri)
    {
        $this->valueUri = $valueUri;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRAddress
     */
    public function getValueAddress()
    {
        return $this->valueAddress;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRAddress $valueAddress
     * @return $this
     */
    public function setValueAddress($valueAddress)
    {
        $this->valueAddress = $valueAddress;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getValueAge()
    {
        return $this->valueAge;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRAge $valueAge
     * @return $this
     */
    public function setValueAge($valueAge)
    {
        $this->valueAge = $valueAge;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRAnnotation
     */
    public function getValueAnnotation()
    {
        return $this->valueAnnotation;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRAnnotation $valueAnnotation
     * @return $this
     */
    public function setValueAnnotation($valueAnnotation)
    {
        $this->valueAnnotation = $valueAnnotation;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRAttachment $valueAttachment
     * @return $this
     */
    public function setValueAttachment($valueAttachment)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return $this
     */
    public function setValueCodeableConcept($valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRCoding $valueCoding
     * @return $this
     */
    public function setValueCoding($valueCoding)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRContactPoint
     */
    public function getValueContactPoint()
    {
        return $this->valueContactPoint;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRContactPoint $valueContactPoint
     * @return $this
     */
    public function setValueContactPoint($valueContactPoint)
    {
        $this->valueContactPoint = $valueContactPoint;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getValueCount()
    {
        return $this->valueCount;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRCount $valueCount
     * @return $this
     */
    public function setValueCount($valueCount)
    {
        $this->valueCount = $valueCount;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getValueDistance()
    {
        return $this->valueDistance;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRDistance $valueDistance
     * @return $this
     */
    public function setValueDistance($valueDistance)
    {
        $this->valueDistance = $valueDistance;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getValueDuration()
    {
        return $this->valueDuration;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRDuration $valueDuration
     * @return $this
     */
    public function setValueDuration($valueDuration)
    {
        $this->valueDuration = $valueDuration;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRHumanName
     */
    public function getValueHumanName()
    {
        return $this->valueHumanName;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRHumanName $valueHumanName
     * @return $this
     */
    public function setValueHumanName($valueHumanName)
    {
        $this->valueHumanName = $valueHumanName;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier
     */
    public function getValueIdentifier()
    {
        return $this->valueIdentifier;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $valueIdentifier
     * @return $this
     */
    public function setValueIdentifier($valueIdentifier)
    {
        $this->valueIdentifier = $valueIdentifier;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getValueMoney()
    {
        return $this->valueMoney;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRMoney $valueMoney
     * @return $this
     */
    public function setValueMoney($valueMoney)
    {
        $this->valueMoney = $valueMoney;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRPeriod $valuePeriod
     * @return $this
     */
    public function setValuePeriod($valuePeriod)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity $valueQuantity
     * @return $this
     */
    public function setValueQuantity($valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRRange $valueRange
     * @return $this
     */
    public function setValueRange($valueRange)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRRatio $valueRatio
     * @return $this
     */
    public function setValueRatio($valueRatio)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRReference $valueReference
     * @return $this
     */
    public function setValueReference($valueReference)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRSampledData $valueSampledData
     * @return $this
     */
    public function setValueSampledData($valueSampledData)
    {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRSignature
     */
    public function getValueSignature()
    {
        return $this->valueSignature;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRSignature $valueSignature
     * @return $this
     */
    public function setValueSignature($valueSignature)
    {
        $this->valueSignature = $valueSignature;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRTiming
     */
    public function getValueTiming()
    {
        return $this->valueTiming;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRTiming $valueTiming
     * @return $this
     */
    public function setValueTiming($valueTiming)
    {
        $this->valueTiming = $valueTiming;
        return $this;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRMeta
     */
    public function getValueMeta()
    {
        return $this->valueMeta;
    }

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRMeta $valueMeta
     * @return $this
     */
    public function setValueMeta($valueMeta)
    {
        $this->valueMeta = $valueMeta;
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
        if (null !== $this->label) $json['label'] = $this->label;
        if (null !== $this->valueBase64Binary) $json['valueBase64Binary'] = $this->valueBase64Binary;
        if (null !== $this->valueBoolean) $json['valueBoolean'] = $this->valueBoolean;
        if (null !== $this->valueCode) $json['valueCode'] = $this->valueCode;
        if (null !== $this->valueDate) $json['valueDate'] = $this->valueDate;
        if (null !== $this->valueDateTime) $json['valueDateTime'] = $this->valueDateTime;
        if (null !== $this->valueDecimal) $json['valueDecimal'] = $this->valueDecimal;
        if (null !== $this->valueId) $json['valueId'] = $this->valueId;
        if (null !== $this->valueInstant) $json['valueInstant'] = $this->valueInstant;
        if (null !== $this->valueInteger) $json['valueInteger'] = $this->valueInteger;
        if (null !== $this->valueMarkdown) $json['valueMarkdown'] = $this->valueMarkdown;
        if (null !== $this->valueOid) $json['valueOid'] = $this->valueOid;
        if (null !== $this->valuePositiveInt) $json['valuePositiveInt'] = $this->valuePositiveInt;
        if (null !== $this->valueString) $json['valueString'] = $this->valueString;
        if (null !== $this->valueTime) $json['valueTime'] = $this->valueTime;
        if (null !== $this->valueUnsignedInt) $json['valueUnsignedInt'] = $this->valueUnsignedInt;
        if (null !== $this->valueUri) $json['valueUri'] = $this->valueUri;
        if (null !== $this->valueAddress) $json['valueAddress'] = $this->valueAddress;
        if (null !== $this->valueAge) $json['valueAge'] = $this->valueAge;
        if (null !== $this->valueAnnotation) $json['valueAnnotation'] = $this->valueAnnotation;
        if (null !== $this->valueAttachment) $json['valueAttachment'] = $this->valueAttachment;
        if (null !== $this->valueCodeableConcept) $json['valueCodeableConcept'] = $this->valueCodeableConcept;
        if (null !== $this->valueCoding) $json['valueCoding'] = $this->valueCoding;
        if (null !== $this->valueContactPoint) $json['valueContactPoint'] = $this->valueContactPoint;
        if (null !== $this->valueCount) $json['valueCount'] = $this->valueCount;
        if (null !== $this->valueDistance) $json['valueDistance'] = $this->valueDistance;
        if (null !== $this->valueDuration) $json['valueDuration'] = $this->valueDuration;
        if (null !== $this->valueHumanName) $json['valueHumanName'] = $this->valueHumanName;
        if (null !== $this->valueIdentifier) $json['valueIdentifier'] = $this->valueIdentifier;
        if (null !== $this->valueMoney) $json['valueMoney'] = $this->valueMoney;
        if (null !== $this->valuePeriod) $json['valuePeriod'] = $this->valuePeriod;
        if (null !== $this->valueQuantity) $json['valueQuantity'] = $this->valueQuantity;
        if (null !== $this->valueRange) $json['valueRange'] = $this->valueRange;
        if (null !== $this->valueRatio) $json['valueRatio'] = $this->valueRatio;
        if (null !== $this->valueReference) $json['valueReference'] = $this->valueReference;
        if (null !== $this->valueSampledData) $json['valueSampledData'] = $this->valueSampledData;
        if (null !== $this->valueSignature) $json['valueSignature'] = $this->valueSignature;
        if (null !== $this->valueTiming) $json['valueTiming'] = $this->valueTiming;
        if (null !== $this->valueMeta) $json['valueMeta'] = $this->valueMeta;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ElementDefinitionExample xmlns="http://hl7.org/fhir"></ElementDefinitionExample>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->label) $this->label->xmlSerialize(true, $sxe->addChild('label'));
        if (null !== $this->valueBase64Binary) $this->valueBase64Binary->xmlSerialize(true, $sxe->addChild('valueBase64Binary'));
        if (null !== $this->valueBoolean) $this->valueBoolean->xmlSerialize(true, $sxe->addChild('valueBoolean'));
        if (null !== $this->valueCode) $this->valueCode->xmlSerialize(true, $sxe->addChild('valueCode'));
        if (null !== $this->valueDate) $this->valueDate->xmlSerialize(true, $sxe->addChild('valueDate'));
        if (null !== $this->valueDateTime) $this->valueDateTime->xmlSerialize(true, $sxe->addChild('valueDateTime'));
        if (null !== $this->valueDecimal) $this->valueDecimal->xmlSerialize(true, $sxe->addChild('valueDecimal'));
        if (null !== $this->valueId) $this->valueId->xmlSerialize(true, $sxe->addChild('valueId'));
        if (null !== $this->valueInstant) $this->valueInstant->xmlSerialize(true, $sxe->addChild('valueInstant'));
        if (null !== $this->valueInteger) $this->valueInteger->xmlSerialize(true, $sxe->addChild('valueInteger'));
        if (null !== $this->valueMarkdown) $this->valueMarkdown->xmlSerialize(true, $sxe->addChild('valueMarkdown'));
        if (null !== $this->valueOid) $this->valueOid->xmlSerialize(true, $sxe->addChild('valueOid'));
        if (null !== $this->valuePositiveInt) $this->valuePositiveInt->xmlSerialize(true, $sxe->addChild('valuePositiveInt'));
        if (null !== $this->valueString) $this->valueString->xmlSerialize(true, $sxe->addChild('valueString'));
        if (null !== $this->valueTime) $this->valueTime->xmlSerialize(true, $sxe->addChild('valueTime'));
        if (null !== $this->valueUnsignedInt) $this->valueUnsignedInt->xmlSerialize(true, $sxe->addChild('valueUnsignedInt'));
        if (null !== $this->valueUri) $this->valueUri->xmlSerialize(true, $sxe->addChild('valueUri'));
        if (null !== $this->valueAddress) $this->valueAddress->xmlSerialize(true, $sxe->addChild('valueAddress'));
        if (null !== $this->valueAge) $this->valueAge->xmlSerialize(true, $sxe->addChild('valueAge'));
        if (null !== $this->valueAnnotation) $this->valueAnnotation->xmlSerialize(true, $sxe->addChild('valueAnnotation'));
        if (null !== $this->valueAttachment) $this->valueAttachment->xmlSerialize(true, $sxe->addChild('valueAttachment'));
        if (null !== $this->valueCodeableConcept) $this->valueCodeableConcept->xmlSerialize(true, $sxe->addChild('valueCodeableConcept'));
        if (null !== $this->valueCoding) $this->valueCoding->xmlSerialize(true, $sxe->addChild('valueCoding'));
        if (null !== $this->valueContactPoint) $this->valueContactPoint->xmlSerialize(true, $sxe->addChild('valueContactPoint'));
        if (null !== $this->valueCount) $this->valueCount->xmlSerialize(true, $sxe->addChild('valueCount'));
        if (null !== $this->valueDistance) $this->valueDistance->xmlSerialize(true, $sxe->addChild('valueDistance'));
        if (null !== $this->valueDuration) $this->valueDuration->xmlSerialize(true, $sxe->addChild('valueDuration'));
        if (null !== $this->valueHumanName) $this->valueHumanName->xmlSerialize(true, $sxe->addChild('valueHumanName'));
        if (null !== $this->valueIdentifier) $this->valueIdentifier->xmlSerialize(true, $sxe->addChild('valueIdentifier'));
        if (null !== $this->valueMoney) $this->valueMoney->xmlSerialize(true, $sxe->addChild('valueMoney'));
        if (null !== $this->valuePeriod) $this->valuePeriod->xmlSerialize(true, $sxe->addChild('valuePeriod'));
        if (null !== $this->valueQuantity) $this->valueQuantity->xmlSerialize(true, $sxe->addChild('valueQuantity'));
        if (null !== $this->valueRange) $this->valueRange->xmlSerialize(true, $sxe->addChild('valueRange'));
        if (null !== $this->valueRatio) $this->valueRatio->xmlSerialize(true, $sxe->addChild('valueRatio'));
        if (null !== $this->valueReference) $this->valueReference->xmlSerialize(true, $sxe->addChild('valueReference'));
        if (null !== $this->valueSampledData) $this->valueSampledData->xmlSerialize(true, $sxe->addChild('valueSampledData'));
        if (null !== $this->valueSignature) $this->valueSignature->xmlSerialize(true, $sxe->addChild('valueSignature'));
        if (null !== $this->valueTiming) $this->valueTiming->xmlSerialize(true, $sxe->addChild('valueTiming'));
        if (null !== $this->valueMeta) $this->valueMeta->xmlSerialize(true, $sxe->addChild('valueMeta'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}