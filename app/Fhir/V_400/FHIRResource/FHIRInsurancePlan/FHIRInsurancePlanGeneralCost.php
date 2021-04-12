<?php namespace Fhir\V_400\FHIRResource\FHIRInsurancePlan;

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
 * Details of a Health Insurance product/plan provided by an organization.
 */
class FHIRInsurancePlanGeneralCost extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Type of cost.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Number of participants enrolled in the plan.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public $groupSize = null;

    /**
     * Value of the cost.
     * @var \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public $cost = null;

    /**
     * Additional information about the general costs associated with this plan.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'InsurancePlan.GeneralCost';

    /**
     * Type of cost.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of cost.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Number of participants enrolled in the plan.
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public function getGroupSize()
    {
        return $this->groupSize;
    }

    /**
     * Number of participants enrolled in the plan.
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $groupSize
     * @return $this
     */
    public function setGroupSize($groupSize)
    {
        $this->groupSize = $groupSize;
        return $this;
    }

    /**
     * Value of the cost.
     * @return \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Value of the cost.
     * @param \Fhir\V_400\FHIRElement\FHIRMoney $cost
     * @return $this
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * Additional information about the general costs associated with this plan.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Additional information about the general costs associated with this plan.
     * @param \Fhir\V_400\FHIRElement\FHIRString $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
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
        if (null !== $this->groupSize) $json['groupSize'] = $this->groupSize;
        if (null !== $this->cost) $json['cost'] = $this->cost;
        if (null !== $this->comment) $json['comment'] = $this->comment;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<InsurancePlanGeneralCost xmlns="http://hl7.org/fhir"></InsurancePlanGeneralCost>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->groupSize) $this->groupSize->xmlSerialize(true, $sxe->addChild('groupSize'));
        if (null !== $this->cost) $this->cost->xmlSerialize(true, $sxe->addChild('cost'));
        if (null !== $this->comment) $this->comment->xmlSerialize(true, $sxe->addChild('comment'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}