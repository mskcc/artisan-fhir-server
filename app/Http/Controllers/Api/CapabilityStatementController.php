<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ObservationsRequest;
use App\IO\FileReader;
use Mockery\Exception;
use Psy\Exception\ErrorException;
use Psy\Exception\RuntimeException;

class CapabilityStatementController extends Controller
{
    public function index()
    {
        try {
            $jsonString = @file_get_contents(base_path(config('app.fhir_json_path', 'resources/fhir/') . 'CapabilityStatement.json'));
            if ($jsonString === false) {
                return $this->fileNotFoundError();
            }
            $data = json_decode($jsonString, true);
            return response()->json($data, 200);
        } catch (Exception $e) {
            return $this->fileNotFoundError();
        }
    }

    private function fileNotFoundError()
    {
        return response()->json([
            'errors' => [
                [
                    'status' => '404',
                    'title' => "Capability Statement not found.",
                    'detail' => "The server could not properly render a Capability Statement. Please try again later."
                ]
            ]
        ], 404);
    }


}