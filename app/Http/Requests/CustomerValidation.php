<?php

namespace App\Http\Requests;

//use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;

class CustomerValidation extends Request
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
       /* |regex:/^[a-zA-Z]*$/*/
            'customer_name' => 'required|max:255',
            'phone' =>'required|min:11',
            'email' => 'required|email|max:255|unique:customers'
        ];

    }

    public function messages()
    {   
        return [
        'customer_name.required'=>'Customer Name is Required',
        'customer_name.regex' => 'Only letters and white space allowed',
        'phone.required'=>'Phone Name is Required ',
        'phone.min'              => 'Minimum 11 Characters Required',
        'email.required'         => 'E-mail is Required',
        'email.unique'           => 'E-mail Address Should be Unique',
        ];
    }
}
