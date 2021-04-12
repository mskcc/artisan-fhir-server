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
 * Resource to define constraints on the Expansion of a FHIR ValueSet.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRExpansionProfile extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An absolute URI that is used to identify this expansion profile when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this expansion profile is (or will be) published. The URL SHOULD include the major version of the expansion profile. For more information see [Technical and Business Versions](resource.html#versions).
     * @var \Fhir\V_301\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * A formal identifier that is used to identify this expansion profile when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The identifier that is used to identify this version of the expansion profile when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the expansion profile author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A natural language name identifying the expansion profile. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The status of this expansion profile. Enables tracking the life-cycle of the content.
     * @var \Fhir\V_301\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * A boolean value to indicate that this expansion profile is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The date  (and optionally time) when the expansion profile was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the expansion profile changes.
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The name of the individual or organization that published the expansion profile.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \Fhir\V_301\FHIRElement\FHIRContactDetail[]
     */
    public $contact = array();

    /**
     * A free text natural language description of the expansion profile from a consumer's perspective.
     * @var \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate expansion profile instances.
     * @var \Fhir\V_301\FHIRElement\FHIRUsageContext[]
     */
    public $useContext = array();

    /**
     * A legal or geographic region in which the expansion profile is intended to be used.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $jurisdiction = array();

    /**
     * Fix use of a particular code system to a particular version.
     * @var \Fhir\V_301\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion[]
     */
    public $fixedVersion = array();

    /**
     * Code system, or a particular version of a code system to be excluded from value set expansions.
     * @var \Fhir\V_301\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem
     */
    public $excludedSystem = null;

    /**
     * Controls whether concept designations are to be included or excluded in value set expansions.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $includeDesignations = null;

    /**
     * A set of criteria that provide the constraints imposed on the value set expansion by including or excluding designations.
     * @var \Fhir\V_301\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileDesignation
     */
    public $designation = null;

    /**
     * Controls whether the value set definition is included or excluded in value set expansions.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $includeDefinition = null;

    /**
     * Controls whether inactive concepts are included or excluded in value set expansions.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $activeOnly = null;

    /**
     * Controls whether or not the value set expansion nests codes or not (i.e. ValueSet.expansion.contains.contains).
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $excludeNested = null;

    /**
     * Controls whether or not the value set expansion includes codes which cannot be displayed in user interfaces.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $excludeNotForUI = null;

    /**
     * Controls whether or not the value set expansion includes post coordinated codes.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $excludePostCoordinated = null;

    /**
     * Specifies the language to be used for description in the expansions i.e. the language to be used for ValueSet.expansion.contains.display.
     * @var \Fhir\V_301\FHIRElement\FHIRCode
     */
    public $displayLanguage = null;

    /**
     * If the value set being expanded is incomplete (because it is too big to expand), return a limited expansion (a subset) with an indicator that expansion is incomplete, using the extension [http://hl7.org/fhir/StructureDefinition/valueset-toocostly](extension-valueset-toocostly.html).
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $limitedExpansion = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ExpansionProfile';

    /**
     * An absolute URI that is used to identify this expansion profile when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this expansion profile is (or will be) published. The URL SHOULD include the major version of the expansion profile. For more information see [Technical and Business Versions](resource.html#versions).
     * @return \Fhir\V_301\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URI that is used to identify this expansion profile when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this expansion profile is (or will be) published. The URL SHOULD include the major version of the expansion profile. For more information see [Technical and Business Versions](resource.html#versions).
     * @param \Fhir\V_301\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * A formal identifier that is used to identify this expansion profile when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A formal identifier that is used to identify this expansion profile when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the expansion profile when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the expansion profile author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the expansion profile when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the expansion profile author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @param \Fhir\V_301\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A natural language name identifying the expansion profile. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A natural language name identifying the expansion profile. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @param \Fhir\V_301\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The status of this expansion profile. Enables tracking the life-cycle of the content.
     * @return \Fhir\V_301\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this expansion profile. Enables tracking the life-cycle of the content.
     * @param \Fhir\V_301\FHIRElement\FHIRPublicationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A boolean value to indicate that this expansion profile is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * A boolean value to indicate that this expansion profile is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The date  (and optionally time) when the expansion profile was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the expansion profile changes.
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date  (and optionally time) when the expansion profile was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the expansion profile changes.
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * The name of the individual or organization that published the expansion profile.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the expansion profile.
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
     * A free text natural language description of the expansion profile from a consumer's perspective.
     * @return \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the expansion profile from a consumer's perspective.
     * @param \Fhir\V_301\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate expansion profile instances.
     * @return \Fhir\V_301\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate expansion profile instances.
     * @param \Fhir\V_301\FHIRElement\FHIRUsageContext $useContext
     * @return $this
     */
    public function addUseContext($useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * A legal or geographic region in which the expansion profile is intended to be used.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A legal or geographic region in which the expansion profile is intended to be used.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return $this
     */
    public function addJurisdiction($jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * Fix use of a particular code system to a particular version.
     * @return \Fhir\V_301\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion[]
     */
    public function getFixedVersion()
    {
        return $this->fixedVersion;
    }

    /**
     * Fix use of a particular code system to a particular version.
     * @param \Fhir\V_301\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion $fixedVersion
     * @return $this
     */
    public function addFixedVersion($fixedVersion)
    {
        $this->fixedVersion[] = $fixedVersion;
        return $this;
    }

    /**
     * Code system, or a particular version of a code system to be excluded from value set expansions.
     * @return \Fhir\V_301\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem
     */
    public function getExcludedSystem()
    {
        return $this->excludedSystem;
    }

    /**
     * Code system, or a particular version of a code system to be excluded from value set expansions.
     * @param \Fhir\V_301\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem $excludedSystem
     * @return $this
     */
    public function setExcludedSystem($excludedSystem)
    {
        $this->excludedSystem = $excludedSystem;
        return $this;
    }

    /**
     * Controls whether concept designations are to be included or excluded in value set expansions.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getIncludeDesignations()
    {
        return $this->includeDesignations;
    }

    /**
     * Controls whether concept designations are to be included or excluded in value set expansions.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $includeDesignations
     * @return $this
     */
    public function setIncludeDesignations($includeDesignations)
    {
        $this->includeDesignations = $includeDesignations;
        return $this;
    }

    /**
     * A set of criteria that provide the constraints imposed on the value set expansion by including or excluding designations.
     * @return \Fhir\V_301\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileDesignation
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * A set of criteria that provide the constraints imposed on the value set expansion by including or excluding designations.
     * @param \Fhir\V_301\FHIRResource\FHIRExpansionProfile\FHIRExpansionProfileDesignation $designation
     * @return $this
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Controls whether the value set definition is included or excluded in value set expansions.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getIncludeDefinition()
    {
        return $this->includeDefinition;
    }

    /**
     * Controls whether the value set definition is included or excluded in value set expansions.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $includeDefinition
     * @return $this
     */
    public function setIncludeDefinition($includeDefinition)
    {
        $this->includeDefinition = $includeDefinition;
        return $this;
    }

    /**
     * Controls whether inactive concepts are included or excluded in value set expansions.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getActiveOnly()
    {
        return $this->activeOnly;
    }

    /**
     * Controls whether inactive concepts are included or excluded in value set expansions.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $activeOnly
     * @return $this
     */
    public function setActiveOnly($activeOnly)
    {
        $this->activeOnly = $activeOnly;
        return $this;
    }

    /**
     * Controls whether or not the value set expansion nests codes or not (i.e. ValueSet.expansion.contains.contains).
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getExcludeNested()
    {
        return $this->excludeNested;
    }

    /**
     * Controls whether or not the value set expansion nests codes or not (i.e. ValueSet.expansion.contains.contains).
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $excludeNested
     * @return $this
     */
    public function setExcludeNested($excludeNested)
    {
        $this->excludeNested = $excludeNested;
        return $this;
    }

    /**
     * Controls whether or not the value set expansion includes codes which cannot be displayed in user interfaces.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getExcludeNotForUI()
    {
        return $this->excludeNotForUI;
    }

    /**
     * Controls whether or not the value set expansion includes codes which cannot be displayed in user interfaces.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $excludeNotForUI
     * @return $this
     */
    public function setExcludeNotForUI($excludeNotForUI)
    {
        $this->excludeNotForUI = $excludeNotForUI;
        return $this;
    }

    /**
     * Controls whether or not the value set expansion includes post coordinated codes.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getExcludePostCoordinated()
    {
        return $this->excludePostCoordinated;
    }

    /**
     * Controls whether or not the value set expansion includes post coordinated codes.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $excludePostCoordinated
     * @return $this
     */
    public function setExcludePostCoordinated($excludePostCoordinated)
    {
        $this->excludePostCoordinated = $excludePostCoordinated;
        return $this;
    }

    /**
     * Specifies the language to be used for description in the expansions i.e. the language to be used for ValueSet.expansion.contains.display.
     * @return \Fhir\V_301\FHIRElement\FHIRCode
     */
    public function getDisplayLanguage()
    {
        return $this->displayLanguage;
    }

    /**
     * Specifies the language to be used for description in the expansions i.e. the language to be used for ValueSet.expansion.contains.display.
     * @param \Fhir\V_301\FHIRElement\FHIRCode $displayLanguage
     * @return $this
     */
    public function setDisplayLanguage($displayLanguage)
    {
        $this->displayLanguage = $displayLanguage;
        return $this;
    }

    /**
     * If the value set being expanded is incomplete (because it is too big to expand), return a limited expansion (a subset) with an indicator that expansion is incomplete, using the extension [http://hl7.org/fhir/StructureDefinition/valueset-toocostly](extension-valueset-toocostly.html).
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getLimitedExpansion()
    {
        return $this->limitedExpansion;
    }

    /**
     * If the value set being expanded is incomplete (because it is too big to expand), return a limited expansion (a subset) with an indicator that expansion is incomplete, using the extension [http://hl7.org/fhir/StructureDefinition/valueset-toocostly](extension-valueset-toocostly.html).
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $limitedExpansion
     * @return $this
     */
    public function setLimitedExpansion($limitedExpansion)
    {
        $this->limitedExpansion = $limitedExpansion;
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
        if (null !== $this->identifier) $json['identifier'] = $this->identifier;
        if (null !== $this->version) $json['version'] = $this->version;
        if (null !== $this->name) $json['name'] = $this->name;
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
        if (0 < count($this->fixedVersion)) {
            $json['fixedVersion'] = [];
            foreach($this->fixedVersion as $fixedVersion) {
                $json['fixedVersion'][] = $fixedVersion;
            }
        }
        if (null !== $this->excludedSystem) $json['excludedSystem'] = $this->excludedSystem;
        if (null !== $this->includeDesignations) $json['includeDesignations'] = $this->includeDesignations;
        if (null !== $this->designation) $json['designation'] = $this->designation;
        if (null !== $this->includeDefinition) $json['includeDefinition'] = $this->includeDefinition;
        if (null !== $this->activeOnly) $json['activeOnly'] = $this->activeOnly;
        if (null !== $this->excludeNested) $json['excludeNested'] = $this->excludeNested;
        if (null !== $this->excludeNotForUI) $json['excludeNotForUI'] = $this->excludeNotForUI;
        if (null !== $this->excludePostCoordinated) $json['excludePostCoordinated'] = $this->excludePostCoordinated;
        if (null !== $this->displayLanguage) $json['displayLanguage'] = $this->displayLanguage;
        if (null !== $this->limitedExpansion) $json['limitedExpansion'] = $this->limitedExpansion;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ExpansionProfile xmlns="http://hl7.org/fhir"></ExpansionProfile>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->version) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
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
        if (0 < count($this->fixedVersion)) {
            foreach($this->fixedVersion as $fixedVersion) {
                $fixedVersion->xmlSerialize(true, $sxe->addChild('fixedVersion'));
            }
        }
        if (null !== $this->excludedSystem) $this->excludedSystem->xmlSerialize(true, $sxe->addChild('excludedSystem'));
        if (null !== $this->includeDesignations) $this->includeDesignations->xmlSerialize(true, $sxe->addChild('includeDesignations'));
        if (null !== $this->designation) $this->designation->xmlSerialize(true, $sxe->addChild('designation'));
        if (null !== $this->includeDefinition) $this->includeDefinition->xmlSerialize(true, $sxe->addChild('includeDefinition'));
        if (null !== $this->activeOnly) $this->activeOnly->xmlSerialize(true, $sxe->addChild('activeOnly'));
        if (null !== $this->excludeNested) $this->excludeNested->xmlSerialize(true, $sxe->addChild('excludeNested'));
        if (null !== $this->excludeNotForUI) $this->excludeNotForUI->xmlSerialize(true, $sxe->addChild('excludeNotForUI'));
        if (null !== $this->excludePostCoordinated) $this->excludePostCoordinated->xmlSerialize(true, $sxe->addChild('excludePostCoordinated'));
        if (null !== $this->displayLanguage) $this->displayLanguage->xmlSerialize(true, $sxe->addChild('displayLanguage'));
        if (null !== $this->limitedExpansion) $this->limitedExpansion->xmlSerialize(true, $sxe->addChild('limitedExpansion'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}