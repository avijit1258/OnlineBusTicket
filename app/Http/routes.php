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
    /*
    Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

	*/

    
	Route::get('/', 'AdminRouteController@searchRoutes');
	
	Route::get('/places', 'PlaceController@index');

	Route::post('/places', 'PlaceController@store' );

	Route::get('/admin/bus', 'BusController@index');
	

	Route::get('/admin/bus_type', 'BusTypeController@index');
	Route::post('/admin/bus_type', 'BusTypeController@store');


	Route::get('/admin/routes', 'AdminRouteController@input');
	Route::post('/adding_routes', 'AdminRouteController@store');

	Route::get('/admin/company', function(){
	    return view('admin.adding_company');
	});
	Route::post('/admin/company', 'CompanyController@store');


    Route::get('/home', 'HomeController@index');
    
	Route::get('/admin/all_companies', 'CompanyController@index');

	Route::get('/admin/all_routes', 'AdminRouteController@index');

	Route::get('/route/edit/{{$id}}','AdminRouteController@update');

	Route::post('/route/edit/{{$id}}','AdminRouteController@update');
	Route::auth();

}	