<?php namespace Fhir\V_400\FHIRResource\FHIRImplementationGuide;

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
 * A set of rules of how a particular interoperability or standards problem is solved - typically through the use of FHIR resources. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 */
class FHIRImplementationGuidePage extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * @var \Fhir\V_400\FHIRElement\FHIRUrl
     */
    public $nameUrl = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $nameReference = null;

    /**
     * A short title used to represent this page in navigational structures such as table of contents, bread crumbs, etc.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * A code that indicates how the page is generated.
     * @var \Fhir\V_400\FHIRElement\FHIRGuidePageGeneration
     */
    public $generation = null;

    /**
     * Nested Pages/Sections under this page.
     * @var \Fhir\V_400\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuidePage[]
     */
    public $page = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ImplementationGuide.Page';

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRUrl
     */
    public function getNameUrl()
    {
        return $this->nameUrl;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRUrl $nameUrl
     * @return $this
     */
    public function setNameUrl($nameUrl)
    {
        $this->nameUrl = $nameUrl;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getNameReference()
    {
        return $this->nameReference;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRReference $nameReference
     * @return $this
     */
    public function setNameReference($nameReference)
    {
        $this->nameReference = $nameReference;
        return $this;
    }

    /**
     * A short title used to represent this page in navigational structures such as table of contents, bread crumbs, etc.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A short title used to represent this page in navigational structures such as table of contents, bread crumbs, etc.
     * @param \Fhir\V_400\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * A code that indicates how the page is generated.
     * @return \Fhir\V_400\FHIRElement\FHIRGuidePageGeneration
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * A code that indicates how the page is generated.
     * @param \Fhir\V_400\FHIRElement\FHIRGuidePageGeneration $generation
     * @return $this
     */
    public function setGeneration($generation)
    {
        $this->generation = $generation;
        return $this;
    }

    /**
     * Nested Pages/Sections under this page.
     * @return \Fhir\V_400\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuidePage[]
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Nested Pages/Sections under this page.
     * @param \Fhir\V_400\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuidePage $page
     * @return $this
     */
    public function addPage($page)
    {
        $this->page[] = $page;
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
        if (null !== $this->nameUrl) $json['nameUrl'] = $this->nameUrl;
        if (null !== $this->nameReference) $json['nameReference'] = $this->nameReference;
        if (null !== $this->title) $json['title'] = $this->title;
        if (null !== $this->generation) $json['generation'] = $this->generation;
        if (0 < count($this->page)) {
            $json['page'] = [];
            foreach($this->page as $page) {
                $json['page'][] = $page;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImplementationGuidePage xmlns="http://hl7.org/fhir"></ImplementationGuidePage>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->nameUrl) $this->nameUrl->xmlSerialize(true, $sxe->addChild('nameUrl'));
        if (null !== $this->nameReference) $this->nameReference->xmlSerialize(true, $sxe->addChild('nameReference'));
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (null !== $this->generation) $this->generation->xmlSerialize(true, $sxe->addChild('generation'));
        if (0 < count($this->page)) {
            foreach($this->page as $page) {
                $page->xmlSerialize(true, $sxe->addChild('page'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}