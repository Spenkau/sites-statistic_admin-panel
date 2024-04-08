<?php

namespace App\Http\Requests\ServiceData;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'service_id' => 'required|int',
            'endpoint' => 'required|string',
            'method' => 'required|string',
            'params' => 'required|json',
            'success_response' => 'required|json',
            'error_response' => 'required|json',
        ];
    }

    protected function prepareForValidation()
    {
        $this['service_id'] = $this->route('service')->id;
    }
}
