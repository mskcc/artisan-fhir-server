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
 * A request to perform an action.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIROrder extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifiers assigned to this order by the orderer or by the receiver.
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * When the order was made.
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Patient this order is about.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Who initiated the order.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * Who is intended to fulfill the order.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $target = null;

    /**
     * Text - why the order was made. (choose any one of reason*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCodeableConcept = null;

    /**
     * Text - why the order was made. (choose any one of reason*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * When order should be fulfilled.
     * @var \Fhir\V_301\FHIRResource\FHIROrder\FHIROrderWhen
     */
    public $when = null;

    /**
     * What action is being ordered.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $detail = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Order';

    /**
     * Identifiers assigned to this order by the orderer or by the receiver.
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifiers assigned to this order by the orderer or by the receiver.
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * When the order was made.
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * When the order was made.
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Patient this order is about.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Patient this order is about.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Who initiated the order.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Who initiated the order.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Who is intended to fulfill the order.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Who is intended to fulfill the order.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $target
     * @return $this
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Text - why the order was made. (choose any one of reason*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCodeableConcept()
    {
        return $this->reasonCodeableConcept;
    }

    /**
     * Text - why the order was made. (choose any one of reason*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     * @return $this
     */
    public function setReasonCodeableConcept($reasonCodeableConcept)
    {
        $this->reasonCodeableConcept = $reasonCodeableConcept;
        return $this;
    }

    /**
     * Text - why the order was made. (choose any one of reason*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Text - why the order was made. (choose any one of reason*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function setReasonReference($reasonReference)
    {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * When order should be fulfilled.
     * @return \Fhir\V_301\FHIRResource\FHIROrder\FHIROrderWhen
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * When order should be fulfilled.
     * @param \Fhir\V_301\FHIRResource\FHIROrder\FHIROrderWhen $when
     * @return $this
     */
    public function setWhen($when)
    {
        $this->when = $when;
        return $this;
    }

    /**
     * What action is being ordered.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * What action is being ordered.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $detail
     * @return $this
     */
    public function addDetail($detail)
    {
        $this->detail[] = $detail;
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
        if (null !== $this->date) $json['date'] = $this->date;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->source) $json['source'] = $this->source;
        if (null !== $this->target) $json['target'] = $this->target;
        if (null !== $this->reasonCodeableConcept) $json['reasonCodeableConcept'] = $this->reasonCodeableConcept;
        if (null !== $this->reasonReference) $json['reasonReference'] = $this->reasonReference;
        if (null !== $this->when) $json['when'] = $this->when;
        if (0 < count($this->detail)) {
            $json['detail'] = [];
            foreach($this->detail as $detail) {
                $json['detail'][] = $detail;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Order xmlns="http://hl7.org/fhir"></Order>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->source) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (null !== $this->target) $this->target->xmlSerialize(true, $sxe->addChild('target'));
        if (null !== $this->reasonCodeableConcept) $this->reasonCodeableConcept->xmlSerialize(true, $sxe->addChild('reasonCodeableConcept'));
        if (null !== $this->reasonReference) $this->reasonReference->xmlSerialize(true, $sxe->addChild('reasonReference'));
        if (null !== $this->when) $this->when->xmlSerialize(true, $sxe->addChild('when'));
        if (0 < count($this->detail)) {
            foreach($this->detail as $detail) {
                $detail->xmlSerialize(true, $sxe->addChild('detail'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}