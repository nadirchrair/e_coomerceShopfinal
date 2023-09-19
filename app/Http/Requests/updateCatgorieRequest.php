<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateCatgorieRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name_ar'=>'required',
            'name_en'=>'required',
            'slug'=>'required',
            'description_ar'=>'required',
            'description_en'=>'required',
            'is_shopping'=>'required',
            'is_popular'=>'required',
            'meta_title_ar'=>'required',
            'meta_title_en'=>'required',
            'meta_description_ar'=>'required',
            'meta_description_en'=>'required',
            'meta_keywords'=>'required',
            'image'=>'image',
        ];
    }
}