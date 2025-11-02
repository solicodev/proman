<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SubTaskStoreRequest extends FormRequest
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
            'sub_manager_id' => 'nullable|exists:users,id',
            'sub_manager_check' => 'nullable',
            'title' => 'required|string',
            'description' => 'nullable',
            'duration' => 'required|integer',
            'start_date' => 'required',
            'watcher_id' => 'required|exists:users,id',
            'members*' => 'required|array',
        ];
    }
    public function messages() : array
    {
        return [
            'title.required' => 'وارد کردن نام تسک الزامی است',
            'start_date.required' => 'زمان شروع تسک را تعیین کنید',
            'duration.required' => 'زمان پایان تسک را تعیین کنید',
            'watcher_id.required' => 'دپارتمان را انتخاب کنید',
            'members.required' => 'اعضای تسک را انتخاب کنید',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(redirect()->back()->withErrors($validator)->withInput());
    }

}
