<?php

namespace App\Http\Requests;

//use Illuminate\Foundation\Http\Request;
use App\Http\Requests\Request;

class ChamanagementValidation extends Request
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
            'cha_number' => 'required|numeric|min:1',
            'credit_name' =>'required|max:255',
            'debtor_name' => 'required|max:255'
        ];
    }

     public function messages()
    {   
        return [
        'cha_number.required'  => 'Cha/Coffe Number is Required',
        'cha_number.numeric'   => 'Please Type Number',
        'cha_number.min'       => 'Minimum 1 Cup Cha/Coffe',
        'credit_name.required' => 'Credit Creditor Name is Required ',
        'debtor_name.required' => 'Debtor Creditor Name is Required',
       
        ];
    }
}
