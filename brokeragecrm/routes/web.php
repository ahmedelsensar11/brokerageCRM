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

Auth::routes();


//authentication middleware
Route::group(['middleware' => ['auth']], function () {

    //home
    Route::get('/home', 'HomeController@index')->name('home');
    //add new customer
    Route::get('/customer/new', 'CustomerController@create');
    Route::post('/customer/store', 'CustomerController@store');
    //show customer details
    Route::get('/customer/show/{id}', 'CustomerController@show');


    //admins middleware
    Route::group(['middleware' => ['IsAdmin']], function () {

        //admin
        Route::get('/admin/customers', 'AdminController@index');
        Route::get('/admin/actions', 'ActionController@viewAllActions');
        //new employee
        Route::get('/employee/new', 'EmployeeController@create');
        Route::post('/employee/store', 'EmployeeController@store');
        //customers
        Route::get('/customer/assign/{id}', 'CustomerController@edit'); 
        Route::post('/customer/update/{id}', 'CustomerController@update');
        
    });
    //employees middleware
    Route::group(['middleware' => ['IsEmployee']], function () {

        //employees
        Route::get('/employee/addAction/{id}', 'ActionController@getAction'); 
        Route::post('/employee/recordAction/{id}', 'ActionController@recordNewAction');
        //employees [show customers and actions]
        Route::get('/employee/customers', 'EmployeeController@index');
        Route::get('/employee/actions', 'EmployeeController@viewMyAction');
        
    });
    Route::get('/notAuth', 'HomeController@notAuth');

});

