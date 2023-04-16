<?php

namespace App\Http\Requests;

use App\Models\DocumentType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreClient extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:100'],
            'document_type_id' => ['required', 'integer', Rule::in(DocumentType::all('id')->pluck('id'))],
            'document' => ['required', 'max:30'],
            'check_digit' => ['required', 'max:1'],
            'phone' => ['required', 'max:20'],
        ];
    }

    // public function attributes()
    // {
    //     // return [
    //     //     'name' => 'nombre del cliente'
    //     // ];
    // }

    // public function messages()
    // {
    //     // return [
    //     //     'name.required' => 'El campo :attribute debe tener datos'
    //     // ];
    // }
}
