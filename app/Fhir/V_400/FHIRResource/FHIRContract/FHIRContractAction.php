<?php namespace Fhir\V_400\FHIRResource\FHIRContract;

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
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 */
class FHIRContractAction extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * True if the term prohibits the  action.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $doNotPerform = null;

    /**
     * Activity or service obligation to be done or not done, performed or not performed, effectuated or not by this Contract term.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Entity of the action.
     * @var \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractSubject[]
     */
    public $subject = array();

    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $intent = null;

    /**
     * Id [identifier??] of the clause or question text related to this action in the referenced form or QuestionnaireResponse.
     * @var \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public $linkId = array();

    /**
     * Current state of the term action.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $status = null;

    /**
     * Encounter or Episode with primary association to specified term activity.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     * @var \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public $contextLinkId = array();

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $occurrenceDateTime = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $occurrencePeriod = null;

    /**
     * @var \Fhir\V_400\FHIRResource\FHIRTiming
     */
    public $occurrenceTiming = null;

    /**
     * Who or what initiated the action and has responsibility for its activation.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $requester = array();

    /**
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     * @var \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public $requesterLinkId = array();

    /**
     * The type of individual that is desired or required to perform or not perform the action.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $performerType = array();

    /**
     * The type of role or competency of an individual desired or required to perform or not perform the action.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $performerRole = null;

    /**
     * Indicates who or what is being asked to perform (or not perform) the ction.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * Id [identifier??] of the clause or question text related to the reason type or reference of this  action in the referenced form or QuestionnaireResponse.
     * @var \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public $performerLinkId = array();

    /**
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = array();

    /**
     * Indicates another resource whose existence justifies permitting or not permitting this action.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $reasonReference = array();

    /**
     * Describes why the action is to be performed or not performed in textual form.
     * @var \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public $reason = array();

    /**
     * Id [identifier??] of the clause or question text related to the reason type or reference of this  action in the referenced form or QuestionnaireResponse.
     * @var \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public $reasonLinkId = array();

    /**
     * Comments made about the term action made by the requester, performer, subject or other participants.
     * @var \Fhir\V_400\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Security labels that protects the action.
     * @var \Fhir\V_400\FHIRElement\FHIRUnsignedInt[]
     */
    public $securityLabelNumber = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Contract.Action';

    /**
     * True if the term prohibits the  action.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }

    /**
     * True if the term prohibits the  action.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $doNotPerform
     * @return $this
     */
    public function setDoNotPerform($doNotPerform)
    {
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * Activity or service obligation to be done or not done, performed or not performed, effectuated or not by this Contract term.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Activity or service obligation to be done or not done, performed or not performed, effectuated or not by this Contract term.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Entity of the action.
     * @return \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractSubject[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Entity of the action.
     * @param \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractSubject $subject
     * @return $this
     */
    public function addSubject($subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $intent
     * @return $this
     */
    public function setIntent($intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Id [identifier??] of the clause or question text related to this action in the referenced form or QuestionnaireResponse.
     * @return \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Id [identifier??] of the clause or question text related to this action in the referenced form or QuestionnaireResponse.
     * @param \Fhir\V_400\FHIRElement\FHIRString $linkId
     * @return $this
     */
    public function addLinkId($linkId)
    {
        $this->linkId[] = $linkId;
        return $this;
    }

    /**
     * Current state of the term action.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Current state of the term action.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Encounter or Episode with primary association to specified term activity.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Encounter or Episode with primary association to specified term activity.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     * @return \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public function getContextLinkId()
    {
        return $this->contextLinkId;
    }

    /**
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     * @param \Fhir\V_400\FHIRElement\FHIRString $contextLinkId
     * @return $this
     */
    public function addContextLinkId($contextLinkId)
    {
        $this->contextLinkId[] = $contextLinkId;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return $this
     */
    public function setOccurrenceDateTime($occurrenceDateTime)
    {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $occurrencePeriod
     * @return $this
     */
    public function setOccurrencePeriod($occurrencePeriod)
    {
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRResource\FHIRTiming
     */
    public function getOccurrenceTiming()
    {
        return $this->occurrenceTiming;
    }

    /**
     * @param \Fhir\V_400\FHIRResource\FHIRTiming $occurrenceTiming
     * @return $this
     */
    public function setOccurrenceTiming($occurrenceTiming)
    {
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * Who or what initiated the action and has responsibility for its activation.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * Who or what initiated the action and has responsibility for its activation.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $requester
     * @return $this
     */
    public function addRequester($requester)
    {
        $this->requester[] = $requester;
        return $this;
    }

    /**
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     * @return \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public function getRequesterLinkId()
    {
        return $this->requesterLinkId;
    }

    /**
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     * @param \Fhir\V_400\FHIRElement\FHIRString $requesterLinkId
     * @return $this
     */
    public function addRequesterLinkId($requesterLinkId)
    {
        $this->requesterLinkId[] = $requesterLinkId;
        return $this;
    }

    /**
     * The type of individual that is desired or required to perform or not perform the action.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }

    /**
     * The type of individual that is desired or required to perform or not perform the action.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $performerType
     * @return $this
     */
    public function addPerformerType($performerType)
    {
        $this->performerType[] = $performerType;
        return $this;
    }

    /**
     * The type of role or competency of an individual desired or required to perform or not perform the action.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getPerformerRole()
    {
        return $this->performerRole;
    }

    /**
     * The type of role or competency of an individual desired or required to perform or not perform the action.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $performerRole
     * @return $this
     */
    public function setPerformerRole($performerRole)
    {
        $this->performerRole = $performerRole;
        return $this;
    }

    /**
     * Indicates who or what is being asked to perform (or not perform) the ction.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Indicates who or what is being asked to perform (or not perform) the ction.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $performer
     * @return $this
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Id [identifier??] of the clause or question text related to the reason type or reference of this  action in the referenced form or QuestionnaireResponse.
     * @return \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public function getPerformerLinkId()
    {
        return $this->performerLinkId;
    }

    /**
     * Id [identifier??] of the clause or question text related to the reason type or reference of this  action in the referenced form or QuestionnaireResponse.
     * @param \Fhir\V_400\FHIRElement\FHIRString $performerLinkId
     * @return $this
     */
    public function addPerformerLinkId($performerLinkId)
    {
        $this->performerLinkId[] = $performerLinkId;
        return $this;
    }

    /**
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Indicates another resource whose existence justifies permitting or not permitting this action.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Indicates another resource whose existence justifies permitting or not permitting this action.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function addReasonReference($reasonReference)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * Describes why the action is to be performed or not performed in textual form.
     * @return \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Describes why the action is to be performed or not performed in textual form.
     * @param \Fhir\V_400\FHIRElement\FHIRString $reason
     * @return $this
     */
    public function addReason($reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * Id [identifier??] of the clause or question text related to the reason type or reference of this  action in the referenced form or QuestionnaireResponse.
     * @return \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public function getReasonLinkId()
    {
        return $this->reasonLinkId;
    }

    /**
     * Id [identifier??] of the clause or question text related to the reason type or reference of this  action in the referenced form or QuestionnaireResponse.
     * @param \Fhir\V_400\FHIRElement\FHIRString $reasonLinkId
     * @return $this
     */
    public function addReasonLinkId($reasonLinkId)
    {
        $this->reasonLinkId[] = $reasonLinkId;
        return $this;
    }

    /**
     * Comments made about the term action made by the requester, performer, subject or other participants.
     * @return \Fhir\V_400\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Comments made about the term action made by the requester, performer, subject or other participants.
     * @param \Fhir\V_400\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Security labels that protects the action.
     * @return \Fhir\V_400\FHIRElement\FHIRUnsignedInt[]
     */
    public function getSecurityLabelNumber()
    {
        return $this->securityLabelNumber;
    }

    /**
     * Security labels that protects the action.
     * @param \Fhir\V_400\FHIRElement\FHIRUnsignedInt $securityLabelNumber
     * @return $this
     */
    public function addSecurityLabelNumber($securityLabelNumber)
    {
        $this->securityLabelNumber[] = $securityLabelNumber;
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
        if (null !== $this->doNotPerform) $json['doNotPerform'] = $this->doNotPerform;
        if (null !== $this->type) $json['type'] = $this->type;
        if (0 < count($this->subject)) {
            $json['subject'] = [];
            foreach($this->subject as $subject) {
                $json['subject'][] = $subject;
            }
        }
        if (null !== $this->intent) $json['intent'] = $this->intent;
        if (0 < count($this->linkId)) {
            $json['linkId'] = [];
            foreach($this->linkId as $linkId) {
                $json['linkId'][] = $linkId;
            }
        }
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->context) $json['context'] = $this->context;
        if (0 < count($this->contextLinkId)) {
            $json['contextLinkId'] = [];
            foreach($this->contextLinkId as $contextLinkId) {
                $json['contextLinkId'][] = $contextLinkId;
            }
        }
        if (null !== $this->occurrenceDateTime) $json['occurrenceDateTime'] = $this->occurrenceDateTime;
        if (null !== $this->occurrencePeriod) $json['occurrencePeriod'] = $this->occurrencePeriod;
        if (null !== $this->occurrenceTiming) $json['occurrenceTiming'] = $this->occurrenceTiming;
        if (0 < count($this->requester)) {
            $json['requester'] = [];
            foreach($this->requester as $requester) {
                $json['requester'][] = $requester;
            }
        }
        if (0 < count($this->requesterLinkId)) {
            $json['requesterLinkId'] = [];
            foreach($this->requesterLinkId as $requesterLinkId) {
                $json['requesterLinkId'][] = $requesterLinkId;
            }
        }
        if (0 < count($this->performerType)) {
            $json['performerType'] = [];
            foreach($this->performerType as $performerType) {
                $json['performerType'][] = $performerType;
            }
        }
        if (null !== $this->performerRole) $json['performerRole'] = $this->performerRole;
        if (null !== $this->performer) $json['performer'] = $this->performer;
        if (0 < count($this->performerLinkId)) {
            $json['performerLinkId'] = [];
            foreach($this->performerLinkId as $performerLinkId) {
                $json['performerLinkId'][] = $performerLinkId;
            }
        }
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
        if (0 < count($this->reason)) {
            $json['reason'] = [];
            foreach($this->reason as $reason) {
                $json['reason'][] = $reason;
            }
        }
        if (0 < count($this->reasonLinkId)) {
            $json['reasonLinkId'] = [];
            foreach($this->reasonLinkId as $reasonLinkId) {
                $json['reasonLinkId'][] = $reasonLinkId;
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = $note;
            }
        }
        if (0 < count($this->securityLabelNumber)) {
            $json['securityLabelNumber'] = [];
            foreach($this->securityLabelNumber as $securityLabelNumber) {
                $json['securityLabelNumber'][] = $securityLabelNumber;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ContractAction xmlns="http://hl7.org/fhir"></ContractAction>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->doNotPerform) $this->doNotPerform->xmlSerialize(true, $sxe->addChild('doNotPerform'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->subject)) {
            foreach($this->subject as $subject) {
                $subject->xmlSerialize(true, $sxe->addChild('subject'));
            }
        }
        if (null !== $this->intent) $this->intent->xmlSerialize(true, $sxe->addChild('intent'));
        if (0 < count($this->linkId)) {
            foreach($this->linkId as $linkId) {
                $linkId->xmlSerialize(true, $sxe->addChild('linkId'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->context) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (0 < count($this->contextLinkId)) {
            foreach($this->contextLinkId as $contextLinkId) {
                $contextLinkId->xmlSerialize(true, $sxe->addChild('contextLinkId'));
            }
        }
        if (null !== $this->occurrenceDateTime) $this->occurrenceDateTime->xmlSerialize(true, $sxe->addChild('occurrenceDateTime'));
        if (null !== $this->occurrencePeriod) $this->occurrencePeriod->xmlSerialize(true, $sxe->addChild('occurrencePeriod'));
        if (null !== $this->occurrenceTiming) $this->occurrenceTiming->xmlSerialize(true, $sxe->addChild('occurrenceTiming'));
        if (0 < count($this->requester)) {
            foreach($this->requester as $requester) {
                $requester->xmlSerialize(true, $sxe->addChild('requester'));
            }
        }
        if (0 < count($this->requesterLinkId)) {
            foreach($this->requesterLinkId as $requesterLinkId) {
                $requesterLinkId->xmlSerialize(true, $sxe->addChild('requesterLinkId'));
            }
        }
        if (0 < count($this->performerType)) {
            foreach($this->performerType as $performerType) {
                $performerType->xmlSerialize(true, $sxe->addChild('performerType'));
            }
        }
        if (null !== $this->performerRole) $this->performerRole->xmlSerialize(true, $sxe->addChild('performerRole'));
        if (null !== $this->performer) $this->performer->xmlSerialize(true, $sxe->addChild('performer'));
        if (0 < count($this->performerLinkId)) {
            foreach($this->performerLinkId as $performerLinkId) {
                $performerLinkId->xmlSerialize(true, $sxe->addChild('performerLinkId'));
            }
        }
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
        if (0 < count($this->reason)) {
            foreach($this->reason as $reason) {
                $reason->xmlSerialize(true, $sxe->addChild('reason'));
            }
        }
        if (0 < count($this->reasonLinkId)) {
            foreach($this->reasonLinkId as $reasonLinkId) {
                $reasonLinkId->xmlSerialize(true, $sxe->addChild('reasonLinkId'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->securityLabelNumber)) {
            foreach($this->securityLabelNumber as $securityLabelNumber) {
                $securityLabelNumber->xmlSerialize(true, $sxe->addChild('securityLabelNumber'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}