<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\hellomiddleware;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\BoardController;
use App\Models\Board;
use App\Http\Controllers\RestappController;
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

//#First Route method – Root URL will match this method
// Route::get('/', function () {
//  return view('welcome');
// });

// //#Second Route method – Root URL with ID will match this method
// Route::get('ID/{id}',function($id){
// echo 'ID: '.$id;
// });
// //#Third Route method – Root URL with or without name will match this method
// Route::get('/user/{name?}',function($name = 'Ayushi'){
// echo "Name: ".$name;
// });


//#Fourth Route method- For Displaying message.
// Route::get('hello/{msg?}',function($msg='no message.'){
//     echo 'MSG: '.$msg;
//     });
 
//#Controller For Page Connection.
// Route::get('hello','App\Http\Controllers\hellocontroller@index');
// Route::get('hello/other','App\Http\Controllers\hellocontroller@other');

//#For Request&Response
 //Route::get('hello','App\Http\Controllers\hellocontroller@hello');

 //#for PHP-templates
 // Route::get('hello',function(){
 //return view ('hello.index');
 //});

//#for calling template through controller or using Query String.
//Route::get('hello','App\Http\Controllers\hellocontroller@index');

//#for passing route parameter in templates.
//Route::get('hello/{id}','App\Http\Controllers\hellocontroller@index');

//#Form-Creation And Validation USER
Route::get('/hello','App\Http\Controllers\hellocontroller@index');
Route::post('/hello','App\Http\Controllers\hellocontroller@post');

//#for middleware routing
//Route::get('hello','App\Http\Controllers\hellocontroller@index')
//->middleware(hellomiddleware::class);

//#for Updating database
Route::get('hello/edit','App\Http\Controllers\hellocontroller@edit');
Route::post('hello/edit','App\Http\Controllers\hellocontroller@update');

//#for Database add,create,insert
Route::get('/hello/add','App\Http\Controllers\hellocontroller@add');
Route::post('/hello/add','App\Http\Controllers\hellocontroller@create');

//#for deleting data from database
Route::get('hello/del','App\Http\Controllers\hellocontroller@del');
Route::post('hello/del','App\Http\Controllers\hellocontroller@remove');

#FOR SHOWING specific DATABASE with ID
Route::get('hello/show','App\Http\Controllers\hellocontroller@show');

// //#FOR ELOQUENT ORM MODEL
Route::get('/person','App\Http\Controllers\PersonController@index');

// //#FOR FINDING IN ELOQUENT MODEL BY ID
Route::get('/person/find','App\Http\Controllers\PersonController@find');
Route::post('/person/find','App\Http\Controllers\PersonController@search');

// //#FOR ADDING IN ELOQUENT MODEL
Route::get('person/add','App\Http\Controllers\PersonController@add');
Route::post('/person/add','App\Http\Controllers\PersonController@create');

// //#FOR EDITING IN ELOQUENT MODEL
Route::get('person/edit','App\Http\Controllers\PersonController@edit');
Route::post('/person/edit','App\Http\Controllers\PersonController@update');

// //#FOR DELETING IN ELOQUENT MODEL
Route::get('person/del','App\Http\Controllers\PersonController@delete');
Route::post('/person/del','App\Http\Controllers\PersonController@remove');

// //#FOR VIEWING BOARD FUNCTION
Route::get('/board','App\Http\Controllers\BoardController@index');

// //#FOR ADDING IN BOARD
Route::get('board/add','App\Http\Controllers\BoardController@add');
Route::post('board/add','App\Http\Controllers\BoardController@create');


// //#For Restful
Route::resource('rest','App\Http\Controllers\RestappController');
Route::get('hello/rest','App\Http\Controllers\HelloController@rest');

// //#FOR SESSION BTW CLIENT AND SERVER
 Route::get('hello/session','App\Http\Controllers\HelloController@ses_get'); 
 Route::post('hello/session','App\Http\Controllers\HelloController@ses_put'); 

 
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
 
 Route::get('/', function () {
     return view('welcome');
 });
 
 Route::get('/dashboard', function () {
     return view('dashboard');
 })->middleware(['auth'])->name('dashboard');
 
 require __DIR__.'/auth.php';

 Route::get('hello/auth','App\Http\Controllers\HelloController@getAuth');
 Route::post('hello/auth','App\Http\Controllers\HelloController@postAuth');


 //Route::get('hello','App\Http\Controllers\HelloController@index')->middleware('auth');