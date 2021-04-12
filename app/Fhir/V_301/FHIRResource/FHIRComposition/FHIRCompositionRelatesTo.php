<?php namespace Fhir\V_301\FHIRResource\FHIRComposition;

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

use Fhir\V_301\FHIRElement\FHIRBackboneElement;

/**
 * A set of healthcare-related information that is assembled together into a single logical document that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement. While a Composition defines the structure, it does not actually contain the content: rather the full content of a document is contained in a Bundle, of which the Composition is the first resource contained.
 */
class FHIRCompositionRelatesTo extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The type of relationship that this composition has with anther composition or document.
     * @var \Fhir\V_301\FHIRElement\FHIRDocumentRelationshipType
     */
    public $code = null;

    /**
     * The target composition/document of this relationship. (choose any one of target*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier
     */
    public $targetIdentifier = null;

    /**
     * The target composition/document of this relationship. (choose any one of target*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $targetReference = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Composition.RelatesTo';

    /**
     * The type of relationship that this composition has with anther composition or document.
     * @return \Fhir\V_301\FHIRElement\FHIRDocumentRelationshipType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The type of relationship that this composition has with anther composition or document.
     * @param \Fhir\V_301\FHIRElement\FHIRDocumentRelationshipType $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * The target composition/document of this relationship. (choose any one of target*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier
     */
    public function getTargetIdentifier()
    {
        return $this->targetIdentifier;
    }

    /**
     * The target composition/document of this relationship. (choose any one of target*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $targetIdentifier
     * @return $this
     */
    public function setTargetIdentifier($targetIdentifier)
    {
        $this->targetIdentifier = $targetIdentifier;
        return $this;
    }

    /**
     * The target composition/document of this relationship. (choose any one of target*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getTargetReference()
    {
        return $this->targetReference;
    }

    /**
     * The target composition/document of this relationship. (choose any one of target*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRReference $targetReference
     * @return $this
     */
    public function setTargetReference($targetReference)
    {
        $this->targetReference = $targetReference;
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
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->targetIdentifier) $json['targetIdentifier'] = $this->targetIdentifier;
        if (null !== $this->targetReference) $json['targetReference'] = $this->targetReference;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CompositionRelatesTo xmlns="http://hl7.org/fhir"></CompositionRelatesTo>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->targetIdentifier) $this->targetIdentifier->xmlSerialize(true, $sxe->addChild('targetIdentifier'));
        if (null !== $this->targetReference) $this->targetReference->xmlSerialize(true, $sxe->addChild('targetReference'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}