<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCandidateRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'first_name' => 'required|string|max:100',
            'birthday' => 'required|date',
            'sex' => 'required',
            'email' => 'required|email:filter',
            'tel' => 'required',
            'city' => 'required|string|max:255',
            'address' => 'required|string',
            'diploma' => 'required|string',
            'experience' => 'required',
            'resume' => 'required|mimes:pdf,doc,docx,odt,jpg,jpeg,png|max:50000',
            'cid' => 'required|mimes:jpg,jpeg,png|max:50000',
            'avatar' => 'required|mimes:jpg,jpeg,png|max:50000',
        ];
    }
}
