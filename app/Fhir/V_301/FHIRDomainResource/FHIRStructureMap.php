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
 * A Map of relationships between 2 structures that can be used to transform data.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRStructureMap extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An absolute URI that is used to identify this structure map when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this structure map is (or will be) published. The URL SHOULD include the major version of the structure map. For more information see [Technical and Business Versions](resource.html#versions).
     * @var \Fhir\V_301\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * A formal identifier that is used to identify this structure map when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The identifier that is used to identify this version of the structure map when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the structure map author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A natural language name identifying the structure map. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A short, descriptive, user-friendly title for the structure map.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * The status of this structure map. Enables tracking the life-cycle of the content.
     * @var \Fhir\V_301\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * A boolean value to indicate that this structure map is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The date  (and optionally time) when the structure map was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the structure map changes.
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The name of the individual or organization that published the structure map.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \Fhir\V_301\FHIRElement\FHIRContactDetail[]
     */
    public $contact = array();

    /**
     * A free text natural language description of the structure map from a consumer's perspective.
     * @var \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate structure map instances.
     * @var \Fhir\V_301\FHIRElement\FHIRUsageContext[]
     */
    public $useContext = array();

    /**
     * A legal or geographic region in which the structure map is intended to be used.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $jurisdiction = array();

    /**
     * Explaination of why this structure map is needed and why it has been designed as it has.
     * @var \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public $purpose = null;

    /**
     * A copyright statement relating to the structure map and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the structure map.
     * @var \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public $copyright = null;

    /**
     * A structure definition used by this map. The structure definition may describe instances that are converted, or the instances that are produced.
     * @var \Fhir\V_301\FHIRResource\FHIRStructureMap\FHIRStructureMapStructure[]
     */
    public $structure = array();

    /**
     * Other maps used by this map (canonical URLs).
     * @var \Fhir\V_301\FHIRElement\FHIRUri[]
     */
    public $import = array();

    /**
     * Organizes the mapping into managable chunks for human review/ease of maintenance.
     * @var \Fhir\V_301\FHIRResource\FHIRStructureMap\FHIRStructureMapGroup[]
     */
    public $group = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'StructureMap';

    /**
     * An absolute URI that is used to identify this structure map when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this structure map is (or will be) published. The URL SHOULD include the major version of the structure map. For more information see [Technical and Business Versions](resource.html#versions).
     * @return \Fhir\V_301\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URI that is used to identify this structure map when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this structure map is (or will be) published. The URL SHOULD include the major version of the structure map. For more information see [Technical and Business Versions](resource.html#versions).
     * @param \Fhir\V_301\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * A formal identifier that is used to identify this structure map when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A formal identifier that is used to identify this structure map when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the structure map when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the structure map author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the structure map when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the structure map author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @param \Fhir\V_301\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A natural language name identifying the structure map. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A natural language name identifying the structure map. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @param \Fhir\V_301\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A short, descriptive, user-friendly title for the structure map.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A short, descriptive, user-friendly title for the structure map.
     * @param \Fhir\V_301\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * The status of this structure map. Enables tracking the life-cycle of the content.
     * @return \Fhir\V_301\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this structure map. Enables tracking the life-cycle of the content.
     * @param \Fhir\V_301\FHIRElement\FHIRPublicationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A boolean value to indicate that this structure map is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * A boolean value to indicate that this structure map is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The date  (and optionally time) when the structure map was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the structure map changes.
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date  (and optionally time) when the structure map was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the structure map changes.
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * The name of the individual or organization that published the structure map.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the structure map.
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
     * A free text natural language description of the structure map from a consumer's perspective.
     * @return \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the structure map from a consumer's perspective.
     * @param \Fhir\V_301\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate structure map instances.
     * @return \Fhir\V_301\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate structure map instances.
     * @param \Fhir\V_301\FHIRElement\FHIRUsageContext $useContext
     * @return $this
     */
    public function addUseContext($useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * A legal or geographic region in which the structure map is intended to be used.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A legal or geographic region in which the structure map is intended to be used.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return $this
     */
    public function addJurisdiction($jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * Explaination of why this structure map is needed and why it has been designed as it has.
     * @return \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Explaination of why this structure map is needed and why it has been designed as it has.
     * @param \Fhir\V_301\FHIRElement\FHIRMarkdown $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * A copyright statement relating to the structure map and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the structure map.
     * @return \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A copyright statement relating to the structure map and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the structure map.
     * @param \Fhir\V_301\FHIRElement\FHIRMarkdown $copyright
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * A structure definition used by this map. The structure definition may describe instances that are converted, or the instances that are produced.
     * @return \Fhir\V_301\FHIRResource\FHIRStructureMap\FHIRStructureMapStructure[]
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * A structure definition used by this map. The structure definition may describe instances that are converted, or the instances that are produced.
     * @param \Fhir\V_301\FHIRResource\FHIRStructureMap\FHIRStructureMapStructure $structure
     * @return $this
     */
    public function addStructure($structure)
    {
        $this->structure[] = $structure;
        return $this;
    }

    /**
     * Other maps used by this map (canonical URLs).
     * @return \Fhir\V_301\FHIRElement\FHIRUri[]
     */
    public function getImport()
    {
        return $this->import;
    }

    /**
     * Other maps used by this map (canonical URLs).
     * @param \Fhir\V_301\FHIRElement\FHIRUri $import
     * @return $this
     */
    public function addImport($import)
    {
        $this->import[] = $import;
        return $this;
    }

    /**
     * Organizes the mapping into managable chunks for human review/ease of maintenance.
     * @return \Fhir\V_301\FHIRResource\FHIRStructureMap\FHIRStructureMapGroup[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Organizes the mapping into managable chunks for human review/ease of maintenance.
     * @param \Fhir\V_301\FHIRResource\FHIRStructureMap\FHIRStructureMapGroup $group
     * @return $this
     */
    public function addGroup($group)
    {
        $this->group[] = $group;
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
        if (0 < count($this->structure)) {
            $json['structure'] = [];
            foreach($this->structure as $structure) {
                $json['structure'][] = $structure;
            }
        }
        if (0 < count($this->import)) {
            $json['import'] = [];
            foreach($this->import as $import) {
                $json['import'][] = $import;
            }
        }
        if (0 < count($this->group)) {
            $json['group'] = [];
            foreach($this->group as $group) {
                $json['group'][] = $group;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<StructureMap xmlns="http://hl7.org/fhir"></StructureMap>');
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
        if (0 < count($this->structure)) {
            foreach($this->structure as $structure) {
                $structure->xmlSerialize(true, $sxe->addChild('structure'));
            }
        }
        if (0 < count($this->import)) {
            foreach($this->import as $import) {
                $import->xmlSerialize(true, $sxe->addChild('import'));
            }
        }
        if (0 < count($this->group)) {
            foreach($this->group as $group) {
                $group->xmlSerialize(true, $sxe->addChild('group'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}