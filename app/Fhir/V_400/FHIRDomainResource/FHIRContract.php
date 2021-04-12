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
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRContract extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Unique identifier for this Contract or a derivative that references a Source Contract.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Canonical identifier for this contract, represented as a URI (globally unique).
     * @var \Fhir\V_400\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * An edition identifier used for business purposes to label business significant variants.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * The status of the resource instance.
     * @var \Fhir\V_400\FHIRElement\FHIRContractResourceStatusCodes
     */
    public $status = null;

    /**
     * Legal states of the formation of a legal instrument, which is a formally executed written document that can be formally attributed to its author, records and formally expresses a legally enforceable act, process, or contractual duty, obligation, or right, and therefore evidences that act, process, or agreement.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $legalState = null;

    /**
     * The URL pointing to a FHIR-defined Contract Definition that is adhered to in whole or part by this Contract.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained definition that is adhered to in whole or in part by this Contract.
     * @var \Fhir\V_400\FHIRElement\FHIRUri
     */
    public $instantiatesUri = null;

    /**
     * The minimal content derived from the basal information source at a specific stage in its lifecycle.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $contentDerivative = null;

    /**
     * When this  Contract was issued.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $issued = null;

    /**
     * Relevant time or time-period when this Contract is applicable.
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $applies = null;

    /**
     * Event resulting in discontinuation or termination of this Contract instance by one or more parties to the contract.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $expirationType = null;

    /**
     * The target entity impacted by or of interest to parties to the agreement.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $subject = array();

    /**
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $authority = array();

    /**
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $domain = array();

    /**
     * Sites in which the contract is complied with,  exercised, or in force.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $site = array();

    /**
     * A natural language name identifying this Contract definition, derivative, or instance in any legal state. Provides additional information about its content. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A short, descriptive, user-friendly title for this Contract definition, derivative, or instance in any legal state.t giving additional information about its content.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * An explanatory or alternate user-friendly title for this Contract definition, derivative, or instance in any legal state.t giving additional information about its content.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $subtitle = null;

    /**
     * Alternative representation of the title for this Contract definition, derivative, or instance in any legal state., e.g., a domain specific contract number related to legislation.
     * @var \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public $alias = array();

    /**
     * The individual or organization that authored the Contract definition, derivative, or instance in any legal state.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * A selector of legal concerns for this Contract definition, derivative, or instance in any legal state.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $scope = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $topicCodeableConcept = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $topicReference = null;

    /**
     * A high-level category for the legal instrument, whether constructed as a Contract definition, derivative, or instance in any legal state.  Provides additional information about its content within the context of the Contract's scope to distinguish the kinds of systems that would be interested in the contract.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Sub-category for the Contract that distinguishes the kinds of systems that would be interested in the Contract within the context of the Contract's scope.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $subType = array();

    /**
     * Precusory content developed with a focus and intent of supporting the formation a Contract instance, which may be associated with and transformable into a Contract.
     * @var \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractContentDefinition
     */
    public $contentDefinition = null;

    /**
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     * @var \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractTerm[]
     */
    public $term = array();

    /**
     * Information that may be needed by/relevant to the performer in their execution of this term action.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $supportingInfo = array();

    /**
     * Links to Provenance records for past versions of this Contract definition, derivative, or instance, which identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the Contract.  The Provence.entity indicates the target that was changed in the update. http://build.fhir.org/provenance-definitions.html#Provenance.entity.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $relevantHistory = array();

    /**
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     * @var \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractSigner[]
     */
    public $signer = array();

    /**
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     * @var \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractFriendly[]
     */
    public $friendly = array();

    /**
     * List of Legal expressions or representations of this Contract.
     * @var \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractLegal[]
     */
    public $legal = array();

    /**
     * List of Computable Policy Rule Language Representations of this Contract.
     * @var \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractRule[]
     */
    public $rule = array();

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRAttachment
     */
    public $legallyBindingAttachment = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $legallyBindingReference = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Contract';

    /**
     * Unique identifier for this Contract or a derivative that references a Source Contract.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Unique identifier for this Contract or a derivative that references a Source Contract.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Canonical identifier for this contract, represented as a URI (globally unique).
     * @return \Fhir\V_400\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Canonical identifier for this contract, represented as a URI (globally unique).
     * @param \Fhir\V_400\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * An edition identifier used for business purposes to label business significant variants.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * An edition identifier used for business purposes to label business significant variants.
     * @param \Fhir\V_400\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * The status of the resource instance.
     * @return \Fhir\V_400\FHIRElement\FHIRContractResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the resource instance.
     * @param \Fhir\V_400\FHIRElement\FHIRContractResourceStatusCodes $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Legal states of the formation of a legal instrument, which is a formally executed written document that can be formally attributed to its author, records and formally expresses a legally enforceable act, process, or contractual duty, obligation, or right, and therefore evidences that act, process, or agreement.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getLegalState()
    {
        return $this->legalState;
    }

    /**
     * Legal states of the formation of a legal instrument, which is a formally executed written document that can be formally attributed to its author, records and formally expresses a legally enforceable act, process, or contractual duty, obligation, or right, and therefore evidences that act, process, or agreement.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $legalState
     * @return $this
     */
    public function setLegalState($legalState)
    {
        $this->legalState = $legalState;
        return $this;
    }

    /**
     * The URL pointing to a FHIR-defined Contract Definition that is adhered to in whole or part by this Contract.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * The URL pointing to a FHIR-defined Contract Definition that is adhered to in whole or part by this Contract.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $instantiatesCanonical
     * @return $this
     */
    public function setInstantiatesCanonical($instantiatesCanonical)
    {
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * The URL pointing to an externally maintained definition that is adhered to in whole or in part by this Contract.
     * @return \Fhir\V_400\FHIRElement\FHIRUri
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * The URL pointing to an externally maintained definition that is adhered to in whole or in part by this Contract.
     * @param \Fhir\V_400\FHIRElement\FHIRUri $instantiatesUri
     * @return $this
     */
    public function setInstantiatesUri($instantiatesUri)
    {
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * The minimal content derived from the basal information source at a specific stage in its lifecycle.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getContentDerivative()
    {
        return $this->contentDerivative;
    }

    /**
     * The minimal content derived from the basal information source at a specific stage in its lifecycle.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $contentDerivative
     * @return $this
     */
    public function setContentDerivative($contentDerivative)
    {
        $this->contentDerivative = $contentDerivative;
        return $this;
    }

    /**
     * When this  Contract was issued.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * When this  Contract was issued.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $issued
     * @return $this
     */
    public function setIssued($issued)
    {
        $this->issued = $issued;
        return $this;
    }

    /**
     * Relevant time or time-period when this Contract is applicable.
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getApplies()
    {
        return $this->applies;
    }

    /**
     * Relevant time or time-period when this Contract is applicable.
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $applies
     * @return $this
     */
    public function setApplies($applies)
    {
        $this->applies = $applies;
        return $this;
    }

    /**
     * Event resulting in discontinuation or termination of this Contract instance by one or more parties to the contract.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getExpirationType()
    {
        return $this->expirationType;
    }

    /**
     * Event resulting in discontinuation or termination of this Contract instance by one or more parties to the contract.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $expirationType
     * @return $this
     */
    public function setExpirationType($expirationType)
    {
        $this->expirationType = $expirationType;
        return $this;
    }

    /**
     * The target entity impacted by or of interest to parties to the agreement.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The target entity impacted by or of interest to parties to the agreement.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function addSubject($subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $authority
     * @return $this
     */
    public function addAuthority($authority)
    {
        $this->authority[] = $authority;
        return $this;
    }

    /**
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $domain
     * @return $this
     */
    public function addDomain($domain)
    {
        $this->domain[] = $domain;
        return $this;
    }

    /**
     * Sites in which the contract is complied with,  exercised, or in force.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sites in which the contract is complied with,  exercised, or in force.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $site
     * @return $this
     */
    public function addSite($site)
    {
        $this->site[] = $site;
        return $this;
    }

    /**
     * A natural language name identifying this Contract definition, derivative, or instance in any legal state. Provides additional information about its content. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A natural language name identifying this Contract definition, derivative, or instance in any legal state. Provides additional information about its content. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @param \Fhir\V_400\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A short, descriptive, user-friendly title for this Contract definition, derivative, or instance in any legal state.t giving additional information about its content.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A short, descriptive, user-friendly title for this Contract definition, derivative, or instance in any legal state.t giving additional information about its content.
     * @param \Fhir\V_400\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * An explanatory or alternate user-friendly title for this Contract definition, derivative, or instance in any legal state.t giving additional information about its content.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * An explanatory or alternate user-friendly title for this Contract definition, derivative, or instance in any legal state.t giving additional information about its content.
     * @param \Fhir\V_400\FHIRElement\FHIRString $subtitle
     * @return $this
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * Alternative representation of the title for this Contract definition, derivative, or instance in any legal state., e.g., a domain specific contract number related to legislation.
     * @return \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Alternative representation of the title for this Contract definition, derivative, or instance in any legal state., e.g., a domain specific contract number related to legislation.
     * @param \Fhir\V_400\FHIRElement\FHIRString $alias
     * @return $this
     */
    public function addAlias($alias)
    {
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * The individual or organization that authored the Contract definition, derivative, or instance in any legal state.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * The individual or organization that authored the Contract definition, derivative, or instance in any legal state.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * A selector of legal concerns for this Contract definition, derivative, or instance in any legal state.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * A selector of legal concerns for this Contract definition, derivative, or instance in any legal state.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $scope
     * @return $this
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getTopicCodeableConcept()
    {
        return $this->topicCodeableConcept;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $topicCodeableConcept
     * @return $this
     */
    public function setTopicCodeableConcept($topicCodeableConcept)
    {
        $this->topicCodeableConcept = $topicCodeableConcept;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getTopicReference()
    {
        return $this->topicReference;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRReference $topicReference
     * @return $this
     */
    public function setTopicReference($topicReference)
    {
        $this->topicReference = $topicReference;
        return $this;
    }

    /**
     * A high-level category for the legal instrument, whether constructed as a Contract definition, derivative, or instance in any legal state.  Provides additional information about its content within the context of the Contract's scope to distinguish the kinds of systems that would be interested in the contract.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A high-level category for the legal instrument, whether constructed as a Contract definition, derivative, or instance in any legal state.  Provides additional information about its content within the context of the Contract's scope to distinguish the kinds of systems that would be interested in the contract.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Sub-category for the Contract that distinguishes the kinds of systems that would be interested in the Contract within the context of the Contract's scope.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * Sub-category for the Contract that distinguishes the kinds of systems that would be interested in the Contract within the context of the Contract's scope.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $subType
     * @return $this
     */
    public function addSubType($subType)
    {
        $this->subType[] = $subType;
        return $this;
    }

    /**
     * Precusory content developed with a focus and intent of supporting the formation a Contract instance, which may be associated with and transformable into a Contract.
     * @return \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractContentDefinition
     */
    public function getContentDefinition()
    {
        return $this->contentDefinition;
    }

    /**
     * Precusory content developed with a focus and intent of supporting the formation a Contract instance, which may be associated with and transformable into a Contract.
     * @param \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractContentDefinition $contentDefinition
     * @return $this
     */
    public function setContentDefinition($contentDefinition)
    {
        $this->contentDefinition = $contentDefinition;
        return $this;
    }

    /**
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     * @return \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractTerm[]
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     * @param \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractTerm $term
     * @return $this
     */
    public function addTerm($term)
    {
        $this->term[] = $term;
        return $this;
    }

    /**
     * Information that may be needed by/relevant to the performer in their execution of this term action.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * Information that may be needed by/relevant to the performer in their execution of this term action.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $supportingInfo
     * @return $this
     */
    public function addSupportingInfo($supportingInfo)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * Links to Provenance records for past versions of this Contract definition, derivative, or instance, which identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the Contract.  The Provence.entity indicates the target that was changed in the update. http://build.fhir.org/provenance-definitions.html#Provenance.entity.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getRelevantHistory()
    {
        return $this->relevantHistory;
    }

    /**
     * Links to Provenance records for past versions of this Contract definition, derivative, or instance, which identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the Contract.  The Provence.entity indicates the target that was changed in the update. http://build.fhir.org/provenance-definitions.html#Provenance.entity.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $relevantHistory
     * @return $this
     */
    public function addRelevantHistory($relevantHistory)
    {
        $this->relevantHistory[] = $relevantHistory;
        return $this;
    }

    /**
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     * @return \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractSigner[]
     */
    public function getSigner()
    {
        return $this->signer;
    }

    /**
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     * @param \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractSigner $signer
     * @return $this
     */
    public function addSigner($signer)
    {
        $this->signer[] = $signer;
        return $this;
    }

    /**
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     * @return \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractFriendly[]
     */
    public function getFriendly()
    {
        return $this->friendly;
    }

    /**
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     * @param \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractFriendly $friendly
     * @return $this
     */
    public function addFriendly($friendly)
    {
        $this->friendly[] = $friendly;
        return $this;
    }

    /**
     * List of Legal expressions or representations of this Contract.
     * @return \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractLegal[]
     */
    public function getLegal()
    {
        return $this->legal;
    }

    /**
     * List of Legal expressions or representations of this Contract.
     * @param \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractLegal $legal
     * @return $this
     */
    public function addLegal($legal)
    {
        $this->legal[] = $legal;
        return $this;
    }

    /**
     * List of Computable Policy Rule Language Representations of this Contract.
     * @return \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractRule[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * List of Computable Policy Rule Language Representations of this Contract.
     * @param \Fhir\V_400\FHIRResource\FHIRContract\FHIRContractRule $rule
     * @return $this
     */
    public function addRule($rule)
    {
        $this->rule[] = $rule;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRAttachment
     */
    public function getLegallyBindingAttachment()
    {
        return $this->legallyBindingAttachment;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRAttachment $legallyBindingAttachment
     * @return $this
     */
    public function setLegallyBindingAttachment($legallyBindingAttachment)
    {
        $this->legallyBindingAttachment = $legallyBindingAttachment;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getLegallyBindingReference()
    {
        return $this->legallyBindingReference;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRReference $legallyBindingReference
     * @return $this
     */
    public function setLegallyBindingReference($legallyBindingReference)
    {
        $this->legallyBindingReference = $legallyBindingReference;
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
        if (null !== $this->url) $json['url'] = $this->url;
        if (null !== $this->version) $json['version'] = $this->version;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->legalState) $json['legalState'] = $this->legalState;
        if (null !== $this->instantiatesCanonical) $json['instantiatesCanonical'] = $this->instantiatesCanonical;
        if (null !== $this->instantiatesUri) $json['instantiatesUri'] = $this->instantiatesUri;
        if (null !== $this->contentDerivative) $json['contentDerivative'] = $this->contentDerivative;
        if (null !== $this->issued) $json['issued'] = $this->issued;
        if (null !== $this->applies) $json['applies'] = $this->applies;
        if (null !== $this->expirationType) $json['expirationType'] = $this->expirationType;
        if (0 < count($this->subject)) {
            $json['subject'] = [];
            foreach($this->subject as $subject) {
                $json['subject'][] = $subject;
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
        if (0 < count($this->site)) {
            $json['site'] = [];
            foreach($this->site as $site) {
                $json['site'][] = $site;
            }
        }
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->title) $json['title'] = $this->title;
        if (null !== $this->subtitle) $json['subtitle'] = $this->subtitle;
        if (0 < count($this->alias)) {
            $json['alias'] = [];
            foreach($this->alias as $alias) {
                $json['alias'][] = $alias;
            }
        }
        if (null !== $this->author) $json['author'] = $this->author;
        if (null !== $this->scope) $json['scope'] = $this->scope;
        if (null !== $this->topicCodeableConcept) $json['topicCodeableConcept'] = $this->topicCodeableConcept;
        if (null !== $this->topicReference) $json['topicReference'] = $this->topicReference;
        if (null !== $this->type) $json['type'] = $this->type;
        if (0 < count($this->subType)) {
            $json['subType'] = [];
            foreach($this->subType as $subType) {
                $json['subType'][] = $subType;
            }
        }
        if (null !== $this->contentDefinition) $json['contentDefinition'] = $this->contentDefinition;
        if (0 < count($this->term)) {
            $json['term'] = [];
            foreach($this->term as $term) {
                $json['term'][] = $term;
            }
        }
        if (0 < count($this->supportingInfo)) {
            $json['supportingInfo'] = [];
            foreach($this->supportingInfo as $supportingInfo) {
                $json['supportingInfo'][] = $supportingInfo;
            }
        }
        if (0 < count($this->relevantHistory)) {
            $json['relevantHistory'] = [];
            foreach($this->relevantHistory as $relevantHistory) {
                $json['relevantHistory'][] = $relevantHistory;
            }
        }
        if (0 < count($this->signer)) {
            $json['signer'] = [];
            foreach($this->signer as $signer) {
                $json['signer'][] = $signer;
            }
        }
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
        if (null !== $this->legallyBindingAttachment) $json['legallyBindingAttachment'] = $this->legallyBindingAttachment;
        if (null !== $this->legallyBindingReference) $json['legallyBindingReference'] = $this->legallyBindingReference;
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
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (null !== $this->version) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->legalState) $this->legalState->xmlSerialize(true, $sxe->addChild('legalState'));
        if (null !== $this->instantiatesCanonical) $this->instantiatesCanonical->xmlSerialize(true, $sxe->addChild('instantiatesCanonical'));
        if (null !== $this->instantiatesUri) $this->instantiatesUri->xmlSerialize(true, $sxe->addChild('instantiatesUri'));
        if (null !== $this->contentDerivative) $this->contentDerivative->xmlSerialize(true, $sxe->addChild('contentDerivative'));
        if (null !== $this->issued) $this->issued->xmlSerialize(true, $sxe->addChild('issued'));
        if (null !== $this->applies) $this->applies->xmlSerialize(true, $sxe->addChild('applies'));
        if (null !== $this->expirationType) $this->expirationType->xmlSerialize(true, $sxe->addChild('expirationType'));
        if (0 < count($this->subject)) {
            foreach($this->subject as $subject) {
                $subject->xmlSerialize(true, $sxe->addChild('subject'));
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
        if (0 < count($this->site)) {
            foreach($this->site as $site) {
                $site->xmlSerialize(true, $sxe->addChild('site'));
            }
        }
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (null !== $this->subtitle) $this->subtitle->xmlSerialize(true, $sxe->addChild('subtitle'));
        if (0 < count($this->alias)) {
            foreach($this->alias as $alias) {
                $alias->xmlSerialize(true, $sxe->addChild('alias'));
            }
        }
        if (null !== $this->author) $this->author->xmlSerialize(true, $sxe->addChild('author'));
        if (null !== $this->scope) $this->scope->xmlSerialize(true, $sxe->addChild('scope'));
        if (null !== $this->topicCodeableConcept) $this->topicCodeableConcept->xmlSerialize(true, $sxe->addChild('topicCodeableConcept'));
        if (null !== $this->topicReference) $this->topicReference->xmlSerialize(true, $sxe->addChild('topicReference'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->subType)) {
            foreach($this->subType as $subType) {
                $subType->xmlSerialize(true, $sxe->addChild('subType'));
            }
        }
        if (null !== $this->contentDefinition) $this->contentDefinition->xmlSerialize(true, $sxe->addChild('contentDefinition'));
        if (0 < count($this->term)) {
            foreach($this->term as $term) {
                $term->xmlSerialize(true, $sxe->addChild('term'));
            }
        }
        if (0 < count($this->supportingInfo)) {
            foreach($this->supportingInfo as $supportingInfo) {
                $supportingInfo->xmlSerialize(true, $sxe->addChild('supportingInfo'));
            }
        }
        if (0 < count($this->relevantHistory)) {
            foreach($this->relevantHistory as $relevantHistory) {
                $relevantHistory->xmlSerialize(true, $sxe->addChild('relevantHistory'));
            }
        }
        if (0 < count($this->signer)) {
            foreach($this->signer as $signer) {
                $signer->xmlSerialize(true, $sxe->addChild('signer'));
            }
        }
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
        if (null !== $this->legallyBindingAttachment) $this->legallyBindingAttachment->xmlSerialize(true, $sxe->addChild('legallyBindingAttachment'));
        if (null !== $this->legallyBindingReference) $this->legallyBindingReference->xmlSerialize(true, $sxe->addChild('legallyBindingReference'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}