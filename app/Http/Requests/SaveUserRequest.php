<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'             => [
                'required',
                'email',
                Rule::unique('users')->ignore($this->id),
            ],
            'name'              => 'required',
            'password'          => 'required',
            'confirmpassword'   => 'required|same:password',

        ];
    }
    public function messages()
    {
        return [
            'email.required'                => 'Vui lòng nhập email',
            'email.unique'                  => 'Email đã tồn tại !',
            'email.email'                   => 'Email chưa đúng định dạng',
            'name.required'                 => 'Vui lòng nhập tên',
            'password.required'             => 'Vui lòng nhập mật khẩu',
            'confirmpassword.required'      => 'Vui lòng xác nhận mật khẩu',
            'confirmpassword.same' => "Xác nhận mật khẩu không khớp",

        ];
    }
}
