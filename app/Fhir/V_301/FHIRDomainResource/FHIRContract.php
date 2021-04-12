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
 * A formal agreement between parties regarding the conduct of business, exchange of information or other matters.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRContract extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Unique identifier for this Contract.
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The status of the resource instance.
     * @var \Fhir\V_301\FHIRElement\FHIRContractResourceStatusCodes
     */
    public $status = null;

    /**
     * When this  Contract was issued.
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $issued = null;

    /**
     * Relevant time or time-period when this Contract is applicable.
     * @var \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public $applies = null;

    /**
     * The target entity impacted by or of interest to parties to the agreement.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $subject = array();

    /**
     * The matter of concern in the context of this agreement.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $topic = array();

    /**
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $authority = array();

    /**
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $domain = array();

    /**
     * Type of Contract such as an insurance policy, real estate contract, a will, power of attorny, Privacy or Security policy , trust framework agreement, etc.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * More specific type or specialization of an overarching or more general contract such as auto insurance, home owner  insurance, prenupial agreement, Advanced-Directive, or privacy consent.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $subType = array();

    /**
     * Action stipulated by this Contract.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $action = array();

    /**
     * Reason for action stipulated by this Contract.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $actionReason = array();

    /**
     * The type of decision made by a grantor with respect to an offer made by a grantee.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $decisionType = null;

    /**
     * The minimal content derived from the basal information source at a specific stage in its lifecycle.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $contentDerivative = null;

    /**
     * A set of security labels that define which resources are controlled by this consent. If more than one label is specified, all resources must have all the specified labels.
     * @var \Fhir\V_301\FHIRElement\FHIRCoding[]
     */
    public $securityLabel = array();

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     * @var \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractAgent[]
     */
    public $agent = array();

    /**
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     * @var \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractSigner[]
     */
    public $signer = array();

    /**
     * Contract Valued Item List.
     * @var \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractValuedItem[]
     */
    public $valuedItem = array();

    /**
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     * @var \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractTerm[]
     */
    public $term = array();

    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract. (choose any one of binding*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRAttachment
     */
    public $bindingAttachment = null;

    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract. (choose any one of binding*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $bindingReference = null;

    /**
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     * @var \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractFriendly[]
     */
    public $friendly = array();

    /**
     * List of Legal expressions or representations of this Contract.
     * @var \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractLegal[]
     */
    public $legal = array();

    /**
     * List of Computable Policy Rule Language Representations of this Contract.
     * @var \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractRule[]
     */
    public $rule = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Contract';

    /**
     * Unique identifier for this Contract.
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Unique identifier for this Contract.
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The status of the resource instance.
     * @return \Fhir\V_301\FHIRElement\FHIRContractResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the resource instance.
     * @param \Fhir\V_301\FHIRElement\FHIRContractResourceStatusCodes $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * When this  Contract was issued.
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * When this  Contract was issued.
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $issued
     * @return $this
     */
    public function setIssued($issued)
    {
        $this->issued = $issued;
        return $this;
    }

    /**
     * Relevant time or time-period when this Contract is applicable.
     * @return \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public function getApplies()
    {
        return $this->applies;
    }

    /**
     * Relevant time or time-period when this Contract is applicable.
     * @param \Fhir\V_301\FHIRElement\FHIRPeriod $applies
     * @return $this
     */
    public function setApplies($applies)
    {
        $this->applies = $applies;
        return $this;
    }

    /**
     * The target entity impacted by or of interest to parties to the agreement.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The target entity impacted by or of interest to parties to the agreement.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function addSubject($subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * The matter of concern in the context of this agreement.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * The matter of concern in the context of this agreement.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $topic
     * @return $this
     */
    public function addTopic($topic)
    {
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $authority
     * @return $this
     */
    public function addAuthority($authority)
    {
        $this->authority[] = $authority;
        return $this;
    }

    /**
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $domain
     * @return $this
     */
    public function addDomain($domain)
    {
        $this->domain[] = $domain;
        return $this;
    }

    /**
     * Type of Contract such as an insurance policy, real estate contract, a will, power of attorny, Privacy or Security policy , trust framework agreement, etc.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of Contract such as an insurance policy, real estate contract, a will, power of attorny, Privacy or Security policy , trust framework agreement, etc.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * More specific type or specialization of an overarching or more general contract such as auto insurance, home owner  insurance, prenupial agreement, Advanced-Directive, or privacy consent.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * More specific type or specialization of an overarching or more general contract such as auto insurance, home owner  insurance, prenupial agreement, Advanced-Directive, or privacy consent.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $subType
     * @return $this
     */
    public function addSubType($subType)
    {
        $this->subType[] = $subType;
        return $this;
    }

    /**
     * Action stipulated by this Contract.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Action stipulated by this Contract.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $action
     * @return $this
     */
    public function addAction($action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * Reason for action stipulated by this Contract.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getActionReason()
    {
        return $this->actionReason;
    }

    /**
     * Reason for action stipulated by this Contract.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $actionReason
     * @return $this
     */
    public function addActionReason($actionReason)
    {
        $this->actionReason[] = $actionReason;
        return $this;
    }

    /**
     * The type of decision made by a grantor with respect to an offer made by a grantee.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getDecisionType()
    {
        return $this->decisionType;
    }

    /**
     * The type of decision made by a grantor with respect to an offer made by a grantee.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $decisionType
     * @return $this
     */
    public function setDecisionType($decisionType)
    {
        $this->decisionType = $decisionType;
        return $this;
    }

    /**
     * The minimal content derived from the basal information source at a specific stage in its lifecycle.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getContentDerivative()
    {
        return $this->contentDerivative;
    }

    /**
     * The minimal content derived from the basal information source at a specific stage in its lifecycle.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $contentDerivative
     * @return $this
     */
    public function setContentDerivative($contentDerivative)
    {
        $this->contentDerivative = $contentDerivative;
        return $this;
    }

    /**
     * A set of security labels that define which resources are controlled by this consent. If more than one label is specified, all resources must have all the specified labels.
     * @return \Fhir\V_301\FHIRElement\FHIRCoding[]
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }

    /**
     * A set of security labels that define which resources are controlled by this consent. If more than one label is specified, all resources must have all the specified labels.
     * @param \Fhir\V_301\FHIRElement\FHIRCoding $securityLabel
     * @return $this
     */
    public function addSecurityLabel($securityLabel)
    {
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     * @return \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractAgent[]
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     * @param \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractAgent $agent
     * @return $this
     */
    public function addAgent($agent)
    {
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     * @return \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractSigner[]
     */
    public function getSigner()
    {
        return $this->signer;
    }

    /**
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     * @param \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractSigner $signer
     * @return $this
     */
    public function addSigner($signer)
    {
        $this->signer[] = $signer;
        return $this;
    }

    /**
     * Contract Valued Item List.
     * @return \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractValuedItem[]
     */
    public function getValuedItem()
    {
        return $this->valuedItem;
    }

    /**
     * Contract Valued Item List.
     * @param \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractValuedItem $valuedItem
     * @return $this
     */
    public function addValuedItem($valuedItem)
    {
        $this->valuedItem[] = $valuedItem;
        return $this;
    }

    /**
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     * @return \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractTerm[]
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     * @param \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractTerm $term
     * @return $this
     */
    public function addTerm($term)
    {
        $this->term[] = $term;
        return $this;
    }

    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract. (choose any one of binding*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRAttachment
     */
    public function getBindingAttachment()
    {
        return $this->bindingAttachment;
    }

    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract. (choose any one of binding*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRAttachment $bindingAttachment
     * @return $this
     */
    public function setBindingAttachment($bindingAttachment)
    {
        $this->bindingAttachment = $bindingAttachment;
        return $this;
    }

    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract. (choose any one of binding*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getBindingReference()
    {
        return $this->bindingReference;
    }

    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract. (choose any one of binding*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRReference $bindingReference
     * @return $this
     */
    public function setBindingReference($bindingReference)
    {
        $this->bindingReference = $bindingReference;
        return $this;
    }

    /**
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     * @return \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractFriendly[]
     */
    public function getFriendly()
    {
        return $this->friendly;
    }

    /**
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     * @param \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractFriendly $friendly
     * @return $this
     */
    public function addFriendly($friendly)
    {
        $this->friendly[] = $friendly;
        return $this;
    }

    /**
     * List of Legal expressions or representations of this Contract.
     * @return \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractLegal[]
     */
    public function getLegal()
    {
        return $this->legal;
    }

    /**
     * List of Legal expressions or representations of this Contract.
     * @param \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractLegal $legal
     * @return $this
     */
    public function addLegal($legal)
    {
        $this->legal[] = $legal;
        return $this;
    }

    /**
     * List of Computable Policy Rule Language Representations of this Contract.
     * @return \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractRule[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * List of Computable Policy Rule Language Representations of this Contract.
     * @param \Fhir\V_301\FHIRResource\FHIRContract\FHIRContractRule $rule
     * @return $this
     */
    public function addRule($rule)
    {
        $this->rule[] = $rule;
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
        if (null !== $this->identifier) $json['identifier'] = $this->identifier;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->issued) $json['issued'] = $this->issued;
        if (null !== $this->applies) $json['applies'] = $this->applies;
        if (0 < count($this->subject)) {
            $json['subject'] = [];
            foreach($this->subject as $subject) {
                $json['subject'][] = $subject;
            }
        }
        if (0 < count($this->topic)) {
            $json['topic'] = [];
            foreach($this->topic as $topic) {
                $json['topic'][] = $topic;
            }
        }
        if (0 < count($this->authority)) {
            $json['authority'] = [];
            foreach($this->authority as $authority) {
                $json['authority'][] = $authority;
            }
        }
        if (0 < count($this->domain)) {
            $json['domain'] = [];
            foreach($this->domain as $domain) {
                $json['domain'][] = $domain;
            }
        }
        if (null !== $this->type) $json['type'] = $this->type;
        if (0 < count($this->subType)) {
            $json['subType'] = [];
            foreach($this->subType as $subType) {
                $json['subType'][] = $subType;
            }
        }
        if (0 < count($this->action)) {
            $json['action'] = [];
            foreach($this->action as $action) {
                $json['action'][] = $action;
            }
        }
        if (0 < count($this->actionReason)) {
            $json['actionReason'] = [];
            foreach($this->actionReason as $actionReason) {
                $json['actionReason'][] = $actionReason;
            }
        }
        if (null !== $this->decisionType) $json['decisionType'] = $this->decisionType;
        if (null !== $this->contentDerivative) $json['contentDerivative'] = $this->contentDerivative;
        if (0 < count($this->securityLabel)) {
            $json['securityLabel'] = [];
            foreach($this->securityLabel as $securityLabel) {
                $json['securityLabel'][] = $securityLabel;
            }
        }
        if (0 < count($this->agent)) {
            $json['agent'] = [];
            foreach($this->agent as $agent) {
                $json['agent'][] = $agent;
            }
        }
        if (0 < count($this->signer)) {
            $json['signer'] = [];
            foreach($this->signer as $signer) {
                $json['signer'][] = $signer;
            }
        }
        if (0 < count($this->valuedItem)) {
            $json['valuedItem'] = [];
            foreach($this->valuedItem as $valuedItem) {
                $json['valuedItem'][] = $valuedItem;
            }
        }
        if (0 < count($this->term)) {
            $json['term'] = [];
            foreach($this->term as $term) {
                $json['term'][] = $term;
            }
        }
        if (null !== $this->bindingAttachment) $json['bindingAttachment'] = $this->bindingAttachment;
        if (null !== $this->bindingReference) $json['bindingReference'] = $this->bindingReference;
        if (0 < count($this->friendly)) {
            $json['friendly'] = [];
            foreach($this->friendly as $friendly) {
                $json['friendly'][] = $friendly;
            }
        }
        if (0 < count($this->legal)) {
            $json['legal'] = [];
            foreach($this->legal as $legal) {
                $json['legal'][] = $legal;
            }
        }
        if (0 < count($this->rule)) {
            $json['rule'] = [];
            foreach($this->rule as $rule) {
                $json['rule'][] = $rule;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Contract xmlns="http://hl7.org/fhir"></Contract>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->issued) $this->issued->xmlSerialize(true, $sxe->addChild('issued'));
        if (null !== $this->applies) $this->applies->xmlSerialize(true, $sxe->addChild('applies'));
        if (0 < count($this->subject)) {
            foreach($this->subject as $subject) {
                $subject->xmlSerialize(true, $sxe->addChild('subject'));
            }
        }
        if (0 < count($this->topic)) {
            foreach($this->topic as $topic) {
                $topic->xmlSerialize(true, $sxe->addChild('topic'));
            }
        }
        if (0 < count($this->authority)) {
            foreach($this->authority as $authority) {
                $authority->xmlSerialize(true, $sxe->addChild('authority'));
            }
        }
        if (0 < count($this->domain)) {
            foreach($this->domain as $domain) {
                $domain->xmlSerialize(true, $sxe->addChild('domain'));
            }
        }
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->subType)) {
            foreach($this->subType as $subType) {
                $subType->xmlSerialize(true, $sxe->addChild('subType'));
            }
        }
        if (0 < count($this->action)) {
            foreach($this->action as $action) {
                $action->xmlSerialize(true, $sxe->addChild('action'));
            }
        }
        if (0 < count($this->actionReason)) {
            foreach($this->actionReason as $actionReason) {
                $actionReason->xmlSerialize(true, $sxe->addChild('actionReason'));
            }
        }
        if (null !== $this->decisionType) $this->decisionType->xmlSerialize(true, $sxe->addChild('decisionType'));
        if (null !== $this->contentDerivative) $this->contentDerivative->xmlSerialize(true, $sxe->addChild('contentDerivative'));
        if (0 < count($this->securityLabel)) {
            foreach($this->securityLabel as $securityLabel) {
                $securityLabel->xmlSerialize(true, $sxe->addChild('securityLabel'));
            }
        }
        if (0 < count($this->agent)) {
            foreach($this->agent as $agent) {
                $agent->xmlSerialize(true, $sxe->addChild('agent'));
            }
        }
        if (0 < count($this->signer)) {
            foreach($this->signer as $signer) {
                $signer->xmlSerialize(true, $sxe->addChild('signer'));
            }
        }
        if (0 < count($this->valuedItem)) {
            foreach($this->valuedItem as $valuedItem) {
                $valuedItem->xmlSerialize(true, $sxe->addChild('valuedItem'));
            }
        }
        if (0 < count($this->term)) {
            foreach($this->term as $term) {
                $term->xmlSerialize(true, $sxe->addChild('term'));
            }
        }
        if (null !== $this->bindingAttachment) $this->bindingAttachment->xmlSerialize(true, $sxe->addChild('bindingAttachment'));
        if (null !== $this->bindingReference) $this->bindingReference->xmlSerialize(true, $sxe->addChild('bindingReference'));
        if (0 < count($this->friendly)) {
            foreach($this->friendly as $friendly) {
                $friendly->xmlSerialize(true, $sxe->addChild('friendly'));
            }
        }
        if (0 < count($this->legal)) {
            foreach($this->legal as $legal) {
                $legal->xmlSerialize(true, $sxe->addChild('legal'));
            }
        }
        if (0 < count($this->rule)) {
            foreach($this->rule as $rule) {
                $rule->xmlSerialize(true, $sxe->addChild('rule'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}