<?php namespace Fhir\V_400\FHIRResource\FHIRConceptMap;

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
 * A statement of relationships from one set of concepts to one or more other concepts - either concepts in code systems, or data element/data element concepts, or classes in class models.
 */
class FHIRConceptMapGroup extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * An absolute URI that identifies the source system where the concepts to be mapped are defined.
     * @var \Fhir\V_400\FHIRElement\FHIRUri
     */
    public $source = null;

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $sourceVersion = null;

    /**
     * An absolute URI that identifies the target system that the concepts will be mapped to.
     * @var \Fhir\V_400\FHIRElement\FHIRUri
     */
    public $target = null;

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $targetVersion = null;

    /**
     * Mappings for an individual concept in the source to one or more concepts in the target.
     * @var \Fhir\V_400\FHIRResource\FHIRConceptMap\FHIRConceptMapElement[]
     */
    public $element = array();

    /**
     * What to do when there is no mapping for the source concept. "Unmapped" does not include codes that are unmatched, and the unmapped element is ignored in a code is specified to have equivalence = unmatched.
     * @var \Fhir\V_400\FHIRResource\FHIRConceptMap\FHIRConceptMapUnmapped
     */
    public $unmapped = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ConceptMap.Group';

    /**
     * An absolute URI that identifies the source system where the concepts to be mapped are defined.
     * @return \Fhir\V_400\FHIRElement\FHIRUri
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * An absolute URI that identifies the source system where the concepts to be mapped are defined.
     * @param \Fhir\V_400\FHIRElement\FHIRUri $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getSourceVersion()
    {
        return $this->sourceVersion;
    }

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @param \Fhir\V_400\FHIRElement\FHIRString $sourceVersion
     * @return $this
     */
    public function setSourceVersion($sourceVersion)
    {
        $this->sourceVersion = $sourceVersion;
        return $this;
    }

    /**
     * An absolute URI that identifies the target system that the concepts will be mapped to.
     * @return \Fhir\V_400\FHIRElement\FHIRUri
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * An absolute URI that identifies the target system that the concepts will be mapped to.
     * @param \Fhir\V_400\FHIRElement\FHIRUri $target
     * @return $this
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getTargetVersion()
    {
        return $this->targetVersion;
    }

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @param \Fhir\V_400\FHIRElement\FHIRString $targetVersion
     * @return $this
     */
    public function setTargetVersion($targetVersion)
    {
        $this->targetVersion = $targetVersion;
        return $this;
    }

    /**
     * Mappings for an individual concept in the source to one or more concepts in the target.
     * @return \Fhir\V_400\FHIRResource\FHIRConceptMap\FHIRConceptMapElement[]
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Mappings for an individual concept in the source to one or more concepts in the target.
     * @param \Fhir\V_400\FHIRResource\FHIRConceptMap\FHIRConceptMapElement $element
     * @return $this
     */
    public function addElement($element)
    {
        $this->element[] = $element;
        return $this;
    }

    /**
     * What to do when there is no mapping for the source concept. "Unmapped" does not include codes that are unmatched, and the unmapped element is ignored in a code is specified to have equivalence = unmatched.
     * @return \Fhir\V_400\FHIRResource\FHIRConceptMap\FHIRConceptMapUnmapped
     */
    public function getUnmapped()
    {
        return $this->unmapped;
    }

    /**
     * What to do when there is no mapping for the source concept. "Unmapped" does not include codes that are unmatched, and the unmapped element is ignored in a code is specified to have equivalence = unmatched.
     * @param \Fhir\V_400\FHIRResource\FHIRConceptMap\FHIRConceptMapUnmapped $unmapped
     * @return $this
     */
    public function setUnmapped($unmapped)
    {
        $this->unmapped = $unmapped;
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
        if (null !== $this->source) $json['source'] = $this->source;
        if (null !== $this->sourceVersion) $json['sourceVersion'] = $this->sourceVersion;
        if (null !== $this->target) $json['target'] = $this->target;
        if (null !== $this->targetVersion) $json['targetVersion'] = $this->targetVersion;
        if (0 < count($this->element)) {
            $json['element'] = [];
            foreach($this->element as $element) {
                $json['element'][] = $element;
            }
        }
        if (null !== $this->unmapped) $json['unmapped'] = $this->unmapped;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ConceptMapGroup xmlns="http://hl7.org/fhir"></ConceptMapGroup>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->source) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (null !== $this->sourceVersion) $this->sourceVersion->xmlSerialize(true, $sxe->addChild('sourceVersion'));
        if (null !== $this->target) $this->target->xmlSerialize(true, $sxe->addChild('target'));
        if (null !== $this->targetVersion) $this->targetVersion->xmlSerialize(true, $sxe->addChild('targetVersion'));
        if (0 < count($this->element)) {
            foreach($this->element as $element) {
                $element->xmlSerialize(true, $sxe->addChild('element'));
            }
        }
        if (null !== $this->unmapped) $this->unmapped->xmlSerialize(true, $sxe->addChild('unmapped'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}