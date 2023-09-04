<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVaccinationRequest extends FormRequest
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
            'animal_id' => 'required|exists:animals,id',
            'vaccine_id' => 'required|exists:vaccines,id',
            'date' => 'required',
            'dosage' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'animal_id.required' => 'Il nome dell\'animale è un campo obbligatorio',
            'animal_id.exists' => 'L\'animale inserito non esiste',
            'vaccine_id.required' => 'Il vaccino è un campo obbligatorio',
            'vaccine_id.exists' => 'Il vaccino inserito non esiste',
            'date.required' => 'La data è un campo obbligatorio',
            'dosage.required' => 'La dose è un campo obbligatorio',
        ];
    }
}
