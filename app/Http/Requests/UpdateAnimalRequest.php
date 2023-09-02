<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnimalRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:30',
            'breed_id' => 'required',
            'malattie' => 'max:150',
            'propietario' => 'required|max:40',
        ];
    }

    public function messages(){
        return[
            'nome.required' => 'Il nome è obbligatorio',
            'nome.max' => 'Il nome supera la lunghezza massima di :max',
            'breed_id.required' => 'La specie è obbligatoria',
            'malattie.max' => 'Le malattie superano la lunghezza massima di :max',
            'propietario.required' => 'Il propietario è obbligatorio',
            'propietario.max' => 'Il propietario supera la lunghezza massima consentita di :max'
        ];
    }
}
