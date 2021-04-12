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
 * Indication for the Medicinal Product.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicinalProductIndication extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The medication for which this is an indication.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $subject = array();

    /**
     * The disease, symptom or procedure that is the indication for treatment.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $diseaseSymptomProcedure = null;

    /**
     * The status of the disease or symptom for which the indication applies.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $diseaseStatus = null;

    /**
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $comorbidity = array();

    /**
     * The intended effect, aim or strategy to be achieved by the indication.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $intendedEffect = null;

    /**
     * Timing or duration information as part of the indication.
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $duration = null;

    /**
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy[]
     */
    public $otherTherapy = array();

    /**
     * Describe the undesirable effects of the medicinal product.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $undesirableEffect = array();

    /**
     * The population group to which this applies.
     * @var \Fhir\V_400\FHIRResource\FHIRPopulation[]
     */
    public $population = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicinalProductIndication';

    /**
     * The medication for which this is an indication.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The medication for which this is an indication.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function addSubject($subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * The disease, symptom or procedure that is the indication for treatment.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getDiseaseSymptomProcedure()
    {
        return $this->diseaseSymptomProcedure;
    }

    /**
     * The disease, symptom or procedure that is the indication for treatment.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $diseaseSymptomProcedure
     * @return $this
     */
    public function setDiseaseSymptomProcedure($diseaseSymptomProcedure)
    {
        $this->diseaseSymptomProcedure = $diseaseSymptomProcedure;
        return $this;
    }

    /**
     * The status of the disease or symptom for which the indication applies.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getDiseaseStatus()
    {
        return $this->diseaseStatus;
    }

    /**
     * The status of the disease or symptom for which the indication applies.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $diseaseStatus
     * @return $this
     */
    public function setDiseaseStatus($diseaseStatus)
    {
        $this->diseaseStatus = $diseaseStatus;
        return $this;
    }

    /**
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getComorbidity()
    {
        return $this->comorbidity;
    }

    /**
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $comorbidity
     * @return $this
     */
    public function addComorbidity($comorbidity)
    {
        $this->comorbidity[] = $comorbidity;
        return $this;
    }

    /**
     * The intended effect, aim or strategy to be achieved by the indication.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getIntendedEffect()
    {
        return $this->intendedEffect;
    }

    /**
     * The intended effect, aim or strategy to be achieved by the indication.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $intendedEffect
     * @return $this
     */
    public function setIntendedEffect($intendedEffect)
    {
        $this->intendedEffect = $intendedEffect;
        return $this;
    }

    /**
     * Timing or duration information as part of the indication.
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Timing or duration information as part of the indication.
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy[]
     */
    public function getOtherTherapy()
    {
        return $this->otherTherapy;
    }

    /**
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy $otherTherapy
     * @return $this
     */
    public function addOtherTherapy($otherTherapy)
    {
        $this->otherTherapy[] = $otherTherapy;
        return $this;
    }

    /**
     * Describe the undesirable effects of the medicinal product.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getUndesirableEffect()
    {
        return $this->undesirableEffect;
    }

    /**
     * Describe the undesirable effects of the medicinal product.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $undesirableEffect
     * @return $this
     */
    public function addUndesirableEffect($undesirableEffect)
    {
        $this->undesirableEffect[] = $undesirableEffect;
        return $this;
    }

    /**
     * The population group to which this applies.
     * @return \Fhir\V_400\FHIRResource\FHIRPopulation[]
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * The population group to which this applies.
     * @param \Fhir\V_400\FHIRResource\FHIRPopulation $population
     * @return $this
     */
    public function addPopulation($population)
    {
        $this->population[] = $population;
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
        if (0 < count($this->subject)) {
            $json['subject'] = [];
            foreach($this->subject as $subject) {
                $json['subject'][] = $subject;
            }
        }
        if (null !== $this->diseaseSymptomProcedure) $json['diseaseSymptomProcedure'] = $this->diseaseSymptomProcedure;
        if (null !== $this->diseaseStatus) $json['diseaseStatus'] = $this->diseaseStatus;
        if (0 < count($this->comorbidity)) {
            $json['comorbidity'] = [];
            foreach($this->comorbidity as $comorbidity) {
                $json['comorbidity'][] = $comorbidity;
            }
        }
        if (null !== $this->intendedEffect) $json['intendedEffect'] = $this->intendedEffect;
        if (null !== $this->duration) $json['duration'] = $this->duration;
        if (0 < count($this->otherTherapy)) {
            $json['otherTherapy'] = [];
            foreach($this->otherTherapy as $otherTherapy) {
                $json['otherTherapy'][] = $otherTherapy;
            }
        }
        if (0 < count($this->undesirableEffect)) {
            $json['undesirableEffect'] = [];
            foreach($this->undesirableEffect as $undesirableEffect) {
                $json['undesirableEffect'][] = $undesirableEffect;
            }
        }
        if (0 < count($this->population)) {
            $json['population'] = [];
            foreach($this->population as $population) {
                $json['population'][] = $population;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicinalProductIndication xmlns="http://hl7.org/fhir"></MedicinalProductIndication>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->subject)) {
            foreach($this->subject as $subject) {
                $subject->xmlSerialize(true, $sxe->addChild('subject'));
            }
        }
        if (null !== $this->diseaseSymptomProcedure) $this->diseaseSymptomProcedure->xmlSerialize(true, $sxe->addChild('diseaseSymptomProcedure'));
        if (null !== $this->diseaseStatus) $this->diseaseStatus->xmlSerialize(true, $sxe->addChild('diseaseStatus'));
        if (0 < count($this->comorbidity)) {
            foreach($this->comorbidity as $comorbidity) {
                $comorbidity->xmlSerialize(true, $sxe->addChild('comorbidity'));
            }
        }
        if (null !== $this->intendedEffect) $this->intendedEffect->xmlSerialize(true, $sxe->addChild('intendedEffect'));
        if (null !== $this->duration) $this->duration->xmlSerialize(true, $sxe->addChild('duration'));
        if (0 < count($this->otherTherapy)) {
            foreach($this->otherTherapy as $otherTherapy) {
                $otherTherapy->xmlSerialize(true, $sxe->addChild('otherTherapy'));
            }
        }
        if (0 < count($this->undesirableEffect)) {
            foreach($this->undesirableEffect as $undesirableEffect) {
                $undesirableEffect->xmlSerialize(true, $sxe->addChild('undesirableEffect'));
            }
        }
        if (0 < count($this->population)) {
            foreach($this->population as $population) {
                $population->xmlSerialize(true, $sxe->addChild('population'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}