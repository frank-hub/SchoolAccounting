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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('students/view','StudentsController@index');

    Route::get('student/group','GroupsController@index');
    Route::get('accounting/school_fee','FeeController@index');
    Route::get('accounting/fee_type','FeeTypeController@index');
    Route::get('accounting/invoice','InvoiceController@index');
    Route::get('accounting/invoice/add','InvoiceController@create');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/edit/{id}','InvoiceController@update');
Route::post('/pay/{id}','InvoiceController@payment');

Route::resource('students', 'StudentsController');
Route::resource('fee_type', 'FeeTypeController');
Route::resource('invoices', 'InvoiceController');
Route::resource('groups', 'GroupsController');
Route::resource('fee_payment', 'FeeController');
