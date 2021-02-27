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
Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    
    // ------------------------- DASHBOARD -------------------------
    Route::resource('/dashboard', 'User\UserDashboardController');

    // ------------------------- CUSTOMERS -------------------------
    Route::resource('/add-customers', 'User\AddCustomerController');
    Route::resource('/manage-customers', 'User\ManageCustomerController');

    // ------------------------- SUPPLIERS -------------------------
    Route::resource('/add-suppliers', 'User\AddSupplierController');
    Route::resource('/manage-suppliers', 'User\ManageSupplierController');

    // ------------------------- MANAGE USER -------------------------
    Route::resource('/manage-users', 'User\ManageUserController');

    // ------------------------- DEPENDENT DROPDOWN -------------------------
    Route::get('cities', 'User\CityController@index')
        ->name('cities.index');
    Route::get('states', 'User\StateController@index')
        ->name('states.index');

});



