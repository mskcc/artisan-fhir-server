<?php namespace Fhir\V_400\FHIRResource\FHIRPlanDefinition;

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

use Fhir\V_400\FHIRElement\FHIRBackboneElement;

/**
 * This resource allows for the definition of various types of plans as a sharable, consumable, and executable artifact. The resource is general enough to support the description of a broad range of clinical artifacts such as clinical decision support rules, order sets and protocols.
 */
class FHIRPlanDefinitionAction extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A user-visible prefix for the action.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $prefix = null;

    /**
     * The title of the action displayed to a user.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * A brief description of the action used to provide a summary to display to the user.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that might not be capable of interpreting it dynamically.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $textEquivalent = null;

    /**
     * Indicates how quickly the action should be addressed with respect to other actions.
     * @var \Fhir\V_400\FHIRElement\FHIRRequestPriority
     */
    public $priority = null;

    /**
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for the section of a documentation template.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $code = array();

    /**
     * A description of why this action is necessary or appropriate.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $reason = array();

    /**
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     * @var \Fhir\V_400\FHIRElement\FHIRRelatedArtifact[]
     */
    public $documentation = array();

    /**
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     * @var \Fhir\V_400\FHIRElement\FHIRId[]
     */
    public $goalId = array();

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $subjectCodeableConcept = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $subjectReference = null;

    /**
     * A description of when the action should be triggered.
     * @var \Fhir\V_400\FHIRElement\FHIRTriggerDefinition[]
     */
    public $trigger = array();

    /**
     * An expression that describes applicability criteria or start/stop conditions for the action.
     * @var \Fhir\V_400\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionCondition[]
     */
    public $condition = array();

    /**
     * Defines input data requirements for the action.
     * @var \Fhir\V_400\FHIRElement\FHIRDataRequirement[]
     */
    public $input = array();

    /**
     * Defines the outputs of the action, if any.
     * @var \Fhir\V_400\FHIRElement\FHIRDataRequirement[]
     */
    public $output = array();

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     * @var \Fhir\V_400\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[]
     */
    public $relatedAction = array();

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $timingDateTime = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $timingAge = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $timingPeriod = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $timingDuration = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRRange
     */
    public $timingRange = null;

    /**
     * @var \Fhir\V_400\FHIRResource\FHIRTiming
     */
    public $timingTiming = null;

    /**
     * Indicates who should participate in performing the action described.
     * @var \Fhir\V_400\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[]
     */
    public $participant = array();

    /**
     * The type of action to perform (create, update, remove).
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Defines the grouping behavior for the action and its children.
     * @var \Fhir\V_400\FHIRElement\FHIRActionGroupingBehavior
     */
    public $groupingBehavior = null;

    /**
     * Defines the selection behavior for the action and its children.
     * @var \Fhir\V_400\FHIRElement\FHIRActionSelectionBehavior
     */
    public $selectionBehavior = null;

    /**
     * Defines the required behavior for the action.
     * @var \Fhir\V_400\FHIRElement\FHIRActionRequiredBehavior
     */
    public $requiredBehavior = null;

    /**
     * Defines whether the action should usually be preselected.
     * @var \Fhir\V_400\FHIRElement\FHIRActionPrecheckBehavior
     */
    public $precheckBehavior = null;

    /**
     * Defines whether the action can be selected multiple times.
     * @var \Fhir\V_400\FHIRElement\FHIRActionCardinalityBehavior
     */
    public $cardinalityBehavior = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCanonical
     */
    public $definitionCanonical = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRUri
     */
    public $definitionUri = null;

    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     * @var \Fhir\V_400\FHIRElement\FHIRCanonical
     */
    public $transform = null;

    /**
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     * @var \Fhir\V_400\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[]
     */
    public $dynamicValue = array();

    /**
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     * @var \Fhir\V_400\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionAction[]
     */
    public $action = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'PlanDefinition.Action';

    /**
     * A user-visible prefix for the action.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * A user-visible prefix for the action.
     * @param \Fhir\V_400\FHIRElement\FHIRString $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * The title of the action displayed to a user.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * The title of the action displayed to a user.
     * @param \Fhir\V_400\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * A brief description of the action used to provide a summary to display to the user.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A brief description of the action used to provide a summary to display to the user.
     * @param \Fhir\V_400\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that might not be capable of interpreting it dynamically.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getTextEquivalent()
    {
        return $this->textEquivalent;
    }

    /**
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that might not be capable of interpreting it dynamically.
     * @param \Fhir\V_400\FHIRElement\FHIRString $textEquivalent
     * @return $this
     */
    public function setTextEquivalent($textEquivalent)
    {
        $this->textEquivalent = $textEquivalent;
        return $this;
    }

    /**
     * Indicates how quickly the action should be addressed with respect to other actions.
     * @return \Fhir\V_400\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Indicates how quickly the action should be addressed with respect to other actions.
     * @param \Fhir\V_400\FHIRElement\FHIRRequestPriority $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for the section of a documentation template.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for the section of a documentation template.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function addCode($code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * A description of why this action is necessary or appropriate.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * A description of why this action is necessary or appropriate.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $reason
     * @return $this
     */
    public function addReason($reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     * @return \Fhir\V_400\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     * @param \Fhir\V_400\FHIRElement\FHIRRelatedArtifact $documentation
     * @return $this
     */
    public function addDocumentation($documentation)
    {
        $this->documentation[] = $documentation;
        return $this;
    }

    /**
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     * @return \Fhir\V_400\FHIRElement\FHIRId[]
     */
    public function getGoalId()
    {
        return $this->goalId;
    }

    /**
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     * @param \Fhir\V_400\FHIRElement\FHIRId $goalId
     * @return $this
     */
    public function addGoalId($goalId)
    {
        $this->goalId[] = $goalId;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getSubjectCodeableConcept()
    {
        return $this->subjectCodeableConcept;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $subjectCodeableConcept
     * @return $this
     */
    public function setSubjectCodeableConcept($subjectCodeableConcept)
    {
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getSubjectReference()
    {
        return $this->subjectReference;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRReference $subjectReference
     * @return $this
     */
    public function setSubjectReference($subjectReference)
    {
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * A description of when the action should be triggered.
     * @return \Fhir\V_400\FHIRElement\FHIRTriggerDefinition[]
     */
    public function getTrigger()
    {
        return $this->trigger;
    }

    /**
     * A description of when the action should be triggered.
     * @param \Fhir\V_400\FHIRElement\FHIRTriggerDefinition $trigger
     * @return $this
     */
    public function addTrigger($trigger)
    {
        $this->trigger[] = $trigger;
        return $this;
    }

    /**
     * An expression that describes applicability criteria or start/stop conditions for the action.
     * @return \Fhir\V_400\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionCondition[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * An expression that describes applicability criteria or start/stop conditions for the action.
     * @param \Fhir\V_400\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionCondition $condition
     * @return $this
     */
    public function addCondition($condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * Defines input data requirements for the action.
     * @return \Fhir\V_400\FHIRElement\FHIRDataRequirement[]
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Defines input data requirements for the action.
     * @param \Fhir\V_400\FHIRElement\FHIRDataRequirement $input
     * @return $this
     */
    public function addInput($input)
    {
        $this->input[] = $input;
        return $this;
    }

    /**
     * Defines the outputs of the action, if any.
     * @return \Fhir\V_400\FHIRElement\FHIRDataRequirement[]
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Defines the outputs of the action, if any.
     * @param \Fhir\V_400\FHIRElement\FHIRDataRequirement $output
     * @return $this
     */
    public function addOutput($output)
    {
        $this->output[] = $output;
        return $this;
    }

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     * @return \Fhir\V_400\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction[]
     */
    public function getRelatedAction()
    {
        return $this->relatedAction;
    }

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     * @param \Fhir\V_400\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction $relatedAction
     * @return $this
     */
    public function addRelatedAction($relatedAction)
    {
        $this->relatedAction[] = $relatedAction;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $timingDateTime
     * @return $this
     */
    public function setTimingDateTime($timingDateTime)
    {
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getTimingAge()
    {
        return $this->timingAge;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRAge $timingAge
     * @return $this
     */
    public function setTimingAge($timingAge)
    {
        $this->timingAge = $timingAge;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $timingPeriod
     * @return $this
     */
    public function setTimingPeriod($timingPeriod)
    {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getTimingDuration()
    {
        return $this->timingDuration;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity\FHIRDuration $timingDuration
     * @return $this
     */
    public function setTimingDuration($timingDuration)
    {
        $this->timingDuration = $timingDuration;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRRange
     */
    public function getTimingRange()
    {
        return $this->timingRange;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRRange $timingRange
     * @return $this
     */
    public function setTimingRange($timingRange)
    {
        $this->timingRange = $timingRange;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRResource\FHIRTiming
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * @param \Fhir\V_400\FHIRResource\FHIRTiming $timingTiming
     * @return $this
     */
    public function setTimingTiming($timingTiming)
    {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * Indicates who should participate in performing the action described.
     * @return \Fhir\V_400\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Indicates who should participate in performing the action described.
     * @param \Fhir\V_400\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionParticipant $participant
     * @return $this
     */
    public function addParticipant($participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * The type of action to perform (create, update, remove).
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of action to perform (create, update, remove).
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Defines the grouping behavior for the action and its children.
     * @return \Fhir\V_400\FHIRElement\FHIRActionGroupingBehavior
     */
    public function getGroupingBehavior()
    {
        return $this->groupingBehavior;
    }

    /**
     * Defines the grouping behavior for the action and its children.
     * @param \Fhir\V_400\FHIRElement\FHIRActionGroupingBehavior $groupingBehavior
     * @return $this
     */
    public function setGroupingBehavior($groupingBehavior)
    {
        $this->groupingBehavior = $groupingBehavior;
        return $this;
    }

    /**
     * Defines the selection behavior for the action and its children.
     * @return \Fhir\V_400\FHIRElement\FHIRActionSelectionBehavior
     */
    public function getSelectionBehavior()
    {
        return $this->selectionBehavior;
    }

    /**
     * Defines the selection behavior for the action and its children.
     * @param \Fhir\V_400\FHIRElement\FHIRActionSelectionBehavior $selectionBehavior
     * @return $this
     */
    public function setSelectionBehavior($selectionBehavior)
    {
        $this->selectionBehavior = $selectionBehavior;
        return $this;
    }

    /**
     * Defines the required behavior for the action.
     * @return \Fhir\V_400\FHIRElement\FHIRActionRequiredBehavior
     */
    public function getRequiredBehavior()
    {
        return $this->requiredBehavior;
    }

    /**
     * Defines the required behavior for the action.
     * @param \Fhir\V_400\FHIRElement\FHIRActionRequiredBehavior $requiredBehavior
     * @return $this
     */
    public function setRequiredBehavior($requiredBehavior)
    {
        $this->requiredBehavior = $requiredBehavior;
        return $this;
    }

    /**
     * Defines whether the action should usually be preselected.
     * @return \Fhir\V_400\FHIRElement\FHIRActionPrecheckBehavior
     */
    public function getPrecheckBehavior()
    {
        return $this->precheckBehavior;
    }

    /**
     * Defines whether the action should usually be preselected.
     * @param \Fhir\V_400\FHIRElement\FHIRActionPrecheckBehavior $precheckBehavior
     * @return $this
     */
    public function setPrecheckBehavior($precheckBehavior)
    {
        $this->precheckBehavior = $precheckBehavior;
        return $this;
    }

    /**
     * Defines whether the action can be selected multiple times.
     * @return \Fhir\V_400\FHIRElement\FHIRActionCardinalityBehavior
     */
    public function getCardinalityBehavior()
    {
        return $this->cardinalityBehavior;
    }

    /**
     * Defines whether the action can be selected multiple times.
     * @param \Fhir\V_400\FHIRElement\FHIRActionCardinalityBehavior $cardinalityBehavior
     * @return $this
     */
    public function setCardinalityBehavior($cardinalityBehavior)
    {
        $this->cardinalityBehavior = $cardinalityBehavior;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCanonical
     */
    public function getDefinitionCanonical()
    {
        return $this->definitionCanonical;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCanonical $definitionCanonical
     * @return $this
     */
    public function setDefinitionCanonical($definitionCanonical)
    {
        $this->definitionCanonical = $definitionCanonical;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRUri
     */
    public function getDefinitionUri()
    {
        return $this->definitionUri;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRUri $definitionUri
     * @return $this
     */
    public function setDefinitionUri($definitionUri)
    {
        $this->definitionUri = $definitionUri;
        return $this;
    }

    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     * @return \Fhir\V_400\FHIRElement\FHIRCanonical
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     * @param \Fhir\V_400\FHIRElement\FHIRCanonical $transform
     * @return $this
     */
    public function setTransform($transform)
    {
        $this->transform = $transform;
        return $this;
    }

    /**
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     * @return \Fhir\V_400\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue[]
     */
    public function getDynamicValue()
    {
        return $this->dynamicValue;
    }

    /**
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     * @param \Fhir\V_400\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue $dynamicValue
     * @return $this
     */
    public function addDynamicValue($dynamicValue)
    {
        $this->dynamicValue[] = $dynamicValue;
        return $this;
    }

    /**
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     * @return \Fhir\V_400\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionAction[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     * @param \Fhir\V_400\FHIRResource\FHIRPlanDefinition\FHIRPlanDefinitionAction $action
     * @return $this
     */
    public function addAction($action)
    {
        $this->action[] = $action;
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
        if (null !== $this->prefix) $json['prefix'] = $this->prefix;
        if (null !== $this->title) $json['title'] = $this->title;
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->textEquivalent) $json['textEquivalent'] = $this->textEquivalent;
        if (null !== $this->priority) $json['priority'] = $this->priority;
        if (0 < count($this->code)) {
            $json['code'] = [];
            foreach($this->code as $code) {
                $json['code'][] = $code;
            }
        }
        if (0 < count($this->reason)) {
            $json['reason'] = [];
            foreach($this->reason as $reason) {
                $json['reason'][] = $reason;
            }
        }
        if (0 < count($this->documentation)) {
            $json['documentation'] = [];
            foreach($this->documentation as $documentation) {
                $json['documentation'][] = $documentation;
            }
        }
        if (0 < count($this->goalId)) {
            $json['goalId'] = [];
            foreach($this->goalId as $goalId) {
                $json['goalId'][] = $goalId;
            }
        }
        if (null !== $this->subjectCodeableConcept) $json['subjectCodeableConcept'] = $this->subjectCodeableConcept;
        if (null !== $this->subjectReference) $json['subjectReference'] = $this->subjectReference;
        if (0 < count($this->trigger)) {
            $json['trigger'] = [];
            foreach($this->trigger as $trigger) {
                $json['trigger'][] = $trigger;
            }
        }
        if (0 < count($this->condition)) {
            $json['condition'] = [];
            foreach($this->condition as $condition) {
                $json['condition'][] = $condition;
            }
        }
        if (0 < count($this->input)) {
            $json['input'] = [];
            foreach($this->input as $input) {
                $json['input'][] = $input;
            }
        }
        if (0 < count($this->output)) {
            $json['output'] = [];
            foreach($this->output as $output) {
                $json['output'][] = $output;
            }
        }
        if (0 < count($this->relatedAction)) {
            $json['relatedAction'] = [];
            foreach($this->relatedAction as $relatedAction) {
                $json['relatedAction'][] = $relatedAction;
            }
        }
        if (null !== $this->timingDateTime) $json['timingDateTime'] = $this->timingDateTime;
        if (null !== $this->timingAge) $json['timingAge'] = $this->timingAge;
        if (null !== $this->timingPeriod) $json['timingPeriod'] = $this->timingPeriod;
        if (null !== $this->timingDuration) $json['timingDuration'] = $this->timingDuration;
        if (null !== $this->timingRange) $json['timingRange'] = $this->timingRange;
        if (null !== $this->timingTiming) $json['timingTiming'] = $this->timingTiming;
        if (0 < count($this->participant)) {
            $json['participant'] = [];
            foreach($this->participant as $participant) {
                $json['participant'][] = $participant;
            }
        }
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->groupingBehavior) $json['groupingBehavior'] = $this->groupingBehavior;
        if (null !== $this->selectionBehavior) $json['selectionBehavior'] = $this->selectionBehavior;
        if (null !== $this->requiredBehavior) $json['requiredBehavior'] = $this->requiredBehavior;
        if (null !== $this->precheckBehavior) $json['precheckBehavior'] = $this->precheckBehavior;
        if (null !== $this->cardinalityBehavior) $json['cardinalityBehavior'] = $this->cardinalityBehavior;
        if (null !== $this->definitionCanonical) $json['definitionCanonical'] = $this->definitionCanonical;
        if (null !== $this->definitionUri) $json['definitionUri'] = $this->definitionUri;
        if (null !== $this->transform) $json['transform'] = $this->transform;
        if (0 < count($this->dynamicValue)) {
            $json['dynamicValue'] = [];
            foreach($this->dynamicValue as $dynamicValue) {
                $json['dynamicValue'][] = $dynamicValue;
            }
        }
        if (0 < count($this->action)) {
            $json['action'] = [];
            foreach($this->action as $action) {
                $json['action'][] = $action;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<PlanDefinitionAction xmlns="http://hl7.org/fhir"></PlanDefinitionAction>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->prefix) $this->prefix->xmlSerialize(true, $sxe->addChild('prefix'));
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->textEquivalent) $this->textEquivalent->xmlSerialize(true, $sxe->addChild('textEquivalent'));
        if (null !== $this->priority) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (0 < count($this->code)) {
            foreach($this->code as $code) {
                $code->xmlSerialize(true, $sxe->addChild('code'));
            }
        }
        if (0 < count($this->reason)) {
            foreach($this->reason as $reason) {
                $reason->xmlSerialize(true, $sxe->addChild('reason'));
            }
        }
        if (0 < count($this->documentation)) {
            foreach($this->documentation as $documentation) {
                $documentation->xmlSerialize(true, $sxe->addChild('documentation'));
            }
        }
        if (0 < count($this->goalId)) {
            foreach($this->goalId as $goalId) {
                $goalId->xmlSerialize(true, $sxe->addChild('goalId'));
            }
        }
        if (null !== $this->subjectCodeableConcept) $this->subjectCodeableConcept->xmlSerialize(true, $sxe->addChild('subjectCodeableConcept'));
        if (null !== $this->subjectReference) $this->subjectReference->xmlSerialize(true, $sxe->addChild('subjectReference'));
        if (0 < count($this->trigger)) {
            foreach($this->trigger as $trigger) {
                $trigger->xmlSerialize(true, $sxe->addChild('trigger'));
            }
        }
        if (0 < count($this->condition)) {
            foreach($this->condition as $condition) {
                $condition->xmlSerialize(true, $sxe->addChild('condition'));
            }
        }
        if (0 < count($this->input)) {
            foreach($this->input as $input) {
                $input->xmlSerialize(true, $sxe->addChild('input'));
            }
        }
        if (0 < count($this->output)) {
            foreach($this->output as $output) {
                $output->xmlSerialize(true, $sxe->addChild('output'));
            }
        }
        if (0 < count($this->relatedAction)) {
            foreach($this->relatedAction as $relatedAction) {
                $relatedAction->xmlSerialize(true, $sxe->addChild('relatedAction'));
            }
        }
        if (null !== $this->timingDateTime) $this->timingDateTime->xmlSerialize(true, $sxe->addChild('timingDateTime'));
        if (null !== $this->timingAge) $this->timingAge->xmlSerialize(true, $sxe->addChild('timingAge'));
        if (null !== $this->timingPeriod) $this->timingPeriod->xmlSerialize(true, $sxe->addChild('timingPeriod'));
        if (null !== $this->timingDuration) $this->timingDuration->xmlSerialize(true, $sxe->addChild('timingDuration'));
        if (null !== $this->timingRange) $this->timingRange->xmlSerialize(true, $sxe->addChild('timingRange'));
        if (null !== $this->timingTiming) $this->timingTiming->xmlSerialize(true, $sxe->addChild('timingTiming'));
        if (0 < count($this->participant)) {
            foreach($this->participant as $participant) {
                $participant->xmlSerialize(true, $sxe->addChild('participant'));
            }
        }
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->groupingBehavior) $this->groupingBehavior->xmlSerialize(true, $sxe->addChild('groupingBehavior'));
        if (null !== $this->selectionBehavior) $this->selectionBehavior->xmlSerialize(true, $sxe->addChild('selectionBehavior'));
        if (null !== $this->requiredBehavior) $this->requiredBehavior->xmlSerialize(true, $sxe->addChild('requiredBehavior'));
        if (null !== $this->precheckBehavior) $this->precheckBehavior->xmlSerialize(true, $sxe->addChild('precheckBehavior'));
        if (null !== $this->cardinalityBehavior) $this->cardinalityBehavior->xmlSerialize(true, $sxe->addChild('cardinalityBehavior'));
        if (null !== $this->definitionCanonical) $this->definitionCanonical->xmlSerialize(true, $sxe->addChild('definitionCanonical'));
        if (null !== $this->definitionUri) $this->definitionUri->xmlSerialize(true, $sxe->addChild('definitionUri'));
        if (null !== $this->transform) $this->transform->xmlSerialize(true, $sxe->addChild('transform'));
        if (0 < count($this->dynamicValue)) {
            foreach($this->dynamicValue as $dynamicValue) {
                $dynamicValue->xmlSerialize(true, $sxe->addChild('dynamicValue'));
            }
        }
        if (0 < count($this->action)) {
            foreach($this->action as $action) {
                $action->xmlSerialize(true, $sxe->addChild('action'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}