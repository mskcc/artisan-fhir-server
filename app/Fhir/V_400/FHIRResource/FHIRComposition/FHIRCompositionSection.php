<?php namespace Fhir\V_400\FHIRResource\FHIRComposition;

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

use Fhir\V_400\FHIRElement\FHIRBackboneElement;

/**
 * A set of healthcare-related information that is assembled together into a single logical package that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement. A Composition defines the structure and narrative content necessary for a document. However, a Composition alone does not constitute a document. Rather, the Composition must be the first entry in a Bundle where Bundle.type=document, and any other resources referenced from Composition must be included as subsequent entries in the Bundle (for example Patient, Practitioner, Encounter, etc.).
 */
class FHIRCompositionSection extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The label for this particular section.  This will be part of the rendered content for the document, and is often used to build a table of contents.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * A code identifying the kind of content contained within the section. This must be consistent with the section title.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Identifies who is responsible for the information in this section, not necessarily who typed it in.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $author = array();

    /**
     * The actual focus of the section when it is not the subject of the composition, but instead represents something or someone associated with the subject such as (for a patient subject) a spouse, parent, fetus, or donor. If not focus is specified, the focus is assumed to be focus of the parent section, or, for a section in the Composition itself, the subject of the composition. Sections with a focus SHALL only include resources where the logical subject (patient, subject, focus, etc.) matches the section focus, or the resources have no logical subject (few resources).
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $focus = null;

    /**
     * A human-readable narrative that contains the attested content of the section, used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative.
     * @var \Fhir\V_400\FHIRElement\FHIRNarrative
     */
    public $text = null;

    /**
     * How the entry list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     * @var \Fhir\V_400\FHIRElement\FHIRListMode
     */
    public $mode = null;

    /**
     * Specifies the order applied to the items in the section entries.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $orderedBy = null;

    /**
     * A reference to the actual resource from which the narrative in the section is derived.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $entry = array();

    /**
     * If the section is empty, why the list is empty. An empty section typically has some text explaining the empty reason.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $emptyReason = null;

    /**
     * A nested sub-section within this section.
     * @var \Fhir\V_400\FHIRResource\FHIRComposition\FHIRCompositionSection[]
     */
    public $section = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Composition.Section';

    /**
     * The label for this particular section.  This will be part of the rendered content for the document, and is often used to build a table of contents.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * The label for this particular section.  This will be part of the rendered content for the document, and is often used to build a table of contents.
     * @param \Fhir\V_400\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * A code identifying the kind of content contained within the section. This must be consistent with the section title.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A code identifying the kind of content contained within the section. This must be consistent with the section title.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Identifies who is responsible for the information in this section, not necessarily who typed it in.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Identifies who is responsible for the information in this section, not necessarily who typed it in.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $author
     * @return $this
     */
    public function addAuthor($author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * The actual focus of the section when it is not the subject of the composition, but instead represents something or someone associated with the subject such as (for a patient subject) a spouse, parent, fetus, or donor. If not focus is specified, the focus is assumed to be focus of the parent section, or, for a section in the Composition itself, the subject of the composition. Sections with a focus SHALL only include resources where the logical subject (patient, subject, focus, etc.) matches the section focus, or the resources have no logical subject (few resources).
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * The actual focus of the section when it is not the subject of the composition, but instead represents something or someone associated with the subject such as (for a patient subject) a spouse, parent, fetus, or donor. If not focus is specified, the focus is assumed to be focus of the parent section, or, for a section in the Composition itself, the subject of the composition. Sections with a focus SHALL only include resources where the logical subject (patient, subject, focus, etc.) matches the section focus, or the resources have no logical subject (few resources).
     * @param \Fhir\V_400\FHIRElement\FHIRReference $focus
     * @return $this
     */
    public function setFocus($focus)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * A human-readable narrative that contains the attested content of the section, used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative.
     * @return \Fhir\V_400\FHIRElement\FHIRNarrative
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A human-readable narrative that contains the attested content of the section, used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative.
     * @param \Fhir\V_400\FHIRElement\FHIRNarrative $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * How the entry list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     * @return \Fhir\V_400\FHIRElement\FHIRListMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * How the entry list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     * @param \Fhir\V_400\FHIRElement\FHIRListMode $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Specifies the order applied to the items in the section entries.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getOrderedBy()
    {
        return $this->orderedBy;
    }

    /**
     * Specifies the order applied to the items in the section entries.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $orderedBy
     * @return $this
     */
    public function setOrderedBy($orderedBy)
    {
        $this->orderedBy = $orderedBy;
        return $this;
    }

    /**
     * A reference to the actual resource from which the narrative in the section is derived.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * A reference to the actual resource from which the narrative in the section is derived.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $entry
     * @return $this
     */
    public function addEntry($entry)
    {
        $this->entry[] = $entry;
        return $this;
    }

    /**
     * If the section is empty, why the list is empty. An empty section typically has some text explaining the empty reason.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getEmptyReason()
    {
        return $this->emptyReason;
    }

    /**
     * If the section is empty, why the list is empty. An empty section typically has some text explaining the empty reason.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $emptyReason
     * @return $this
     */
    public function setEmptyReason($emptyReason)
    {
        $this->emptyReason = $emptyReason;
        return $this;
    }

    /**
     * A nested sub-section within this section.
     * @return \Fhir\V_400\FHIRResource\FHIRComposition\FHIRCompositionSection[]
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * A nested sub-section within this section.
     * @param \Fhir\V_400\FHIRResource\FHIRComposition\FHIRCompositionSection $section
     * @return $this
     */
    public function addSection($section)
    {
        $this->section[] = $section;
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
        if (null !== $this->title) $json['title'] = $this->title;
        if (null !== $this->code) $json['code'] = $this->code;
        if (0 < count($this->author)) {
            $json['author'] = [];
            foreach($this->author as $author) {
                $json['author'][] = $author;
            }
        }
        if (null !== $this->focus) $json['focus'] = $this->focus;
        if (null !== $this->text) $json['text'] = $this->text;
        if (null !== $this->mode) $json['mode'] = $this->mode;
        if (null !== $this->orderedBy) $json['orderedBy'] = $this->orderedBy;
        if (0 < count($this->entry)) {
            $json['entry'] = [];
            foreach($this->entry as $entry) {
                $json['entry'][] = $entry;
            }
        }
        if (null !== $this->emptyReason) $json['emptyReason'] = $this->emptyReason;
        if (0 < count($this->section)) {
            $json['section'] = [];
            foreach($this->section as $section) {
                $json['section'][] = $section;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CompositionSection xmlns="http://hl7.org/fhir"></CompositionSection>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (0 < count($this->author)) {
            foreach($this->author as $author) {
                $author->xmlSerialize(true, $sxe->addChild('author'));
            }
        }
        if (null !== $this->focus) $this->focus->xmlSerialize(true, $sxe->addChild('focus'));
        if (null !== $this->text) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (null !== $this->mode) $this->mode->xmlSerialize(true, $sxe->addChild('mode'));
        if (null !== $this->orderedBy) $this->orderedBy->xmlSerialize(true, $sxe->addChild('orderedBy'));
        if (0 < count($this->entry)) {
            foreach($this->entry as $entry) {
                $entry->xmlSerialize(true, $sxe->addChild('entry'));
            }
        }
        if (null !== $this->emptyReason) $this->emptyReason->xmlSerialize(true, $sxe->addChild('emptyReason'));
        if (0 < count($this->section)) {
            foreach($this->section as $section) {
                $section->xmlSerialize(true, $sxe->addChild('section'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}