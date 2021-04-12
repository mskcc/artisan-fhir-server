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
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRCapabilityStatement extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An absolute URI that is used to identify this capability statement when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this capability statement is (or will be) published. The URL SHOULD include the major version of the capability statement. For more information see [Technical and Business Versions](resource.html#versions).
     * @var \Fhir\V_301\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The identifier that is used to identify this version of the capability statement when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the capability statement author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A natural language name identifying the capability statement. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A short, descriptive, user-friendly title for the capability statement.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * The status of this capability statement. Enables tracking the life-cycle of the content.
     * @var \Fhir\V_301\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * A boolean value to indicate that this capability statement is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The date  (and optionally time) when the capability statement was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the capability statement changes.
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The name of the individual or organization that published the capability statement.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \Fhir\V_301\FHIRElement\FHIRContactDetail[]
     */
    public $contact = array();

    /**
     * A free text natural language description of the capability statement from a consumer's perspective. Typically, this is used when the capability statement describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
     * @var \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate capability statement instances.
     * @var \Fhir\V_301\FHIRElement\FHIRUsageContext[]
     */
    public $useContext = array();

    /**
     * A legal or geographic region in which the capability statement is intended to be used.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $jurisdiction = array();

    /**
     * Explaination of why this capability statement is needed and why it has been designed as it has.
     * @var \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public $purpose = null;

    /**
     * A copyright statement relating to the capability statement and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the capability statement.
     * @var \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public $copyright = null;

    /**
     * The way that this statement is intended to be used, to describe an actual running instance of software, a particular product (kind not instance of software) or a class of implementation (e.g. a desired purchase).
     * @var \Fhir\V_301\FHIRElement\FHIRCapabilityStatementKind
     */
    public $kind = null;

    /**
     * Reference to a canonical URL of another CapabilityStatement that this software implements or uses. This capability statement is a published API description that corresponds to a business service. The rest of the capability statement does not need to repeat the details of the referenced resource, but can do so.
     * @var \Fhir\V_301\FHIRElement\FHIRUri[]
     */
    public $instantiates = array();

    /**
     * Software that is covered by this capability statement.  It is used when the capability statement describes the capabilities of a particular software version, independent of an installation.
     * @var \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementSoftware
     */
    public $software = null;

    /**
     * Identifies a specific implementation instance that is described by the capability statement - i.e. a particular installation, rather than the capabilities of a software program.
     * @var \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementImplementation
     */
    public $implementation = null;

    /**
     * The version of the FHIR specification on which this capability statement is based.
     * @var \Fhir\V_301\FHIRElement\FHIRId
     */
    public $fhirVersion = null;

    /**
     * A code that indicates whether the application accepts unknown elements or extensions when reading resources.
     * @var \Fhir\V_301\FHIRElement\FHIRUnknownContentCode
     */
    public $acceptUnknown = null;

    /**
     * A list of the formats supported by this implementation using their content types.
     * @var \Fhir\V_301\FHIRElement\FHIRCode[]
     */
    public $format = array();

    /**
     * A list of the patch formats supported by this implementation using their content types.
     * @var \Fhir\V_301\FHIRElement\FHIRCode[]
     */
    public $patchFormat = array();

    /**
     * A list of implementation guides that the server does (or should) support in their entirety.
     * @var \Fhir\V_301\FHIRElement\FHIRUri[]
     */
    public $implementationGuide = array();

    /**
     * A list of profiles that represent different use cases supported by the system. For a server, "supported by the system" means the system hosts/produces a set of resources that are conformant to a particular profile, and allows clients that use its services to search using this profile and to find appropriate data. For a client, it means the system will search by this profile and process data according to the guidance implicit in the profile. See further discussion in [Using Profiles](profiling.html#profile-uses).
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $profile = array();

    /**
     * A definition of the restful capabilities of the solution, if any.
     * @var \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementRest[]
     */
    public $rest = array();

    /**
     * A description of the messaging capabilities of the solution.
     * @var \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementMessaging[]
     */
    public $messaging = array();

    /**
     * A document definition.
     * @var \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementDocument[]
     */
    public $document = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'CapabilityStatement';

    /**
     * An absolute URI that is used to identify this capability statement when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this capability statement is (or will be) published. The URL SHOULD include the major version of the capability statement. For more information see [Technical and Business Versions](resource.html#versions).
     * @return \Fhir\V_301\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URI that is used to identify this capability statement when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this capability statement is (or will be) published. The URL SHOULD include the major version of the capability statement. For more information see [Technical and Business Versions](resource.html#versions).
     * @param \Fhir\V_301\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the capability statement when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the capability statement author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the capability statement when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the capability statement author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @param \Fhir\V_301\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A natural language name identifying the capability statement. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A natural language name identifying the capability statement. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @param \Fhir\V_301\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A short, descriptive, user-friendly title for the capability statement.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A short, descriptive, user-friendly title for the capability statement.
     * @param \Fhir\V_301\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * The status of this capability statement. Enables tracking the life-cycle of the content.
     * @return \Fhir\V_301\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this capability statement. Enables tracking the life-cycle of the content.
     * @param \Fhir\V_301\FHIRElement\FHIRPublicationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A boolean value to indicate that this capability statement is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * A boolean value to indicate that this capability statement is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The date  (and optionally time) when the capability statement was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the capability statement changes.
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date  (and optionally time) when the capability statement was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the capability statement changes.
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * The name of the individual or organization that published the capability statement.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the capability statement.
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
     * A free text natural language description of the capability statement from a consumer's perspective. Typically, this is used when the capability statement describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
     * @return \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the capability statement from a consumer's perspective. Typically, this is used when the capability statement describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
     * @param \Fhir\V_301\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate capability statement instances.
     * @return \Fhir\V_301\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate capability statement instances.
     * @param \Fhir\V_301\FHIRElement\FHIRUsageContext $useContext
     * @return $this
     */
    public function addUseContext($useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * A legal or geographic region in which the capability statement is intended to be used.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A legal or geographic region in which the capability statement is intended to be used.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return $this
     */
    public function addJurisdiction($jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * Explaination of why this capability statement is needed and why it has been designed as it has.
     * @return \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Explaination of why this capability statement is needed and why it has been designed as it has.
     * @param \Fhir\V_301\FHIRElement\FHIRMarkdown $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * A copyright statement relating to the capability statement and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the capability statement.
     * @return \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A copyright statement relating to the capability statement and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the capability statement.
     * @param \Fhir\V_301\FHIRElement\FHIRMarkdown $copyright
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * The way that this statement is intended to be used, to describe an actual running instance of software, a particular product (kind not instance of software) or a class of implementation (e.g. a desired purchase).
     * @return \Fhir\V_301\FHIRElement\FHIRCapabilityStatementKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * The way that this statement is intended to be used, to describe an actual running instance of software, a particular product (kind not instance of software) or a class of implementation (e.g. a desired purchase).
     * @param \Fhir\V_301\FHIRElement\FHIRCapabilityStatementKind $kind
     * @return $this
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * Reference to a canonical URL of another CapabilityStatement that this software implements or uses. This capability statement is a published API description that corresponds to a business service. The rest of the capability statement does not need to repeat the details of the referenced resource, but can do so.
     * @return \Fhir\V_301\FHIRElement\FHIRUri[]
     */
    public function getInstantiates()
    {
        return $this->instantiates;
    }

    /**
     * Reference to a canonical URL of another CapabilityStatement that this software implements or uses. This capability statement is a published API description that corresponds to a business service. The rest of the capability statement does not need to repeat the details of the referenced resource, but can do so.
     * @param \Fhir\V_301\FHIRElement\FHIRUri $instantiates
     * @return $this
     */
    public function addInstantiates($instantiates)
    {
        $this->instantiates[] = $instantiates;
        return $this;
    }

    /**
     * Software that is covered by this capability statement.  It is used when the capability statement describes the capabilities of a particular software version, independent of an installation.
     * @return \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementSoftware
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * Software that is covered by this capability statement.  It is used when the capability statement describes the capabilities of a particular software version, independent of an installation.
     * @param \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementSoftware $software
     * @return $this
     */
    public function setSoftware($software)
    {
        $this->software = $software;
        return $this;
    }

    /**
     * Identifies a specific implementation instance that is described by the capability statement - i.e. a particular installation, rather than the capabilities of a software program.
     * @return \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementImplementation
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * Identifies a specific implementation instance that is described by the capability statement - i.e. a particular installation, rather than the capabilities of a software program.
     * @param \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementImplementation $implementation
     * @return $this
     */
    public function setImplementation($implementation)
    {
        $this->implementation = $implementation;
        return $this;
    }

    /**
     * The version of the FHIR specification on which this capability statement is based.
     * @return \Fhir\V_301\FHIRElement\FHIRId
     */
    public function getFhirVersion()
    {
        return $this->fhirVersion;
    }

    /**
     * The version of the FHIR specification on which this capability statement is based.
     * @param \Fhir\V_301\FHIRElement\FHIRId $fhirVersion
     * @return $this
     */
    public function setFhirVersion($fhirVersion)
    {
        $this->fhirVersion = $fhirVersion;
        return $this;
    }

    /**
     * A code that indicates whether the application accepts unknown elements or extensions when reading resources.
     * @return \Fhir\V_301\FHIRElement\FHIRUnknownContentCode
     */
    public function getAcceptUnknown()
    {
        return $this->acceptUnknown;
    }

    /**
     * A code that indicates whether the application accepts unknown elements or extensions when reading resources.
     * @param \Fhir\V_301\FHIRElement\FHIRUnknownContentCode $acceptUnknown
     * @return $this
     */
    public function setAcceptUnknown($acceptUnknown)
    {
        $this->acceptUnknown = $acceptUnknown;
        return $this;
    }

    /**
     * A list of the formats supported by this implementation using their content types.
     * @return \Fhir\V_301\FHIRElement\FHIRCode[]
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * A list of the formats supported by this implementation using their content types.
     * @param \Fhir\V_301\FHIRElement\FHIRCode $format
     * @return $this
     */
    public function addFormat($format)
    {
        $this->format[] = $format;
        return $this;
    }

    /**
     * A list of the patch formats supported by this implementation using their content types.
     * @return \Fhir\V_301\FHIRElement\FHIRCode[]
     */
    public function getPatchFormat()
    {
        return $this->patchFormat;
    }

    /**
     * A list of the patch formats supported by this implementation using their content types.
     * @param \Fhir\V_301\FHIRElement\FHIRCode $patchFormat
     * @return $this
     */
    public function addPatchFormat($patchFormat)
    {
        $this->patchFormat[] = $patchFormat;
        return $this;
    }

    /**
     * A list of implementation guides that the server does (or should) support in their entirety.
     * @return \Fhir\V_301\FHIRElement\FHIRUri[]
     */
    public function getImplementationGuide()
    {
        return $this->implementationGuide;
    }

    /**
     * A list of implementation guides that the server does (or should) support in their entirety.
     * @param \Fhir\V_301\FHIRElement\FHIRUri $implementationGuide
     * @return $this
     */
    public function addImplementationGuide($implementationGuide)
    {
        $this->implementationGuide[] = $implementationGuide;
        return $this;
    }

    /**
     * A list of profiles that represent different use cases supported by the system. For a server, "supported by the system" means the system hosts/produces a set of resources that are conformant to a particular profile, and allows clients that use its services to search using this profile and to find appropriate data. For a client, it means the system will search by this profile and process data according to the guidance implicit in the profile. See further discussion in [Using Profiles](profiling.html#profile-uses).
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * A list of profiles that represent different use cases supported by the system. For a server, "supported by the system" means the system hosts/produces a set of resources that are conformant to a particular profile, and allows clients that use its services to search using this profile and to find appropriate data. For a client, it means the system will search by this profile and process data according to the guidance implicit in the profile. See further discussion in [Using Profiles](profiling.html#profile-uses).
     * @param \Fhir\V_301\FHIRElement\FHIRReference $profile
     * @return $this
     */
    public function addProfile($profile)
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * A definition of the restful capabilities of the solution, if any.
     * @return \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementRest[]
     */
    public function getRest()
    {
        return $this->rest;
    }

    /**
     * A definition of the restful capabilities of the solution, if any.
     * @param \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementRest $rest
     * @return $this
     */
    public function addRest($rest)
    {
        $this->rest[] = $rest;
        return $this;
    }

    /**
     * A description of the messaging capabilities of the solution.
     * @return \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementMessaging[]
     */
    public function getMessaging()
    {
        return $this->messaging;
    }

    /**
     * A description of the messaging capabilities of the solution.
     * @param \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementMessaging $messaging
     * @return $this
     */
    public function addMessaging($messaging)
    {
        $this->messaging[] = $messaging;
        return $this;
    }

    /**
     * A document definition.
     * @return \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementDocument[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * A document definition.
     * @param \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementDocument $document
     * @return $this
     */
    public function addDocument($document)
    {
        $this->document[] = $document;
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
        if (null !== $this->title) $json['title'] = $this->title;
        if (null !== $this->status) $json['status'] = $this->status;
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
        if (null !== $this->copyright) $json['copyright'] = $this->copyright;
        if (null !== $this->kind) $json['kind'] = $this->kind;
        if (0 < count($this->instantiates)) {
            $json['instantiates'] = [];
            foreach($this->instantiates as $instantiates) {
                $json['instantiates'][] = $instantiates;
            }
        }
        if (null !== $this->software) $json['software'] = $this->software;
        if (null !== $this->implementation) $json['implementation'] = $this->implementation;
        if (null !== $this->fhirVersion) $json['fhirVersion'] = $this->fhirVersion;
        if (null !== $this->acceptUnknown) $json['acceptUnknown'] = $this->acceptUnknown;
        if (0 < count($this->format)) {
            $json['format'] = [];
            foreach($this->format as $format) {
                $json['format'][] = $format;
            }
        }
        if (0 < count($this->patchFormat)) {
            $json['patchFormat'] = [];
            foreach($this->patchFormat as $patchFormat) {
                $json['patchFormat'][] = $patchFormat;
            }
        }
        if (0 < count($this->implementationGuide)) {
            $json['implementationGuide'] = [];
            foreach($this->implementationGuide as $implementationGuide) {
                $json['implementationGuide'][] = $implementationGuide;
            }
        }
        if (0 < count($this->profile)) {
            $json['profile'] = [];
            foreach($this->profile as $profile) {
                $json['profile'][] = $profile;
            }
        }
        if (0 < count($this->rest)) {
            $json['rest'] = [];
            foreach($this->rest as $rest) {
                $json['rest'][] = $rest;
            }
        }
        if (0 < count($this->messaging)) {
            $json['messaging'] = [];
            foreach($this->messaging as $messaging) {
                $json['messaging'][] = $messaging;
            }
        }
        if (0 < count($this->document)) {
            $json['document'] = [];
            foreach($this->document as $document) {
                $json['document'][] = $document;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CapabilityStatement xmlns="http://hl7.org/fhir"></CapabilityStatement>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (null !== $this->version) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
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
        if (null !== $this->copyright) $this->copyright->xmlSerialize(true, $sxe->addChild('copyright'));
        if (null !== $this->kind) $this->kind->xmlSerialize(true, $sxe->addChild('kind'));
        if (0 < count($this->instantiates)) {
            foreach($this->instantiates as $instantiates) {
                $instantiates->xmlSerialize(true, $sxe->addChild('instantiates'));
            }
        }
        if (null !== $this->software) $this->software->xmlSerialize(true, $sxe->addChild('software'));
        if (null !== $this->implementation) $this->implementation->xmlSerialize(true, $sxe->addChild('implementation'));
        if (null !== $this->fhirVersion) $this->fhirVersion->xmlSerialize(true, $sxe->addChild('fhirVersion'));
        if (null !== $this->acceptUnknown) $this->acceptUnknown->xmlSerialize(true, $sxe->addChild('acceptUnknown'));
        if (0 < count($this->format)) {
            foreach($this->format as $format) {
                $format->xmlSerialize(true, $sxe->addChild('format'));
            }
        }
        if (0 < count($this->patchFormat)) {
            foreach($this->patchFormat as $patchFormat) {
                $patchFormat->xmlSerialize(true, $sxe->addChild('patchFormat'));
            }
        }
        if (0 < count($this->implementationGuide)) {
            foreach($this->implementationGuide as $implementationGuide) {
                $implementationGuide->xmlSerialize(true, $sxe->addChild('implementationGuide'));
            }
        }
        if (0 < count($this->profile)) {
            foreach($this->profile as $profile) {
                $profile->xmlSerialize(true, $sxe->addChild('profile'));
            }
        }
        if (0 < count($this->rest)) {
            foreach($this->rest as $rest) {
                $rest->xmlSerialize(true, $sxe->addChild('rest'));
            }
        }
        if (0 < count($this->messaging)) {
            foreach($this->messaging as $messaging) {
                $messaging->xmlSerialize(true, $sxe->addChild('messaging'));
            }
        }
        if (0 < count($this->document)) {
            foreach($this->document as $document) {
                $document->xmlSerialize(true, $sxe->addChild('document'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}