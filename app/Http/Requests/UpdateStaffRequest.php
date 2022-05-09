<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStaffRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'staffGroup' => 'required',
            'name' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'CMND' => 'required',
            'email' => 'required',
            'address' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'staffGroup.required' => 'Vui lòng nhập nhóm nhân viên',
            'name.required' => 'Vui lòng nhập tên nhân viên',
            'birthday.required' => 'Vui lòng nhập ngày sinh ',
            'gender.required' => 'Vui lòng nhập giới tính',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'CMND.required' => 'Vui lòng nhập số chứng minh nhân dân',
            'email.required' => 'Vui lòng nhập email',
            'address.required' => 'Vui lòng nhập địa chỉ',


        ];
    }
}
