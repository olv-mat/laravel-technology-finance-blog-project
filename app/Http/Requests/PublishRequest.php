<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublishRequest extends FormRequest
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
            "title" => ["required", "string", "min:20", "max:150"],
            "caption" => ["required", "string", "min:20", "max:150"],
            "cover" => ["required", "image", "mimes:png,jpg,jpeg"],
            "content" => ["required", "string", "min:100"],
        ];
    }
}
