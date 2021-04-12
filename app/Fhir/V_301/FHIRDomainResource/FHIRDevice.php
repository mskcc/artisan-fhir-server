<?php namespace Fhir\V_301\FHIRDomainResource;

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

use Fhir\V_301\FHIRResource\FHIRDomainResource;

/**
 * This resource identifies an instance or a type of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device.  Medical devices include durable (reusable) medical equipment, implantable devices, as well as disposable equipment used for diagnostic, treatment, and research for healthcare and public health.  Non-medical devices may include items such as a machine, cellphone, computer, application, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDevice extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * [Unique device identifier (UDI)](device.html#5.11.3.2.2) assigned to device label or package.
     * @var \Fhir\V_301\FHIRResource\FHIRDevice\FHIRDeviceUdi
     */
    public $udi = null;

    /**
     * Status of the Device availability.
     * @var \Fhir\V_301\FHIRElement\FHIRFHIRDeviceStatus
     */
    public $status = null;

    /**
     * Code or identifier to identify a kind of device.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Lot number assigned by the manufacturer.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $lotNumber = null;

    /**
     * A name of the manufacturer.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $manufacturer = null;

    /**
     * The date and time when the device was manufactured.
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $manufactureDate = null;

    /**
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $expirationDate = null;

    /**
     * The "model" is an identifier assigned by the manufacturer to identify the product by its type. This number is shared by the all devices sold as the same type.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $model = null;

    /**
     * The version of the device, if the device has multiple releases under the same model, or if the device is software or carries firmware.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * Patient information, If the device is affixed to a person.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $owner = null;

    /**
     * Contact details for an organization or a particular human that is responsible for the device.
     * @var \Fhir\V_301\FHIRElement\FHIRContactPoint[]
     */
    public $contact = array();

    /**
     * The place where the device can be found.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * A network address on which the device may be contacted directly.
     * @var \Fhir\V_301\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     * @var \Fhir\V_301\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Provides additional safety characteristics about a medical device.  For example devices containing latex.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $safety = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Device';

    /**
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * [Unique device identifier (UDI)](device.html#5.11.3.2.2) assigned to device label or package.
     * @return \Fhir\V_301\FHIRResource\FHIRDevice\FHIRDeviceUdi
     */
    public function getUdi()
    {
        return $this->udi;
    }

    /**
     * [Unique device identifier (UDI)](device.html#5.11.3.2.2) assigned to device label or package.
     * @param \Fhir\V_301\FHIRResource\FHIRDevice\FHIRDeviceUdi $udi
     * @return $this
     */
    public function setUdi($udi)
    {
        $this->udi = $udi;
        return $this;
    }

    /**
     * Status of the Device availability.
     * @return \Fhir\V_301\FHIRElement\FHIRFHIRDeviceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the Device availability.
     * @param \Fhir\V_301\FHIRElement\FHIRFHIRDeviceStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Code or identifier to identify a kind of device.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Code or identifier to identify a kind of device.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Lot number assigned by the manufacturer.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * Lot number assigned by the manufacturer.
     * @param \Fhir\V_301\FHIRElement\FHIRString $lotNumber
     * @return $this
     */
    public function setLotNumber($lotNumber)
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * A name of the manufacturer.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * A name of the manufacturer.
     * @param \Fhir\V_301\FHIRElement\FHIRString $manufacturer
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * The date and time when the device was manufactured.
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getManufactureDate()
    {
        return $this->manufactureDate;
    }

    /**
     * The date and time when the device was manufactured.
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $manufactureDate
     * @return $this
     */
    public function setManufactureDate($manufactureDate)
    {
        $this->manufactureDate = $manufactureDate;
        return $this;
    }

    /**
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * The "model" is an identifier assigned by the manufacturer to identify the product by its type. This number is shared by the all devices sold as the same type.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * The "model" is an identifier assigned by the manufacturer to identify the product by its type. This number is shared by the all devices sold as the same type.
     * @param \Fhir\V_301\FHIRElement\FHIRString $model
     * @return $this
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    /**
     * The version of the device, if the device has multiple releases under the same model, or if the device is software or carries firmware.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version of the device, if the device has multiple releases under the same model, or if the device is software or carries firmware.
     * @param \Fhir\V_301\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Patient information, If the device is affixed to a person.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Patient information, If the device is affixed to a person.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $owner
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Contact details for an organization or a particular human that is responsible for the device.
     * @return \Fhir\V_301\FHIRElement\FHIRContactPoint[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contact details for an organization or a particular human that is responsible for the device.
     * @param \Fhir\V_301\FHIRElement\FHIRContactPoint $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * The place where the device can be found.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The place where the device can be found.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * A network address on which the device may be contacted directly.
     * @return \Fhir\V_301\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * A network address on which the device may be contacted directly.
     * @param \Fhir\V_301\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     * @return \Fhir\V_301\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     * @param \Fhir\V_301\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Provides additional safety characteristics about a medical device.  For example devices containing latex.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSafety()
    {
        return $this->safety;
    }

    /**
     * Provides additional safety characteristics about a medical device.  For example devices containing latex.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $safety
     * @return $this
     */
    public function addSafety($safety)
    {
        $this->safety[] = $safety;
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
        if (null !== $this->udi) $json['udi'] = $this->udi;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->lotNumber) $json['lotNumber'] = $this->lotNumber;
        if (null !== $this->manufacturer) $json['manufacturer'] = $this->manufacturer;
        if (null !== $this->manufactureDate) $json['manufactureDate'] = $this->manufactureDate;
        if (null !== $this->expirationDate) $json['expirationDate'] = $this->expirationDate;
        if (null !== $this->model) $json['model'] = $this->model;
        if (null !== $this->version) $json['version'] = $this->version;
        if (null !== $this->patient) $json['patient'] = $this->patient;
        if (null !== $this->owner) $json['owner'] = $this->owner;
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                $json['contact'][] = $contact;
            }
        }
        if (null !== $this->location) $json['location'] = $this->location;
        if (null !== $this->url) $json['url'] = $this->url;
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = $note;
            }
        }
        if (0 < count($this->safety)) {
            $json['safety'] = [];
            foreach($this->safety as $safety) {
                $json['safety'][] = $safety;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Device xmlns="http://hl7.org/fhir"></Device>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->udi) $this->udi->xmlSerialize(true, $sxe->addChild('udi'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->lotNumber) $this->lotNumber->xmlSerialize(true, $sxe->addChild('lotNumber'));
        if (null !== $this->manufacturer) $this->manufacturer->xmlSerialize(true, $sxe->addChild('manufacturer'));
        if (null !== $this->manufactureDate) $this->manufactureDate->xmlSerialize(true, $sxe->addChild('manufactureDate'));
        if (null !== $this->expirationDate) $this->expirationDate->xmlSerialize(true, $sxe->addChild('expirationDate'));
        if (null !== $this->model) $this->model->xmlSerialize(true, $sxe->addChild('model'));
        if (null !== $this->version) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->owner) $this->owner->xmlSerialize(true, $sxe->addChild('owner'));
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (null !== $this->location) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->safety)) {
            foreach($this->safety as $safety) {
                $safety->xmlSerialize(true, $sxe->addChild('safety'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}