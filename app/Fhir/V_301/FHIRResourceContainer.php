<?php namespace Fhir\V_301;

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

class FHIRResourceContainer implements \JsonSerializable
{
    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRAccount
     */
    public $Account = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRActivityDefinition
     */
    public $ActivityDefinition = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRAdverseEvent
     */
    public $AdverseEvent = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public $AllergyIntolerance = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRAppointment
     */
    public $Appointment = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRAppointmentResponse
     */
    public $AppointmentResponse = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRAuditEvent
     */
    public $AuditEvent = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRBasic
     */
    public $Basic = null;

    /**
     * @var \Fhir\V_301\FHIRResource\FHIRBinary
     */
    public $Binary = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRBodySite
     */
    public $BodySite = null;

    /**
     * @var \Fhir\V_301\FHIRResource\FHIRBundle
     */
    public $Bundle = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRCapabilityStatement
     */
    public $CapabilityStatement = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRCarePlan
     */
    public $CarePlan = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRCareTeam
     */
    public $CareTeam = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRChargeItem
     */
    public $ChargeItem = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRClaim
     */
    public $Claim = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRClaimResponse
     */
    public $ClaimResponse = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRClinicalImpression
     */
    public $ClinicalImpression = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRCodeSystem
     */
    public $CodeSystem = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRCommunication
     */
    public $Communication = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRCommunicationRequest
     */
    public $CommunicationRequest = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRCompartmentDefinition
     */
    public $CompartmentDefinition = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRComposition
     */
    public $Composition = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRConceptMap
     */
    public $ConceptMap = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRCondition
     */
    public $Condition = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRConsent
     */
    public $Consent = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRContract
     */
    public $Contract = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRCoverage
     */
    public $Coverage = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRDataElement
     */
    public $DataElement = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRDetectedIssue
     */
    public $DetectedIssue = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRDevice
     */
    public $Device = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRDeviceComponent
     */
    public $DeviceComponent = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRDeviceMetric
     */
    public $DeviceMetric = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRDeviceRequest
     */
    public $DeviceRequest = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRDeviceUseStatement
     */
    public $DeviceUseStatement = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRDiagnosticReport
     */
    public $DiagnosticReport = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRDocumentManifest
     */
    public $DocumentManifest = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRDocumentReference
     */
    public $DocumentReference = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIREligibilityRequest
     */
    public $EligibilityRequest = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIREligibilityResponse
     */
    public $EligibilityResponse = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIREncounter
     */
    public $Encounter = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIREndpoint
     */
    public $Endpoint = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIREnrollmentRequest
     */
    public $EnrollmentRequest = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIREnrollmentResponse
     */
    public $EnrollmentResponse = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIREpisodeOfCare
     */
    public $EpisodeOfCare = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRExpansionProfile
     */
    public $ExpansionProfile = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRExplanationOfBenefit
     */
    public $ExplanationOfBenefit = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRFamilyMemberHistory
     */
    public $FamilyMemberHistory = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRFlag
     */
    public $Flag = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRGoal
     */
    public $Goal = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRGraphDefinition
     */
    public $GraphDefinition = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRGroup
     */
    public $Group = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRGuidanceResponse
     */
    public $GuidanceResponse = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRHealthcareService
     */
    public $HealthcareService = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRImagingManifest
     */
    public $ImagingManifest = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRImagingStudy
     */
    public $ImagingStudy = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRImmunization
     */
    public $Immunization = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRImmunizationRecommendation
     */
    public $ImmunizationRecommendation = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRImplementationGuide
     */
    public $ImplementationGuide = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRLibrary
     */
    public $Library = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRLinkage
     */
    public $Linkage = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRList
     */
    public $List = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRLocation
     */
    public $Location = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRMeasure
     */
    public $Measure = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRMeasureReport
     */
    public $MeasureReport = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRMedia
     */
    public $Media = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRMedication
     */
    public $Medication = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRMedicationAdministration
     */
    public $MedicationAdministration = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRMedicationDispense
     */
    public $MedicationDispense = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRMedicationRequest
     */
    public $MedicationRequest = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRMedicationStatement
     */
    public $MedicationStatement = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRMessageDefinition
     */
    public $MessageDefinition = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRMessageHeader
     */
    public $MessageHeader = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRNamingSystem
     */
    public $NamingSystem = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRNutritionOrder
     */
    public $NutritionOrder = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRObservation
     */
    public $Observation = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIROperationDefinition
     */
    public $OperationDefinition = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIROperationOutcome
     */
    public $OperationOutcome = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIROrganization
     */
    public $Organization = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRPatient
     */
    public $Patient = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRPaymentNotice
     */
    public $PaymentNotice = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRPaymentReconciliation
     */
    public $PaymentReconciliation = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRPerson
     */
    public $Person = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRPlanDefinition
     */
    public $PlanDefinition = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRPractitioner
     */
    public $Practitioner = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRPractitionerRole
     */
    public $PractitionerRole = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRProcedure
     */
    public $Procedure = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRProcedureRequest
     */
    public $ProcedureRequest = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRProcessRequest
     */
    public $ProcessRequest = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRProcessResponse
     */
    public $ProcessResponse = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRProvenance
     */
    public $Provenance = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRQuestionnaire
     */
    public $Questionnaire = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRQuestionnaireResponse
     */
    public $QuestionnaireResponse = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRReferralRequest
     */
    public $ReferralRequest = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRRelatedPerson
     */
    public $RelatedPerson = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRRequestGroup
     */
    public $RequestGroup = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRResearchStudy
     */
    public $ResearchStudy = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRResearchSubject
     */
    public $ResearchSubject = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRRiskAssessment
     */
    public $RiskAssessment = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRSchedule
     */
    public $Schedule = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRSearchParameter
     */
    public $SearchParameter = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRSequence
     */
    public $Sequence = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRServiceDefinition
     */
    public $ServiceDefinition = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRSlot
     */
    public $Slot = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRSpecimen
     */
    public $Specimen = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRStructureDefinition
     */
    public $StructureDefinition = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRStructureMap
     */
    public $StructureMap = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRSubscription
     */
    public $Subscription = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRSubstance
     */
    public $Substance = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRSupplyDelivery
     */
    public $SupplyDelivery = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRSupplyRequest
     */
    public $SupplyRequest = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRTask
     */
    public $Task = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRTestReport
     */
    public $TestReport = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRTestScript
     */
    public $TestScript = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRValueSet
     */
    public $ValueSet = null;

    /**
     * @var \Fhir\V_301\FHIRDomainResource\FHIRVisionPrescription
     */
    public $VisionPrescription = null;

    /**
     * @var \Fhir\V_301\FHIRResource\FHIRParameters
     */
    public $Parameters = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ResourceContainer';

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRAccount
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRAccount $Account
     * @return $this
     */
    public function setAccount($Account)
    {
        $this->Account = $Account;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRActivityDefinition
     */
    public function getActivityDefinition()
    {
        return $this->ActivityDefinition;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRActivityDefinition $ActivityDefinition
     * @return $this
     */
    public function setActivityDefinition($ActivityDefinition)
    {
        $this->ActivityDefinition = $ActivityDefinition;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRAdverseEvent
     */
    public function getAdverseEvent()
    {
        return $this->AdverseEvent;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRAdverseEvent $AdverseEvent
     * @return $this
     */
    public function setAdverseEvent($AdverseEvent)
    {
        $this->AdverseEvent = $AdverseEvent;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function getAllergyIntolerance()
    {
        return $this->AllergyIntolerance;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRAllergyIntolerance $AllergyIntolerance
     * @return $this
     */
    public function setAllergyIntolerance($AllergyIntolerance)
    {
        $this->AllergyIntolerance = $AllergyIntolerance;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRAppointment
     */
    public function getAppointment()
    {
        return $this->Appointment;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRAppointment $Appointment
     * @return $this
     */
    public function setAppointment($Appointment)
    {
        $this->Appointment = $Appointment;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRAppointmentResponse
     */
    public function getAppointmentResponse()
    {
        return $this->AppointmentResponse;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRAppointmentResponse $AppointmentResponse
     * @return $this
     */
    public function setAppointmentResponse($AppointmentResponse)
    {
        $this->AppointmentResponse = $AppointmentResponse;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRAuditEvent
     */
    public function getAuditEvent()
    {
        return $this->AuditEvent;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRAuditEvent $AuditEvent
     * @return $this
     */
    public function setAuditEvent($AuditEvent)
    {
        $this->AuditEvent = $AuditEvent;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRBasic
     */
    public function getBasic()
    {
        return $this->Basic;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRBasic $Basic
     * @return $this
     */
    public function setBasic($Basic)
    {
        $this->Basic = $Basic;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRResource\FHIRBinary
     */
    public function getBinary()
    {
        return $this->Binary;
    }

    /**
     * @param \Fhir\V_301\FHIRResource\FHIRBinary $Binary
     * @return $this
     */
    public function setBinary($Binary)
    {
        $this->Binary = $Binary;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRBodySite
     */
    public function getBodySite()
    {
        return $this->BodySite;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRBodySite $BodySite
     * @return $this
     */
    public function setBodySite($BodySite)
    {
        $this->BodySite = $BodySite;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRResource\FHIRBundle
     */
    public function getBundle()
    {
        return $this->Bundle;
    }

    /**
     * @param \Fhir\V_301\FHIRResource\FHIRBundle $Bundle
     * @return $this
     */
    public function setBundle($Bundle)
    {
        $this->Bundle = $Bundle;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function getCapabilityStatement()
    {
        return $this->CapabilityStatement;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRCapabilityStatement $CapabilityStatement
     * @return $this
     */
    public function setCapabilityStatement($CapabilityStatement)
    {
        $this->CapabilityStatement = $CapabilityStatement;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRCarePlan
     */
    public function getCarePlan()
    {
        return $this->CarePlan;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRCarePlan $CarePlan
     * @return $this
     */
    public function setCarePlan($CarePlan)
    {
        $this->CarePlan = $CarePlan;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRCareTeam
     */
    public function getCareTeam()
    {
        return $this->CareTeam;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRCareTeam $CareTeam
     * @return $this
     */
    public function setCareTeam($CareTeam)
    {
        $this->CareTeam = $CareTeam;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRChargeItem
     */
    public function getChargeItem()
    {
        return $this->ChargeItem;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRChargeItem $ChargeItem
     * @return $this
     */
    public function setChargeItem($ChargeItem)
    {
        $this->ChargeItem = $ChargeItem;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRClaim
     */
    public function getClaim()
    {
        return $this->Claim;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRClaim $Claim
     * @return $this
     */
    public function setClaim($Claim)
    {
        $this->Claim = $Claim;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRClaimResponse
     */
    public function getClaimResponse()
    {
        return $this->ClaimResponse;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRClaimResponse $ClaimResponse
     * @return $this
     */
    public function setClaimResponse($ClaimResponse)
    {
        $this->ClaimResponse = $ClaimResponse;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRClinicalImpression
     */
    public function getClinicalImpression()
    {
        return $this->ClinicalImpression;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRClinicalImpression $ClinicalImpression
     * @return $this
     */
    public function setClinicalImpression($ClinicalImpression)
    {
        $this->ClinicalImpression = $ClinicalImpression;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRCodeSystem
     */
    public function getCodeSystem()
    {
        return $this->CodeSystem;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRCodeSystem $CodeSystem
     * @return $this
     */
    public function setCodeSystem($CodeSystem)
    {
        $this->CodeSystem = $CodeSystem;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRCommunication
     */
    public function getCommunication()
    {
        return $this->Communication;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRCommunication $Communication
     * @return $this
     */
    public function setCommunication($Communication)
    {
        $this->Communication = $Communication;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRCommunicationRequest
     */
    public function getCommunicationRequest()
    {
        return $this->CommunicationRequest;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRCommunicationRequest $CommunicationRequest
     * @return $this
     */
    public function setCommunicationRequest($CommunicationRequest)
    {
        $this->CommunicationRequest = $CommunicationRequest;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRCompartmentDefinition
     */
    public function getCompartmentDefinition()
    {
        return $this->CompartmentDefinition;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRCompartmentDefinition $CompartmentDefinition
     * @return $this
     */
    public function setCompartmentDefinition($CompartmentDefinition)
    {
        $this->CompartmentDefinition = $CompartmentDefinition;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRComposition
     */
    public function getComposition()
    {
        return $this->Composition;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRComposition $Composition
     * @return $this
     */
    public function setComposition($Composition)
    {
        $this->Composition = $Composition;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRConceptMap
     */
    public function getConceptMap()
    {
        return $this->ConceptMap;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRConceptMap $ConceptMap
     * @return $this
     */
    public function setConceptMap($ConceptMap)
    {
        $this->ConceptMap = $ConceptMap;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRCondition
     */
    public function getCondition()
    {
        return $this->Condition;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRCondition $Condition
     * @return $this
     */
    public function setCondition($Condition)
    {
        $this->Condition = $Condition;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRConsent
     */
    public function getConsent()
    {
        return $this->Consent;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRConsent $Consent
     * @return $this
     */
    public function setConsent($Consent)
    {
        $this->Consent = $Consent;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRContract
     */
    public function getContract()
    {
        return $this->Contract;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRContract $Contract
     * @return $this
     */
    public function setContract($Contract)
    {
        $this->Contract = $Contract;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRCoverage
     */
    public function getCoverage()
    {
        return $this->Coverage;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRCoverage $Coverage
     * @return $this
     */
    public function setCoverage($Coverage)
    {
        $this->Coverage = $Coverage;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRDataElement
     */
    public function getDataElement()
    {
        return $this->DataElement;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRDataElement $DataElement
     * @return $this
     */
    public function setDataElement($DataElement)
    {
        $this->DataElement = $DataElement;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRDetectedIssue
     */
    public function getDetectedIssue()
    {
        return $this->DetectedIssue;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRDetectedIssue $DetectedIssue
     * @return $this
     */
    public function setDetectedIssue($DetectedIssue)
    {
        $this->DetectedIssue = $DetectedIssue;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRDevice
     */
    public function getDevice()
    {
        return $this->Device;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRDevice $Device
     * @return $this
     */
    public function setDevice($Device)
    {
        $this->Device = $Device;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRDeviceComponent
     */
    public function getDeviceComponent()
    {
        return $this->DeviceComponent;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRDeviceComponent $DeviceComponent
     * @return $this
     */
    public function setDeviceComponent($DeviceComponent)
    {
        $this->DeviceComponent = $DeviceComponent;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRDeviceMetric
     */
    public function getDeviceMetric()
    {
        return $this->DeviceMetric;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRDeviceMetric $DeviceMetric
     * @return $this
     */
    public function setDeviceMetric($DeviceMetric)
    {
        $this->DeviceMetric = $DeviceMetric;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRDeviceRequest
     */
    public function getDeviceRequest()
    {
        return $this->DeviceRequest;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRDeviceRequest $DeviceRequest
     * @return $this
     */
    public function setDeviceRequest($DeviceRequest)
    {
        $this->DeviceRequest = $DeviceRequest;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRDeviceUseStatement
     */
    public function getDeviceUseStatement()
    {
        return $this->DeviceUseStatement;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRDeviceUseStatement $DeviceUseStatement
     * @return $this
     */
    public function setDeviceUseStatement($DeviceUseStatement)
    {
        $this->DeviceUseStatement = $DeviceUseStatement;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRDiagnosticReport
     */
    public function getDiagnosticReport()
    {
        return $this->DiagnosticReport;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRDiagnosticReport $DiagnosticReport
     * @return $this
     */
    public function setDiagnosticReport($DiagnosticReport)
    {
        $this->DiagnosticReport = $DiagnosticReport;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRDocumentManifest
     */
    public function getDocumentManifest()
    {
        return $this->DocumentManifest;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRDocumentManifest $DocumentManifest
     * @return $this
     */
    public function setDocumentManifest($DocumentManifest)
    {
        $this->DocumentManifest = $DocumentManifest;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRDocumentReference
     */
    public function getDocumentReference()
    {
        return $this->DocumentReference;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRDocumentReference $DocumentReference
     * @return $this
     */
    public function setDocumentReference($DocumentReference)
    {
        $this->DocumentReference = $DocumentReference;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIREligibilityRequest
     */
    public function getEligibilityRequest()
    {
        return $this->EligibilityRequest;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIREligibilityRequest $EligibilityRequest
     * @return $this
     */
    public function setEligibilityRequest($EligibilityRequest)
    {
        $this->EligibilityRequest = $EligibilityRequest;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIREligibilityResponse
     */
    public function getEligibilityResponse()
    {
        return $this->EligibilityResponse;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIREligibilityResponse $EligibilityResponse
     * @return $this
     */
    public function setEligibilityResponse($EligibilityResponse)
    {
        $this->EligibilityResponse = $EligibilityResponse;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIREncounter
     */
    public function getEncounter()
    {
        return $this->Encounter;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIREncounter $Encounter
     * @return $this
     */
    public function setEncounter($Encounter)
    {
        $this->Encounter = $Encounter;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIREndpoint
     */
    public function getEndpoint()
    {
        return $this->Endpoint;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIREndpoint $Endpoint
     * @return $this
     */
    public function setEndpoint($Endpoint)
    {
        $this->Endpoint = $Endpoint;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIREnrollmentRequest
     */
    public function getEnrollmentRequest()
    {
        return $this->EnrollmentRequest;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIREnrollmentRequest $EnrollmentRequest
     * @return $this
     */
    public function setEnrollmentRequest($EnrollmentRequest)
    {
        $this->EnrollmentRequest = $EnrollmentRequest;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIREnrollmentResponse
     */
    public function getEnrollmentResponse()
    {
        return $this->EnrollmentResponse;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIREnrollmentResponse $EnrollmentResponse
     * @return $this
     */
    public function setEnrollmentResponse($EnrollmentResponse)
    {
        $this->EnrollmentResponse = $EnrollmentResponse;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function getEpisodeOfCare()
    {
        return $this->EpisodeOfCare;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIREpisodeOfCare $EpisodeOfCare
     * @return $this
     */
    public function setEpisodeOfCare($EpisodeOfCare)
    {
        $this->EpisodeOfCare = $EpisodeOfCare;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRExpansionProfile
     */
    public function getExpansionProfile()
    {
        return $this->ExpansionProfile;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRExpansionProfile $ExpansionProfile
     * @return $this
     */
    public function setExpansionProfile($ExpansionProfile)
    {
        $this->ExpansionProfile = $ExpansionProfile;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRExplanationOfBenefit
     */
    public function getExplanationOfBenefit()
    {
        return $this->ExplanationOfBenefit;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRExplanationOfBenefit $ExplanationOfBenefit
     * @return $this
     */
    public function setExplanationOfBenefit($ExplanationOfBenefit)
    {
        $this->ExplanationOfBenefit = $ExplanationOfBenefit;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRFamilyMemberHistory
     */
    public function getFamilyMemberHistory()
    {
        return $this->FamilyMemberHistory;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRFamilyMemberHistory $FamilyMemberHistory
     * @return $this
     */
    public function setFamilyMemberHistory($FamilyMemberHistory)
    {
        $this->FamilyMemberHistory = $FamilyMemberHistory;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRFlag
     */
    public function getFlag()
    {
        return $this->Flag;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRFlag $Flag
     * @return $this
     */
    public function setFlag($Flag)
    {
        $this->Flag = $Flag;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRGoal
     */
    public function getGoal()
    {
        return $this->Goal;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRGoal $Goal
     * @return $this
     */
    public function setGoal($Goal)
    {
        $this->Goal = $Goal;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRGraphDefinition
     */
    public function getGraphDefinition()
    {
        return $this->GraphDefinition;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRGraphDefinition $GraphDefinition
     * @return $this
     */
    public function setGraphDefinition($GraphDefinition)
    {
        $this->GraphDefinition = $GraphDefinition;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRGroup
     */
    public function getGroup()
    {
        return $this->Group;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRGroup $Group
     * @return $this
     */
    public function setGroup($Group)
    {
        $this->Group = $Group;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRGuidanceResponse
     */
    public function getGuidanceResponse()
    {
        return $this->GuidanceResponse;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRGuidanceResponse $GuidanceResponse
     * @return $this
     */
    public function setGuidanceResponse($GuidanceResponse)
    {
        $this->GuidanceResponse = $GuidanceResponse;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRHealthcareService
     */
    public function getHealthcareService()
    {
        return $this->HealthcareService;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRHealthcareService $HealthcareService
     * @return $this
     */
    public function setHealthcareService($HealthcareService)
    {
        $this->HealthcareService = $HealthcareService;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRImagingManifest
     */
    public function getImagingManifest()
    {
        return $this->ImagingManifest;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRImagingManifest $ImagingManifest
     * @return $this
     */
    public function setImagingManifest($ImagingManifest)
    {
        $this->ImagingManifest = $ImagingManifest;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRImagingStudy
     */
    public function getImagingStudy()
    {
        return $this->ImagingStudy;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRImagingStudy $ImagingStudy
     * @return $this
     */
    public function setImagingStudy($ImagingStudy)
    {
        $this->ImagingStudy = $ImagingStudy;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRImmunization
     */
    public function getImmunization()
    {
        return $this->Immunization;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRImmunization $Immunization
     * @return $this
     */
    public function setImmunization($Immunization)
    {
        $this->Immunization = $Immunization;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRImmunizationRecommendation
     */
    public function getImmunizationRecommendation()
    {
        return $this->ImmunizationRecommendation;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRImmunizationRecommendation $ImmunizationRecommendation
     * @return $this
     */
    public function setImmunizationRecommendation($ImmunizationRecommendation)
    {
        $this->ImmunizationRecommendation = $ImmunizationRecommendation;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRImplementationGuide
     */
    public function getImplementationGuide()
    {
        return $this->ImplementationGuide;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRImplementationGuide $ImplementationGuide
     * @return $this
     */
    public function setImplementationGuide($ImplementationGuide)
    {
        $this->ImplementationGuide = $ImplementationGuide;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRLibrary
     */
    public function getLibrary()
    {
        return $this->Library;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRLibrary $Library
     * @return $this
     */
    public function setLibrary($Library)
    {
        $this->Library = $Library;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRLinkage
     */
    public function getLinkage()
    {
        return $this->Linkage;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRLinkage $Linkage
     * @return $this
     */
    public function setLinkage($Linkage)
    {
        $this->Linkage = $Linkage;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRList
     */
    public function getList()
    {
        return $this->List;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRList $List
     * @return $this
     */
    public function setList($List)
    {
        $this->List = $List;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRLocation
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRLocation $Location
     * @return $this
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRMeasure
     */
    public function getMeasure()
    {
        return $this->Measure;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRMeasure $Measure
     * @return $this
     */
    public function setMeasure($Measure)
    {
        $this->Measure = $Measure;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRMeasureReport
     */
    public function getMeasureReport()
    {
        return $this->MeasureReport;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRMeasureReport $MeasureReport
     * @return $this
     */
    public function setMeasureReport($MeasureReport)
    {
        $this->MeasureReport = $MeasureReport;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRMedia
     */
    public function getMedia()
    {
        return $this->Media;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRMedia $Media
     * @return $this
     */
    public function setMedia($Media)
    {
        $this->Media = $Media;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRMedication
     */
    public function getMedication()
    {
        return $this->Medication;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRMedication $Medication
     * @return $this
     */
    public function setMedication($Medication)
    {
        $this->Medication = $Medication;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function getMedicationAdministration()
    {
        return $this->MedicationAdministration;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRMedicationAdministration $MedicationAdministration
     * @return $this
     */
    public function setMedicationAdministration($MedicationAdministration)
    {
        $this->MedicationAdministration = $MedicationAdministration;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRMedicationDispense
     */
    public function getMedicationDispense()
    {
        return $this->MedicationDispense;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRMedicationDispense $MedicationDispense
     * @return $this
     */
    public function setMedicationDispense($MedicationDispense)
    {
        $this->MedicationDispense = $MedicationDispense;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRMedicationRequest
     */
    public function getMedicationRequest()
    {
        return $this->MedicationRequest;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRMedicationRequest $MedicationRequest
     * @return $this
     */
    public function setMedicationRequest($MedicationRequest)
    {
        $this->MedicationRequest = $MedicationRequest;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRMedicationStatement
     */
    public function getMedicationStatement()
    {
        return $this->MedicationStatement;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRMedicationStatement $MedicationStatement
     * @return $this
     */
    public function setMedicationStatement($MedicationStatement)
    {
        $this->MedicationStatement = $MedicationStatement;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRMessageDefinition
     */
    public function getMessageDefinition()
    {
        return $this->MessageDefinition;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRMessageDefinition $MessageDefinition
     * @return $this
     */
    public function setMessageDefinition($MessageDefinition)
    {
        $this->MessageDefinition = $MessageDefinition;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRMessageHeader
     */
    public function getMessageHeader()
    {
        return $this->MessageHeader;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRMessageHeader $MessageHeader
     * @return $this
     */
    public function setMessageHeader($MessageHeader)
    {
        $this->MessageHeader = $MessageHeader;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRNamingSystem
     */
    public function getNamingSystem()
    {
        return $this->NamingSystem;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRNamingSystem $NamingSystem
     * @return $this
     */
    public function setNamingSystem($NamingSystem)
    {
        $this->NamingSystem = $NamingSystem;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRNutritionOrder
     */
    public function getNutritionOrder()
    {
        return $this->NutritionOrder;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRNutritionOrder $NutritionOrder
     * @return $this
     */
    public function setNutritionOrder($NutritionOrder)
    {
        $this->NutritionOrder = $NutritionOrder;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRObservation
     */
    public function getObservation()
    {
        return $this->Observation;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRObservation $Observation
     * @return $this
     */
    public function setObservation($Observation)
    {
        $this->Observation = $Observation;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIROperationDefinition
     */
    public function getOperationDefinition()
    {
        return $this->OperationDefinition;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIROperationDefinition $OperationDefinition
     * @return $this
     */
    public function setOperationDefinition($OperationDefinition)
    {
        $this->OperationDefinition = $OperationDefinition;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIROperationOutcome
     */
    public function getOperationOutcome()
    {
        return $this->OperationOutcome;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIROperationOutcome $OperationOutcome
     * @return $this
     */
    public function setOperationOutcome($OperationOutcome)
    {
        $this->OperationOutcome = $OperationOutcome;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIROrganization
     */
    public function getOrganization()
    {
        return $this->Organization;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIROrganization $Organization
     * @return $this
     */
    public function setOrganization($Organization)
    {
        $this->Organization = $Organization;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRPatient
     */
    public function getPatient()
    {
        return $this->Patient;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRPatient $Patient
     * @return $this
     */
    public function setPatient($Patient)
    {
        $this->Patient = $Patient;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRPaymentNotice
     */
    public function getPaymentNotice()
    {
        return $this->PaymentNotice;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRPaymentNotice $PaymentNotice
     * @return $this
     */
    public function setPaymentNotice($PaymentNotice)
    {
        $this->PaymentNotice = $PaymentNotice;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRPaymentReconciliation
     */
    public function getPaymentReconciliation()
    {
        return $this->PaymentReconciliation;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRPaymentReconciliation $PaymentReconciliation
     * @return $this
     */
    public function setPaymentReconciliation($PaymentReconciliation)
    {
        $this->PaymentReconciliation = $PaymentReconciliation;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRPerson
     */
    public function getPerson()
    {
        return $this->Person;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRPerson $Person
     * @return $this
     */
    public function setPerson($Person)
    {
        $this->Person = $Person;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRPlanDefinition
     */
    public function getPlanDefinition()
    {
        return $this->PlanDefinition;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRPlanDefinition $PlanDefinition
     * @return $this
     */
    public function setPlanDefinition($PlanDefinition)
    {
        $this->PlanDefinition = $PlanDefinition;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRPractitioner
     */
    public function getPractitioner()
    {
        return $this->Practitioner;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRPractitioner $Practitioner
     * @return $this
     */
    public function setPractitioner($Practitioner)
    {
        $this->Practitioner = $Practitioner;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRPractitionerRole
     */
    public function getPractitionerRole()
    {
        return $this->PractitionerRole;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRPractitionerRole $PractitionerRole
     * @return $this
     */
    public function setPractitionerRole($PractitionerRole)
    {
        $this->PractitionerRole = $PractitionerRole;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRProcedure
     */
    public function getProcedure()
    {
        return $this->Procedure;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRProcedure $Procedure
     * @return $this
     */
    public function setProcedure($Procedure)
    {
        $this->Procedure = $Procedure;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRProcedureRequest
     */
    public function getProcedureRequest()
    {
        return $this->ProcedureRequest;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRProcedureRequest $ProcedureRequest
     * @return $this
     */
    public function setProcedureRequest($ProcedureRequest)
    {
        $this->ProcedureRequest = $ProcedureRequest;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRProcessRequest
     */
    public function getProcessRequest()
    {
        return $this->ProcessRequest;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRProcessRequest $ProcessRequest
     * @return $this
     */
    public function setProcessRequest($ProcessRequest)
    {
        $this->ProcessRequest = $ProcessRequest;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRProcessResponse
     */
    public function getProcessResponse()
    {
        return $this->ProcessResponse;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRProcessResponse $ProcessResponse
     * @return $this
     */
    public function setProcessResponse($ProcessResponse)
    {
        $this->ProcessResponse = $ProcessResponse;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRProvenance
     */
    public function getProvenance()
    {
        return $this->Provenance;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRProvenance $Provenance
     * @return $this
     */
    public function setProvenance($Provenance)
    {
        $this->Provenance = $Provenance;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRQuestionnaire
     */
    public function getQuestionnaire()
    {
        return $this->Questionnaire;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRQuestionnaire $Questionnaire
     * @return $this
     */
    public function setQuestionnaire($Questionnaire)
    {
        $this->Questionnaire = $Questionnaire;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRQuestionnaireResponse
     */
    public function getQuestionnaireResponse()
    {
        return $this->QuestionnaireResponse;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRQuestionnaireResponse $QuestionnaireResponse
     * @return $this
     */
    public function setQuestionnaireResponse($QuestionnaireResponse)
    {
        $this->QuestionnaireResponse = $QuestionnaireResponse;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRReferralRequest
     */
    public function getReferralRequest()
    {
        return $this->ReferralRequest;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRReferralRequest $ReferralRequest
     * @return $this
     */
    public function setReferralRequest($ReferralRequest)
    {
        $this->ReferralRequest = $ReferralRequest;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRRelatedPerson
     */
    public function getRelatedPerson()
    {
        return $this->RelatedPerson;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRRelatedPerson $RelatedPerson
     * @return $this
     */
    public function setRelatedPerson($RelatedPerson)
    {
        $this->RelatedPerson = $RelatedPerson;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRRequestGroup
     */
    public function getRequestGroup()
    {
        return $this->RequestGroup;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRRequestGroup $RequestGroup
     * @return $this
     */
    public function setRequestGroup($RequestGroup)
    {
        $this->RequestGroup = $RequestGroup;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRResearchStudy
     */
    public function getResearchStudy()
    {
        return $this->ResearchStudy;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRResearchStudy $ResearchStudy
     * @return $this
     */
    public function setResearchStudy($ResearchStudy)
    {
        $this->ResearchStudy = $ResearchStudy;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRResearchSubject
     */
    public function getResearchSubject()
    {
        return $this->ResearchSubject;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRResearchSubject $ResearchSubject
     * @return $this
     */
    public function setResearchSubject($ResearchSubject)
    {
        $this->ResearchSubject = $ResearchSubject;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRRiskAssessment
     */
    public function getRiskAssessment()
    {
        return $this->RiskAssessment;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRRiskAssessment $RiskAssessment
     * @return $this
     */
    public function setRiskAssessment($RiskAssessment)
    {
        $this->RiskAssessment = $RiskAssessment;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRSchedule
     */
    public function getSchedule()
    {
        return $this->Schedule;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRSchedule $Schedule
     * @return $this
     */
    public function setSchedule($Schedule)
    {
        $this->Schedule = $Schedule;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRSearchParameter
     */
    public function getSearchParameter()
    {
        return $this->SearchParameter;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRSearchParameter $SearchParameter
     * @return $this
     */
    public function setSearchParameter($SearchParameter)
    {
        $this->SearchParameter = $SearchParameter;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRSequence
     */
    public function getSequence()
    {
        return $this->Sequence;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRSequence $Sequence
     * @return $this
     */
    public function setSequence($Sequence)
    {
        $this->Sequence = $Sequence;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRServiceDefinition
     */
    public function getServiceDefinition()
    {
        return $this->ServiceDefinition;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRServiceDefinition $ServiceDefinition
     * @return $this
     */
    public function setServiceDefinition($ServiceDefinition)
    {
        $this->ServiceDefinition = $ServiceDefinition;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRSlot
     */
    public function getSlot()
    {
        return $this->Slot;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRSlot $Slot
     * @return $this
     */
    public function setSlot($Slot)
    {
        $this->Slot = $Slot;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRSpecimen
     */
    public function getSpecimen()
    {
        return $this->Specimen;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRSpecimen $Specimen
     * @return $this
     */
    public function setSpecimen($Specimen)
    {
        $this->Specimen = $Specimen;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRStructureDefinition
     */
    public function getStructureDefinition()
    {
        return $this->StructureDefinition;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRStructureDefinition $StructureDefinition
     * @return $this
     */
    public function setStructureDefinition($StructureDefinition)
    {
        $this->StructureDefinition = $StructureDefinition;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRStructureMap
     */
    public function getStructureMap()
    {
        return $this->StructureMap;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRStructureMap $StructureMap
     * @return $this
     */
    public function setStructureMap($StructureMap)
    {
        $this->StructureMap = $StructureMap;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRSubscription
     */
    public function getSubscription()
    {
        return $this->Subscription;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRSubscription $Subscription
     * @return $this
     */
    public function setSubscription($Subscription)
    {
        $this->Subscription = $Subscription;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRSubstance
     */
    public function getSubstance()
    {
        return $this->Substance;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRSubstance $Substance
     * @return $this
     */
    public function setSubstance($Substance)
    {
        $this->Substance = $Substance;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRSupplyDelivery
     */
    public function getSupplyDelivery()
    {
        return $this->SupplyDelivery;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRSupplyDelivery $SupplyDelivery
     * @return $this
     */
    public function setSupplyDelivery($SupplyDelivery)
    {
        $this->SupplyDelivery = $SupplyDelivery;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRSupplyRequest
     */
    public function getSupplyRequest()
    {
        return $this->SupplyRequest;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRSupplyRequest $SupplyRequest
     * @return $this
     */
    public function setSupplyRequest($SupplyRequest)
    {
        $this->SupplyRequest = $SupplyRequest;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRTask
     */
    public function getTask()
    {
        return $this->Task;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRTask $Task
     * @return $this
     */
    public function setTask($Task)
    {
        $this->Task = $Task;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRTestReport
     */
    public function getTestReport()
    {
        return $this->TestReport;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRTestReport $TestReport
     * @return $this
     */
    public function setTestReport($TestReport)
    {
        $this->TestReport = $TestReport;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRTestScript
     */
    public function getTestScript()
    {
        return $this->TestScript;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRTestScript $TestScript
     * @return $this
     */
    public function setTestScript($TestScript)
    {
        $this->TestScript = $TestScript;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRValueSet
     */
    public function getValueSet()
    {
        return $this->ValueSet;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRValueSet $ValueSet
     * @return $this
     */
    public function setValueSet($ValueSet)
    {
        $this->ValueSet = $ValueSet;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRDomainResource\FHIRVisionPrescription
     */
    public function getVisionPrescription()
    {
        return $this->VisionPrescription;
    }

    /**
     * @param \Fhir\V_301\FHIRDomainResource\FHIRVisionPrescription $VisionPrescription
     * @return $this
     */
    public function setVisionPrescription($VisionPrescription)
    {
        $this->VisionPrescription = $VisionPrescription;
        return $this;
    }

    /**
     * @return \Fhir\V_301\FHIRResource\FHIRParameters
     */
    public function getParameters()
    {
        return $this->Parameters;
    }

    /**
     * @param \Fhir\V_301\FHIRResource\FHIRParameters $Parameters
     * @return $this
     */
    public function setParameters($Parameters)
    {
        $this->Parameters = $Parameters;
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
        if (null !== $this->Account) return $this->Account;
        if (null !== $this->ActivityDefinition) return $this->ActivityDefinition;
        if (null !== $this->AdverseEvent) return $this->AdverseEvent;
        if (null !== $this->AllergyIntolerance) return $this->AllergyIntolerance;
        if (null !== $this->Appointment) return $this->Appointment;
        if (null !== $this->AppointmentResponse) return $this->AppointmentResponse;
        if (null !== $this->AuditEvent) return $this->AuditEvent;
        if (null !== $this->Basic) return $this->Basic;
        if (null !== $this->Binary) return $this->Binary;
        if (null !== $this->BodySite) return $this->BodySite;
        if (null !== $this->Bundle) return $this->Bundle;
        if (null !== $this->CapabilityStatement) return $this->CapabilityStatement;
        if (null !== $this->CarePlan) return $this->CarePlan;
        if (null !== $this->CareTeam) return $this->CareTeam;
        if (null !== $this->ChargeItem) return $this->ChargeItem;
        if (null !== $this->Claim) return $this->Claim;
        if (null !== $this->ClaimResponse) return $this->ClaimResponse;
        if (null !== $this->ClinicalImpression) return $this->ClinicalImpression;
        if (null !== $this->CodeSystem) return $this->CodeSystem;
        if (null !== $this->Communication) return $this->Communication;
        if (null !== $this->CommunicationRequest) return $this->CommunicationRequest;
        if (null !== $this->CompartmentDefinition) return $this->CompartmentDefinition;
        if (null !== $this->Composition) return $this->Composition;
        if (null !== $this->ConceptMap) return $this->ConceptMap;
        if (null !== $this->Condition) return $this->Condition;
        if (null !== $this->Consent) return $this->Consent;
        if (null !== $this->Contract) return $this->Contract;
        if (null !== $this->Coverage) return $this->Coverage;
        if (null !== $this->DataElement) return $this->DataElement;
        if (null !== $this->DetectedIssue) return $this->DetectedIssue;
        if (null !== $this->Device) return $this->Device;
        if (null !== $this->DeviceComponent) return $this->DeviceComponent;
        if (null !== $this->DeviceMetric) return $this->DeviceMetric;
        if (null !== $this->DeviceRequest) return $this->DeviceRequest;
        if (null !== $this->DeviceUseStatement) return $this->DeviceUseStatement;
        if (null !== $this->DiagnosticReport) return $this->DiagnosticReport;
        if (null !== $this->DocumentManifest) return $this->DocumentManifest;
        if (null !== $this->DocumentReference) return $this->DocumentReference;
        if (null !== $this->EligibilityRequest) return $this->EligibilityRequest;
        if (null !== $this->EligibilityResponse) return $this->EligibilityResponse;
        if (null !== $this->Encounter) return $this->Encounter;
        if (null !== $this->Endpoint) return $this->Endpoint;
        if (null !== $this->EnrollmentRequest) return $this->EnrollmentRequest;
        if (null !== $this->EnrollmentResponse) return $this->EnrollmentResponse;
        if (null !== $this->EpisodeOfCare) return $this->EpisodeOfCare;
        if (null !== $this->ExpansionProfile) return $this->ExpansionProfile;
        if (null !== $this->ExplanationOfBenefit) return $this->ExplanationOfBenefit;
        if (null !== $this->FamilyMemberHistory) return $this->FamilyMemberHistory;
        if (null !== $this->Flag) return $this->Flag;
        if (null !== $this->Goal) return $this->Goal;
        if (null !== $this->GraphDefinition) return $this->GraphDefinition;
        if (null !== $this->Group) return $this->Group;
        if (null !== $this->GuidanceResponse) return $this->GuidanceResponse;
        if (null !== $this->HealthcareService) return $this->HealthcareService;
        if (null !== $this->ImagingManifest) return $this->ImagingManifest;
        if (null !== $this->ImagingStudy) return $this->ImagingStudy;
        if (null !== $this->Immunization) return $this->Immunization;
        if (null !== $this->ImmunizationRecommendation) return $this->ImmunizationRecommendation;
        if (null !== $this->ImplementationGuide) return $this->ImplementationGuide;
        if (null !== $this->Library) return $this->Library;
        if (null !== $this->Linkage) return $this->Linkage;
        if (null !== $this->List) return $this->List;
        if (null !== $this->Location) return $this->Location;
        if (null !== $this->Measure) return $this->Measure;
        if (null !== $this->MeasureReport) return $this->MeasureReport;
        if (null !== $this->Media) return $this->Media;
        if (null !== $this->Medication) return $this->Medication;
        if (null !== $this->MedicationAdministration) return $this->MedicationAdministration;
        if (null !== $this->MedicationDispense) return $this->MedicationDispense;
        if (null !== $this->MedicationRequest) return $this->MedicationRequest;
        if (null !== $this->MedicationStatement) return $this->MedicationStatement;
        if (null !== $this->MessageDefinition) return $this->MessageDefinition;
        if (null !== $this->MessageHeader) return $this->MessageHeader;
        if (null !== $this->NamingSystem) return $this->NamingSystem;
        if (null !== $this->NutritionOrder) return $this->NutritionOrder;
        if (null !== $this->Observation) return $this->Observation;
        if (null !== $this->OperationDefinition) return $this->OperationDefinition;
        if (null !== $this->OperationOutcome) return $this->OperationOutcome;
        if (null !== $this->Organization) return $this->Organization;
        if (null !== $this->Patient) return $this->Patient;
        if (null !== $this->PaymentNotice) return $this->PaymentNotice;
        if (null !== $this->PaymentReconciliation) return $this->PaymentReconciliation;
        if (null !== $this->Person) return $this->Person;
        if (null !== $this->PlanDefinition) return $this->PlanDefinition;
        if (null !== $this->Practitioner) return $this->Practitioner;
        if (null !== $this->PractitionerRole) return $this->PractitionerRole;
        if (null !== $this->Procedure) return $this->Procedure;
        if (null !== $this->ProcedureRequest) return $this->ProcedureRequest;
        if (null !== $this->ProcessRequest) return $this->ProcessRequest;
        if (null !== $this->ProcessResponse) return $this->ProcessResponse;
        if (null !== $this->Provenance) return $this->Provenance;
        if (null !== $this->Questionnaire) return $this->Questionnaire;
        if (null !== $this->QuestionnaireResponse) return $this->QuestionnaireResponse;
        if (null !== $this->ReferralRequest) return $this->ReferralRequest;
        if (null !== $this->RelatedPerson) return $this->RelatedPerson;
        if (null !== $this->RequestGroup) return $this->RequestGroup;
        if (null !== $this->ResearchStudy) return $this->ResearchStudy;
        if (null !== $this->ResearchSubject) return $this->ResearchSubject;
        if (null !== $this->RiskAssessment) return $this->RiskAssessment;
        if (null !== $this->Schedule) return $this->Schedule;
        if (null !== $this->SearchParameter) return $this->SearchParameter;
        if (null !== $this->Sequence) return $this->Sequence;
        if (null !== $this->ServiceDefinition) return $this->ServiceDefinition;
        if (null !== $this->Slot) return $this->Slot;
        if (null !== $this->Specimen) return $this->Specimen;
        if (null !== $this->StructureDefinition) return $this->StructureDefinition;
        if (null !== $this->StructureMap) return $this->StructureMap;
        if (null !== $this->Subscription) return $this->Subscription;
        if (null !== $this->Substance) return $this->Substance;
        if (null !== $this->SupplyDelivery) return $this->SupplyDelivery;
        if (null !== $this->SupplyRequest) return $this->SupplyRequest;
        if (null !== $this->Task) return $this->Task;
        if (null !== $this->TestReport) return $this->TestReport;
        if (null !== $this->TestScript) return $this->TestScript;
        if (null !== $this->ValueSet) return $this->ValueSet;
        if (null !== $this->VisionPrescription) return $this->VisionPrescription;
        if (null !== $this->Parameters) return $this->Parameters;
        return [];
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ResourceContainer xmlns="http://hl7.org/fhir"></ResourceContainer>');
        if (null !== $this->Account) $this->Account->xmlSerialize(true, $sxe->addChild('Account'));
        else if (null !== $this->ActivityDefinition) $this->ActivityDefinition->xmlSerialize(true, $sxe->addChild('ActivityDefinition'));
        else if (null !== $this->AdverseEvent) $this->AdverseEvent->xmlSerialize(true, $sxe->addChild('AdverseEvent'));
        else if (null !== $this->AllergyIntolerance) $this->AllergyIntolerance->xmlSerialize(true, $sxe->addChild('AllergyIntolerance'));
        else if (null !== $this->Appointment) $this->Appointment->xmlSerialize(true, $sxe->addChild('Appointment'));
        else if (null !== $this->AppointmentResponse) $this->AppointmentResponse->xmlSerialize(true, $sxe->addChild('AppointmentResponse'));
        else if (null !== $this->AuditEvent) $this->AuditEvent->xmlSerialize(true, $sxe->addChild('AuditEvent'));
        else if (null !== $this->Basic) $this->Basic->xmlSerialize(true, $sxe->addChild('Basic'));
        else if (null !== $this->Binary) $this->Binary->xmlSerialize(true, $sxe->addChild('Binary'));
        else if (null !== $this->BodySite) $this->BodySite->xmlSerialize(true, $sxe->addChild('BodySite'));
        else if (null !== $this->Bundle) $this->Bundle->xmlSerialize(true, $sxe->addChild('Bundle'));
        else if (null !== $this->CapabilityStatement) $this->CapabilityStatement->xmlSerialize(true, $sxe->addChild('CapabilityStatement'));
        else if (null !== $this->CarePlan) $this->CarePlan->xmlSerialize(true, $sxe->addChild('CarePlan'));
        else if (null !== $this->CareTeam) $this->CareTeam->xmlSerialize(true, $sxe->addChild('CareTeam'));
        else if (null !== $this->ChargeItem) $this->ChargeItem->xmlSerialize(true, $sxe->addChild('ChargeItem'));
        else if (null !== $this->Claim) $this->Claim->xmlSerialize(true, $sxe->addChild('Claim'));
        else if (null !== $this->ClaimResponse) $this->ClaimResponse->xmlSerialize(true, $sxe->addChild('ClaimResponse'));
        else if (null !== $this->ClinicalImpression) $this->ClinicalImpression->xmlSerialize(true, $sxe->addChild('ClinicalImpression'));
        else if (null !== $this->CodeSystem) $this->CodeSystem->xmlSerialize(true, $sxe->addChild('CodeSystem'));
        else if (null !== $this->Communication) $this->Communication->xmlSerialize(true, $sxe->addChild('Communication'));
        else if (null !== $this->CommunicationRequest) $this->CommunicationRequest->xmlSerialize(true, $sxe->addChild('CommunicationRequest'));
        else if (null !== $this->CompartmentDefinition) $this->CompartmentDefinition->xmlSerialize(true, $sxe->addChild('CompartmentDefinition'));
        else if (null !== $this->Composition) $this->Composition->xmlSerialize(true, $sxe->addChild('Composition'));
        else if (null !== $this->ConceptMap) $this->ConceptMap->xmlSerialize(true, $sxe->addChild('ConceptMap'));
        else if (null !== $this->Condition) $this->Condition->xmlSerialize(true, $sxe->addChild('Condition'));
        else if (null !== $this->Consent) $this->Consent->xmlSerialize(true, $sxe->addChild('Consent'));
        else if (null !== $this->Contract) $this->Contract->xmlSerialize(true, $sxe->addChild('Contract'));
        else if (null !== $this->Coverage) $this->Coverage->xmlSerialize(true, $sxe->addChild('Coverage'));
        else if (null !== $this->DataElement) $this->DataElement->xmlSerialize(true, $sxe->addChild('DataElement'));
        else if (null !== $this->DetectedIssue) $this->DetectedIssue->xmlSerialize(true, $sxe->addChild('DetectedIssue'));
        else if (null !== $this->Device) $this->Device->xmlSerialize(true, $sxe->addChild('Device'));
        else if (null !== $this->DeviceComponent) $this->DeviceComponent->xmlSerialize(true, $sxe->addChild('DeviceComponent'));
        else if (null !== $this->DeviceMetric) $this->DeviceMetric->xmlSerialize(true, $sxe->addChild('DeviceMetric'));
        else if (null !== $this->DeviceRequest) $this->DeviceRequest->xmlSerialize(true, $sxe->addChild('DeviceRequest'));
        else if (null !== $this->DeviceUseStatement) $this->DeviceUseStatement->xmlSerialize(true, $sxe->addChild('DeviceUseStatement'));
        else if (null !== $this->DiagnosticReport) $this->DiagnosticReport->xmlSerialize(true, $sxe->addChild('DiagnosticReport'));
        else if (null !== $this->DocumentManifest) $this->DocumentManifest->xmlSerialize(true, $sxe->addChild('DocumentManifest'));
        else if (null !== $this->DocumentReference) $this->DocumentReference->xmlSerialize(true, $sxe->addChild('DocumentReference'));
        else if (null !== $this->EligibilityRequest) $this->EligibilityRequest->xmlSerialize(true, $sxe->addChild('EligibilityRequest'));
        else if (null !== $this->EligibilityResponse) $this->EligibilityResponse->xmlSerialize(true, $sxe->addChild('EligibilityResponse'));
        else if (null !== $this->Encounter) $this->Encounter->xmlSerialize(true, $sxe->addChild('Encounter'));
        else if (null !== $this->Endpoint) $this->Endpoint->xmlSerialize(true, $sxe->addChild('Endpoint'));
        else if (null !== $this->EnrollmentRequest) $this->EnrollmentRequest->xmlSerialize(true, $sxe->addChild('EnrollmentRequest'));
        else if (null !== $this->EnrollmentResponse) $this->EnrollmentResponse->xmlSerialize(true, $sxe->addChild('EnrollmentResponse'));
        else if (null !== $this->EpisodeOfCare) $this->EpisodeOfCare->xmlSerialize(true, $sxe->addChild('EpisodeOfCare'));
        else if (null !== $this->ExpansionProfile) $this->ExpansionProfile->xmlSerialize(true, $sxe->addChild('ExpansionProfile'));
        else if (null !== $this->ExplanationOfBenefit) $this->ExplanationOfBenefit->xmlSerialize(true, $sxe->addChild('ExplanationOfBenefit'));
        else if (null !== $this->FamilyMemberHistory) $this->FamilyMemberHistory->xmlSerialize(true, $sxe->addChild('FamilyMemberHistory'));
        else if (null !== $this->Flag) $this->Flag->xmlSerialize(true, $sxe->addChild('Flag'));
        else if (null !== $this->Goal) $this->Goal->xmlSerialize(true, $sxe->addChild('Goal'));
        else if (null !== $this->GraphDefinition) $this->GraphDefinition->xmlSerialize(true, $sxe->addChild('GraphDefinition'));
        else if (null !== $this->Group) $this->Group->xmlSerialize(true, $sxe->addChild('Group'));
        else if (null !== $this->GuidanceResponse) $this->GuidanceResponse->xmlSerialize(true, $sxe->addChild('GuidanceResponse'));
        else if (null !== $this->HealthcareService) $this->HealthcareService->xmlSerialize(true, $sxe->addChild('HealthcareService'));
        else if (null !== $this->ImagingManifest) $this->ImagingManifest->xmlSerialize(true, $sxe->addChild('ImagingManifest'));
        else if (null !== $this->ImagingStudy) $this->ImagingStudy->xmlSerialize(true, $sxe->addChild('ImagingStudy'));
        else if (null !== $this->Immunization) $this->Immunization->xmlSerialize(true, $sxe->addChild('Immunization'));
        else if (null !== $this->ImmunizationRecommendation) $this->ImmunizationRecommendation->xmlSerialize(true, $sxe->addChild('ImmunizationRecommendation'));
        else if (null !== $this->ImplementationGuide) $this->ImplementationGuide->xmlSerialize(true, $sxe->addChild('ImplementationGuide'));
        else if (null !== $this->Library) $this->Library->xmlSerialize(true, $sxe->addChild('Library'));
        else if (null !== $this->Linkage) $this->Linkage->xmlSerialize(true, $sxe->addChild('Linkage'));
        else if (null !== $this->List) $this->List->xmlSerialize(true, $sxe->addChild('List'));
        else if (null !== $this->Location) $this->Location->xmlSerialize(true, $sxe->addChild('Location'));
        else if (null !== $this->Measure) $this->Measure->xmlSerialize(true, $sxe->addChild('Measure'));
        else if (null !== $this->MeasureReport) $this->MeasureReport->xmlSerialize(true, $sxe->addChild('MeasureReport'));
        else if (null !== $this->Media) $this->Media->xmlSerialize(true, $sxe->addChild('Media'));
        else if (null !== $this->Medication) $this->Medication->xmlSerialize(true, $sxe->addChild('Medication'));
        else if (null !== $this->MedicationAdministration) $this->MedicationAdministration->xmlSerialize(true, $sxe->addChild('MedicationAdministration'));
        else if (null !== $this->MedicationDispense) $this->MedicationDispense->xmlSerialize(true, $sxe->addChild('MedicationDispense'));
        else if (null !== $this->MedicationRequest) $this->MedicationRequest->xmlSerialize(true, $sxe->addChild('MedicationRequest'));
        else if (null !== $this->MedicationStatement) $this->MedicationStatement->xmlSerialize(true, $sxe->addChild('MedicationStatement'));
        else if (null !== $this->MessageDefinition) $this->MessageDefinition->xmlSerialize(true, $sxe->addChild('MessageDefinition'));
        else if (null !== $this->MessageHeader) $this->MessageHeader->xmlSerialize(true, $sxe->addChild('MessageHeader'));
        else if (null !== $this->NamingSystem) $this->NamingSystem->xmlSerialize(true, $sxe->addChild('NamingSystem'));
        else if (null !== $this->NutritionOrder) $this->NutritionOrder->xmlSerialize(true, $sxe->addChild('NutritionOrder'));
        else if (null !== $this->Observation) $this->Observation->xmlSerialize(true, $sxe->addChild('Observation'));
        else if (null !== $this->OperationDefinition) $this->OperationDefinition->xmlSerialize(true, $sxe->addChild('OperationDefinition'));
        else if (null !== $this->OperationOutcome) $this->OperationOutcome->xmlSerialize(true, $sxe->addChild('OperationOutcome'));
        else if (null !== $this->Organization) $this->Organization->xmlSerialize(true, $sxe->addChild('Organization'));
        else if (null !== $this->Patient) $this->Patient->xmlSerialize(true, $sxe->addChild('Patient'));
        else if (null !== $this->PaymentNotice) $this->PaymentNotice->xmlSerialize(true, $sxe->addChild('PaymentNotice'));
        else if (null !== $this->PaymentReconciliation) $this->PaymentReconciliation->xmlSerialize(true, $sxe->addChild('PaymentReconciliation'));
        else if (null !== $this->Person) $this->Person->xmlSerialize(true, $sxe->addChild('Person'));
        else if (null !== $this->PlanDefinition) $this->PlanDefinition->xmlSerialize(true, $sxe->addChild('PlanDefinition'));
        else if (null !== $this->Practitioner) $this->Practitioner->xmlSerialize(true, $sxe->addChild('Practitioner'));
        else if (null !== $this->PractitionerRole) $this->PractitionerRole->xmlSerialize(true, $sxe->addChild('PractitionerRole'));
        else if (null !== $this->Procedure) $this->Procedure->xmlSerialize(true, $sxe->addChild('Procedure'));
        else if (null !== $this->ProcedureRequest) $this->ProcedureRequest->xmlSerialize(true, $sxe->addChild('ProcedureRequest'));
        else if (null !== $this->ProcessRequest) $this->ProcessRequest->xmlSerialize(true, $sxe->addChild('ProcessRequest'));
        else if (null !== $this->ProcessResponse) $this->ProcessResponse->xmlSerialize(true, $sxe->addChild('ProcessResponse'));
        else if (null !== $this->Provenance) $this->Provenance->xmlSerialize(true, $sxe->addChild('Provenance'));
        else if (null !== $this->Questionnaire) $this->Questionnaire->xmlSerialize(true, $sxe->addChild('Questionnaire'));
        else if (null !== $this->QuestionnaireResponse) $this->QuestionnaireResponse->xmlSerialize(true, $sxe->addChild('QuestionnaireResponse'));
        else if (null !== $this->ReferralRequest) $this->ReferralRequest->xmlSerialize(true, $sxe->addChild('ReferralRequest'));
        else if (null !== $this->RelatedPerson) $this->RelatedPerson->xmlSerialize(true, $sxe->addChild('RelatedPerson'));
        else if (null !== $this->RequestGroup) $this->RequestGroup->xmlSerialize(true, $sxe->addChild('RequestGroup'));
        else if (null !== $this->ResearchStudy) $this->ResearchStudy->xmlSerialize(true, $sxe->addChild('ResearchStudy'));
        else if (null !== $this->ResearchSubject) $this->ResearchSubject->xmlSerialize(true, $sxe->addChild('ResearchSubject'));
        else if (null !== $this->RiskAssessment) $this->RiskAssessment->xmlSerialize(true, $sxe->addChild('RiskAssessment'));
        else if (null !== $this->Schedule) $this->Schedule->xmlSerialize(true, $sxe->addChild('Schedule'));
        else if (null !== $this->SearchParameter) $this->SearchParameter->xmlSerialize(true, $sxe->addChild('SearchParameter'));
        else if (null !== $this->Sequence) $this->Sequence->xmlSerialize(true, $sxe->addChild('Sequence'));
        else if (null !== $this->ServiceDefinition) $this->ServiceDefinition->xmlSerialize(true, $sxe->addChild('ServiceDefinition'));
        else if (null !== $this->Slot) $this->Slot->xmlSerialize(true, $sxe->addChild('Slot'));
        else if (null !== $this->Specimen) $this->Specimen->xmlSerialize(true, $sxe->addChild('Specimen'));
        else if (null !== $this->StructureDefinition) $this->StructureDefinition->xmlSerialize(true, $sxe->addChild('StructureDefinition'));
        else if (null !== $this->StructureMap) $this->StructureMap->xmlSerialize(true, $sxe->addChild('StructureMap'));
        else if (null !== $this->Subscription) $this->Subscription->xmlSerialize(true, $sxe->addChild('Subscription'));
        else if (null !== $this->Substance) $this->Substance->xmlSerialize(true, $sxe->addChild('Substance'));
        else if (null !== $this->SupplyDelivery) $this->SupplyDelivery->xmlSerialize(true, $sxe->addChild('SupplyDelivery'));
        else if (null !== $this->SupplyRequest) $this->SupplyRequest->xmlSerialize(true, $sxe->addChild('SupplyRequest'));
        else if (null !== $this->Task) $this->Task->xmlSerialize(true, $sxe->addChild('Task'));
        else if (null !== $this->TestReport) $this->TestReport->xmlSerialize(true, $sxe->addChild('TestReport'));
        else if (null !== $this->TestScript) $this->TestScript->xmlSerialize(true, $sxe->addChild('TestScript'));
        else if (null !== $this->ValueSet) $this->ValueSet->xmlSerialize(true, $sxe->addChild('ValueSet'));
        else if (null !== $this->VisionPrescription) $this->VisionPrescription->xmlSerialize(true, $sxe->addChild('VisionPrescription'));
        else if (null !== $this->Parameters) $this->Parameters->xmlSerialize(true, $sxe->addChild('Parameters'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}