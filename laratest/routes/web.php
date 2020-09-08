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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', ['uses'=>'LoginController@verify']);




Route::middleware(['sess'])->group(function(){

	Route::get('/home', 'HomeController@index')->name('home');

	//Route::group(['middleware'=>['type']], function(){
		Route::get('/home/createEmp', 'HomeController@create');
        Route::post('/home/createEmp', 'HomeController@store');
		/*Route::get('/admin/edit/{id}', 'HomeController@edit')->name('home.edit');
		Route::post('/admin/edit/{id}', 'HomeController@update');
		Route::get('/home/delete/{id}', 'HomeController@delete')->name('home.delete');
		Route::post('/home/delete/{id}', 'HomeController@destroy');*/
	});
	
