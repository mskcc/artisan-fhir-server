<?php namespace Fhir\V_400\FHIRResource\FHIRSpecimenDefinition;

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
 * A kind of specimen with associated set of requirements.
 */
class FHIRSpecimenDefinitionTypeTested extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Primary of secondary specimen.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $isDerived = null;

    /**
     * The kind of specimen conditioned for testing expected by lab.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The preference for this type of conditioned specimen.
     * @var \Fhir\V_400\FHIRElement\FHIRSpecimenContainedPreference
     */
    public $preference = null;

    /**
     * The specimen's container.
     * @var \Fhir\V_400\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public $container = null;

    /**
     * Requirements for delivery and special handling of this kind of conditioned specimen.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $requirement = null;

    /**
     * The usual time that a specimen of this kind is retained after the ordered tests are completed, for the purpose of additional testing.
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $retentionTime = null;

    /**
     * Criterion for rejection of the specimen in its container by the laboratory.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $rejectionCriterion = array();

    /**
     * Set of instructions for preservation/transport of the specimen at a defined temperature interval, prior the testing process.
     * @var \Fhir\V_400\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling[]
     */
    public $handling = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'SpecimenDefinition.TypeTested';

    /**
     * Primary of secondary specimen.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getIsDerived()
    {
        return $this->isDerived;
    }

    /**
     * Primary of secondary specimen.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $isDerived
     * @return $this
     */
    public function setIsDerived($isDerived)
    {
        $this->isDerived = $isDerived;
        return $this;
    }

    /**
     * The kind of specimen conditioned for testing expected by lab.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The kind of specimen conditioned for testing expected by lab.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The preference for this type of conditioned specimen.
     * @return \Fhir\V_400\FHIRElement\FHIRSpecimenContainedPreference
     */
    public function getPreference()
    {
        return $this->preference;
    }

    /**
     * The preference for this type of conditioned specimen.
     * @param \Fhir\V_400\FHIRElement\FHIRSpecimenContainedPreference $preference
     * @return $this
     */
    public function setPreference($preference)
    {
        $this->preference = $preference;
        return $this;
    }

    /**
     * The specimen's container.
     * @return \Fhir\V_400\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * The specimen's container.
     * @param \Fhir\V_400\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer $container
     * @return $this
     */
    public function setContainer($container)
    {
        $this->container = $container;
        return $this;
    }

    /**
     * Requirements for delivery and special handling of this kind of conditioned specimen.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getRequirement()
    {
        return $this->requirement;
    }

    /**
     * Requirements for delivery and special handling of this kind of conditioned specimen.
     * @param \Fhir\V_400\FHIRElement\FHIRString $requirement
     * @return $this
     */
    public function setRequirement($requirement)
    {
        $this->requirement = $requirement;
        return $this;
    }

    /**
     * The usual time that a specimen of this kind is retained after the ordered tests are completed, for the purpose of additional testing.
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getRetentionTime()
    {
        return $this->retentionTime;
    }

    /**
     * The usual time that a specimen of this kind is retained after the ordered tests are completed, for the purpose of additional testing.
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration $retentionTime
     * @return $this
     */
    public function setRetentionTime($retentionTime)
    {
        $this->retentionTime = $retentionTime;
        return $this;
    }

    /**
     * Criterion for rejection of the specimen in its container by the laboratory.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRejectionCriterion()
    {
        return $this->rejectionCriterion;
    }

    /**
     * Criterion for rejection of the specimen in its container by the laboratory.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $rejectionCriterion
     * @return $this
     */
    public function addRejectionCriterion($rejectionCriterion)
    {
        $this->rejectionCriterion[] = $rejectionCriterion;
        return $this;
    }

    /**
     * Set of instructions for preservation/transport of the specimen at a defined temperature interval, prior the testing process.
     * @return \Fhir\V_400\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling[]
     */
    public function getHandling()
    {
        return $this->handling;
    }

    /**
     * Set of instructions for preservation/transport of the specimen at a defined temperature interval, prior the testing process.
     * @param \Fhir\V_400\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling $handling
     * @return $this
     */
    public function addHandling($handling)
    {
        $this->handling[] = $handling;
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
        if (null !== $this->isDerived) $json['isDerived'] = $this->isDerived;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->preference) $json['preference'] = $this->preference;
        if (null !== $this->container) $json['container'] = $this->container;
        if (null !== $this->requirement) $json['requirement'] = $this->requirement;
        if (null !== $this->retentionTime) $json['retentionTime'] = $this->retentionTime;
        if (0 < count($this->rejectionCriterion)) {
            $json['rejectionCriterion'] = [];
            foreach($this->rejectionCriterion as $rejectionCriterion) {
                $json['rejectionCriterion'][] = $rejectionCriterion;
            }
        }
        if (0 < count($this->handling)) {
            $json['handling'] = [];
            foreach($this->handling as $handling) {
                $json['handling'][] = $handling;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SpecimenDefinitionTypeTested xmlns="http://hl7.org/fhir"></SpecimenDefinitionTypeTested>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->isDerived) $this->isDerived->xmlSerialize(true, $sxe->addChild('isDerived'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->preference) $this->preference->xmlSerialize(true, $sxe->addChild('preference'));
        if (null !== $this->container) $this->container->xmlSerialize(true, $sxe->addChild('container'));
        if (null !== $this->requirement) $this->requirement->xmlSerialize(true, $sxe->addChild('requirement'));
        if (null !== $this->retentionTime) $this->retentionTime->xmlSerialize(true, $sxe->addChild('retentionTime'));
        if (0 < count($this->rejectionCriterion)) {
            foreach($this->rejectionCriterion as $rejectionCriterion) {
                $rejectionCriterion->xmlSerialize(true, $sxe->addChild('rejectionCriterion'));
            }
        }
        if (0 < count($this->handling)) {
            foreach($this->handling as $handling) {
                $handling->xmlSerialize(true, $sxe->addChild('handling'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}