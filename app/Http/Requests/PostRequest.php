<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'post.title' => 'required|string|max:100',
            'post.body' => 'required|string|max:400',
        ];
    }
    
    public function attributes()
    {
        return [
          'post.title' => 'タイトル',
          'post.body' => '内容',
        ];
    }
    
    public function messages() 
    {
        $requiredMessage = ':attributeは必須項目です。';
        $stringMessage = ':attributeは文字列を入力してください。';
        $maxMessage = ':attributeは:max文字以内で入力したください。';
        
        return [
            'post.title.required' => $requiredMessage,
            'post.body.required' => $requiredMessage,
            'post.title.string' => $stringMessage,
            'post.body.strin' => $stringMessage,
            'post.title.max' => $maxMessage,
            'post.body.max' => $maxMessage,
        ];
    }
}
