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
 * Raw data describing a biological sequence.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSequence extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique identifier for this particular sequence instance. This is a FHIR-defined id.
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     * @var \Fhir\V_301\FHIRElement\FHIRCode
     */
    public $type = null;

    /**
     * Whether the sequence is numbered starting at 0 (0-based numbering or coordinates, inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive start and inclusive end).
     * @var \Fhir\V_301\FHIRElement\FHIRInteger
     */
    public $coordinateSystem = null;

    /**
     * The patient whose sequencing results are described by this resource.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Specimen used for sequencing.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $specimen = null;

    /**
     * The method for sequencing, for example, chip information.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * The organization or lab that should be responsible for this result.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * The number of copies of the seqeunce of interest. (RNASeq).
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * A sequence that is used as a reference to describe variants that are present in a sequence analyzed.
     * @var \Fhir\V_301\FHIRResource\FHIRSequence\FHIRSequenceReferenceSeq
     */
    public $referenceSeq = null;

    /**
     * The definition of variant here originates from Sequence ontology ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)). This element can represent amino acid or nucleic sequence change(including insertion,deletion,SNP,etc.)  It can represent some complex mutation or segment variation with the assist of CIGAR string.
     * @var \Fhir\V_301\FHIRResource\FHIRSequence\FHIRSequenceVariant[]
     */
    public $variant = array();

    /**
     * Sequence that was observed. It is the result marked by referenceSeq along with variant records on referenceSeq. This shall starts from referenceSeq.windowStart and end by referenceSeq.windowEnd.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $observedSeq = null;

    /**
     * An experimental feature attribute that defines the quality of the feature in a quantitative way, such as a phred quality score ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     * @var \Fhir\V_301\FHIRResource\FHIRSequence\FHIRSequenceQuality[]
     */
    public $quality = array();

    /**
     * Coverage (read depth or depth) is the average number of reads representing a given nucleotide in the reconstructed sequence.
     * @var \Fhir\V_301\FHIRElement\FHIRInteger
     */
    public $readCoverage = null;

    /**
     * Configurations of the external repository. The repository shall store target's observedSeq or records related with target's observedSeq.
     * @var \Fhir\V_301\FHIRResource\FHIRSequence\FHIRSequenceRepository[]
     */
    public $repository = array();

    /**
     * Pointer to next atomic sequence which at most contains one variant.
     * @var \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public $pointer = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Sequence';

    /**
     * A unique identifier for this particular sequence instance. This is a FHIR-defined id.
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique identifier for this particular sequence instance. This is a FHIR-defined id.
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     * @return \Fhir\V_301\FHIRElement\FHIRCode
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     * @param \Fhir\V_301\FHIRElement\FHIRCode $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Whether the sequence is numbered starting at 0 (0-based numbering or coordinates, inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive start and inclusive end).
     * @return \Fhir\V_301\FHIRElement\FHIRInteger
     */
    public function getCoordinateSystem()
    {
        return $this->coordinateSystem;
    }

    /**
     * Whether the sequence is numbered starting at 0 (0-based numbering or coordinates, inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive start and inclusive end).
     * @param \Fhir\V_301\FHIRElement\FHIRInteger $coordinateSystem
     * @return $this
     */
    public function setCoordinateSystem($coordinateSystem)
    {
        $this->coordinateSystem = $coordinateSystem;
        return $this;
    }

    /**
     * The patient whose sequencing results are described by this resource.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The patient whose sequencing results are described by this resource.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Specimen used for sequencing.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * Specimen used for sequencing.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $specimen
     * @return $this
     */
    public function setSpecimen($specimen)
    {
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * The method for sequencing, for example, chip information.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The method for sequencing, for example, chip information.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * The organization or lab that should be responsible for this result.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * The organization or lab that should be responsible for this result.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $performer
     * @return $this
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * The number of copies of the seqeunce of interest. (RNASeq).
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * The number of copies of the seqeunce of interest. (RNASeq).
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A sequence that is used as a reference to describe variants that are present in a sequence analyzed.
     * @return \Fhir\V_301\FHIRResource\FHIRSequence\FHIRSequenceReferenceSeq
     */
    public function getReferenceSeq()
    {
        return $this->referenceSeq;
    }

    /**
     * A sequence that is used as a reference to describe variants that are present in a sequence analyzed.
     * @param \Fhir\V_301\FHIRResource\FHIRSequence\FHIRSequenceReferenceSeq $referenceSeq
     * @return $this
     */
    public function setReferenceSeq($referenceSeq)
    {
        $this->referenceSeq = $referenceSeq;
        return $this;
    }

    /**
     * The definition of variant here originates from Sequence ontology ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)). This element can represent amino acid or nucleic sequence change(including insertion,deletion,SNP,etc.)  It can represent some complex mutation or segment variation with the assist of CIGAR string.
     * @return \Fhir\V_301\FHIRResource\FHIRSequence\FHIRSequenceVariant[]
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * The definition of variant here originates from Sequence ontology ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)). This element can represent amino acid or nucleic sequence change(including insertion,deletion,SNP,etc.)  It can represent some complex mutation or segment variation with the assist of CIGAR string.
     * @param \Fhir\V_301\FHIRResource\FHIRSequence\FHIRSequenceVariant $variant
     * @return $this
     */
    public function addVariant($variant)
    {
        $this->variant[] = $variant;
        return $this;
    }

    /**
     * Sequence that was observed. It is the result marked by referenceSeq along with variant records on referenceSeq. This shall starts from referenceSeq.windowStart and end by referenceSeq.windowEnd.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getObservedSeq()
    {
        return $this->observedSeq;
    }

    /**
     * Sequence that was observed. It is the result marked by referenceSeq along with variant records on referenceSeq. This shall starts from referenceSeq.windowStart and end by referenceSeq.windowEnd.
     * @param \Fhir\V_301\FHIRElement\FHIRString $observedSeq
     * @return $this
     */
    public function setObservedSeq($observedSeq)
    {
        $this->observedSeq = $observedSeq;
        return $this;
    }

    /**
     * An experimental feature attribute that defines the quality of the feature in a quantitative way, such as a phred quality score ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     * @return \Fhir\V_301\FHIRResource\FHIRSequence\FHIRSequenceQuality[]
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * An experimental feature attribute that defines the quality of the feature in a quantitative way, such as a phred quality score ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     * @param \Fhir\V_301\FHIRResource\FHIRSequence\FHIRSequenceQuality $quality
     * @return $this
     */
    public function addQuality($quality)
    {
        $this->quality[] = $quality;
        return $this;
    }

    /**
     * Coverage (read depth or depth) is the average number of reads representing a given nucleotide in the reconstructed sequence.
     * @return \Fhir\V_301\FHIRElement\FHIRInteger
     */
    public function getReadCoverage()
    {
        return $this->readCoverage;
    }

    /**
     * Coverage (read depth or depth) is the average number of reads representing a given nucleotide in the reconstructed sequence.
     * @param \Fhir\V_301\FHIRElement\FHIRInteger $readCoverage
     * @return $this
     */
    public function setReadCoverage($readCoverage)
    {
        $this->readCoverage = $readCoverage;
        return $this;
    }

    /**
     * Configurations of the external repository. The repository shall store target's observedSeq or records related with target's observedSeq.
     * @return \Fhir\V_301\FHIRResource\FHIRSequence\FHIRSequenceRepository[]
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * Configurations of the external repository. The repository shall store target's observedSeq or records related with target's observedSeq.
     * @param \Fhir\V_301\FHIRResource\FHIRSequence\FHIRSequenceRepository $repository
     * @return $this
     */
    public function addRepository($repository)
    {
        $this->repository[] = $repository;
        return $this;
    }

    /**
     * Pointer to next atomic sequence which at most contains one variant.
     * @return \Fhir\V_301\FHIRElement\FHIRReference[]
     */
    public function getPointer()
    {
        return $this->pointer;
    }

    /**
     * Pointer to next atomic sequence which at most contains one variant.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $pointer
     * @return $this
     */
    public function addPointer($pointer)
    {
        $this->pointer[] = $pointer;
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
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->coordinateSystem) $json['coordinateSystem'] = $this->coordinateSystem;
        if (null !== $this->patient) $json['patient'] = $this->patient;
        if (null !== $this->specimen) $json['specimen'] = $this->specimen;
        if (null !== $this->device) $json['device'] = $this->device;
        if (null !== $this->performer) $json['performer'] = $this->performer;
        if (null !== $this->quantity) $json['quantity'] = $this->quantity;
        if (null !== $this->referenceSeq) $json['referenceSeq'] = $this->referenceSeq;
        if (0 < count($this->variant)) {
            $json['variant'] = [];
            foreach($this->variant as $variant) {
                $json['variant'][] = $variant;
            }
        }
        if (null !== $this->observedSeq) $json['observedSeq'] = $this->observedSeq;
        if (0 < count($this->quality)) {
            $json['quality'] = [];
            foreach($this->quality as $quality) {
                $json['quality'][] = $quality;
            }
        }
        if (null !== $this->readCoverage) $json['readCoverage'] = $this->readCoverage;
        if (0 < count($this->repository)) {
            $json['repository'] = [];
            foreach($this->repository as $repository) {
                $json['repository'][] = $repository;
            }
        }
        if (0 < count($this->pointer)) {
            $json['pointer'] = [];
            foreach($this->pointer as $pointer) {
                $json['pointer'][] = $pointer;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Sequence xmlns="http://hl7.org/fhir"></Sequence>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->coordinateSystem) $this->coordinateSystem->xmlSerialize(true, $sxe->addChild('coordinateSystem'));
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->specimen) $this->specimen->xmlSerialize(true, $sxe->addChild('specimen'));
        if (null !== $this->device) $this->device->xmlSerialize(true, $sxe->addChild('device'));
        if (null !== $this->performer) $this->performer->xmlSerialize(true, $sxe->addChild('performer'));
        if (null !== $this->quantity) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (null !== $this->referenceSeq) $this->referenceSeq->xmlSerialize(true, $sxe->addChild('referenceSeq'));
        if (0 < count($this->variant)) {
            foreach($this->variant as $variant) {
                $variant->xmlSerialize(true, $sxe->addChild('variant'));
            }
        }
        if (null !== $this->observedSeq) $this->observedSeq->xmlSerialize(true, $sxe->addChild('observedSeq'));
        if (0 < count($this->quality)) {
            foreach($this->quality as $quality) {
                $quality->xmlSerialize(true, $sxe->addChild('quality'));
            }
        }
        if (null !== $this->readCoverage) $this->readCoverage->xmlSerialize(true, $sxe->addChild('readCoverage'));
        if (0 < count($this->repository)) {
            foreach($this->repository as $repository) {
                $repository->xmlSerialize(true, $sxe->addChild('repository'));
            }
        }
        if (0 < count($this->pointer)) {
            foreach($this->pointer as $pointer) {
                $pointer->xmlSerialize(true, $sxe->addChild('pointer'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}