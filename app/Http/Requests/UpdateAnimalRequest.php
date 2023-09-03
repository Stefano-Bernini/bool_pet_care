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
            'specie' => 'required|max:50',
            'malattie' => 'max:150',
            'owner_id' => 'required|exists:owners,id',
        ];
    }

    public function messages(){
        return[
            'nome.required' => 'Il nome è obbligatorio',
            'nome.max' => 'Il nome supera la lunghezza massima di :max',
            'specie.required' => 'La specie è obbligatoria',
            'specie.max' => 'La specie supera la lunghezza massima di :max',
            'malattie.max' => 'Le malattie superano la lunghezza massima di :max',
            'owner_id.required' => 'Il proprietario è obbligatorio',
            'owner_id.exists' => 'Proprietario selezionato non valido',
        ];
    }
}
