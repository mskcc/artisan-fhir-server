<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UsersRequest;
use App\User;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class UsersController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/partners",
     *     tags={"partners"},
     *     summary="Returns partners from the system. Supplying a partner_id parameter is required.",
     *     description="Returns users from the system. Supplying a partner_id parameter is required.",
     *     operationId="partners.show",
     *     @OA\Parameter(
     *         name="partner_id",
     *         description="The partner ID of the user to retrieve.",
     *         in="query",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\MediaType(
     *             mediaType="application/json"
     *         )
     *     ),
     *     security={}
     * )
     * @param UsersRequest $request
     * @return ResponseFactory|JsonResponse|Response
     */
    
    public function index(UsersRequest $request)
    {
        $partner_id = $request->query('partner_id');

        $user = User::where('partner_id', $partner_id)->first();

        if($user == null)
            return response()->json([
                'errors' => [
                    [
                        'status' => '404',
                        'title' => "Partner not found.",
                        'detail' => "Unable to find user with partner_id of `{$partner_id}`."
                    ]
                ]
            ], 404);

        return response($user, 200);
    }
}
