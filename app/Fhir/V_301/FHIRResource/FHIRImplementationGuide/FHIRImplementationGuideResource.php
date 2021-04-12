<?php namespace Fhir\V_301\FHIRResource\FHIRImplementationGuide;

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
 * A set of rules of how FHIR is used to solve a particular problem. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 */
class FHIRImplementationGuideResource extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Whether a resource is included in the guide as part of the rules defined by the guide, or just as an example of a resource that conforms to the rules and/or help implementers understand the intent of the guide.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $example = null;

    /**
     * A human assigned name for the resource. All resources SHOULD have a name, but the name may be extracted from the resource (e.g. ValueSet.name).
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A description of the reason that a resource has been included in the implementation guide.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * A short code that may be used to identify the resource throughout the implementation guide.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $acronym = null;

    /**
     * Where this resource is found. (choose any one of source*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRUri
     */
    public $sourceUri = null;

    /**
     * Where this resource is found. (choose any one of source*, but only one)
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $sourceReference = null;

    /**
     * Another resource that this resource is an example for. This is mostly used for resources that are included as examples of StructureDefinitions.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $exampleFor = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ImplementationGuide.Resource';

    /**
     * Whether a resource is included in the guide as part of the rules defined by the guide, or just as an example of a resource that conforms to the rules and/or help implementers understand the intent of the guide.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * Whether a resource is included in the guide as part of the rules defined by the guide, or just as an example of a resource that conforms to the rules and/or help implementers understand the intent of the guide.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $example
     * @return $this
     */
    public function setExample($example)
    {
        $this->example = $example;
        return $this;
    }

    /**
     * A human assigned name for the resource. All resources SHOULD have a name, but the name may be extracted from the resource (e.g. ValueSet.name).
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A human assigned name for the resource. All resources SHOULD have a name, but the name may be extracted from the resource (e.g. ValueSet.name).
     * @param \Fhir\V_301\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A description of the reason that a resource has been included in the implementation guide.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of the reason that a resource has been included in the implementation guide.
     * @param \Fhir\V_301\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * A short code that may be used to identify the resource throughout the implementation guide.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getAcronym()
    {
        return $this->acronym;
    }

    /**
     * A short code that may be used to identify the resource throughout the implementation guide.
     * @param \Fhir\V_301\FHIRElement\FHIRString $acronym
     * @return $this
     */
    public function setAcronym($acronym)
    {
        $this->acronym = $acronym;
        return $this;
    }

    /**
     * Where this resource is found. (choose any one of source*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRUri
     */
    public function getSourceUri()
    {
        return $this->sourceUri;
    }

    /**
     * Where this resource is found. (choose any one of source*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRUri $sourceUri
     * @return $this
     */
    public function setSourceUri($sourceUri)
    {
        $this->sourceUri = $sourceUri;
        return $this;
    }

    /**
     * Where this resource is found. (choose any one of source*, but only one)
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getSourceReference()
    {
        return $this->sourceReference;
    }

    /**
     * Where this resource is found. (choose any one of source*, but only one)
     * @param \Fhir\V_301\FHIRElement\FHIRReference $sourceReference
     * @return $this
     */
    public function setSourceReference($sourceReference)
    {
        $this->sourceReference = $sourceReference;
        return $this;
    }

    /**
     * Another resource that this resource is an example for. This is mostly used for resources that are included as examples of StructureDefinitions.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getExampleFor()
    {
        return $this->exampleFor;
    }

    /**
     * Another resource that this resource is an example for. This is mostly used for resources that are included as examples of StructureDefinitions.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $exampleFor
     * @return $this
     */
    public function setExampleFor($exampleFor)
    {
        $this->exampleFor = $exampleFor;
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
        if (null !== $this->example) $json['example'] = $this->example;
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->acronym) $json['acronym'] = $this->acronym;
        if (null !== $this->sourceUri) $json['sourceUri'] = $this->sourceUri;
        if (null !== $this->sourceReference) $json['sourceReference'] = $this->sourceReference;
        if (null !== $this->exampleFor) $json['exampleFor'] = $this->exampleFor;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImplementationGuideResource xmlns="http://hl7.org/fhir"></ImplementationGuideResource>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->example) $this->example->xmlSerialize(true, $sxe->addChild('example'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->acronym) $this->acronym->xmlSerialize(true, $sxe->addChild('acronym'));
        if (null !== $this->sourceUri) $this->sourceUri->xmlSerialize(true, $sxe->addChild('sourceUri'));
        if (null !== $this->sourceReference) $this->sourceReference->xmlSerialize(true, $sxe->addChild('sourceReference'));
        if (null !== $this->exampleFor) $this->exampleFor->xmlSerialize(true, $sxe->addChild('exampleFor'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}