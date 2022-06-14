<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIndividuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'bail|required|string|max:200',
            'noKP' => 'bail|required|string|max:12',
            'jantina' => 'bail|required|string|max:20',
            'tempat_lahir' => 'bail|required|string|max:200',
        ];
    }
}
