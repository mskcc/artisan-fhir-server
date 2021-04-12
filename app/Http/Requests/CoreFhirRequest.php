<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoreFhirRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            '_id' => '',
            '_content' => '',
            '_lastUpdated' => '',
            '_profile' => '',
            '_query' => '',
            '_security' => '',
            '_tag' => ''
        ];
    }
}
