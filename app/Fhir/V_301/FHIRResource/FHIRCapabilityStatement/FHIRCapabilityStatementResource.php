<?php namespace Fhir\V_301\FHIRResource\FHIRCapabilityStatement;

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
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 */
class FHIRCapabilityStatementResource extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A type of resource exposed via the restful interface.
     * @var \Fhir\V_301\FHIRElement\FHIRResourceType
     */
    public $type = null;

    /**
     * A specification of the profile that describes the solution's overall support for the resource, including any constraints on cardinality, bindings, lengths or other limitations. See further discussion in [Using Profiles](profiling.html#profile-uses).
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $profile = null;

    /**
     * Additional information about the resource type used by the system.
     * @var \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public $documentation = null;

    /**
     * Identifies a restful operation supported by the solution.
     * @var \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[]
     */
    public $interaction = array();

    /**
     * This field is set to no-version to specify that the system does not support (server) or use (client) versioning for this resource type. If this has some other value, the server must at least correctly track and populate the versionId meta-property on resources. If the value is 'versioned-update', then the server supports all the versioning features, including using e-tags for version integrity in the API.
     * @var \Fhir\V_301\FHIRElement\FHIRResourceVersionPolicy
     */
    public $versioning = null;

    /**
     * A flag for whether the server is able to return past versions as part of the vRead operation.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $readHistory = null;

    /**
     * A flag to indicate that the server allows or needs to allow the client to create new identities on the server (e.g. that is, the client PUTs to a location where there is no existing resource). Allowing this operation means that the server allows the client to create new identities on the server.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $updateCreate = null;

    /**
     * A flag that indicates that the server supports conditional create.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $conditionalCreate = null;

    /**
     * A code that indicates how the server supports conditional read.
     * @var \Fhir\V_301\FHIRElement\FHIRConditionalReadStatus
     */
    public $conditionalRead = null;

    /**
     * A flag that indicates that the server supports conditional update.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $conditionalUpdate = null;

    /**
     * A code that indicates how the server supports conditional delete.
     * @var \Fhir\V_301\FHIRElement\FHIRConditionalDeleteStatus
     */
    public $conditionalDelete = null;

    /**
     * A set of flags that defines how references are supported.
     * @var \Fhir\V_301\FHIRElement\FHIRReferenceHandlingPolicy[]
     */
    public $referencePolicy = array();

    /**
     * A list of _include values supported by the server.
     * @var \Fhir\V_301\FHIRElement\FHIRString[]
     */
    public $searchInclude = array();

    /**
     * A list of _revinclude (reverse include) values supported by the server.
     * @var \Fhir\V_301\FHIRElement\FHIRString[]
     */
    public $searchRevInclude = array();

    /**
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     * @var \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
     */
    public $searchParam = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'CapabilityStatement.Resource';

    /**
     * A type of resource exposed via the restful interface.
     * @return \Fhir\V_301\FHIRElement\FHIRResourceType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A type of resource exposed via the restful interface.
     * @param \Fhir\V_301\FHIRElement\FHIRResourceType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A specification of the profile that describes the solution's overall support for the resource, including any constraints on cardinality, bindings, lengths or other limitations. See further discussion in [Using Profiles](profiling.html#profile-uses).
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * A specification of the profile that describes the solution's overall support for the resource, including any constraints on cardinality, bindings, lengths or other limitations. See further discussion in [Using Profiles](profiling.html#profile-uses).
     * @param \Fhir\V_301\FHIRElement\FHIRReference $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Additional information about the resource type used by the system.
     * @return \Fhir\V_301\FHIRElement\FHIRMarkdown
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Additional information about the resource type used by the system.
     * @param \Fhir\V_301\FHIRElement\FHIRMarkdown $documentation
     * @return $this
     */
    public function setDocumentation($documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Identifies a restful operation supported by the solution.
     * @return \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[]
     */
    public function getInteraction()
    {
        return $this->interaction;
    }

    /**
     * Identifies a restful operation supported by the solution.
     * @param \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction $interaction
     * @return $this
     */
    public function addInteraction($interaction)
    {
        $this->interaction[] = $interaction;
        return $this;
    }

    /**
     * This field is set to no-version to specify that the system does not support (server) or use (client) versioning for this resource type. If this has some other value, the server must at least correctly track and populate the versionId meta-property on resources. If the value is 'versioned-update', then the server supports all the versioning features, including using e-tags for version integrity in the API.
     * @return \Fhir\V_301\FHIRElement\FHIRResourceVersionPolicy
     */
    public function getVersioning()
    {
        return $this->versioning;
    }

    /**
     * This field is set to no-version to specify that the system does not support (server) or use (client) versioning for this resource type. If this has some other value, the server must at least correctly track and populate the versionId meta-property on resources. If the value is 'versioned-update', then the server supports all the versioning features, including using e-tags for version integrity in the API.
     * @param \Fhir\V_301\FHIRElement\FHIRResourceVersionPolicy $versioning
     * @return $this
     */
    public function setVersioning($versioning)
    {
        $this->versioning = $versioning;
        return $this;
    }

    /**
     * A flag for whether the server is able to return past versions as part of the vRead operation.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getReadHistory()
    {
        return $this->readHistory;
    }

    /**
     * A flag for whether the server is able to return past versions as part of the vRead operation.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $readHistory
     * @return $this
     */
    public function setReadHistory($readHistory)
    {
        $this->readHistory = $readHistory;
        return $this;
    }

    /**
     * A flag to indicate that the server allows or needs to allow the client to create new identities on the server (e.g. that is, the client PUTs to a location where there is no existing resource). Allowing this operation means that the server allows the client to create new identities on the server.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getUpdateCreate()
    {
        return $this->updateCreate;
    }

    /**
     * A flag to indicate that the server allows or needs to allow the client to create new identities on the server (e.g. that is, the client PUTs to a location where there is no existing resource). Allowing this operation means that the server allows the client to create new identities on the server.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $updateCreate
     * @return $this
     */
    public function setUpdateCreate($updateCreate)
    {
        $this->updateCreate = $updateCreate;
        return $this;
    }

    /**
     * A flag that indicates that the server supports conditional create.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getConditionalCreate()
    {
        return $this->conditionalCreate;
    }

    /**
     * A flag that indicates that the server supports conditional create.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $conditionalCreate
     * @return $this
     */
    public function setConditionalCreate($conditionalCreate)
    {
        $this->conditionalCreate = $conditionalCreate;
        return $this;
    }

    /**
     * A code that indicates how the server supports conditional read.
     * @return \Fhir\V_301\FHIRElement\FHIRConditionalReadStatus
     */
    public function getConditionalRead()
    {
        return $this->conditionalRead;
    }

    /**
     * A code that indicates how the server supports conditional read.
     * @param \Fhir\V_301\FHIRElement\FHIRConditionalReadStatus $conditionalRead
     * @return $this
     */
    public function setConditionalRead($conditionalRead)
    {
        $this->conditionalRead = $conditionalRead;
        return $this;
    }

    /**
     * A flag that indicates that the server supports conditional update.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getConditionalUpdate()
    {
        return $this->conditionalUpdate;
    }

    /**
     * A flag that indicates that the server supports conditional update.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $conditionalUpdate
     * @return $this
     */
    public function setConditionalUpdate($conditionalUpdate)
    {
        $this->conditionalUpdate = $conditionalUpdate;
        return $this;
    }

    /**
     * A code that indicates how the server supports conditional delete.
     * @return \Fhir\V_301\FHIRElement\FHIRConditionalDeleteStatus
     */
    public function getConditionalDelete()
    {
        return $this->conditionalDelete;
    }

    /**
     * A code that indicates how the server supports conditional delete.
     * @param \Fhir\V_301\FHIRElement\FHIRConditionalDeleteStatus $conditionalDelete
     * @return $this
     */
    public function setConditionalDelete($conditionalDelete)
    {
        $this->conditionalDelete = $conditionalDelete;
        return $this;
    }

    /**
     * A set of flags that defines how references are supported.
     * @return \Fhir\V_301\FHIRElement\FHIRReferenceHandlingPolicy[]
     */
    public function getReferencePolicy()
    {
        return $this->referencePolicy;
    }

    /**
     * A set of flags that defines how references are supported.
     * @param \Fhir\V_301\FHIRElement\FHIRReferenceHandlingPolicy $referencePolicy
     * @return $this
     */
    public function addReferencePolicy($referencePolicy)
    {
        $this->referencePolicy[] = $referencePolicy;
        return $this;
    }

    /**
     * A list of _include values supported by the server.
     * @return \Fhir\V_301\FHIRElement\FHIRString[]
     */
    public function getSearchInclude()
    {
        return $this->searchInclude;
    }

    /**
     * A list of _include values supported by the server.
     * @param \Fhir\V_301\FHIRElement\FHIRString $searchInclude
     * @return $this
     */
    public function addSearchInclude($searchInclude)
    {
        $this->searchInclude[] = $searchInclude;
        return $this;
    }

    /**
     * A list of _revinclude (reverse include) values supported by the server.
     * @return \Fhir\V_301\FHIRElement\FHIRString[]
     */
    public function getSearchRevInclude()
    {
        return $this->searchRevInclude;
    }

    /**
     * A list of _revinclude (reverse include) values supported by the server.
     * @param \Fhir\V_301\FHIRElement\FHIRString $searchRevInclude
     * @return $this
     */
    public function addSearchRevInclude($searchRevInclude)
    {
        $this->searchRevInclude[] = $searchRevInclude;
        return $this;
    }

    /**
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     * @return \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }

    /**
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     * @param \Fhir\V_301\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam $searchParam
     * @return $this
     */
    public function addSearchParam($searchParam)
    {
        $this->searchParam[] = $searchParam;
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
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->profile) $json['profile'] = $this->profile;
        if (null !== $this->documentation) $json['documentation'] = $this->documentation;
        if (0 < count($this->interaction)) {
            $json['interaction'] = [];
            foreach($this->interaction as $interaction) {
                $json['interaction'][] = $interaction;
            }
        }
        if (null !== $this->versioning) $json['versioning'] = $this->versioning;
        if (null !== $this->readHistory) $json['readHistory'] = $this->readHistory;
        if (null !== $this->updateCreate) $json['updateCreate'] = $this->updateCreate;
        if (null !== $this->conditionalCreate) $json['conditionalCreate'] = $this->conditionalCreate;
        if (null !== $this->conditionalRead) $json['conditionalRead'] = $this->conditionalRead;
        if (null !== $this->conditionalUpdate) $json['conditionalUpdate'] = $this->conditionalUpdate;
        if (null !== $this->conditionalDelete) $json['conditionalDelete'] = $this->conditionalDelete;
        if (0 < count($this->referencePolicy)) {
            $json['referencePolicy'] = [];
            foreach($this->referencePolicy as $referencePolicy) {
                $json['referencePolicy'][] = $referencePolicy;
            }
        }
        if (0 < count($this->searchInclude)) {
            $json['searchInclude'] = [];
            foreach($this->searchInclude as $searchInclude) {
                $json['searchInclude'][] = $searchInclude;
            }
        }
        if (0 < count($this->searchRevInclude)) {
            $json['searchRevInclude'] = [];
            foreach($this->searchRevInclude as $searchRevInclude) {
                $json['searchRevInclude'][] = $searchRevInclude;
            }
        }
        if (0 < count($this->searchParam)) {
            $json['searchParam'] = [];
            foreach($this->searchParam as $searchParam) {
                $json['searchParam'][] = $searchParam;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CapabilityStatementResource xmlns="http://hl7.org/fhir"></CapabilityStatementResource>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->profile) $this->profile->xmlSerialize(true, $sxe->addChild('profile'));
        if (null !== $this->documentation) $this->documentation->xmlSerialize(true, $sxe->addChild('documentation'));
        if (0 < count($this->interaction)) {
            foreach($this->interaction as $interaction) {
                $interaction->xmlSerialize(true, $sxe->addChild('interaction'));
            }
        }
        if (null !== $this->versioning) $this->versioning->xmlSerialize(true, $sxe->addChild('versioning'));
        if (null !== $this->readHistory) $this->readHistory->xmlSerialize(true, $sxe->addChild('readHistory'));
        if (null !== $this->updateCreate) $this->updateCreate->xmlSerialize(true, $sxe->addChild('updateCreate'));
        if (null !== $this->conditionalCreate) $this->conditionalCreate->xmlSerialize(true, $sxe->addChild('conditionalCreate'));
        if (null !== $this->conditionalRead) $this->conditionalRead->xmlSerialize(true, $sxe->addChild('conditionalRead'));
        if (null !== $this->conditionalUpdate) $this->conditionalUpdate->xmlSerialize(true, $sxe->addChild('conditionalUpdate'));
        if (null !== $this->conditionalDelete) $this->conditionalDelete->xmlSerialize(true, $sxe->addChild('conditionalDelete'));
        if (0 < count($this->referencePolicy)) {
            foreach($this->referencePolicy as $referencePolicy) {
                $referencePolicy->xmlSerialize(true, $sxe->addChild('referencePolicy'));
            }
        }
        if (0 < count($this->searchInclude)) {
            foreach($this->searchInclude as $searchInclude) {
                $searchInclude->xmlSerialize(true, $sxe->addChild('searchInclude'));
            }
        }
        if (0 < count($this->searchRevInclude)) {
            foreach($this->searchRevInclude as $searchRevInclude) {
                $searchRevInclude->xmlSerialize(true, $sxe->addChild('searchRevInclude'));
            }
        }
        if (0 < count($this->searchParam)) {
            foreach($this->searchParam as $searchParam) {
                $searchParam->xmlSerialize(true, $sxe->addChild('searchParam'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}