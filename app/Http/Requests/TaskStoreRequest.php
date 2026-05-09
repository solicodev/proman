<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class TaskStoreRequest extends FormRequest
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
            'project_id' => 'nullable|exists:projects,id',
            'manager_id' => 'nullable|exists:users,id',
            'user_id' => 'nullable|exists:users,id',
            'manager_check' => 'nullable',
            'title' => 'required|string',
            'description' => 'nullable|string',
            'duration' => 'required|integer',
            'duration_type' => 'required|in:minute,hours,day,week,month,year',
//            'end_date' => 'required|date',
//            'start_date' => 'required|date',
            'watcher_id' => 'nullable|exists:users,id',
            'members*' => 'required|array',
            'task_id*' => 'nullable|array',
            'relation_type*' => 'nullable|array',
            'implementeunit_id' => 'nullable|exists:implemente_units,id',
            'daily_hours' => 'nullable',
            'planned_hours' => 'nullable',
            'estimated_hours' => 'nullable',

        ];
    }
    public function messages() : array
    {
        return [
            'title.required' => 'وارد کردن نام تسک الزامی است',
//            'start_date.required' => 'زمان شروع تسک را تعیین کنید',
//            'end_date.required' => 'زمان پایان تسک را تعیین کنید',
            'members.required' => 'اعضای تسک را انتخاب کنید',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(redirect()->back()->withErrors($validator)->withInput());
    }
}
