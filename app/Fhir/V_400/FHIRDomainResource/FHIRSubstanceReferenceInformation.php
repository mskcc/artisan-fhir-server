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
 * Todo.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSubstanceReferenceInformation extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Todo.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * Todo.
     * @var \Fhir\V_400\FHIRResource\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGene[]
     */
    public $gene = array();

    /**
     * Todo.
     * @var \Fhir\V_400\FHIRResource\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGeneElement[]
     */
    public $geneElement = array();

    /**
     * Todo.
     * @var \Fhir\V_400\FHIRResource\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationClassification[]
     */
    public $classification = array();

    /**
     * Todo.
     * @var \Fhir\V_400\FHIRResource\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationTarget[]
     */
    public $target = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'SubstanceReferenceInformation';

    /**
     * Todo.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Todo.
     * @param \Fhir\V_400\FHIRElement\FHIRString $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Todo.
     * @return \Fhir\V_400\FHIRResource\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGene[]
     */
    public function getGene()
    {
        return $this->gene;
    }

    /**
     * Todo.
     * @param \Fhir\V_400\FHIRResource\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGene $gene
     * @return $this
     */
    public function addGene($gene)
    {
        $this->gene[] = $gene;
        return $this;
    }

    /**
     * Todo.
     * @return \Fhir\V_400\FHIRResource\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGeneElement[]
     */
    public function getGeneElement()
    {
        return $this->geneElement;
    }

    /**
     * Todo.
     * @param \Fhir\V_400\FHIRResource\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGeneElement $geneElement
     * @return $this
     */
    public function addGeneElement($geneElement)
    {
        $this->geneElement[] = $geneElement;
        return $this;
    }

    /**
     * Todo.
     * @return \Fhir\V_400\FHIRResource\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationClassification[]
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Todo.
     * @param \Fhir\V_400\FHIRResource\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationClassification $classification
     * @return $this
     */
    public function addClassification($classification)
    {
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * Todo.
     * @return \Fhir\V_400\FHIRResource\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationTarget[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Todo.
     * @param \Fhir\V_400\FHIRResource\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationTarget $target
     * @return $this
     */
    public function addTarget($target)
    {
        $this->target[] = $target;
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
        if (null !== $this->comment) $json['comment'] = $this->comment;
        if (0 < count($this->gene)) {
            $json['gene'] = [];
            foreach($this->gene as $gene) {
                $json['gene'][] = $gene;
            }
        }
        if (0 < count($this->geneElement)) {
            $json['geneElement'] = [];
            foreach($this->geneElement as $geneElement) {
                $json['geneElement'][] = $geneElement;
            }
        }
        if (0 < count($this->classification)) {
            $json['classification'] = [];
            foreach($this->classification as $classification) {
                $json['classification'][] = $classification;
            }
        }
        if (0 < count($this->target)) {
            $json['target'] = [];
            foreach($this->target as $target) {
                $json['target'][] = $target;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SubstanceReferenceInformation xmlns="http://hl7.org/fhir"></SubstanceReferenceInformation>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->comment) $this->comment->xmlSerialize(true, $sxe->addChild('comment'));
        if (0 < count($this->gene)) {
            foreach($this->gene as $gene) {
                $gene->xmlSerialize(true, $sxe->addChild('gene'));
            }
        }
        if (0 < count($this->geneElement)) {
            foreach($this->geneElement as $geneElement) {
                $geneElement->xmlSerialize(true, $sxe->addChild('geneElement'));
            }
        }
        if (0 < count($this->classification)) {
            foreach($this->classification as $classification) {
                $classification->xmlSerialize(true, $sxe->addChild('classification'));
            }
        }
        if (0 < count($this->target)) {
            foreach($this->target as $target) {
                $target->xmlSerialize(true, $sxe->addChild('target'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}