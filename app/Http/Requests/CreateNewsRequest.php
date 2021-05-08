<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewsRequest extends FormRequest
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
            'title' => 'required|string|between:3,255',
            'text' => 'required|between: 5,255',
            'date' => 'required|date|date_format:Y-m-d'
            
        ];
    }
    public function messages()
{
  return [
    'title.required' => 'Необходимо указать заголовок',
    'text.required'  => 'Тде текст?!',
    'date.required' => 'Укажите дату',
    'title.between' => 'Ввод от 3 до 255 символов',
    'text.between' => 'Ввод от 5 до 255 символов',
    
  ];
}

}
