<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduitRequest extends FormRequest
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
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048',
            'titre'=>'required|string|min:3|max:50',
            'categorie_id'=>'required',
            'prix'=>'required',
            'date_fab'=>'required',
            'date_exp'=>'required',
            'quantite'=>'required',
        ];
    }
}
