<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceDataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'endpoint' => $this->endpoint,
            'method' => $this->method,
            'params' => ($this->params),
            'success_response' => ($this->success_response),
            'error_response' => ($this->error_response),
            'created_at' => $this->created_at
        ];
    }
}
