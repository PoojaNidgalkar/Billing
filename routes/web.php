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
Route::get('/login', 'HomeController@login');
Route::get('/signup', 'HomeController@signup');
Route::get('/logo', 'HomeController@logo');
Route::get('/dashboard', 'HomeController@dashboard');
// Route::get('/clients', 'HomeController@clients');
Route::get('/view', 'HomeController@view');
Route::get('/edit', 'HomeController@edit');
Route::get('/newquote', 'HomeController@newquote');
Route::get('/quotation', 'HomeController@quotation');
Route::get('/viewquote', 'HomeController@viewquote');
Route::get('/editquote', 'HomeController@editquote');
Route::get('/bill', 'HomeController@bill');
Route::get('/billlist', 'HomeController@billlist');
Route::get('/viewbill', 'HomeController@viewbill');
Route::get('/editbill', 'HomeController@editbill');
Route::get('/payment', 'HomeController@payment');
Route::get('/cheque', 'HomeController@cheque');
Route::get('/status', 'HomeController@status');
Route::get('/cash', 'HomeController@cash');
Route::get('/debitcard', 'HomeController@debitcard');
Route::get('/creditcard', 'HomeController@creditcard');
Route::get('/welcome', 'HomeController@welcome');

Route::resource('clients', 'ClientController');
Route::post('views/editt','ClientController@editt');




Route::resource('quotes', 'QtController');
Route::post('/quotes','QtController@store');




Route::resource('bills', 'BillController');



























Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
