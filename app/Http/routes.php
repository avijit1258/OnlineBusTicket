<?php




    
	Route::get('/', function () {
	    return view('home.welcome');
	});
	Route::get('/places', 'PlaceController@index');

	Route::post('/places', 'PlaceController@store' );

	Route::get('/admin/routes', 'AdminRouteController@input');
	Route::post('/adding_routes', 'AdminRouteController@store');

	Route::get('/admin/company', function(){
	    return view('admin.adding_company');
	});
	Route::post('/admin/company', 'CompanyController@store');

	Route::get('/admin/all_companies', 'CompanyController@index');

	Route::get('/admin/all_routes', 'AdminRouteController@index');

	Route::get('/route/edit/{{$id}}','AdminRouteController@update');

	Route::post('/route/edit/{{$id}}','AdminRouteController@update');

Route::group(['middleware' => ['web']], function () {
    //

});
