<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookValidation;
use App\Book;
use App\User;
use Session;
use Auth;


class BooksController extends Controller
{
     public function index()
    {
       if(!empty(Auth::user())){
        $roleId = Auth::user()->role_id;
        }
         else{
            $roleId=0;
        }
    	$book = new Book;
    	$dataArr  = $book->all()
    						 ->toArray();
        $dataArr = Book::paginate();
    	return view('books.index',compact('dataArr'));
    }

        public function add()

        {
             if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }
        	return view('books.add');
        }

     public function store(BookValidation $request)
    {
         if(!empty(Auth::user())){
            $roleId = Auth::user()->role_id;
            } else {
                $roleId=0;
            }

        if ($request->isMethod('post')) 
        {
            $book = New Book;
            $book->book_name = $request->book_name;
            $book->category = $request->category;
            $book->summery = $request->summery;
            $book->profile_pic = $request->profile_pic;
            if(!empty($request->file('profile_pic'))) 
	            {
		            $avatar = uniqid();
		            $file = $request->file('profile_pic');
		            $filename = $file->getClientOriginalName();
		            $extension = $file->getClientOriginalExtension();
		            $destinationPath = base_path().'/public/img/book_file/';
		            $newFilename = $avatar.'.'.$extension;
                    $book->profile_pic = $newFilename;
		            $data['profile_pic'] = $newFilename;
		            $request ->file('profile_pic')->move($destinationPath, $newFilename);
		            $book->save();
		            Session::flash('success','Data has been saved successfully!');
		            return redirect('/book');
	        	}
    	}
    }

    public function update($id =null){
        if (!empty($id) ) {
           $roleId = Auth::user()->role_id;
        } else {
            $roleId = 0;
        }

        $bookTableData = New Book;
        $dataForView = $bookTableData->where( [ ['id',$id] ])->first()->toArray();

        return view('books.update',compact('id','dataForView'));

    }

     public function updateData($id=null, Request $request)
         {
            if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }

            $bookTableData = New Book;
            $data = $request->all();
            //dd($data);die;
            $update = $bookTableData->where([['id', $id]])->first();

            if(!empty($request->file('profile_pic'))) {
            $avatar = uniqid();
            $file = $request->file('profile_pic');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $destinationPath = base_path().'/public/img/book_file/';
            $newFilename = $avatar.'.'.$extension;
            $data['profile_pic'] = $newFilename;
            $request ->file('profile_pic')->move($destinationPath, $newFilename);

            
            }
            $update->update($data);

            Session::flash('success','Data has been updated successfully!');

            return redirect('/books');
        }

     public function delete($id=null,Request $request)
    {
        if (!empty($id)) {

            if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }  else {
                $roleId=0;
            }
            
           $book = New Book;
           $book = $book->find($id);
                       $book->delete();
            Session::flash('success','Data  has been delete successfully!'); 
            return redirect('/book');
        }
    }
    	
}
