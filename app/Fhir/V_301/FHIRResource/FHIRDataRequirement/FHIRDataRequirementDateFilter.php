<?php namespace Fhir\V_301\FHIRResource\FHIRDataRequirement;

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
 * Describes a required data item for evaluation in terms of the type of data, and optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRDataRequirementDateFilter extends FHIRElement implements \JsonSerializable
{
    /**
     * The date-valued attribute of the filter. The specified path must be resolvable from the type of the required data. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements. Note that the index must be an integer constant. The path must resolve to an element of type dateTime, Period, Schedule, or Timing.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $path = null;

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration from now. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration from now. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration from now. (choose any one of value*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $valueDuration = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'DataRequirement.DateFilter';

    /**
     * The date-valued attribute of the filter. The specified path must be resolvable from the type of the required data. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements. Note that the index must be an integer constant. The path must resolve to an element of type dateTime, Period, Schedule, or Timing.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The date-valued attribute of the filter. The specified path must be resolvable from the type of the required data. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements. Note that the index must be an integer constant. The path must resolve to an element of type dateTime, Period, Schedule, or Timing.
     * @param \Fhir\V_301\FHIRElement\FHIRString $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration from now. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration from now. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $valueDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration from now. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration from now. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRPeriod $valuePeriod
     * @return $this
     */
    public function setValuePeriod($valuePeriod)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration from now. (choose any one of value*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getValueDuration()
    {
        return $this->valueDuration;
    }

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration from now. (choose any one of value*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRDuration $valueDuration
     * @return $this
     */
    public function setValueDuration($valueDuration)
    {
        $this->valueDuration = $valueDuration;
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
        if (null !== $this->valueDateTime) $json['valueDateTime'] = $this->valueDateTime;
        if (null !== $this->valuePeriod) $json['valuePeriod'] = $this->valuePeriod;
        if (null !== $this->valueDuration) $json['valueDuration'] = $this->valueDuration;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DataRequirementDateFilter xmlns="http://hl7.org/fhir"></DataRequirementDateFilter>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->path) $this->path->xmlSerialize(true, $sxe->addChild('path'));
        if (null !== $this->valueDateTime) $this->valueDateTime->xmlSerialize(true, $sxe->addChild('valueDateTime'));
        if (null !== $this->valuePeriod) $this->valuePeriod->xmlSerialize(true, $sxe->addChild('valuePeriod'));
        if (null !== $this->valueDuration) $this->valueDuration->xmlSerialize(true, $sxe->addChild('valueDuration'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}