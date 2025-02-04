<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class JobRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'company_id' => ['required', 'numeric', Rule::exists('companies', 'id')],
            'name' => ['required', 'string', 'max:255'],
            'salary' => ['required', 'string', 'max:255'],
        ];
    }

    protected function prepareForValidation()
    {
        if(auth()->user()->is_company_admin) {
            $this->merge([
                'company_id' => auth()->user()->company_id,
            ]);
        }
    }
}
