<?php namespace Fhir\V_301\FHIRResource\FHIRClaim;

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
 * A provider issued list of services and products provided, or to be provided, to a patient which is provided to an insurer for payment recovery.
 */
class FHIRClaimInsurance extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Sequence of coverage which serves to provide a link and convey coordination of benefit order.
     * @var \Fhir\V_301\FHIRElement\FHIRPositiveInt
     */
    public $sequence = null;

    /**
     * A flag to indicate that this Coverage is the focus for adjudication. The Coverage against which the claim is to be adjudicated.
     * @var \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public $focal = null;

    /**
     * Reference to the program or plan identification, underwriter or payor.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $coverage = null;

    /**
     * The contract number of a business agreement which describes the terms and conditions.
     * @var \Fhir\V_301\FHIRElement\FHIRString
     */
    public $businessArrangement = null;

    /**
     * A list of references from the Insurer to which these services pertain.
     * @var \Fhir\V_301\FHIRElement\FHIRString[]
     */
    public $preAuthRef = array();

    /**
     * The Coverages adjudication details.
     * @var \Fhir\V_301\FHIRElement\FHIRReference
     */
    public $claimResponse = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Claim.Insurance';

    /**
     * Sequence of coverage which serves to provide a link and convey coordination of benefit order.
     * @return \Fhir\V_301\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sequence of coverage which serves to provide a link and convey coordination of benefit order.
     * @param \Fhir\V_301\FHIRElement\FHIRPositiveInt $sequence
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * A flag to indicate that this Coverage is the focus for adjudication. The Coverage against which the claim is to be adjudicated.
     * @return \Fhir\V_301\FHIRElement\FHIRBoolean
     */
    public function getFocal()
    {
        return $this->focal;
    }

    /**
     * A flag to indicate that this Coverage is the focus for adjudication. The Coverage against which the claim is to be adjudicated.
     * @param \Fhir\V_301\FHIRElement\FHIRBoolean $focal
     * @return $this
     */
    public function setFocal($focal)
    {
        $this->focal = $focal;
        return $this;
    }

    /**
     * Reference to the program or plan identification, underwriter or payor.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Reference to the program or plan identification, underwriter or payor.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $coverage
     * @return $this
     */
    public function setCoverage($coverage)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * The contract number of a business agreement which describes the terms and conditions.
     * @return \Fhir\V_301\FHIRElement\FHIRString
     */
    public function getBusinessArrangement()
    {
        return $this->businessArrangement;
    }

    /**
     * The contract number of a business agreement which describes the terms and conditions.
     * @param \Fhir\V_301\FHIRElement\FHIRString $businessArrangement
     * @return $this
     */
    public function setBusinessArrangement($businessArrangement)
    {
        $this->businessArrangement = $businessArrangement;
        return $this;
    }

    /**
     * A list of references from the Insurer to which these services pertain.
     * @return \Fhir\V_301\FHIRElement\FHIRString[]
     */
    public function getPreAuthRef()
    {
        return $this->preAuthRef;
    }

    /**
     * A list of references from the Insurer to which these services pertain.
     * @param \Fhir\V_301\FHIRElement\FHIRString $preAuthRef
     * @return $this
     */
    public function addPreAuthRef($preAuthRef)
    {
        $this->preAuthRef[] = $preAuthRef;
        return $this;
    }

    /**
     * The Coverages adjudication details.
     * @return \Fhir\V_301\FHIRElement\FHIRReference
     */
    public function getClaimResponse()
    {
        return $this->claimResponse;
    }

    /**
     * The Coverages adjudication details.
     * @param \Fhir\V_301\FHIRElement\FHIRReference $claimResponse
     * @return $this
     */
    public function setClaimResponse($claimResponse)
    {
        $this->claimResponse = $claimResponse;
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
        if (null !== $this->sequence) $json['sequence'] = $this->sequence;
        if (null !== $this->focal) $json['focal'] = $this->focal;
        if (null !== $this->coverage) $json['coverage'] = $this->coverage;
        if (null !== $this->businessArrangement) $json['businessArrangement'] = $this->businessArrangement;
        if (0 < count($this->preAuthRef)) {
            $json['preAuthRef'] = [];
            foreach($this->preAuthRef as $preAuthRef) {
                $json['preAuthRef'][] = $preAuthRef;
            }
        }
        if (null !== $this->claimResponse) $json['claimResponse'] = $this->claimResponse;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClaimInsurance xmlns="http://hl7.org/fhir"></ClaimInsurance>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->sequence) $this->sequence->xmlSerialize(true, $sxe->addChild('sequence'));
        if (null !== $this->focal) $this->focal->xmlSerialize(true, $sxe->addChild('focal'));
        if (null !== $this->coverage) $this->coverage->xmlSerialize(true, $sxe->addChild('coverage'));
        if (null !== $this->businessArrangement) $this->businessArrangement->xmlSerialize(true, $sxe->addChild('businessArrangement'));
        if (0 < count($this->preAuthRef)) {
            foreach($this->preAuthRef as $preAuthRef) {
                $preAuthRef->xmlSerialize(true, $sxe->addChild('preAuthRef'));
            }
        }
        if (null !== $this->claimResponse) $this->claimResponse->xmlSerialize(true, $sxe->addChild('claimResponse'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}