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
 * A process where a researcher or organization plans and then executes a series of steps intended to increase the field of healthcare-related knowledge.  This includes studies of safety, efficacy, comparative effectiveness and other information about medications, devices, therapies and other interventional and investigative techniques.  A ResearchStudy involves the gathering of information about human or animal subjects.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRResearchStudy extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifiers assigned to this research study by the sponsor or other systems.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * A short, descriptive user-friendly label for the study.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * The set of steps expected to be performed as part of the execution of the study.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $protocol = array();

    /**
     * A larger research study of which this particular study is a component or step.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $partOf = array();

    /**
     * The current state of the study.
     * @var \Fhir\V_400\FHIRElement\FHIRResearchStudyStatus
     */
    public $status = null;

    /**
     * The type of study based upon the intent of the study's activities. A classification of the intent of the study.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $primaryPurposeType = null;

    /**
     * The stage in the progression of a therapy from initial experimental use in humans in clinical trials to post-market evaluation.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $phase = null;

    /**
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = array();

    /**
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $focus = array();

    /**
     * The condition that is the focus of the study.  For example, In a study to examine risk factors for Lupus, might have as an inclusion criterion "healthy volunteer", but the target condition code would be a Lupus SNOMED code.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $condition = array();

    /**
     * Contact details to assist a user in learning more about or engaging with the study.
     * @var \Fhir\V_400\FHIRElement\FHIRContactDetail[]
     */
    public $contact = array();

    /**
     * Citations, references and other related documents.
     * @var \Fhir\V_400\FHIRElement\FHIRRelatedArtifact[]
     */
    public $relatedArtifact = array();

    /**
     * Key terms to aid in searching for or filtering the study.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $keyword = array();

    /**
     * Indicates a country, state or other region where the study is taking place.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $location = array();

    /**
     * A full description of how the study is being conducted.
     * @var \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study.  E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $enrollment = array();

    /**
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * An organization that initiates the investigation and is legally responsible for the study.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $sponsor = null;

    /**
     * A researcher in a study who oversees multiple aspects of the study, such as concept development, protocol writing, protocol submission for IRB approval, participant recruitment, informed consent, data collection, analysis, interpretation and presentation.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $principalInvestigator = null;

    /**
     * A facility in which study activities are conducted.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $site = array();

    /**
     * A description and/or code explaining the premature termination of the study.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $reasonStopped = null;

    /**
     * Comments made about the study by the performer, subject or other participants.
     * @var \Fhir\V_400\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Describes an expected sequence of events for one of the participants of a study.  E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     * @var \Fhir\V_400\FHIRResource\FHIRResearchStudy\FHIRResearchStudyArm[]
     */
    public $arm = array();

    /**
     * A goal that the study is aiming to achieve in terms of a scientific question to be answered by the analysis of data collected during the study.
     * @var \Fhir\V_400\FHIRResource\FHIRResearchStudy\FHIRResearchStudyObjective[]
     */
    public $objective = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ResearchStudy';

    /**
     * Identifiers assigned to this research study by the sponsor or other systems.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifiers assigned to this research study by the sponsor or other systems.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A short, descriptive user-friendly label for the study.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A short, descriptive user-friendly label for the study.
     * @param \Fhir\V_400\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * The set of steps expected to be performed as part of the execution of the study.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * The set of steps expected to be performed as part of the execution of the study.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $protocol
     * @return $this
     */
    public function addProtocol($protocol)
    {
        $this->protocol[] = $protocol;
        return $this;
    }

    /**
     * A larger research study of which this particular study is a component or step.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * A larger research study of which this particular study is a component or step.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function addPartOf($partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * The current state of the study.
     * @return \Fhir\V_400\FHIRElement\FHIRResearchStudyStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The current state of the study.
     * @param \Fhir\V_400\FHIRElement\FHIRResearchStudyStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The type of study based upon the intent of the study's activities. A classification of the intent of the study.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getPrimaryPurposeType()
    {
        return $this->primaryPurposeType;
    }

    /**
     * The type of study based upon the intent of the study's activities. A classification of the intent of the study.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $primaryPurposeType
     * @return $this
     */
    public function setPrimaryPurposeType($primaryPurposeType)
    {
        $this->primaryPurposeType = $primaryPurposeType;
        return $this;
    }

    /**
     * The stage in the progression of a therapy from initial experimental use in humans in clinical trials to post-market evaluation.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * The stage in the progression of a therapy from initial experimental use in humans in clinical trials to post-market evaluation.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $phase
     * @return $this
     */
    public function setPhase($phase)
    {
        $this->phase = $phase;
        return $this;
    }

    /**
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $focus
     * @return $this
     */
    public function addFocus($focus)
    {
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * The condition that is the focus of the study.  For example, In a study to examine risk factors for Lupus, might have as an inclusion criterion "healthy volunteer", but the target condition code would be a Lupus SNOMED code.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * The condition that is the focus of the study.  For example, In a study to examine risk factors for Lupus, might have as an inclusion criterion "healthy volunteer", but the target condition code would be a Lupus SNOMED code.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $condition
     * @return $this
     */
    public function addCondition($condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * Contact details to assist a user in learning more about or engaging with the study.
     * @return \Fhir\V_400\FHIRElement\FHIRContactDetail[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contact details to assist a user in learning more about or engaging with the study.
     * @param \Fhir\V_400\FHIRElement\FHIRContactDetail $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Citations, references and other related documents.
     * @return \Fhir\V_400\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getRelatedArtifact()
    {
        return $this->relatedArtifact;
    }

    /**
     * Citations, references and other related documents.
     * @param \Fhir\V_400\FHIRElement\FHIRRelatedArtifact $relatedArtifact
     * @return $this
     */
    public function addRelatedArtifact($relatedArtifact)
    {
        $this->relatedArtifact[] = $relatedArtifact;
        return $this;
    }

    /**
     * Key terms to aid in searching for or filtering the study.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Key terms to aid in searching for or filtering the study.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $keyword
     * @return $this
     */
    public function addKeyword($keyword)
    {
        $this->keyword[] = $keyword;
        return $this;
    }

    /**
     * Indicates a country, state or other region where the study is taking place.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Indicates a country, state or other region where the study is taking place.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $location
     * @return $this
     */
    public function addLocation($location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * A full description of how the study is being conducted.
     * @return \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A full description of how the study is being conducted.
     * @param \Fhir\V_400\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study.  E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getEnrollment()
    {
        return $this->enrollment;
    }

    /**
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study.  E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     * @param \Fhir\V_400\FHIRElement\FHIRReference $enrollment
     * @return $this
     */
    public function addEnrollment($enrollment)
    {
        $this->enrollment[] = $enrollment;
        return $this;
    }

    /**
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * An organization that initiates the investigation and is legally responsible for the study.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * An organization that initiates the investigation and is legally responsible for the study.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $sponsor
     * @return $this
     */
    public function setSponsor($sponsor)
    {
        $this->sponsor = $sponsor;
        return $this;
    }

    /**
     * A researcher in a study who oversees multiple aspects of the study, such as concept development, protocol writing, protocol submission for IRB approval, participant recruitment, informed consent, data collection, analysis, interpretation and presentation.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getPrincipalInvestigator()
    {
        return $this->principalInvestigator;
    }

    /**
     * A researcher in a study who oversees multiple aspects of the study, such as concept development, protocol writing, protocol submission for IRB approval, participant recruitment, informed consent, data collection, analysis, interpretation and presentation.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $principalInvestigator
     * @return $this
     */
    public function setPrincipalInvestigator($principalInvestigator)
    {
        $this->principalInvestigator = $principalInvestigator;
        return $this;
    }

    /**
     * A facility in which study activities are conducted.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * A facility in which study activities are conducted.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $site
     * @return $this
     */
    public function addSite($site)
    {
        $this->site[] = $site;
        return $this;
    }

    /**
     * A description and/or code explaining the premature termination of the study.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonStopped()
    {
        return $this->reasonStopped;
    }

    /**
     * A description and/or code explaining the premature termination of the study.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $reasonStopped
     * @return $this
     */
    public function setReasonStopped($reasonStopped)
    {
        $this->reasonStopped = $reasonStopped;
        return $this;
    }

    /**
     * Comments made about the study by the performer, subject or other participants.
     * @return \Fhir\V_400\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Comments made about the study by the performer, subject or other participants.
     * @param \Fhir\V_400\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Describes an expected sequence of events for one of the participants of a study.  E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     * @return \Fhir\V_400\FHIRResource\FHIRResearchStudy\FHIRResearchStudyArm[]
     */
    public function getArm()
    {
        return $this->arm;
    }

    /**
     * Describes an expected sequence of events for one of the participants of a study.  E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     * @param \Fhir\V_400\FHIRResource\FHIRResearchStudy\FHIRResearchStudyArm $arm
     * @return $this
     */
    public function addArm($arm)
    {
        $this->arm[] = $arm;
        return $this;
    }

    /**
     * A goal that the study is aiming to achieve in terms of a scientific question to be answered by the analysis of data collected during the study.
     * @return \Fhir\V_400\FHIRResource\FHIRResearchStudy\FHIRResearchStudyObjective[]
     */
    public function getObjective()
    {
        return $this->objective;
    }

    /**
     * A goal that the study is aiming to achieve in terms of a scientific question to be answered by the analysis of data collected during the study.
     * @param \Fhir\V_400\FHIRResource\FHIRResearchStudy\FHIRResearchStudyObjective $objective
     * @return $this
     */
    public function addObjective($objective)
    {
        $this->objective[] = $objective;
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
        if (null !== $this->title) $json['title'] = $this->title;
        if (0 < count($this->protocol)) {
            $json['protocol'] = [];
            foreach($this->protocol as $protocol) {
                $json['protocol'][] = $protocol;
            }
        }
        if (0 < count($this->partOf)) {
            $json['partOf'] = [];
            foreach($this->partOf as $partOf) {
                $json['partOf'][] = $partOf;
            }
        }
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->primaryPurposeType) $json['primaryPurposeType'] = $this->primaryPurposeType;
        if (null !== $this->phase) $json['phase'] = $this->phase;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                $json['category'][] = $category;
            }
        }
        if (0 < count($this->focus)) {
            $json['focus'] = [];
            foreach($this->focus as $focus) {
                $json['focus'][] = $focus;
            }
        }
        if (0 < count($this->condition)) {
            $json['condition'] = [];
            foreach($this->condition as $condition) {
                $json['condition'][] = $condition;
            }
        }
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                $json['contact'][] = $contact;
            }
        }
        if (0 < count($this->relatedArtifact)) {
            $json['relatedArtifact'] = [];
            foreach($this->relatedArtifact as $relatedArtifact) {
                $json['relatedArtifact'][] = $relatedArtifact;
            }
        }
        if (0 < count($this->keyword)) {
            $json['keyword'] = [];
            foreach($this->keyword as $keyword) {
                $json['keyword'][] = $keyword;
            }
        }
        if (0 < count($this->location)) {
            $json['location'] = [];
            foreach($this->location as $location) {
                $json['location'][] = $location;
            }
        }
        if (null !== $this->description) $json['description'] = $this->description;
        if (0 < count($this->enrollment)) {
            $json['enrollment'] = [];
            foreach($this->enrollment as $enrollment) {
                $json['enrollment'][] = $enrollment;
            }
        }
        if (null !== $this->period) $json['period'] = $this->period;
        if (null !== $this->sponsor) $json['sponsor'] = $this->sponsor;
        if (null !== $this->principalInvestigator) $json['principalInvestigator'] = $this->principalInvestigator;
        if (0 < count($this->site)) {
            $json['site'] = [];
            foreach($this->site as $site) {
                $json['site'][] = $site;
            }
        }
        if (null !== $this->reasonStopped) $json['reasonStopped'] = $this->reasonStopped;
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = $note;
            }
        }
        if (0 < count($this->arm)) {
            $json['arm'] = [];
            foreach($this->arm as $arm) {
                $json['arm'][] = $arm;
            }
        }
        if (0 < count($this->objective)) {
            $json['objective'] = [];
            foreach($this->objective as $objective) {
                $json['objective'][] = $objective;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ResearchStudy xmlns="http://hl7.org/fhir"></ResearchStudy>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (0 < count($this->protocol)) {
            foreach($this->protocol as $protocol) {
                $protocol->xmlSerialize(true, $sxe->addChild('protocol'));
            }
        }
        if (0 < count($this->partOf)) {
            foreach($this->partOf as $partOf) {
                $partOf->xmlSerialize(true, $sxe->addChild('partOf'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->primaryPurposeType) $this->primaryPurposeType->xmlSerialize(true, $sxe->addChild('primaryPurposeType'));
        if (null !== $this->phase) $this->phase->xmlSerialize(true, $sxe->addChild('phase'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (0 < count($this->focus)) {
            foreach($this->focus as $focus) {
                $focus->xmlSerialize(true, $sxe->addChild('focus'));
            }
        }
        if (0 < count($this->condition)) {
            foreach($this->condition as $condition) {
                $condition->xmlSerialize(true, $sxe->addChild('condition'));
            }
        }
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (0 < count($this->relatedArtifact)) {
            foreach($this->relatedArtifact as $relatedArtifact) {
                $relatedArtifact->xmlSerialize(true, $sxe->addChild('relatedArtifact'));
            }
        }
        if (0 < count($this->keyword)) {
            foreach($this->keyword as $keyword) {
                $keyword->xmlSerialize(true, $sxe->addChild('keyword'));
            }
        }
        if (0 < count($this->location)) {
            foreach($this->location as $location) {
                $location->xmlSerialize(true, $sxe->addChild('location'));
            }
        }
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->enrollment)) {
            foreach($this->enrollment as $enrollment) {
                $enrollment->xmlSerialize(true, $sxe->addChild('enrollment'));
            }
        }
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (null !== $this->sponsor) $this->sponsor->xmlSerialize(true, $sxe->addChild('sponsor'));
        if (null !== $this->principalInvestigator) $this->principalInvestigator->xmlSerialize(true, $sxe->addChild('principalInvestigator'));
        if (0 < count($this->site)) {
            foreach($this->site as $site) {
                $site->xmlSerialize(true, $sxe->addChild('site'));
            }
        }
        if (null !== $this->reasonStopped) $this->reasonStopped->xmlSerialize(true, $sxe->addChild('reasonStopped'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->arm)) {
            foreach($this->arm as $arm) {
                $arm->xmlSerialize(true, $sxe->addChild('arm'));
            }
        }
        if (0 < count($this->objective)) {
            foreach($this->objective as $objective) {
                $objective->xmlSerialize(true, $sxe->addChild('objective'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}