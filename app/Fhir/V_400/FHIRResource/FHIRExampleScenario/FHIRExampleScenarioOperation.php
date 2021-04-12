<?php namespace Fhir\V_400\FHIRResource\FHIRExampleScenario;

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
 * Example of workflow instance.
 */
class FHIRExampleScenarioOperation extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The sequential number of the interaction, e.g. 1.2.5.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $number = null;

    /**
     * The type of operation - CRUD.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $type = null;

    /**
     * The human-friendly name of the interaction.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Who starts the transaction.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $initiator = null;

    /**
     * Who receives the transaction.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $receiver = null;

    /**
     * A comment to be inserted in the diagram.
     * @var \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * Whether the initiator is deactivated right after the transaction.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $initiatorActive = null;

    /**
     * Whether the receiver is deactivated right after the transaction.
     * @var \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public $receiverActive = null;

    /**
     * Each resource instance used by the initiator.
     * @var \Fhir\V_400\FHIRResource\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    public $request = null;

    /**
     * Each resource instance used by the responder.
     * @var \Fhir\V_400\FHIRResource\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    public $response = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ExampleScenario.Operation';

    /**
     * The sequential number of the interaction, e.g. 1.2.5.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * The sequential number of the interaction, e.g. 1.2.5.
     * @param \Fhir\V_400\FHIRElement\FHIRString $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * The type of operation - CRUD.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of operation - CRUD.
     * @param \Fhir\V_400\FHIRElement\FHIRString $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The human-friendly name of the interaction.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The human-friendly name of the interaction.
     * @param \Fhir\V_400\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Who starts the transaction.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getInitiator()
    {
        return $this->initiator;
    }

    /**
     * Who starts the transaction.
     * @param \Fhir\V_400\FHIRElement\FHIRString $initiator
     * @return $this
     */
    public function setInitiator($initiator)
    {
        $this->initiator = $initiator;
        return $this;
    }

    /**
     * Who receives the transaction.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Who receives the transaction.
     * @param \Fhir\V_400\FHIRElement\FHIRString $receiver
     * @return $this
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * A comment to be inserted in the diagram.
     * @return \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A comment to be inserted in the diagram.
     * @param \Fhir\V_400\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Whether the initiator is deactivated right after the transaction.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getInitiatorActive()
    {
        return $this->initiatorActive;
    }

    /**
     * Whether the initiator is deactivated right after the transaction.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $initiatorActive
     * @return $this
     */
    public function setInitiatorActive($initiatorActive)
    {
        $this->initiatorActive = $initiatorActive;
        return $this;
    }

    /**
     * Whether the receiver is deactivated right after the transaction.
     * @return \Fhir\V_400\FHIRElement\FHIRBoolean
     */
    public function getReceiverActive()
    {
        return $this->receiverActive;
    }

    /**
     * Whether the receiver is deactivated right after the transaction.
     * @param \Fhir\V_400\FHIRElement\FHIRBoolean $receiverActive
     * @return $this
     */
    public function setReceiverActive($receiverActive)
    {
        $this->receiverActive = $receiverActive;
        return $this;
    }

    /**
     * Each resource instance used by the initiator.
     * @return \Fhir\V_400\FHIRResource\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Each resource instance used by the initiator.
     * @param \Fhir\V_400\FHIRResource\FHIRExampleScenario\FHIRExampleScenarioContainedInstance $request
     * @return $this
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Each resource instance used by the responder.
     * @return \Fhir\V_400\FHIRResource\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Each resource instance used by the responder.
     * @param \Fhir\V_400\FHIRResource\FHIRExampleScenario\FHIRExampleScenarioContainedInstance $response
     * @return $this
     */
    public function setResponse($response)
    {
        $this->response = $response;
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
        if (null !== $this->number) $json['number'] = $this->number;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->initiator) $json['initiator'] = $this->initiator;
        if (null !== $this->receiver) $json['receiver'] = $this->receiver;
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->initiatorActive) $json['initiatorActive'] = $this->initiatorActive;
        if (null !== $this->receiverActive) $json['receiverActive'] = $this->receiverActive;
        if (null !== $this->request) $json['request'] = $this->request;
        if (null !== $this->response) $json['response'] = $this->response;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ExampleScenarioOperation xmlns="http://hl7.org/fhir"></ExampleScenarioOperation>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->number) $this->number->xmlSerialize(true, $sxe->addChild('number'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->initiator) $this->initiator->xmlSerialize(true, $sxe->addChild('initiator'));
        if (null !== $this->receiver) $this->receiver->xmlSerialize(true, $sxe->addChild('receiver'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->initiatorActive) $this->initiatorActive->xmlSerialize(true, $sxe->addChild('initiatorActive'));
        if (null !== $this->receiverActive) $this->receiverActive->xmlSerialize(true, $sxe->addChild('receiverActive'));
        if (null !== $this->request) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (null !== $this->response) $this->response->xmlSerialize(true, $sxe->addChild('response'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}