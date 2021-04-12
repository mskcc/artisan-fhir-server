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
 * A formal computable definition of an operation (on the RESTful interface) or a named query (using the search interaction).
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIROperationDefinition extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An absolute URI that is used to identify this operation definition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this operation definition is (or will be) published. The URL SHOULD include the major version of the operation definition. For more information see [Technical and Business Versions](resource.html#versions).
     * @var \Fhir\V_301\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The identifier that is used to identify this version of the operation definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the operation definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A natural language name identifying the operation definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The status of this operation definition. Enables tracking the life-cycle of the content.
     * @var \Fhir\V_301\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * Whether this is an operation or a named query.
     * @var \Fhir\V_301\FHIRElement\FHIROperationKind
     */
    public $kind = null;

    /**
     * A boolean value to indicate that this operation definition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The date  (and optionally time) when the operation definition was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the operation definition changes.
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The name of the individual or organization that published the operation definition.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \Fhir\V_301\FHIRElement\FHIRContactDetail[]
     */
    public $contact = array();

    /**
     * A free text natural language description of the operation definition from a consumer's perspective.
     * @var \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate operation definition instances.
     * @var \Fhir\V_301\FHIRElement\FHIRUsageContext[]
     */
    public $useContext = array();

    /**
     * A legal or geographic region in which the operation definition is intended to be used.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $jurisdiction = array();

    /**
     * Explaination of why this operation definition is needed and why it has been designed as it has.
     * @var \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public $purpose = null;

    /**
     * Operations that are idempotent (see [HTTP specification definition of idempotent](http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html)) may be invoked by performing an HTTP GET operation instead of a POST.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $idempotent = null;

    /**
     * The name used to invoke the operation.
     * @var \Fhir\V_301\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * Additional information about how to use this operation or named query.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * Indicates that this operation definition is a constraining profile on the base.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $base = null;

    /**
     * The types on which this operation can be executed.
     * @var \Fhir\V_301\FHIRElement\FHIRResourceType[]
     */
    public $resource = array();

    /**
     * Indicates whether this operation or named query can be invoked at the system level (e.g. without needing to choose a resource type for the context).
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $system = null;

    /**
     * Indicates whether this operation or named query can be invoked at the resource type level for any given resource type level (e.g. without needing to choose a specific resource id for the context).
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $type = null;

    /**
     * Indicates whether this operation can be invoked on a particular instance of one of the given types.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $instance = null;

    /**
     * The parameters for the operation/query.
     * @var \Fhir\V_301\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    public $parameter = array();

    /**
     * Defines an appropriate combination of parameters to use when invoking this operation, to help code generators when generating overloaded parameter sets for this operation.
     * @var \Fhir\V_301\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionOverload[]
     */
    public $overload = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'OperationDefinition';

    /**
     * An absolute URI that is used to identify this operation definition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this operation definition is (or will be) published. The URL SHOULD include the major version of the operation definition. For more information see [Technical and Business Versions](resource.html#versions).
     * @return \Fhir\V_301\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URI that is used to identify this operation definition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this operation definition is (or will be) published. The URL SHOULD include the major version of the operation definition. For more information see [Technical and Business Versions](resource.html#versions).
     * @param \Fhir\V_301\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the operation definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the operation definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the operation definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the operation definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @param \Fhir\V_301\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A natural language name identifying the operation definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A natural language name identifying the operation definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @param \Fhir\V_301\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The status of this operation definition. Enables tracking the life-cycle of the content.
     * @return \Fhir\V_301\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this operation definition. Enables tracking the life-cycle of the content.
     * @param \Fhir\V_301\FHIRElement\FHIRPublicationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Whether this is an operation or a named query.
     * @return \Fhir\V_301\FHIRElement\FHIROperationKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Whether this is an operation or a named query.
     * @param \Fhir\V_301\FHIRElement\FHIROperationKind $kind
     * @return $this
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * A boolean value to indicate that this operation definition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * A boolean value to indicate that this operation definition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The date  (and optionally time) when the operation definition was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the operation definition changes.
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date  (and optionally time) when the operation definition was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the operation definition changes.
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * The name of the individual or organization that published the operation definition.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the operation definition.
     * @param \Fhir\V_301\FHIRElement\FHIRString $publisher
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @return \Fhir\V_301\FHIRElement\FHIRContactDetail[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @param \Fhir\V_301\FHIRElement\FHIRContactDetail $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A free text natural language description of the operation definition from a consumer's perspective.
     * @return \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the operation definition from a consumer's perspective.
     * @param \Fhir\V_301\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate operation definition instances.
     * @return \Fhir\V_301\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate operation definition instances.
     * @param \Fhir\V_301\FHIRElement\FHIRUsageContext $useContext
     * @return $this
     */
    public function addUseContext($useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * A legal or geographic region in which the operation definition is intended to be used.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A legal or geographic region in which the operation definition is intended to be used.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return $this
     */
    public function addJurisdiction($jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * Explaination of why this operation definition is needed and why it has been designed as it has.
     * @return \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Explaination of why this operation definition is needed and why it has been designed as it has.
     * @param \Fhir\V_301\FHIRElement\FHIRMarkdown $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Operations that are idempotent (see [HTTP specification definition of idempotent](http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html)) may be invoked by performing an HTTP GET operation instead of a POST.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getIdempotent()
    {
        return $this->idempotent;
    }

    /**
     * Operations that are idempotent (see [HTTP specification definition of idempotent](http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html)) may be invoked by performing an HTTP GET operation instead of a POST.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $idempotent
     * @return $this
     */
    public function setIdempotent($idempotent)
    {
        $this->idempotent = $idempotent;
        return $this;
    }

    /**
     * The name used to invoke the operation.
     * @return \Fhir\V_301\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The name used to invoke the operation.
     * @param \Fhir\V_301\FHIRElement\FHIRCode $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Additional information about how to use this operation or named query.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Additional information about how to use this operation or named query.
     * @param \Fhir\V_301\FHIRElement\FHIRString $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Indicates that this operation definition is a constraining profile on the base.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Indicates that this operation definition is a constraining profile on the base.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $base
     * @return $this
     */
    public function setBase($base)
    {
        $this->base = $base;
        return $this;
    }

    /**
     * The types on which this operation can be executed.
     * @return \Fhir\V_301\FHIRElement\FHIRResourceType[]
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The types on which this operation can be executed.
     * @param \Fhir\V_301\FHIRElement\FHIRResourceType $resource
     * @return $this
     */
    public function addResource($resource)
    {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * Indicates whether this operation or named query can be invoked at the system level (e.g. without needing to choose a resource type for the context).
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Indicates whether this operation or named query can be invoked at the system level (e.g. without needing to choose a resource type for the context).
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $system
     * @return $this
     */
    public function setSystem($system)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * Indicates whether this operation or named query can be invoked at the resource type level for any given resource type level (e.g. without needing to choose a specific resource id for the context).
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Indicates whether this operation or named query can be invoked at the resource type level for any given resource type level (e.g. without needing to choose a specific resource id for the context).
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Indicates whether this operation can be invoked on a particular instance of one of the given types.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Indicates whether this operation can be invoked on a particular instance of one of the given types.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $instance
     * @return $this
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * The parameters for the operation/query.
     * @return \Fhir\V_301\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * The parameters for the operation/query.
     * @param \Fhir\V_301\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionParameter $parameter
     * @return $this
     */
    public function addParameter($parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * Defines an appropriate combination of parameters to use when invoking this operation, to help code generators when generating overloaded parameter sets for this operation.
     * @return \Fhir\V_301\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionOverload[]
     */
    public function getOverload()
    {
        return $this->overload;
    }

    /**
     * Defines an appropriate combination of parameters to use when invoking this operation, to help code generators when generating overloaded parameter sets for this operation.
     * @param \Fhir\V_301\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionOverload $overload
     * @return $this
     */
    public function addOverload($overload)
    {
        $this->overload[] = $overload;
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
        if (null !== $this->url) $json['url'] = $this->url;
        if (null !== $this->version) $json['version'] = $this->version;
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->kind) $json['kind'] = $this->kind;
        if (null !== $this->experimental) $json['experimental'] = $this->experimental;
        if (null !== $this->date) $json['date'] = $this->date;
        if (null !== $this->publisher) $json['publisher'] = $this->publisher;
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                $json['contact'][] = $contact;
            }
        }
        if (null !== $this->description) $json['description'] = $this->description;
        if (0 < count($this->useContext)) {
            $json['useContext'] = [];
            foreach($this->useContext as $useContext) {
                $json['useContext'][] = $useContext;
            }
        }
        if (0 < count($this->jurisdiction)) {
            $json['jurisdiction'] = [];
            foreach($this->jurisdiction as $jurisdiction) {
                $json['jurisdiction'][] = $jurisdiction;
            }
        }
        if (null !== $this->purpose) $json['purpose'] = $this->purpose;
        if (null !== $this->idempotent) $json['idempotent'] = $this->idempotent;
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->comment) $json['comment'] = $this->comment;
        if (null !== $this->base) $json['base'] = $this->base;
        if (0 < count($this->resource)) {
            $json['resource'] = [];
            foreach($this->resource as $resource) {
                $json['resource'][] = $resource;
            }
        }
        if (null !== $this->system) $json['system'] = $this->system;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->instance) $json['instance'] = $this->instance;
        if (0 < count($this->parameter)) {
            $json['parameter'] = [];
            foreach($this->parameter as $parameter) {
                $json['parameter'][] = $parameter;
            }
        }
        if (0 < count($this->overload)) {
            $json['overload'] = [];
            foreach($this->overload as $overload) {
                $json['overload'][] = $overload;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<OperationDefinition xmlns="http://hl7.org/fhir"></OperationDefinition>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (null !== $this->version) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->kind) $this->kind->xmlSerialize(true, $sxe->addChild('kind'));
        if (null !== $this->experimental) $this->experimental->xmlSerialize(true, $sxe->addChild('experimental'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->publisher) $this->publisher->xmlSerialize(true, $sxe->addChild('publisher'));
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->useContext)) {
            foreach($this->useContext as $useContext) {
                $useContext->xmlSerialize(true, $sxe->addChild('useContext'));
            }
        }
        if (0 < count($this->jurisdiction)) {
            foreach($this->jurisdiction as $jurisdiction) {
                $jurisdiction->xmlSerialize(true, $sxe->addChild('jurisdiction'));
            }
        }
        if (null !== $this->purpose) $this->purpose->xmlSerialize(true, $sxe->addChild('purpose'));
        if (null !== $this->idempotent) $this->idempotent->xmlSerialize(true, $sxe->addChild('idempotent'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->comment) $this->comment->xmlSerialize(true, $sxe->addChild('comment'));
        if (null !== $this->base) $this->base->xmlSerialize(true, $sxe->addChild('base'));
        if (0 < count($this->resource)) {
            foreach($this->resource as $resource) {
                $resource->xmlSerialize(true, $sxe->addChild('resource'));
            }
        }
        if (null !== $this->system) $this->system->xmlSerialize(true, $sxe->addChild('system'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->instance) $this->instance->xmlSerialize(true, $sxe->addChild('instance'));
        if (0 < count($this->parameter)) {
            foreach($this->parameter as $parameter) {
                $parameter->xmlSerialize(true, $sxe->addChild('parameter'));
            }
        }
        if (0 < count($this->overload)) {
            foreach($this->overload as $overload) {
                $overload->xmlSerialize(true, $sxe->addChild('overload'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}