<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodRequest extends FormRequest
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
            'img' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'price' => 'required|numeric',
            'description' => 'required|min:5|max:500',
            'category_id' => 'required',
        ];
    }
    public function messages(){
        return [
            'title.required' => 'Поле Название Товара должно быть заполнено!',
            'category_id.required' => 'Поле Категория должно быть заполнено!',
            'title.min' => 'Поле Название Товара должно содержать не менее 2 символов!',
            'title.max' => 'Поле Название Товара должно содержать не более 255 символов!',
            'img.mimes' => 'Изображение неверного формата!',
            'img.required' => 'Выбирите изображение!',
            'img.max' => 'Размер изображения не должен привышать 10000kb!',
            'description.required' => 'Поле Описание должно быть заполнено!',
            'description.min' => 'Поле Описание должно содержать не менее 5 символов!',
            'description.max' => 'Поле Описание должно содержать не более 500 символов!',
            'price.required' => 'Поле Цена должно быть заполнено!',
            'price.numeric' => 'Поле Цена должно быть числом!',
        ];
    }
}
