<?php

namespace App\Http\Requests;

//use Illuminate\Foundation\Http\Request;
use App\Http\Requests\Request;


class BookValidation extends Request
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
           'book_name' => 'required|max:255',
           'category' => 'required|max:255',
           'summery' => 'required|max:255',
        ];
    }

    public function messages(){
        return [
            'book_name.required' => 'Book Name is Required',
            'category.required' => 'Category Name is Required',
            'summery.required' => 'Books Summery is Required',
        ];
    }
}
