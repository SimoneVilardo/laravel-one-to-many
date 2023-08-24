<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'title' => 'required|max:50',
            'image' => 'image|max:250'
        ];
    }

    public function messages(){
        return[
            'title.required' =>'Il titolo è obbligatorio.',
            'title.max'      =>'Il titolo deve essere lungo al massimo :max caratteri.',

            'image.image'   => 'Il file inviato deve avere una delle seguenti estensioni: .jpg .jpeg .png .webp',
            'image.max'     =>'l\' indirizzo dell\' immagine deve avere :max caratteri'
        ];
    }
}
