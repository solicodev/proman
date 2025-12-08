<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProjectStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'description' => 'nullable',
            'start_date' => 'required',
            'end_date' => 'nullable',
            'manager_id' => 'nullable',
            'category_id' => 'nullable',
            'members *' => 'required',
            'department_id' => 'required',
            'brand_id' => 'nullable',
            'inform' => 'nullable',
        ];
    }

    public function messages() : array
    {
        return [
            'name.required' => 'وارد کردن نام پروژه الزامی است',
            'start_date.required' => 'زمان شروع پروژه را تعیین کنید',
//            'end_date.required' => 'زمان پایان پروژه را تعیین کنید',
//            'category_id.required' => 'دسته بندی پروژه را انتخاب کنید',
            'department_id.required' => 'دپارتمان را انتخاب کنید',
            'members.required' => 'اعضای پروژه را انتخاب کنید',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(redirect()->back()->withErrors($validator)->withInput());
    }
}
