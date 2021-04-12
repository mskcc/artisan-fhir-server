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
class FHIRMolecularSequenceRoc extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Invidual data point representing the GQ (genotype quality) score threshold.
     * @var \Fhir\V_400\FHIRElement\FHIRInteger[]
     */
    public $score = array();

    /**
     * The number of true positives if the GQ score threshold was set to "score" field value.
     * @var \Fhir\V_400\FHIRElement\FHIRInteger[]
     */
    public $numTP = array();

    /**
     * The number of false positives if the GQ score threshold was set to "score" field value.
     * @var \Fhir\V_400\FHIRElement\FHIRInteger[]
     */
    public $numFP = array();

    /**
     * The number of false negatives if the GQ score threshold was set to "score" field value.
     * @var \Fhir\V_400\FHIRElement\FHIRInteger[]
     */
    public $numFN = array();

    /**
     * Calculated precision if the GQ score threshold was set to "score" field value.
     * @var \Fhir\V_400\FHIRElement\FHIRDecimal[]
     */
    public $precision = array();

    /**
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     * @var \Fhir\V_400\FHIRElement\FHIRDecimal[]
     */
    public $sensitivity = array();

    /**
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     * @var \Fhir\V_400\FHIRElement\FHIRDecimal[]
     */
    public $fMeasure = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'MolecularSequence.Roc';

    /**
     * Invidual data point representing the GQ (genotype quality) score threshold.
     * @return \Fhir\V_400\FHIRElement\FHIRInteger[]
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Invidual data point representing the GQ (genotype quality) score threshold.
     * @param \Fhir\V_400\FHIRElement\FHIRInteger $score
     * @return $this
     */
    public function addScore($score)
    {
        $this->score[] = $score;
        return $this;
    }

    /**
     * The number of true positives if the GQ score threshold was set to "score" field value.
     * @return \Fhir\V_400\FHIRElement\FHIRInteger[]
     */
    public function getNumTP()
    {
        return $this->numTP;
    }

    /**
     * The number of true positives if the GQ score threshold was set to "score" field value.
     * @param \Fhir\V_400\FHIRElement\FHIRInteger $numTP
     * @return $this
     */
    public function addNumTP($numTP)
    {
        $this->numTP[] = $numTP;
        return $this;
    }

    /**
     * The number of false positives if the GQ score threshold was set to "score" field value.
     * @return \Fhir\V_400\FHIRElement\FHIRInteger[]
     */
    public function getNumFP()
    {
        return $this->numFP;
    }

    /**
     * The number of false positives if the GQ score threshold was set to "score" field value.
     * @param \Fhir\V_400\FHIRElement\FHIRInteger $numFP
     * @return $this
     */
    public function addNumFP($numFP)
    {
        $this->numFP[] = $numFP;
        return $this;
    }

    /**
     * The number of false negatives if the GQ score threshold was set to "score" field value.
     * @return \Fhir\V_400\FHIRElement\FHIRInteger[]
     */
    public function getNumFN()
    {
        return $this->numFN;
    }

    /**
     * The number of false negatives if the GQ score threshold was set to "score" field value.
     * @param \Fhir\V_400\FHIRElement\FHIRInteger $numFN
     * @return $this
     */
    public function addNumFN($numFN)
    {
        $this->numFN[] = $numFN;
        return $this;
    }

    /**
     * Calculated precision if the GQ score threshold was set to "score" field value.
     * @return \Fhir\V_400\FHIRElement\FHIRDecimal[]
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Calculated precision if the GQ score threshold was set to "score" field value.
     * @param \Fhir\V_400\FHIRElement\FHIRDecimal $precision
     * @return $this
     */
    public function addPrecision($precision)
    {
        $this->precision[] = $precision;
        return $this;
    }

    /**
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     * @return \Fhir\V_400\FHIRElement\FHIRDecimal[]
     */
    public function getSensitivity()
    {
        return $this->sensitivity;
    }

    /**
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     * @param \Fhir\V_400\FHIRElement\FHIRDecimal $sensitivity
     * @return $this
     */
    public function addSensitivity($sensitivity)
    {
        $this->sensitivity[] = $sensitivity;
        return $this;
    }

    /**
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     * @return \Fhir\V_400\FHIRElement\FHIRDecimal[]
     */
    public function getFMeasure()
    {
        return $this->fMeasure;
    }

    /**
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     * @param \Fhir\V_400\FHIRElement\FHIRDecimal $fMeasure
     * @return $this
     */
    public function addFMeasure($fMeasure)
    {
        $this->fMeasure[] = $fMeasure;
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
        if (0 < count($this->score)) {
            $json['score'] = [];
            foreach($this->score as $score) {
                $json['score'][] = $score;
            }
        }
        if (0 < count($this->numTP)) {
            $json['numTP'] = [];
            foreach($this->numTP as $numTP) {
                $json['numTP'][] = $numTP;
            }
        }
        if (0 < count($this->numFP)) {
            $json['numFP'] = [];
            foreach($this->numFP as $numFP) {
                $json['numFP'][] = $numFP;
            }
        }
        if (0 < count($this->numFN)) {
            $json['numFN'] = [];
            foreach($this->numFN as $numFN) {
                $json['numFN'][] = $numFN;
            }
        }
        if (0 < count($this->precision)) {
            $json['precision'] = [];
            foreach($this->precision as $precision) {
                $json['precision'][] = $precision;
            }
        }
        if (0 < count($this->sensitivity)) {
            $json['sensitivity'] = [];
            foreach($this->sensitivity as $sensitivity) {
                $json['sensitivity'][] = $sensitivity;
            }
        }
        if (0 < count($this->fMeasure)) {
            $json['fMeasure'] = [];
            foreach($this->fMeasure as $fMeasure) {
                $json['fMeasure'][] = $fMeasure;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MolecularSequenceRoc xmlns="http://hl7.org/fhir"></MolecularSequenceRoc>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->score)) {
            foreach($this->score as $score) {
                $score->xmlSerialize(true, $sxe->addChild('score'));
            }
        }
        if (0 < count($this->numTP)) {
            foreach($this->numTP as $numTP) {
                $numTP->xmlSerialize(true, $sxe->addChild('numTP'));
            }
        }
        if (0 < count($this->numFP)) {
            foreach($this->numFP as $numFP) {
                $numFP->xmlSerialize(true, $sxe->addChild('numFP'));
            }
        }
        if (0 < count($this->numFN)) {
            foreach($this->numFN as $numFN) {
                $numFN->xmlSerialize(true, $sxe->addChild('numFN'));
            }
        }
        if (0 < count($this->precision)) {
            foreach($this->precision as $precision) {
                $precision->xmlSerialize(true, $sxe->addChild('precision'));
            }
        }
        if (0 < count($this->sensitivity)) {
            foreach($this->sensitivity as $sensitivity) {
                $sensitivity->xmlSerialize(true, $sxe->addChild('sensitivity'));
            }
        }
        if (0 < count($this->fMeasure)) {
            foreach($this->fMeasure as $fMeasure) {
                $fMeasure->xmlSerialize(true, $sxe->addChild('fMeasure'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}