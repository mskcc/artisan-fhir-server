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
 * The ModuleMetadata resource defines the common metadata elements used by quality improvement artifacts. This information includes descriptive and topical metadata to enable repository searches, as well as governance and evidentiary support information.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRModuleMetadata extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A logical identifier for the module such as the CMS or NQF identifiers for a measure artifact.
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The version of the module, if any. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge modules, refer to the Decision Support Service specification.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A short, descriptive title for the module.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * Identifies the type of knowledge module, such as a rule, library, documentation template, or measure.
     * @var \Fhir\V_301\FHIRElement\FHIRModuleMetadataType
     */
    public $type = null;

    /**
     * The status of the module.
     * @var \Fhir\V_301\FHIRElement\FHIRModuleMetadataStatus
     */
    public $status = null;

    /**
     * A description of the module from the consumer perspective.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * A brief description of the purpose of the module.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $purpose = null;

    /**
     * Notes about usage of the module.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $usage = null;

    /**
     * The date on which the module was published.
     * @var \Fhir\V_301\FHIRElement\FHIRDate
     */
    public $publicationDate = null;

    /**
     * The date on which the module content was last reviewed.
     * @var \Fhir\V_301\FHIRElement\FHIRDate
     */
    public $lastReviewDate = null;

    /**
     * The period during which the module content is effective.
     * @var \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * Specifies various attributes of the patient population for whom and/or environment of care in which, the knowledge module is applicable.
     * @var \Fhir\V_301\FHIRResource\FHIRModuleMetadata\FHIRModuleMetadataCoverage[]
     */
    public $coverage = array();

    /**
     * Clinical topics related to the content of the module.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $topic = array();

    /**
     * Keywords associated with the module.
     * @var \Fhir\V_301\FHIRElement\FHIRString[]
     */
    public $keyword = array();

    /**
     * A contributor to the content of the module.
     * @var \Fhir\V_301\FHIRResource\FHIRModuleMetadata\FHIRModuleMetadataContributor[]
     */
    public $contributor = array();

    /**
     * The organization responsible for publishing the module.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $publisher = null;

    /**
     * The organization responsible for stewardship of the module content.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $steward = null;

    /**
     * The legal rights declaration for the module.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $rightsDeclaration = null;

    /**
     * Related resources such as additional documentation, supporting evidence, or bibliographic references.
     * @var \Fhir\V_301\FHIRResource\FHIRModuleMetadata\FHIRModuleMetadataRelatedResource[]
     */
    public $relatedResource = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ModuleMetadata';

    /**
     * A logical identifier for the module such as the CMS or NQF identifiers for a measure artifact.
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A logical identifier for the module such as the CMS or NQF identifiers for a measure artifact.
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The version of the module, if any. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge modules, refer to the Decision Support Service specification.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version of the module, if any. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge modules, refer to the Decision Support Service specification.
     * @param \Fhir\V_301\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A short, descriptive title for the module.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A short, descriptive title for the module.
     * @param \Fhir\V_301\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Identifies the type of knowledge module, such as a rule, library, documentation template, or measure.
     * @return \Fhir\V_301\FHIRElement\FHIRModuleMetadataType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Identifies the type of knowledge module, such as a rule, library, documentation template, or measure.
     * @param \Fhir\V_301\FHIRElement\FHIRModuleMetadataType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The status of the module.
     * @return \Fhir\V_301\FHIRElement\FHIRModuleMetadataStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the module.
     * @param \Fhir\V_301\FHIRElement\FHIRModuleMetadataStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A description of the module from the consumer perspective.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of the module from the consumer perspective.
     * @param \Fhir\V_301\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * A brief description of the purpose of the module.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * A brief description of the purpose of the module.
     * @param \Fhir\V_301\FHIRElement\FHIRString $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Notes about usage of the module.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Notes about usage of the module.
     * @param \Fhir\V_301\FHIRElement\FHIRString $usage
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * The date on which the module was published.
     * @return \Fhir\V_301\FHIRElement\FHIRDate
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * The date on which the module was published.
     * @param \Fhir\V_301\FHIRElement\FHIRDate $publicationDate
     * @return $this
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
        return $this;
    }

    /**
     * The date on which the module content was last reviewed.
     * @return \Fhir\V_301\FHIRElement\FHIRDate
     */
    public function getLastReviewDate()
    {
        return $this->lastReviewDate;
    }

    /**
     * The date on which the module content was last reviewed.
     * @param \Fhir\V_301\FHIRElement\FHIRDate $lastReviewDate
     * @return $this
     */
    public function setLastReviewDate($lastReviewDate)
    {
        $this->lastReviewDate = $lastReviewDate;
        return $this;
    }

    /**
     * The period during which the module content is effective.
     * @return \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * The period during which the module content is effective.
     * @param \Fhir\V_301\FHIRElement\FHIRPeriod $effectivePeriod
     * @return $this
     */
    public function setEffectivePeriod($effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Specifies various attributes of the patient population for whom and/or environment of care in which, the knowledge module is applicable.
     * @return \Fhir\V_301\FHIRResource\FHIRModuleMetadata\FHIRModuleMetadataCoverage[]
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Specifies various attributes of the patient population for whom and/or environment of care in which, the knowledge module is applicable.
     * @param \Fhir\V_301\FHIRResource\FHIRModuleMetadata\FHIRModuleMetadataCoverage $coverage
     * @return $this
     */
    public function addCoverage($coverage)
    {
        $this->coverage[] = $coverage;
        return $this;
    }

    /**
     * Clinical topics related to the content of the module.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Clinical topics related to the content of the module.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $topic
     * @return $this
     */
    public function addTopic($topic)
    {
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * Keywords associated with the module.
     * @return \Fhir\V_301\FHIRElement\FHIRString[]
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Keywords associated with the module.
     * @param \Fhir\V_301\FHIRElement\FHIRString $keyword
     * @return $this
     */
    public function addKeyword($keyword)
    {
        $this->keyword[] = $keyword;
        return $this;
    }

    /**
     * A contributor to the content of the module.
     * @return \Fhir\V_301\FHIRResource\FHIRModuleMetadata\FHIRModuleMetadataContributor[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * A contributor to the content of the module.
     * @param \Fhir\V_301\FHIRResource\FHIRModuleMetadata\FHIRModuleMetadataContributor $contributor
     * @return $this
     */
    public function addContributor($contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * The organization responsible for publishing the module.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The organization responsible for publishing the module.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $publisher
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * The organization responsible for stewardship of the module content.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getSteward()
    {
        return $this->steward;
    }

    /**
     * The organization responsible for stewardship of the module content.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $steward
     * @return $this
     */
    public function setSteward($steward)
    {
        $this->steward = $steward;
        return $this;
    }

    /**
     * The legal rights declaration for the module.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getRightsDeclaration()
    {
        return $this->rightsDeclaration;
    }

    /**
     * The legal rights declaration for the module.
     * @param \Fhir\V_301\FHIRElement\FHIRString $rightsDeclaration
     * @return $this
     */
    public function setRightsDeclaration($rightsDeclaration)
    {
        $this->rightsDeclaration = $rightsDeclaration;
        return $this;
    }

    /**
     * Related resources such as additional documentation, supporting evidence, or bibliographic references.
     * @return \Fhir\V_301\FHIRResource\FHIRModuleMetadata\FHIRModuleMetadataRelatedResource[]
     */
    public function getRelatedResource()
    {
        return $this->relatedResource;
    }

    /**
     * Related resources such as additional documentation, supporting evidence, or bibliographic references.
     * @param \Fhir\V_301\FHIRResource\FHIRModuleMetadata\FHIRModuleMetadataRelatedResource $relatedResource
     * @return $this
     */
    public function addRelatedResource($relatedResource)
    {
        $this->relatedResource[] = $relatedResource;
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
        if (null !== $this->version) $json['version'] = $this->version;
        if (null !== $this->title) $json['title'] = $this->title;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->purpose) $json['purpose'] = $this->purpose;
        if (null !== $this->usage) $json['usage'] = $this->usage;
        if (null !== $this->publicationDate) $json['publicationDate'] = $this->publicationDate;
        if (null !== $this->lastReviewDate) $json['lastReviewDate'] = $this->lastReviewDate;
        if (null !== $this->effectivePeriod) $json['effectivePeriod'] = $this->effectivePeriod;
        if (0 < count($this->coverage)) {
            $json['coverage'] = [];
            foreach($this->coverage as $coverage) {
                $json['coverage'][] = $coverage;
            }
        }
        if (0 < count($this->topic)) {
            $json['topic'] = [];
            foreach($this->topic as $topic) {
                $json['topic'][] = $topic;
            }
        }
        if (0 < count($this->keyword)) {
            $json['keyword'] = [];
            foreach($this->keyword as $keyword) {
                $json['keyword'][] = $keyword;
            }
        }
        if (0 < count($this->contributor)) {
            $json['contributor'] = [];
            foreach($this->contributor as $contributor) {
                $json['contributor'][] = $contributor;
            }
        }
        if (null !== $this->publisher) $json['publisher'] = $this->publisher;
        if (null !== $this->steward) $json['steward'] = $this->steward;
        if (null !== $this->rightsDeclaration) $json['rightsDeclaration'] = $this->rightsDeclaration;
        if (0 < count($this->relatedResource)) {
            $json['relatedResource'] = [];
            foreach($this->relatedResource as $relatedResource) {
                $json['relatedResource'][] = $relatedResource;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ModuleMetadata xmlns="http://hl7.org/fhir"></ModuleMetadata>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->version) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->purpose) $this->purpose->xmlSerialize(true, $sxe->addChild('purpose'));
        if (null !== $this->usage) $this->usage->xmlSerialize(true, $sxe->addChild('usage'));
        if (null !== $this->publicationDate) $this->publicationDate->xmlSerialize(true, $sxe->addChild('publicationDate'));
        if (null !== $this->lastReviewDate) $this->lastReviewDate->xmlSerialize(true, $sxe->addChild('lastReviewDate'));
        if (null !== $this->effectivePeriod) $this->effectivePeriod->xmlSerialize(true, $sxe->addChild('effectivePeriod'));
        if (0 < count($this->coverage)) {
            foreach($this->coverage as $coverage) {
                $coverage->xmlSerialize(true, $sxe->addChild('coverage'));
            }
        }
        if (0 < count($this->topic)) {
            foreach($this->topic as $topic) {
                $topic->xmlSerialize(true, $sxe->addChild('topic'));
            }
        }
        if (0 < count($this->keyword)) {
            foreach($this->keyword as $keyword) {
                $keyword->xmlSerialize(true, $sxe->addChild('keyword'));
            }
        }
        if (0 < count($this->contributor)) {
            foreach($this->contributor as $contributor) {
                $contributor->xmlSerialize(true, $sxe->addChild('contributor'));
            }
        }
        if (null !== $this->publisher) $this->publisher->xmlSerialize(true, $sxe->addChild('publisher'));
        if (null !== $this->steward) $this->steward->xmlSerialize(true, $sxe->addChild('steward'));
        if (null !== $this->rightsDeclaration) $this->rightsDeclaration->xmlSerialize(true, $sxe->addChild('rightsDeclaration'));
        if (0 < count($this->relatedResource)) {
            foreach($this->relatedResource as $relatedResource) {
                $relatedResource->xmlSerialize(true, $sxe->addChild('relatedResource'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}