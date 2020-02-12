<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveMajorRequest extends FormRequest
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
    //          'majors_name' => [
    //             'required',
    //             Rule::unique('majors')->ignore($this->id, 'majors_id'),
    // ],
            'majors_name' => 'required|unique:majors,majors_name,'.$this->id.',majors_id',
            'majors_detail' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'majors_name.required' => 'Vui lòng nhập tên chuyên ngành !',
            'majors_name.unique' => 'Tên chuyên nghành đã tồn tại !',
            'majors_detail.required' => 'Vui lòng nhập mô tả !'
        ];
    }
}
