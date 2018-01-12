<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;

class RegisterRequest extends FormRequest
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
            'username' => 'required|string|max:50|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'name' => 'required|',
            'phonenumber' => 'required|numeric'
        ];
    }

    public function messages() {
        return [
            'username.required' => 'Bạn chưa điền tài khoản!',
            'username.max' => 'Tài khoản không được quá 50 kí tự!',
            'username.unique' => 'Tài khoản đã tồn tại',
            'email.required' => 'Bạn chưa điền E-mail!',
            'email.email' => 'Địa chỉ E-mail không hợp lệ!',
            'email.unique' => 'Địa chỉ E-mail đã tồn tại!',
            'password.required' => 'Bạn chưa nhập mật khẩu!',
            'password.min' => 'Mật khẩu phải có hơn 6 kí tự!',
            'password.confirmed' => 'Mật khẩu không trùng khớp!',
            'name.required' => 'Bạn chưa điền tên!',
            'phonenumber.required' => 'Bạn chưa điền số điện thoại!',
            'phonenumber.numeric' => 'Bạn không được nhập chữ!'
        ];
    }
}
