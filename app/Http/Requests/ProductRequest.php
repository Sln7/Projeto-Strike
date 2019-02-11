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
            'name' => 'required|min:5',
            'price' => 'required|min:1',
            'category' =>'required'
        ];
    }

    public function messages(){
        return [
            '*.required' => 'Campo obrigatório!', 
            '*.min' => 'Campo deve conter no mínimo 3 caractéres'
        ];
    }
}

