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
class FHIRContractOffer extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Unique identifier for this particular Contract Provision.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Offer Recipient.
     * @var \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractParty[]
     */
    public $party = array();

    /**
     * The owner of an asset has the residual control rights over the asset: the right to decide all usages of the asset in any way not inconsistent with a prior contract, custom, or law (Hart, 1995, p. 30).
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $topic = null;

    /**
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Type of choice made by accepting party with respect to an offer made by an offeror/ grantee.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $decision = null;

    /**
     * How the decision about a Contract was conveyed.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $decisionMode = array();

    /**
     * Response to offer text.
     * @var \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractAnswer[]
     */
    public $answer = array();

    /**
     * Human readable form of this Contract Offer.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * The id of the clause or question text of the offer in the referenced questionnaire/response.
     * @var \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public $linkId = array();

    /**
     * Security labels that protects the offer.
     * @var \Fhir\V_400\FHIRElement\FHIRUnsignedInt[]
     */
    public $securityLabelNumber = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Contract.Offer';

    /**
     * Unique identifier for this particular Contract Provision.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Unique identifier for this particular Contract Provision.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Offer Recipient.
     * @return \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractParty[]
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Offer Recipient.
     * @param \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractParty $party
     * @return $this
     */
    public function addParty($party)
    {
        $this->party[] = $party;
        return $this;
    }

    /**
     * The owner of an asset has the residual control rights over the asset: the right to decide all usages of the asset in any way not inconsistent with a prior contract, custom, or law (Hart, 1995, p. 30).
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * The owner of an asset has the residual control rights over the asset: the right to decide all usages of the asset in any way not inconsistent with a prior contract, custom, or law (Hart, 1995, p. 30).
     * @param \Fhir\V_400\FHIRElement\FHIRReference $topic
     * @return $this
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Type of choice made by accepting party with respect to an offer made by an offeror/ grantee.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * Type of choice made by accepting party with respect to an offer made by an offeror/ grantee.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $decision
     * @return $this
     */
    public function setDecision($decision)
    {
        $this->decision = $decision;
        return $this;
    }

    /**
     * How the decision about a Contract was conveyed.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getDecisionMode()
    {
        return $this->decisionMode;
    }

    /**
     * How the decision about a Contract was conveyed.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $decisionMode
     * @return $this
     */
    public function addDecisionMode($decisionMode)
    {
        $this->decisionMode[] = $decisionMode;
        return $this;
    }

    /**
     * Response to offer text.
     * @return \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractAnswer[]
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Response to offer text.
     * @param \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractAnswer $answer
     * @return $this
     */
    public function addAnswer($answer)
    {
        $this->answer[] = $answer;
        return $this;
    }

    /**
     * Human readable form of this Contract Offer.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Human readable form of this Contract Offer.
     * @param \Fhir\V_400\FHIRElement\FHIRString $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * The id of the clause or question text of the offer in the referenced questionnaire/response.
     * @return \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * The id of the clause or question text of the offer in the referenced questionnaire/response.
     * @param \Fhir\V_400\FHIRElement\FHIRString $linkId
     * @return $this
     */
    public function addLinkId($linkId)
    {
        $this->linkId[] = $linkId;
        return $this;
    }

    /**
     * Security labels that protects the offer.
     * @return \Fhir\V_400\FHIRElement\FHIRUnsignedInt[]
     */
    public function getSecurityLabelNumber()
    {
        return $this->securityLabelNumber;
    }

    /**
     * Security labels that protects the offer.
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
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (0 < count($this->party)) {
            $json['party'] = [];
            foreach($this->party as $party) {
                $json['party'][] = $party;
            }
        }
        if (null !== $this->topic) $json['topic'] = $this->topic;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->decision) $json['decision'] = $this->decision;
        if (0 < count($this->decisionMode)) {
            $json['decisionMode'] = [];
            foreach($this->decisionMode as $decisionMode) {
                $json['decisionMode'][] = $decisionMode;
            }
        }
        if (0 < count($this->answer)) {
            $json['answer'] = [];
            foreach($this->answer as $answer) {
                $json['answer'][] = $answer;
            }
        }
        if (null !== $this->text) $json['text'] = $this->text;
        if (0 < count($this->linkId)) {
            $json['linkId'] = [];
            foreach($this->linkId as $linkId) {
                $json['linkId'][] = $linkId;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ContractOffer xmlns="http://hl7.org/fhir"></ContractOffer>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->party)) {
            foreach($this->party as $party) {
                $party->xmlSerialize(true, $sxe->addChild('party'));
            }
        }
        if (null !== $this->topic) $this->topic->xmlSerialize(true, $sxe->addChild('topic'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->decision) $this->decision->xmlSerialize(true, $sxe->addChild('decision'));
        if (0 < count($this->decisionMode)) {
            foreach($this->decisionMode as $decisionMode) {
                $decisionMode->xmlSerialize(true, $sxe->addChild('decisionMode'));
            }
        }
        if (0 < count($this->answer)) {
            foreach($this->answer as $answer) {
                $answer->xmlSerialize(true, $sxe->addChild('answer'));
            }
        }
        if (null !== $this->text) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (0 < count($this->linkId)) {
            foreach($this->linkId as $linkId) {
                $linkId->xmlSerialize(true, $sxe->addChild('linkId'));
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