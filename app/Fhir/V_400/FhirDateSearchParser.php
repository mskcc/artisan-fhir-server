<?php
namespace Fhir\V_400;

use App\Exceptions\InvalidFhirDatatypeException;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use InvalidArgumentException;
use RuntimeException;

class FhirDateSearchParser
{
    //http://hl7.org/fhir/datatypes.html#date
    const DATE_REGEX = '/([0-9]([0-9]([0-9][1-9]|[1-9]0)|[1-9]00)|[1-9]000)(-(0[1-9]|1[0-2])(-(0[1-9]|[1-2][0-9]|3[0-1]))?)?/';

    //http://hl7.org/fhir/datatypes.html#datetime
    const DATETIME_REGEX = '/([0-9]([0-9]([0-9][1-9]|[1-9]0)|[1-9]00)|[1-9]000)(-(0[1-9]|1[0-2])(-(0[1-9]|[1-2][0-9]|3[0-1])(T([01][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)(\.[0-9]+)?(Z|(\+|-)((0[0-9]|1[0-3]):[0-5][0-9]|14:00)))?)?)?/';
    /**
     * @var string
     */
    protected $searchString;

    /**
     * @var Collection
     */
    protected $search_prefixes;

    /**
     * @var string
     */
    protected $operator;

    /**
     * @var string
     */
    protected $dateValue;

    private $prefix;
    private $operation;
    /**
     * @var Carbon
     */
    protected $dateObject;

    /**
     * FhirDateSearchParser constructor.
     * @param string $searchString
     */
    public function __construct(string $searchString)
    {
        $this->searchString = $searchString;
        $this->search_prefixes = collect([
            ['code' => 'eq', 'sql' => '='],
            ['code' => 'ne', 'sql' => '!='],
            ['code' => 'lt', 'sql' => '<'],
            ['code' => 'gt', 'sql' => '>'],
            ['code' => 'ge', 'sql' => '>='],
            ['code' => 'le', 'sql' => '<=']
        ]);

        $this->extractComparison();
        return $this;
    }

    private function extractComparison()
    {
        //get the prefix
        $this->prefix = substr($this->searchString, 0, 2);

        //Get the value
        $this->dateValue = Str::after($this->searchString, $this->prefix);

        //get appropriate operation
        $this->operation = $this->search_prefixes->firstWhere('code', $this->prefix);

        $this->validate();

        $this->operator = $this->operation['sql'];

        $this->dateObject = Carbon::parse($this->dateValue);

    }

    public function includesTime(): bool
    {
        return (!($this->dateObject->hour === 0 && $this->dateObject->minute === 0 && $this->dateObject->second === 0));
    }

    public function getOperand(): string
    {
        if(!$this->includesTime())
        {
            switch($this->getOperator())
            {
                case '<':
                case '<=':
                    $this->dateObject->setTime(23,59,59);
                    break;
                //If there is no time component on the date parameter, equality
                //and greater than symbols match the entire day
                case '=':
                case '!=':
                case '>':
                case '>=':
                    return $this->dateObject->format('Y-m-d');
            }
        };

        return $this->dateObject->format('Y-m-d H:i:s');

    }

    public function isDate() {
        return preg_match(self::DATE_REGEX, $this->getDateValue()) === 1;
    }

    public function isDateTime() {
        return preg_match(self::DATETIME_REGEX, $this->getDateValue()) === 1;
    }

    /**
     * @return string
     */
    public function getDateValue(): string
    {
        return $this->dateValue;
    }

    /**
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    private function validate()
    {
        if($this->operation == null) throw new InvalidArgumentException('Invalid comparison operator for date related search.');

        if((! $this->isDate()) || (! $this->isDateTime())) throw new InvalidFhirDatatypeException('Date value does not match Fhir `date` or `datetime` data type.');
    }


}