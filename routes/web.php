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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
  $user=factory('App\User')->create();
  $roles=App\Role::all();
  $user->roles()->attach($roles);
});*/


Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('stat', 'ChartController@getDonMOI');
Route::get('statistics', 'StatisticsController@index')->name('statistics');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UserController', ['except' => ['show']]);
    Route::get('patients/search', 'PatientsController@search');
    Route::resource('patients' , 'PatientsController');
    Route::get('accouchements/search', 'AccouchementsController@search');
    Route::resource('accouchements' , 'AccouchementsController');
    Route::get('naissances/search', 'NaissancesController@search');
    Route::resource('naissances' , 'NaissancesController');
    Route::get('hopitals/search', 'HopitalsController@search');
    Route::resource('hopitals' , 'HopitalsController');
   // Route::get('search', ['as' => 'patients.search', 'uses' => 'PatientsController@search']);
   Route::post('editRole/{id}', ['as' => 'users.update_role', 'uses' => 'UserController@update_role']);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
  Route::get('wilaya/{id}','WillayaController@show')->name('wilayaSt');
  Route::get('departements/{id}','DepartementsController@show')->name('departementsHp');

Route::group(['middleware' => 'can:admin|medecin|agent_du_minister'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
});




