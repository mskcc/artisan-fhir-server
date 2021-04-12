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
 * The Library resource is a general-purpose container for knowledge asset definitions. It can be used to describe and expose existing knowledge assets such as logic libraries and information model descriptions, as well as to describe a collection of knowledge assets.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRLibrary extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An absolute URI that is used to identify this library when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this library is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the library is stored on different servers.
     * @var \Fhir\V_400\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * A formal identifier that is used to identify this library when it is represented in other formats, or referenced in a specification, model, design or an instance. e.g. CMS or NQF identifiers for a measure artifact. Note that at least one identifier is required for non-experimental active artifacts.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The identifier that is used to identify this version of the library when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the library author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A natural language name identifying the library. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A short, descriptive, user-friendly title for the library.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * An explanatory or alternate title for the library giving additional information about its content.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $subtitle = null;

    /**
     * The status of this library. Enables tracking the life-cycle of the content.
     * @var \Fhir\V_400\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * A Boolean value to indicate that this library is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * Identifies the type of library such as a Logic Library, Model Definition, Asset Collection, or Module Definition.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $subjectCodeableConcept = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $subjectReference = null;

    /**
     * The date  (and optionally time) when the library was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the library changes.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The name of the organization or individual that published the library.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \Fhir\V_400\FHIRElement\FHIRContactDetail[]
     */
    public $contact = array();

    /**
     * A free text natural language description of the library from a consumer's perspective.
     * @var \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate library instances.
     * @var \Fhir\V_400\FHIRElement\FHIRUsageContext[]
     */
    public $useContext = array();

    /**
     * A legal or geographic region in which the library is intended to be used.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $jurisdiction = array();

    /**
     * Explanation of why this library is needed and why it has been designed as it has.
     * @var \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public $purpose = null;

    /**
     * A detailed description of how the library is used from a clinical perspective.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $usage = null;

    /**
     * A copyright statement relating to the library and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the library.
     * @var \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public $copyright = null;

    /**
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     * @var \Fhir\V_400\FHIRElement\FHIRDate
     */
    public $approvalDate = null;

    /**
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     * @var \Fhir\V_400\FHIRElement\FHIRDate
     */
    public $lastReviewDate = null;

    /**
     * The period during which the library content was or is planned to be in active use.
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * Descriptive topics related to the content of the library. Topics provide a high-level categorization of the library that can be useful for filtering and searching.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $topic = array();

    /**
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     * @var \Fhir\V_400\FHIRElement\FHIRContactDetail[]
     */
    public $author = array();

    /**
     * An individual or organization primarily responsible for internal coherence of the content.
     * @var \Fhir\V_400\FHIRElement\FHIRContactDetail[]
     */
    public $editor = array();

    /**
     * An individual or organization primarily responsible for review of some aspect of the content.
     * @var \Fhir\V_400\FHIRElement\FHIRContactDetail[]
     */
    public $reviewer = array();

    /**
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     * @var \Fhir\V_400\FHIRElement\FHIRContactDetail[]
     */
    public $endorser = array();

    /**
     * Related artifacts such as additional documentation, justification, or bibliographic references.
     * @var \Fhir\V_400\FHIRElement\FHIRRelatedArtifact[]
     */
    public $relatedArtifact = array();

    /**
     * The parameter element defines parameters used by the library.
     * @var \Fhir\V_400\FHIRElement\FHIRParameterDefinition[]
     */
    public $parameter = array();

    /**
     * Describes a set of data that must be provided in order to be able to successfully perform the computations defined by the library.
     * @var \Fhir\V_400\FHIRElement\FHIRDataRequirement[]
     */
    public $dataRequirement = array();

    /**
     * The content of the library as an Attachment. The content may be a reference to a url, or may be directly embedded as a base-64 string. Either way, the contentType of the attachment determines how to interpret the content.
     * @var \Fhir\V_400\FHIRElement\FHIRAttachment[]
     */
    public $content = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Library';

    /**
     * An absolute URI that is used to identify this library when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this library is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the library is stored on different servers.
     * @return \Fhir\V_400\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URI that is used to identify this library when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this library is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the library is stored on different servers.
     * @param \Fhir\V_400\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * A formal identifier that is used to identify this library when it is represented in other formats, or referenced in a specification, model, design or an instance. e.g. CMS or NQF identifiers for a measure artifact. Note that at least one identifier is required for non-experimental active artifacts.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A formal identifier that is used to identify this library when it is represented in other formats, or referenced in a specification, model, design or an instance. e.g. CMS or NQF identifiers for a measure artifact. Note that at least one identifier is required for non-experimental active artifacts.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the library when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the library author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the library when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the library author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
     * @param \Fhir\V_400\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A natural language name identifying the library. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A natural language name identifying the library. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @param \Fhir\V_400\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A short, descriptive, user-friendly title for the library.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A short, descriptive, user-friendly title for the library.
     * @param \Fhir\V_400\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * An explanatory or alternate title for the library giving additional information about its content.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * An explanatory or alternate title for the library giving additional information about its content.
     * @param \Fhir\V_400\FHIRElement\FHIRString $subtitle
     * @return $this
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * The status of this library. Enables tracking the life-cycle of the content.
     * @return \Fhir\V_400\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this library. Enables tracking the life-cycle of the content.
     * @param \Fhir\V_400\FHIRElement\FHIRPublicationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A Boolean value to indicate that this library is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * A Boolean value to indicate that this library is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * Identifies the type of library such as a Logic Library, Model Definition, Asset Collection, or Module Definition.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Identifies the type of library such as a Logic Library, Model Definition, Asset Collection, or Module Definition.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getSubjectCodeableConcept()
    {
        return $this->subjectCodeableConcept;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $subjectCodeableConcept
     * @return $this
     */
    public function setSubjectCodeableConcept($subjectCodeableConcept)
    {
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getSubjectReference()
    {
        return $this->subjectReference;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRReference $subjectReference
     * @return $this
     */
    public function setSubjectReference($subjectReference)
    {
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * The date  (and optionally time) when the library was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the library changes.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date  (and optionally time) when the library was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the library changes.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * The name of the organization or individual that published the library.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the organization or individual that published the library.
     * @param \Fhir\V_400\FHIRElement\FHIRString $publisher
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @return \Fhir\V_400\FHIRElement\FHIRContactDetail[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @param \Fhir\V_400\FHIRElement\FHIRContactDetail $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A free text natural language description of the library from a consumer's perspective.
     * @return \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the library from a consumer's perspective.
     * @param \Fhir\V_400\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate library instances.
     * @return \Fhir\V_400\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate library instances.
     * @param \Fhir\V_400\FHIRElement\FHIRUsageContext $useContext
     * @return $this
     */
    public function addUseContext($useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * A legal or geographic region in which the library is intended to be used.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A legal or geographic region in which the library is intended to be used.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return $this
     */
    public function addJurisdiction($jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * Explanation of why this library is needed and why it has been designed as it has.
     * @return \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Explanation of why this library is needed and why it has been designed as it has.
     * @param \Fhir\V_400\FHIRElement\FHIRMarkdown $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * A detailed description of how the library is used from a clinical perspective.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * A detailed description of how the library is used from a clinical perspective.
     * @param \Fhir\V_400\FHIRElement\FHIRString $usage
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * A copyright statement relating to the library and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the library.
     * @return \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A copyright statement relating to the library and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the library.
     * @param \Fhir\V_400\FHIRElement\FHIRMarkdown $copyright
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     * @return \Fhir\V_400\FHIRElement\FHIRDate
     */
    public function getApprovalDate()
    {
        return $this->approvalDate;
    }

    /**
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     * @param \Fhir\V_400\FHIRElement\FHIRDate $approvalDate
     * @return $this
     */
    public function setApprovalDate($approvalDate)
    {
        $this->approvalDate = $approvalDate;
        return $this;
    }

    /**
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     * @return \Fhir\V_400\FHIRElement\FHIRDate
     */
    public function getLastReviewDate()
    {
        return $this->lastReviewDate;
    }

    /**
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     * @param \Fhir\V_400\FHIRElement\FHIRDate $lastReviewDate
     * @return $this
     */
    public function setLastReviewDate($lastReviewDate)
    {
        $this->lastReviewDate = $lastReviewDate;
        return $this;
    }

    /**
     * The period during which the library content was or is planned to be in active use.
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * The period during which the library content was or is planned to be in active use.
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $effectivePeriod
     * @return $this
     */
    public function setEffectivePeriod($effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Descriptive topics related to the content of the library. Topics provide a high-level categorization of the library that can be useful for filtering and searching.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Descriptive topics related to the content of the library. Topics provide a high-level categorization of the library that can be useful for filtering and searching.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $topic
     * @return $this
     */
    public function addTopic($topic)
    {
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     * @return \Fhir\V_400\FHIRElement\FHIRContactDetail[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     * @param \Fhir\V_400\FHIRElement\FHIRContactDetail $author
     * @return $this
     */
    public function addAuthor($author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * An individual or organization primarily responsible for internal coherence of the content.
     * @return \Fhir\V_400\FHIRElement\FHIRContactDetail[]
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * An individual or organization primarily responsible for internal coherence of the content.
     * @param \Fhir\V_400\FHIRElement\FHIRContactDetail $editor
     * @return $this
     */
    public function addEditor($editor)
    {
        $this->editor[] = $editor;
        return $this;
    }

    /**
     * An individual or organization primarily responsible for review of some aspect of the content.
     * @return \Fhir\V_400\FHIRElement\FHIRContactDetail[]
     */
    public function getReviewer()
    {
        return $this->reviewer;
    }

    /**
     * An individual or organization primarily responsible for review of some aspect of the content.
     * @param \Fhir\V_400\FHIRElement\FHIRContactDetail $reviewer
     * @return $this
     */
    public function addReviewer($reviewer)
    {
        $this->reviewer[] = $reviewer;
        return $this;
    }

    /**
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     * @return \Fhir\V_400\FHIRElement\FHIRContactDetail[]
     */
    public function getEndorser()
    {
        return $this->endorser;
    }

    /**
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     * @param \Fhir\V_400\FHIRElement\FHIRContactDetail $endorser
     * @return $this
     */
    public function addEndorser($endorser)
    {
        $this->endorser[] = $endorser;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or bibliographic references.
     * @return \Fhir\V_400\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getRelatedArtifact()
    {
        return $this->relatedArtifact;
    }

    /**
     * Related artifacts such as additional documentation, justification, or bibliographic references.
     * @param \Fhir\V_400\FHIRElement\FHIRRelatedArtifact $relatedArtifact
     * @return $this
     */
    public function addRelatedArtifact($relatedArtifact)
    {
        $this->relatedArtifact[] = $relatedArtifact;
        return $this;
    }

    /**
     * The parameter element defines parameters used by the library.
     * @return \Fhir\V_400\FHIRElement\FHIRParameterDefinition[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * The parameter element defines parameters used by the library.
     * @param \Fhir\V_400\FHIRElement\FHIRParameterDefinition $parameter
     * @return $this
     */
    public function addParameter($parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * Describes a set of data that must be provided in order to be able to successfully perform the computations defined by the library.
     * @return \Fhir\V_400\FHIRElement\FHIRDataRequirement[]
     */
    public function getDataRequirement()
    {
        return $this->dataRequirement;
    }

    /**
     * Describes a set of data that must be provided in order to be able to successfully perform the computations defined by the library.
     * @param \Fhir\V_400\FHIRElement\FHIRDataRequirement $dataRequirement
     * @return $this
     */
    public function addDataRequirement($dataRequirement)
    {
        $this->dataRequirement[] = $dataRequirement;
        return $this;
    }

    /**
     * The content of the library as an Attachment. The content may be a reference to a url, or may be directly embedded as a base-64 string. Either way, the contentType of the attachment determines how to interpret the content.
     * @return \Fhir\V_400\FHIRElement\FHIRAttachment[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * The content of the library as an Attachment. The content may be a reference to a url, or may be directly embedded as a base-64 string. Either way, the contentType of the attachment determines how to interpret the content.
     * @param \Fhir\V_400\FHIRElement\FHIRAttachment $content
     * @return $this
     */
    public function addContent($content)
    {
        $this->content[] = $content;
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
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (null !== $this->version) $json['version'] = $this->version;
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->title) $json['title'] = $this->title;
        if (null !== $this->subtitle) $json['subtitle'] = $this->subtitle;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->experimental) $json['experimental'] = $this->experimental;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->subjectCodeableConcept) $json['subjectCodeableConcept'] = $this->subjectCodeableConcept;
        if (null !== $this->subjectReference) $json['subjectReference'] = $this->subjectReference;
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
        if (null !== $this->usage) $json['usage'] = $this->usage;
        if (null !== $this->copyright) $json['copyright'] = $this->copyright;
        if (null !== $this->approvalDate) $json['approvalDate'] = $this->approvalDate;
        if (null !== $this->lastReviewDate) $json['lastReviewDate'] = $this->lastReviewDate;
        if (null !== $this->effectivePeriod) $json['effectivePeriod'] = $this->effectivePeriod;
        if (0 < count($this->topic)) {
            $json['topic'] = [];
            foreach($this->topic as $topic) {
                $json['topic'][] = $topic;
            }
        }
        if (0 < count($this->author)) {
            $json['author'] = [];
            foreach($this->author as $author) {
                $json['author'][] = $author;
            }
        }
        if (0 < count($this->editor)) {
            $json['editor'] = [];
            foreach($this->editor as $editor) {
                $json['editor'][] = $editor;
            }
        }
        if (0 < count($this->reviewer)) {
            $json['reviewer'] = [];
            foreach($this->reviewer as $reviewer) {
                $json['reviewer'][] = $reviewer;
            }
        }
        if (0 < count($this->endorser)) {
            $json['endorser'] = [];
            foreach($this->endorser as $endorser) {
                $json['endorser'][] = $endorser;
            }
        }
        if (0 < count($this->relatedArtifact)) {
            $json['relatedArtifact'] = [];
            foreach($this->relatedArtifact as $relatedArtifact) {
                $json['relatedArtifact'][] = $relatedArtifact;
            }
        }
        if (0 < count($this->parameter)) {
            $json['parameter'] = [];
            foreach($this->parameter as $parameter) {
                $json['parameter'][] = $parameter;
            }
        }
        if (0 < count($this->dataRequirement)) {
            $json['dataRequirement'] = [];
            foreach($this->dataRequirement as $dataRequirement) {
                $json['dataRequirement'][] = $dataRequirement;
            }
        }
        if (0 < count($this->content)) {
            $json['content'] = [];
            foreach($this->content as $content) {
                $json['content'][] = $content;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Library xmlns="http://hl7.org/fhir"></Library>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->version) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (null !== $this->subtitle) $this->subtitle->xmlSerialize(true, $sxe->addChild('subtitle'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->experimental) $this->experimental->xmlSerialize(true, $sxe->addChild('experimental'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->subjectCodeableConcept) $this->subjectCodeableConcept->xmlSerialize(true, $sxe->addChild('subjectCodeableConcept'));
        if (null !== $this->subjectReference) $this->subjectReference->xmlSerialize(true, $sxe->addChild('subjectReference'));
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
        if (null !== $this->usage) $this->usage->xmlSerialize(true, $sxe->addChild('usage'));
        if (null !== $this->copyright) $this->copyright->xmlSerialize(true, $sxe->addChild('copyright'));
        if (null !== $this->approvalDate) $this->approvalDate->xmlSerialize(true, $sxe->addChild('approvalDate'));
        if (null !== $this->lastReviewDate) $this->lastReviewDate->xmlSerialize(true, $sxe->addChild('lastReviewDate'));
        if (null !== $this->effectivePeriod) $this->effectivePeriod->xmlSerialize(true, $sxe->addChild('effectivePeriod'));
        if (0 < count($this->topic)) {
            foreach($this->topic as $topic) {
                $topic->xmlSerialize(true, $sxe->addChild('topic'));
            }
        }
        if (0 < count($this->author)) {
            foreach($this->author as $author) {
                $author->xmlSerialize(true, $sxe->addChild('author'));
            }
        }
        if (0 < count($this->editor)) {
            foreach($this->editor as $editor) {
                $editor->xmlSerialize(true, $sxe->addChild('editor'));
            }
        }
        if (0 < count($this->reviewer)) {
            foreach($this->reviewer as $reviewer) {
                $reviewer->xmlSerialize(true, $sxe->addChild('reviewer'));
            }
        }
        if (0 < count($this->endorser)) {
            foreach($this->endorser as $endorser) {
                $endorser->xmlSerialize(true, $sxe->addChild('endorser'));
            }
        }
        if (0 < count($this->relatedArtifact)) {
            foreach($this->relatedArtifact as $relatedArtifact) {
                $relatedArtifact->xmlSerialize(true, $sxe->addChild('relatedArtifact'));
            }
        }
        if (0 < count($this->parameter)) {
            foreach($this->parameter as $parameter) {
                $parameter->xmlSerialize(true, $sxe->addChild('parameter'));
            }
        }
        if (0 < count($this->dataRequirement)) {
            foreach($this->dataRequirement as $dataRequirement) {
                $dataRequirement->xmlSerialize(true, $sxe->addChild('dataRequirement'));
            }
        }
        if (0 < count($this->content)) {
            foreach($this->content as $content) {
                $content->xmlSerialize(true, $sxe->addChild('content'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}