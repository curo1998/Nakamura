<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DisplayController;

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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/login',[DisplayController::class,'login']);
//Route::get('/login','DisplayController@login');
Route::get('/signup',[DisplayController::class,'signup']);
Route::get('/signup_conf',[DisplayController::class,'signup_conf']);
Route::get('/signup_comp',[DisplayController::class,'signup_comp']);
Route::get('/pwd_reset',[DisplayController::class,'pwd_reset']);
Route::get('/pwd_form', [DisplayController::class, 'pwd_form']);
Route::get('/pwd_comp', [DisplayController::class, 'pwd_comp']);
Route::get('/main', [DisplayController::class, 'main']);
Route::get('/forum', [DisplayController::class, 'forum']);
Route::get('/user_profile', [DisplayController::class, 'user_profile']);
Route::get('/user_edit', [DisplayController::class, 'user_edit']);
Route::get('/user_edit_conf', [DisplayController::class, 'user_edit_conf']);
Route::get('/user_delete_conf', [DisplayController::class, 'user_delete_conf']);


