<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProdutoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::check()){

            return true;
            
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'valor' => 'required',
            // 'imagem' => 'file|image|required|max:20000000'
            // 'imagem' => 'file|image|required|max:20000000|dimensions:max_width=300,max_height=300'
        ];
    }
}
