<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateFormRequest extends FormRequest
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
            'product_name' => 'required'
            'product_price' => 'required'
            'product_description' => 'required'
            'product_image' => 'required'
            'product_' => 'required'
            'product_name' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'category_name.required' => 'Enter product name'
        ];
    }
}
