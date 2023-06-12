<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Mal_alis_request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'techizatci' => 'required',
            'barcod' => 'required',
            'mal_adi' => 'required',
            'tip' => 'required',
            'miqdar' => 'required',
            'alis_qiy' => 'required',
            'alis_meb' => 'required',
            'satis_qiy' => 'required',
            'satis_meb' => 'required'
        ];
    }
}
