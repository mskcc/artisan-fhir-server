<?php namespace Fhir\V_400\FHIRResource\FHIRMolecularSequence;

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
 * Raw data describing a biological sequence.
 */
class FHIRMolecularSequenceStructureVariant extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Information about chromosome structure variation DNA change type.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $variantType = null;

    /**
     * Used to indicate if the outer and inner start-end values have the same meaning.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $exact = null;

    /**
     * Length of the variant chromosome.
     * @var \Fhir\V_400\FHIRElement\FHIRInteger
     */
    public $length = null;

    /**
     * Structural variant outer.
     * @var \Fhir\V_400\FHIRResource\FHIRMolecularSequence\FHIRMolecularSequenceOuter
     */
    public $outer = null;

    /**
     * Structural variant inner.
     * @var \Fhir\V_400\FHIRResource\FHIRMolecularSequence\FHIRMolecularSequenceInner
     */
    public $inner = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MolecularSequence.StructureVariant';

    /**
     * Information about chromosome structure variation DNA change type.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getVariantType()
    {
        return $this->variantType;
    }

    /**
     * Information about chromosome structure variation DNA change type.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $variantType
     * @return $this
     */
    public function setVariantType($variantType)
    {
        $this->variantType = $variantType;
        return $this;
    }

    /**
     * Used to indicate if the outer and inner start-end values have the same meaning.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getExact()
    {
        return $this->exact;
    }

    /**
     * Used to indicate if the outer and inner start-end values have the same meaning.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $exact
     * @return $this
     */
    public function setExact($exact)
    {
        $this->exact = $exact;
        return $this;
    }

    /**
     * Length of the variant chromosome.
     * @return \Fhir\V_400\FHIRElement\FHIRInteger
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Length of the variant chromosome.
     * @param \Fhir\V_400\FHIRElement\FHIRInteger $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Structural variant outer.
     * @return \Fhir\V_400\FHIRResource\FHIRMolecularSequence\FHIRMolecularSequenceOuter
     */
    public function getOuter()
    {
        return $this->outer;
    }

    /**
     * Structural variant outer.
     * @param \Fhir\V_400\FHIRResource\FHIRMolecularSequence\FHIRMolecularSequenceOuter $outer
     * @return $this
     */
    public function setOuter($outer)
    {
        $this->outer = $outer;
        return $this;
    }

    /**
     * Structural variant inner.
     * @return \Fhir\V_400\FHIRResource\FHIRMolecularSequence\FHIRMolecularSequenceInner
     */
    public function getInner()
    {
        return $this->inner;
    }

    /**
     * Structural variant inner.
     * @param \Fhir\V_400\FHIRResource\FHIRMolecularSequence\FHIRMolecularSequenceInner $inner
     * @return $this
     */
    public function setInner($inner)
    {
        $this->inner = $inner;
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
        if (null !== $this->variantType) $json['variantType'] = $this->variantType;
        if (null !== $this->exact) $json['exact'] = $this->exact;
        if (null !== $this->length) $json['length'] = $this->length;
        if (null !== $this->outer) $json['outer'] = $this->outer;
        if (null !== $this->inner) $json['inner'] = $this->inner;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MolecularSequenceStructureVariant xmlns="http://hl7.org/fhir"></MolecularSequenceStructureVariant>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->variantType) $this->variantType->xmlSerialize(true, $sxe->addChild('variantType'));
        if (null !== $this->exact) $this->exact->xmlSerialize(true, $sxe->addChild('exact'));
        if (null !== $this->length) $this->length->xmlSerialize(true, $sxe->addChild('length'));
        if (null !== $this->outer) $this->outer->xmlSerialize(true, $sxe->addChild('outer'));
        if (null !== $this->inner) $this->inner->xmlSerialize(true, $sxe->addChild('inner'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}