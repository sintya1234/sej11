<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\ProfileController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\ProjectController;
// use App\Http\Controllers\Auth\RegisterController;
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


Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
Route::post('refresh', [LoginController::class, 'refresh']);
 
 
 
// Route::post('register', [RegisterController::class, 'register']);
 
 
Route::group(['middleware' => 'auth:api'], function(){ //dalam middleware di postmant headers ditambah authorization
 //   Route::apiResource('courses', CourseController::class);
  //  Route::apiResource('projects', ProjectController::class);
  //   Route::apiResource('users', ProfileController::class);
   // Route::post('logout', [LoginController::class, 'logout']);
});

//Route::post('/register',[AuthController::class, 'register']);
//Route::post('/login',[AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
