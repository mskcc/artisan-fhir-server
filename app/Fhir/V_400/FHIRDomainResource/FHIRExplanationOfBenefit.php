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
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRExplanationOfBenefit extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique identifier assigned to this explanation of benefit.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The status of the resource instance.
     * @var \Fhir\V_400\FHIRElement\FHIRExplanationOfBenefitStatus
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
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual for forecast reimbursement is sought.
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
     * The party responsible for authorization, adjudication and reimbursement.
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
    public $fundsReserveRequested = null;

    /**
     * A code, used only on a response to a preauthorization, to indicate whether the benefits payable have been reserved and for whom.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $fundsReserve = null;

    /**
     * Other claims which are related to this claim such as prior submissions or claims for related services or for the same event.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated[]
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
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee
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
     * The business identifier for the instance of the adjudication request: claim predetermination or preauthorization.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $claim = null;

    /**
     * The business identifier for the instance of the adjudication response: claim, predetermination or preauthorization response.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $claimResponse = null;

    /**
     * The outcome of the claim, predetermination, or preauthorization processing.
     * @var \Fhir\V_400\FHIRElement\FHIRClaimProcessingCodes
     */
    public $outcome = null;

    /**
     * A human readable description of the status of the adjudication.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $disposition = null;

    /**
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     * @var \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public $preAuthRef = array();

    /**
     * The timeframe during which the supplied preauthorization reference may be quoted on claims to obtain the adjudication as provided.
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod[]
     */
    public $preAuthRefPeriod = array();

    /**
     * The members of the team who provided the products and services.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam[]
     */
    public $careTeam = array();

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSupportingInfo[]
     */
    public $supportingInfo = array();

    /**
     * Information about diagnoses relevant to the claim items.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis[]
     */
    public $diagnosis = array();

    /**
     * Procedures performed on the patient relevant to the billing items with the claim.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure[]
     */
    public $procedure = array();

    /**
     * This indicates the relative order of a series of EOBs related to different coverages for the same suite of services.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public $precedence = null;

    /**
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance[]
     */
    public $insurance = array();

    /**
     * Details of a accident which resulted in injuries which required the products and services listed in the claim.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident
     */
    public $accident = null;

    /**
     * A claim line. Either a simple (a product or service) or a 'group' of details which can also be a simple items or groups of sub-details.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem[]
     */
    public $item = array();

    /**
     * The first-tier service adjudications for payor added product or service lines.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem[]
     */
    public $addItem = array();

    /**
     * The adjudication results which are presented at the header level rather than at the line-item or add-item levels.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication[]
     */
    public $adjudication = array();

    /**
     * Categorized monetary totals for the adjudication.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitTotal[]
     */
    public $total = array();

    /**
     * Payment details for the adjudication of the claim.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment
     */
    public $payment = null;

    /**
     * A code for the form to be used for printing the content.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $formCode = null;

    /**
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     * @var \Fhir\V_400\FHIRElement\FHIRAttachment
     */
    public $form = null;

    /**
     * A note that describes or explains adjudication results in a human readable form.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote[]
     */
    public $processNote = array();

    /**
     * The term of the benefits documented in this response.
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $benefitPeriod = null;

    /**
     * Balance by Benefit Category.
     * @var \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance[]
     */
    public $benefitBalance = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ExplanationOfBenefit';

    /**
     * A unique identifier assigned to this explanation of benefit.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique identifier assigned to this explanation of benefit.
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
     * @return \Fhir\V_400\FHIRElement\FHIRExplanationOfBenefitStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the resource instance.
     * @param \Fhir\V_400\FHIRElement\FHIRExplanationOfBenefitStatus $status
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
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual for forecast reimbursement is sought.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual for forecast reimbursement is sought.
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
     * The party responsible for authorization, adjudication and reimbursement.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getInsurer()
    {
        return $this->insurer;
    }

    /**
     * The party responsible for authorization, adjudication and reimbursement.
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
    public function getFundsReserveRequested()
    {
        return $this->fundsReserveRequested;
    }

    /**
     * A code to indicate whether and for whom funds are to be reserved for future claims.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $fundsReserveRequested
     * @return $this
     */
    public function setFundsReserveRequested($fundsReserveRequested)
    {
        $this->fundsReserveRequested = $fundsReserveRequested;
        return $this;
    }

    /**
     * A code, used only on a response to a preauthorization, to indicate whether the benefits payable have been reserved and for whom.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getFundsReserve()
    {
        return $this->fundsReserve;
    }

    /**
     * A code, used only on a response to a preauthorization, to indicate whether the benefits payable have been reserved and for whom.
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
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * Other claims which are related to this claim such as prior submissions or claims for related services or for the same event.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated $related
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
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * The party to be reimbursed for cost of the products and services according to the terms of the policy.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee $payee
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
     * The business identifier for the instance of the adjudication request: claim predetermination or preauthorization.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getClaim()
    {
        return $this->claim;
    }

    /**
     * The business identifier for the instance of the adjudication request: claim predetermination or preauthorization.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $claim
     * @return $this
     */
    public function setClaim($claim)
    {
        $this->claim = $claim;
        return $this;
    }

    /**
     * The business identifier for the instance of the adjudication response: claim, predetermination or preauthorization response.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getClaimResponse()
    {
        return $this->claimResponse;
    }

    /**
     * The business identifier for the instance of the adjudication response: claim, predetermination or preauthorization response.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $claimResponse
     * @return $this
     */
    public function setClaimResponse($claimResponse)
    {
        $this->claimResponse = $claimResponse;
        return $this;
    }

    /**
     * The outcome of the claim, predetermination, or preauthorization processing.
     * @return \Fhir\V_400\FHIRElement\FHIRClaimProcessingCodes
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * The outcome of the claim, predetermination, or preauthorization processing.
     * @param \Fhir\V_400\FHIRElement\FHIRClaimProcessingCodes $outcome
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A human readable description of the status of the adjudication.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * A human readable description of the status of the adjudication.
     * @param \Fhir\V_400\FHIRElement\FHIRString $disposition
     * @return $this
     */
    public function setDisposition($disposition)
    {
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     * @return \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public function getPreAuthRef()
    {
        return $this->preAuthRef;
    }

    /**
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     * @param \Fhir\V_400\FHIRElement\FHIRString $preAuthRef
     * @return $this
     */
    public function addPreAuthRef($preAuthRef)
    {
        $this->preAuthRef[] = $preAuthRef;
        return $this;
    }

    /**
     * The timeframe during which the supplied preauthorization reference may be quoted on claims to obtain the adjudication as provided.
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod[]
     */
    public function getPreAuthRefPeriod()
    {
        return $this->preAuthRefPeriod;
    }

    /**
     * The timeframe during which the supplied preauthorization reference may be quoted on claims to obtain the adjudication as provided.
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $preAuthRefPeriod
     * @return $this
     */
    public function addPreAuthRefPeriod($preAuthRefPeriod)
    {
        $this->preAuthRefPeriod[] = $preAuthRefPeriod;
        return $this;
    }

    /**
     * The members of the team who provided the products and services.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam[]
     */
    public function getCareTeam()
    {
        return $this->careTeam;
    }

    /**
     * The members of the team who provided the products and services.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam $careTeam
     * @return $this
     */
    public function addCareTeam($careTeam)
    {
        $this->careTeam[] = $careTeam;
        return $this;
    }

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSupportingInfo[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSupportingInfo $supportingInfo
     * @return $this
     */
    public function addSupportingInfo($supportingInfo)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * Information about diagnoses relevant to the claim items.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis[]
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Information about diagnoses relevant to the claim items.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis $diagnosis
     * @return $this
     */
    public function addDiagnosis($diagnosis)
    {
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * Procedures performed on the patient relevant to the billing items with the claim.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure[]
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * Procedures performed on the patient relevant to the billing items with the claim.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure $procedure
     * @return $this
     */
    public function addProcedure($procedure)
    {
        $this->procedure[] = $procedure;
        return $this;
    }

    /**
     * This indicates the relative order of a series of EOBs related to different coverages for the same suite of services.
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public function getPrecedence()
    {
        return $this->precedence;
    }

    /**
     * This indicates the relative order of a series of EOBs related to different coverages for the same suite of services.
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $precedence
     * @return $this
     */
    public function setPrecedence($precedence)
    {
        $this->precedence = $precedence;
        return $this;
    }

    /**
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance $insurance
     * @return $this
     */
    public function addInsurance($insurance)
    {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * Details of a accident which resulted in injuries which required the products and services listed in the claim.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident
     */
    public function getAccident()
    {
        return $this->accident;
    }

    /**
     * Details of a accident which resulted in injuries which required the products and services listed in the claim.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident $accident
     * @return $this
     */
    public function setAccident($accident)
    {
        $this->accident = $accident;
        return $this;
    }

    /**
     * A claim line. Either a simple (a product or service) or a 'group' of details which can also be a simple items or groups of sub-details.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * A claim line. Either a simple (a product or service) or a 'group' of details which can also be a simple items or groups of sub-details.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem $item
     * @return $this
     */
    public function addItem($item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * The first-tier service adjudications for payor added product or service lines.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem[]
     */
    public function getAddItem()
    {
        return $this->addItem;
    }

    /**
     * The first-tier service adjudications for payor added product or service lines.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem $addItem
     * @return $this
     */
    public function addAddItem($addItem)
    {
        $this->addItem[] = $addItem;
        return $this;
    }

    /**
     * The adjudication results which are presented at the header level rather than at the line-item or add-item levels.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication[]
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }

    /**
     * The adjudication results which are presented at the header level rather than at the line-item or add-item levels.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication $adjudication
     * @return $this
     */
    public function addAdjudication($adjudication)
    {
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * Categorized monetary totals for the adjudication.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitTotal[]
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Categorized monetary totals for the adjudication.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitTotal $total
     * @return $this
     */
    public function addTotal($total)
    {
        $this->total[] = $total;
        return $this;
    }

    /**
     * Payment details for the adjudication of the claim.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Payment details for the adjudication of the claim.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment $payment
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * A code for the form to be used for printing the content.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getFormCode()
    {
        return $this->formCode;
    }

    /**
     * A code for the form to be used for printing the content.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $formCode
     * @return $this
     */
    public function setFormCode($formCode)
    {
        $this->formCode = $formCode;
        return $this;
    }

    /**
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     * @return \Fhir\V_400\FHIRElement\FHIRAttachment
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     * @param \Fhir\V_400\FHIRElement\FHIRAttachment $form
     * @return $this
     */
    public function setForm($form)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * A note that describes or explains adjudication results in a human readable form.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote[]
     */
    public function getProcessNote()
    {
        return $this->processNote;
    }

    /**
     * A note that describes or explains adjudication results in a human readable form.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote $processNote
     * @return $this
     */
    public function addProcessNote($processNote)
    {
        $this->processNote[] = $processNote;
        return $this;
    }

    /**
     * The term of the benefits documented in this response.
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getBenefitPeriod()
    {
        return $this->benefitPeriod;
    }

    /**
     * The term of the benefits documented in this response.
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $benefitPeriod
     * @return $this
     */
    public function setBenefitPeriod($benefitPeriod)
    {
        $this->benefitPeriod = $benefitPeriod;
        return $this;
    }

    /**
     * Balance by Benefit Category.
     * @return \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance[]
     */
    public function getBenefitBalance()
    {
        return $this->benefitBalance;
    }

    /**
     * Balance by Benefit Category.
     * @param \Fhir\V_400\FHIRResource\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance $benefitBalance
     * @return $this
     */
    public function addBenefitBalance($benefitBalance)
    {
        $this->benefitBalance[] = $benefitBalance;
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
        if (null !== $this->fundsReserveRequested) $json['fundsReserveRequested'] = $this->fundsReserveRequested;
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
        if (null !== $this->claim) $json['claim'] = $this->claim;
        if (null !== $this->claimResponse) $json['claimResponse'] = $this->claimResponse;
        if (null !== $this->outcome) $json['outcome'] = $this->outcome;
        if (null !== $this->disposition) $json['disposition'] = $this->disposition;
        if (0 < count($this->preAuthRef)) {
            $json['preAuthRef'] = [];
            foreach($this->preAuthRef as $preAuthRef) {
                $json['preAuthRef'][] = $preAuthRef;
            }
        }
        if (0 < count($this->preAuthRefPeriod)) {
            $json['preAuthRefPeriod'] = [];
            foreach($this->preAuthRefPeriod as $preAuthRefPeriod) {
                $json['preAuthRefPeriod'][] = $preAuthRefPeriod;
            }
        }
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
        if (null !== $this->precedence) $json['precedence'] = $this->precedence;
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
        if (0 < count($this->addItem)) {
            $json['addItem'] = [];
            foreach($this->addItem as $addItem) {
                $json['addItem'][] = $addItem;
            }
        }
        if (0 < count($this->adjudication)) {
            $json['adjudication'] = [];
            foreach($this->adjudication as $adjudication) {
                $json['adjudication'][] = $adjudication;
            }
        }
        if (0 < count($this->total)) {
            $json['total'] = [];
            foreach($this->total as $total) {
                $json['total'][] = $total;
            }
        }
        if (null !== $this->payment) $json['payment'] = $this->payment;
        if (null !== $this->formCode) $json['formCode'] = $this->formCode;
        if (null !== $this->form) $json['form'] = $this->form;
        if (0 < count($this->processNote)) {
            $json['processNote'] = [];
            foreach($this->processNote as $processNote) {
                $json['processNote'][] = $processNote;
            }
        }
        if (null !== $this->benefitPeriod) $json['benefitPeriod'] = $this->benefitPeriod;
        if (0 < count($this->benefitBalance)) {
            $json['benefitBalance'] = [];
            foreach($this->benefitBalance as $benefitBalance) {
                $json['benefitBalance'][] = $benefitBalance;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ExplanationOfBenefit xmlns="http://hl7.org/fhir"></ExplanationOfBenefit>');
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
        if (null !== $this->fundsReserveRequested) $this->fundsReserveRequested->xmlSerialize(true, $sxe->addChild('fundsReserveRequested'));
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
        if (null !== $this->claim) $this->claim->xmlSerialize(true, $sxe->addChild('claim'));
        if (null !== $this->claimResponse) $this->claimResponse->xmlSerialize(true, $sxe->addChild('claimResponse'));
        if (null !== $this->outcome) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (null !== $this->disposition) $this->disposition->xmlSerialize(true, $sxe->addChild('disposition'));
        if (0 < count($this->preAuthRef)) {
            foreach($this->preAuthRef as $preAuthRef) {
                $preAuthRef->xmlSerialize(true, $sxe->addChild('preAuthRef'));
            }
        }
        if (0 < count($this->preAuthRefPeriod)) {
            foreach($this->preAuthRefPeriod as $preAuthRefPeriod) {
                $preAuthRefPeriod->xmlSerialize(true, $sxe->addChild('preAuthRefPeriod'));
            }
        }
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
        if (null !== $this->precedence) $this->precedence->xmlSerialize(true, $sxe->addChild('precedence'));
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
        if (0 < count($this->addItem)) {
            foreach($this->addItem as $addItem) {
                $addItem->xmlSerialize(true, $sxe->addChild('addItem'));
            }
        }
        if (0 < count($this->adjudication)) {
            foreach($this->adjudication as $adjudication) {
                $adjudication->xmlSerialize(true, $sxe->addChild('adjudication'));
            }
        }
        if (0 < count($this->total)) {
            foreach($this->total as $total) {
                $total->xmlSerialize(true, $sxe->addChild('total'));
            }
        }
        if (null !== $this->payment) $this->payment->xmlSerialize(true, $sxe->addChild('payment'));
        if (null !== $this->formCode) $this->formCode->xmlSerialize(true, $sxe->addChild('formCode'));
        if (null !== $this->form) $this->form->xmlSerialize(true, $sxe->addChild('form'));
        if (0 < count($this->processNote)) {
            foreach($this->processNote as $processNote) {
                $processNote->xmlSerialize(true, $sxe->addChild('processNote'));
            }
        }
        if (null !== $this->benefitPeriod) $this->benefitPeriod->xmlSerialize(true, $sxe->addChild('benefitPeriod'));
        if (0 < count($this->benefitBalance)) {
            foreach($this->benefitBalance as $benefitBalance) {
                $benefitBalance->xmlSerialize(true, $sxe->addChild('benefitBalance'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}