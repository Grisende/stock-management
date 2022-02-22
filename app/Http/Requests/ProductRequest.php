<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'sku' => 'required'
        ];
    }

    public function messages() : array
    {
        return [
            'name.required'  => 'Este campo não pode ser deixado em branco',
            'sku.required'   => 'Este campo não pode ser deixado em branco',
            'sku.unique'     => 'Não pode ser um código duplicado'
        ];
    }
}
