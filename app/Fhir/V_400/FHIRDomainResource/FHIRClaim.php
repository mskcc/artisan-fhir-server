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
 * A provider issued list of professional services and products which have been provided, or are to be provided, to a patient which is sent to an insurer for reimbursement.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRClaim extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique identifier assigned to this claim.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The status of the resource instance.
     * @var \Fhir\V_400\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public $status = null;

    /**
     * The category of claim, e.g. oral, pharmacy, vision, institutional, professional.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $subType = null;

    /**
     * A code to indicate whether the nature of the request is: to request adjudication of products and services previously rendered; or requesting authorization and adjudication for provision in the future; or requesting the non-binding adjudication of the listed products and services which could be provided in the future.
     * @var \Fhir\V_400\FHIRElement\FHIRUse
     */
    public $use = null;

    /**
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual or forecast reimbursement is sought.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The period for which charges are being submitted.
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $billablePeriod = null;

    /**
     * The date this resource was created.
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * Individual who created the claim, predetermination or preauthorization.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $enterer = null;

    /**
     * The Insurer who is target of the request.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $insurer = null;

    /**
     * The provider which is responsible for the claim, predetermination or preauthorization.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * The provider-required urgency of processing the request. Typical values include: stat, routine deferred.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $priority = null;

    /**
     * A code to indicate whether and for whom funds are to be reserved for future claims.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $fundsReserve = null;

    /**
     * Other claims which are related to this claim such as prior submissions or claims for related services or for the same event.
     * @var \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimRelated[]
     */
    public $related = array();

    /**
     * Prescription to support the dispensing of pharmacy, device or vision products.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $prescription = null;

    /**
     * Original prescription which has been superseded by this prescription to support the dispensing of pharmacy services, medications or products.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $originalPrescription = null;

    /**
     * The party to be reimbursed for cost of the products and services according to the terms of the policy.
     * @var \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimPayee
     */
    public $payee = null;

    /**
     * A reference to a referral resource.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $referral = null;

    /**
     * Facility where the services were provided.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $facility = null;

    /**
     * The members of the team who provided the products and services.
     * @var \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimCareTeam[]
     */
    public $careTeam = array();

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     * @var \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimSupportingInfo[]
     */
    public $supportingInfo = array();

    /**
     * Information about diagnoses relevant to the claim items.
     * @var \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimDiagnosis[]
     */
    public $diagnosis = array();

    /**
     * Procedures performed on the patient relevant to the billing items with the claim.
     * @var \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimProcedure[]
     */
    public $procedure = array();

    /**
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     * @var \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimInsurance[]
     */
    public $insurance = array();

    /**
     * Details of an accident which resulted in injuries which required the products and services listed in the claim.
     * @var \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimAccident
     */
    public $accident = null;

    /**
     * A claim line. Either a simple  product or service or a 'group' of details which can each be a simple items or groups of sub-details.
     * @var \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimItem[]
     */
    public $item = array();

    /**
     * The total value of the all the items in the claim.
     * @var \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public $total = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Claim';

    /**
     * A unique identifier assigned to this claim.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique identifier assigned to this claim.
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
     * The category of claim, e.g. oral, pharmacy, vision, institutional, professional.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The category of claim, e.g. oral, pharmacy, vision, institutional, professional.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $subType
     * @return $this
     */
    public function setSubType($subType)
    {
        $this->subType = $subType;
        return $this;
    }

    /**
     * A code to indicate whether the nature of the request is: to request adjudication of products and services previously rendered; or requesting authorization and adjudication for provision in the future; or requesting the non-binding adjudication of the listed products and services which could be provided in the future.
     * @return \Fhir\V_400\FHIRElement\FHIRUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * A code to indicate whether the nature of the request is: to request adjudication of products and services previously rendered; or requesting authorization and adjudication for provision in the future; or requesting the non-binding adjudication of the listed products and services which could be provided in the future.
     * @param \Fhir\V_400\FHIRElement\FHIRUse $use
     * @return $this
     */
    public function setUse($use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual or forecast reimbursement is sought.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual or forecast reimbursement is sought.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The period for which charges are being submitted.
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getBillablePeriod()
    {
        return $this->billablePeriod;
    }

    /**
     * The period for which charges are being submitted.
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $billablePeriod
     * @return $this
     */
    public function setBillablePeriod($billablePeriod)
    {
        $this->billablePeriod = $billablePeriod;
        return $this;
    }

    /**
     * The date this resource was created.
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * The date this resource was created.
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Individual who created the claim, predetermination or preauthorization.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getEnterer()
    {
        return $this->enterer;
    }

    /**
     * Individual who created the claim, predetermination or preauthorization.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $enterer
     * @return $this
     */
    public function setEnterer($enterer)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * The Insurer who is target of the request.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getInsurer()
    {
        return $this->insurer;
    }

    /**
     * The Insurer who is target of the request.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $insurer
     * @return $this
     */
    public function setInsurer($insurer)
    {
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * The provider which is responsible for the claim, predetermination or preauthorization.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * The provider which is responsible for the claim, predetermination or preauthorization.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * The provider-required urgency of processing the request. Typical values include: stat, routine deferred.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * The provider-required urgency of processing the request. Typical values include: stat, routine deferred.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * A code to indicate whether and for whom funds are to be reserved for future claims.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getFundsReserve()
    {
        return $this->fundsReserve;
    }

    /**
     * A code to indicate whether and for whom funds are to be reserved for future claims.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $fundsReserve
     * @return $this
     */
    public function setFundsReserve($fundsReserve)
    {
        $this->fundsReserve = $fundsReserve;
        return $this;
    }

    /**
     * Other claims which are related to this claim such as prior submissions or claims for related services or for the same event.
     * @return \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimRelated[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * Other claims which are related to this claim such as prior submissions or claims for related services or for the same event.
     * @param \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimRelated $related
     * @return $this
     */
    public function addRelated($related)
    {
        $this->related[] = $related;
        return $this;
    }

    /**
     * Prescription to support the dispensing of pharmacy, device or vision products.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getPrescription()
    {
        return $this->prescription;
    }

    /**
     * Prescription to support the dispensing of pharmacy, device or vision products.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $prescription
     * @return $this
     */
    public function setPrescription($prescription)
    {
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * Original prescription which has been superseded by this prescription to support the dispensing of pharmacy services, medications or products.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getOriginalPrescription()
    {
        return $this->originalPrescription;
    }

    /**
     * Original prescription which has been superseded by this prescription to support the dispensing of pharmacy services, medications or products.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $originalPrescription
     * @return $this
     */
    public function setOriginalPrescription($originalPrescription)
    {
        $this->originalPrescription = $originalPrescription;
        return $this;
    }

    /**
     * The party to be reimbursed for cost of the products and services according to the terms of the policy.
     * @return \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimPayee
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * The party to be reimbursed for cost of the products and services according to the terms of the policy.
     * @param \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimPayee $payee
     * @return $this
     */
    public function setPayee($payee)
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * A reference to a referral resource.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getReferral()
    {
        return $this->referral;
    }

    /**
     * A reference to a referral resource.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $referral
     * @return $this
     */
    public function setReferral($referral)
    {
        $this->referral = $referral;
        return $this;
    }

    /**
     * Facility where the services were provided.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * Facility where the services were provided.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $facility
     * @return $this
     */
    public function setFacility($facility)
    {
        $this->facility = $facility;
        return $this;
    }

    /**
     * The members of the team who provided the products and services.
     * @return \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimCareTeam[]
     */
    public function getCareTeam()
    {
        return $this->careTeam;
    }

    /**
     * The members of the team who provided the products and services.
     * @param \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimCareTeam $careTeam
     * @return $this
     */
    public function addCareTeam($careTeam)
    {
        $this->careTeam[] = $careTeam;
        return $this;
    }

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     * @return \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimSupportingInfo[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     * @param \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimSupportingInfo $supportingInfo
     * @return $this
     */
    public function addSupportingInfo($supportingInfo)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * Information about diagnoses relevant to the claim items.
     * @return \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimDiagnosis[]
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Information about diagnoses relevant to the claim items.
     * @param \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimDiagnosis $diagnosis
     * @return $this
     */
    public function addDiagnosis($diagnosis)
    {
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * Procedures performed on the patient relevant to the billing items with the claim.
     * @return \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimProcedure[]
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * Procedures performed on the patient relevant to the billing items with the claim.
     * @param \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimProcedure $procedure
     * @return $this
     */
    public function addProcedure($procedure)
    {
        $this->procedure[] = $procedure;
        return $this;
    }

    /**
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     * @return \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimInsurance[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     * @param \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimInsurance $insurance
     * @return $this
     */
    public function addInsurance($insurance)
    {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * Details of an accident which resulted in injuries which required the products and services listed in the claim.
     * @return \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimAccident
     */
    public function getAccident()
    {
        return $this->accident;
    }

    /**
     * Details of an accident which resulted in injuries which required the products and services listed in the claim.
     * @param \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimAccident $accident
     * @return $this
     */
    public function setAccident($accident)
    {
        $this->accident = $accident;
        return $this;
    }

    /**
     * A claim line. Either a simple  product or service or a 'group' of details which can each be a simple items or groups of sub-details.
     * @return \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * A claim line. Either a simple  product or service or a 'group' of details which can each be a simple items or groups of sub-details.
     * @param \Fhir\V_400\FHIRResource\FHIRClaim\FHIRClaimItem $item
     * @return $this
     */
    public function addItem($item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * The total value of the all the items in the claim.
     * @return \Fhir\V_400\FHIRElement\FHIRMoney
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * The total value of the all the items in the claim.
     * @param \Fhir\V_400\FHIRElement\FHIRMoney $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = $total;
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
        if (null !== $this->subType) $json['subType'] = $this->subType;
        if (null !== $this->use) $json['use'] = $this->use;
        if (null !== $this->patient) $json['patient'] = $this->patient;
        if (null !== $this->billablePeriod) $json['billablePeriod'] = $this->billablePeriod;
        if (null !== $this->created) $json['created'] = $this->created;
        if (null !== $this->enterer) $json['enterer'] = $this->enterer;
        if (null !== $this->insurer) $json['insurer'] = $this->insurer;
        if (null !== $this->provider) $json['provider'] = $this->provider;
        if (null !== $this->priority) $json['priority'] = $this->priority;
        if (null !== $this->fundsReserve) $json['fundsReserve'] = $this->fundsReserve;
        if (0 < count($this->related)) {
            $json['related'] = [];
            foreach($this->related as $related) {
                $json['related'][] = $related;
            }
        }
        if (null !== $this->prescription) $json['prescription'] = $this->prescription;
        if (null !== $this->originalPrescription) $json['originalPrescription'] = $this->originalPrescription;
        if (null !== $this->payee) $json['payee'] = $this->payee;
        if (null !== $this->referral) $json['referral'] = $this->referral;
        if (null !== $this->facility) $json['facility'] = $this->facility;
        if (0 < count($this->careTeam)) {
            $json['careTeam'] = [];
            foreach($this->careTeam as $careTeam) {
                $json['careTeam'][] = $careTeam;
            }
        }
        if (0 < count($this->supportingInfo)) {
            $json['supportingInfo'] = [];
            foreach($this->supportingInfo as $supportingInfo) {
                $json['supportingInfo'][] = $supportingInfo;
            }
        }
        if (0 < count($this->diagnosis)) {
            $json['diagnosis'] = [];
            foreach($this->diagnosis as $diagnosis) {
                $json['diagnosis'][] = $diagnosis;
            }
        }
        if (0 < count($this->procedure)) {
            $json['procedure'] = [];
            foreach($this->procedure as $procedure) {
                $json['procedure'][] = $procedure;
            }
        }
        if (0 < count($this->insurance)) {
            $json['insurance'] = [];
            foreach($this->insurance as $insurance) {
                $json['insurance'][] = $insurance;
            }
        }
        if (null !== $this->accident) $json['accident'] = $this->accident;
        if (0 < count($this->item)) {
            $json['item'] = [];
            foreach($this->item as $item) {
                $json['item'][] = $item;
            }
        }
        if (null !== $this->total) $json['total'] = $this->total;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Claim xmlns="http://hl7.org/fhir"></Claim>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->subType) $this->subType->xmlSerialize(true, $sxe->addChild('subType'));
        if (null !== $this->use) $this->use->xmlSerialize(true, $sxe->addChild('use'));
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->billablePeriod) $this->billablePeriod->xmlSerialize(true, $sxe->addChild('billablePeriod'));
        if (null !== $this->created) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (null !== $this->enterer) $this->enterer->xmlSerialize(true, $sxe->addChild('enterer'));
        if (null !== $this->insurer) $this->insurer->xmlSerialize(true, $sxe->addChild('insurer'));
        if (null !== $this->provider) $this->provider->xmlSerialize(true, $sxe->addChild('provider'));
        if (null !== $this->priority) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (null !== $this->fundsReserve) $this->fundsReserve->xmlSerialize(true, $sxe->addChild('fundsReserve'));
        if (0 < count($this->related)) {
            foreach($this->related as $related) {
                $related->xmlSerialize(true, $sxe->addChild('related'));
            }
        }
        if (null !== $this->prescription) $this->prescription->xmlSerialize(true, $sxe->addChild('prescription'));
        if (null !== $this->originalPrescription) $this->originalPrescription->xmlSerialize(true, $sxe->addChild('originalPrescription'));
        if (null !== $this->payee) $this->payee->xmlSerialize(true, $sxe->addChild('payee'));
        if (null !== $this->referral) $this->referral->xmlSerialize(true, $sxe->addChild('referral'));
        if (null !== $this->facility) $this->facility->xmlSerialize(true, $sxe->addChild('facility'));
        if (0 < count($this->careTeam)) {
            foreach($this->careTeam as $careTeam) {
                $careTeam->xmlSerialize(true, $sxe->addChild('careTeam'));
            }
        }
        if (0 < count($this->supportingInfo)) {
            foreach($this->supportingInfo as $supportingInfo) {
                $supportingInfo->xmlSerialize(true, $sxe->addChild('supportingInfo'));
            }
        }
        if (0 < count($this->diagnosis)) {
            foreach($this->diagnosis as $diagnosis) {
                $diagnosis->xmlSerialize(true, $sxe->addChild('diagnosis'));
            }
        }
        if (0 < count($this->procedure)) {
            foreach($this->procedure as $procedure) {
                $procedure->xmlSerialize(true, $sxe->addChild('procedure'));
            }
        }
        if (0 < count($this->insurance)) {
            foreach($this->insurance as $insurance) {
                $insurance->xmlSerialize(true, $sxe->addChild('insurance'));
            }
        }
        if (null !== $this->accident) $this->accident->xmlSerialize(true, $sxe->addChild('accident'));
        if (0 < count($this->item)) {
            foreach($this->item as $item) {
                $item->xmlSerialize(true, $sxe->addChild('item'));
            }
        }
        if (null !== $this->total) $this->total->xmlSerialize(true, $sxe->addChild('total'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}