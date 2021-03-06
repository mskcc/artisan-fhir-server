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
class FHIRProvenanceEntity extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * How the entity was used during the activity.
     * @var \Fhir\V_301\FHIRElement\FHIRProvenanceEntityRole
     */
    public $role = null;

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRUri
     */
    public $whatUri = null;

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $whatReference = null;

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRIdentifier
     */
    public $whatIdentifier = null;

    /**
     * The entity is attributed to an agent to express the agent's responsibility for that entity, possibly along with other agents. This description can be understood as shorthand for saying that the agent was responsible for the activity which generated the entity.
     * @var \Fhir\V_301\FHIRResource\FHIRProvenance\FHIRProvenanceAgent[]
     */
    public $agent = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Provenance.Entity';

    /**
     * How the entity was used during the activity.
     * @return \Fhir\V_301\FHIRElement\FHIRProvenanceEntityRole
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * How the entity was used during the activity.
     * @param \Fhir\V_301\FHIRElement\FHIRProvenanceEntityRole $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRUri
     */
    public function getWhatUri()
    {
        return $this->whatUri;
    }

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRUri $whatUri
     * @return $this
     */
    public function setWhatUri($whatUri)
    {
        $this->whatUri = $whatUri;
        return $this;
    }

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getWhatReference()
    {
        return $this->whatReference;
    }

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRReference $whatReference
     * @return $this
     */
    public function setWhatReference($whatReference)
    {
        $this->whatReference = $whatReference;
        return $this;
    }

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRIdentifier
     */
    public function getWhatIdentifier()
    {
        return $this->whatIdentifier;
    }

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRIdentifier $whatIdentifier
     * @return $this
     */
    public function setWhatIdentifier($whatIdentifier)
    {
        $this->whatIdentifier = $whatIdentifier;
        return $this;
    }

    /**
     * The entity is attributed to an agent to express the agent's responsibility for that entity, possibly along with other agents. This description can be understood as shorthand for saying that the agent was responsible for the activity which generated the entity.
     * @return \Fhir\V_301\FHIRResource\FHIRProvenance\FHIRProvenanceAgent[]
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * The entity is attributed to an agent to express the agent's responsibility for that entity, possibly along with other agents. This description can be understood as shorthand for saying that the agent was responsible for the activity which generated the entity.
     * @param \Fhir\V_301\FHIRResource\FHIRProvenance\FHIRProvenanceAgent $agent
     * @return $this
     */
    public function addAgent($agent)
    {
        $this->agent[] = $agent;
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
        if (null !== $this->role) $json['role'] = $this->role;
        if (null !== $this->whatUri) $json['whatUri'] = $this->whatUri;
        if (null !== $this->whatReference) $json['whatReference'] = $this->whatReference;
        if (null !== $this->whatIdentifier) $json['whatIdentifier'] = $this->whatIdentifier;
        if (0 < count($this->agent)) {
            $json['agent'] = [];
            foreach($this->agent as $agent) {
                $json['agent'][] = $agent;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProvenanceEntity xmlns="http://hl7.org/fhir"></ProvenanceEntity>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->role) $this->role->xmlSerialize(true, $sxe->addChild('role'));
        if (null !== $this->whatUri) $this->whatUri->xmlSerialize(true, $sxe->addChild('whatUri'));
        if (null !== $this->whatReference) $this->whatReference->xmlSerialize(true, $sxe->addChild('whatReference'));
        if (null !== $this->whatIdentifier) $this->whatIdentifier->xmlSerialize(true, $sxe->addChild('whatIdentifier'));
        if (0 < count($this->agent)) {
            foreach($this->agent as $agent) {
                $agent->xmlSerialize(true, $sxe->addChild('agent'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}