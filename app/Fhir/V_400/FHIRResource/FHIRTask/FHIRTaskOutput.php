<?php namespace Fhir\V_400\FHIRResource\FHIRTask;

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
 * A task to be performed.
 */
class FHIRTaskOutput extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The name of the Output parameter.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRBase64Binary
     */
    public $valueBase64Binary = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCanonical
     */
    public $valueCanonical = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCode
     */
    public $valueCode = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRDate
     */
    public $valueDate = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRDecimal
     */
    public $valueDecimal = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRId
     */
    public $valueId = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRInstant
     */
    public $valueInstant = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRInteger
     */
    public $valueInteger = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public $valueMarkdown = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIROid
     */
    public $valueOid = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public $valuePositiveInt = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRTime
     */
    public $valueTime = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRUnsignedInt
     */
    public $valueUnsignedInt = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRUri
     */
    public $valueUri = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRUrl
     */
    public $valueUrl = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRUuid
     */
    public $valueUuid = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRAddress
     */
    public $valueAddress = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $valueAge = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRAnnotation
     */
    public $valueAnnotation = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $valueCodeableConcept = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCoding
     */
    public $valueCoding = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRContactPoint
     */
    public $valueContactPoint = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRCount
     */
    public $valueCount = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public $valueDistance = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $valueDuration = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRHumanName
     */
    public $valueHumanName = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public $valueIdentifier = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public $valueMoney = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRRange
     */
    public $valueRange = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRRatio
     */
    public $valueRatio = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $valueReference = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRSampledData
     */
    public $valueSampledData = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRSignature
     */
    public $valueSignature = null;

    /**
     * @var \Fhir\V_400\FHIRResource\FHIRTiming
     */
    public $valueTiming = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRContactDetail
     */
    public $valueContactDetail = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRContributor
     */
    public $valueContributor = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRDataRequirement
     */
    public $valueDataRequirement = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRExpression
     */
    public $valueExpression = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRParameterDefinition
     */
    public $valueParameterDefinition = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRRelatedArtifact
     */
    public $valueRelatedArtifact = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRTriggerDefinition
     */
    public $valueTriggerDefinition = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRUsageContext
     */
    public $valueUsageContext = null;

    /**
     * @var \Fhir\V_400\FHIRResource\FHIRDosage
     */
    public $valueDosage = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Task.Output';

    /**
     * The name of the Output parameter.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The name of the Output parameter.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @return $this
     */
    public function setValueBase64Binary($valueBase64Binary)
    {
        $this->valueBase64Binary = $valueBase64Binary;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $valueBoolean
     * @return $this
     */
    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCanonical
     */
    public function getValueCanonical()
    {
        return $this->valueCanonical;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCanonical $valueCanonical
     * @return $this
     */
    public function setValueCanonical($valueCanonical)
    {
        $this->valueCanonical = $valueCanonical;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCode
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCode $valueCode
     * @return $this
     */
    public function setValueCode($valueCode)
    {
        $this->valueCode = $valueCode;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRDate
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRDate $valueDate
     * @return $this
     */
    public function setValueDate($valueDate)
    {
        $this->valueDate = $valueDate;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $valueDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRDecimal $valueDecimal
     * @return $this
     */
    public function setValueDecimal($valueDecimal)
    {
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRId
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRId $valueId
     * @return $this
     */
    public function setValueId($valueId)
    {
        $this->valueId = $valueId;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRInstant
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRInstant $valueInstant
     * @return $this
     */
    public function setValueInstant($valueInstant)
    {
        $this->valueInstant = $valueInstant;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRInteger $valueInteger
     * @return $this
     */
    public function setValueInteger($valueInteger)
    {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public function getValueMarkdown()
    {
        return $this->valueMarkdown;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRMarkdown $valueMarkdown
     * @return $this
     */
    public function setValueMarkdown($valueMarkdown)
    {
        $this->valueMarkdown = $valueMarkdown;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIROid
     */
    public function getValueOid()
    {
        return $this->valueOid;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIROid $valueOid
     * @return $this
     */
    public function setValueOid($valueOid)
    {
        $this->valueOid = $valueOid;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public function getValuePositiveInt()
    {
        return $this->valuePositiveInt;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $valuePositiveInt
     * @return $this
     */
    public function setValuePositiveInt($valuePositiveInt)
    {
        $this->valuePositiveInt = $valuePositiveInt;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRString $valueString
     * @return $this
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRTime $valueTime
     * @return $this
     */
    public function setValueTime($valueTime)
    {
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRUnsignedInt
     */
    public function getValueUnsignedInt()
    {
        return $this->valueUnsignedInt;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRUnsignedInt $valueUnsignedInt
     * @return $this
     */
    public function setValueUnsignedInt($valueUnsignedInt)
    {
        $this->valueUnsignedInt = $valueUnsignedInt;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRUri
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRUri $valueUri
     * @return $this
     */
    public function setValueUri($valueUri)
    {
        $this->valueUri = $valueUri;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRUrl
     */
    public function getValueUrl()
    {
        return $this->valueUrl;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRUrl $valueUrl
     * @return $this
     */
    public function setValueUrl($valueUrl)
    {
        $this->valueUrl = $valueUrl;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRUuid
     */
    public function getValueUuid()
    {
        return $this->valueUuid;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRUuid $valueUuid
     * @return $this
     */
    public function setValueUuid($valueUuid)
    {
        $this->valueUuid = $valueUuid;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRAddress
     */
    public function getValueAddress()
    {
        return $this->valueAddress;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRAddress $valueAddress
     * @return $this
     */
    public function setValueAddress($valueAddress)
    {
        $this->valueAddress = $valueAddress;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getValueAge()
    {
        return $this->valueAge;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRAge $valueAge
     * @return $this
     */
    public function setValueAge($valueAge)
    {
        $this->valueAge = $valueAge;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRAnnotation
     */
    public function getValueAnnotation()
    {
        return $this->valueAnnotation;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRAnnotation $valueAnnotation
     * @return $this
     */
    public function setValueAnnotation($valueAnnotation)
    {
        $this->valueAnnotation = $valueAnnotation;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRAttachment $valueAttachment
     * @return $this
     */
    public function setValueAttachment($valueAttachment)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return $this
     */
    public function setValueCodeableConcept($valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCoding $valueCoding
     * @return $this
     */
    public function setValueCoding($valueCoding)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRContactPoint
     */
    public function getValueContactPoint()
    {
        return $this->valueContactPoint;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRContactPoint $valueContactPoint
     * @return $this
     */
    public function setValueContactPoint($valueContactPoint)
    {
        $this->valueContactPoint = $valueContactPoint;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getValueCount()
    {
        return $this->valueCount;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRCount $valueCount
     * @return $this
     */
    public function setValueCount($valueCount)
    {
        $this->valueCount = $valueCount;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getValueDistance()
    {
        return $this->valueDistance;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDistance $valueDistance
     * @return $this
     */
    public function setValueDistance($valueDistance)
    {
        $this->valueDistance = $valueDistance;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getValueDuration()
    {
        return $this->valueDuration;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration $valueDuration
     * @return $this
     */
    public function setValueDuration($valueDuration)
    {
        $this->valueDuration = $valueDuration;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRHumanName
     */
    public function getValueHumanName()
    {
        return $this->valueHumanName;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRHumanName $valueHumanName
     * @return $this
     */
    public function setValueHumanName($valueHumanName)
    {
        $this->valueHumanName = $valueHumanName;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public function getValueIdentifier()
    {
        return $this->valueIdentifier;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $valueIdentifier
     * @return $this
     */
    public function setValueIdentifier($valueIdentifier)
    {
        $this->valueIdentifier = $valueIdentifier;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public function getValueMoney()
    {
        return $this->valueMoney;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRMoney $valueMoney
     * @return $this
     */
    public function setValueMoney($valueMoney)
    {
        $this->valueMoney = $valueMoney;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $valuePeriod
     * @return $this
     */
    public function setValuePeriod($valuePeriod)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity $valueQuantity
     * @return $this
     */
    public function setValueQuantity($valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRRange $valueRange
     * @return $this
     */
    public function setValueRange($valueRange)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRRatio $valueRatio
     * @return $this
     */
    public function setValueRatio($valueRatio)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRReference $valueReference
     * @return $this
     */
    public function setValueReference($valueReference)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRSampledData $valueSampledData
     * @return $this
     */
    public function setValueSampledData($valueSampledData)
    {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRSignature
     */
    public function getValueSignature()
    {
        return $this->valueSignature;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRSignature $valueSignature
     * @return $this
     */
    public function setValueSignature($valueSignature)
    {
        $this->valueSignature = $valueSignature;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRResource\FHIRTiming
     */
    public function getValueTiming()
    {
        return $this->valueTiming;
    }

    /**
     * @param \Fhir\V_400\FHIRResource\FHIRTiming $valueTiming
     * @return $this
     */
    public function setValueTiming($valueTiming)
    {
        $this->valueTiming = $valueTiming;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRContactDetail
     */
    public function getValueContactDetail()
    {
        return $this->valueContactDetail;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRContactDetail $valueContactDetail
     * @return $this
     */
    public function setValueContactDetail($valueContactDetail)
    {
        $this->valueContactDetail = $valueContactDetail;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRContributor
     */
    public function getValueContributor()
    {
        return $this->valueContributor;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRContributor $valueContributor
     * @return $this
     */
    public function setValueContributor($valueContributor)
    {
        $this->valueContributor = $valueContributor;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRDataRequirement
     */
    public function getValueDataRequirement()
    {
        return $this->valueDataRequirement;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRDataRequirement $valueDataRequirement
     * @return $this
     */
    public function setValueDataRequirement($valueDataRequirement)
    {
        $this->valueDataRequirement = $valueDataRequirement;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRExpression
     */
    public function getValueExpression()
    {
        return $this->valueExpression;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRExpression $valueExpression
     * @return $this
     */
    public function setValueExpression($valueExpression)
    {
        $this->valueExpression = $valueExpression;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRParameterDefinition
     */
    public function getValueParameterDefinition()
    {
        return $this->valueParameterDefinition;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRParameterDefinition $valueParameterDefinition
     * @return $this
     */
    public function setValueParameterDefinition($valueParameterDefinition)
    {
        $this->valueParameterDefinition = $valueParameterDefinition;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRRelatedArtifact
     */
    public function getValueRelatedArtifact()
    {
        return $this->valueRelatedArtifact;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRRelatedArtifact $valueRelatedArtifact
     * @return $this
     */
    public function setValueRelatedArtifact($valueRelatedArtifact)
    {
        $this->valueRelatedArtifact = $valueRelatedArtifact;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRTriggerDefinition
     */
    public function getValueTriggerDefinition()
    {
        return $this->valueTriggerDefinition;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRTriggerDefinition $valueTriggerDefinition
     * @return $this
     */
    public function setValueTriggerDefinition($valueTriggerDefinition)
    {
        $this->valueTriggerDefinition = $valueTriggerDefinition;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRUsageContext
     */
    public function getValueUsageContext()
    {
        return $this->valueUsageContext;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRUsageContext $valueUsageContext
     * @return $this
     */
    public function setValueUsageContext($valueUsageContext)
    {
        $this->valueUsageContext = $valueUsageContext;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRResource\FHIRDosage
     */
    public function getValueDosage()
    {
        return $this->valueDosage;
    }

    /**
     * @param \Fhir\V_400\FHIRResource\FHIRDosage $valueDosage
     * @return $this
     */
    public function setValueDosage($valueDosage)
    {
        $this->valueDosage = $valueDosage;
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
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->valueBase64Binary) $json['valueBase64Binary'] = $this->valueBase64Binary;
        if (null !== $this->valueBoolean) $json['valueBoolean'] = $this->valueBoolean;
        if (null !== $this->valueCanonical) $json['valueCanonical'] = $this->valueCanonical;
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
        if (null !== $this->valueUrl) $json['valueUrl'] = $this->valueUrl;
        if (null !== $this->valueUuid) $json['valueUuid'] = $this->valueUuid;
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
        if (null !== $this->valueContactDetail) $json['valueContactDetail'] = $this->valueContactDetail;
        if (null !== $this->valueContributor) $json['valueContributor'] = $this->valueContributor;
        if (null !== $this->valueDataRequirement) $json['valueDataRequirement'] = $this->valueDataRequirement;
        if (null !== $this->valueExpression) $json['valueExpression'] = $this->valueExpression;
        if (null !== $this->valueParameterDefinition) $json['valueParameterDefinition'] = $this->valueParameterDefinition;
        if (null !== $this->valueRelatedArtifact) $json['valueRelatedArtifact'] = $this->valueRelatedArtifact;
        if (null !== $this->valueTriggerDefinition) $json['valueTriggerDefinition'] = $this->valueTriggerDefinition;
        if (null !== $this->valueUsageContext) $json['valueUsageContext'] = $this->valueUsageContext;
        if (null !== $this->valueDosage) $json['valueDosage'] = $this->valueDosage;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<TaskOutput xmlns="http://hl7.org/fhir"></TaskOutput>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->valueBase64Binary) $this->valueBase64Binary->xmlSerialize(true, $sxe->addChild('valueBase64Binary'));
        if (null !== $this->valueBoolean) $this->valueBoolean->xmlSerialize(true, $sxe->addChild('valueBoolean'));
        if (null !== $this->valueCanonical) $this->valueCanonical->xmlSerialize(true, $sxe->addChild('valueCanonical'));
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
        if (null !== $this->valueUrl) $this->valueUrl->xmlSerialize(true, $sxe->addChild('valueUrl'));
        if (null !== $this->valueUuid) $this->valueUuid->xmlSerialize(true, $sxe->addChild('valueUuid'));
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
        if (null !== $this->valueContactDetail) $this->valueContactDetail->xmlSerialize(true, $sxe->addChild('valueContactDetail'));
        if (null !== $this->valueContributor) $this->valueContributor->xmlSerialize(true, $sxe->addChild('valueContributor'));
        if (null !== $this->valueDataRequirement) $this->valueDataRequirement->xmlSerialize(true, $sxe->addChild('valueDataRequirement'));
        if (null !== $this->valueExpression) $this->valueExpression->xmlSerialize(true, $sxe->addChild('valueExpression'));
        if (null !== $this->valueParameterDefinition) $this->valueParameterDefinition->xmlSerialize(true, $sxe->addChild('valueParameterDefinition'));
        if (null !== $this->valueRelatedArtifact) $this->valueRelatedArtifact->xmlSerialize(true, $sxe->addChild('valueRelatedArtifact'));
        if (null !== $this->valueTriggerDefinition) $this->valueTriggerDefinition->xmlSerialize(true, $sxe->addChild('valueTriggerDefinition'));
        if (null !== $this->valueUsageContext) $this->valueUsageContext->xmlSerialize(true, $sxe->addChild('valueUsageContext'));
        if (null !== $this->valueDosage) $this->valueDosage->xmlSerialize(true, $sxe->addChild('valueDosage'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}