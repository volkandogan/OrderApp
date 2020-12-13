<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\OrderController;
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

/**Route for login API */
Route::post('login', [ApiController::class, 'login']);

/**Route for register API */
Route::post('register', [ApiController::class, 'register']);


Route::middleware('auth:api')->group(function () {

    Route::post('details', [ApiController::class, 'user_info']);

    /**Route for Order API */
    Route::post('order', [OrderController::class, 'store']);

    /**Route for Update Order API */
    Route::post('order', [OrderController::class, 'store']);
});
