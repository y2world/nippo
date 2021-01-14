<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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

    public function rules()
    {
        return [
            'date' => 'required',
            'content' => 'required',
            'hour' => 'required',
            'language' => 'required',
            'category' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'date.required' => '日付は必須です。',
            'content.required'  => '学習内容は必須です。',
            'hour.required'  => '時間数は必須です。',
            'language.required'  => '言語は必須です。',
            'category.required'  => 'カテゴリーは必須です。',

        ];
    }
}