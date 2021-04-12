<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class ObservationsRequest extends CoreFhirRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules =  parent::rules();
        $rules = Arr::add($rules, 'researchstudy', 'required');
        return $rules;
    }

}
