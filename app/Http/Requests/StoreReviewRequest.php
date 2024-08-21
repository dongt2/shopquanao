<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'comment' => 'required|string',
            'rating' => 'required|integer|between:1,5',
        ];
    }

    public function messages()
    {
        return [
            'comment.required' => 'Đánh giá là bắt buộc.',
            'rating.required' => 'Xếp hạng là bắt buộc.',
            'rating.between' => 'Xếp hạng phải từ 1 đến 5.',
        ];
    }
}
