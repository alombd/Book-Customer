<?php

namespace App\Http\Requests;

//use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;

class ProfileValidation extends Request
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
            
            'user_name' => 'required|max:255|alpha_num|unique:users',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone_number' => 'required|min:11|numeric',
            'present_address' => '',
            'permanent_address' => '',
            'dob' => '',
        ];
    }

    public function messages(){
        return [
      'user_name.required' => 'User Name is Required',
        'first_name.required' => 'First Name is Required',
        'last_name.required' => 'Last Name is Required',
        'last_name.required' => 'Last Name is Required',
        'present_address.required' => 'Present Address is Required',
        'permanent_address.required' => 'Permanent Address is Required',
        'dob.required' => 'Date of Birth is Required',
        ];
    }
}
