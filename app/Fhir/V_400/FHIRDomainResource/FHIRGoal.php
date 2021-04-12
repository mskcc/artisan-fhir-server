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
 * Describes the intended objective(s) for a patient, group or organization care, for example, weight loss, restoring an activity of daily living, obtaining herd immunity via immunization, meeting a process improvement objective, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRGoal extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Business identifiers assigned to this goal by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The state of the goal throughout its lifecycle.
     * @var \Fhir\V_400\FHIRElement\FHIRGoalLifecycleStatus
     */
    public $lifecycleStatus = null;

    /**
     * Describes the progression, or lack thereof, towards the goal against the target.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $achievementStatus = null;

    /**
     * Indicates a category the goal falls within.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = array();

    /**
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $priority = null;

    /**
     * Human-readable and/or coded description of a specific desired objective of care, such as "control blood pressure" or "negotiate an obstacle course" or "dance with child at wedding".
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $description = null;

    /**
     * Identifies the patient, group or organization for whom the goal is being established.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRDate
     */
    public $startDate = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $startCodeableConcept = null;

    /**
     * Indicates what should be done by when.
     * @var \Fhir\V_400\FHIRResource\FHIRGoal\FHIRGoalTarget[]
     */
    public $target = array();

    /**
     * Identifies when the current status.  I.e. When initially created, when achieved, when cancelled, etc.
     * @var \Fhir\V_400\FHIRElement\FHIRDate
     */
    public $statusDate = null;

    /**
     * Captures the reason for the current status.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $statusReason = null;

    /**
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $expressedBy = null;

    /**
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $addresses = array();

    /**
     * Any comments related to the goal.
     * @var \Fhir\V_400\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $outcomeCode = array();

    /**
     * Details of what's changed (or not changed).
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $outcomeReference = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Goal';

    /**
     * Business identifiers assigned to this goal by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Business identifiers assigned to this goal by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The state of the goal throughout its lifecycle.
     * @return \Fhir\V_400\FHIRElement\FHIRGoalLifecycleStatus
     */
    public function getLifecycleStatus()
    {
        return $this->lifecycleStatus;
    }

    /**
     * The state of the goal throughout its lifecycle.
     * @param \Fhir\V_400\FHIRElement\FHIRGoalLifecycleStatus $lifecycleStatus
     * @return $this
     */
    public function setLifecycleStatus($lifecycleStatus)
    {
        $this->lifecycleStatus = $lifecycleStatus;
        return $this;
    }

    /**
     * Describes the progression, or lack thereof, towards the goal against the target.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getAchievementStatus()
    {
        return $this->achievementStatus;
    }

    /**
     * Describes the progression, or lack thereof, towards the goal against the target.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $achievementStatus
     * @return $this
     */
    public function setAchievementStatus($achievementStatus)
    {
        $this->achievementStatus = $achievementStatus;
        return $this;
    }

    /**
     * Indicates a category the goal falls within.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Indicates a category the goal falls within.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Human-readable and/or coded description of a specific desired objective of care, such as "control blood pressure" or "negotiate an obstacle course" or "dance with child at wedding".
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Human-readable and/or coded description of a specific desired objective of care, such as "control blood pressure" or "negotiate an obstacle course" or "dance with child at wedding".
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Identifies the patient, group or organization for whom the goal is being established.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Identifies the patient, group or organization for whom the goal is being established.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRDate
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRDate $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getStartCodeableConcept()
    {
        return $this->startCodeableConcept;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $startCodeableConcept
     * @return $this
     */
    public function setStartCodeableConcept($startCodeableConcept)
    {
        $this->startCodeableConcept = $startCodeableConcept;
        return $this;
    }

    /**
     * Indicates what should be done by when.
     * @return \Fhir\V_400\FHIRResource\FHIRGoal\FHIRGoalTarget[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Indicates what should be done by when.
     * @param \Fhir\V_400\FHIRResource\FHIRGoal\FHIRGoalTarget $target
     * @return $this
     */
    public function addTarget($target)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * Identifies when the current status.  I.e. When initially created, when achieved, when cancelled, etc.
     * @return \Fhir\V_400\FHIRElement\FHIRDate
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * Identifies when the current status.  I.e. When initially created, when achieved, when cancelled, etc.
     * @param \Fhir\V_400\FHIRElement\FHIRDate $statusDate
     * @return $this
     */
    public function setStatusDate($statusDate)
    {
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * Captures the reason for the current status.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Captures the reason for the current status.
     * @param \Fhir\V_400\FHIRElement\FHIRString $statusReason
     * @return $this
     */
    public function setStatusReason($statusReason)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getExpressedBy()
    {
        return $this->expressedBy;
    }

    /**
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $expressedBy
     * @return $this
     */
    public function setExpressedBy($expressedBy)
    {
        $this->expressedBy = $expressedBy;
        return $this;
    }

    /**
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $addresses
     * @return $this
     */
    public function addAddresses($addresses)
    {
        $this->addresses[] = $addresses;
        return $this;
    }

    /**
     * Any comments related to the goal.
     * @return \Fhir\V_400\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Any comments related to the goal.
     * @param \Fhir\V_400\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOutcomeCode()
    {
        return $this->outcomeCode;
    }

    /**
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $outcomeCode
     * @return $this
     */
    public function addOutcomeCode($outcomeCode)
    {
        $this->outcomeCode[] = $outcomeCode;
        return $this;
    }

    /**
     * Details of what's changed (or not changed).
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getOutcomeReference()
    {
        return $this->outcomeReference;
    }

    /**
     * Details of what's changed (or not changed).
     * @param \Fhir\V_400\FHIRElement\FHIRReference $outcomeReference
     * @return $this
     */
    public function addOutcomeReference($outcomeReference)
    {
        $this->outcomeReference[] = $outcomeReference;
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
        if (null !== $this->lifecycleStatus) $json['lifecycleStatus'] = $this->lifecycleStatus;
        if (null !== $this->achievementStatus) $json['achievementStatus'] = $this->achievementStatus;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                $json['category'][] = $category;
            }
        }
        if (null !== $this->priority) $json['priority'] = $this->priority;
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->startDate) $json['startDate'] = $this->startDate;
        if (null !== $this->startCodeableConcept) $json['startCodeableConcept'] = $this->startCodeableConcept;
        if (0 < count($this->target)) {
            $json['target'] = [];
            foreach($this->target as $target) {
                $json['target'][] = $target;
            }
        }
        if (null !== $this->statusDate) $json['statusDate'] = $this->statusDate;
        if (null !== $this->statusReason) $json['statusReason'] = $this->statusReason;
        if (null !== $this->expressedBy) $json['expressedBy'] = $this->expressedBy;
        if (0 < count($this->addresses)) {
            $json['addresses'] = [];
            foreach($this->addresses as $addresses) {
                $json['addresses'][] = $addresses;
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = $note;
            }
        }
        if (0 < count($this->outcomeCode)) {
            $json['outcomeCode'] = [];
            foreach($this->outcomeCode as $outcomeCode) {
                $json['outcomeCode'][] = $outcomeCode;
            }
        }
        if (0 < count($this->outcomeReference)) {
            $json['outcomeReference'] = [];
            foreach($this->outcomeReference as $outcomeReference) {
                $json['outcomeReference'][] = $outcomeReference;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Goal xmlns="http://hl7.org/fhir"></Goal>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->lifecycleStatus) $this->lifecycleStatus->xmlSerialize(true, $sxe->addChild('lifecycleStatus'));
        if (null !== $this->achievementStatus) $this->achievementStatus->xmlSerialize(true, $sxe->addChild('achievementStatus'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (null !== $this->priority) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->startDate) $this->startDate->xmlSerialize(true, $sxe->addChild('startDate'));
        if (null !== $this->startCodeableConcept) $this->startCodeableConcept->xmlSerialize(true, $sxe->addChild('startCodeableConcept'));
        if (0 < count($this->target)) {
            foreach($this->target as $target) {
                $target->xmlSerialize(true, $sxe->addChild('target'));
            }
        }
        if (null !== $this->statusDate) $this->statusDate->xmlSerialize(true, $sxe->addChild('statusDate'));
        if (null !== $this->statusReason) $this->statusReason->xmlSerialize(true, $sxe->addChild('statusReason'));
        if (null !== $this->expressedBy) $this->expressedBy->xmlSerialize(true, $sxe->addChild('expressedBy'));
        if (0 < count($this->addresses)) {
            foreach($this->addresses as $addresses) {
                $addresses->xmlSerialize(true, $sxe->addChild('addresses'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->outcomeCode)) {
            foreach($this->outcomeCode as $outcomeCode) {
                $outcomeCode->xmlSerialize(true, $sxe->addChild('outcomeCode'));
            }
        }
        if (0 < count($this->outcomeReference)) {
            foreach($this->outcomeReference as $outcomeReference) {
                $outcomeReference->xmlSerialize(true, $sxe->addChild('outcomeReference'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}