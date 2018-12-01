<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMainInfo extends FormRequest
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
            'phone_number' => ['regex:/(0)[0-9]{9}/'],
            'address' => ['required', 'max:250'],
            'email' => ['required', 'email'],
            'copyright' => ['max:150', 'min:5']
        ];
    }

    public function messages()
    {
        return [
            'phone_number.regex' => 'Введите номер телефона в формате: 097...',
            'address.required'  => 'Введите адресс компании',
            'email.required'  => 'Введите email компании',
            'email.email'  => 'Введите правильный email адресс',
            'copyright.max'  => 'Превышена максимальная длинна строки в 150 символов',
            'copyright.min'  => 'Поле copyright должно сожержать 5 сиволов минимум',
        ];
    }
}
