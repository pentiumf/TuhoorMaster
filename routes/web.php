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

use App\Prosection;
use App\Procategory;
use App\User;
use App\Professional;
use App\Country;
use App\Membership;
use App\Protype;

Route::get('/', function () {
    return view('home');
});

Route::get('/consultants', function () {
    $sec = Prosection::find(1);
    
    return $sec->category;
});

Route::get('/builders', function () {
    $sec = Prosection::find(2);
    
    return $sec->category;
});

Route::get('/services', function () {
    $sec = Prosection::find(3);
    
    return $sec->category;
});


Route::get('/role', function () {
    $sec = User::find(3);
    
    return $sec->role;
});


Route::get('/profiles', function () {
    $sec = User::find(1);
    
    return $sec->user;
});



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');




//Guest Route
Route::group(['middleware'=>'guest'], function() {
    
    Route::get('/guest', function () {
    
        return "This is the guest middleware";
    });

});



//Authenticated User Routes(dashboard)
Route::group(['middleware'=>'auth'], function() {
    
    Route::get('/test', function () {
    $sec = Professional::findOrFail(1);
    
        return $sec->category;
    });
    
    //User Professionals
    Route::get('dashboard', function() {
        return view('dashboard.index');
    });

    Route::resource('dashboard/professional', 'UserProfessionalController');

});








//Administrator Routes
Route::group(['middleware'=>'admin'], function() {
    Route::get('admin', function() {
	   return view('admin.index');
    });

	Route::resource('admin/users', 'AdminUsersController');
    Route::resource('admin/categories', 'AdminProfessionalsCategories');
    Route::resource('admin/professionals', 'AdminProfessionalsController');

});

























 