<?php namespace Fhir\V_400\FHIRResource\FHIRMedicationKnowledge;

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
 * Information about a medication that is used to support knowledge.
 */
class FHIRMedicationKnowledgeAdministrationGuidelines extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Dosage for the medication for the specific guidelines.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage[]
     */
    public $dosage = array();

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $indicationCodeableConcept = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $indicationReference = null;

    /**
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight, gender, etc.).
     * @var \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics[]
     */
    public $patientCharacteristics = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationKnowledge.AdministrationGuidelines';

    /**
     * Dosage for the medication for the specific guidelines.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage[]
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Dosage for the medication for the specific guidelines.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage $dosage
     * @return $this
     */
    public function addDosage($dosage)
    {
        $this->dosage[] = $dosage;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getIndicationCodeableConcept()
    {
        return $this->indicationCodeableConcept;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $indicationCodeableConcept
     * @return $this
     */
    public function setIndicationCodeableConcept($indicationCodeableConcept)
    {
        $this->indicationCodeableConcept = $indicationCodeableConcept;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getIndicationReference()
    {
        return $this->indicationReference;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRReference $indicationReference
     * @return $this
     */
    public function setIndicationReference($indicationReference)
    {
        $this->indicationReference = $indicationReference;
        return $this;
    }

    /**
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight, gender, etc.).
     * @return \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics[]
     */
    public function getPatientCharacteristics()
    {
        return $this->patientCharacteristics;
    }

    /**
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight, gender, etc.).
     * @param \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics $patientCharacteristics
     * @return $this
     */
    public function addPatientCharacteristics($patientCharacteristics)
    {
        $this->patientCharacteristics[] = $patientCharacteristics;
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
        if (0 < count($this->dosage)) {
            $json['dosage'] = [];
            foreach($this->dosage as $dosage) {
                $json['dosage'][] = $dosage;
            }
        }
        if (null !== $this->indicationCodeableConcept) $json['indicationCodeableConcept'] = $this->indicationCodeableConcept;
        if (null !== $this->indicationReference) $json['indicationReference'] = $this->indicationReference;
        if (0 < count($this->patientCharacteristics)) {
            $json['patientCharacteristics'] = [];
            foreach($this->patientCharacteristics as $patientCharacteristics) {
                $json['patientCharacteristics'][] = $patientCharacteristics;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationKnowledgeAdministrationGuidelines xmlns="http://hl7.org/fhir"></MedicationKnowledgeAdministrationGuidelines>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->dosage)) {
            foreach($this->dosage as $dosage) {
                $dosage->xmlSerialize(true, $sxe->addChild('dosage'));
            }
        }
        if (null !== $this->indicationCodeableConcept) $this->indicationCodeableConcept->xmlSerialize(true, $sxe->addChild('indicationCodeableConcept'));
        if (null !== $this->indicationReference) $this->indicationReference->xmlSerialize(true, $sxe->addChild('indicationReference'));
        if (0 < count($this->patientCharacteristics)) {
            foreach($this->patientCharacteristics as $patientCharacteristics) {
                $patientCharacteristics->xmlSerialize(true, $sxe->addChild('patientCharacteristics'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}