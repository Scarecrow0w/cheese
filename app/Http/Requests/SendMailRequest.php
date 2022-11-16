<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMailRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'text' => 'required|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Поле email обязательно для заполнения',
            'email.email' => 'Некорректно введен email',
            'text.required' => 'Поле text обязательно для заполнения',
            'text.string' => 'Поле должно быть строкой',
        ];
    }
}
