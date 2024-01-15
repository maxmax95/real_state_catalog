<?php

use App\Http\Controllers\api\RealStateController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->namespace('api')->group(function(){ ///declarado que controllers usados aqui estarao no Api/

    Route::prefix('/real-states')->name('real_states.')->group(function(){

        Route::get('/', 'RealStateController@index')->name('index'); // api/v1/real-states
    });
});