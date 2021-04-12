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
 * Information about a medication that is used to support knowledge.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicationKnowledge extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A code that specifies this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * A code to indicate if the medication is in active use.  The status refers to the validity about the information of the medication and not to its medicinal properties.
     * @var \Fhir\V_400\FHIRElement\FHIRCode
     */
    public $status = null;

    /**
     * Describes the details of the manufacturer of the medication product.  This is not intended to represent the distributor of a medication product.
     * @var \Fhir\V_400\FHIRElement\FHIRReference
     */
    public $manufacturer = null;

    /**
     * Describes the form of the item.  Powder; tablets; capsule.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public $doseForm = null;

    /**
     * Specific amount of the drug in the packaged product.  For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc.).
     * @var \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public $amount = null;

    /**
     * Additional names for a medication, for example, the name(s) given to a medication in different countries.  For example, acetaminophen and paracetamol or salbutamol and albuterol.
     * @var \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public $synonym = array();

    /**
     * Associated or related knowledge about a medication.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge[]
     */
    public $relatedMedicationKnowledge = array();

    /**
     * Associated or related medications.  For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor).
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $associatedMedication = array();

    /**
     * Category of the medication or product (e.g. branded product, therapeutic moeity, generic product, innovator product, etc.).
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $productType = array();

    /**
     * Associated documentation about the medication.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph[]
     */
    public $monograph = array();

    /**
     * Identifies a particular constituent of interest in the product.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient[]
     */
    public $ingredient = array();

    /**
     * The instructions for preparing the medication.
     * @var \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public $preparationInstruction = null;

    /**
     * The intended or approved route of administration.
     * @var \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public $intendedRoute = array();

    /**
     * The price of the medication.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost[]
     */
    public $cost = array();

    /**
     * The program under which the medication is reviewed.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram[]
     */
    public $monitoringProgram = array();

    /**
     * Guidelines for the administration of the medication.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines[]
     */
    public $administrationGuidelines = array();

    /**
     * Categorization of the medication within a formulary or classification system.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification[]
     */
    public $medicineClassification = array();

    /**
     * Information that only applies to packages (not products).
     * @var \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging
     */
    public $packaging = null;

    /**
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic[]
     */
    public $drugCharacteristic = array();

    /**
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     * @var \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public $contraindication = array();

    /**
     * Regulatory information about a medication.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory[]
     */
    public $regulatory = array();

    /**
     * The time course of drug absorption, distribution, metabolism and excretion of a medication from the body.
     * @var \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics[]
     */
    public $kinetics = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationKnowledge';

    /**
     * A code that specifies this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A code that specifies this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A code to indicate if the medication is in active use.  The status refers to the validity about the information of the medication and not to its medicinal properties.
     * @return \Fhir\V_400\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code to indicate if the medication is in active use.  The status refers to the validity about the information of the medication and not to its medicinal properties.
     * @param \Fhir\V_400\FHIRElement\FHIRCode $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Describes the details of the manufacturer of the medication product.  This is not intended to represent the distributor of a medication product.
     * @return \Fhir\V_400\FHIRElement\FHIRReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Describes the details of the manufacturer of the medication product.  This is not intended to represent the distributor of a medication product.
     * @param \Fhir\V_400\FHIRElement\FHIRReference $manufacturer
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Describes the form of the item.  Powder; tablets; capsule.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseForm()
    {
        return $this->doseForm;
    }

    /**
     * Describes the form of the item.  Powder; tablets; capsule.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $doseForm
     * @return $this
     */
    public function setDoseForm($doseForm)
    {
        $this->doseForm = $doseForm;
        return $this;
    }

    /**
     * Specific amount of the drug in the packaged product.  For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc.).
     * @return \Fhir\V_400\FHIRElement\FHIRQuantity
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Specific amount of the drug in the packaged product.  For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc.).
     * @param \Fhir\V_400\FHIRElement\FHIRQuantity $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Additional names for a medication, for example, the name(s) given to a medication in different countries.  For example, acetaminophen and paracetamol or salbutamol and albuterol.
     * @return \Fhir\V_400\FHIRElement\FHIRString[]
     */
    public function getSynonym()
    {
        return $this->synonym;
    }

    /**
     * Additional names for a medication, for example, the name(s) given to a medication in different countries.  For example, acetaminophen and paracetamol or salbutamol and albuterol.
     * @param \Fhir\V_400\FHIRElement\FHIRString $synonym
     * @return $this
     */
    public function addSynonym($synonym)
    {
        $this->synonym[] = $synonym;
        return $this;
    }

    /**
     * Associated or related knowledge about a medication.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge[]
     */
    public function getRelatedMedicationKnowledge()
    {
        return $this->relatedMedicationKnowledge;
    }

    /**
     * Associated or related knowledge about a medication.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge $relatedMedicationKnowledge
     * @return $this
     */
    public function addRelatedMedicationKnowledge($relatedMedicationKnowledge)
    {
        $this->relatedMedicationKnowledge[] = $relatedMedicationKnowledge;
        return $this;
    }

    /**
     * Associated or related medications.  For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor).
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getAssociatedMedication()
    {
        return $this->associatedMedication;
    }

    /**
     * Associated or related medications.  For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor).
     * @param \Fhir\V_400\FHIRElement\FHIRReference $associatedMedication
     * @return $this
     */
    public function addAssociatedMedication($associatedMedication)
    {
        $this->associatedMedication[] = $associatedMedication;
        return $this;
    }

    /**
     * Category of the medication or product (e.g. branded product, therapeutic moeity, generic product, innovator product, etc.).
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Category of the medication or product (e.g. branded product, therapeutic moeity, generic product, innovator product, etc.).
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $productType
     * @return $this
     */
    public function addProductType($productType)
    {
        $this->productType[] = $productType;
        return $this;
    }

    /**
     * Associated documentation about the medication.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph[]
     */
    public function getMonograph()
    {
        return $this->monograph;
    }

    /**
     * Associated documentation about the medication.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph $monograph
     * @return $this
     */
    public function addMonograph($monograph)
    {
        $this->monograph[] = $monograph;
        return $this;
    }

    /**
     * Identifies a particular constituent of interest in the product.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Identifies a particular constituent of interest in the product.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient $ingredient
     * @return $this
     */
    public function addIngredient($ingredient)
    {
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * The instructions for preparing the medication.
     * @return \Fhir\V_400\FHIRElement\FHIRMarkdown
     */
    public function getPreparationInstruction()
    {
        return $this->preparationInstruction;
    }

    /**
     * The instructions for preparing the medication.
     * @param \Fhir\V_400\FHIRElement\FHIRMarkdown $preparationInstruction
     * @return $this
     */
    public function setPreparationInstruction($preparationInstruction)
    {
        $this->preparationInstruction = $preparationInstruction;
        return $this;
    }

    /**
     * The intended or approved route of administration.
     * @return \Fhir\V_400\FHIRElement\FHIRCodeableConcept[]
     */
    public function getIntendedRoute()
    {
        return $this->intendedRoute;
    }

    /**
     * The intended or approved route of administration.
     * @param \Fhir\V_400\FHIRElement\FHIRCodeableConcept $intendedRoute
     * @return $this
     */
    public function addIntendedRoute($intendedRoute)
    {
        $this->intendedRoute[] = $intendedRoute;
        return $this;
    }

    /**
     * The price of the medication.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost[]
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * The price of the medication.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost $cost
     * @return $this
     */
    public function addCost($cost)
    {
        $this->cost[] = $cost;
        return $this;
    }

    /**
     * The program under which the medication is reviewed.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram[]
     */
    public function getMonitoringProgram()
    {
        return $this->monitoringProgram;
    }

    /**
     * The program under which the medication is reviewed.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram $monitoringProgram
     * @return $this
     */
    public function addMonitoringProgram($monitoringProgram)
    {
        $this->monitoringProgram[] = $monitoringProgram;
        return $this;
    }

    /**
     * Guidelines for the administration of the medication.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines[]
     */
    public function getAdministrationGuidelines()
    {
        return $this->administrationGuidelines;
    }

    /**
     * Guidelines for the administration of the medication.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines $administrationGuidelines
     * @return $this
     */
    public function addAdministrationGuidelines($administrationGuidelines)
    {
        $this->administrationGuidelines[] = $administrationGuidelines;
        return $this;
    }

    /**
     * Categorization of the medication within a formulary or classification system.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification[]
     */
    public function getMedicineClassification()
    {
        return $this->medicineClassification;
    }

    /**
     * Categorization of the medication within a formulary or classification system.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification $medicineClassification
     * @return $this
     */
    public function addMedicineClassification($medicineClassification)
    {
        $this->medicineClassification[] = $medicineClassification;
        return $this;
    }

    /**
     * Information that only applies to packages (not products).
     * @return \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging
     */
    public function getPackaging()
    {
        return $this->packaging;
    }

    /**
     * Information that only applies to packages (not products).
     * @param \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging $packaging
     * @return $this
     */
    public function setPackaging($packaging)
    {
        $this->packaging = $packaging;
        return $this;
    }

    /**
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic[]
     */
    public function getDrugCharacteristic()
    {
        return $this->drugCharacteristic;
    }

    /**
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic $drugCharacteristic
     * @return $this
     */
    public function addDrugCharacteristic($drugCharacteristic)
    {
        $this->drugCharacteristic[] = $drugCharacteristic;
        return $this;
    }

    /**
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     * @return \Fhir\V_400\FHIRElement\FHIRReference[]
     */
    public function getContraindication()
    {
        return $this->contraindication;
    }

    /**
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     * @param \Fhir\V_400\FHIRElement\FHIRReference $contraindication
     * @return $this
     */
    public function addContraindication($contraindication)
    {
        $this->contraindication[] = $contraindication;
        return $this;
    }

    /**
     * Regulatory information about a medication.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory[]
     */
    public function getRegulatory()
    {
        return $this->regulatory;
    }

    /**
     * Regulatory information about a medication.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory $regulatory
     * @return $this
     */
    public function addRegulatory($regulatory)
    {
        $this->regulatory[] = $regulatory;
        return $this;
    }

    /**
     * The time course of drug absorption, distribution, metabolism and excretion of a medication from the body.
     * @return \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics[]
     */
    public function getKinetics()
    {
        return $this->kinetics;
    }

    /**
     * The time course of drug absorption, distribution, metabolism and excretion of a medication from the body.
     * @param \Fhir\V_400\FHIRResource\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics $kinetics
     * @return $this
     */
    public function addKinetics($kinetics)
    {
        $this->kinetics[] = $kinetics;
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
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->manufacturer) $json['manufacturer'] = $this->manufacturer;
        if (null !== $this->doseForm) $json['doseForm'] = $this->doseForm;
        if (null !== $this->amount) $json['amount'] = $this->amount;
        if (0 < count($this->synonym)) {
            $json['synonym'] = [];
            foreach($this->synonym as $synonym) {
                $json['synonym'][] = $synonym;
            }
        }
        if (0 < count($this->relatedMedicationKnowledge)) {
            $json['relatedMedicationKnowledge'] = [];
            foreach($this->relatedMedicationKnowledge as $relatedMedicationKnowledge) {
                $json['relatedMedicationKnowledge'][] = $relatedMedicationKnowledge;
            }
        }
        if (0 < count($this->associatedMedication)) {
            $json['associatedMedication'] = [];
            foreach($this->associatedMedication as $associatedMedication) {
                $json['associatedMedication'][] = $associatedMedication;
            }
        }
        if (0 < count($this->productType)) {
            $json['productType'] = [];
            foreach($this->productType as $productType) {
                $json['productType'][] = $productType;
            }
        }
        if (0 < count($this->monograph)) {
            $json['monograph'] = [];
            foreach($this->monograph as $monograph) {
                $json['monograph'][] = $monograph;
            }
        }
        if (0 < count($this->ingredient)) {
            $json['ingredient'] = [];
            foreach($this->ingredient as $ingredient) {
                $json['ingredient'][] = $ingredient;
            }
        }
        if (null !== $this->preparationInstruction) $json['preparationInstruction'] = $this->preparationInstruction;
        if (0 < count($this->intendedRoute)) {
            $json['intendedRoute'] = [];
            foreach($this->intendedRoute as $intendedRoute) {
                $json['intendedRoute'][] = $intendedRoute;
            }
        }
        if (0 < count($this->cost)) {
            $json['cost'] = [];
            foreach($this->cost as $cost) {
                $json['cost'][] = $cost;
            }
        }
        if (0 < count($this->monitoringProgram)) {
            $json['monitoringProgram'] = [];
            foreach($this->monitoringProgram as $monitoringProgram) {
                $json['monitoringProgram'][] = $monitoringProgram;
            }
        }
        if (0 < count($this->administrationGuidelines)) {
            $json['administrationGuidelines'] = [];
            foreach($this->administrationGuidelines as $administrationGuidelines) {
                $json['administrationGuidelines'][] = $administrationGuidelines;
            }
        }
        if (0 < count($this->medicineClassification)) {
            $json['medicineClassification'] = [];
            foreach($this->medicineClassification as $medicineClassification) {
                $json['medicineClassification'][] = $medicineClassification;
            }
        }
        if (null !== $this->packaging) $json['packaging'] = $this->packaging;
        if (0 < count($this->drugCharacteristic)) {
            $json['drugCharacteristic'] = [];
            foreach($this->drugCharacteristic as $drugCharacteristic) {
                $json['drugCharacteristic'][] = $drugCharacteristic;
            }
        }
        if (0 < count($this->contraindication)) {
            $json['contraindication'] = [];
            foreach($this->contraindication as $contraindication) {
                $json['contraindication'][] = $contraindication;
            }
        }
        if (0 < count($this->regulatory)) {
            $json['regulatory'] = [];
            foreach($this->regulatory as $regulatory) {
                $json['regulatory'][] = $regulatory;
            }
        }
        if (0 < count($this->kinetics)) {
            $json['kinetics'] = [];
            foreach($this->kinetics as $kinetics) {
                $json['kinetics'][] = $kinetics;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationKnowledge xmlns="http://hl7.org/fhir"></MedicationKnowledge>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->manufacturer) $this->manufacturer->xmlSerialize(true, $sxe->addChild('manufacturer'));
        if (null !== $this->doseForm) $this->doseForm->xmlSerialize(true, $sxe->addChild('doseForm'));
        if (null !== $this->amount) $this->amount->xmlSerialize(true, $sxe->addChild('amount'));
        if (0 < count($this->synonym)) {
            foreach($this->synonym as $synonym) {
                $synonym->xmlSerialize(true, $sxe->addChild('synonym'));
            }
        }
        if (0 < count($this->relatedMedicationKnowledge)) {
            foreach($this->relatedMedicationKnowledge as $relatedMedicationKnowledge) {
                $relatedMedicationKnowledge->xmlSerialize(true, $sxe->addChild('relatedMedicationKnowledge'));
            }
        }
        if (0 < count($this->associatedMedication)) {
            foreach($this->associatedMedication as $associatedMedication) {
                $associatedMedication->xmlSerialize(true, $sxe->addChild('associatedMedication'));
            }
        }
        if (0 < count($this->productType)) {
            foreach($this->productType as $productType) {
                $productType->xmlSerialize(true, $sxe->addChild('productType'));
            }
        }
        if (0 < count($this->monograph)) {
            foreach($this->monograph as $monograph) {
                $monograph->xmlSerialize(true, $sxe->addChild('monograph'));
            }
        }
        if (0 < count($this->ingredient)) {
            foreach($this->ingredient as $ingredient) {
                $ingredient->xmlSerialize(true, $sxe->addChild('ingredient'));
            }
        }
        if (null !== $this->preparationInstruction) $this->preparationInstruction->xmlSerialize(true, $sxe->addChild('preparationInstruction'));
        if (0 < count($this->intendedRoute)) {
            foreach($this->intendedRoute as $intendedRoute) {
                $intendedRoute->xmlSerialize(true, $sxe->addChild('intendedRoute'));
            }
        }
        if (0 < count($this->cost)) {
            foreach($this->cost as $cost) {
                $cost->xmlSerialize(true, $sxe->addChild('cost'));
            }
        }
        if (0 < count($this->monitoringProgram)) {
            foreach($this->monitoringProgram as $monitoringProgram) {
                $monitoringProgram->xmlSerialize(true, $sxe->addChild('monitoringProgram'));
            }
        }
        if (0 < count($this->administrationGuidelines)) {
            foreach($this->administrationGuidelines as $administrationGuidelines) {
                $administrationGuidelines->xmlSerialize(true, $sxe->addChild('administrationGuidelines'));
            }
        }
        if (0 < count($this->medicineClassification)) {
            foreach($this->medicineClassification as $medicineClassification) {
                $medicineClassification->xmlSerialize(true, $sxe->addChild('medicineClassification'));
            }
        }
        if (null !== $this->packaging) $this->packaging->xmlSerialize(true, $sxe->addChild('packaging'));
        if (0 < count($this->drugCharacteristic)) {
            foreach($this->drugCharacteristic as $drugCharacteristic) {
                $drugCharacteristic->xmlSerialize(true, $sxe->addChild('drugCharacteristic'));
            }
        }
        if (0 < count($this->contraindication)) {
            foreach($this->contraindication as $contraindication) {
                $contraindication->xmlSerialize(true, $sxe->addChild('contraindication'));
            }
        }
        if (0 < count($this->regulatory)) {
            foreach($this->regulatory as $regulatory) {
                $regulatory->xmlSerialize(true, $sxe->addChild('regulatory'));
            }
        }
        if (0 < count($this->kinetics)) {
            foreach($this->kinetics as $kinetics) {
                $kinetics->xmlSerialize(true, $sxe->addChild('kinetics'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}