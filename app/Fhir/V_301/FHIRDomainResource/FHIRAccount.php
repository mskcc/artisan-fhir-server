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
 * A financial tool for tracking value accrued for a particular purpose.  In the healthcare field, used to track charges for a patient, cost centers, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAccount extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Unique identifier used to reference the account.  May or may not be intended for human use (e.g. credit card number).
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Indicates whether the account is presently used/usable or not.
     * @var \Fhir\V_301\FHIRElement\FHIRAccountStatus
     */
    public $status = null;

    /**
     * Categorizes the account for reporting and searching purposes.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Identifies the patient, device, practitioner, location or other object the account is associated with.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Identifies the period of time the account applies to; e.g. accounts created per fiscal year, quarter, etc.
     * @var \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Indicates the period of time over which the account is allowed to have transactions posted to it.
This period may be different to the coveragePeriod which is the duration of time that services may occur.
     * @var \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public $active = null;

    /**
     * Represents the sum of all credits less all debits associated with the account.  Might be positive, zero or negative.
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $balance = null;

    /**
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     * @var \Fhir\V_301\FHIRResource\FHIRAccount\FHIRAccountCoverage[]
     */
    public $coverage = array();

    /**
     * Indicates the organization, department, etc. with responsibility for the account.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $owner = null;

    /**
     * Provides additional information about what the account tracks and how it is used.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Parties financially responsible for the account.
     * @var \Fhir\V_301\FHIRResource\FHIRAccount\FHIRAccountGuarantor[]
     */
    public $guarantor = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Account';

    /**
     * Unique identifier used to reference the account.  May or may not be intended for human use (e.g. credit card number).
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Unique identifier used to reference the account.  May or may not be intended for human use (e.g. credit card number).
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Indicates whether the account is presently used/usable or not.
     * @return \Fhir\V_301\FHIRElement\FHIRAccountStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates whether the account is presently used/usable or not.
     * @param \Fhir\V_301\FHIRElement\FHIRAccountStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Categorizes the account for reporting and searching purposes.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Categorizes the account for reporting and searching purposes.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     * @param \Fhir\V_301\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Identifies the patient, device, practitioner, location or other object the account is associated with.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Identifies the patient, device, practitioner, location or other object the account is associated with.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Identifies the period of time the account applies to; e.g. accounts created per fiscal year, quarter, etc.
     * @return \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Identifies the period of time the account applies to; e.g. accounts created per fiscal year, quarter, etc.
     * @param \Fhir\V_301\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Indicates the period of time over which the account is allowed to have transactions posted to it.
This period may be different to the coveragePeriod which is the duration of time that services may occur.
     * @return \Fhir\V_301\FHIRElement\FHIRPeriod
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Indicates the period of time over which the account is allowed to have transactions posted to it.
This period may be different to the coveragePeriod which is the duration of time that services may occur.
     * @param \Fhir\V_301\FHIRElement\FHIRPeriod $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Represents the sum of all credits less all debits associated with the account.  Might be positive, zero or negative.
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Represents the sum of all credits less all debits associated with the account.  Might be positive, zero or negative.
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity\FHIRMoney $balance
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     * @return \Fhir\V_301\FHIRResource\FHIRAccount\FHIRAccountCoverage[]
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     * @param \Fhir\V_301\FHIRResource\FHIRAccount\FHIRAccountCoverage $coverage
     * @return $this
     */
    public function addCoverage($coverage)
    {
        $this->coverage[] = $coverage;
        return $this;
    }

    /**
     * Indicates the organization, department, etc. with responsibility for the account.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Indicates the organization, department, etc. with responsibility for the account.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $owner
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Provides additional information about what the account tracks and how it is used.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Provides additional information about what the account tracks and how it is used.
     * @param \Fhir\V_301\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Parties financially responsible for the account.
     * @return \Fhir\V_301\FHIRResource\FHIRAccount\FHIRAccountGuarantor[]
     */
    public function getGuarantor()
    {
        return $this->guarantor;
    }

    /**
     * Parties financially responsible for the account.
     * @param \Fhir\V_301\FHIRResource\FHIRAccount\FHIRAccountGuarantor $guarantor
     * @return $this
     */
    public function addGuarantor($guarantor)
    {
        $this->guarantor[] = $guarantor;
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
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->period) $json['period'] = $this->period;
        if (null !== $this->active) $json['active'] = $this->active;
        if (null !== $this->balance) $json['balance'] = $this->balance;
        if (0 < count($this->coverage)) {
            $json['coverage'] = [];
            foreach($this->coverage as $coverage) {
                $json['coverage'][] = $coverage;
            }
        }
        if (null !== $this->owner) $json['owner'] = $this->owner;
        if (null !== $this->description) $json['description'] = $this->description;
        if (0 < count($this->guarantor)) {
            $json['guarantor'] = [];
            foreach($this->guarantor as $guarantor) {
                $json['guarantor'][] = $guarantor;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Account xmlns="http://hl7.org/fhir"></Account>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (null !== $this->active) $this->active->xmlSerialize(true, $sxe->addChild('active'));
        if (null !== $this->balance) $this->balance->xmlSerialize(true, $sxe->addChild('balance'));
        if (0 < count($this->coverage)) {
            foreach($this->coverage as $coverage) {
                $coverage->xmlSerialize(true, $sxe->addChild('coverage'));
            }
        }
        if (null !== $this->owner) $this->owner->xmlSerialize(true, $sxe->addChild('owner'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->guarantor)) {
            foreach($this->guarantor as $guarantor) {
                $guarantor->xmlSerialize(true, $sxe->addChild('guarantor'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}