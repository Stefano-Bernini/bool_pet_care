<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVaccineRequest extends FormRequest
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
        ];
    }

    public function messages(){
        return[
            'name.required' => 'Il nome è obbligatorio',
            'name.max' => 'Il nome supera la lunghezza massima di :max',
        ];
    }
}
