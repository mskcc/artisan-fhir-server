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
 * Details and position information for a physical place where services are provided and resources and participants may be stored, found, contained, or accommodated.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRLocation extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Unique code or number identifying the location to its users.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The status property covers the general availability of the resource, not the current value which may be covered by the operationStatus, or by a schedule/slots if they are configured for the location.
     * @var \Fhir\V_400\FHIRElement\FHIRLocationStatus
     */
    public $status = null;

    /**
     * The operational status covers operation values most relevant to beds (but can also apply to rooms/units/chairs/etc. such as an isolation unit/dialysis chair). This typically covers concepts such as contamination, housekeeping, and other activities like maintenance.
     * @var \Fhir\V_400\FHIRElement\FHIRCoding
     */
    public $operationalStatus = null;

    /**
     * Name of the location as used by humans. Does not need to be unique.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A list of alternate names that the location is known as, or was known as, in the past.
     * @var \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public $alias = array();

    /**
     * Description of the Location, which helps in finding or referencing the place.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Indicates whether a resource instance represents a specific location or a class of locations.
     * @var \Fhir\V_400\FHIRElement\FHIRLocationMode
     */
    public $mode = null;

    /**
     * Indicates the type of function performed at the location.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $type = array();

    /**
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     * @var \Fhir\V_400\FHIRElement\FHIRContactPoint[]
     */
    public $telecom = array();

    /**
     * Physical location.
     * @var \Fhir\V_400\FHIRElement\FHIRAddress
     */
    public $address = null;

    /**
     * Physical form of the location, e.g. building, room, vehicle, road.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $physicalType = null;

    /**
     * The absolute geographic location of the Location, expressed using the WGS84 datum (This is the same co-ordinate system used in KML).
     * @var \Fhir\V_400\FHIRResource\FHIRLocation\FHIRLocationPosition
     */
    public $position = null;

    /**
     * The organization responsible for the provisioning and upkeep of the location.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $managingOrganization = null;

    /**
     * Another Location of which this Location is physically a part of.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * What days/times during a week is this location usually open.
     * @var \Fhir\V_400\FHIRResource\FHIRLocation\FHIRLocationHoursOfOperation[]
     */
    public $hoursOfOperation = array();

    /**
     * A description of when the locations opening ours are different to normal, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as detailed in the opening hours Times.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $availabilityExceptions = null;

    /**
     * Technical endpoints providing access to services operated for the location.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $endpoint = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Location';

    /**
     * Unique code or number identifying the location to its users.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Unique code or number identifying the location to its users.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The status property covers the general availability of the resource, not the current value which may be covered by the operationStatus, or by a schedule/slots if they are configured for the location.
     * @return \Fhir\V_400\FHIRElement\FHIRLocationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status property covers the general availability of the resource, not the current value which may be covered by the operationStatus, or by a schedule/slots if they are configured for the location.
     * @param \Fhir\V_400\FHIRElement\FHIRLocationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The operational status covers operation values most relevant to beds (but can also apply to rooms/units/chairs/etc. such as an isolation unit/dialysis chair). This typically covers concepts such as contamination, housekeeping, and other activities like maintenance.
     * @return \Fhir\V_400\FHIRElement\FHIRCoding
     */
    public function getOperationalStatus()
    {
        return $this->operationalStatus;
    }

    /**
     * The operational status covers operation values most relevant to beds (but can also apply to rooms/units/chairs/etc. such as an isolation unit/dialysis chair). This typically covers concepts such as contamination, housekeeping, and other activities like maintenance.
     * @param \Fhir\V_400\FHIRElement\FHIRCoding $operationalStatus
     * @return $this
     */
    public function setOperationalStatus($operationalStatus)
    {
        $this->operationalStatus = $operationalStatus;
        return $this;
    }

    /**
     * Name of the location as used by humans. Does not need to be unique.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the location as used by humans. Does not need to be unique.
     * @param \Fhir\V_400\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A list of alternate names that the location is known as, or was known as, in the past.
     * @return \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * A list of alternate names that the location is known as, or was known as, in the past.
     * @param \Fhir\V_400\FHIRElement\FHIRString $alias
     * @return $this
     */
    public function addAlias($alias)
    {
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * Description of the Location, which helps in finding or referencing the place.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the Location, which helps in finding or referencing the place.
     * @param \Fhir\V_400\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Indicates whether a resource instance represents a specific location or a class of locations.
     * @return \Fhir\V_400\FHIRElement\FHIRLocationMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Indicates whether a resource instance represents a specific location or a class of locations.
     * @param \Fhir\V_400\FHIRElement\FHIRLocationMode $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Indicates the type of function performed at the location.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Indicates the type of function performed at the location.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function addType($type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     * @return \Fhir\V_400\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     * @param \Fhir\V_400\FHIRElement\FHIRContactPoint $telecom
     * @return $this
     */
    public function addTelecom($telecom)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * Physical location.
     * @return \Fhir\V_400\FHIRElement\FHIRAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Physical location.
     * @param \Fhir\V_400\FHIRElement\FHIRAddress $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Physical form of the location, e.g. building, room, vehicle, road.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getPhysicalType()
    {
        return $this->physicalType;
    }

    /**
     * Physical form of the location, e.g. building, room, vehicle, road.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $physicalType
     * @return $this
     */
    public function setPhysicalType($physicalType)
    {
        $this->physicalType = $physicalType;
        return $this;
    }

    /**
     * The absolute geographic location of the Location, expressed using the WGS84 datum (This is the same co-ordinate system used in KML).
     * @return \Fhir\V_400\FHIRResource\FHIRLocation\FHIRLocationPosition
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * The absolute geographic location of the Location, expressed using the WGS84 datum (This is the same co-ordinate system used in KML).
     * @param \Fhir\V_400\FHIRResource\FHIRLocation\FHIRLocationPosition $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * The organization responsible for the provisioning and upkeep of the location.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * The organization responsible for the provisioning and upkeep of the location.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $managingOrganization
     * @return $this
     */
    public function setManagingOrganization($managingOrganization)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Another Location of which this Location is physically a part of.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Another Location of which this Location is physically a part of.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function setPartOf($partOf)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * What days/times during a week is this location usually open.
     * @return \Fhir\V_400\FHIRResource\FHIRLocation\FHIRLocationHoursOfOperation[]
     */
    public function getHoursOfOperation()
    {
        return $this->hoursOfOperation;
    }

    /**
     * What days/times during a week is this location usually open.
     * @param \Fhir\V_400\FHIRResource\FHIRLocation\FHIRLocationHoursOfOperation $hoursOfOperation
     * @return $this
     */
    public function addHoursOfOperation($hoursOfOperation)
    {
        $this->hoursOfOperation[] = $hoursOfOperation;
        return $this;
    }

    /**
     * A description of when the locations opening ours are different to normal, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as detailed in the opening hours Times.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getAvailabilityExceptions()
    {
        return $this->availabilityExceptions;
    }

    /**
     * A description of when the locations opening ours are different to normal, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as detailed in the opening hours Times.
     * @param \Fhir\V_400\FHIRElement\FHIRString $availabilityExceptions
     * @return $this
     */
    public function setAvailabilityExceptions($availabilityExceptions)
    {
        $this->availabilityExceptions = $availabilityExceptions;
        return $this;
    }

    /**
     * Technical endpoints providing access to services operated for the location.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Technical endpoints providing access to services operated for the location.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $endpoint
     * @return $this
     */
    public function addEndpoint($endpoint)
    {
        $this->endpoint[] = $endpoint;
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
        if (null !== $this->operationalStatus) $json['operationalStatus'] = $this->operationalStatus;
        if (null !== $this->name) $json['name'] = $this->name;
        if (0 < count($this->alias)) {
            $json['alias'] = [];
            foreach($this->alias as $alias) {
                $json['alias'][] = $alias;
            }
        }
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->mode) $json['mode'] = $this->mode;
        if (0 < count($this->type)) {
            $json['type'] = [];
            foreach($this->type as $type) {
                $json['type'][] = $type;
            }
        }
        if (0 < count($this->telecom)) {
            $json['telecom'] = [];
            foreach($this->telecom as $telecom) {
                $json['telecom'][] = $telecom;
            }
        }
        if (null !== $this->address) $json['address'] = $this->address;
        if (null !== $this->physicalType) $json['physicalType'] = $this->physicalType;
        if (null !== $this->position) $json['position'] = $this->position;
        if (null !== $this->managingOrganization) $json['managingOrganization'] = $this->managingOrganization;
        if (null !== $this->partOf) $json['partOf'] = $this->partOf;
        if (0 < count($this->hoursOfOperation)) {
            $json['hoursOfOperation'] = [];
            foreach($this->hoursOfOperation as $hoursOfOperation) {
                $json['hoursOfOperation'][] = $hoursOfOperation;
            }
        }
        if (null !== $this->availabilityExceptions) $json['availabilityExceptions'] = $this->availabilityExceptions;
        if (0 < count($this->endpoint)) {
            $json['endpoint'] = [];
            foreach($this->endpoint as $endpoint) {
                $json['endpoint'][] = $endpoint;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Location xmlns="http://hl7.org/fhir"></Location>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->operationalStatus) $this->operationalStatus->xmlSerialize(true, $sxe->addChild('operationalStatus'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (0 < count($this->alias)) {
            foreach($this->alias as $alias) {
                $alias->xmlSerialize(true, $sxe->addChild('alias'));
            }
        }
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->mode) $this->mode->xmlSerialize(true, $sxe->addChild('mode'));
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (0 < count($this->telecom)) {
            foreach($this->telecom as $telecom) {
                $telecom->xmlSerialize(true, $sxe->addChild('telecom'));
            }
        }
        if (null !== $this->address) $this->address->xmlSerialize(true, $sxe->addChild('address'));
        if (null !== $this->physicalType) $this->physicalType->xmlSerialize(true, $sxe->addChild('physicalType'));
        if (null !== $this->position) $this->position->xmlSerialize(true, $sxe->addChild('position'));
        if (null !== $this->managingOrganization) $this->managingOrganization->xmlSerialize(true, $sxe->addChild('managingOrganization'));
        if (null !== $this->partOf) $this->partOf->xmlSerialize(true, $sxe->addChild('partOf'));
        if (0 < count($this->hoursOfOperation)) {
            foreach($this->hoursOfOperation as $hoursOfOperation) {
                $hoursOfOperation->xmlSerialize(true, $sxe->addChild('hoursOfOperation'));
            }
        }
        if (null !== $this->availabilityExceptions) $this->availabilityExceptions->xmlSerialize(true, $sxe->addChild('availabilityExceptions'));
        if (0 < count($this->endpoint)) {
            foreach($this->endpoint as $endpoint) {
                $endpoint->xmlSerialize(true, $sxe->addChild('endpoint'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}