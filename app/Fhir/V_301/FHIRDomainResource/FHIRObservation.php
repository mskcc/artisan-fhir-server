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
 * Measurements and simple assertions made about a patient, device or other subject.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRObservation extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique identifier assigned to this observation.
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $basedOn = array();

    /**
     * The status of the result value.
     * @var \Fhir\V_301\FHIRElement\FHIRObservationStatus
     */
    public $status = null;

    /**
     * A code that classifies the general type of observation being made.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = array();

    /**
     * Describes what was observed. Sometimes this is called the observation "name".
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The patient, or group of patients, location, or device whose characteristics (direct or indirect) are described by the observation and into whose record the observation is placed.  Comments: Indirect characteristics may be those of a specimen, fetus, donor,  other observer (for example a relative or EMT), or any observation made about the subject.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) during which this observation is made.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $effectiveDateTime = null;

    /**
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * The date and time this observation was made available to providers, typically after the results have been reviewed and verified.
     * @var \Fhir\V_301\FHIRElement\FHIRInstant
     */
    public $issued = null;

    /**
     * Who was responsible for asserting the observed value as "true".
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $performer = array();

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $valueCodeableConcept = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRRange
     */
    public $valueRange = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRRatio
     */
    public $valueRatio = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRSampledData
     */
    public $valueSampledData = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRTime
     */
    public $valueTime = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $dataAbsentReason = null;

    /**
     * The assessment made based on the result of the observation.  Intended as a simple compact code often placed adjacent to the result value in reports and flow sheets to signal the meaning/normalcy status of the result. Otherwise known as abnormal flag.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $interpretation = null;

    /**
     * May include statements about significant, unexpected or unreliable values, or information about the source of the value where this may be relevant to the interpretation of the result.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * Indicates the mechanism used to perform the observation.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * The specimen that was used when this observation was made.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $specimen = null;

    /**
     * The device used to generate the observation data.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @var \Fhir\V_301\FHIRResource\FHIRObservation\FHIRObservationReferenceRange[]
     */
    public $referenceRange = array();

    /**
     * A  reference to another resource (usually another Observation) whose relationship is defined by the relationship type code.
     * @var \Fhir\V_301\FHIRResource\FHIRObservation\FHIRObservationRelated[]
     */
    public $related = array();

    /**
     * Some observations have multiple component observations.  These component observations are expressed as separate code value pairs that share the same attributes.  Examples include systolic and diastolic component observations for blood pressure measurement and multiple component observations for genetics observations.
     * @var \Fhir\V_301\FHIRResource\FHIRObservation\FHIRObservationComponent[]
     */
    public $component = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Observation';

    /**
     * A unique identifier assigned to this observation.
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique identifier assigned to this observation.
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * The status of the result value.
     * @return \Fhir\V_301\FHIRElement\FHIRObservationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the result value.
     * @param \Fhir\V_301\FHIRElement\FHIRObservationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A code that classifies the general type of observation being made.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A code that classifies the general type of observation being made.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * Describes what was observed. Sometimes this is called the observation "name".
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Describes what was observed. Sometimes this is called the observation "name".
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * The patient, or group of patients, location, or device whose characteristics (direct or indirect) are described by the observation and into whose record the observation is placed.  Comments: Indirect characteristics may be those of a specimen, fetus, donor,  other observer (for example a relative or EMT), or any observation made about the subject.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The patient, or group of patients, location, or device whose characteristics (direct or indirect) are described by the observation and into whose record the observation is placed.  Comments: Indirect characteristics may be those of a specimen, fetus, donor,  other observer (for example a relative or EMT), or any observation made about the subject.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) during which this observation is made.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) during which this observation is made.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime()
    {
        return $this->effectiveDateTime;
    }

    /**
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $effectiveDateTime
     * @return $this
     */
    public function setEffectiveDateTime($effectiveDateTime)
    {
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRPeriod $effectivePeriod
     * @return $this
     */
    public function setEffectivePeriod($effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * The date and time this observation was made available to providers, typically after the results have been reviewed and verified.
     * @return \Fhir\V_301\FHIRElement\FHIRInstant
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * The date and time this observation was made available to providers, typically after the results have been reviewed and verified.
     * @param \Fhir\V_301\FHIRElement\FHIRInstant $issued
     * @return $this
     */
    public function setIssued($issued)
    {
        $this->issued = $issued;
        return $this;
    }

    /**
     * Who was responsible for asserting the observed value as "true".
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Who was responsible for asserting the observed value as "true".
     * @param \Fhir\V_301\FHIRElement\FHIRReference $performer
     * @return $this
     */
    public function addPerformer($performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity $valueQuantity
     * @return $this
     */
    public function setValueQuantity($valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return $this
     */
    public function setValueCodeableConcept($valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRString $valueString
     * @return $this
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $valueBoolean
     * @return $this
     */
    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRRange $valueRange
     * @return $this
     */
    public function setValueRange($valueRange)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRRatio $valueRatio
     * @return $this
     */
    public function setValueRatio($valueRatio)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRSampledData $valueSampledData
     * @return $this
     */
    public function setValueSampledData($valueSampledData)
    {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRAttachment $valueAttachment
     * @return $this
     */
    public function setValueAttachment($valueAttachment)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRTime $valueTime
     * @return $this
     */
    public function setValueTime($valueTime)
    {
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $valueDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRPeriod $valuePeriod
     * @return $this
     */
    public function setValuePeriod($valuePeriod)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getDataAbsentReason()
    {
        return $this->dataAbsentReason;
    }

    /**
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $dataAbsentReason
     * @return $this
     */
    public function setDataAbsentReason($dataAbsentReason)
    {
        $this->dataAbsentReason = $dataAbsentReason;
        return $this;
    }

    /**
     * The assessment made based on the result of the observation.  Intended as a simple compact code often placed adjacent to the result value in reports and flow sheets to signal the meaning/normalcy status of the result. Otherwise known as abnormal flag.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getInterpretation()
    {
        return $this->interpretation;
    }

    /**
     * The assessment made based on the result of the observation.  Intended as a simple compact code often placed adjacent to the result value in reports and flow sheets to signal the meaning/normalcy status of the result. Otherwise known as abnormal flag.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $interpretation
     * @return $this
     */
    public function setInterpretation($interpretation)
    {
        $this->interpretation = $interpretation;
        return $this;
    }

    /**
     * May include statements about significant, unexpected or unreliable values, or information about the source of the value where this may be relevant to the interpretation of the result.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * May include statements about significant, unexpected or unreliable values, or information about the source of the value where this may be relevant to the interpretation of the result.
     * @param \Fhir\V_301\FHIRElement\FHIRString $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $bodySite
     * @return $this
     */
    public function setBodySite($bodySite)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Indicates the mechanism used to perform the observation.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Indicates the mechanism used to perform the observation.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * The specimen that was used when this observation was made.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * The specimen that was used when this observation was made.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $specimen
     * @return $this
     */
    public function setSpecimen($specimen)
    {
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * The device used to generate the observation data.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The device used to generate the observation data.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @return \Fhir\V_301\FHIRResource\FHIRObservation\FHIRObservationReferenceRange[]
     */
    public function getReferenceRange()
    {
        return $this->referenceRange;
    }

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @param \Fhir\V_301\FHIRResource\FHIRObservation\FHIRObservationReferenceRange $referenceRange
     * @return $this
     */
    public function addReferenceRange($referenceRange)
    {
        $this->referenceRange[] = $referenceRange;
        return $this;
    }

    /**
     * A  reference to another resource (usually another Observation) whose relationship is defined by the relationship type code.
     * @return \Fhir\V_301\FHIRResource\FHIRObservation\FHIRObservationRelated[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * A  reference to another resource (usually another Observation) whose relationship is defined by the relationship type code.
     * @param \Fhir\V_301\FHIRResource\FHIRObservation\FHIRObservationRelated $related
     * @return $this
     */
    public function addRelated($related)
    {
        $this->related[] = $related;
        return $this;
    }

    /**
     * Some observations have multiple component observations.  These component observations are expressed as separate code value pairs that share the same attributes.  Examples include systolic and diastolic component observations for blood pressure measurement and multiple component observations for genetics observations.
     * @return \Fhir\V_301\FHIRResource\FHIRObservation\FHIRObservationComponent[]
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Some observations have multiple component observations.  These component observations are expressed as separate code value pairs that share the same attributes.  Examples include systolic and diastolic component observations for blood pressure measurement and multiple component observations for genetics observations.
     * @param \Fhir\V_301\FHIRResource\FHIRObservation\FHIRObservationComponent $component
     * @return $this
     */
    public function addComponent($component)
    {
        $this->component[] = $component;
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
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (0 < count($this->basedOn)) {
            $json['basedOn'] = [];
            foreach($this->basedOn as $basedOn) {
                $json['basedOn'][] = $basedOn;
            }
        }
        if (null !== $this->status) $json['status'] = $this->status;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                $json['category'][] = $category;
            }
        }
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->context) $json['context'] = $this->context;
        if (null !== $this->effectiveDateTime) $json['effectiveDateTime'] = $this->effectiveDateTime;
        if (null !== $this->effectivePeriod) $json['effectivePeriod'] = $this->effectivePeriod;
        if (null !== $this->issued) $json['issued'] = $this->issued;
        if (0 < count($this->performer)) {
            $json['performer'] = [];
            foreach($this->performer as $performer) {
                $json['performer'][] = $performer;
            }
        }
        if (null !== $this->valueQuantity) $json['valueQuantity'] = $this->valueQuantity;
        if (null !== $this->valueCodeableConcept) $json['valueCodeableConcept'] = $this->valueCodeableConcept;
        if (null !== $this->valueString) $json['valueString'] = $this->valueString;
        if (null !== $this->valueBoolean) $json['valueBoolean'] = $this->valueBoolean;
        if (null !== $this->valueRange) $json['valueRange'] = $this->valueRange;
        if (null !== $this->valueRatio) $json['valueRatio'] = $this->valueRatio;
        if (null !== $this->valueSampledData) $json['valueSampledData'] = $this->valueSampledData;
        if (null !== $this->valueAttachment) $json['valueAttachment'] = $this->valueAttachment;
        if (null !== $this->valueTime) $json['valueTime'] = $this->valueTime;
        if (null !== $this->valueDateTime) $json['valueDateTime'] = $this->valueDateTime;
        if (null !== $this->valuePeriod) $json['valuePeriod'] = $this->valuePeriod;
        if (null !== $this->dataAbsentReason) $json['dataAbsentReason'] = $this->dataAbsentReason;
        if (null !== $this->interpretation) $json['interpretation'] = $this->interpretation;
        if (null !== $this->comment) $json['comment'] = $this->comment;
        if (null !== $this->bodySite) $json['bodySite'] = $this->bodySite;
        if (null !== $this->method) $json['method'] = $this->method;
        if (null !== $this->specimen) $json['specimen'] = $this->specimen;
        if (null !== $this->device) $json['device'] = $this->device;
        if (0 < count($this->referenceRange)) {
            $json['referenceRange'] = [];
            foreach($this->referenceRange as $referenceRange) {
                $json['referenceRange'][] = $referenceRange;
            }
        }
        if (0 < count($this->related)) {
            $json['related'] = [];
            foreach($this->related as $related) {
                $json['related'][] = $related;
            }
        }
        if (0 < count($this->component)) {
            $json['component'] = [];
            foreach($this->component as $component) {
                $json['component'][] = $component;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Observation xmlns="http://hl7.org/fhir"></Observation>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->basedOn)) {
            foreach($this->basedOn as $basedOn) {
                $basedOn->xmlSerialize(true, $sxe->addChild('basedOn'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->context) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (null !== $this->effectiveDateTime) $this->effectiveDateTime->xmlSerialize(true, $sxe->addChild('effectiveDateTime'));
        if (null !== $this->effectivePeriod) $this->effectivePeriod->xmlSerialize(true, $sxe->addChild('effectivePeriod'));
        if (null !== $this->issued) $this->issued->xmlSerialize(true, $sxe->addChild('issued'));
        if (0 < count($this->performer)) {
            foreach($this->performer as $performer) {
                $performer->xmlSerialize(true, $sxe->addChild('performer'));
            }
        }
        if (null !== $this->valueQuantity) $this->valueQuantity->xmlSerialize(true, $sxe->addChild('valueQuantity'));
        if (null !== $this->valueCodeableConcept) $this->valueCodeableConcept->xmlSerialize(true, $sxe->addChild('valueCodeableConcept'));
        if (null !== $this->valueString) $this->valueString->xmlSerialize(true, $sxe->addChild('valueString'));
        if (null !== $this->valueBoolean) $this->valueBoolean->xmlSerialize(true, $sxe->addChild('valueBoolean'));
        if (null !== $this->valueRange) $this->valueRange->xmlSerialize(true, $sxe->addChild('valueRange'));
        if (null !== $this->valueRatio) $this->valueRatio->xmlSerialize(true, $sxe->addChild('valueRatio'));
        if (null !== $this->valueSampledData) $this->valueSampledData->xmlSerialize(true, $sxe->addChild('valueSampledData'));
        if (null !== $this->valueAttachment) $this->valueAttachment->xmlSerialize(true, $sxe->addChild('valueAttachment'));
        if (null !== $this->valueTime) $this->valueTime->xmlSerialize(true, $sxe->addChild('valueTime'));
        if (null !== $this->valueDateTime) $this->valueDateTime->xmlSerialize(true, $sxe->addChild('valueDateTime'));
        if (null !== $this->valuePeriod) $this->valuePeriod->xmlSerialize(true, $sxe->addChild('valuePeriod'));
        if (null !== $this->dataAbsentReason) $this->dataAbsentReason->xmlSerialize(true, $sxe->addChild('dataAbsentReason'));
        if (null !== $this->interpretation) $this->interpretation->xmlSerialize(true, $sxe->addChild('interpretation'));
        if (null !== $this->comment) $this->comment->xmlSerialize(true, $sxe->addChild('comment'));
        if (null !== $this->bodySite) $this->bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
        if (null !== $this->method) $this->method->xmlSerialize(true, $sxe->addChild('method'));
        if (null !== $this->specimen) $this->specimen->xmlSerialize(true, $sxe->addChild('specimen'));
        if (null !== $this->device) $this->device->xmlSerialize(true, $sxe->addChild('device'));
        if (0 < count($this->referenceRange)) {
            foreach($this->referenceRange as $referenceRange) {
                $referenceRange->xmlSerialize(true, $sxe->addChild('referenceRange'));
            }
        }
        if (0 < count($this->related)) {
            foreach($this->related as $related) {
                $related->xmlSerialize(true, $sxe->addChild('related'));
            }
        }
        if (0 < count($this->component)) {
            foreach($this->component as $component) {
                $component->xmlSerialize(true, $sxe->addChild('component'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}