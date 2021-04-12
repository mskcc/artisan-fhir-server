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
 * A slot of time on a schedule that may be available for booking appointments.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSlot extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * External Ids for this item.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * A broad categorization of the service that is to be performed during this appointment.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $serviceCategory = array();

    /**
     * The type of appointments that can be booked into this slot (ideally this would be an identifiable service - which is at a location, rather than the location itself). If provided then this overrides the value provided on the availability resource.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $serviceType = array();

    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $specialty = array();

    /**
     * The style of appointment or patient that may be booked in the slot (not service type).
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $appointmentType = null;

    /**
     * The schedule resource that this slot defines an interval of status information.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $schedule = null;

    /**
     * busy | free | busy-unavailable | busy-tentative | entered-in-error.
     * @var \Fhir\V_400\FHIRElement\FHIRSlotStatus
     */
    public $status = null;

    /**
     * Date/Time that the slot is to begin.
     * @var \Fhir\V_400\FHIRElement\FHIRInstant
     */
    public $start = null;

    /**
     * Date/Time that the slot is to conclude.
     * @var \Fhir\V_400\FHIRElement\FHIRInstant
     */
    public $end = null;

    /**
     * This slot has already been overbooked, appointments are unlikely to be accepted for this time.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $overbooked = null;

    /**
     * Comments on the slot to describe any extended information. Such as custom constraints on the slot.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Slot';

    /**
     * External Ids for this item.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * External Ids for this item.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A broad categorization of the service that is to be performed during this appointment.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceCategory()
    {
        return $this->serviceCategory;
    }

    /**
     * A broad categorization of the service that is to be performed during this appointment.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $serviceCategory
     * @return $this
     */
    public function addServiceCategory($serviceCategory)
    {
        $this->serviceCategory[] = $serviceCategory;
        return $this;
    }

    /**
     * The type of appointments that can be booked into this slot (ideally this would be an identifiable service - which is at a location, rather than the location itself). If provided then this overrides the value provided on the availability resource.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * The type of appointments that can be booked into this slot (ideally this would be an identifiable service - which is at a location, rather than the location itself). If provided then this overrides the value provided on the availability resource.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $serviceType
     * @return $this
     */
    public function addServiceType($serviceType)
    {
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $specialty
     * @return $this
     */
    public function addSpecialty($specialty)
    {
        $this->specialty[] = $specialty;
        return $this;
    }

    /**
     * The style of appointment or patient that may be booked in the slot (not service type).
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getAppointmentType()
    {
        return $this->appointmentType;
    }

    /**
     * The style of appointment or patient that may be booked in the slot (not service type).
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $appointmentType
     * @return $this
     */
    public function setAppointmentType($appointmentType)
    {
        $this->appointmentType = $appointmentType;
        return $this;
    }

    /**
     * The schedule resource that this slot defines an interval of status information.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * The schedule resource that this slot defines an interval of status information.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $schedule
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * busy | free | busy-unavailable | busy-tentative | entered-in-error.
     * @return \Fhir\V_400\FHIRElement\FHIRSlotStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * busy | free | busy-unavailable | busy-tentative | entered-in-error.
     * @param \Fhir\V_400\FHIRElement\FHIRSlotStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Date/Time that the slot is to begin.
     * @return \Fhir\V_400\FHIRElement\FHIRInstant
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Date/Time that the slot is to begin.
     * @param \Fhir\V_400\FHIRElement\FHIRInstant $start
     * @return $this
     */
    public function setStart($start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Date/Time that the slot is to conclude.
     * @return \Fhir\V_400\FHIRElement\FHIRInstant
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Date/Time that the slot is to conclude.
     * @param \Fhir\V_400\FHIRElement\FHIRInstant $end
     * @return $this
     */
    public function setEnd($end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * This slot has already been overbooked, appointments are unlikely to be accepted for this time.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getOverbooked()
    {
        return $this->overbooked;
    }

    /**
     * This slot has already been overbooked, appointments are unlikely to be accepted for this time.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $overbooked
     * @return $this
     */
    public function setOverbooked($overbooked)
    {
        $this->overbooked = $overbooked;
        return $this;
    }

    /**
     * Comments on the slot to describe any extended information. Such as custom constraints on the slot.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Comments on the slot to describe any extended information. Such as custom constraints on the slot.
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
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (0 < count($this->serviceCategory)) {
            $json['serviceCategory'] = [];
            foreach($this->serviceCategory as $serviceCategory) {
                $json['serviceCategory'][] = $serviceCategory;
            }
        }
        if (0 < count($this->serviceType)) {
            $json['serviceType'] = [];
            foreach($this->serviceType as $serviceType) {
                $json['serviceType'][] = $serviceType;
            }
        }
        if (0 < count($this->specialty)) {
            $json['specialty'] = [];
            foreach($this->specialty as $specialty) {
                $json['specialty'][] = $specialty;
            }
        }
        if (null !== $this->appointmentType) $json['appointmentType'] = $this->appointmentType;
        if (null !== $this->schedule) $json['schedule'] = $this->schedule;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->start) $json['start'] = $this->start;
        if (null !== $this->end) $json['end'] = $this->end;
        if (null !== $this->overbooked) $json['overbooked'] = $this->overbooked;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Slot xmlns="http://hl7.org/fhir"></Slot>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->serviceCategory)) {
            foreach($this->serviceCategory as $serviceCategory) {
                $serviceCategory->xmlSerialize(true, $sxe->addChild('serviceCategory'));
            }
        }
        if (0 < count($this->serviceType)) {
            foreach($this->serviceType as $serviceType) {
                $serviceType->xmlSerialize(true, $sxe->addChild('serviceType'));
            }
        }
        if (0 < count($this->specialty)) {
            foreach($this->specialty as $specialty) {
                $specialty->xmlSerialize(true, $sxe->addChild('specialty'));
            }
        }
        if (null !== $this->appointmentType) $this->appointmentType->xmlSerialize(true, $sxe->addChild('appointmentType'));
        if (null !== $this->schedule) $this->schedule->xmlSerialize(true, $sxe->addChild('schedule'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->start) $this->start->xmlSerialize(true, $sxe->addChild('start'));
        if (null !== $this->end) $this->end->xmlSerialize(true, $sxe->addChild('end'));
        if (null !== $this->overbooked) $this->overbooked->xmlSerialize(true, $sxe->addChild('overbooked'));
        if (null !== $this->comment) $this->comment->xmlSerialize(true, $sxe->addChild('comment'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}