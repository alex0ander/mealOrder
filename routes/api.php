<?php

use App\Http\Controllers\TryController;
use App\Http\Controllers\UserController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('TryController' , [TryController::class , 'TryController']);
Route::get('UserCreate' , [UserController::class , 'create']);
Route::get('UserList' , [UserController::class , 'list']);
Route::get('UserBanned/{id}' , [UserController::class , 'banned']);
Route::get('UserUnBanned/{id}' , [UserController::class , 'unbanned']);