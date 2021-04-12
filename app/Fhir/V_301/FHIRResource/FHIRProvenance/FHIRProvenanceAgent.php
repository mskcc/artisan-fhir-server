<?php namespace Fhir\V_301\FHIRResource\FHIRProvenance;

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
 * Provenance of a resource is a record that describes entities and processes involved in producing and delivering or otherwise influencing that resource. Provenance provides a critical foundation for assessing authenticity, enabling trust, and allowing reproducibility. Provenance assertions are a form of contextual metadata and can themselves become important records with their own provenance. Provenance statement indicates clinical significance in terms of confidence in authenticity, reliability, and trustworthiness, integrity, and stage in lifecycle (e.g. Document Completion - has the artifact been legally authenticated), all of which may impact security, privacy, and trust policies.
 */
class FHIRProvenanceAgent extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The function of the agent with respect to the activity. The security role enabling the agent with respect to the activity.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public $role = array();

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRUri
     */
    public $whoUri = null;

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $whoReference = null;

    /**
     * The individual, device, or organization for whom the change was made. (choose any one of onBehalfOf*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRUri
     */
    public $onBehalfOfUri = null;

    /**
     * The individual, device, or organization for whom the change was made. (choose any one of onBehalfOf*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $onBehalfOfReference = null;

    /**
     * The type of relationship between agents.
     * @var \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public $relatedAgentType = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Provenance.Agent';

    /**
     * The function of the agent with respect to the activity. The security role enabling the agent with respect to the activity.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * The function of the agent with respect to the activity. The security role enabling the agent with respect to the activity.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $role
     * @return $this
     */
    public function addRole($role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRUri
     */
    public function getWhoUri()
    {
        return $this->whoUri;
    }

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRUri $whoUri
     * @return $this
     */
    public function setWhoUri($whoUri)
    {
        $this->whoUri = $whoUri;
        return $this;
    }

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getWhoReference()
    {
        return $this->whoReference;
    }

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRReference $whoReference
     * @return $this
     */
    public function setWhoReference($whoReference)
    {
        $this->whoReference = $whoReference;
        return $this;
    }

    /**
     * The individual, device, or organization for whom the change was made. (choose any one of onBehalfOf*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRUri
     */
    public function getOnBehalfOfUri()
    {
        return $this->onBehalfOfUri;
    }

    /**
     * The individual, device, or organization for whom the change was made. (choose any one of onBehalfOf*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRUri $onBehalfOfUri
     * @return $this
     */
    public function setOnBehalfOfUri($onBehalfOfUri)
    {
        $this->onBehalfOfUri = $onBehalfOfUri;
        return $this;
    }

    /**
     * The individual, device, or organization for whom the change was made. (choose any one of onBehalfOf*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getOnBehalfOfReference()
    {
        return $this->onBehalfOfReference;
    }

    /**
     * The individual, device, or organization for whom the change was made. (choose any one of onBehalfOf*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRReference $onBehalfOfReference
     * @return $this
     */
    public function setOnBehalfOfReference($onBehalfOfReference)
    {
        $this->onBehalfOfReference = $onBehalfOfReference;
        return $this;
    }

    /**
     * The type of relationship between agents.
     * @return \Fhir\V_301\FHIRElement\FHIRCodeableConcept
     */
    public function getRelatedAgentType()
    {
        return $this->relatedAgentType;
    }

    /**
     * The type of relationship between agents.
     * @param \Fhir\V_301\FHIRElement\FHIRCodeableConcept $relatedAgentType
     * @return $this
     */
    public function setRelatedAgentType($relatedAgentType)
    {
        $this->relatedAgentType = $relatedAgentType;
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
        if (0 < count($this->role)) {
            $json['role'] = [];
            foreach($this->role as $role) {
                $json['role'][] = $role;
            }
        }
        if (null !== $this->whoUri) $json['whoUri'] = $this->whoUri;
        if (null !== $this->whoReference) $json['whoReference'] = $this->whoReference;
        if (null !== $this->onBehalfOfUri) $json['onBehalfOfUri'] = $this->onBehalfOfUri;
        if (null !== $this->onBehalfOfReference) $json['onBehalfOfReference'] = $this->onBehalfOfReference;
        if (null !== $this->relatedAgentType) $json['relatedAgentType'] = $this->relatedAgentType;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProvenanceAgent xmlns="http://hl7.org/fhir"></ProvenanceAgent>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->role)) {
            foreach($this->role as $role) {
                $role->xmlSerialize(true, $sxe->addChild('role'));
            }
        }
        if (null !== $this->whoUri) $this->whoUri->xmlSerialize(true, $sxe->addChild('whoUri'));
        if (null !== $this->whoReference) $this->whoReference->xmlSerialize(true, $sxe->addChild('whoReference'));
        if (null !== $this->onBehalfOfUri) $this->onBehalfOfUri->xmlSerialize(true, $sxe->addChild('onBehalfOfUri'));
        if (null !== $this->onBehalfOfReference) $this->onBehalfOfReference->xmlSerialize(true, $sxe->addChild('onBehalfOfReference'));
        if (null !== $this->relatedAgentType) $this->relatedAgentType->xmlSerialize(true, $sxe->addChild('relatedAgentType'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}