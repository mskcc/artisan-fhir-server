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
 * A photo, video, or audio recording acquired or used in healthcare. The actual content may be inline or provided by direct reference.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedia extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
     * @var \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $basedOn = array();

    /**
     * A larger event of which this particular event is a component or step.
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $partOf = array();

    /**
     * The current state of the {{title}}.
     * @var \Fhir\V_400\FHIRElement\FHIREventStatus
     */
    public $status = null;

    /**
     * A code that classifies whether the media is an image, video or audio recording or some other media category.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $modality = null;

    /**
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $view = null;

    /**
     * Who/What this Media is a record of.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The encounter that establishes the context for this media.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public $createdDateTime = null;

    /**
     * @var \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public $createdPeriod = null;

    /**
     * The date and time this version of the media was made available to providers, typically after having been reviewed.
     * @var \Fhir\V_400\FHIRElement\FHIRInstant
     */
    public $issued = null;

    /**
     * The person who administered the collection of the image.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $operator = null;

    /**
     * Describes why the event occurred in coded or textual form.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = array();

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * The name of the device / manufacturer of the device  that was used to make the recording.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $deviceName = null;

    /**
     * The device used to collect the media.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * Height of the image in pixels (photo/video).
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public $height = null;

    /**
     * Width of the image in pixels (photo/video).
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public $width = null;

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @var \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public $frames = null;

    /**
     * The duration of the recording in seconds - for audio and video.
     * @var \Fhir\V_400\FHIRElement\FHIRDecimal
     */
    public $duration = null;

    /**
     * The actual content of the media - inline or by direct reference to the media source file.
     * @var \Fhir\V_400\FHIRElement\FHIRAttachment
     */
    public $content = null;

    /**
     * Comments made about the media by the performer, subject or other participants.
     * @var \Fhir\V_400\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Media';

    /**
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
     * @return \Fhir\V_400\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
     * @param \Fhir\V_400\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A larger event of which this particular event is a component or step.
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * A larger event of which this particular event is a component or step.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function addPartOf($partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * The current state of the {{title}}.
     * @return \Fhir\V_400\FHIRElement\FHIREventStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The current state of the {{title}}.
     * @param \Fhir\V_400\FHIRElement\FHIREventStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A code that classifies whether the media is an image, video or audio recording or some other media category.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A code that classifies whether the media is an image, video or audio recording or some other media category.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $modality
     * @return $this
     */
    public function setModality($modality)
    {
        $this->modality = $modality;
        return $this;
    }

    /**
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $view
     * @return $this
     */
    public function setView($view)
    {
        $this->view = $view;
        return $this;
    }

    /**
     * Who/What this Media is a record of.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Who/What this Media is a record of.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The encounter that establishes the context for this media.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * The encounter that establishes the context for this media.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRDateTime
     */
    public function getCreatedDateTime()
    {
        return $this->createdDateTime;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRDateTime $createdDateTime
     * @return $this
     */
    public function setCreatedDateTime($createdDateTime)
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    /**
     * @return \Fhir\V_400\FHIRElement\FHIRPeriod
     */
    public function getCreatedPeriod()
    {
        return $this->createdPeriod;
    }

    /**
     * @param \Fhir\V_400\FHIRElement\FHIRPeriod $createdPeriod
     * @return $this
     */
    public function setCreatedPeriod($createdPeriod)
    {
        $this->createdPeriod = $createdPeriod;
        return $this;
    }

    /**
     * The date and time this version of the media was made available to providers, typically after having been reviewed.
     * @return \Fhir\V_400\FHIRElement\FHIRInstant
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * The date and time this version of the media was made available to providers, typically after having been reviewed.
     * @param \Fhir\V_400\FHIRElement\FHIRInstant $issued
     * @return $this
     */
    public function setIssued($issued)
    {
        $this->issued = $issued;
        return $this;
    }

    /**
     * The person who administered the collection of the image.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * The person who administered the collection of the image.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $operator
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Describes why the event occurred in coded or textual form.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Describes why the event occurred in coded or textual form.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $bodySite
     * @return $this
     */
    public function setBodySite($bodySite)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * The name of the device / manufacturer of the device  that was used to make the recording.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * The name of the device / manufacturer of the device  that was used to make the recording.
     * @param \Fhir\V_400\FHIRElement\FHIRString $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * The device used to collect the media.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The device used to collect the media.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Height of the image in pixels (photo/video).
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Height of the image in pixels (photo/video).
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Width of the image in pixels (photo/video).
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Width of the image in pixels (photo/video).
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @return \Fhir\V_400\FHIRElement\FHIRPositiveInt
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @param \Fhir\V_400\FHIRElement\FHIRPositiveInt $frames
     * @return $this
     */
    public function setFrames($frames)
    {
        $this->frames = $frames;
        return $this;
    }

    /**
     * The duration of the recording in seconds - for audio and video.
     * @return \Fhir\V_400\FHIRElement\FHIRDecimal
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * The duration of the recording in seconds - for audio and video.
     * @param \Fhir\V_400\FHIRElement\FHIRDecimal $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * The actual content of the media - inline or by direct reference to the media source file.
     * @return \Fhir\V_400\FHIRElement\FHIRAttachment
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * The actual content of the media - inline or by direct reference to the media source file.
     * @param \Fhir\V_400\FHIRElement\FHIRAttachment $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Comments made about the media by the performer, subject or other participants.
     * @return \Fhir\V_400\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Comments made about the media by the performer, subject or other participants.
     * @param \Fhir\V_400\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
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
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (0 < count($this->basedOn)) {
            $json['basedOn'] = [];
            foreach($this->basedOn as $basedOn) {
                $json['basedOn'][] = $basedOn;
            }
        }
        if (0 < count($this->partOf)) {
            $json['partOf'] = [];
            foreach($this->partOf as $partOf) {
                $json['partOf'][] = $partOf;
            }
        }
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->modality) $json['modality'] = $this->modality;
        if (null !== $this->view) $json['view'] = $this->view;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->encounter) $json['encounter'] = $this->encounter;
        if (null !== $this->createdDateTime) $json['createdDateTime'] = $this->createdDateTime;
        if (null !== $this->createdPeriod) $json['createdPeriod'] = $this->createdPeriod;
        if (null !== $this->issued) $json['issued'] = $this->issued;
        if (null !== $this->operator) $json['operator'] = $this->operator;
        if (0 < count($this->reasonCode)) {
            $json['reasonCode'] = [];
            foreach($this->reasonCode as $reasonCode) {
                $json['reasonCode'][] = $reasonCode;
            }
        }
        if (null !== $this->bodySite) $json['bodySite'] = $this->bodySite;
        if (null !== $this->deviceName) $json['deviceName'] = $this->deviceName;
        if (null !== $this->device) $json['device'] = $this->device;
        if (null !== $this->height) $json['height'] = $this->height;
        if (null !== $this->width) $json['width'] = $this->width;
        if (null !== $this->frames) $json['frames'] = $this->frames;
        if (null !== $this->duration) $json['duration'] = $this->duration;
        if (null !== $this->content) $json['content'] = $this->content;
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = $note;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Media xmlns="http://hl7.org/fhir"></Media>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->basedOn)) {
            foreach($this->basedOn as $basedOn) {
                $basedOn->xmlSerialize(true, $sxe->addChild('basedOn'));
            }
        }
        if (0 < count($this->partOf)) {
            foreach($this->partOf as $partOf) {
                $partOf->xmlSerialize(true, $sxe->addChild('partOf'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->modality) $this->modality->xmlSerialize(true, $sxe->addChild('modality'));
        if (null !== $this->view) $this->view->xmlSerialize(true, $sxe->addChild('view'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->encounter) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (null !== $this->createdDateTime) $this->createdDateTime->xmlSerialize(true, $sxe->addChild('createdDateTime'));
        if (null !== $this->createdPeriod) $this->createdPeriod->xmlSerialize(true, $sxe->addChild('createdPeriod'));
        if (null !== $this->issued) $this->issued->xmlSerialize(true, $sxe->addChild('issued'));
        if (null !== $this->operator) $this->operator->xmlSerialize(true, $sxe->addChild('operator'));
        if (0 < count($this->reasonCode)) {
            foreach($this->reasonCode as $reasonCode) {
                $reasonCode->xmlSerialize(true, $sxe->addChild('reasonCode'));
            }
        }
        if (null !== $this->bodySite) $this->bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
        if (null !== $this->deviceName) $this->deviceName->xmlSerialize(true, $sxe->addChild('deviceName'));
        if (null !== $this->device) $this->device->xmlSerialize(true, $sxe->addChild('device'));
        if (null !== $this->height) $this->height->xmlSerialize(true, $sxe->addChild('height'));
        if (null !== $this->width) $this->width->xmlSerialize(true, $sxe->addChild('width'));
        if (null !== $this->frames) $this->frames->xmlSerialize(true, $sxe->addChild('frames'));
        if (null !== $this->duration) $this->duration->xmlSerialize(true, $sxe->addChild('duration'));
        if (null !== $this->content) $this->content->xmlSerialize(true, $sxe->addChild('content'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}