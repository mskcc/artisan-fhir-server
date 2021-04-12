<?php namespace Fhir\V_400\FHIRResource\FHIRSpecimenDefinition;

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
 * A kind of specimen with associated set of requirements.
 */
class FHIRSpecimenDefinitionContainer extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The type of material of the container.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $material = null;

    /**
     * The type of container used to contain this kind of specimen.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Color of container cap.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $cap = null;

    /**
     * The textual description of the kind of container.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The capacity (volume or other measure) of this kind of container.
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $capacity = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $minimumVolumeQuantity = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $minimumVolumeString = null;

    /**
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA.
     * @var \Fhir\V_400\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionAdditive[]
     */
    public $additive = array();

    /**
     * Special processing that should be applied to the container for this kind of specimen.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $preparation = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'SpecimenDefinition.Container';

    /**
     * The type of material of the container.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * The type of material of the container.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $material
     * @return $this
     */
    public function setMaterial($material)
    {
        $this->material = $material;
        return $this;
    }

    /**
     * The type of container used to contain this kind of specimen.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of container used to contain this kind of specimen.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Color of container cap.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Color of container cap.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $cap
     * @return $this
     */
    public function setCap($cap)
    {
        $this->cap = $cap;
        return $this;
    }

    /**
     * The textual description of the kind of container.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The textual description of the kind of container.
     * @param \Fhir\V_400\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The capacity (volume or other measure) of this kind of container.
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * The capacity (volume or other measure) of this kind of container.
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity $capacity
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public function getMinimumVolumeQuantity()
    {
        return $this->minimumVolumeQuantity;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity $minimumVolumeQuantity
     * @return $this
     */
    public function setMinimumVolumeQuantity($minimumVolumeQuantity)
    {
        $this->minimumVolumeQuantity = $minimumVolumeQuantity;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getMinimumVolumeString()
    {
        return $this->minimumVolumeString;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRString $minimumVolumeString
     * @return $this
     */
    public function setMinimumVolumeString($minimumVolumeString)
    {
        $this->minimumVolumeString = $minimumVolumeString;
        return $this;
    }

    /**
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA.
     * @return \Fhir\V_400\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionAdditive[]
     */
    public function getAdditive()
    {
        return $this->additive;
    }

    /**
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA.
     * @param \Fhir\V_400\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionAdditive $additive
     * @return $this
     */
    public function addAdditive($additive)
    {
        $this->additive[] = $additive;
        return $this;
    }

    /**
     * Special processing that should be applied to the container for this kind of specimen.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getPreparation()
    {
        return $this->preparation;
    }

    /**
     * Special processing that should be applied to the container for this kind of specimen.
     * @param \Fhir\V_400\FHIRElement\FHIRString $preparation
     * @return $this
     */
    public function setPreparation($preparation)
    {
        $this->preparation = $preparation;
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
        if (null !== $this->material) $json['material'] = $this->material;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->cap) $json['cap'] = $this->cap;
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->capacity) $json['capacity'] = $this->capacity;
        if (null !== $this->minimumVolumeQuantity) $json['minimumVolumeQuantity'] = $this->minimumVolumeQuantity;
        if (null !== $this->minimumVolumeString) $json['minimumVolumeString'] = $this->minimumVolumeString;
        if (0 < count($this->additive)) {
            $json['additive'] = [];
            foreach($this->additive as $additive) {
                $json['additive'][] = $additive;
            }
        }
        if (null !== $this->preparation) $json['preparation'] = $this->preparation;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SpecimenDefinitionContainer xmlns="http://hl7.org/fhir"></SpecimenDefinitionContainer>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->material) $this->material->xmlSerialize(true, $sxe->addChild('material'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->cap) $this->cap->xmlSerialize(true, $sxe->addChild('cap'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->capacity) $this->capacity->xmlSerialize(true, $sxe->addChild('capacity'));
        if (null !== $this->minimumVolumeQuantity) $this->minimumVolumeQuantity->xmlSerialize(true, $sxe->addChild('minimumVolumeQuantity'));
        if (null !== $this->minimumVolumeString) $this->minimumVolumeString->xmlSerialize(true, $sxe->addChild('minimumVolumeString'));
        if (0 < count($this->additive)) {
            foreach($this->additive as $additive) {
                $additive->xmlSerialize(true, $sxe->addChild('additive'));
            }
        }
        if (null !== $this->preparation) $this->preparation->xmlSerialize(true, $sxe->addChild('preparation'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}