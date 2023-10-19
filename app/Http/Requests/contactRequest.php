<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|digits:10', // Validate as numeric and exactly 10 digits
            'message' => 'required|string',
        ];
    }
    public function messages(){
        return[
            'name.required'=>"Name field can not be empty",
            'email.required'=>"Email field can not be empty",
            'phone.required'=>"Phone number field can not be empty",
            'message.required'=>"Message field can not be empty",
    
        ];
    }
}
