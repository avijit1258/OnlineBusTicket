<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/places', 'BusController@indexPlace');

Route::post('/places', 'BusController@storePlace' );

Route::get('/admin/routes', function(){
    return view('admin.adding_routes');
});
Route::post('/adding_routes', 'BusController@storeRoutes');

Route::get('/admin/company', function(){
    return view('admin.adding_company');
});
Route::post('/admin/company', 'BusController@storeCompany');

Route::get('/admin/all_routes', 'BusController@indexAllRoutes');

Route::get('/route/edit/{{$id}}','BusController@updateAllRoutes');

Route::post('/route/edit/{{$id}}','BusController@updateAllRoutes');

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

Route::group(['middleware' => ['web']], function () {
    //
});
