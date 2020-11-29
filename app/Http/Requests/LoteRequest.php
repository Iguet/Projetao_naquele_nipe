<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'lote' => 'required',
            'produto_id' => 'required',
            'data_chegada' => 'required',
            'data_vencimento' => 'required',
            'quantidade' => 'required',
            'valor_unitario' => 'required',
            'valor_total' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'lote.required' => 'O campo lote é obrigatório',
            'produto_id.required' => 'O campo produto é obrigatório',
            'data_chegada.required' => 'O campo data de chegada é obrigatório',
            'data_vencimento.required' => 'O campo data de vencimento é obrigatório',
            'quantidade.required' => 'O campo quantidade é obrigatório',
            'valor_unitario.required' => 'O campo valor unitario é obrigatório',
            'valor_total.required' => 'O campo valor total é obrigatório'
        ];
    }
}
