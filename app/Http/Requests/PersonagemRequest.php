<?php

namespace RPGImusica\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\VarDumper\VarDumper;

class PersonagemRequest extends FormRequest
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
            'humano.nome'=>['required','string','min:3','max:30'],
            'orc.nome'=>['required','string','min:3','max:30'],
        ];
    }

}
