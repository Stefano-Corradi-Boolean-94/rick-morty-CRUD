<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharacterRequest extends FormRequest
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
            'name' => 'required|min:2|max:50',
            'species' => 'required|min:2|max:50',
            'type' => 'max:100',
            'gender' => 'max:20',
            'origin_name' => 'max:50',
            'location_name' => 'max:50',
            'image' => 'max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome è un campo obbligatorio',
            'name.min' => 'Il nome deve avere almeno :min caratteri',
            'name.max' => 'Il nome non può avere piu di :max caratteri',
            'species.required' => 'Species è un campo obbligatorio',
            'species.min' => 'Species deve avere almeno :min caratteri',
            'species.max' => 'Species non può avere piu di :max caratteri',
            'type.max' => 'Type non può avere piu di :max caratteri',
            'gender.max' => 'Gender non può avere piu di :max caratteri',
            'origin_name.max' => 'Original name non può avere piu di :max caratteri',
            'location_name.max' => 'Location name non può avere piu di :max caratteri',
            'image.max' => 'L\'immagine non può avere piu di :max caratteri',
        ];
    }
}
