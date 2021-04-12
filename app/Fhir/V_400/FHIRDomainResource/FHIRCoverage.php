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
 * Financial instrument which may be used to reimburse or pay for health care products and services. Includes both insurance and self-payment.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRCoverage extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique identifier assigned to this coverage.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The status of the resource instance.
     * @var \Fhir\V_400\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public $status = null;

    /**
     * The type of coverage: social program, medical plan, accident coverage (workers compensation, auto), group health or payment by an individual or organization.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The party who 'owns' the insurance policy.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $policyHolder = null;

    /**
     * The party who has signed-up for or 'owns' the contractual relationship to the policy or to whom the benefit of the policy for services rendered to them or their family is due.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $subscriber = null;

    /**
     * The insurer assigned ID for the Subscriber.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $subscriberId = null;

    /**
     * The party who benefits from the insurance coverage; the patient when products and/or services are provided.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $beneficiary = null;

    /**
     * A unique identifier for a dependent under the coverage.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $dependent = null;

    /**
     * The relationship of beneficiary (patient) to the subscriber.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $relationship = null;

    /**
     * Time period during which the coverage is in force. A missing start date indicates the start date isn't known, a missing end date means the coverage is continuing to be in force.
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The program or plan underwriter or payor including both insurance and non-insurance agreements, such as patient-pay agreements.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $payor = array();

    /**
     * A suite of underwriter specific classifiers.
     * @var \Fhir\V_400\FHIRResource\FHIRCoverage\FHIRCoverageClass[]
     */
    public $class = array();

    /**
     * The order of applicability of this coverage relative to other coverages which are currently in force. Note, there may be gaps in the numbering and this does not imply primary, secondary etc. as the specific positioning of coverages depends upon the episode of care.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public $order = null;

    /**
     * The insurer-specific identifier for the insurer-defined network of providers to which the beneficiary may seek treatment which will be covered at the 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $network = null;

    /**
     * A suite of codes indicating the cost category and associated amount which have been detailed in the policy and may have been  included on the health card.
     * @var \Fhir\V_400\FHIRResource\FHIRCoverage\FHIRCoverageCostToBeneficiary[]
     */
    public $costToBeneficiary = array();

    /**
     * When 'subrogation=true' this insurance instance has been included not for adjudication but to provide insurers with the details to recover costs.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $subrogation = null;

    /**
     * The policy(s) which constitute this insurance coverage.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $contract = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Coverage';

    /**
     * A unique identifier assigned to this coverage.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique identifier assigned to this coverage.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The status of the resource instance.
     * @return \Fhir\V_400\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the resource instance.
     * @param \Fhir\V_400\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The type of coverage: social program, medical plan, accident coverage (workers compensation, auto), group health or payment by an individual or organization.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of coverage: social program, medical plan, accident coverage (workers compensation, auto), group health or payment by an individual or organization.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The party who 'owns' the insurance policy.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getPolicyHolder()
    {
        return $this->policyHolder;
    }

    /**
     * The party who 'owns' the insurance policy.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $policyHolder
     * @return $this
     */
    public function setPolicyHolder($policyHolder)
    {
        $this->policyHolder = $policyHolder;
        return $this;
    }

    /**
     * The party who has signed-up for or 'owns' the contractual relationship to the policy or to whom the benefit of the policy for services rendered to them or their family is due.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }

    /**
     * The party who has signed-up for or 'owns' the contractual relationship to the policy or to whom the benefit of the policy for services rendered to them or their family is due.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $subscriber
     * @return $this
     */
    public function setSubscriber($subscriber)
    {
        $this->subscriber = $subscriber;
        return $this;
    }

    /**
     * The insurer assigned ID for the Subscriber.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getSubscriberId()
    {
        return $this->subscriberId;
    }

    /**
     * The insurer assigned ID for the Subscriber.
     * @param \Fhir\V_400\FHIRElement\FHIRString $subscriberId
     * @return $this
     */
    public function setSubscriberId($subscriberId)
    {
        $this->subscriberId = $subscriberId;
        return $this;
    }

    /**
     * The party who benefits from the insurance coverage; the patient when products and/or services are provided.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getBeneficiary()
    {
        return $this->beneficiary;
    }

    /**
     * The party who benefits from the insurance coverage; the patient when products and/or services are provided.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $beneficiary
     * @return $this
     */
    public function setBeneficiary($beneficiary)
    {
        $this->beneficiary = $beneficiary;
        return $this;
    }

    /**
     * A unique identifier for a dependent under the coverage.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getDependent()
    {
        return $this->dependent;
    }

    /**
     * A unique identifier for a dependent under the coverage.
     * @param \Fhir\V_400\FHIRElement\FHIRString $dependent
     * @return $this
     */
    public function setDependent($dependent)
    {
        $this->dependent = $dependent;
        return $this;
    }

    /**
     * The relationship of beneficiary (patient) to the subscriber.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * The relationship of beneficiary (patient) to the subscriber.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $relationship
     * @return $this
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Time period during which the coverage is in force. A missing start date indicates the start date isn't known, a missing end date means the coverage is continuing to be in force.
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Time period during which the coverage is in force. A missing start date indicates the start date isn't known, a missing end date means the coverage is continuing to be in force.
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * The program or plan underwriter or payor including both insurance and non-insurance agreements, such as patient-pay agreements.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getPayor()
    {
        return $this->payor;
    }

    /**
     * The program or plan underwriter or payor including both insurance and non-insurance agreements, such as patient-pay agreements.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $payor
     * @return $this
     */
    public function addPayor($payor)
    {
        $this->payor[] = $payor;
        return $this;
    }

    /**
     * A suite of underwriter specific classifiers.
     * @return \Fhir\V_400\FHIRResource\FHIRCoverage\FHIRCoverageClass[]
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * A suite of underwriter specific classifiers.
     * @param \Fhir\V_400\FHIRResource\FHIRCoverage\FHIRCoverageClass $class
     * @return $this
     */
    public function addClass($class)
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * The order of applicability of this coverage relative to other coverages which are currently in force. Note, there may be gaps in the numbering and this does not imply primary, secondary etc. as the specific positioning of coverages depends upon the episode of care.
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * The order of applicability of this coverage relative to other coverages which are currently in force. Note, there may be gaps in the numbering and this does not imply primary, secondary etc. as the specific positioning of coverages depends upon the episode of care.
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * The insurer-specific identifier for the insurer-defined network of providers to which the beneficiary may seek treatment which will be covered at the 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * The insurer-specific identifier for the insurer-defined network of providers to which the beneficiary may seek treatment which will be covered at the 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     * @param \Fhir\V_400\FHIRElement\FHIRString $network
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->network = $network;
        return $this;
    }

    /**
     * A suite of codes indicating the cost category and associated amount which have been detailed in the policy and may have been  included on the health card.
     * @return \Fhir\V_400\FHIRResource\FHIRCoverage\FHIRCoverageCostToBeneficiary[]
     */
    public function getCostToBeneficiary()
    {
        return $this->costToBeneficiary;
    }

    /**
     * A suite of codes indicating the cost category and associated amount which have been detailed in the policy and may have been  included on the health card.
     * @param \Fhir\V_400\FHIRResource\FHIRCoverage\FHIRCoverageCostToBeneficiary $costToBeneficiary
     * @return $this
     */
    public function addCostToBeneficiary($costToBeneficiary)
    {
        $this->costToBeneficiary[] = $costToBeneficiary;
        return $this;
    }

    /**
     * When 'subrogation=true' this insurance instance has been included not for adjudication but to provide insurers with the details to recover costs.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getSubrogation()
    {
        return $this->subrogation;
    }

    /**
     * When 'subrogation=true' this insurance instance has been included not for adjudication but to provide insurers with the details to recover costs.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $subrogation
     * @return $this
     */
    public function setSubrogation($subrogation)
    {
        $this->subrogation = $subrogation;
        return $this;
    }

    /**
     * The policy(s) which constitute this insurance coverage.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * The policy(s) which constitute this insurance coverage.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $contract
     * @return $this
     */
    public function addContract($contract)
    {
        $this->contract[] = $contract;
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
        if (null !== $this->policyHolder) $json['policyHolder'] = $this->policyHolder;
        if (null !== $this->subscriber) $json['subscriber'] = $this->subscriber;
        if (null !== $this->subscriberId) $json['subscriberId'] = $this->subscriberId;
        if (null !== $this->beneficiary) $json['beneficiary'] = $this->beneficiary;
        if (null !== $this->dependent) $json['dependent'] = $this->dependent;
        if (null !== $this->relationship) $json['relationship'] = $this->relationship;
        if (null !== $this->period) $json['period'] = $this->period;
        if (0 < count($this->payor)) {
            $json['payor'] = [];
            foreach($this->payor as $payor) {
                $json['payor'][] = $payor;
            }
        }
        if (0 < count($this->class)) {
            $json['class'] = [];
            foreach($this->class as $class) {
                $json['class'][] = $class;
            }
        }
        if (null !== $this->order) $json['order'] = $this->order;
        if (null !== $this->network) $json['network'] = $this->network;
        if (0 < count($this->costToBeneficiary)) {
            $json['costToBeneficiary'] = [];
            foreach($this->costToBeneficiary as $costToBeneficiary) {
                $json['costToBeneficiary'][] = $costToBeneficiary;
            }
        }
        if (null !== $this->subrogation) $json['subrogation'] = $this->subrogation;
        if (0 < count($this->contract)) {
            $json['contract'] = [];
            foreach($this->contract as $contract) {
                $json['contract'][] = $contract;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Coverage xmlns="http://hl7.org/fhir"></Coverage>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->policyHolder) $this->policyHolder->xmlSerialize(true, $sxe->addChild('policyHolder'));
        if (null !== $this->subscriber) $this->subscriber->xmlSerialize(true, $sxe->addChild('subscriber'));
        if (null !== $this->subscriberId) $this->subscriberId->xmlSerialize(true, $sxe->addChild('subscriberId'));
        if (null !== $this->beneficiary) $this->beneficiary->xmlSerialize(true, $sxe->addChild('beneficiary'));
        if (null !== $this->dependent) $this->dependent->xmlSerialize(true, $sxe->addChild('dependent'));
        if (null !== $this->relationship) $this->relationship->xmlSerialize(true, $sxe->addChild('relationship'));
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (0 < count($this->payor)) {
            foreach($this->payor as $payor) {
                $payor->xmlSerialize(true, $sxe->addChild('payor'));
            }
        }
        if (0 < count($this->class)) {
            foreach($this->class as $class) {
                $class->xmlSerialize(true, $sxe->addChild('class'));
            }
        }
        if (null !== $this->order) $this->order->xmlSerialize(true, $sxe->addChild('order'));
        if (null !== $this->network) $this->network->xmlSerialize(true, $sxe->addChild('network'));
        if (0 < count($this->costToBeneficiary)) {
            foreach($this->costToBeneficiary as $costToBeneficiary) {
                $costToBeneficiary->xmlSerialize(true, $sxe->addChild('costToBeneficiary'));
            }
        }
        if (null !== $this->subrogation) $this->subrogation->xmlSerialize(true, $sxe->addChild('subrogation'));
        if (0 < count($this->contract)) {
            foreach($this->contract as $contract) {
                $contract->xmlSerialize(true, $sxe->addChild('contract'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}