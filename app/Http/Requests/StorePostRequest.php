<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3',
            'description' => 'required|min:10',
            'posted_by' => 'required|exists:users,id',
        ];
    }
    public function message(): array
    {
        return [
            'title.required' => 'Title is required',
            'title.min' => 'Title must be at least 3 characters',
            'description.required' => 'Description is required',
            'description.min' => 'Description must be at least 10 characters',
            'posted_by.required' => 'User is required',
            'posted_by.exists' => 'User does not exist',
        ];
    }
}
