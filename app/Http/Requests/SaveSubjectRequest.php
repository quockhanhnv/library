<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveSubjectRequest extends FormRequest
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
            'subjects_name' => 'required|string|unique:classes,classes_name,'.$this->id.',id',
            'subjects_credits' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'subjects_name.required'                => 'Vui lòng nhập tên môn học !',
            'subjects_name.unique'                  => 'Tên môn học đã tồn tại !',
            'subjects_credits.required'    => 'Vui lòng nhập số tín chỉ ! ',
        ];
    }
}
