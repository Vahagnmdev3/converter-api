<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group([
    'prefix' => '/v1'
], function() {
    Route::get('/help', [\App\Http\Controllers\Api\HelpController::class, 'index']);

    Route::get('/convert', [\App\Http\Controllers\Api\ConverterController::class, 'convert']);

    Route::get('/currencies', [\App\Http\Controllers\Api\ConverterController::class, 'currencies']);
});
