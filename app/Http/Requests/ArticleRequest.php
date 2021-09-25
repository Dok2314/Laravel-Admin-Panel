<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|min:2|max:255',
            'email' => 'required|min:4|max:255',
            'message' => 'required|min:5|max:255',
        ];
    }
    public function messages(){
        return [
            'title.required' => 'Поле Название должно быть заполнено!',
            'title.min' => 'Поле Название должно содержать не менее 2 символов!',
            'title.max' => 'Поле Название должно содержать не более 255 символов!',
            'email.required' => 'Поле E-mail должно быть заполнено!',
            'email.min' => 'Поле E-mail должно содержать не менее 4 символов!',
            'email.max' => 'Поле E-mail должно содержать не более 255 символов!',
            'message.required' => 'Поле Статья должно быть заполнено!',
            'message.min' => 'Поле Статья должно содержать не менее 5 символов!',
            'message.max' => 'Поле Статья должно содержать не более 255 символов!',
        ];
    }
}
