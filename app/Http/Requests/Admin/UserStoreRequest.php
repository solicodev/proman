<?php

namespace App\Http\Requests\Admin;

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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'personal_id' => 'required|string|max:255|unique:users',
            'position_id' => 'required|string|max:255',
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
    public function all($keys = null):array
    {
        dd(request()->validate($this->rules(),$this->messages()));
        return request()->validate($this->rules(),$this->messages());
    }
//    public function failedValidation(Validator $validator)
//    {
//        return redirect()->back()->withErrors($validator)->withInput();
////        throw new HttpResponseException(redirect()->back()->withErrors($validator)->withInput());
//    }
}
