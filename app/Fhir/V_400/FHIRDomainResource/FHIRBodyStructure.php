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
 * Record details about an anatomical structure.  This resource may be used when a coded concept does not provide the necessary detail needed for the use case.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRBodyStructure extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifier for this instance of the anatomical structure.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Whether this body site is in active use.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * The kind of structure being represented by the body structure at `BodyStructure.location`.  This can define both normal and abnormal morphologies.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $morphology = null;

    /**
     * The anatomical location or region of the specimen, lesion, or body structure.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $location = null;

    /**
     * Qualifier to refine the anatomical location.  These include qualifiers for laterality, relative location, directionality, number, and plane.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $locationQualifier = array();

    /**
     * A summary, characterization or explanation of the body structure.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Image or images used to identify a location.
     * @var \Fhir\V_400\FHIRElement\FHIRAttachment[]
     */
    public $image = array();

    /**
     * The person to which the body site belongs.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'BodyStructure';

    /**
     * Identifier for this instance of the anatomical structure.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier for this instance of the anatomical structure.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Whether this body site is in active use.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Whether this body site is in active use.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * The kind of structure being represented by the body structure at `BodyStructure.location`.  This can define both normal and abnormal morphologies.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getMorphology()
    {
        return $this->morphology;
    }

    /**
     * The kind of structure being represented by the body structure at `BodyStructure.location`.  This can define both normal and abnormal morphologies.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $morphology
     * @return $this
     */
    public function setMorphology($morphology)
    {
        $this->morphology = $morphology;
        return $this;
    }

    /**
     * The anatomical location or region of the specimen, lesion, or body structure.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The anatomical location or region of the specimen, lesion, or body structure.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Qualifier to refine the anatomical location.  These include qualifiers for laterality, relative location, directionality, number, and plane.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getLocationQualifier()
    {
        return $this->locationQualifier;
    }

    /**
     * Qualifier to refine the anatomical location.  These include qualifiers for laterality, relative location, directionality, number, and plane.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $locationQualifier
     * @return $this
     */
    public function addLocationQualifier($locationQualifier)
    {
        $this->locationQualifier[] = $locationQualifier;
        return $this;
    }

    /**
     * A summary, characterization or explanation of the body structure.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A summary, characterization or explanation of the body structure.
     * @param \Fhir\V_400\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Image or images used to identify a location.
     * @return \Fhir\V_400\FHIRElement\FHIRAttachment[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Image or images used to identify a location.
     * @param \Fhir\V_400\FHIRElement\FHIRAttachment $image
     * @return $this
     */
    public function addImage($image)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * The person to which the body site belongs.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The person to which the body site belongs.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
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
        if (null !== $this->active) $json['active'] = $this->active;
        if (null !== $this->morphology) $json['morphology'] = $this->morphology;
        if (null !== $this->location) $json['location'] = $this->location;
        if (0 < count($this->locationQualifier)) {
            $json['locationQualifier'] = [];
            foreach($this->locationQualifier as $locationQualifier) {
                $json['locationQualifier'][] = $locationQualifier;
            }
        }
        if (null !== $this->description) $json['description'] = $this->description;
        if (0 < count($this->image)) {
            $json['image'] = [];
            foreach($this->image as $image) {
                $json['image'][] = $image;
            }
        }
        if (null !== $this->patient) $json['patient'] = $this->patient;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<BodyStructure xmlns="http://hl7.org/fhir"></BodyStructure>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->active) $this->active->xmlSerialize(true, $sxe->addChild('active'));
        if (null !== $this->morphology) $this->morphology->xmlSerialize(true, $sxe->addChild('morphology'));
        if (null !== $this->location) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (0 < count($this->locationQualifier)) {
            foreach($this->locationQualifier as $locationQualifier) {
                $locationQualifier->xmlSerialize(true, $sxe->addChild('locationQualifier'));
            }
        }
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->image)) {
            foreach($this->image as $image) {
                $image->xmlSerialize(true, $sxe->addChild('image'));
            }
        }
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}