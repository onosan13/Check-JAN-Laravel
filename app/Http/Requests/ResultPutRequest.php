<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResultPutRequest extends FormRequest
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
            'result_list'=>['array','required'],
            'result_score'=>['numeric','required'],
        ];
    }
}
