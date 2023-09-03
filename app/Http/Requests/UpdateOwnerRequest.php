<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOwnerRequest extends FormRequest
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
            'name' => 'required|max:30',
            'surname' => 'required|max:30',
            'address' => 'required|max:100',
            'telephone' => 'required|max:30',
            'email' => 'email:rfc,dns|required|max:30'
        ];
    }

    public function messages(){
        return[
            'name.required' => 'Il nome è obbligatorio',
            'name.max' => 'Il nome supera la lunghezza massima di :max caratteri',
            'surname.required' => 'Il cognome è obbligatorio',
            'surname.max' => 'Il cognome supera la lunghezza massima di :max caratteri',
            'address.required' => "L'indirizzo è obbligatorio",
            'address.max' => "L'indirizzo supera la lunghezza massima di :max caratteri",
            'telephone.required' => "Il numero di telefono è obbligatorio",
            'telephone.max' => "Il numero di telefono supera la lunghezza massima di :max caratteri",
            'email.required' => "L'email è obbligatorio",
            'email.max' => "L'email supera la lunghezza massima di :max caratteri",
            'email.email' => "Il formato dell'email non è valido",
        ];
    }
}
