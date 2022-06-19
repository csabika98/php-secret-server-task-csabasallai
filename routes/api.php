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

// get api for fetch secrets
Route::get('/secret/{hash?}', [\App\Http\Controllers\secretController::class,'showSecret']);
// post api for create secrets
Route::post('/secret', [\App\Http\Controllers\secretController::class,'createSecret']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
