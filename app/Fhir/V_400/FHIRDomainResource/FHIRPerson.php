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
 * Demographics and administrative information about a person independent of a specific health-related context.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRPerson extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifier for a person within a particular scope.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * A name associated with the person.
     * @var \Fhir\V_400\FHIRElement\FHIRHumanName[]
     */
    public $name = array();

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     * @var \Fhir\V_400\FHIRElement\FHIRContactPoint[]
     */
    public $telecom = array();

    /**
     * Administrative Gender.
     * @var \Fhir\V_400\FHIRElement\FHIRAdministrativeGender
     */
    public $gender = null;

    /**
     * The birth date for the person.
     * @var \Fhir\V_400\FHIRElement\FHIRDate
     */
    public $birthDate = null;

    /**
     * One or more addresses for the person.
     * @var \Fhir\V_400\FHIRElement\FHIRAddress[]
     */
    public $address = array();

    /**
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
     * @var \Fhir\V_400\FHIRElement\FHIRAttachment
     */
    public $photo = null;

    /**
     * The organization that is the custodian of the person record.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $managingOrganization = null;

    /**
     * Whether this person's record is in active use.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * Link to a resource that concerns the same actual person.
     * @var \Fhir\V_400\FHIRResource\FHIRPerson\FHIRPersonLink[]
     */
    public $link = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Person';

    /**
     * Identifier for a person within a particular scope.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier for a person within a particular scope.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A name associated with the person.
     * @return \Fhir\V_400\FHIRElement\FHIRHumanName[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A name associated with the person.
     * @param \Fhir\V_400\FHIRElement\FHIRHumanName $name
     * @return $this
     */
    public function addName($name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     * @return \Fhir\V_400\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     * @param \Fhir\V_400\FHIRElement\FHIRContactPoint $telecom
     * @return $this
     */
    public function addTelecom($telecom)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * Administrative Gender.
     * @return \Fhir\V_400\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Administrative Gender.
     * @param \Fhir\V_400\FHIRElement\FHIRAdministrativeGender $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * The birth date for the person.
     * @return \Fhir\V_400\FHIRElement\FHIRDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * The birth date for the person.
     * @param \Fhir\V_400\FHIRElement\FHIRDate $birthDate
     * @return $this
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * One or more addresses for the person.
     * @return \Fhir\V_400\FHIRElement\FHIRAddress[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * One or more addresses for the person.
     * @param \Fhir\V_400\FHIRElement\FHIRAddress $address
     * @return $this
     */
    public function addAddress($address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
     * @return \Fhir\V_400\FHIRElement\FHIRAttachment
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
     * @param \Fhir\V_400\FHIRElement\FHIRAttachment $photo
     * @return $this
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * The organization that is the custodian of the person record.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * The organization that is the custodian of the person record.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $managingOrganization
     * @return $this
     */
    public function setManagingOrganization($managingOrganization)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Whether this person's record is in active use.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Whether this person's record is in active use.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Link to a resource that concerns the same actual person.
     * @return \Fhir\V_400\FHIRResource\FHIRPerson\FHIRPersonLink[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Link to a resource that concerns the same actual person.
     * @param \Fhir\V_400\FHIRResource\FHIRPerson\FHIRPersonLink $link
     * @return $this
     */
    public function addLink($link)
    {
        $this->link[] = $link;
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
        if (0 < count($this->name)) {
            $json['name'] = [];
            foreach($this->name as $name) {
                $json['name'][] = $name;
            }
        }
        if (0 < count($this->telecom)) {
            $json['telecom'] = [];
            foreach($this->telecom as $telecom) {
                $json['telecom'][] = $telecom;
            }
        }
        if (null !== $this->gender) $json['gender'] = $this->gender;
        if (null !== $this->birthDate) $json['birthDate'] = $this->birthDate;
        if (0 < count($this->address)) {
            $json['address'] = [];
            foreach($this->address as $address) {
                $json['address'][] = $address;
            }
        }
        if (null !== $this->photo) $json['photo'] = $this->photo;
        if (null !== $this->managingOrganization) $json['managingOrganization'] = $this->managingOrganization;
        if (null !== $this->active) $json['active'] = $this->active;
        if (0 < count($this->link)) {
            $json['link'] = [];
            foreach($this->link as $link) {
                $json['link'][] = $link;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Person xmlns="http://hl7.org/fhir"></Person>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->name)) {
            foreach($this->name as $name) {
                $name->xmlSerialize(true, $sxe->addChild('name'));
            }
        }
        if (0 < count($this->telecom)) {
            foreach($this->telecom as $telecom) {
                $telecom->xmlSerialize(true, $sxe->addChild('telecom'));
            }
        }
        if (null !== $this->gender) $this->gender->xmlSerialize(true, $sxe->addChild('gender'));
        if (null !== $this->birthDate) $this->birthDate->xmlSerialize(true, $sxe->addChild('birthDate'));
        if (0 < count($this->address)) {
            foreach($this->address as $address) {
                $address->xmlSerialize(true, $sxe->addChild('address'));
            }
        }
        if (null !== $this->photo) $this->photo->xmlSerialize(true, $sxe->addChild('photo'));
        if (null !== $this->managingOrganization) $this->managingOrganization->xmlSerialize(true, $sxe->addChild('managingOrganization'));
        if (null !== $this->active) $this->active->xmlSerialize(true, $sxe->addChild('active'));
        if (0 < count($this->link)) {
            foreach($this->link as $link) {
                $link->xmlSerialize(true, $sxe->addChild('link'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}