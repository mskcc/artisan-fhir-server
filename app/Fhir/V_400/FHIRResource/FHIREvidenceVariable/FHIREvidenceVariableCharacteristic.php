<?php namespace Fhir\V_400\FHIRResource\FHIREvidenceVariable;

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
 * The EvidenceVariable resource describes a "PICO" element that knowledge (evidence, assertion, recommendation) is about.
 */
class FHIREvidenceVariableCharacteristic extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A short, natural language description of the characteristic that could be used to communicate the criteria to an end-user.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $definitionReference = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCanonical
     */
    public $definitionCanonical = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $definitionCodeableConcept = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRExpression
     */
    public $definitionExpression = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRDataRequirement
     */
    public $definitionDataRequirement = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRTriggerDefinition
     */
    public $definitionTriggerDefinition = null;

    /**
     * Use UsageContext to define the members of the population, such as Age Ranges, Genders, Settings.
     * @var \Fhir\V_400\FHIRElement\FHIRUsageContext[]
     */
    public $usageContext = array();

    /**
     * When true, members with this characteristic are excluded from the element.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $exclude = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $participantEffectiveDateTime = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $participantEffectivePeriod = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $participantEffectiveDuration = null;

    /**
     * @var \Fhir\V_400\FHIRResource\FHIRTiming
     */
    public $participantEffectiveTiming = null;

    /**
     * Indicates duration from the participant's study entry.
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $timeFromStart = null;

    /**
     * Indicates how elements are aggregated within the study effective period.
     * @var \Fhir\V_400\FHIRElement\FHIRGroupMeasure
     */
    public $groupMeasure = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'EvidenceVariable.Characteristic';

    /**
     * A short, natural language description of the characteristic that could be used to communicate the criteria to an end-user.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A short, natural language description of the characteristic that could be used to communicate the criteria to an end-user.
     * @param \Fhir\V_400\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getDefinitionReference()
    {
        return $this->definitionReference;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRReference $definitionReference
     * @return $this
     */
    public function setDefinitionReference($definitionReference)
    {
        $this->definitionReference = $definitionReference;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCanonical
     */
    public function getDefinitionCanonical()
    {
        return $this->definitionCanonical;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCanonical $definitionCanonical
     * @return $this
     */
    public function setDefinitionCanonical($definitionCanonical)
    {
        $this->definitionCanonical = $definitionCanonical;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getDefinitionCodeableConcept()
    {
        return $this->definitionCodeableConcept;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $definitionCodeableConcept
     * @return $this
     */
    public function setDefinitionCodeableConcept($definitionCodeableConcept)
    {
        $this->definitionCodeableConcept = $definitionCodeableConcept;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRExpression
     */
    public function getDefinitionExpression()
    {
        return $this->definitionExpression;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRExpression $definitionExpression
     * @return $this
     */
    public function setDefinitionExpression($definitionExpression)
    {
        $this->definitionExpression = $definitionExpression;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRDataRequirement
     */
    public function getDefinitionDataRequirement()
    {
        return $this->definitionDataRequirement;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRDataRequirement $definitionDataRequirement
     * @return $this
     */
    public function setDefinitionDataRequirement($definitionDataRequirement)
    {
        $this->definitionDataRequirement = $definitionDataRequirement;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRTriggerDefinition
     */
    public function getDefinitionTriggerDefinition()
    {
        return $this->definitionTriggerDefinition;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRTriggerDefinition $definitionTriggerDefinition
     * @return $this
     */
    public function setDefinitionTriggerDefinition($definitionTriggerDefinition)
    {
        $this->definitionTriggerDefinition = $definitionTriggerDefinition;
        return $this;
    }

    /**
     * Use UsageContext to define the members of the population, such as Age Ranges, Genders, Settings.
     * @return \Fhir\V_400\FHIRElement\FHIRUsageContext[]
     */
    public function getUsageContext()
    {
        return $this->usageContext;
    }

    /**
     * Use UsageContext to define the members of the population, such as Age Ranges, Genders, Settings.
     * @param \Fhir\V_400\FHIRElement\FHIRUsageContext $usageContext
     * @return $this
     */
    public function addUsageContext($usageContext)
    {
        $this->usageContext[] = $usageContext;
        return $this;
    }

    /**
     * When true, members with this characteristic are excluded from the element.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * When true, members with this characteristic are excluded from the element.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $exclude
     * @return $this
     */
    public function setExclude($exclude)
    {
        $this->exclude = $exclude;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getParticipantEffectiveDateTime()
    {
        return $this->participantEffectiveDateTime;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $participantEffectiveDateTime
     * @return $this
     */
    public function setParticipantEffectiveDateTime($participantEffectiveDateTime)
    {
        $this->participantEffectiveDateTime = $participantEffectiveDateTime;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getParticipantEffectivePeriod()
    {
        return $this->participantEffectivePeriod;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $participantEffectivePeriod
     * @return $this
     */
    public function setParticipantEffectivePeriod($participantEffectivePeriod)
    {
        $this->participantEffectivePeriod = $participantEffectivePeriod;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getParticipantEffectiveDuration()
    {
        return $this->participantEffectiveDuration;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration $participantEffectiveDuration
     * @return $this
     */
    public function setParticipantEffectiveDuration($participantEffectiveDuration)
    {
        $this->participantEffectiveDuration = $participantEffectiveDuration;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRResource\FHIRTiming
     */
    public function getParticipantEffectiveTiming()
    {
        return $this->participantEffectiveTiming;
    }

    /**
     * @param \Fhir\V_400\FHIRResource\FHIRTiming $participantEffectiveTiming
     * @return $this
     */
    public function setParticipantEffectiveTiming($participantEffectiveTiming)
    {
        $this->participantEffectiveTiming = $participantEffectiveTiming;
        return $this;
    }

    /**
     * Indicates duration from the participant's study entry.
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getTimeFromStart()
    {
        return $this->timeFromStart;
    }

    /**
     * Indicates duration from the participant's study entry.
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration $timeFromStart
     * @return $this
     */
    public function setTimeFromStart($timeFromStart)
    {
        $this->timeFromStart = $timeFromStart;
        return $this;
    }

    /**
     * Indicates how elements are aggregated within the study effective period.
     * @return \Fhir\V_400\FHIRElement\FHIRGroupMeasure
     */
    public function getGroupMeasure()
    {
        return $this->groupMeasure;
    }

    /**
     * Indicates how elements are aggregated within the study effective period.
     * @param \Fhir\V_400\FHIRElement\FHIRGroupMeasure $groupMeasure
     * @return $this
     */
    public function setGroupMeasure($groupMeasure)
    {
        $this->groupMeasure = $groupMeasure;
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
        if (null !== $this->definitionReference) $json['definitionReference'] = $this->definitionReference;
        if (null !== $this->definitionCanonical) $json['definitionCanonical'] = $this->definitionCanonical;
        if (null !== $this->definitionCodeableConcept) $json['definitionCodeableConcept'] = $this->definitionCodeableConcept;
        if (null !== $this->definitionExpression) $json['definitionExpression'] = $this->definitionExpression;
        if (null !== $this->definitionDataRequirement) $json['definitionDataRequirement'] = $this->definitionDataRequirement;
        if (null !== $this->definitionTriggerDefinition) $json['definitionTriggerDefinition'] = $this->definitionTriggerDefinition;
        if (0 < count($this->usageContext)) {
            $json['usageContext'] = [];
            foreach($this->usageContext as $usageContext) {
                $json['usageContext'][] = $usageContext;
            }
        }
        if (null !== $this->exclude) $json['exclude'] = $this->exclude;
        if (null !== $this->participantEffectiveDateTime) $json['participantEffectiveDateTime'] = $this->participantEffectiveDateTime;
        if (null !== $this->participantEffectivePeriod) $json['participantEffectivePeriod'] = $this->participantEffectivePeriod;
        if (null !== $this->participantEffectiveDuration) $json['participantEffectiveDuration'] = $this->participantEffectiveDuration;
        if (null !== $this->participantEffectiveTiming) $json['participantEffectiveTiming'] = $this->participantEffectiveTiming;
        if (null !== $this->timeFromStart) $json['timeFromStart'] = $this->timeFromStart;
        if (null !== $this->groupMeasure) $json['groupMeasure'] = $this->groupMeasure;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<EvidenceVariableCharacteristic xmlns="http://hl7.org/fhir"></EvidenceVariableCharacteristic>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->definitionReference) $this->definitionReference->xmlSerialize(true, $sxe->addChild('definitionReference'));
        if (null !== $this->definitionCanonical) $this->definitionCanonical->xmlSerialize(true, $sxe->addChild('definitionCanonical'));
        if (null !== $this->definitionCodeableConcept) $this->definitionCodeableConcept->xmlSerialize(true, $sxe->addChild('definitionCodeableConcept'));
        if (null !== $this->definitionExpression) $this->definitionExpression->xmlSerialize(true, $sxe->addChild('definitionExpression'));
        if (null !== $this->definitionDataRequirement) $this->definitionDataRequirement->xmlSerialize(true, $sxe->addChild('definitionDataRequirement'));
        if (null !== $this->definitionTriggerDefinition) $this->definitionTriggerDefinition->xmlSerialize(true, $sxe->addChild('definitionTriggerDefinition'));
        if (0 < count($this->usageContext)) {
            foreach($this->usageContext as $usageContext) {
                $usageContext->xmlSerialize(true, $sxe->addChild('usageContext'));
            }
        }
        if (null !== $this->exclude) $this->exclude->xmlSerialize(true, $sxe->addChild('exclude'));
        if (null !== $this->participantEffectiveDateTime) $this->participantEffectiveDateTime->xmlSerialize(true, $sxe->addChild('participantEffectiveDateTime'));
        if (null !== $this->participantEffectivePeriod) $this->participantEffectivePeriod->xmlSerialize(true, $sxe->addChild('participantEffectivePeriod'));
        if (null !== $this->participantEffectiveDuration) $this->participantEffectiveDuration->xmlSerialize(true, $sxe->addChild('participantEffectiveDuration'));
        if (null !== $this->participantEffectiveTiming) $this->participantEffectiveTiming->xmlSerialize(true, $sxe->addChild('participantEffectiveTiming'));
        if (null !== $this->timeFromStart) $this->timeFromStart->xmlSerialize(true, $sxe->addChild('timeFromStart'));
        if (null !== $this->groupMeasure) $this->groupMeasure->xmlSerialize(true, $sxe->addChild('groupMeasure'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}