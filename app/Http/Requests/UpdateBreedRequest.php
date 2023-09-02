<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBreedRequest extends FormRequest
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
            'name' => 'required|max:50'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'il nome della specie è obbligatorio',
            'name.max' => 'Il nome supere la lunghezza di :max caratteri massima'
        ];
    }
}
