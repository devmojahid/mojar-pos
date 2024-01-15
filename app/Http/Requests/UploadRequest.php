<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
            'file' => 'required',
            'file_name' => 'required|string',
            'file_path' => 'nullable|string',
            'file_type' => 'nullable|string',
            'file_size' => 'nullable|string',
            'file_extension' => 'nullable|string',
            'file_mime_type' => 'nullable|string',
            'disk' => 'nullable|string',
            'url' => 'required|string',
            'uploaded_by' => 'nullable|integer',
            'uploadable_id' => 'nullable|integer',
            'uploadable_type' => 'nullable|string',
        ];
    }
}
