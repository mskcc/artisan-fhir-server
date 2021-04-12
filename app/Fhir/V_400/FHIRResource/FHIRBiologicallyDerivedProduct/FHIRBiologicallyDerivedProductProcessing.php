<?php namespace Fhir\V_400\FHIRResource\FHIRBiologicallyDerivedProduct;

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
 * A material substance originating from a biological entity intended to be transplanted or infused
into another (possibly the same) biological entity.
 */
class FHIRBiologicallyDerivedProductProcessing extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Description of of processing.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Procesing code.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $procedure = null;

    /**
     * Substance added during processing.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $additive = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $timeDateTime = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $timePeriod = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'BiologicallyDerivedProduct.Processing';

    /**
     * Description of of processing.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of of processing.
     * @param \Fhir\V_400\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Procesing code.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * Procesing code.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $procedure
     * @return $this
     */
    public function setProcedure($procedure)
    {
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * Substance added during processing.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getAdditive()
    {
        return $this->additive;
    }

    /**
     * Substance added during processing.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $additive
     * @return $this
     */
    public function setAdditive($additive)
    {
        $this->additive = $additive;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getTimeDateTime()
    {
        return $this->timeDateTime;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $timeDateTime
     * @return $this
     */
    public function setTimeDateTime($timeDateTime)
    {
        $this->timeDateTime = $timeDateTime;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getTimePeriod()
    {
        return $this->timePeriod;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $timePeriod
     * @return $this
     */
    public function setTimePeriod($timePeriod)
    {
        $this->timePeriod = $timePeriod;
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
        if (null !== $this->procedure) $json['procedure'] = $this->procedure;
        if (null !== $this->additive) $json['additive'] = $this->additive;
        if (null !== $this->timeDateTime) $json['timeDateTime'] = $this->timeDateTime;
        if (null !== $this->timePeriod) $json['timePeriod'] = $this->timePeriod;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<BiologicallyDerivedProductProcessing xmlns="http://hl7.org/fhir"></BiologicallyDerivedProductProcessing>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->procedure) $this->procedure->xmlSerialize(true, $sxe->addChild('procedure'));
        if (null !== $this->additive) $this->additive->xmlSerialize(true, $sxe->addChild('additive'));
        if (null !== $this->timeDateTime) $this->timeDateTime->xmlSerialize(true, $sxe->addChild('timeDateTime'));
        if (null !== $this->timePeriod) $this->timePeriod->xmlSerialize(true, $sxe->addChild('timePeriod'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}