<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            "name" => ["required", "string", "max:255"],
            "username" => ["required", "string", "max:255", "unique:users,username," . auth()->id()],
            "email" => ["required", "string", "email", "max:255", "unique:users,email," . auth()->id()],
            "avatar" => ["nullable", "image", "max:1024"],
            "phone" => ["nullable", "string", "max:255"],
            "country" => ["nullable", "string", "max:255"],
            "address" => ["nullable", "string", "max:255"],
            "city" => ["nullable", "string", "max:255"],
            "postal_code" => ["nullable", "string", "max:255"],
            "status" => ["nullable", "string", "max:255"],
            "bio" => ["nullable", "string", "max:255"],
        ];
    }
}
