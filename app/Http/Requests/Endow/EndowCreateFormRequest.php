<?php

namespace App\Http\Requests\Endow;

use Illuminate\Foundation\Http\FormRequest;

class EndowCreateFormRequest extends FormRequest
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
            'endow_name' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'endow_name.required' => 'Enter endow name'
        ];
    }
}
