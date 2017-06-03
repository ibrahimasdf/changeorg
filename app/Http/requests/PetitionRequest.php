<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetitionRequest extends FormRequest
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
            'title' => 'required|between:3,255',
             'body' => 'required|between:10,1000'
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'judul tidak boleh kosong',
            'title.between' => 'harus 3 sampe 255'
        ];
    }
}
