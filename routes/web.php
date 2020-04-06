<?php

use Illuminate\Support\Facades\Route;

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
//for index page
// Route::view('/index','index');
// Route::post('/index1','index@submit');
// //for register page
// Route::view('/register','register');
// Route::post('/register1','register1@submit1');
// //LINK register page with index page
// Route::get('/login',function(){
// 	return view('index');
// });
// //LINK index page with register page
// Route::get('/register',function(){
// 	return view('register');
// });


// Route::get('/add1',function(){ Yeh shyd aab use main nhi ayega check kr lena
// 	return view('addexpense');
// });
// Route::get('/manage',function(){
// 	return view('ManageExpense\manageexpense');
// });
// Route::get('/day',function(){
// 	return view('daywisereport');
// });
// Route::get('/month',function(){
// 	return view('monthwisereport');
// });
// Route::get('/year',function(){
// 	return view('yearwisereport');
// });
// Route::get('/daydetail',function(){
// 	return view('daywisereportdetail');
// });
// Route::get('/monthdetail',function(){
// 	return view('monthwisereportdetail');
// });
// Route::get('/yeardetail',function(){
// 	return view('yearwisereportdetail');
// });

Route::resource('Add','AddController');
Route::resource('Report','ReportController');

