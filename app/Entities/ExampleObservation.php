<?php

namespace App\Entities;

use Carbon\Carbon;
use Doctrine\ORM\Mapping AS ORM;
use Fhir\V_400\FHIRDomainResource\FHIRObservation;
use Fhir\V_400\FHIRElement\FHIRCodeableConcept;
use Fhir\V_400\FHIRElement\FHIRCoding;
use Fhir\V_400\FHIRElement\FHIRDateTime;
use Fhir\V_400\FHIRElement\FHIRExtension;
use Fhir\V_400\FHIRElement\FHIRId;
use Fhir\V_400\FHIRElement\FHIRIdentifier;
use Fhir\V_400\FHIRElement\FHIRInstant;
use Fhir\V_400\FHIRElement\FHIRQuantity;
use Fhir\V_400\FHIRElement\FHIRReference;
use Fhir\V_400\FHIRElement\FHIRUri;
use Fhir\V_400\FHIRResource\FHIRObservation\FHIRObservationReferenceRange;

/**
 * @ORM\Entity
 * @ORM\Table(name="example_labs_table")
 */
class ExampleObservation implements FHIREntityInterface
{

    /**
     * @ORM\Id
     * @ORM\Column(name="RESULT_ID", type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(name="PATIENT_ID", type="string")
     */
    protected $patient_id;

    /**
     * @ORM\Column(name="PROTOCOL_ID", type="string")
     */
    protected $protocol_id;

    /**
     * @ORM\Column(name="LAB_RESULT_TIMESTAMP", type="datetime")
     */
    protected $result_timestamp;

    /**
     * @ORM\Column(name="LAB_TEST_CODE", type="string")
     */
    protected $lab_test_code;

    /**
     * @ORM\Column(name="LAB_RESULT_VALUE", type="float")
     */
    protected $lab_result_value;

    /**
     * @ORM\Column(name="LAB_TEXT_RESULT", type="string")
     */
    protected $text_result;

    /**
     * @ORM\Column(name="LAB_UNIT", type="string")
     */
    protected $unit;

    /**
     * @ORM\Column(name="LAB_NORMAL_RANGE", type="string")
     */
    protected $normal_range;

    /**
     * @ORM\Column(name="LAB_LOINC_CODE", type="string")
     */
    protected $loinc_code;

    public function getId()
    {
        return $this->id;
    }

    public function getResultTimestamp()
    {
        return $this->result_timestamp;
    }

    public function getLabResultValue()
    {
        return $this->lab_result_value;
    }

    public function getTextResult()
    {
        return $this->text_result;
    }

    public function getProtocolId()
    {
        return $this->protocol_id;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function getLabTestCode()
    {
        return $this->lab_test_code;
    }

    public function getPatientId()
    {
        return $this->patient_id;
    }

    public function getNormalRange()
    {
        return $this->normal_range;
    }

    public function getLoincCode()
    {
        return $this->loinc_code;
    }

    /**
     * Transform entity into a FHIR Observation resource
     *
     * @return FHIRObservation
     */
    public function toFhirResource()
    {
        // Id
        $observation = new FHIRObservation();
        $id = new FhirId();
        $id->setValue($this->getId());
        $observation->setId($id);

        $observation->issued = new FHIRInstant();
        $observation->issued->setValue(Carbon::instance($this->getResultTimestamp())->toIso8601String());
        $observation->effectiveDateTime = new FHIRDateTime();
        $observation->effectiveDateTime->setValue(Carbon::instance($this->getResultTimestamp())->toIso8601String());
        $observation->status = "final";

        // Identifier

        $identifier = new FHIRIdentifier();
        $uri = new FHIRUri();
        $uri->value = "https://this/should/resolve/to/a/real/url";
        $identifier->system = $uri;
        $identifier->value = $this->getId();
        $observation->addIdentifier($identifier);

        // Value

        if(empty($this->getLabResultValue()))
        {
            $observation->valueString = $this->getTextResult();
        } else {
            $valueQuantity = new FHIRQuantity();
            $valueQuantity->value = $this->getLabResultValue();
            $valueQuantity->unit = $this->getUnit();
            $observation->valueQuantity = $valueQuantity;
        }

        // Code / Coding (e.g. LOINC Code)

        $code = new FHIRCodeableConcept();
        $code->text = $this->getLabTestCode();
        $coding = new FHIRCoding();
        $coding->system = "http://loinc.org";
        $coding->code = $this->getLoincCode();
        $coding->display = $this->getLabTestCode();
        $code->addCoding($coding);
        $observation->setCode($code);

        // Subject

        $subjectRef = new FHIRReference();
        $subjectRef->reference = "Patient/{$this->getPatientId()}";
        $observation->setSubject($subjectRef);

        // Reference Range

        if(!empty($this->getNormalRange()))
        {
            $range = new FHIRObservationReferenceRange();
            $range->text = $this->getNormalRange();
            $observation->addReferenceRange($range);
        }

        // Category

        $coding = new FHIRCoding();
        $coding->code = "laboratory";
        $coding->display = "Laboratory";
        $coding->system = "http://hl7.org/fhir/observation-category";
        $category = new FHIRCodeableConcept();
        $category->text = "Laboratory";
        $category->addCoding($coding);
        $observation->addCategory($category);

        // Extension for ResearchStudy.

        $extension = new FHIRExtension();
        $extension->setUrl('http://hl7.org/fhir/StructureDefinition/workflow-researchStudy');
        $extension->setValueCode($this->getProtocolId());
        $observation->addExtension($extension);

        return $observation;
    }
}