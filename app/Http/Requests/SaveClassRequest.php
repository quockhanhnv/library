<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveClassRequest extends FormRequest
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
            'classes_name' => 'required|string|unique:classes,classes_name,'.$this->id.',id',
            'classes_student_numbers' => 'required',
            'classes_course' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'classes_name.required' => 'Vui lòng nhập tên lớp !',
            'classes_name.unique'   => 'Tên lớp đã tồn tại !',
            'classes_name.string'   => 'Tên lớp phải là chuỗi !',
            'classes_student_numbers.required' => 'Vui lòng nhập sĩ số !',
            'classes_course.required'   => 'Vui lòng nhập khóa !',
        ];
    }
}
