<?php namespace Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit;

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
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 */
class FHIRExplanationOfBenefitSupportingInfo extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A number to uniquely identify supporting information entries.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public $sequence = null;

    /**
     * The general class of the information supplied: information; exception; accident, employment; onset, etc.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * System and code pertaining to the specific information regarding special conditions relating to the setting, treatment or patient  for which care is sought.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRDate
     */
    public $timingDate = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $timingPeriod = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $valueReference = null;

    /**
     * Provides the reason in the situation where a reason code is required in addition to the content.
     * @var \Fhir\V_400\FHIRElement\FHIRCoding
     */
    public $reason = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ExplanationOfBenefit.SupportingInfo';

    /**
     * A number to uniquely identify supporting information entries.
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * A number to uniquely identify supporting information entries.
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $sequence
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * The general class of the information supplied: information; exception; accident, employment; onset, etc.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * The general class of the information supplied: information; exception; accident, employment; onset, etc.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * System and code pertaining to the specific information regarding special conditions relating to the setting, treatment or patient  for which care is sought.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * System and code pertaining to the specific information regarding special conditions relating to the setting, treatment or patient  for which care is sought.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRDate
     */
    public function getTimingDate()
    {
        return $this->timingDate;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRDate $timingDate
     * @return $this
     */
    public function setTimingDate($timingDate)
    {
        $this->timingDate = $timingDate;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $timingPeriod
     * @return $this
     */
    public function setTimingPeriod($timingPeriod)
    {
        $this->timingPeriod = $timingPeriod;
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
     * Provides the reason in the situation where a reason code is required in addition to the content.
     * @return \Fhir\V_400\FHIRElement\FHIRCoding
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Provides the reason in the situation where a reason code is required in addition to the content.
     * @param \Fhir\V_400\FHIRElement\FHIRCoding $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
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
        if (null !== $this->sequence) $json['sequence'] = $this->sequence;
        if (null !== $this->category) $json['category'] = $this->category;
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->timingDate) $json['timingDate'] = $this->timingDate;
        if (null !== $this->timingPeriod) $json['timingPeriod'] = $this->timingPeriod;
        if (null !== $this->valueBoolean) $json['valueBoolean'] = $this->valueBoolean;
        if (null !== $this->valueString) $json['valueString'] = $this->valueString;
        if (null !== $this->valueQuantity) $json['valueQuantity'] = $this->valueQuantity;
        if (null !== $this->valueAttachment) $json['valueAttachment'] = $this->valueAttachment;
        if (null !== $this->valueReference) $json['valueReference'] = $this->valueReference;
        if (null !== $this->reason) $json['reason'] = $this->reason;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ExplanationOfBenefitSupportingInfo xmlns="http://hl7.org/fhir"></ExplanationOfBenefitSupportingInfo>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->sequence) $this->sequence->xmlSerialize(true, $sxe->addChild('sequence'));
        if (null !== $this->category) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->timingDate) $this->timingDate->xmlSerialize(true, $sxe->addChild('timingDate'));
        if (null !== $this->timingPeriod) $this->timingPeriod->xmlSerialize(true, $sxe->addChild('timingPeriod'));
        if (null !== $this->valueBoolean) $this->valueBoolean->xmlSerialize(true, $sxe->addChild('valueBoolean'));
        if (null !== $this->valueString) $this->valueString->xmlSerialize(true, $sxe->addChild('valueString'));
        if (null !== $this->valueQuantity) $this->valueQuantity->xmlSerialize(true, $sxe->addChild('valueQuantity'));
        if (null !== $this->valueAttachment) $this->valueAttachment->xmlSerialize(true, $sxe->addChild('valueAttachment'));
        if (null !== $this->valueReference) $this->valueReference->xmlSerialize(true, $sxe->addChild('valueReference'));
        if (null !== $this->reason) $this->reason->xmlSerialize(true, $sxe->addChild('reason'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}