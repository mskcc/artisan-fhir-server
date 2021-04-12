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
 * A physical entity which is the primary unit of operational and/or administrative interest in a study.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRResearchSubject extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifiers assigned to this research subject for a study.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The current state of the subject.
     * @var \Fhir\V_400\FHIRElement\FHIRResearchSubjectStatus
     */
    public $status = null;

    /**
     * The dates the subject began and ended their participation in the study.
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Reference to the study the subject is participating in.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $study = null;

    /**
     * The record of the person or animal who is involved in the study.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $individual = null;

    /**
     * The name of the arm in the study the subject is expected to follow as part of this study.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $assignedArm = null;

    /**
     * The name of the arm in the study the subject actually followed as part of this study.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $actualArm = null;

    /**
     * A record of the patient's informed agreement to participate in the study.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $consent = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ResearchSubject';

    /**
     * Identifiers assigned to this research subject for a study.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifiers assigned to this research subject for a study.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The current state of the subject.
     * @return \Fhir\V_400\FHIRElement\FHIRResearchSubjectStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The current state of the subject.
     * @param \Fhir\V_400\FHIRElement\FHIRResearchSubjectStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The dates the subject began and ended their participation in the study.
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The dates the subject began and ended their participation in the study.
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Reference to the study the subject is participating in.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * Reference to the study the subject is participating in.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $study
     * @return $this
     */
    public function setStudy($study)
    {
        $this->study = $study;
        return $this;
    }

    /**
     * The record of the person or animal who is involved in the study.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getIndividual()
    {
        return $this->individual;
    }

    /**
     * The record of the person or animal who is involved in the study.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $individual
     * @return $this
     */
    public function setIndividual($individual)
    {
        $this->individual = $individual;
        return $this;
    }

    /**
     * The name of the arm in the study the subject is expected to follow as part of this study.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getAssignedArm()
    {
        return $this->assignedArm;
    }

    /**
     * The name of the arm in the study the subject is expected to follow as part of this study.
     * @param \Fhir\V_400\FHIRElement\FHIRString $assignedArm
     * @return $this
     */
    public function setAssignedArm($assignedArm)
    {
        $this->assignedArm = $assignedArm;
        return $this;
    }

    /**
     * The name of the arm in the study the subject actually followed as part of this study.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getActualArm()
    {
        return $this->actualArm;
    }

    /**
     * The name of the arm in the study the subject actually followed as part of this study.
     * @param \Fhir\V_400\FHIRElement\FHIRString $actualArm
     * @return $this
     */
    public function setActualArm($actualArm)
    {
        $this->actualArm = $actualArm;
        return $this;
    }

    /**
     * A record of the patient's informed agreement to participate in the study.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getConsent()
    {
        return $this->consent;
    }

    /**
     * A record of the patient's informed agreement to participate in the study.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $consent
     * @return $this
     */
    public function setConsent($consent)
    {
        $this->consent = $consent;
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
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->period) $json['period'] = $this->period;
        if (null !== $this->study) $json['study'] = $this->study;
        if (null !== $this->individual) $json['individual'] = $this->individual;
        if (null !== $this->assignedArm) $json['assignedArm'] = $this->assignedArm;
        if (null !== $this->actualArm) $json['actualArm'] = $this->actualArm;
        if (null !== $this->consent) $json['consent'] = $this->consent;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ResearchSubject xmlns="http://hl7.org/fhir"></ResearchSubject>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (null !== $this->study) $this->study->xmlSerialize(true, $sxe->addChild('study'));
        if (null !== $this->individual) $this->individual->xmlSerialize(true, $sxe->addChild('individual'));
        if (null !== $this->assignedArm) $this->assignedArm->xmlSerialize(true, $sxe->addChild('assignedArm'));
        if (null !== $this->actualArm) $this->actualArm->xmlSerialize(true, $sxe->addChild('actualArm'));
        if (null !== $this->consent) $this->consent->xmlSerialize(true, $sxe->addChild('consent'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}