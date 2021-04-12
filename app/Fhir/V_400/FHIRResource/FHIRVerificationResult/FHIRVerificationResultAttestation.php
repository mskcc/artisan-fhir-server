<?php namespace Fhir\V_400\FHIRResource\FHIRVerificationResult;

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
 * Describes validation requirements, source(s), status and dates for one or more elements.
 */
class FHIRVerificationResultAttestation extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The individual or organization attesting to information.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $who = null;

    /**
     * When the who is asserting on behalf of another (organization or individual).
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $onBehalfOf = null;

    /**
     * The method by which attested information was submitted/retrieved (manual; API; Push).
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $communicationMethod = null;

    /**
     * The date the information was attested to.
     * @var \Fhir\V_400\FHIRElement\FHIRDate
     */
    public $date = null;

    /**
     * A digital identity certificate associated with the attestation source.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $sourceIdentityCertificate = null;

    /**
     * A digital identity certificate associated with the proxy entity submitting attested information on behalf of the attestation source.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $proxyIdentityCertificate = null;

    /**
     * Signed assertion by the proxy entity indicating that they have the right to submit attested information on behalf of the attestation source.
     * @var \Fhir\V_400\FHIRElement\FHIRSignature
     */
    public $proxySignature = null;

    /**
     * Signed assertion by the attestation source that they have attested to the information.
     * @var \Fhir\V_400\FHIRElement\FHIRSignature
     */
    public $sourceSignature = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'VerificationResult.Attestation';

    /**
     * The individual or organization attesting to information.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * The individual or organization attesting to information.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $who
     * @return $this
     */
    public function setWho($who)
    {
        $this->who = $who;
        return $this;
    }

    /**
     * When the who is asserting on behalf of another (organization or individual).
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getOnBehalfOf()
    {
        return $this->onBehalfOf;
    }

    /**
     * When the who is asserting on behalf of another (organization or individual).
     * @param \Fhir\V_400\FHIRElement\FHIRReference $onBehalfOf
     * @return $this
     */
    public function setOnBehalfOf($onBehalfOf)
    {
        $this->onBehalfOf = $onBehalfOf;
        return $this;
    }

    /**
     * The method by which attested information was submitted/retrieved (manual; API; Push).
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getCommunicationMethod()
    {
        return $this->communicationMethod;
    }

    /**
     * The method by which attested information was submitted/retrieved (manual; API; Push).
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $communicationMethod
     * @return $this
     */
    public function setCommunicationMethod($communicationMethod)
    {
        $this->communicationMethod = $communicationMethod;
        return $this;
    }

    /**
     * The date the information was attested to.
     * @return \Fhir\V_400\FHIRElement\FHIRDate
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date the information was attested to.
     * @param \Fhir\V_400\FHIRElement\FHIRDate $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * A digital identity certificate associated with the attestation source.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getSourceIdentityCertificate()
    {
        return $this->sourceIdentityCertificate;
    }

    /**
     * A digital identity certificate associated with the attestation source.
     * @param \Fhir\V_400\FHIRElement\FHIRString $sourceIdentityCertificate
     * @return $this
     */
    public function setSourceIdentityCertificate($sourceIdentityCertificate)
    {
        $this->sourceIdentityCertificate = $sourceIdentityCertificate;
        return $this;
    }

    /**
     * A digital identity certificate associated with the proxy entity submitting attested information on behalf of the attestation source.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getProxyIdentityCertificate()
    {
        return $this->proxyIdentityCertificate;
    }

    /**
     * A digital identity certificate associated with the proxy entity submitting attested information on behalf of the attestation source.
     * @param \Fhir\V_400\FHIRElement\FHIRString $proxyIdentityCertificate
     * @return $this
     */
    public function setProxyIdentityCertificate($proxyIdentityCertificate)
    {
        $this->proxyIdentityCertificate = $proxyIdentityCertificate;
        return $this;
    }

    /**
     * Signed assertion by the proxy entity indicating that they have the right to submit attested information on behalf of the attestation source.
     * @return \Fhir\V_400\FHIRElement\FHIRSignature
     */
    public function getProxySignature()
    {
        return $this->proxySignature;
    }

    /**
     * Signed assertion by the proxy entity indicating that they have the right to submit attested information on behalf of the attestation source.
     * @param \Fhir\V_400\FHIRElement\FHIRSignature $proxySignature
     * @return $this
     */
    public function setProxySignature($proxySignature)
    {
        $this->proxySignature = $proxySignature;
        return $this;
    }

    /**
     * Signed assertion by the attestation source that they have attested to the information.
     * @return \Fhir\V_400\FHIRElement\FHIRSignature
     */
    public function getSourceSignature()
    {
        return $this->sourceSignature;
    }

    /**
     * Signed assertion by the attestation source that they have attested to the information.
     * @param \Fhir\V_400\FHIRElement\FHIRSignature $sourceSignature
     * @return $this
     */
    public function setSourceSignature($sourceSignature)
    {
        $this->sourceSignature = $sourceSignature;
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
        if (null !== $this->who) $json['who'] = $this->who;
        if (null !== $this->onBehalfOf) $json['onBehalfOf'] = $this->onBehalfOf;
        if (null !== $this->communicationMethod) $json['communicationMethod'] = $this->communicationMethod;
        if (null !== $this->date) $json['date'] = $this->date;
        if (null !== $this->sourceIdentityCertificate) $json['sourceIdentityCertificate'] = $this->sourceIdentityCertificate;
        if (null !== $this->proxyIdentityCertificate) $json['proxyIdentityCertificate'] = $this->proxyIdentityCertificate;
        if (null !== $this->proxySignature) $json['proxySignature'] = $this->proxySignature;
        if (null !== $this->sourceSignature) $json['sourceSignature'] = $this->sourceSignature;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<VerificationResultAttestation xmlns="http://hl7.org/fhir"></VerificationResultAttestation>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->who) $this->who->xmlSerialize(true, $sxe->addChild('who'));
        if (null !== $this->onBehalfOf) $this->onBehalfOf->xmlSerialize(true, $sxe->addChild('onBehalfOf'));
        if (null !== $this->communicationMethod) $this->communicationMethod->xmlSerialize(true, $sxe->addChild('communicationMethod'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->sourceIdentityCertificate) $this->sourceIdentityCertificate->xmlSerialize(true, $sxe->addChild('sourceIdentityCertificate'));
        if (null !== $this->proxyIdentityCertificate) $this->proxyIdentityCertificate->xmlSerialize(true, $sxe->addChild('proxyIdentityCertificate'));
        if (null !== $this->proxySignature) $this->proxySignature->xmlSerialize(true, $sxe->addChild('proxySignature'));
        if (null !== $this->sourceSignature) $this->sourceSignature->xmlSerialize(true, $sxe->addChild('sourceSignature'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}