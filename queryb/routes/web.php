<?php

use App\Http\Controllers\retriveControler;
use App\Http\Controllers\AggregatesController;
use App\Http\Controllers\selectController;
use App\Http\Controllers\updateController;
use App\Http\Controllers\mergeController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\deleteController;
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


Route::get('/home',[retriveControler::class,'selectMultiColumn']);
Route::get('/agrr',[AggregatesController::class,'avgRow']);
Route::get('/select',[selectController::class,'multiColumnSelect']);






/*Route::get('/agg','AggregatesController@avgRow');


Route::get('/select','selectController@multiColumnSelect');


Route::get('/merge','mergeController@mergeData');

Route::get('/join','JoinController@RightJoinData');

Route::get('/insert','InsertController@insertRow');


Route::get('/delete','deleteController@onDelete');

Route::get('/update','updateController@onUpdate');*/
