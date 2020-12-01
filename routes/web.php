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
Route::get('/', "App\Http\Controllers\StaffController@index");

Route::get('create', 'App\Http\Controllers\StaffController@create');
Route::post('submit', 'App\Http\Controllers\StaffController@store');

Route::get('update', "App\Http\Controllers\StaffController@edit");
Route::post('commit_update', "App\Http\Controllers\StaffController@update");

Route::get('delete', "App\Http\Controllers\StaffController@showdestroy");
Route::delete('delete_user', "App\Http\Controllers\StaffController@destroy");

Route::get("test", function (){
    return view("test");
});
