<?php

namespace App\Repositories;

use App\Entities\ExampleObservation;
use App\Http\Requests\ObservationsRequest;
use Doctrine\ORM\EntityRepository;
use Fhir\V_400\FhirDateSearchParser;
use LaravelDoctrine\ORM\Pagination\PaginatesFromRequest;

class ExampleObservationsRepository extends EntityRepository implements ObservationsRepository
{

    use PaginatesFromRequest;

    public function search(ObservationsRequest $request)
    {
        $builder = $this->createQueryBuilder('o');

        $builder
            ->where("o.protocol_id = '{$request->get('researchstudy')}'");

        if($request->has('date')) {

            collect($request->query('date'))->each(function($date) use ($builder) {
                $dateSearchParser = new FhirDateSearchParser($date);

                $dateComparator = $dateSearchParser->getOperator();
                $dateValue = $dateSearchParser->getOperand();

                if($dateSearchParser->includesTime()) {

                    if(env('WAREHOUSE_CONNECTION') == 'oracle') {

                        $builder->andWhere("o.result_timestamp {$dateComparator} TODATE('{$dateValue}', 'YYYY-MM-DD HH24:MI:SS')");

                    } else {

                        $builder->andWhere("o.result_timestamp {$dateComparator} '{$dateValue}'");
                    }

                } else {


                    if(env('WAREHOUSE_CONNECTION') == 'oracle') {

                        $builder->andWhere("TRUNC(o.result_timestamp) {$dateComparator} TODATE('{$dateValue}', 'YYYY-MM-DD')");

                    } else {

                        $builder->andWhere("DATE(o.result_timestamp) {$dateComparator} '{$dateValue}'");
                    }


                }

            });

        }
        $results = $this->paginate($builder->getQuery(), $request->get('_count') ?? 50, 'page');

        return $results;

    }

    /**
     * Return a list of test lab results
     * @param int $amount
     * @param array $overrides
     * @return mixed
     */
    public function getTestObservations($amount = 20, $overrides = [])
    {
        return entity(ExampleObservation ::class, $amount)->make($overrides);
    }
}