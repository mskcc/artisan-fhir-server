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
 * The header for a message exchange that is either requesting or responding to an action.  The reference(s) that are the subject of the action as well as other information related to the action are typically transmitted in a bundle in which the MessageHeader resource instance is the first resource in the bundle.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMessageHeader extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * @var \Fhir\V_400\FHIRElement\FHIRCoding
     */
    public $eventCoding = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRUri
     */
    public $eventUri = null;

    /**
     * The destination application which the message is intended for.
     * @var \Fhir\V_400\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderDestination[]
     */
    public $destination = array();

    /**
     * Identifies the sending system to allow the use of a trust relationship.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $sender = null;

    /**
     * The person or device that performed the data entry leading to this message. When there is more than one candidate, pick the most proximal to the message. Can provide other enterers in extensions.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $enterer = null;

    /**
     * The logical author of the message - the person or device that decided the described event should happen. When there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * The source application from which this message originated.
     * @var \Fhir\V_400\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderSource
     */
    public $source = null;

    /**
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $responsible = null;

    /**
     * Coded indication of the cause for the event - indicates  a reason for the occurrence of the event that is a focus of this message.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $reason = null;

    /**
     * Information about the message that this message is a response to.  Only present if this message is a response.
     * @var \Fhir\V_400\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderResponse
     */
    public $response = null;

    /**
     * The actual data of the message - a reference to the root/focus class of the event.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $focus = array();

    /**
     * Permanent link to the MessageDefinition for this message.
     * @var \Fhir\V_400\FHIRElement\FHIRCanonical
     */
    public $definition = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MessageHeader';

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRCoding
     */
    public function getEventCoding()
    {
        return $this->eventCoding;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRCoding $eventCoding
     * @return $this
     */
    public function setEventCoding($eventCoding)
    {
        $this->eventCoding = $eventCoding;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRUri
     */
    public function getEventUri()
    {
        return $this->eventUri;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRUri $eventUri
     * @return $this
     */
    public function setEventUri($eventUri)
    {
        $this->eventUri = $eventUri;
        return $this;
    }

    /**
     * The destination application which the message is intended for.
     * @return \Fhir\V_400\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderDestination[]
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * The destination application which the message is intended for.
     * @param \Fhir\V_400\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderDestination $destination
     * @return $this
     */
    public function addDestination($destination)
    {
        $this->destination[] = $destination;
        return $this;
    }

    /**
     * Identifies the sending system to allow the use of a trust relationship.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Identifies the sending system to allow the use of a trust relationship.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $sender
     * @return $this
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * The person or device that performed the data entry leading to this message. When there is more than one candidate, pick the most proximal to the message. Can provide other enterers in extensions.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getEnterer()
    {
        return $this->enterer;
    }

    /**
     * The person or device that performed the data entry leading to this message. When there is more than one candidate, pick the most proximal to the message. Can provide other enterers in extensions.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $enterer
     * @return $this
     */
    public function setEnterer($enterer)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * The logical author of the message - the person or device that decided the described event should happen. When there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * The logical author of the message - the person or device that decided the described event should happen. When there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * The source application from which this message originated.
     * @return \Fhir\V_400\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderSource
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The source application from which this message originated.
     * @param \Fhir\V_400\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderSource $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $responsible
     * @return $this
     */
    public function setResponsible($responsible)
    {
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * Coded indication of the cause for the event - indicates  a reason for the occurrence of the event that is a focus of this message.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Coded indication of the cause for the event - indicates  a reason for the occurrence of the event that is a focus of this message.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Information about the message that this message is a response to.  Only present if this message is a response.
     * @return \Fhir\V_400\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Information about the message that this message is a response to.  Only present if this message is a response.
     * @param \Fhir\V_400\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderResponse $response
     * @return $this
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * The actual data of the message - a reference to the root/focus class of the event.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * The actual data of the message - a reference to the root/focus class of the event.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $focus
     * @return $this
     */
    public function addFocus($focus)
    {
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * Permanent link to the MessageDefinition for this message.
     * @return \Fhir\V_400\FHIRElement\FHIRCanonical
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Permanent link to the MessageDefinition for this message.
     * @param \Fhir\V_400\FHIRElement\FHIRCanonical $definition
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
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
        if (null !== $this->eventCoding) $json['eventCoding'] = $this->eventCoding;
        if (null !== $this->eventUri) $json['eventUri'] = $this->eventUri;
        if (0 < count($this->destination)) {
            $json['destination'] = [];
            foreach($this->destination as $destination) {
                $json['destination'][] = $destination;
            }
        }
        if (null !== $this->sender) $json['sender'] = $this->sender;
        if (null !== $this->enterer) $json['enterer'] = $this->enterer;
        if (null !== $this->author) $json['author'] = $this->author;
        if (null !== $this->source) $json['source'] = $this->source;
        if (null !== $this->responsible) $json['responsible'] = $this->responsible;
        if (null !== $this->reason) $json['reason'] = $this->reason;
        if (null !== $this->response) $json['response'] = $this->response;
        if (0 < count($this->focus)) {
            $json['focus'] = [];
            foreach($this->focus as $focus) {
                $json['focus'][] = $focus;
            }
        }
        if (null !== $this->definition) $json['definition'] = $this->definition;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MessageHeader xmlns="http://hl7.org/fhir"></MessageHeader>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->eventCoding) $this->eventCoding->xmlSerialize(true, $sxe->addChild('eventCoding'));
        if (null !== $this->eventUri) $this->eventUri->xmlSerialize(true, $sxe->addChild('eventUri'));
        if (0 < count($this->destination)) {
            foreach($this->destination as $destination) {
                $destination->xmlSerialize(true, $sxe->addChild('destination'));
            }
        }
        if (null !== $this->sender) $this->sender->xmlSerialize(true, $sxe->addChild('sender'));
        if (null !== $this->enterer) $this->enterer->xmlSerialize(true, $sxe->addChild('enterer'));
        if (null !== $this->author) $this->author->xmlSerialize(true, $sxe->addChild('author'));
        if (null !== $this->source) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (null !== $this->responsible) $this->responsible->xmlSerialize(true, $sxe->addChild('responsible'));
        if (null !== $this->reason) $this->reason->xmlSerialize(true, $sxe->addChild('reason'));
        if (null !== $this->response) $this->response->xmlSerialize(true, $sxe->addChild('response'));
        if (0 < count($this->focus)) {
            foreach($this->focus as $focus) {
                $focus->xmlSerialize(true, $sxe->addChild('focus'));
            }
        }
        if (null !== $this->definition) $this->definition->xmlSerialize(true, $sxe->addChild('definition'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}