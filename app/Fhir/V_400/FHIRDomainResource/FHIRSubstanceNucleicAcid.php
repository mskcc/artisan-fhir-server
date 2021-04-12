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
 * Nucleic acids are defined by three distinct elements: the base, sugar and linkage. Individual substance/moiety IDs will be created for each of these elements. The nucleotide sequence will be always entered in the 5’-3’ direction.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSubstanceNucleicAcid extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The type of the sequence shall be specified based on a controlled vocabulary.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $sequenceType = null;

    /**
     * The number of linear sequences of nucleotides linked through phosphodiester bonds shall be described. Subunits would be strands of nucleic acids that are tightly associated typically through Watson-Crick base pairing. NOTE: If not specified in the reference source, the assumption is that there is 1 subunit.
     * @var \Fhir\V_400\FHIRElement\FHIRInteger
     */
    public $numberOfSubunits = null;

    /**
     * The area of hybridisation shall be described if applicable for double stranded RNA or DNA. The number associated with the subunit followed by the number associated to the residue shall be specified in increasing order. The underscore “” shall be used as separator as follows: “Subunitnumber Residue”.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $areaOfHybridisation = null;

    /**
     * (TBC).
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $oligoNucleotideType = null;

    /**
     * Subunits are listed in order of decreasing length; sequences of the same length will be ordered by molecular weight; subunits that have identical sequences will be repeated multiple times.
     * @var \Fhir\V_400\FHIRResource\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit[]
     */
    public $subunit = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'SubstanceNucleicAcid';

    /**
     * The type of the sequence shall be specified based on a controlled vocabulary.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getSequenceType()
    {
        return $this->sequenceType;
    }

    /**
     * The type of the sequence shall be specified based on a controlled vocabulary.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $sequenceType
     * @return $this
     */
    public function setSequenceType($sequenceType)
    {
        $this->sequenceType = $sequenceType;
        return $this;
    }

    /**
     * The number of linear sequences of nucleotides linked through phosphodiester bonds shall be described. Subunits would be strands of nucleic acids that are tightly associated typically through Watson-Crick base pairing. NOTE: If not specified in the reference source, the assumption is that there is 1 subunit.
     * @return \Fhir\V_400\FHIRElement\FHIRInteger
     */
    public function getNumberOfSubunits()
    {
        return $this->numberOfSubunits;
    }

    /**
     * The number of linear sequences of nucleotides linked through phosphodiester bonds shall be described. Subunits would be strands of nucleic acids that are tightly associated typically through Watson-Crick base pairing. NOTE: If not specified in the reference source, the assumption is that there is 1 subunit.
     * @param \Fhir\V_400\FHIRElement\FHIRInteger $numberOfSubunits
     * @return $this
     */
    public function setNumberOfSubunits($numberOfSubunits)
    {
        $this->numberOfSubunits = $numberOfSubunits;
        return $this;
    }

    /**
     * The area of hybridisation shall be described if applicable for double stranded RNA or DNA. The number associated with the subunit followed by the number associated to the residue shall be specified in increasing order. The underscore “” shall be used as separator as follows: “Subunitnumber Residue”.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getAreaOfHybridisation()
    {
        return $this->areaOfHybridisation;
    }

    /**
     * The area of hybridisation shall be described if applicable for double stranded RNA or DNA. The number associated with the subunit followed by the number associated to the residue shall be specified in increasing order. The underscore “” shall be used as separator as follows: “Subunitnumber Residue”.
     * @param \Fhir\V_400\FHIRElement\FHIRString $areaOfHybridisation
     * @return $this
     */
    public function setAreaOfHybridisation($areaOfHybridisation)
    {
        $this->areaOfHybridisation = $areaOfHybridisation;
        return $this;
    }

    /**
     * (TBC).
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getOligoNucleotideType()
    {
        return $this->oligoNucleotideType;
    }

    /**
     * (TBC).
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $oligoNucleotideType
     * @return $this
     */
    public function setOligoNucleotideType($oligoNucleotideType)
    {
        $this->oligoNucleotideType = $oligoNucleotideType;
        return $this;
    }

    /**
     * Subunits are listed in order of decreasing length; sequences of the same length will be ordered by molecular weight; subunits that have identical sequences will be repeated multiple times.
     * @return \Fhir\V_400\FHIRResource\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit[]
     */
    public function getSubunit()
    {
        return $this->subunit;
    }

    /**
     * Subunits are listed in order of decreasing length; sequences of the same length will be ordered by molecular weight; subunits that have identical sequences will be repeated multiple times.
     * @param \Fhir\V_400\FHIRResource\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit $subunit
     * @return $this
     */
    public function addSubunit($subunit)
    {
        $this->subunit[] = $subunit;
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
        if (null !== $this->sequenceType) $json['sequenceType'] = $this->sequenceType;
        if (null !== $this->numberOfSubunits) $json['numberOfSubunits'] = $this->numberOfSubunits;
        if (null !== $this->areaOfHybridisation) $json['areaOfHybridisation'] = $this->areaOfHybridisation;
        if (null !== $this->oligoNucleotideType) $json['oligoNucleotideType'] = $this->oligoNucleotideType;
        if (0 < count($this->subunit)) {
            $json['subunit'] = [];
            foreach($this->subunit as $subunit) {
                $json['subunit'][] = $subunit;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SubstanceNucleicAcid xmlns="http://hl7.org/fhir"></SubstanceNucleicAcid>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->sequenceType) $this->sequenceType->xmlSerialize(true, $sxe->addChild('sequenceType'));
        if (null !== $this->numberOfSubunits) $this->numberOfSubunits->xmlSerialize(true, $sxe->addChild('numberOfSubunits'));
        if (null !== $this->areaOfHybridisation) $this->areaOfHybridisation->xmlSerialize(true, $sxe->addChild('areaOfHybridisation'));
        if (null !== $this->oligoNucleotideType) $this->oligoNucleotideType->xmlSerialize(true, $sxe->addChild('oligoNucleotideType'));
        if (0 < count($this->subunit)) {
            foreach($this->subunit as $subunit) {
                $subunit->xmlSerialize(true, $sxe->addChild('subunit'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}