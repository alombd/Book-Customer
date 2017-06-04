<?php

namespace App\Http\Requests;

//use Illuminate\Foundation\Http\Request;
use App\Http\Requests\Request;

class ModuleValidation extends Request
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
             'countroller_name' => 'required|max:255',
        ];
    }
    public function messages(){
      return  [
        'countroller_name.required'=>'Customer Name is Required'
       
        ];
    }
}
