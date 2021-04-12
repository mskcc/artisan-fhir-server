<?php

namespace App\Repositories;

use App\Http\Requests\ObservationsRequest;

interface ObservationsRepository
{
    public function find($id);
    public function getTestObservations($amount, $overrides);
    public function search(ObservationsRequest $request);
}