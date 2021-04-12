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
 * A collection of documents compiled for a purpose together with metadata that applies to the collection.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDocumentManifest extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A single identifier that uniquely identifies this manifest. Principally used to refer to the manifest in non-FHIR contexts.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public $masterIdentifier = null;

    /**
     * Other identifiers associated with the document manifest, including version independent  identifiers.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The status of this document manifest.
     * @var \Fhir\V_400\FHIRElement\FHIRDocumentReferenceStatus
     */
    public $status = null;

    /**
     * The code specifying the type of clinical activity that resulted in placing the associated content into the DocumentManifest.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Who or what the set of documents is about. The documents can be about a person, (patient or healthcare practitioner), a device (i.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure). If the documents cross more than one subject, then more than one subject is allowed here (unusual use case).
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * When the document manifest was created for submission to the server (not necessarily the same thing as the actual resource last modified time, since it may be modified, replicated, etc.).
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * Identifies who is the author of the manifest. Manifest author is not necessarly the author of the references included.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $author = array();

    /**
     * A patient, practitioner, or organization for which this set of documents is intended.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $recipient = array();

    /**
     * Identifies the source system, application, or software that produced the document manifest.
     * @var \Fhir\V_400\FHIRElement\FHIRUri
     */
    public $source = null;

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The list of Resources that consist of the parts of this manifest.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $content = array();

    /**
     * Related identifiers or resources associated with the DocumentManifest.
     * @var \Fhir\V_400\FHIRResource\FHIRDocumentManifest\FHIRDocumentManifestRelated[]
     */
    public $related = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'DocumentManifest';

    /**
     * A single identifier that uniquely identifies this manifest. Principally used to refer to the manifest in non-FHIR contexts.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public function getMasterIdentifier()
    {
        return $this->masterIdentifier;
    }

    /**
     * A single identifier that uniquely identifies this manifest. Principally used to refer to the manifest in non-FHIR contexts.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $masterIdentifier
     * @return $this
     */
    public function setMasterIdentifier($masterIdentifier)
    {
        $this->masterIdentifier = $masterIdentifier;
        return $this;
    }

    /**
     * Other identifiers associated with the document manifest, including version independent  identifiers.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Other identifiers associated with the document manifest, including version independent  identifiers.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The status of this document manifest.
     * @return \Fhir\V_400\FHIRElement\FHIRDocumentReferenceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this document manifest.
     * @param \Fhir\V_400\FHIRElement\FHIRDocumentReferenceStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The code specifying the type of clinical activity that resulted in placing the associated content into the DocumentManifest.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The code specifying the type of clinical activity that resulted in placing the associated content into the DocumentManifest.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Who or what the set of documents is about. The documents can be about a person, (patient or healthcare practitioner), a device (i.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure). If the documents cross more than one subject, then more than one subject is allowed here (unusual use case).
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Who or what the set of documents is about. The documents can be about a person, (patient or healthcare practitioner), a device (i.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure). If the documents cross more than one subject, then more than one subject is allowed here (unusual use case).
     * @param \Fhir\V_400\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * When the document manifest was created for submission to the server (not necessarily the same thing as the actual resource last modified time, since it may be modified, replicated, etc.).
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * When the document manifest was created for submission to the server (not necessarily the same thing as the actual resource last modified time, since it may be modified, replicated, etc.).
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Identifies who is the author of the manifest. Manifest author is not necessarly the author of the references included.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Identifies who is the author of the manifest. Manifest author is not necessarly the author of the references included.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $author
     * @return $this
     */
    public function addAuthor($author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * A patient, practitioner, or organization for which this set of documents is intended.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * A patient, practitioner, or organization for which this set of documents is intended.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $recipient
     * @return $this
     */
    public function addRecipient($recipient)
    {
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * Identifies the source system, application, or software that produced the document manifest.
     * @return \Fhir\V_400\FHIRElement\FHIRUri
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Identifies the source system, application, or software that produced the document manifest.
     * @param \Fhir\V_400\FHIRElement\FHIRUri $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @param \Fhir\V_400\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The list of Resources that consist of the parts of this manifest.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * The list of Resources that consist of the parts of this manifest.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $content
     * @return $this
     */
    public function addContent($content)
    {
        $this->content[] = $content;
        return $this;
    }

    /**
     * Related identifiers or resources associated with the DocumentManifest.
     * @return \Fhir\V_400\FHIRResource\FHIRDocumentManifest\FHIRDocumentManifestRelated[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * Related identifiers or resources associated with the DocumentManifest.
     * @param \Fhir\V_400\FHIRResource\FHIRDocumentManifest\FHIRDocumentManifestRelated $related
     * @return $this
     */
    public function addRelated($related)
    {
        $this->related[] = $related;
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
        if (null !== $this->masterIdentifier) $json['masterIdentifier'] = $this->masterIdentifier;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->created) $json['created'] = $this->created;
        if (0 < count($this->author)) {
            $json['author'] = [];
            foreach($this->author as $author) {
                $json['author'][] = $author;
            }
        }
        if (0 < count($this->recipient)) {
            $json['recipient'] = [];
            foreach($this->recipient as $recipient) {
                $json['recipient'][] = $recipient;
            }
        }
        if (null !== $this->source) $json['source'] = $this->source;
        if (null !== $this->description) $json['description'] = $this->description;
        if (0 < count($this->content)) {
            $json['content'] = [];
            foreach($this->content as $content) {
                $json['content'][] = $content;
            }
        }
        if (0 < count($this->related)) {
            $json['related'] = [];
            foreach($this->related as $related) {
                $json['related'][] = $related;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DocumentManifest xmlns="http://hl7.org/fhir"></DocumentManifest>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->masterIdentifier) $this->masterIdentifier->xmlSerialize(true, $sxe->addChild('masterIdentifier'));
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->created) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (0 < count($this->author)) {
            foreach($this->author as $author) {
                $author->xmlSerialize(true, $sxe->addChild('author'));
            }
        }
        if (0 < count($this->recipient)) {
            foreach($this->recipient as $recipient) {
                $recipient->xmlSerialize(true, $sxe->addChild('recipient'));
            }
        }
        if (null !== $this->source) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->content)) {
            foreach($this->content as $content) {
                $content->xmlSerialize(true, $sxe->addChild('content'));
            }
        }
        if (0 < count($this->related)) {
            foreach($this->related as $related) {
                $related->xmlSerialize(true, $sxe->addChild('related'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}