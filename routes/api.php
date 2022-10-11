<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource( '/tarea', 'TareaController');
Route::get( '/tarea-activate', 'TareaController@activate');
Route::get( '/tarea-desactivate', 'TareaController@desactivate');
Route::put( '/tarea-update-status/{id}', 'TareaController@updateStatus');