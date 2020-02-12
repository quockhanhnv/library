<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class SavePracticeRoomRequest extends FormRequest
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
            'practicerooms_name'             => [
                'required',
                Rule::unique('practicerooms')->ignore($this->id),
            ],
            'practicerooms_computer_numbers'              => 'required',
        ];
    }
    public function messages()
    {
        return [
            'practicerooms_name.required'                => 'Vui lòng nhập tên',
            'practicerooms_name.unique'                  => 'Tên phòng máy đã tồn tại !',
            'practicerooms_computer_numbers.required'    => 'Vui lòng nhập số lượng máy ',
        ];
    }
}
