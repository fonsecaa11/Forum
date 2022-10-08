<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules(): array
    {
        return [

            'name' => ['required', 'unique:users'],
            'email' => ['required', 'email', 'min:8' ,'max:254', 'unique:users'],
            'password' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
