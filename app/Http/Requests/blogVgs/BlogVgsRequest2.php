<?php

namespace App\Http\Requests\blogVgs;

use Illuminate\Foundation\Http\FormRequest;

class BlogVgsRequest2 extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title' => 'không được để trống',
            'description' => 'không được để trống',
            'content' => 'không được để trống'
        ];
    }
}
