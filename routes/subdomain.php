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

$controller_path = 'App\Http\Controllers';

// Main Page Route
Route::get('/', function(){
  return 'hey';
});
// Route::get('/signin',$controller_path.'\subdomain\AuthController@index');
Route::get('/signin',$controller_path.'\subdomain\AuthController@index');
