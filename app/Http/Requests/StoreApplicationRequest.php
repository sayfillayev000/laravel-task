<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'subject' => 'required|max:255',
            'message' => 'required|max:255',
            'file_url' => 'file|nullable|mimes:png,jpg,jpeg,pdf',
        ];
    }
}
