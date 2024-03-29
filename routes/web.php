<?php

use App\Http\Controllers\PagesController;
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
*/
Route::get('/','PagesController@index');
Route::get('/About','PagesController@about');
Route::get('/Services','PagesController@services');
Route::get('/CreatePoll','PagesController@createpoll');
Route::get('/SubmitPoll','PagesController@submitpoll');
Route::get('/SubmitCreatePoll','VoteController@store');
Route::get('/SearchPoll','PagesController@SearchPoll');
Route::get('/Cast/{Poll_Id}/','VoteController@show');
