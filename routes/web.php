<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadingsController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FrontendController;
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
})->name('landing');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');



//Resourceful routes
Route::resource('readings', ReadingsController::class);
//Route::get('/export-excel',[EmployeeController::class,'exportIntoExcel'])->name('excel.dl');
//Route::get('/export-csv',[EmployeeController::class,'exportIntoCSV'])->name('csv.dl');
Route::get('/add-employee',[EmployeeController::class,'addEmployee']);
Route::get('/export-excel',[ReadingsController::class,'exportReadingsIntoExcel'])->name('excel.dl');
Route::get('/export-csv',[ReadingsController::class,'exportReadingsIntoCSV'])->name('csv.dl');
Route::get('/reading2', 'App\Http\Controllers\ReadingsController@index2')->name('reading2');
Route::get('/live',[FrontendController::class,'live'])->name('view.live');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});



