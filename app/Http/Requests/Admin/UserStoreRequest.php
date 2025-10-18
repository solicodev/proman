<?php

namespace App\Http\Requests\Admin;

use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserStoreRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'email' => ['required', 'email', 'string', 'max:255'],
            'password' => ['required', 'string'],
            'personal_id' =>['required', 'max:255', 'unique:'.User::class],
            'position_id' => ['required', 'integer', 'max:255'],
            'role_id' => 'nullable',
//            'permission_id' => 'nullable',
        ];
    }

    public function messages() : array
    {
        return [
            'first_name.required' => 'نام کاربر اجباری است',
            'last_name.required' => 'نام خانوادگی کاربر اجباری است',
            'mobile.required' => 'شماره موبایل کاربر اجباری است',
            'mobile.unique' => 'شماره موبایل نمیتواند تکراری باشد',
            'email.required' => 'آدرس ایمیل را وارد کنید',
            'password.required' => 'رمزعبور را وارد کنید',
            'personal_id.required' => 'کد پرسنلی را وارد کنید',
            'personal_id.unique' => 'کد پرسنلی نمیتواند تکراری باشد',
            'position_id.required' => 'پوزیشن شغلی را وارد کنید',
        ];
    }
//    public function all($keys = null):array
//    {
//        dd(request()->validate($this->rules(),$this->messages()));
//        return request()->validate($this->rules(),$this->messages());
//    }
    public function failedValidation(Validator $validator)
    {
//        if ($validator->fails()) {
//            return redirect()->back()->withInput()->withErrors($validator->messages());
//        }
//        return redirect()->back()->withErrors($validator)->withInput();
        throw new HttpResponseException(redirect()->back()->withErrors($validator->messages())->withInput());
    }
}
