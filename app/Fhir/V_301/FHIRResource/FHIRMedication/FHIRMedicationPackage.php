<?php namespace Fhir\V_301\FHIRResource\FHIRMedication;

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
 * This resource is primarily used for the identification and definition of a medication. It covers the ingredients and the packaging for a medication.
 */
class FHIRMedicationPackage extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The kind of container that this package comes as.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $container = null;

    /**
     * A set of components that go to make up the described item.
     * @var \Fhir\V_301\FHIRResource\FHIRMedication\FHIRMedicationContent[]
     */
    public $content = array();

    /**
     * Information about a group of medication produced or packaged from one production run.
     * @var \Fhir\V_301\FHIRResource\FHIRMedication\FHIRMedicationBatch[]
     */
    public $batch = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Medication.Package';

    /**
     * The kind of container that this package comes as.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * The kind of container that this package comes as.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $container
     * @return $this
     */
    public function setContainer($container)
    {
        $this->container = $container;
        return $this;
    }

    /**
     * A set of components that go to make up the described item.
     * @return \Fhir\V_301\FHIRResource\FHIRMedication\FHIRMedicationContent[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * A set of components that go to make up the described item.
     * @param \Fhir\V_301\FHIRResource\FHIRMedication\FHIRMedicationContent $content
     * @return $this
     */
    public function addContent($content)
    {
        $this->content[] = $content;
        return $this;
    }

    /**
     * Information about a group of medication produced or packaged from one production run.
     * @return \Fhir\V_301\FHIRResource\FHIRMedication\FHIRMedicationBatch[]
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * Information about a group of medication produced or packaged from one production run.
     * @param \Fhir\V_301\FHIRResource\FHIRMedication\FHIRMedicationBatch $batch
     * @return $this
     */
    public function addBatch($batch)
    {
        $this->batch[] = $batch;
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
        if (null !== $this->container) $json['container'] = $this->container;
        if (0 < count($this->content)) {
            $json['content'] = [];
            foreach($this->content as $content) {
                $json['content'][] = $content;
            }
        }
        if (0 < count($this->batch)) {
            $json['batch'] = [];
            foreach($this->batch as $batch) {
                $json['batch'][] = $batch;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationPackage xmlns="http://hl7.org/fhir"></MedicationPackage>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->container) $this->container->xmlSerialize(true, $sxe->addChild('container'));
        if (0 < count($this->content)) {
            foreach($this->content as $content) {
                $content->xmlSerialize(true, $sxe->addChild('content'));
            }
        }
        if (0 < count($this->batch)) {
            foreach($this->batch as $batch) {
                $batch->xmlSerialize(true, $sxe->addChild('batch'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}