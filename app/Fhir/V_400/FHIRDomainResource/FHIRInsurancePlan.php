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
 * Details of a Health Insurance product/plan provided by an organization.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRInsurancePlan extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Business identifiers assigned to this health insurance product which remain constant as the resource is updated and propagates from server to server.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The current state of the health insurance product.
     * @var \Fhir\V_400\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * The kind of health insurance product.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $type = array();

    /**
     * Official name of the health insurance product as designated by the owner.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A list of alternate names that the product is known as, or was known as in the past.
     * @var \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public $alias = array();

    /**
     * The period of time that the health insurance product is available.
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The entity that is providing  the health insurance product and underwriting the risk.  This is typically an insurance carriers, other third-party payers, or health plan sponsors comonly referred to as 'payers'.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $ownedBy = null;

    /**
     * An organization which administer other services such as underwriting, customer service and/or claims processing on behalf of the health insurance product owner.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $administeredBy = null;

    /**
     * The geographic region in which a health insurance product's benefits apply.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $coverageArea = array();

    /**
     * The contact for the health insurance product for a certain purpose.
     * @var \Fhir\V_400\FHIRResource\FHIRInsurancePlan\FHIRInsurancePlanContact[]
     */
    public $contact = array();

    /**
     * The technical endpoints providing access to services operated for the health insurance product.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $endpoint = array();

    /**
     * Reference to the network included in the health insurance product.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $network = array();

    /**
     * Details about the coverage offered by the insurance product.
     * @var \Fhir\V_400\FHIRResource\FHIRInsurancePlan\FHIRInsurancePlanCoverage[]
     */
    public $coverage = array();

    /**
     * Details about an insurance plan.
     * @var \Fhir\V_400\FHIRResource\FHIRInsurancePlan\FHIRInsurancePlanPlan[]
     */
    public $plan = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'InsurancePlan';

    /**
     * Business identifiers assigned to this health insurance product which remain constant as the resource is updated and propagates from server to server.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Business identifiers assigned to this health insurance product which remain constant as the resource is updated and propagates from server to server.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The current state of the health insurance product.
     * @return \Fhir\V_400\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The current state of the health insurance product.
     * @param \Fhir\V_400\FHIRElement\FHIRPublicationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The kind of health insurance product.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The kind of health insurance product.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function addType($type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * Official name of the health insurance product as designated by the owner.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Official name of the health insurance product as designated by the owner.
     * @param \Fhir\V_400\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A list of alternate names that the product is known as, or was known as in the past.
     * @return \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * A list of alternate names that the product is known as, or was known as in the past.
     * @param \Fhir\V_400\FHIRElement\FHIRString $alias
     * @return $this
     */
    public function addAlias($alias)
    {
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * The period of time that the health insurance product is available.
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The period of time that the health insurance product is available.
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * The entity that is providing  the health insurance product and underwriting the risk.  This is typically an insurance carriers, other third-party payers, or health plan sponsors comonly referred to as 'payers'.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getOwnedBy()
    {
        return $this->ownedBy;
    }

    /**
     * The entity that is providing  the health insurance product and underwriting the risk.  This is typically an insurance carriers, other third-party payers, or health plan sponsors comonly referred to as 'payers'.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $ownedBy
     * @return $this
     */
    public function setOwnedBy($ownedBy)
    {
        $this->ownedBy = $ownedBy;
        return $this;
    }

    /**
     * An organization which administer other services such as underwriting, customer service and/or claims processing on behalf of the health insurance product owner.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getAdministeredBy()
    {
        return $this->administeredBy;
    }

    /**
     * An organization which administer other services such as underwriting, customer service and/or claims processing on behalf of the health insurance product owner.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $administeredBy
     * @return $this
     */
    public function setAdministeredBy($administeredBy)
    {
        $this->administeredBy = $administeredBy;
        return $this;
    }

    /**
     * The geographic region in which a health insurance product's benefits apply.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getCoverageArea()
    {
        return $this->coverageArea;
    }

    /**
     * The geographic region in which a health insurance product's benefits apply.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $coverageArea
     * @return $this
     */
    public function addCoverageArea($coverageArea)
    {
        $this->coverageArea[] = $coverageArea;
        return $this;
    }

    /**
     * The contact for the health insurance product for a certain purpose.
     * @return \Fhir\V_400\FHIRResource\FHIRInsurancePlan\FHIRInsurancePlanContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * The contact for the health insurance product for a certain purpose.
     * @param \Fhir\V_400\FHIRResource\FHIRInsurancePlan\FHIRInsurancePlanContact $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * The technical endpoints providing access to services operated for the health insurance product.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * The technical endpoints providing access to services operated for the health insurance product.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $endpoint
     * @return $this
     */
    public function addEndpoint($endpoint)
    {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * Reference to the network included in the health insurance product.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Reference to the network included in the health insurance product.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $network
     * @return $this
     */
    public function addNetwork($network)
    {
        $this->network[] = $network;
        return $this;
    }

    /**
     * Details about the coverage offered by the insurance product.
     * @return \Fhir\V_400\FHIRResource\FHIRInsurancePlan\FHIRInsurancePlanCoverage[]
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Details about the coverage offered by the insurance product.
     * @param \Fhir\V_400\FHIRResource\FHIRInsurancePlan\FHIRInsurancePlanCoverage $coverage
     * @return $this
     */
    public function addCoverage($coverage)
    {
        $this->coverage[] = $coverage;
        return $this;
    }

    /**
     * Details about an insurance plan.
     * @return \Fhir\V_400\FHIRResource\FHIRInsurancePlan\FHIRInsurancePlanPlan[]
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Details about an insurance plan.
     * @param \Fhir\V_400\FHIRResource\FHIRInsurancePlan\FHIRInsurancePlanPlan $plan
     * @return $this
     */
    public function addPlan($plan)
    {
        $this->plan[] = $plan;
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
        if (0 < count($this->type)) {
            $json['type'] = [];
            foreach($this->type as $type) {
                $json['type'][] = $type;
            }
        }
        if (null !== $this->name) $json['name'] = $this->name;
        if (0 < count($this->alias)) {
            $json['alias'] = [];
            foreach($this->alias as $alias) {
                $json['alias'][] = $alias;
            }
        }
        if (null !== $this->period) $json['period'] = $this->period;
        if (null !== $this->ownedBy) $json['ownedBy'] = $this->ownedBy;
        if (null !== $this->administeredBy) $json['administeredBy'] = $this->administeredBy;
        if (0 < count($this->coverageArea)) {
            $json['coverageArea'] = [];
            foreach($this->coverageArea as $coverageArea) {
                $json['coverageArea'][] = $coverageArea;
            }
        }
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                $json['contact'][] = $contact;
            }
        }
        if (0 < count($this->endpoint)) {
            $json['endpoint'] = [];
            foreach($this->endpoint as $endpoint) {
                $json['endpoint'][] = $endpoint;
            }
        }
        if (0 < count($this->network)) {
            $json['network'] = [];
            foreach($this->network as $network) {
                $json['network'][] = $network;
            }
        }
        if (0 < count($this->coverage)) {
            $json['coverage'] = [];
            foreach($this->coverage as $coverage) {
                $json['coverage'][] = $coverage;
            }
        }
        if (0 < count($this->plan)) {
            $json['plan'] = [];
            foreach($this->plan as $plan) {
                $json['plan'][] = $plan;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<InsurancePlan xmlns="http://hl7.org/fhir"></InsurancePlan>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (0 < count($this->alias)) {
            foreach($this->alias as $alias) {
                $alias->xmlSerialize(true, $sxe->addChild('alias'));
            }
        }
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (null !== $this->ownedBy) $this->ownedBy->xmlSerialize(true, $sxe->addChild('ownedBy'));
        if (null !== $this->administeredBy) $this->administeredBy->xmlSerialize(true, $sxe->addChild('administeredBy'));
        if (0 < count($this->coverageArea)) {
            foreach($this->coverageArea as $coverageArea) {
                $coverageArea->xmlSerialize(true, $sxe->addChild('coverageArea'));
            }
        }
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (0 < count($this->endpoint)) {
            foreach($this->endpoint as $endpoint) {
                $endpoint->xmlSerialize(true, $sxe->addChild('endpoint'));
            }
        }
        if (0 < count($this->network)) {
            foreach($this->network as $network) {
                $network->xmlSerialize(true, $sxe->addChild('network'));
            }
        }
        if (0 < count($this->coverage)) {
            foreach($this->coverage as $coverage) {
                $coverage->xmlSerialize(true, $sxe->addChild('coverage'));
            }
        }
        if (0 < count($this->plan)) {
            foreach($this->plan as $plan) {
                $plan->xmlSerialize(true, $sxe->addChild('plan'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}