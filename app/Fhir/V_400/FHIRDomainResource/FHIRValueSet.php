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
 * A ValueSet resource instance specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [[[CodeSystem]]] definitions and their use in [coded elements](terminologies.html).
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRValueSet extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An absolute URI that is used to identify this value set when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this value set is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the value set is stored on different servers.
     * @var \Fhir\V_400\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * A formal identifier that is used to identify this value set when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The identifier that is used to identify this version of the value set when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the value set author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A natural language name identifying the value set. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A short, descriptive, user-friendly title for the value set.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * The status of this value set. Enables tracking the life-cycle of the content. The status of the value set applies to the value set definition (ValueSet.compose) and the associated ValueSet metadata. Expansions do not have a state.
     * @var \Fhir\V_400\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * A Boolean value to indicate that this value set is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The date (and optionally time) when the value set was created or revised (e.g. the 'content logical definition').
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The name of the organization or individual that published the value set.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \Fhir\V_400\FHIRElement\FHIRContactDetail[]
     */
    public $contact = array();

    /**
     * A free text natural language description of the value set from a consumer's perspective. The textual description specifies the span of meanings for concepts to be included within the Value Set Expansion, and also may specify the intended use and limitations of the Value Set.
     * @var \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate value set instances.
     * @var \Fhir\V_400\FHIRElement\FHIRUsageContext[]
     */
    public $useContext = array();

    /**
     * A legal or geographic region in which the value set is intended to be used.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $jurisdiction = array();

    /**
     * If this is set to 'true', then no new versions of the content logical definition can be created.  Note: Other metadata might still change.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $immutable = null;

    /**
     * Explanation of why this value set is needed and why it has been designed as it has.
     * @var \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public $purpose = null;

    /**
     * A copyright statement relating to the value set and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the value set.
     * @var \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public $copyright = null;

    /**
     * A set of criteria that define the contents of the value set by including or excluding codes selected from the specified code system(s) that the value set draws from. This is also known as the Content Logical Definition (CLD).
     * @var \Fhir\V_400\FHIRResource\FHIRValueSet\FHIRValueSetCompose
     */
    public $compose = null;

    /**
     * A value set can also be "expanded", where the value set is turned into a simple collection of enumerated codes. This element holds the expansion, if it has been performed.
     * @var \Fhir\V_400\FHIRResource\FHIRValueSet\FHIRValueSetExpansion
     */
    public $expansion = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ValueSet';

    /**
     * An absolute URI that is used to identify this value set when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this value set is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the value set is stored on different servers.
     * @return \Fhir\V_400\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URI that is used to identify this value set when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this value set is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the value set is stored on different servers.
     * @param \Fhir\V_400\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * A formal identifier that is used to identify this value set when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A formal identifier that is used to identify this value set when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the value set when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the value set author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the value set when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the value set author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @param \Fhir\V_400\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A natural language name identifying the value set. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A natural language name identifying the value set. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @param \Fhir\V_400\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A short, descriptive, user-friendly title for the value set.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A short, descriptive, user-friendly title for the value set.
     * @param \Fhir\V_400\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * The status of this value set. Enables tracking the life-cycle of the content. The status of the value set applies to the value set definition (ValueSet.compose) and the associated ValueSet metadata. Expansions do not have a state.
     * @return \Fhir\V_400\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this value set. Enables tracking the life-cycle of the content. The status of the value set applies to the value set definition (ValueSet.compose) and the associated ValueSet metadata. Expansions do not have a state.
     * @param \Fhir\V_400\FHIRElement\FHIRPublicationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A Boolean value to indicate that this value set is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * A Boolean value to indicate that this value set is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The date (and optionally time) when the value set was created or revised (e.g. the 'content logical definition').
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date (and optionally time) when the value set was created or revised (e.g. the 'content logical definition').
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * The name of the organization or individual that published the value set.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the organization or individual that published the value set.
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
     * A free text natural language description of the value set from a consumer's perspective. The textual description specifies the span of meanings for concepts to be included within the Value Set Expansion, and also may specify the intended use and limitations of the Value Set.
     * @return \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the value set from a consumer's perspective. The textual description specifies the span of meanings for concepts to be included within the Value Set Expansion, and also may specify the intended use and limitations of the Value Set.
     * @param \Fhir\V_400\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate value set instances.
     * @return \Fhir\V_400\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate value set instances.
     * @param \Fhir\V_400\FHIRElement\FHIRUsageContext $useContext
     * @return $this
     */
    public function addUseContext($useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * A legal or geographic region in which the value set is intended to be used.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A legal or geographic region in which the value set is intended to be used.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return $this
     */
    public function addJurisdiction($jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * If this is set to 'true', then no new versions of the content logical definition can be created.  Note: Other metadata might still change.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getImmutable()
    {
        return $this->immutable;
    }

    /**
     * If this is set to 'true', then no new versions of the content logical definition can be created.  Note: Other metadata might still change.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $immutable
     * @return $this
     */
    public function setImmutable($immutable)
    {
        $this->immutable = $immutable;
        return $this;
    }

    /**
     * Explanation of why this value set is needed and why it has been designed as it has.
     * @return \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Explanation of why this value set is needed and why it has been designed as it has.
     * @param \Fhir\V_400\FHIRElement\FHIRMarkdown $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * A copyright statement relating to the value set and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the value set.
     * @return \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A copyright statement relating to the value set and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the value set.
     * @param \Fhir\V_400\FHIRElement\FHIRMarkdown $copyright
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * A set of criteria that define the contents of the value set by including or excluding codes selected from the specified code system(s) that the value set draws from. This is also known as the Content Logical Definition (CLD).
     * @return \Fhir\V_400\FHIRResource\FHIRValueSet\FHIRValueSetCompose
     */
    public function getCompose()
    {
        return $this->compose;
    }

    /**
     * A set of criteria that define the contents of the value set by including or excluding codes selected from the specified code system(s) that the value set draws from. This is also known as the Content Logical Definition (CLD).
     * @param \Fhir\V_400\FHIRResource\FHIRValueSet\FHIRValueSetCompose $compose
     * @return $this
     */
    public function setCompose($compose)
    {
        $this->compose = $compose;
        return $this;
    }

    /**
     * A value set can also be "expanded", where the value set is turned into a simple collection of enumerated codes. This element holds the expansion, if it has been performed.
     * @return \Fhir\V_400\FHIRResource\FHIRValueSet\FHIRValueSetExpansion
     */
    public function getExpansion()
    {
        return $this->expansion;
    }

    /**
     * A value set can also be "expanded", where the value set is turned into a simple collection of enumerated codes. This element holds the expansion, if it has been performed.
     * @param \Fhir\V_400\FHIRResource\FHIRValueSet\FHIRValueSetExpansion $expansion
     * @return $this
     */
    public function setExpansion($expansion)
    {
        $this->expansion = $expansion;
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
        if (null !== $this->immutable) $json['immutable'] = $this->immutable;
        if (null !== $this->purpose) $json['purpose'] = $this->purpose;
        if (null !== $this->copyright) $json['copyright'] = $this->copyright;
        if (null !== $this->compose) $json['compose'] = $this->compose;
        if (null !== $this->expansion) $json['expansion'] = $this->expansion;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ValueSet xmlns="http://hl7.org/fhir"></ValueSet>');
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
        if (null !== $this->immutable) $this->immutable->xmlSerialize(true, $sxe->addChild('immutable'));
        if (null !== $this->purpose) $this->purpose->xmlSerialize(true, $sxe->addChild('purpose'));
        if (null !== $this->copyright) $this->copyright->xmlSerialize(true, $sxe->addChild('copyright'));
        if (null !== $this->compose) $this->compose->xmlSerialize(true, $sxe->addChild('compose'));
        if (null !== $this->expansion) $this->expansion->xmlSerialize(true, $sxe->addChild('expansion'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}