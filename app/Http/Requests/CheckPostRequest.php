<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckPostRequest extends FormRequest
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
            'bakaze'=>['required'],
            'jikaze'=>['required'],
            'reach'=>['required'],
            'dora'=>['required'],
            'renchan'=>['required'],
            'naki'=>['required'],
            'tumo_ron'=>['required'],
            'kan'=>['required'],
            'rinshan'=>['required'],
            'pinhu'=>['required'],
            'jihai'=>['array'],
            'j-count-ton'=>['numeric'],
            'j-count-nan'=>['numeric'],
            'j-count-sha'=>['numeric'],
            'j-count-pei'=>['numeric'],
            'j-count-haku'=>['numeric'],
            'j-count-hatu'=>['numeric'],
            'j-count-chun'=>['numeric'],
            'manzu'=>['array'],
            'm-count-1'=>['numeric'],
            'm-count-2'=>['numeric'],
            'm-count-3'=>['numeric'],
            'm-count-4'=>['numeric'],
            'm-count-5'=>['numeric'],
            'm-count-6'=>['numeric'],
            'm-count-7'=>['numeric'],
            'm-count-8'=>['numeric'],
            'm-count-9'=>['numeric'],
            'pinzu'=>['array'],
            'p-count-1'=>['numeric'],
            'p-count-2'=>['numeric'],
            'p-count-3'=>['numeric'],
            'p-count-4'=>['numeric'],
            'p-count-5'=>['numeric'],
            'p-count-6'=>['numeric'],
            'p-count-7'=>['numeric'],
            'p-count-8'=>['numeric'],
            'p-count-9'=>['numeric'],
            'souzu'=>['array'],
            's-count-1'=>['numeric'],
            's-count-2'=>['numeric'],
            's-count-3'=>['numeric'],
            's-count-4'=>['numeric'],
            's-count-5'=>['numeric'],
            's-count-6'=>['numeric'],
            's-count-7'=>['numeric'],
            's-count-8'=>['numeric'],
            's-count-9'=>['numeric'],
        ];
    }
}
