<?php

namespace App\Http\Requests;

//use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;

class ContactusValidation extends Request
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
           'name' => 'required',
           'email' =>'required',
           'subject' =>'required',
           'body' =>'required',
        ];
    }

     public function messages()
    {   
        return [
        'name.required'     => ' Name is Required',
        'email.required'    => 'E-mail is Required',
        'subject.required'  => 'Subject is Required ',
        'body.required'     => 'body is Required',
       
        ];
    }
}
