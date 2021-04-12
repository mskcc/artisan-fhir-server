<?php namespace Fhir\V_301\FHIRResource\FHIRImmunization;

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
 * Describes the event of a patient being administered a vaccination or a record of a vaccination as reported by a patient, a clinician or another party and may include vaccine reaction information and what vaccination protocol was followed.
 */
class FHIRImmunizationVaccinationProtocol extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Nominal position in a series.
     * @var \Fhir\V_301\FHIRElement\FHIRPositiveInt
     */
    public $doseSequence = null;

    /**
     * Contains the description about the protocol under which the vaccine was administered.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Indicates the authority who published the protocol.  E.g. ACIP.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $authority = null;

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $series = null;

    /**
     * The recommended number of doses to achieve immunity.
     * @var \Fhir\V_301\FHIRElement\FHIRPositiveInt
     */
    public $seriesDoses = null;

    /**
     * The targeted disease.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $targetDisease = array();

    /**
     * Indicates if the immunization event should "count" against  the protocol.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $doseStatus = null;

    /**
     * Provides an explanation as to why an immunization event should or should not count against the protocol.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $doseStatusReason = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Immunization.VaccinationProtocol';

    /**
     * Nominal position in a series.
     * @return \Fhir\V_301\FHIRElement\FHIRPositiveInt
     */
    public function getDoseSequence()
    {
        return $this->doseSequence;
    }

    /**
     * Nominal position in a series.
     * @param \Fhir\V_301\FHIRElement\FHIRPositiveInt $doseSequence
     * @return $this
     */
    public function setDoseSequence($doseSequence)
    {
        $this->doseSequence = $doseSequence;
        return $this;
    }

    /**
     * Contains the description about the protocol under which the vaccine was administered.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Contains the description about the protocol under which the vaccine was administered.
     * @param \Fhir\V_301\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Indicates the authority who published the protocol.  E.g. ACIP.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * Indicates the authority who published the protocol.  E.g. ACIP.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $authority
     * @return $this
     */
    public function setAuthority($authority)
    {
        $this->authority = $authority;
        return $this;
    }

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @param \Fhir\V_301\FHIRElement\FHIRString $series
     * @return $this
     */
    public function setSeries($series)
    {
        $this->series = $series;
        return $this;
    }

    /**
     * The recommended number of doses to achieve immunity.
     * @return \Fhir\V_301\FHIRElement\FHIRPositiveInt
     */
    public function getSeriesDoses()
    {
        return $this->seriesDoses;
    }

    /**
     * The recommended number of doses to achieve immunity.
     * @param \Fhir\V_301\FHIRElement\FHIRPositiveInt $seriesDoses
     * @return $this
     */
    public function setSeriesDoses($seriesDoses)
    {
        $this->seriesDoses = $seriesDoses;
        return $this;
    }

    /**
     * The targeted disease.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getTargetDisease()
    {
        return $this->targetDisease;
    }

    /**
     * The targeted disease.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $targetDisease
     * @return $this
     */
    public function addTargetDisease($targetDisease)
    {
        $this->targetDisease[] = $targetDisease;
        return $this;
    }

    /**
     * Indicates if the immunization event should "count" against  the protocol.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseStatus()
    {
        return $this->doseStatus;
    }

    /**
     * Indicates if the immunization event should "count" against  the protocol.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $doseStatus
     * @return $this
     */
    public function setDoseStatus($doseStatus)
    {
        $this->doseStatus = $doseStatus;
        return $this;
    }

    /**
     * Provides an explanation as to why an immunization event should or should not count against the protocol.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseStatusReason()
    {
        return $this->doseStatusReason;
    }

    /**
     * Provides an explanation as to why an immunization event should or should not count against the protocol.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $doseStatusReason
     * @return $this
     */
    public function setDoseStatusReason($doseStatusReason)
    {
        $this->doseStatusReason = $doseStatusReason;
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
        if (null !== $this->doseSequence) $json['doseSequence'] = $this->doseSequence;
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->authority) $json['authority'] = $this->authority;
        if (null !== $this->series) $json['series'] = $this->series;
        if (null !== $this->seriesDoses) $json['seriesDoses'] = $this->seriesDoses;
        if (0 < count($this->targetDisease)) {
            $json['targetDisease'] = [];
            foreach($this->targetDisease as $targetDisease) {
                $json['targetDisease'][] = $targetDisease;
            }
        }
        if (null !== $this->doseStatus) $json['doseStatus'] = $this->doseStatus;
        if (null !== $this->doseStatusReason) $json['doseStatusReason'] = $this->doseStatusReason;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImmunizationVaccinationProtocol xmlns="http://hl7.org/fhir"></ImmunizationVaccinationProtocol>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->doseSequence) $this->doseSequence->xmlSerialize(true, $sxe->addChild('doseSequence'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->authority) $this->authority->xmlSerialize(true, $sxe->addChild('authority'));
        if (null !== $this->series) $this->series->xmlSerialize(true, $sxe->addChild('series'));
        if (null !== $this->seriesDoses) $this->seriesDoses->xmlSerialize(true, $sxe->addChild('seriesDoses'));
        if (0 < count($this->targetDisease)) {
            foreach($this->targetDisease as $targetDisease) {
                $targetDisease->xmlSerialize(true, $sxe->addChild('targetDisease'));
            }
        }
        if (null !== $this->doseStatus) $this->doseStatus->xmlSerialize(true, $sxe->addChild('doseStatus'));
        if (null !== $this->doseStatusReason) $this->doseStatusReason->xmlSerialize(true, $sxe->addChild('doseStatusReason'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}