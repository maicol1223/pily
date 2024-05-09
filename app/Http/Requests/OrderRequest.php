<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'date_order' => 'required|date',
            'total' => 'required|numeric',
            'route' => 'required|string',
            'status' => 'required|string',
            'registered_by' => 'required|string',
            'client_id' => 'required|integer',
        ];
    }
}
