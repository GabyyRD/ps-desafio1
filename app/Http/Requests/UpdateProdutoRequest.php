<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProdutoRequest extends FormRequest
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
            'nome' => 'required|string|max:70',
            'descricao' => 'required|string|max:225',
            'preco' => 'required|integer|max:100',
            'quantidade' => 'required|integer',
            'categoria_id' => 'required',    
        ];
    }
}
