<?php namespace Fhir\V_400\FHIRResource\FHIRSubstanceProtein;

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
 * A SubstanceProtein is defined as a single unit of a linear amino acid sequence, or a combination of subunits that are either covalently linked or have a defined invariant stoichiometric relationship. This includes all synthetic, recombinant and purified SubstanceProteins of defined sequence, whether the use is therapeutic or prophylactic. This set of elements will be used to describe albumins, coagulation factors, cytokines, growth factors, peptide/SubstanceProtein hormones, enzymes, toxins, toxoids, recombinant vaccines, and immunomodulators.
 */
class FHIRSubstanceProteinSubunit extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Index of primary sequences of amino acids linked through peptide bonds in order of decreasing length. Sequences of the same length will be ordered by molecular weight. Subunits that have identical sequences will be repeated and have sequential subscripts.
     * @var \Fhir\V_400\FHIRElement\FHIRInteger
     */
    public $subunit = null;

    /**
     * The sequence information shall be provided enumerating the amino acids from N- to C-terminal end using standard single-letter amino acid codes. Uppercase shall be used for L-amino acids and lowercase for D-amino acids. Transcribed SubstanceProteins will always be described using the translated sequence; for synthetic peptide containing amino acids that are not represented with a single letter code an X should be used within the sequence. The modified amino acids will be distinguished by their position in the sequence.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $sequence = null;

    /**
     * Length of linear sequences of amino acids contained in the subunit.
     * @var \Fhir\V_400\FHIRElement\FHIRInteger
     */
    public $length = null;

    /**
     * The sequence information shall be provided enumerating the amino acids from N- to C-terminal end using standard single-letter amino acid codes. Uppercase shall be used for L-amino acids and lowercase for D-amino acids. Transcribed SubstanceProteins will always be described using the translated sequence; for synthetic peptide containing amino acids that are not represented with a single letter code an X should be used within the sequence. The modified amino acids will be distinguished by their position in the sequence.
     * @var \Fhir\V_400\FHIRElement\FHIRAttachment
     */
    public $sequenceAttachment = null;

    /**
     * Unique identifier for molecular fragment modification based on the ISO 11238 Substance ID.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public $nTerminalModificationId = null;

    /**
     * The name of the fragment modified at the N-terminal of the SubstanceProtein shall be specified.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $nTerminalModification = null;

    /**
     * Unique identifier for molecular fragment modification based on the ISO 11238 Substance ID.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public $cTerminalModificationId = null;

    /**
     * The modification at the C-terminal shall be specified.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $cTerminalModification = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'SubstanceProtein.Subunit';

    /**
     * Index of primary sequences of amino acids linked through peptide bonds in order of decreasing length. Sequences of the same length will be ordered by molecular weight. Subunits that have identical sequences will be repeated and have sequential subscripts.
     * @return \Fhir\V_400\FHIRElement\FHIRInteger
     */
    public function getSubunit()
    {
        return $this->subunit;
    }

    /**
     * Index of primary sequences of amino acids linked through peptide bonds in order of decreasing length. Sequences of the same length will be ordered by molecular weight. Subunits that have identical sequences will be repeated and have sequential subscripts.
     * @param \Fhir\V_400\FHIRElement\FHIRInteger $subunit
     * @return $this
     */
    public function setSubunit($subunit)
    {
        $this->subunit = $subunit;
        return $this;
    }

    /**
     * The sequence information shall be provided enumerating the amino acids from N- to C-terminal end using standard single-letter amino acid codes. Uppercase shall be used for L-amino acids and lowercase for D-amino acids. Transcribed SubstanceProteins will always be described using the translated sequence; for synthetic peptide containing amino acids that are not represented with a single letter code an X should be used within the sequence. The modified amino acids will be distinguished by their position in the sequence.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * The sequence information shall be provided enumerating the amino acids from N- to C-terminal end using standard single-letter amino acid codes. Uppercase shall be used for L-amino acids and lowercase for D-amino acids. Transcribed SubstanceProteins will always be described using the translated sequence; for synthetic peptide containing amino acids that are not represented with a single letter code an X should be used within the sequence. The modified amino acids will be distinguished by their position in the sequence.
     * @param \Fhir\V_400\FHIRElement\FHIRString $sequence
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Length of linear sequences of amino acids contained in the subunit.
     * @return \Fhir\V_400\FHIRElement\FHIRInteger
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Length of linear sequences of amino acids contained in the subunit.
     * @param \Fhir\V_400\FHIRElement\FHIRInteger $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * The sequence information shall be provided enumerating the amino acids from N- to C-terminal end using standard single-letter amino acid codes. Uppercase shall be used for L-amino acids and lowercase for D-amino acids. Transcribed SubstanceProteins will always be described using the translated sequence; for synthetic peptide containing amino acids that are not represented with a single letter code an X should be used within the sequence. The modified amino acids will be distinguished by their position in the sequence.
     * @return \Fhir\V_400\FHIRElement\FHIRAttachment
     */
    public function getSequenceAttachment()
    {
        return $this->sequenceAttachment;
    }

    /**
     * The sequence information shall be provided enumerating the amino acids from N- to C-terminal end using standard single-letter amino acid codes. Uppercase shall be used for L-amino acids and lowercase for D-amino acids. Transcribed SubstanceProteins will always be described using the translated sequence; for synthetic peptide containing amino acids that are not represented with a single letter code an X should be used within the sequence. The modified amino acids will be distinguished by their position in the sequence.
     * @param \Fhir\V_400\FHIRElement\FHIRAttachment $sequenceAttachment
     * @return $this
     */
    public function setSequenceAttachment($sequenceAttachment)
    {
        $this->sequenceAttachment = $sequenceAttachment;
        return $this;
    }

    /**
     * Unique identifier for molecular fragment modification based on the ISO 11238 Substance ID.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public function getNTerminalModificationId()
    {
        return $this->nTerminalModificationId;
    }

    /**
     * Unique identifier for molecular fragment modification based on the ISO 11238 Substance ID.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $nTerminalModificationId
     * @return $this
     */
    public function setNTerminalModificationId($nTerminalModificationId)
    {
        $this->nTerminalModificationId = $nTerminalModificationId;
        return $this;
    }

    /**
     * The name of the fragment modified at the N-terminal of the SubstanceProtein shall be specified.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getNTerminalModification()
    {
        return $this->nTerminalModification;
    }

    /**
     * The name of the fragment modified at the N-terminal of the SubstanceProtein shall be specified.
     * @param \Fhir\V_400\FHIRElement\FHIRString $nTerminalModification
     * @return $this
     */
    public function setNTerminalModification($nTerminalModification)
    {
        $this->nTerminalModification = $nTerminalModification;
        return $this;
    }

    /**
     * Unique identifier for molecular fragment modification based on the ISO 11238 Substance ID.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public function getCTerminalModificationId()
    {
        return $this->cTerminalModificationId;
    }

    /**
     * Unique identifier for molecular fragment modification based on the ISO 11238 Substance ID.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $cTerminalModificationId
     * @return $this
     */
    public function setCTerminalModificationId($cTerminalModificationId)
    {
        $this->cTerminalModificationId = $cTerminalModificationId;
        return $this;
    }

    /**
     * The modification at the C-terminal shall be specified.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getCTerminalModification()
    {
        return $this->cTerminalModification;
    }

    /**
     * The modification at the C-terminal shall be specified.
     * @param \Fhir\V_400\FHIRElement\FHIRString $cTerminalModification
     * @return $this
     */
    public function setCTerminalModification($cTerminalModification)
    {
        $this->cTerminalModification = $cTerminalModification;
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
        if (null !== $this->subunit) $json['subunit'] = $this->subunit;
        if (null !== $this->sequence) $json['sequence'] = $this->sequence;
        if (null !== $this->length) $json['length'] = $this->length;
        if (null !== $this->sequenceAttachment) $json['sequenceAttachment'] = $this->sequenceAttachment;
        if (null !== $this->nTerminalModificationId) $json['nTerminalModificationId'] = $this->nTerminalModificationId;
        if (null !== $this->nTerminalModification) $json['nTerminalModification'] = $this->nTerminalModification;
        if (null !== $this->cTerminalModificationId) $json['cTerminalModificationId'] = $this->cTerminalModificationId;
        if (null !== $this->cTerminalModification) $json['cTerminalModification'] = $this->cTerminalModification;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SubstanceProteinSubunit xmlns="http://hl7.org/fhir"></SubstanceProteinSubunit>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->subunit) $this->subunit->xmlSerialize(true, $sxe->addChild('subunit'));
        if (null !== $this->sequence) $this->sequence->xmlSerialize(true, $sxe->addChild('sequence'));
        if (null !== $this->length) $this->length->xmlSerialize(true, $sxe->addChild('length'));
        if (null !== $this->sequenceAttachment) $this->sequenceAttachment->xmlSerialize(true, $sxe->addChild('sequenceAttachment'));
        if (null !== $this->nTerminalModificationId) $this->nTerminalModificationId->xmlSerialize(true, $sxe->addChild('nTerminalModificationId'));
        if (null !== $this->nTerminalModification) $this->nTerminalModification->xmlSerialize(true, $sxe->addChild('nTerminalModification'));
        if (null !== $this->cTerminalModificationId) $this->cTerminalModificationId->xmlSerialize(true, $sxe->addChild('cTerminalModificationId'));
        if (null !== $this->cTerminalModification) $this->cTerminalModification->xmlSerialize(true, $sxe->addChild('cTerminalModification'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}