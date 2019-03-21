<?php

namespace RPGImusica\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Symfony\Component\VarDumper\VarDumper;

class MinimoDoisRequest extends FormRequest
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

        $validation = [
            "ids"=>[],
            "personagens"=>[]
        ];
        if($this->get('ids')!=null){
            $validation['ids'] = ['required','array','min:2'];
            $validation['ids.0']=['required','integer'];
            $validation['ids.1']=['required','integer'];
        }
        if($this->get('personagens')!=null){
            $validation['personagens'] = ['required','array','min:2'];
            $validation['personagens.0.id'] = ['required'];
            $validation['personagens.0.iniciativa'] = ['required','integer',Rule::in([0,1])];
            $validation['personagens.1.id'] = ['required'];
            $validation['personagens.1.iniciativa'] = ['required','integer',Rule::in([0,1])];
        }

        return $validation;

    }
}
