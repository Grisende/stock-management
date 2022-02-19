<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WithdrawRequest extends FormRequest
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
            'product_id'                => 'required',
            'is_api'                    => 'boolean',
        ];
    }

    public function messages()
    {
        return [
            'product_id.required' => 'Este campo não pode ser deixado em branco',
            'is_api'              => 'Esse valor deve ser booleano'
        ];
    }
}
