<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/',function(){
	return view('welcome');
	});*/


Route::get('/','HomeController@index');
Route::get('/Practices',['middleware' => ['auth'],'uses' => 'PracticesController@index']);
Route::get('/editprofile',['middleware' => ['auth'],'uses' => 'UsersController@index']);
Auth::routes();
Route::get('editprofile/update/{id}', ['middleware' => ['auth'],'uses'=>'UsersController@update']);
Route::post('editprofile/update/{id}', ['middleware' => ['auth'],'uses'=>'UsersController@updateData']);

//Route::get('/home', 'HomeController@index');
Route::get('/crud', 'TestsController@index');
Route::get('/crud/add', 'TestsController@add');
Route::post('/crud', 'TestsController@store');
Route::get('crud/update/{id}', ['middleware' => ['auth'],'uses'=>'TestsController@update']);
Route::post('crud/update/{id}', ['middleware' => ['auth'],'uses'=>'TestsController@updateData']);
Route::get('crud/delete/{id}', ['middleware' => ['auth'],'uses'=>'TestsController@delete']);
Route::get('/Services', 'ServicesController@index');
Route::get('/Contactus', 'ContactusController@index');
Route::post('/Contactus', 'ContactusController@index');
Route::get('/Aboutus', 'AboutusController@index');
Route::get('/Home', 'HomeController@index');

/*Customer Controller Start*/
Route::get('/customer',['middleware' =>['auth'],'uses'=>'CustomerController@index']);
Route::get('/customer/add',['middleware' =>['auth'],'uses'=>'CustomerController@add']);
Route::post('/customer/add',['middleware' =>['auth'],'uses'=>'CustomerController@store']);
Route::get('customer/delete/{id}', ['middleware' => ['auth'],'uses'=>'CustomerController@delete']);
Route::get('customer/update/{id}', ['middleware' => ['auth'],'uses'=>'CustomerController@update']);
Route::post('customer/update/{id}', ['middleware' => ['auth'],'uses'=>'CustomerController@updateData']);
/*Customer End*/

//------------Books-------------------------//
Route::get('/book',['middleware' =>['auth'],'uses'=>'BooksController@index']);
Route::get('/book/add',['middleware' =>['auth'],'uses'=>'BooksController@add']);
Route::post('/book',['middleware' =>['auth'],'uses'=>'BooksController@store']);
Route::get('book/delete/{id}', ['middleware' => ['auth'],'uses'=>'BooksController@delete']);
Route::get('book/update/{id}', ['middleware' => ['auth'],'uses'=>'BooksController@update']);
Route::post('book/update/{id}', ['middleware' => ['auth'],'uses'=>'BooksController@updateData']);

/* Pmis Data Entry */
Route::get('/pmis',['middleware' =>['auth'],'uses'=>'PmisController@index']);
Route::get('/pmis/add',['middleware' =>['auth'],'uses'=>'PmisController@add']);
Route::post('/pmis',['middleware' =>['auth'],'uses'=>'PmisController@store']);
Route::get('/pmis/update/{id}',['middleware' =>['auth'],'uses' => 'PmisController@update']);
Route::post('pmis/update/{id}', ['middleware' => ['auth'],'uses'=>'PmisController@updateData']);
Route::get('pmis/delete/{id}', ['middleware' => ['auth'],'uses'=>'PmisController@delete']);

/* User Manegement Module */

Route::get('/modulelist',['middleware' =>['auth'],'uses'=>'ServicesController@modulelist']);
Route::get('/modulelist/add',['middleware' =>['auth'],'uses'=>'ServicesController@addmodule']);
Route::post('/modulelist',['middleware' =>['auth'],'uses'=>'ServicesController@store']);

Route::get('/usermanagement',['middleware' =>['auth'],'uses'=>'ServicesController@index']);
Route::get('/showmodulelist/{id}',['middleware' =>['auth'],'uses'=>'ServicesController@assignprivilage']);
Route::post('/showmodulelist/{id}',['middleware' =>['auth'],'uses'=>'ServicesController@assignprivilage']);

//-------------javaScript------------------//
Route::get('/javaScript',['middleware' =>['auth'],'uses'=>'JavaScriptController@index']);

// -------------cha management -------//
Route::get('/chamanagement',['middleware' =>['auth'],'uses'=>'ChamanagementController@index']);
Route::get('/chamanagement/add',['middleware' =>['auth'],'uses'=>'ChamanagementController@add']);

Route::post('/chamanagement',['middleware' =>['auth'],'uses'=>'ChamanagementController@store']);
Route::get('chamanagement/delete/{id}', ['middleware' => ['auth'],'uses'=>'ChamanagementController@delete']);
Route::get('/chamanagement/update/{id}',['middleware' =>['auth'],'uses'=>'ChamanagementController@update']);
Route::post('chamanagement/update/{id}', ['middleware' => ['auth'],'uses'=>'ChamanagementController@updateData']);