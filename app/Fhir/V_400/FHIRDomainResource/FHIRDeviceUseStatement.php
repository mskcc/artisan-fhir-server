<?php namespace Fhir\V_400\FHIRDomainResource;

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

use Fhir\V_400\FHIRResource\FHIRDomainResource;

/**
 * A record of a device being used by a patient where the record is the result of a report from the patient or another clinician.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDeviceUseStatement extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An external identifier for this statement such as an IRI.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUseStatement.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $basedOn = array();

    /**
     * A code representing the patient or other source's judgment about the state of the device used that this statement is about.  Generally this will be active or completed.
     * @var \Fhir\V_400\FHIRElement\FHIRDeviceUseStatementStatus
     */
    public $status = null;

    /**
     * The patient who used the device.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Allows linking the DeviceUseStatement to the underlying Request, or to other information that supports or is used to derive the DeviceUseStatement.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $derivedFrom = array();

    /**
     * @var \Fhir\V_400\FHIRResource\FHIRTiming
     */
    public $timingTiming = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $timingPeriod = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $timingDateTime = null;

    /**
     * The time at which the statement was made/recorded.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $recordedOn = null;

    /**
     * Who reported the device was being used by the patient.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * The details of the device used.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * Reason or justification for the use of the device.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = array();

    /**
     * Indicates another resource whose existence justifies this DeviceUseStatement.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $reasonReference = array();

    /**
     * Indicates the anotomic location on the subject's body where the device was used ( i.e. the target).
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @var \Fhir\V_400\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'DeviceUseStatement';

    /**
     * An external identifier for this statement such as an IRI.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An external identifier for this statement such as an IRI.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUseStatement.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUseStatement.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A code representing the patient or other source's judgment about the state of the device used that this statement is about.  Generally this will be active or completed.
     * @return \Fhir\V_400\FHIRElement\FHIRDeviceUseStatementStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code representing the patient or other source's judgment about the state of the device used that this statement is about.  Generally this will be active or completed.
     * @param \Fhir\V_400\FHIRElement\FHIRDeviceUseStatementStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The patient who used the device.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The patient who used the device.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Allows linking the DeviceUseStatement to the underlying Request, or to other information that supports or is used to derive the DeviceUseStatement.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getDerivedFrom()
    {
        return $this->derivedFrom;
    }

    /**
     * Allows linking the DeviceUseStatement to the underlying Request, or to other information that supports or is used to derive the DeviceUseStatement.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $derivedFrom
     * @return $this
     */
    public function addDerivedFrom($derivedFrom)
    {
        $this->derivedFrom[] = $derivedFrom;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRResource\FHIRTiming
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * @param \Fhir\V_400\FHIRResource\FHIRTiming $timingTiming
     * @return $this
     */
    public function setTimingTiming($timingTiming)
    {
        $this->timingTiming = $timingTiming;
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
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $timingDateTime
     * @return $this
     */
    public function setTimingDateTime($timingDateTime)
    {
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * The time at which the statement was made/recorded.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getRecordedOn()
    {
        return $this->recordedOn;
    }

    /**
     * The time at which the statement was made/recorded.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $recordedOn
     * @return $this
     */
    public function setRecordedOn($recordedOn)
    {
        $this->recordedOn = $recordedOn;
        return $this;
    }

    /**
     * Who reported the device was being used by the patient.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Who reported the device was being used by the patient.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * The details of the device used.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The details of the device used.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Reason or justification for the use of the device.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Reason or justification for the use of the device.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Indicates another resource whose existence justifies this DeviceUseStatement.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Indicates another resource whose existence justifies this DeviceUseStatement.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function addReasonReference($reasonReference)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * Indicates the anotomic location on the subject's body where the device was used ( i.e. the target).
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Indicates the anotomic location on the subject's body where the device was used ( i.e. the target).
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $bodySite
     * @return $this
     */
    public function setBodySite($bodySite)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @return \Fhir\V_400\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @param \Fhir\V_400\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
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
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (0 < count($this->derivedFrom)) {
            $json['derivedFrom'] = [];
            foreach($this->derivedFrom as $derivedFrom) {
                $json['derivedFrom'][] = $derivedFrom;
            }
        }
        if (null !== $this->timingTiming) $json['timingTiming'] = $this->timingTiming;
        if (null !== $this->timingPeriod) $json['timingPeriod'] = $this->timingPeriod;
        if (null !== $this->timingDateTime) $json['timingDateTime'] = $this->timingDateTime;
        if (null !== $this->recordedOn) $json['recordedOn'] = $this->recordedOn;
        if (null !== $this->source) $json['source'] = $this->source;
        if (null !== $this->device) $json['device'] = $this->device;
        if (0 < count($this->reasonCode)) {
            $json['reasonCode'] = [];
            foreach($this->reasonCode as $reasonCode) {
                $json['reasonCode'][] = $reasonCode;
            }
        }
        if (0 < count($this->reasonReference)) {
            $json['reasonReference'] = [];
            foreach($this->reasonReference as $reasonReference) {
                $json['reasonReference'][] = $reasonReference;
            }
        }
        if (null !== $this->bodySite) $json['bodySite'] = $this->bodySite;
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = $note;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DeviceUseStatement xmlns="http://hl7.org/fhir"></DeviceUseStatement>');
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
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (0 < count($this->derivedFrom)) {
            foreach($this->derivedFrom as $derivedFrom) {
                $derivedFrom->xmlSerialize(true, $sxe->addChild('derivedFrom'));
            }
        }
        if (null !== $this->timingTiming) $this->timingTiming->xmlSerialize(true, $sxe->addChild('timingTiming'));
        if (null !== $this->timingPeriod) $this->timingPeriod->xmlSerialize(true, $sxe->addChild('timingPeriod'));
        if (null !== $this->timingDateTime) $this->timingDateTime->xmlSerialize(true, $sxe->addChild('timingDateTime'));
        if (null !== $this->recordedOn) $this->recordedOn->xmlSerialize(true, $sxe->addChild('recordedOn'));
        if (null !== $this->source) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (null !== $this->device) $this->device->xmlSerialize(true, $sxe->addChild('device'));
        if (0 < count($this->reasonCode)) {
            foreach($this->reasonCode as $reasonCode) {
                $reasonCode->xmlSerialize(true, $sxe->addChild('reasonCode'));
            }
        }
        if (0 < count($this->reasonReference)) {
            foreach($this->reasonReference as $reasonReference) {
                $reasonReference->xmlSerialize(true, $sxe->addChild('reasonReference'));
            }
        }
        if (null !== $this->bodySite) $this->bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}