<?php

namespace App\Console\Commands;

use DCarbone\PHPFHIR\ClassGenerator\Generator;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class FhirGeneratorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fhir:generate 
                            {xsdpath} : Path to Fhir XSD files
                            {outputPath?} : Output path for Fhir classes
                            {namespace?} : Namespace for generated Fhir classes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create PHP classes from a set of FHIR XSD files.';

    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $generator = new Generator(
            $this->argument('xsdpath'),
            $this->argument('outputPath'),
            $this->argument('namespace')
        );
        $generator->generate();
    }
}
