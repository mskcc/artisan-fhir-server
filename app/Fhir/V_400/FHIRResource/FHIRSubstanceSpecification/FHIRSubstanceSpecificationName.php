<?php namespace Fhir\V_400\FHIRResource\FHIRSubstanceSpecification;

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
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 */
class FHIRSubstanceSpecificationName extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The actual name.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Name type.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The status of the name.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $status = null;

    /**
     * If this is the preferred name for this substance.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $preferred = null;

    /**
     * Language of the name.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $language = array();

    /**
     * The use context of this name for example if there is a different name a drug active ingredient as opposed to a food colour additive.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $domain = array();

    /**
     * The jurisdiction where this name applies.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $jurisdiction = array();

    /**
     * A synonym of this name.
     * @var \Fhir\V_400\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName[]
     */
    public $synonym = array();

    /**
     * A translation for this name.
     * @var \Fhir\V_400\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName[]
     */
    public $translation = array();

    /**
     * Details of the official nature of this name.
     * @var \Fhir\V_400\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationOfficial[]
     */
    public $official = array();

    /**
     * Supporting literature.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $source = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'SubstanceSpecification.Name';

    /**
     * The actual name.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The actual name.
     * @param \Fhir\V_400\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Name type.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Name type.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The status of the name.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the name.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * If this is the preferred name for this substance.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getPreferred()
    {
        return $this->preferred;
    }

    /**
     * If this is the preferred name for this substance.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $preferred
     * @return $this
     */
    public function setPreferred($preferred)
    {
        $this->preferred = $preferred;
        return $this;
    }

    /**
     * Language of the name.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Language of the name.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $language
     * @return $this
     */
    public function addLanguage($language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * The use context of this name for example if there is a different name a drug active ingredient as opposed to a food colour additive.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * The use context of this name for example if there is a different name a drug active ingredient as opposed to a food colour additive.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $domain
     * @return $this
     */
    public function addDomain($domain)
    {
        $this->domain[] = $domain;
        return $this;
    }

    /**
     * The jurisdiction where this name applies.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * The jurisdiction where this name applies.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return $this
     */
    public function addJurisdiction($jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * A synonym of this name.
     * @return \Fhir\V_400\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName[]
     */
    public function getSynonym()
    {
        return $this->synonym;
    }

    /**
     * A synonym of this name.
     * @param \Fhir\V_400\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName $synonym
     * @return $this
     */
    public function addSynonym($synonym)
    {
        $this->synonym[] = $synonym;
        return $this;
    }

    /**
     * A translation for this name.
     * @return \Fhir\V_400\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName[]
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * A translation for this name.
     * @param \Fhir\V_400\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName $translation
     * @return $this
     */
    public function addTranslation($translation)
    {
        $this->translation[] = $translation;
        return $this;
    }

    /**
     * Details of the official nature of this name.
     * @return \Fhir\V_400\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationOfficial[]
     */
    public function getOfficial()
    {
        return $this->official;
    }

    /**
     * Details of the official nature of this name.
     * @param \Fhir\V_400\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationOfficial $official
     * @return $this
     */
    public function addOfficial($official)
    {
        $this->official[] = $official;
        return $this;
    }

    /**
     * Supporting literature.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Supporting literature.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $source
     * @return $this
     */
    public function addSource($source)
    {
        $this->source[] = $source;
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
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->preferred) $json['preferred'] = $this->preferred;
        if (0 < count($this->language)) {
            $json['language'] = [];
            foreach($this->language as $language) {
                $json['language'][] = $language;
            }
        }
        if (0 < count($this->domain)) {
            $json['domain'] = [];
            foreach($this->domain as $domain) {
                $json['domain'][] = $domain;
            }
        }
        if (0 < count($this->jurisdiction)) {
            $json['jurisdiction'] = [];
            foreach($this->jurisdiction as $jurisdiction) {
                $json['jurisdiction'][] = $jurisdiction;
            }
        }
        if (0 < count($this->synonym)) {
            $json['synonym'] = [];
            foreach($this->synonym as $synonym) {
                $json['synonym'][] = $synonym;
            }
        }
        if (0 < count($this->translation)) {
            $json['translation'] = [];
            foreach($this->translation as $translation) {
                $json['translation'][] = $translation;
            }
        }
        if (0 < count($this->official)) {
            $json['official'] = [];
            foreach($this->official as $official) {
                $json['official'][] = $official;
            }
        }
        if (0 < count($this->source)) {
            $json['source'] = [];
            foreach($this->source as $source) {
                $json['source'][] = $source;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SubstanceSpecificationName xmlns="http://hl7.org/fhir"></SubstanceSpecificationName>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->preferred) $this->preferred->xmlSerialize(true, $sxe->addChild('preferred'));
        if (0 < count($this->language)) {
            foreach($this->language as $language) {
                $language->xmlSerialize(true, $sxe->addChild('language'));
            }
        }
        if (0 < count($this->domain)) {
            foreach($this->domain as $domain) {
                $domain->xmlSerialize(true, $sxe->addChild('domain'));
            }
        }
        if (0 < count($this->jurisdiction)) {
            foreach($this->jurisdiction as $jurisdiction) {
                $jurisdiction->xmlSerialize(true, $sxe->addChild('jurisdiction'));
            }
        }
        if (0 < count($this->synonym)) {
            foreach($this->synonym as $synonym) {
                $synonym->xmlSerialize(true, $sxe->addChild('synonym'));
            }
        }
        if (0 < count($this->translation)) {
            foreach($this->translation as $translation) {
                $translation->xmlSerialize(true, $sxe->addChild('translation'));
            }
        }
        if (0 < count($this->official)) {
            foreach($this->official as $official) {
                $official->xmlSerialize(true, $sxe->addChild('official'));
            }
        }
        if (0 < count($this->source)) {
            foreach($this->source as $source) {
                $source->xmlSerialize(true, $sxe->addChild('source'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}