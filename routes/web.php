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
})->name('home');
Route::group(['middleware'=>'userCheck'],function(){
    Route::get('/employees', 'EmployeeController@index')->name('employees.index');
    Route::get('/employees/{id}/edit','EmployeeController@edit')->name('employees.edit');
    Route::get('/employees/{id}/delete','EmployeeController@destroy')->name('employees.destroy');
    Route::get('/create','EmployeeController@create')->name('employees.create');
    Route::post('/create','EmployeeController@store')->name('employees.store');
    Route::post('/employees/update','EmployeeController@update')->name('employees.update');
    Route::get('/logout','LoginController@logout');
});

Route::get('/register','RegisterController@show')->name('user.register.show');
Route::post('/register','RegisterController@register')->name('user.register');
Route::get('/login','LoginController@show')->name('user.login.show');
Route::post('/login','LoginController@login')->name('user.login');


