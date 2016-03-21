<?php
 
use App\Http\Controllers\Admin;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses' => 'HomeController@index', 'as => home']);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    
    Route::auth();

    Route::get('/admin', 'Admin\AdminController@index');
    Route::get('/admin/edit/{id}', ['as => edit', 'uses' => 'Admin\AdminController@edit']);
    Route::get('/admin/del/{id}', ['as => del', 'uses' => 'Admin\AdminController@del']);
});
