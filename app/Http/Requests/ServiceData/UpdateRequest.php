<?php

namespace App\Http\Requests\ServiceData;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'service_id' => 'required|integer',
            'endpoint' => 'required|string',
            'method' => 'required|string',
            'params' => 'required|json',
            'success_response' => 'required|json',
            'error_response' => 'required|json',
        ];
    }

//    public function prepareForValidation()
//    {
//        $this->merge([
//            'params' => $this->isValidJson($this->params) ? json_decode($this->params, true) : $this->params,
//            'success_response' => $this->isValidJson($this->success_response) ? json_decode($this->success_response, true) : $this->success_response,
//            'error_response' => $this->isValidJson($this->error_response) ? json_decode($this->error_response, true) : $this->error_response,
//        ]);
//    }
//
//    private function isValidJson($string)
//    {
//        json_decode($string);
//        return (json_last_error() == JSON_ERROR_NONE);
//    }

}
