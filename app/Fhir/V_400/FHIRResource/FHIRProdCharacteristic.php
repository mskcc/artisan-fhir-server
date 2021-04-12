<?php namespace Fhir\V_400\FHIRResource;

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
 * The marketing status describes the date when a medicinal product is actually put on the market or the date as of which it is no longer available.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRProdCharacteristic extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Where applicable, the height can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $height = null;

    /**
     * Where applicable, the width can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $width = null;

    /**
     * Where applicable, the depth can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $depth = null;

    /**
     * Where applicable, the weight can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $weight = null;

    /**
     * Where applicable, the nominal volume can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $nominalVolume = null;

    /**
     * Where applicable, the external diameter can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $externalDiameter = null;

    /**
     * Where applicable, the shape can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @var \Fhir\V_400\FHIRElement\FHIRString
     */
    public $shape = null;

    /**
     * Where applicable, the color can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @var \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public $color = array();

    /**
     * Where applicable, the imprint can be specified as text.
     * @var \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public $imprint = array();

    /**
     * Where applicable, the image can be provided The format of the image attachment shall be specified by regional implementations.
     * @var \Fhir\V_400\FHIRElement\FHIRAttachment[]
     */
    public $image = array();

    /**
     * Where applicable, the scoring can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $scoring = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ProdCharacteristic';

    /**
     * Where applicable, the height can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Where applicable, the height can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Where applicable, the width can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Where applicable, the width can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Where applicable, the depth can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Where applicable, the depth can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity $depth
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
        return $this;
    }

    /**
     * Where applicable, the weight can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Where applicable, the weight can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Where applicable, the nominal volume can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public function getNominalVolume()
    {
        return $this->nominalVolume;
    }

    /**
     * Where applicable, the nominal volume can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity $nominalVolume
     * @return $this
     */
    public function setNominalVolume($nominalVolume)
    {
        $this->nominalVolume = $nominalVolume;
        return $this;
    }

    /**
     * Where applicable, the external diameter can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public function getExternalDiameter()
    {
        return $this->externalDiameter;
    }

    /**
     * Where applicable, the external diameter can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity $externalDiameter
     * @return $this
     */
    public function setExternalDiameter($externalDiameter)
    {
        $this->externalDiameter = $externalDiameter;
        return $this;
    }

    /**
     * Where applicable, the shape can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @return \Fhir\V_400\FHIRElement\FHIRString
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * Where applicable, the shape can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @param \Fhir\V_400\FHIRElement\FHIRString $shape
     * @return $this
     */
    public function setShape($shape)
    {
        $this->shape = $shape;
        return $this;
    }

    /**
     * Where applicable, the color can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @return \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Where applicable, the color can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @param \Fhir\V_400\FHIRElement\FHIRString $color
     * @return $this
     */
    public function addColor($color)
    {
        $this->color[] = $color;
        return $this;
    }

    /**
     * Where applicable, the imprint can be specified as text.
     * @return \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public function getImprint()
    {
        return $this->imprint;
    }

    /**
     * Where applicable, the imprint can be specified as text.
     * @param \Fhir\V_400\FHIRElement\FHIRString $imprint
     * @return $this
     */
    public function addImprint($imprint)
    {
        $this->imprint[] = $imprint;
        return $this;
    }

    /**
     * Where applicable, the image can be provided The format of the image attachment shall be specified by regional implementations.
     * @return \Fhir\V_400\FHIRElement\FHIRAttachment[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Where applicable, the image can be provided The format of the image attachment shall be specified by regional implementations.
     * @param \Fhir\V_400\FHIRElement\FHIRAttachment $image
     * @return $this
     */
    public function addImage($image)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * Where applicable, the scoring can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getScoring()
    {
        return $this->scoring;
    }

    /**
     * Where applicable, the scoring can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $scoring
     * @return $this
     */
    public function setScoring($scoring)
    {
        $this->scoring = $scoring;
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
        if (null !== $this->height) $json['height'] = $this->height;
        if (null !== $this->width) $json['width'] = $this->width;
        if (null !== $this->depth) $json['depth'] = $this->depth;
        if (null !== $this->weight) $json['weight'] = $this->weight;
        if (null !== $this->nominalVolume) $json['nominalVolume'] = $this->nominalVolume;
        if (null !== $this->externalDiameter) $json['externalDiameter'] = $this->externalDiameter;
        if (null !== $this->shape) $json['shape'] = $this->shape;
        if (0 < count($this->color)) {
            $json['color'] = [];
            foreach($this->color as $color) {
                $json['color'][] = $color;
            }
        }
        if (0 < count($this->imprint)) {
            $json['imprint'] = [];
            foreach($this->imprint as $imprint) {
                $json['imprint'][] = $imprint;
            }
        }
        if (0 < count($this->image)) {
            $json['image'] = [];
            foreach($this->image as $image) {
                $json['image'][] = $image;
            }
        }
        if (null !== $this->scoring) $json['scoring'] = $this->scoring;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProdCharacteristic xmlns="http://hl7.org/fhir"></ProdCharacteristic>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->height) $this->height->xmlSerialize(true, $sxe->addChild('height'));
        if (null !== $this->width) $this->width->xmlSerialize(true, $sxe->addChild('width'));
        if (null !== $this->depth) $this->depth->xmlSerialize(true, $sxe->addChild('depth'));
        if (null !== $this->weight) $this->weight->xmlSerialize(true, $sxe->addChild('weight'));
        if (null !== $this->nominalVolume) $this->nominalVolume->xmlSerialize(true, $sxe->addChild('nominalVolume'));
        if (null !== $this->externalDiameter) $this->externalDiameter->xmlSerialize(true, $sxe->addChild('externalDiameter'));
        if (null !== $this->shape) $this->shape->xmlSerialize(true, $sxe->addChild('shape'));
        if (0 < count($this->color)) {
            foreach($this->color as $color) {
                $color->xmlSerialize(true, $sxe->addChild('color'));
            }
        }
        if (0 < count($this->imprint)) {
            foreach($this->imprint as $imprint) {
                $imprint->xmlSerialize(true, $sxe->addChild('imprint'));
            }
        }
        if (0 < count($this->image)) {
            foreach($this->image as $image) {
                $image->xmlSerialize(true, $sxe->addChild('image'));
            }
        }
        if (null !== $this->scoring) $this->scoring->xmlSerialize(true, $sxe->addChild('scoring'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}