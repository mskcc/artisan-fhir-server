<?php namespace Fhir\V_400\FHIRResource\FHIREncounter;

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
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient.
 */
class FHIREncounterHospitalization extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Pre-admission identifier.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public $preAdmissionIdentifier = null;

    /**
     * The location/organization from which the patient came before admission.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $origin = null;

    /**
     * From where patient was admitted (physician referral, transfer).
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $admitSource = null;

    /**
     * Whether this hospitalization is a readmission and why if known.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $reAdmission = null;

    /**
     * Diet preferences reported by the patient.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $dietPreference = array();

    /**
     * Special courtesies (VIP, board member).
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $specialCourtesy = array();

    /**
     * Any special requests that have been made for this hospitalization encounter, such as the provision of specific equipment or other things.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $specialArrangement = array();

    /**
     * Location/organization to which the patient is discharged.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $destination = null;

    /**
     * Category or kind of location after discharge.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $dischargeDisposition = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Encounter.Hospitalization';

    /**
     * Pre-admission identifier.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier
     */
    public function getPreAdmissionIdentifier()
    {
        return $this->preAdmissionIdentifier;
    }

    /**
     * Pre-admission identifier.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $preAdmissionIdentifier
     * @return $this
     */
    public function setPreAdmissionIdentifier($preAdmissionIdentifier)
    {
        $this->preAdmissionIdentifier = $preAdmissionIdentifier;
        return $this;
    }

    /**
     * The location/organization from which the patient came before admission.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * The location/organization from which the patient came before admission.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $origin
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * From where patient was admitted (physician referral, transfer).
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getAdmitSource()
    {
        return $this->admitSource;
    }

    /**
     * From where patient was admitted (physician referral, transfer).
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $admitSource
     * @return $this
     */
    public function setAdmitSource($admitSource)
    {
        $this->admitSource = $admitSource;
        return $this;
    }

    /**
     * Whether this hospitalization is a readmission and why if known.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getReAdmission()
    {
        return $this->reAdmission;
    }

    /**
     * Whether this hospitalization is a readmission and why if known.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $reAdmission
     * @return $this
     */
    public function setReAdmission($reAdmission)
    {
        $this->reAdmission = $reAdmission;
        return $this;
    }

    /**
     * Diet preferences reported by the patient.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getDietPreference()
    {
        return $this->dietPreference;
    }

    /**
     * Diet preferences reported by the patient.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $dietPreference
     * @return $this
     */
    public function addDietPreference($dietPreference)
    {
        $this->dietPreference[] = $dietPreference;
        return $this;
    }

    /**
     * Special courtesies (VIP, board member).
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialCourtesy()
    {
        return $this->specialCourtesy;
    }

    /**
     * Special courtesies (VIP, board member).
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $specialCourtesy
     * @return $this
     */
    public function addSpecialCourtesy($specialCourtesy)
    {
        $this->specialCourtesy[] = $specialCourtesy;
        return $this;
    }

    /**
     * Any special requests that have been made for this hospitalization encounter, such as the provision of specific equipment or other things.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialArrangement()
    {
        return $this->specialArrangement;
    }

    /**
     * Any special requests that have been made for this hospitalization encounter, such as the provision of specific equipment or other things.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $specialArrangement
     * @return $this
     */
    public function addSpecialArrangement($specialArrangement)
    {
        $this->specialArrangement[] = $specialArrangement;
        return $this;
    }

    /**
     * Location/organization to which the patient is discharged.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Location/organization to which the patient is discharged.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Category or kind of location after discharge.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getDischargeDisposition()
    {
        return $this->dischargeDisposition;
    }

    /**
     * Category or kind of location after discharge.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $dischargeDisposition
     * @return $this
     */
    public function setDischargeDisposition($dischargeDisposition)
    {
        $this->dischargeDisposition = $dischargeDisposition;
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
        if (null !== $this->preAdmissionIdentifier) $json['preAdmissionIdentifier'] = $this->preAdmissionIdentifier;
        if (null !== $this->origin) $json['origin'] = $this->origin;
        if (null !== $this->admitSource) $json['admitSource'] = $this->admitSource;
        if (null !== $this->reAdmission) $json['reAdmission'] = $this->reAdmission;
        if (0 < count($this->dietPreference)) {
            $json['dietPreference'] = [];
            foreach($this->dietPreference as $dietPreference) {
                $json['dietPreference'][] = $dietPreference;
            }
        }
        if (0 < count($this->specialCourtesy)) {
            $json['specialCourtesy'] = [];
            foreach($this->specialCourtesy as $specialCourtesy) {
                $json['specialCourtesy'][] = $specialCourtesy;
            }
        }
        if (0 < count($this->specialArrangement)) {
            $json['specialArrangement'] = [];
            foreach($this->specialArrangement as $specialArrangement) {
                $json['specialArrangement'][] = $specialArrangement;
            }
        }
        if (null !== $this->destination) $json['destination'] = $this->destination;
        if (null !== $this->dischargeDisposition) $json['dischargeDisposition'] = $this->dischargeDisposition;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<EncounterHospitalization xmlns="http://hl7.org/fhir"></EncounterHospitalization>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->preAdmissionIdentifier) $this->preAdmissionIdentifier->xmlSerialize(true, $sxe->addChild('preAdmissionIdentifier'));
        if (null !== $this->origin) $this->origin->xmlSerialize(true, $sxe->addChild('origin'));
        if (null !== $this->admitSource) $this->admitSource->xmlSerialize(true, $sxe->addChild('admitSource'));
        if (null !== $this->reAdmission) $this->reAdmission->xmlSerialize(true, $sxe->addChild('reAdmission'));
        if (0 < count($this->dietPreference)) {
            foreach($this->dietPreference as $dietPreference) {
                $dietPreference->xmlSerialize(true, $sxe->addChild('dietPreference'));
            }
        }
        if (0 < count($this->specialCourtesy)) {
            foreach($this->specialCourtesy as $specialCourtesy) {
                $specialCourtesy->xmlSerialize(true, $sxe->addChild('specialCourtesy'));
            }
        }
        if (0 < count($this->specialArrangement)) {
            foreach($this->specialArrangement as $specialArrangement) {
                $specialArrangement->xmlSerialize(true, $sxe->addChild('specialArrangement'));
            }
        }
        if (null !== $this->destination) $this->destination->xmlSerialize(true, $sxe->addChild('destination'));
        if (null !== $this->dischargeDisposition) $this->dischargeDisposition->xmlSerialize(true, $sxe->addChild('dischargeDisposition'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}