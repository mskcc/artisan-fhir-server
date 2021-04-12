<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ObservationsRequest;
use App\Repositories\ObservationsRepository;
use App\Http\Controllers\Controller;
use App\User;
use Fhir\V_400\Builders\FHIRObservationBundleBuilder;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ObservationsController extends Controller
{
    private $results;
    protected $serializer;

    public function __construct(ObservationsRepository $repo)
    {
        $this->results = $repo;
    }

    /**
     * @OA\Get(
     *     path="/api/observations",
     *     tags={"observations"},
     *     summary="Finds Laboratory Results",
     *     description="Retrieve laboratory results for a specific Research Study. This fetches a bundle of all Observation resources with laboratory categories for the specified ResearchStudy.",
     *     operationId="observations.index",
     *     @OA\Parameter(
     *         name="researchstudy",
     *         description="The Research Study to retrieve laboratory results for.",
     *         in="query",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="category",
     *         description="A code that classifies the general type of lab result.",
     *         in="query",
     *         required=true,
     *         @OA\Schema(
     *         type="array",
     *           @OA\Items(
     *               type="string",
     *               enum={"laboratory"},
     *               default="laboratory"
     *           ),
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="_count",
     *         description="The number of results to return.",
     *         in="query",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="date",
     *         description="Date(s) on which the laboratory result was collected/observed. Multiple dates can be supplied. See http://hl7.org/fhir/search.html#date",
     *         in="query",
     *         required=false,
     *         style="form",
     *         explode=true,
     *         @OA\Schema(
     *         type="array",
     *           @OA\Items(
     *               type="string"
     *           ),
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\MediaType(
     *             mediaType="application/json"
     *         )
     *     ),
     *     security={
     *          {"partner_auth": {}},  {"bearer_auth": {}}
     *     }
     * )
     * @param ObservationsRequest $request
     * @return ResponseFactory|Response
     */
    public function index(ObservationsRequest $request)
    {
        $researchStudy = $request->query('researchstudy', '');

        // Resolve the user from the x-partnerid header and check access.
        $partner_id = $request->header('x-partnerid');
        $partner = User::where('partner_id', $partner_id)->first();

        if($partner == null)
            return response()->json([
                'errors' => [
                    [
                        'status' => '404',
                        'title' => "Partner not found.",
                        'detail' => "Unable to find user with partner_id of `{$partner_id}`."
                    ]
                ]
            ], 404);

        if(! $partner->access->contains('protocol_id', $researchStudy))
            return response()->json([
                'errors' => [
                    [
                        'status' => '404',
                        'title' => "Study not found.",
                        'detail' => "Unable to find study `{$researchStudy}`."
                    ]
                ]
            ], 404);

        if(strtolower($researchStudy) == strtolower('test'))
        {
            $paginatedResults = $this->results->getTestObservations(100, [
                'irb' => $researchStudy
            ])->paginate($request->get('_count') ?? 50);

        } else {
            $paginatedResults = $this->results->search($request);
        }

        $bundle = (new FHIRObservationBundleBuilder())->setUri(env("FHIR_ROOT_URI", ""))
                    ->setType("searchset")
                    ->setValue($researchStudy)
                    ->paginate($paginatedResults, $request);

        return response($bundle->getBundle(), 200);
    }


    /**
     * @param $id
     * @return JsonResponse
     */
    public function show($id)
    {
        $result = $this->results->find($id);

        if($result == null)
            return response()->json("Unable to find observation with id of `{$id}`", 404);

        /** @var LabResult $result */
        return response($result->toFhirResource(), 200);
    }


}
