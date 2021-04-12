<?php namespace Fhir\V_400\FHIRResource\FHIRPlanDefinition;

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
 * This resource allows for the definition of various types of plans as a sharable, consumable, and executable artifact. The resource is general enough to support the description of a broad range of clinical artifacts such as clinical decision support rules, order sets and protocols.
 */
class FHIRPlanDefinitionTarget extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $measure = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $detailQuantity = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRRange
     */
    public $detailRange = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $detailCodeableConcept = null;

    /**
     * Indicates the timeframe after the start of the goal in which the goal should be met.
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $due = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'PlanDefinition.Target';

    /**
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $measure
     * @return $this
     */
    public function setMeasure($measure)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public function getDetailQuantity()
    {
        return $this->detailQuantity;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity $detailQuantity
     * @return $this
     */
    public function setDetailQuantity($detailQuantity)
    {
        $this->detailQuantity = $detailQuantity;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRRange
     */
    public function getDetailRange()
    {
        return $this->detailRange;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRRange $detailRange
     * @return $this
     */
    public function setDetailRange($detailRange)
    {
        $this->detailRange = $detailRange;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getDetailCodeableConcept()
    {
        return $this->detailCodeableConcept;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $detailCodeableConcept
     * @return $this
     */
    public function setDetailCodeableConcept($detailCodeableConcept)
    {
        $this->detailCodeableConcept = $detailCodeableConcept;
        return $this;
    }

    /**
     * Indicates the timeframe after the start of the goal in which the goal should be met.
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDue()
    {
        return $this->due;
    }

    /**
     * Indicates the timeframe after the start of the goal in which the goal should be met.
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration $due
     * @return $this
     */
    public function setDue($due)
    {
        $this->due = $due;
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
        if (null !== $this->measure) $json['measure'] = $this->measure;
        if (null !== $this->detailQuantity) $json['detailQuantity'] = $this->detailQuantity;
        if (null !== $this->detailRange) $json['detailRange'] = $this->detailRange;
        if (null !== $this->detailCodeableConcept) $json['detailCodeableConcept'] = $this->detailCodeableConcept;
        if (null !== $this->due) $json['due'] = $this->due;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<PlanDefinitionTarget xmlns="http://hl7.org/fhir"></PlanDefinitionTarget>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->measure) $this->measure->xmlSerialize(true, $sxe->addChild('measure'));
        if (null !== $this->detailQuantity) $this->detailQuantity->xmlSerialize(true, $sxe->addChild('detailQuantity'));
        if (null !== $this->detailRange) $this->detailRange->xmlSerialize(true, $sxe->addChild('detailRange'));
        if (null !== $this->detailCodeableConcept) $this->detailCodeableConcept->xmlSerialize(true, $sxe->addChild('detailCodeableConcept'));
        if (null !== $this->due) $this->due->xmlSerialize(true, $sxe->addChild('due'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}