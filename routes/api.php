<?php

use Illuminate\Http\Request;
use Spatie\HttpLogger\Middlewares\HttpLogger;

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

Route::get('/users', 'Api\UsersController@index')
    ->middleware(['auth:api'])
    ->name('api.users.index');

Route::get('/observations', 'Api\ObservationsController@index')
    ->middleware(['auth:api'])
    ->middleware(HttpLogger::class)
    ->name('api.observations.index');

Route::get('/observations/{id}', 'Api\ObservationsController@show')
    ->middleware(['auth:api'])
    ->middleware(HttpLogger::class)
    ->name('api.observations.show');

Route::get('/capabilitystatement', 'Api\CapabilityStatementController@index')
    ->middleware(['auth:api'])
    ->middleware(HttpLogger::class)
    ->name('api.capabilitystatement.index');
