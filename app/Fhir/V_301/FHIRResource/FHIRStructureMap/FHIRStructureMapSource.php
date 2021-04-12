<?php namespace Fhir\V_301\FHIRResource\FHIRStructureMap;

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
 * A Map of relationships between 2 structures that can be used to transform data.
 */
class FHIRStructureMapSource extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Type or variable this rule applies to.
     * @var \Fhir\V_301\FHIRElement\FHIRId
     */
    public $context = null;

    /**
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     * @var \Fhir\V_301\FHIRElement\FHIRInteger
     */
    public $min = null;

    /**
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $max = null;

    /**
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $type = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRBase64Binary
     */
    public $defaultValueBase64Binary = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $defaultValueBoolean = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRCode
     */
    public $defaultValueCode = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRDate
     */
    public $defaultValueDate = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $defaultValueDateTime = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRDecimal
     */
    public $defaultValueDecimal = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRId
     */
    public $defaultValueId = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRInstant
     */
    public $defaultValueInstant = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRInteger
     */
    public $defaultValueInteger = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public $defaultValueMarkdown = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIROid
     */
    public $defaultValueOid = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRPositiveInt
     */
    public $defaultValuePositiveInt = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $defaultValueString = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRTime
     */
    public $defaultValueTime = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRUnsignedInt
     */
    public $defaultValueUnsignedInt = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRUri
     */
    public $defaultValueUri = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRAddress
     */
    public $defaultValueAddress = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $defaultValueAge = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRAnnotation
     */
    public $defaultValueAnnotation = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRAttachment
     */
    public $defaultValueAttachment = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $defaultValueCodeableConcept = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRCoding
     */
    public $defaultValueCoding = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRContactPoint
     */
    public $defaultValueContactPoint = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRCount
     */
    public $defaultValueCount = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public $defaultValueDistance = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $defaultValueDuration = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRHumanName
     */
    public $defaultValueHumanName = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier
     */
    public $defaultValueIdentifier = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $defaultValueMoney = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public $defaultValuePeriod = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity
     */
    public $defaultValueQuantity = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRRange
     */
    public $defaultValueRange = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRRatio
     */
    public $defaultValueRatio = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $defaultValueReference = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRSampledData
     */
    public $defaultValueSampledData = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRSignature
     */
    public $defaultValueSignature = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRTiming
     */
    public $defaultValueTiming = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRMeta
     */
    public $defaultValueMeta = null;

    /**
     * Optional field for this source.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $element = null;

    /**
     * How to handle the list mode for this element.
     * @var \Fhir\V_301\FHIRElement\FHIRStructureMapSourceListMode
     */
    public $listMode = null;

    /**
     * Named context for field, if a field is specified.
     * @var \Fhir\V_301\FHIRElement\FHIRId
     */
    public $variable = null;

    /**
     * FHIRPath expression  - must be true or the rule does not apply.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $condition = null;

    /**
     * FHIRPath expression  - must be true or the mapping engine throws an error instead of completing.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $check = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'StructureMap.Source';

    /**
     * Type or variable this rule applies to.
     * @return \Fhir\V_301\FHIRElement\FHIRId
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Type or variable this rule applies to.
     * @param \Fhir\V_301\FHIRElement\FHIRId $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     * @return \Fhir\V_301\FHIRElement\FHIRInteger
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     * @param \Fhir\V_301\FHIRElement\FHIRInteger $min
     * @return $this
     */
    public function setMin($min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     * @param \Fhir\V_301\FHIRElement\FHIRString $max
     * @return $this
     */
    public function setMax($max)
    {
        $this->max = $max;
        return $this;
    }

    /**
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     * @param \Fhir\V_301\FHIRElement\FHIRString $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRBase64Binary
     */
    public function getDefaultValueBase64Binary()
    {
        return $this->defaultValueBase64Binary;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
     * @return $this
     */
    public function setDefaultValueBase64Binary($defaultValueBase64Binary)
    {
        $this->defaultValueBase64Binary = $defaultValueBase64Binary;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getDefaultValueBoolean()
    {
        return $this->defaultValueBoolean;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $defaultValueBoolean
     * @return $this
     */
    public function setDefaultValueBoolean($defaultValueBoolean)
    {
        $this->defaultValueBoolean = $defaultValueBoolean;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRCode
     */
    public function getDefaultValueCode()
    {
        return $this->defaultValueCode;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRCode $defaultValueCode
     * @return $this
     */
    public function setDefaultValueCode($defaultValueCode)
    {
        $this->defaultValueCode = $defaultValueCode;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRDate
     */
    public function getDefaultValueDate()
    {
        return $this->defaultValueDate;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRDate $defaultValueDate
     * @return $this
     */
    public function setDefaultValueDate($defaultValueDate)
    {
        $this->defaultValueDate = $defaultValueDate;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getDefaultValueDateTime()
    {
        return $this->defaultValueDateTime;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $defaultValueDateTime
     * @return $this
     */
    public function setDefaultValueDateTime($defaultValueDateTime)
    {
        $this->defaultValueDateTime = $defaultValueDateTime;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal()
    {
        return $this->defaultValueDecimal;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRDecimal $defaultValueDecimal
     * @return $this
     */
    public function setDefaultValueDecimal($defaultValueDecimal)
    {
        $this->defaultValueDecimal = $defaultValueDecimal;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRId
     */
    public function getDefaultValueId()
    {
        return $this->defaultValueId;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRId $defaultValueId
     * @return $this
     */
    public function setDefaultValueId($defaultValueId)
    {
        $this->defaultValueId = $defaultValueId;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant()
    {
        return $this->defaultValueInstant;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRInstant $defaultValueInstant
     * @return $this
     */
    public function setDefaultValueInstant($defaultValueInstant)
    {
        $this->defaultValueInstant = $defaultValueInstant;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRInteger
     */
    public function getDefaultValueInteger()
    {
        return $this->defaultValueInteger;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRInteger $defaultValueInteger
     * @return $this
     */
    public function setDefaultValueInteger($defaultValueInteger)
    {
        $this->defaultValueInteger = $defaultValueInteger;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown()
    {
        return $this->defaultValueMarkdown;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRMarkdown $defaultValueMarkdown
     * @return $this
     */
    public function setDefaultValueMarkdown($defaultValueMarkdown)
    {
        $this->defaultValueMarkdown = $defaultValueMarkdown;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIROid
     */
    public function getDefaultValueOid()
    {
        return $this->defaultValueOid;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIROid $defaultValueOid
     * @return $this
     */
    public function setDefaultValueOid($defaultValueOid)
    {
        $this->defaultValueOid = $defaultValueOid;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRPositiveInt
     */
    public function getDefaultValuePositiveInt()
    {
        return $this->defaultValuePositiveInt;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
     * @return $this
     */
    public function setDefaultValuePositiveInt($defaultValuePositiveInt)
    {
        $this->defaultValuePositiveInt = $defaultValuePositiveInt;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getDefaultValueString()
    {
        return $this->defaultValueString;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRString $defaultValueString
     * @return $this
     */
    public function setDefaultValueString($defaultValueString)
    {
        $this->defaultValueString = $defaultValueString;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRTime
     */
    public function getDefaultValueTime()
    {
        return $this->defaultValueTime;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRTime $defaultValueTime
     * @return $this
     */
    public function setDefaultValueTime($defaultValueTime)
    {
        $this->defaultValueTime = $defaultValueTime;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRUnsignedInt
     */
    public function getDefaultValueUnsignedInt()
    {
        return $this->defaultValueUnsignedInt;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
     * @return $this
     */
    public function setDefaultValueUnsignedInt($defaultValueUnsignedInt)
    {
        $this->defaultValueUnsignedInt = $defaultValueUnsignedInt;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRUri
     */
    public function getDefaultValueUri()
    {
        return $this->defaultValueUri;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRUri $defaultValueUri
     * @return $this
     */
    public function setDefaultValueUri($defaultValueUri)
    {
        $this->defaultValueUri = $defaultValueUri;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRAddress
     */
    public function getDefaultValueAddress()
    {
        return $this->defaultValueAddress;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRAddress $defaultValueAddress
     * @return $this
     */
    public function setDefaultValueAddress($defaultValueAddress)
    {
        $this->defaultValueAddress = $defaultValueAddress;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDefaultValueAge()
    {
        return $this->defaultValueAge;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRAge $defaultValueAge
     * @return $this
     */
    public function setDefaultValueAge($defaultValueAge)
    {
        $this->defaultValueAge = $defaultValueAge;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRAnnotation
     */
    public function getDefaultValueAnnotation()
    {
        return $this->defaultValueAnnotation;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRAnnotation $defaultValueAnnotation
     * @return $this
     */
    public function setDefaultValueAnnotation($defaultValueAnnotation)
    {
        $this->defaultValueAnnotation = $defaultValueAnnotation;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRAttachment
     */
    public function getDefaultValueAttachment()
    {
        return $this->defaultValueAttachment;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRAttachment $defaultValueAttachment
     * @return $this
     */
    public function setDefaultValueAttachment($defaultValueAttachment)
    {
        $this->defaultValueAttachment = $defaultValueAttachment;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getDefaultValueCodeableConcept()
    {
        return $this->defaultValueCodeableConcept;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
     * @return $this
     */
    public function setDefaultValueCodeableConcept($defaultValueCodeableConcept)
    {
        $this->defaultValueCodeableConcept = $defaultValueCodeableConcept;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRCoding
     */
    public function getDefaultValueCoding()
    {
        return $this->defaultValueCoding;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRCoding $defaultValueCoding
     * @return $this
     */
    public function setDefaultValueCoding($defaultValueCoding)
    {
        $this->defaultValueCoding = $defaultValueCoding;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRContactPoint
     */
    public function getDefaultValueContactPoint()
    {
        return $this->defaultValueContactPoint;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRContactPoint $defaultValueContactPoint
     * @return $this
     */
    public function setDefaultValueContactPoint($defaultValueContactPoint)
    {
        $this->defaultValueContactPoint = $defaultValueContactPoint;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getDefaultValueCount()
    {
        return $this->defaultValueCount;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRCount $defaultValueCount
     * @return $this
     */
    public function setDefaultValueCount($defaultValueCount)
    {
        $this->defaultValueCount = $defaultValueCount;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getDefaultValueDistance()
    {
        return $this->defaultValueDistance;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRDistance $defaultValueDistance
     * @return $this
     */
    public function setDefaultValueDistance($defaultValueDistance)
    {
        $this->defaultValueDistance = $defaultValueDistance;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDefaultValueDuration()
    {
        return $this->defaultValueDuration;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRDuration $defaultValueDuration
     * @return $this
     */
    public function setDefaultValueDuration($defaultValueDuration)
    {
        $this->defaultValueDuration = $defaultValueDuration;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRHumanName
     */
    public function getDefaultValueHumanName()
    {
        return $this->defaultValueHumanName;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRHumanName $defaultValueHumanName
     * @return $this
     */
    public function setDefaultValueHumanName($defaultValueHumanName)
    {
        $this->defaultValueHumanName = $defaultValueHumanName;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier()
    {
        return $this->defaultValueIdentifier;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $defaultValueIdentifier
     * @return $this
     */
    public function setDefaultValueIdentifier($defaultValueIdentifier)
    {
        $this->defaultValueIdentifier = $defaultValueIdentifier;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getDefaultValueMoney()
    {
        return $this->defaultValueMoney;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRMoney $defaultValueMoney
     * @return $this
     */
    public function setDefaultValueMoney($defaultValueMoney)
    {
        $this->defaultValueMoney = $defaultValueMoney;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public function getDefaultValuePeriod()
    {
        return $this->defaultValuePeriod;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRPeriod $defaultValuePeriod
     * @return $this
     */
    public function setDefaultValuePeriod($defaultValuePeriod)
    {
        $this->defaultValuePeriod = $defaultValuePeriod;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity
     */
    public function getDefaultValueQuantity()
    {
        return $this->defaultValueQuantity;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity $defaultValueQuantity
     * @return $this
     */
    public function setDefaultValueQuantity($defaultValueQuantity)
    {
        $this->defaultValueQuantity = $defaultValueQuantity;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRRange
     */
    public function getDefaultValueRange()
    {
        return $this->defaultValueRange;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRRange $defaultValueRange
     * @return $this
     */
    public function setDefaultValueRange($defaultValueRange)
    {
        $this->defaultValueRange = $defaultValueRange;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRRatio
     */
    public function getDefaultValueRatio()
    {
        return $this->defaultValueRatio;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRRatio $defaultValueRatio
     * @return $this
     */
    public function setDefaultValueRatio($defaultValueRatio)
    {
        $this->defaultValueRatio = $defaultValueRatio;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getDefaultValueReference()
    {
        return $this->defaultValueReference;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRReference $defaultValueReference
     * @return $this
     */
    public function setDefaultValueReference($defaultValueReference)
    {
        $this->defaultValueReference = $defaultValueReference;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRSampledData
     */
    public function getDefaultValueSampledData()
    {
        return $this->defaultValueSampledData;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRSampledData $defaultValueSampledData
     * @return $this
     */
    public function setDefaultValueSampledData($defaultValueSampledData)
    {
        $this->defaultValueSampledData = $defaultValueSampledData;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature()
    {
        return $this->defaultValueSignature;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRSignature $defaultValueSignature
     * @return $this
     */
    public function setDefaultValueSignature($defaultValueSignature)
    {
        $this->defaultValueSignature = $defaultValueSignature;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRTiming
     */
    public function getDefaultValueTiming()
    {
        return $this->defaultValueTiming;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRTiming $defaultValueTiming
     * @return $this
     */
    public function setDefaultValueTiming($defaultValueTiming)
    {
        $this->defaultValueTiming = $defaultValueTiming;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRMeta
     */
    public function getDefaultValueMeta()
    {
        return $this->defaultValueMeta;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRMeta $defaultValueMeta
     * @return $this
     */
    public function setDefaultValueMeta($defaultValueMeta)
    {
        $this->defaultValueMeta = $defaultValueMeta;
        return $this;
    }

    /**
     * Optional field for this source.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Optional field for this source.
     * @param \Fhir\V_301\FHIRElement\FHIRString $element
     * @return $this
     */
    public function setElement($element)
    {
        $this->element = $element;
        return $this;
    }

    /**
     * How to handle the list mode for this element.
     * @return \Fhir\V_301\FHIRElement\FHIRStructureMapSourceListMode
     */
    public function getListMode()
    {
        return $this->listMode;
    }

    /**
     * How to handle the list mode for this element.
     * @param \Fhir\V_301\FHIRElement\FHIRStructureMapSourceListMode $listMode
     * @return $this
     */
    public function setListMode($listMode)
    {
        $this->listMode = $listMode;
        return $this;
    }

    /**
     * Named context for field, if a field is specified.
     * @return \Fhir\V_301\FHIRElement\FHIRId
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Named context for field, if a field is specified.
     * @param \Fhir\V_301\FHIRElement\FHIRId $variable
     * @return $this
     */
    public function setVariable($variable)
    {
        $this->variable = $variable;
        return $this;
    }

    /**
     * FHIRPath expression  - must be true or the rule does not apply.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * FHIRPath expression  - must be true or the rule does not apply.
     * @param \Fhir\V_301\FHIRElement\FHIRString $condition
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * FHIRPath expression  - must be true or the mapping engine throws an error instead of completing.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getCheck()
    {
        return $this->check;
    }

    /**
     * FHIRPath expression  - must be true or the mapping engine throws an error instead of completing.
     * @param \Fhir\V_301\FHIRElement\FHIRString $check
     * @return $this
     */
    public function setCheck($check)
    {
        $this->check = $check;
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
        if (null !== $this->context) $json['context'] = $this->context;
        if (null !== $this->min) $json['min'] = $this->min;
        if (null !== $this->max) $json['max'] = $this->max;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->defaultValueBase64Binary) $json['defaultValueBase64Binary'] = $this->defaultValueBase64Binary;
        if (null !== $this->defaultValueBoolean) $json['defaultValueBoolean'] = $this->defaultValueBoolean;
        if (null !== $this->defaultValueCode) $json['defaultValueCode'] = $this->defaultValueCode;
        if (null !== $this->defaultValueDate) $json['defaultValueDate'] = $this->defaultValueDate;
        if (null !== $this->defaultValueDateTime) $json['defaultValueDateTime'] = $this->defaultValueDateTime;
        if (null !== $this->defaultValueDecimal) $json['defaultValueDecimal'] = $this->defaultValueDecimal;
        if (null !== $this->defaultValueId) $json['defaultValueId'] = $this->defaultValueId;
        if (null !== $this->defaultValueInstant) $json['defaultValueInstant'] = $this->defaultValueInstant;
        if (null !== $this->defaultValueInteger) $json['defaultValueInteger'] = $this->defaultValueInteger;
        if (null !== $this->defaultValueMarkdown) $json['defaultValueMarkdown'] = $this->defaultValueMarkdown;
        if (null !== $this->defaultValueOid) $json['defaultValueOid'] = $this->defaultValueOid;
        if (null !== $this->defaultValuePositiveInt) $json['defaultValuePositiveInt'] = $this->defaultValuePositiveInt;
        if (null !== $this->defaultValueString) $json['defaultValueString'] = $this->defaultValueString;
        if (null !== $this->defaultValueTime) $json['defaultValueTime'] = $this->defaultValueTime;
        if (null !== $this->defaultValueUnsignedInt) $json['defaultValueUnsignedInt'] = $this->defaultValueUnsignedInt;
        if (null !== $this->defaultValueUri) $json['defaultValueUri'] = $this->defaultValueUri;
        if (null !== $this->defaultValueAddress) $json['defaultValueAddress'] = $this->defaultValueAddress;
        if (null !== $this->defaultValueAge) $json['defaultValueAge'] = $this->defaultValueAge;
        if (null !== $this->defaultValueAnnotation) $json['defaultValueAnnotation'] = $this->defaultValueAnnotation;
        if (null !== $this->defaultValueAttachment) $json['defaultValueAttachment'] = $this->defaultValueAttachment;
        if (null !== $this->defaultValueCodeableConcept) $json['defaultValueCodeableConcept'] = $this->defaultValueCodeableConcept;
        if (null !== $this->defaultValueCoding) $json['defaultValueCoding'] = $this->defaultValueCoding;
        if (null !== $this->defaultValueContactPoint) $json['defaultValueContactPoint'] = $this->defaultValueContactPoint;
        if (null !== $this->defaultValueCount) $json['defaultValueCount'] = $this->defaultValueCount;
        if (null !== $this->defaultValueDistance) $json['defaultValueDistance'] = $this->defaultValueDistance;
        if (null !== $this->defaultValueDuration) $json['defaultValueDuration'] = $this->defaultValueDuration;
        if (null !== $this->defaultValueHumanName) $json['defaultValueHumanName'] = $this->defaultValueHumanName;
        if (null !== $this->defaultValueIdentifier) $json['defaultValueIdentifier'] = $this->defaultValueIdentifier;
        if (null !== $this->defaultValueMoney) $json['defaultValueMoney'] = $this->defaultValueMoney;
        if (null !== $this->defaultValuePeriod) $json['defaultValuePeriod'] = $this->defaultValuePeriod;
        if (null !== $this->defaultValueQuantity) $json['defaultValueQuantity'] = $this->defaultValueQuantity;
        if (null !== $this->defaultValueRange) $json['defaultValueRange'] = $this->defaultValueRange;
        if (null !== $this->defaultValueRatio) $json['defaultValueRatio'] = $this->defaultValueRatio;
        if (null !== $this->defaultValueReference) $json['defaultValueReference'] = $this->defaultValueReference;
        if (null !== $this->defaultValueSampledData) $json['defaultValueSampledData'] = $this->defaultValueSampledData;
        if (null !== $this->defaultValueSignature) $json['defaultValueSignature'] = $this->defaultValueSignature;
        if (null !== $this->defaultValueTiming) $json['defaultValueTiming'] = $this->defaultValueTiming;
        if (null !== $this->defaultValueMeta) $json['defaultValueMeta'] = $this->defaultValueMeta;
        if (null !== $this->element) $json['element'] = $this->element;
        if (null !== $this->listMode) $json['listMode'] = $this->listMode;
        if (null !== $this->variable) $json['variable'] = $this->variable;
        if (null !== $this->condition) $json['condition'] = $this->condition;
        if (null !== $this->check) $json['check'] = $this->check;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<StructureMapSource xmlns="http://hl7.org/fhir"></StructureMapSource>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->context) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (null !== $this->min) $this->min->xmlSerialize(true, $sxe->addChild('min'));
        if (null !== $this->max) $this->max->xmlSerialize(true, $sxe->addChild('max'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->defaultValueBase64Binary) $this->defaultValueBase64Binary->xmlSerialize(true, $sxe->addChild('defaultValueBase64Binary'));
        if (null !== $this->defaultValueBoolean) $this->defaultValueBoolean->xmlSerialize(true, $sxe->addChild('defaultValueBoolean'));
        if (null !== $this->defaultValueCode) $this->defaultValueCode->xmlSerialize(true, $sxe->addChild('defaultValueCode'));
        if (null !== $this->defaultValueDate) $this->defaultValueDate->xmlSerialize(true, $sxe->addChild('defaultValueDate'));
        if (null !== $this->defaultValueDateTime) $this->defaultValueDateTime->xmlSerialize(true, $sxe->addChild('defaultValueDateTime'));
        if (null !== $this->defaultValueDecimal) $this->defaultValueDecimal->xmlSerialize(true, $sxe->addChild('defaultValueDecimal'));
        if (null !== $this->defaultValueId) $this->defaultValueId->xmlSerialize(true, $sxe->addChild('defaultValueId'));
        if (null !== $this->defaultValueInstant) $this->defaultValueInstant->xmlSerialize(true, $sxe->addChild('defaultValueInstant'));
        if (null !== $this->defaultValueInteger) $this->defaultValueInteger->xmlSerialize(true, $sxe->addChild('defaultValueInteger'));
        if (null !== $this->defaultValueMarkdown) $this->defaultValueMarkdown->xmlSerialize(true, $sxe->addChild('defaultValueMarkdown'));
        if (null !== $this->defaultValueOid) $this->defaultValueOid->xmlSerialize(true, $sxe->addChild('defaultValueOid'));
        if (null !== $this->defaultValuePositiveInt) $this->defaultValuePositiveInt->xmlSerialize(true, $sxe->addChild('defaultValuePositiveInt'));
        if (null !== $this->defaultValueString) $this->defaultValueString->xmlSerialize(true, $sxe->addChild('defaultValueString'));
        if (null !== $this->defaultValueTime) $this->defaultValueTime->xmlSerialize(true, $sxe->addChild('defaultValueTime'));
        if (null !== $this->defaultValueUnsignedInt) $this->defaultValueUnsignedInt->xmlSerialize(true, $sxe->addChild('defaultValueUnsignedInt'));
        if (null !== $this->defaultValueUri) $this->defaultValueUri->xmlSerialize(true, $sxe->addChild('defaultValueUri'));
        if (null !== $this->defaultValueAddress) $this->defaultValueAddress->xmlSerialize(true, $sxe->addChild('defaultValueAddress'));
        if (null !== $this->defaultValueAge) $this->defaultValueAge->xmlSerialize(true, $sxe->addChild('defaultValueAge'));
        if (null !== $this->defaultValueAnnotation) $this->defaultValueAnnotation->xmlSerialize(true, $sxe->addChild('defaultValueAnnotation'));
        if (null !== $this->defaultValueAttachment) $this->defaultValueAttachment->xmlSerialize(true, $sxe->addChild('defaultValueAttachment'));
        if (null !== $this->defaultValueCodeableConcept) $this->defaultValueCodeableConcept->xmlSerialize(true, $sxe->addChild('defaultValueCodeableConcept'));
        if (null !== $this->defaultValueCoding) $this->defaultValueCoding->xmlSerialize(true, $sxe->addChild('defaultValueCoding'));
        if (null !== $this->defaultValueContactPoint) $this->defaultValueContactPoint->xmlSerialize(true, $sxe->addChild('defaultValueContactPoint'));
        if (null !== $this->defaultValueCount) $this->defaultValueCount->xmlSerialize(true, $sxe->addChild('defaultValueCount'));
        if (null !== $this->defaultValueDistance) $this->defaultValueDistance->xmlSerialize(true, $sxe->addChild('defaultValueDistance'));
        if (null !== $this->defaultValueDuration) $this->defaultValueDuration->xmlSerialize(true, $sxe->addChild('defaultValueDuration'));
        if (null !== $this->defaultValueHumanName) $this->defaultValueHumanName->xmlSerialize(true, $sxe->addChild('defaultValueHumanName'));
        if (null !== $this->defaultValueIdentifier) $this->defaultValueIdentifier->xmlSerialize(true, $sxe->addChild('defaultValueIdentifier'));
        if (null !== $this->defaultValueMoney) $this->defaultValueMoney->xmlSerialize(true, $sxe->addChild('defaultValueMoney'));
        if (null !== $this->defaultValuePeriod) $this->defaultValuePeriod->xmlSerialize(true, $sxe->addChild('defaultValuePeriod'));
        if (null !== $this->defaultValueQuantity) $this->defaultValueQuantity->xmlSerialize(true, $sxe->addChild('defaultValueQuantity'));
        if (null !== $this->defaultValueRange) $this->defaultValueRange->xmlSerialize(true, $sxe->addChild('defaultValueRange'));
        if (null !== $this->defaultValueRatio) $this->defaultValueRatio->xmlSerialize(true, $sxe->addChild('defaultValueRatio'));
        if (null !== $this->defaultValueReference) $this->defaultValueReference->xmlSerialize(true, $sxe->addChild('defaultValueReference'));
        if (null !== $this->defaultValueSampledData) $this->defaultValueSampledData->xmlSerialize(true, $sxe->addChild('defaultValueSampledData'));
        if (null !== $this->defaultValueSignature) $this->defaultValueSignature->xmlSerialize(true, $sxe->addChild('defaultValueSignature'));
        if (null !== $this->defaultValueTiming) $this->defaultValueTiming->xmlSerialize(true, $sxe->addChild('defaultValueTiming'));
        if (null !== $this->defaultValueMeta) $this->defaultValueMeta->xmlSerialize(true, $sxe->addChild('defaultValueMeta'));
        if (null !== $this->element) $this->element->xmlSerialize(true, $sxe->addChild('element'));
        if (null !== $this->listMode) $this->listMode->xmlSerialize(true, $sxe->addChild('listMode'));
        if (null !== $this->variable) $this->variable->xmlSerialize(true, $sxe->addChild('variable'));
        if (null !== $this->condition) $this->condition->xmlSerialize(true, $sxe->addChild('condition'));
        if (null !== $this->check) $this->check->xmlSerialize(true, $sxe->addChild('check'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}