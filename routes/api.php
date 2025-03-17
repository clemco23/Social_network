<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

route::get('/users', [UserController::class, 'index']);
route::post('/users/register', [UserController::class, 'register']);
route::patch('/users/{id}', [UserController::class, 'update']);
route::post('/users/login', [UserController::class, 'login']);

Route::middleware('auth:sanctum')->get('/me', [UserController::class, 'me']);
Route::middleware('auth:sanctum')->post('/users/logout', [UserController::class, 'logout']);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
