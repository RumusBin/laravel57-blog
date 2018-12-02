<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
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
            'title' => ['required', 'max:200', 'min:4'],
            'content' => ['required', 'min:30'],
            'date' => ['required', 'date'],
            'category_id' => ['nullable', 'numeric']
        ];
    }

    public function messages()
    {
        return [
            'title.required'  => 'Введите название новости',
            'title.max'  => 'Превышена максимальная длинна строки в 200 символов',
            'title.min'  => 'Поле должно сожержать 4 сивола минимум',
            'content.required'  => 'Заполните содержание новости',
            'content.min'  => 'Поле должно сожержать 30 сиволов минимум',
            'date.required'  => 'Заполните дату новости'
        ];
    }
}
