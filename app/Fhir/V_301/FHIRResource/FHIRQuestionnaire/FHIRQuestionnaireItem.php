<?php namespace Fhir\V_301\FHIRResource\FHIRQuestionnaire;

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

use Fhir\V_301\FHIRElement\FHIRBackboneElement;

/**
 * A structured set of questions intended to guide the collection of answers from end-users. Questionnaires provide detailed control over order, presentation, phraseology and grouping to allow coherent, consistent data collection.
 */
class FHIRQuestionnaireItem extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * An identifier that is unique within the Questionnaire allowing linkage to the equivalent item in a QuestionnaireResponse resource.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $linkId = null;

    /**
     * A reference to an [[[ElementDefinition]]] that provides the details for the item. If a definition is provided, then the following element values can be inferred from the definition: 

* code (ElementDefinition.code)
* type (ElementDefinition.type)
* required (ElementDefinition.min)
* repeats (ElementDefinition.max)
* maxLength (ElementDefinition.maxLength)
* options (ElementDefinition.binding)

Any information provided in these elements on a Questionnaire Item overrides the information from the definition.
     * @var \Fhir\V_301\FHIRElement\FHIRUri
     */
    public $definition = null;

    /**
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     * @var \Fhir\V_301\FHIRElement\FHIRCoding[]
     */
    public $code = array();

    /**
     * A short label for a particular group, question or set of display text within the questionnaire used for reference by the individual completing the questionnaire.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $prefix = null;

    /**
     * The name of a section, the text of a question or text content for a display item.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * The type of questionnaire item this is - whether text for display, a grouping of other items or a particular type of data to be captured (string, integer, coded choice, etc.).
     * @var \Fhir\V_301\FHIRElement\FHIRQuestionnaireItemType
     */
    public $type = null;

    /**
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     * @var \Fhir\V_301\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[]
     */
    public $enableWhen = array();

    /**
     * An indication, if true, that the item must be present in a "completed" QuestionnaireResponse.  If false, the item may be skipped when answering the questionnaire.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $required = null;

    /**
     * An indication, if true, that the item may occur multiple times in the response, collecting multiple answers answers for questions or multiple sets of answers for groups.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $repeats = null;

    /**
     * An indication, when true, that the value cannot be changed by a human respondent to the Questionnaire.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $readOnly = null;

    /**
     * The maximum number of characters that are permitted in the answer to be considered a "valid" QuestionnaireResponse.
     * @var \Fhir\V_301\FHIRElement\FHIRInteger
     */
    public $maxLength = null;

    /**
     * A reference to a value set containing a list of codes representing permitted answers for a "choice" or "open-choice" question.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $options = null;

    /**
     * One of the permitted answers for a "choice" or "open-choice" question.
     * @var \Fhir\V_301\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireOption[]
     */
    public $option = array();

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $initialBoolean = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRDecimal
     */
    public $initialDecimal = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRInteger
     */
    public $initialInteger = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRDate
     */
    public $initialDate = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public $initialDateTime = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRTime
     */
    public $initialTime = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $initialString = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRUri
     */
    public $initialUri = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRAttachment
     */
    public $initialAttachment = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRCoding
     */
    public $initialCoding = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRQuantity
     */
    public $initialQuantity = null;

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $initialReference = null;

    /**
     * Text, questions and other groups to be nested beneath a question or group.
     * @var \Fhir\V_301\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireItem[]
     */
    public $item = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Questionnaire.Item';

    /**
     * An identifier that is unique within the Questionnaire allowing linkage to the equivalent item in a QuestionnaireResponse resource.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * An identifier that is unique within the Questionnaire allowing linkage to the equivalent item in a QuestionnaireResponse resource.
     * @param \Fhir\V_301\FHIRElement\FHIRString $linkId
     * @return $this
     */
    public function setLinkId($linkId)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * A reference to an [[[ElementDefinition]]] that provides the details for the item. If a definition is provided, then the following element values can be inferred from the definition: 

* code (ElementDefinition.code)
* type (ElementDefinition.type)
* required (ElementDefinition.min)
* repeats (ElementDefinition.max)
* maxLength (ElementDefinition.maxLength)
* options (ElementDefinition.binding)

Any information provided in these elements on a Questionnaire Item overrides the information from the definition.
     * @return \Fhir\V_301\FHIRElement\FHIRUri
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * A reference to an [[[ElementDefinition]]] that provides the details for the item. If a definition is provided, then the following element values can be inferred from the definition: 

* code (ElementDefinition.code)
* type (ElementDefinition.type)
* required (ElementDefinition.min)
* repeats (ElementDefinition.max)
* maxLength (ElementDefinition.maxLength)
* options (ElementDefinition.binding)

Any information provided in these elements on a Questionnaire Item overrides the information from the definition.
     * @param \Fhir\V_301\FHIRElement\FHIRUri $definition
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     * @return \Fhir\V_301\FHIRElement\FHIRCoding[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     * @param \Fhir\V_301\FHIRElement\FHIRCoding $code
     * @return $this
     */
    public function addCode($code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * A short label for a particular group, question or set of display text within the questionnaire used for reference by the individual completing the questionnaire.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * A short label for a particular group, question or set of display text within the questionnaire used for reference by the individual completing the questionnaire.
     * @param \Fhir\V_301\FHIRElement\FHIRString $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * The name of a section, the text of a question or text content for a display item.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * The name of a section, the text of a question or text content for a display item.
     * @param \Fhir\V_301\FHIRElement\FHIRString $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * The type of questionnaire item this is - whether text for display, a grouping of other items or a particular type of data to be captured (string, integer, coded choice, etc.).
     * @return \Fhir\V_301\FHIRElement\FHIRQuestionnaireItemType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of questionnaire item this is - whether text for display, a grouping of other items or a particular type of data to be captured (string, integer, coded choice, etc.).
     * @param \Fhir\V_301\FHIRElement\FHIRQuestionnaireItemType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     * @return \Fhir\V_301\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[]
     */
    public function getEnableWhen()
    {
        return $this->enableWhen;
    }

    /**
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     * @param \Fhir\V_301\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen $enableWhen
     * @return $this
     */
    public function addEnableWhen($enableWhen)
    {
        $this->enableWhen[] = $enableWhen;
        return $this;
    }

    /**
     * An indication, if true, that the item must be present in a "completed" QuestionnaireResponse.  If false, the item may be skipped when answering the questionnaire.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * An indication, if true, that the item must be present in a "completed" QuestionnaireResponse.  If false, the item may be skipped when answering the questionnaire.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $required
     * @return $this
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }

    /**
     * An indication, if true, that the item may occur multiple times in the response, collecting multiple answers answers for questions or multiple sets of answers for groups.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getRepeats()
    {
        return $this->repeats;
    }

    /**
     * An indication, if true, that the item may occur multiple times in the response, collecting multiple answers answers for questions or multiple sets of answers for groups.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $repeats
     * @return $this
     */
    public function setRepeats($repeats)
    {
        $this->repeats = $repeats;
        return $this;
    }

    /**
     * An indication, when true, that the value cannot be changed by a human respondent to the Questionnaire.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getReadOnly()
    {
        return $this->readOnly;
    }

    /**
     * An indication, when true, that the value cannot be changed by a human respondent to the Questionnaire.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $readOnly
     * @return $this
     */
    public function setReadOnly($readOnly)
    {
        $this->readOnly = $readOnly;
        return $this;
    }

    /**
     * The maximum number of characters that are permitted in the answer to be considered a "valid" QuestionnaireResponse.
     * @return \Fhir\V_301\FHIRElement\FHIRInteger
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * The maximum number of characters that are permitted in the answer to be considered a "valid" QuestionnaireResponse.
     * @param \Fhir\V_301\FHIRElement\FHIRInteger $maxLength
     * @return $this
     */
    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * A reference to a value set containing a list of codes representing permitted answers for a "choice" or "open-choice" question.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * A reference to a value set containing a list of codes representing permitted answers for a "choice" or "open-choice" question.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * One of the permitted answers for a "choice" or "open-choice" question.
     * @return \Fhir\V_301\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireOption[]
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * One of the permitted answers for a "choice" or "open-choice" question.
     * @param \Fhir\V_301\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireOption $option
     * @return $this
     */
    public function addOption($option)
    {
        $this->option[] = $option;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getInitialBoolean()
    {
        return $this->initialBoolean;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $initialBoolean
     * @return $this
     */
    public function setInitialBoolean($initialBoolean)
    {
        $this->initialBoolean = $initialBoolean;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRDecimal
     */
    public function getInitialDecimal()
    {
        return $this->initialDecimal;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRDecimal $initialDecimal
     * @return $this
     */
    public function setInitialDecimal($initialDecimal)
    {
        $this->initialDecimal = $initialDecimal;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRInteger
     */
    public function getInitialInteger()
    {
        return $this->initialInteger;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRInteger $initialInteger
     * @return $this
     */
    public function setInitialInteger($initialInteger)
    {
        $this->initialInteger = $initialInteger;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRDate
     */
    public function getInitialDate()
    {
        return $this->initialDate;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRDate $initialDate
     * @return $this
     */
    public function setInitialDate($initialDate)
    {
        $this->initialDate = $initialDate;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRDateTime
     */
    public function getInitialDateTime()
    {
        return $this->initialDateTime;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRDateTime $initialDateTime
     * @return $this
     */
    public function setInitialDateTime($initialDateTime)
    {
        $this->initialDateTime = $initialDateTime;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRTime
     */
    public function getInitialTime()
    {
        return $this->initialTime;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRTime $initialTime
     * @return $this
     */
    public function setInitialTime($initialTime)
    {
        $this->initialTime = $initialTime;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getInitialString()
    {
        return $this->initialString;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRString $initialString
     * @return $this
     */
    public function setInitialString($initialString)
    {
        $this->initialString = $initialString;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRUri
     */
    public function getInitialUri()
    {
        return $this->initialUri;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRUri $initialUri
     * @return $this
     */
    public function setInitialUri($initialUri)
    {
        $this->initialUri = $initialUri;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRAttachment
     */
    public function getInitialAttachment()
    {
        return $this->initialAttachment;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRAttachment $initialAttachment
     * @return $this
     */
    public function setInitialAttachment($initialAttachment)
    {
        $this->initialAttachment = $initialAttachment;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRCoding
     */
    public function getInitialCoding()
    {
        return $this->initialCoding;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRCoding $initialCoding
     * @return $this
     */
    public function setInitialCoding($initialCoding)
    {
        $this->initialCoding = $initialCoding;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRQuantity
     */
    public function getInitialQuantity()
    {
        return $this->initialQuantity;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRQuantity $initialQuantity
     * @return $this
     */
    public function setInitialQuantity($initialQuantity)
    {
        $this->initialQuantity = $initialQuantity;
        return $this;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getInitialReference()
    {
        return $this->initialReference;
    }

    /**
     * The value that should be defaulted when initially rendering the questionnaire for user input. (choose any one of initial*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRReference $initialReference
     * @return $this
     */
    public function setInitialReference($initialReference)
    {
        $this->initialReference = $initialReference;
        return $this;
    }

    /**
     * Text, questions and other groups to be nested beneath a question or group.
     * @return \Fhir\V_301\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Text, questions and other groups to be nested beneath a question or group.
     * @param \Fhir\V_301\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireItem $item
     * @return $this
     */
    public function addItem($item)
    {
        $this->item[] = $item;
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
        if (null !== $this->linkId) $json['linkId'] = $this->linkId;
        if (null !== $this->definition) $json['definition'] = $this->definition;
        if (0 < count($this->code)) {
            $json['code'] = [];
            foreach($this->code as $code) {
                $json['code'][] = $code;
            }
        }
        if (null !== $this->prefix) $json['prefix'] = $this->prefix;
        if (null !== $this->text) $json['text'] = $this->text;
        if (null !== $this->type) $json['type'] = $this->type;
        if (0 < count($this->enableWhen)) {
            $json['enableWhen'] = [];
            foreach($this->enableWhen as $enableWhen) {
                $json['enableWhen'][] = $enableWhen;
            }
        }
        if (null !== $this->required) $json['required'] = $this->required;
        if (null !== $this->repeats) $json['repeats'] = $this->repeats;
        if (null !== $this->readOnly) $json['readOnly'] = $this->readOnly;
        if (null !== $this->maxLength) $json['maxLength'] = $this->maxLength;
        if (null !== $this->options) $json['options'] = $this->options;
        if (0 < count($this->option)) {
            $json['option'] = [];
            foreach($this->option as $option) {
                $json['option'][] = $option;
            }
        }
        if (null !== $this->initialBoolean) $json['initialBoolean'] = $this->initialBoolean;
        if (null !== $this->initialDecimal) $json['initialDecimal'] = $this->initialDecimal;
        if (null !== $this->initialInteger) $json['initialInteger'] = $this->initialInteger;
        if (null !== $this->initialDate) $json['initialDate'] = $this->initialDate;
        if (null !== $this->initialDateTime) $json['initialDateTime'] = $this->initialDateTime;
        if (null !== $this->initialTime) $json['initialTime'] = $this->initialTime;
        if (null !== $this->initialString) $json['initialString'] = $this->initialString;
        if (null !== $this->initialUri) $json['initialUri'] = $this->initialUri;
        if (null !== $this->initialAttachment) $json['initialAttachment'] = $this->initialAttachment;
        if (null !== $this->initialCoding) $json['initialCoding'] = $this->initialCoding;
        if (null !== $this->initialQuantity) $json['initialQuantity'] = $this->initialQuantity;
        if (null !== $this->initialReference) $json['initialReference'] = $this->initialReference;
        if (0 < count($this->item)) {
            $json['item'] = [];
            foreach($this->item as $item) {
                $json['item'][] = $item;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<QuestionnaireItem xmlns="http://hl7.org/fhir"></QuestionnaireItem>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->linkId) $this->linkId->xmlSerialize(true, $sxe->addChild('linkId'));
        if (null !== $this->definition) $this->definition->xmlSerialize(true, $sxe->addChild('definition'));
        if (0 < count($this->code)) {
            foreach($this->code as $code) {
                $code->xmlSerialize(true, $sxe->addChild('code'));
            }
        }
        if (null !== $this->prefix) $this->prefix->xmlSerialize(true, $sxe->addChild('prefix'));
        if (null !== $this->text) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->enableWhen)) {
            foreach($this->enableWhen as $enableWhen) {
                $enableWhen->xmlSerialize(true, $sxe->addChild('enableWhen'));
            }
        }
        if (null !== $this->required) $this->required->xmlSerialize(true, $sxe->addChild('required'));
        if (null !== $this->repeats) $this->repeats->xmlSerialize(true, $sxe->addChild('repeats'));
        if (null !== $this->readOnly) $this->readOnly->xmlSerialize(true, $sxe->addChild('readOnly'));
        if (null !== $this->maxLength) $this->maxLength->xmlSerialize(true, $sxe->addChild('maxLength'));
        if (null !== $this->options) $this->options->xmlSerialize(true, $sxe->addChild('options'));
        if (0 < count($this->option)) {
            foreach($this->option as $option) {
                $option->xmlSerialize(true, $sxe->addChild('option'));
            }
        }
        if (null !== $this->initialBoolean) $this->initialBoolean->xmlSerialize(true, $sxe->addChild('initialBoolean'));
        if (null !== $this->initialDecimal) $this->initialDecimal->xmlSerialize(true, $sxe->addChild('initialDecimal'));
        if (null !== $this->initialInteger) $this->initialInteger->xmlSerialize(true, $sxe->addChild('initialInteger'));
        if (null !== $this->initialDate) $this->initialDate->xmlSerialize(true, $sxe->addChild('initialDate'));
        if (null !== $this->initialDateTime) $this->initialDateTime->xmlSerialize(true, $sxe->addChild('initialDateTime'));
        if (null !== $this->initialTime) $this->initialTime->xmlSerialize(true, $sxe->addChild('initialTime'));
        if (null !== $this->initialString) $this->initialString->xmlSerialize(true, $sxe->addChild('initialString'));
        if (null !== $this->initialUri) $this->initialUri->xmlSerialize(true, $sxe->addChild('initialUri'));
        if (null !== $this->initialAttachment) $this->initialAttachment->xmlSerialize(true, $sxe->addChild('initialAttachment'));
        if (null !== $this->initialCoding) $this->initialCoding->xmlSerialize(true, $sxe->addChild('initialCoding'));
        if (null !== $this->initialQuantity) $this->initialQuantity->xmlSerialize(true, $sxe->addChild('initialQuantity'));
        if (null !== $this->initialReference) $this->initialReference->xmlSerialize(true, $sxe->addChild('initialReference'));
        if (0 < count($this->item)) {
            foreach($this->item as $item) {
                $item->xmlSerialize(true, $sxe->addChild('item'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}